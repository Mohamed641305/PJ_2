<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt(array_merge($credentials, ['role' => 'admin']))) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Dashboard with stats
    public function dashboard()
    {
        $studentsCount = User::where('role', 'student')->count();
        $coursesCount  = Course::count();
        $activeCourses = Course::where('status', 'active')->count();

        return view('admin.courses.dashboard', compact('studentsCount', 'coursesCount', 'activeCourses'));
    }

    // Students list
    public function students()
    {
        $students = User::where('role', 'student')->get();
        return view('admin.courses.students', compact('students'));
    }

    // Show single student details
    public function showStudent(User $student)
    {
        if ($student->role !== 'student') {
            abort(404);
        }

        return view('admin.students.show', ['student' => $student]);
    }

    // Edit student
    public function editStudent(User $student)
    {
        if ($student->role !== 'student') {
            abort(404);
        }

        return view('admin.students.edit', ['student' => $student]);
    }

    // Update student
    public function updateStudent(Request $request, User $student)
    {
        if ($student->role !== 'student') {
            abort(404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $student->id,
            'phone_number' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:11'],
            'address' => 'nullable|string|max:255',
            'status' => 'required|in:active,block',
        ]);

        $student->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'address' => $validated['address'] ?? null,
            'status' => $validated['status'],
        ]);

        return redirect()->route('admin.students.show', $student->id)
            ->with('success', 'Student updated successfully.');
    }

    // Delete student
    public function deleteStudent(User $student)
    {
        if ($student->role !== 'student') {
            abort(404);
        }

        $student->delete();

        return redirect()->route('admin.students.index')
            ->with('success', 'Student deleted successfully.');
    }

    // Courses list
    public function courses()
    {
        $courses = Course::all();
        return view('admin.courses.courses', compact('courses'));
    }
}
