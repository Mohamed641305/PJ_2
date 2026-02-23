<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

require __DIR__ . '/auth.php';


/*
|--------------------------------------------------------------------------
| User Routes (أي مستخدم مسجل دخول)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {

        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('welcome');
    })->name('dashboard');

    Route::view('/about', 'about')->name('about');
    Route::view('/courses', 'courses')->name('courses');
    Route::view('/team', 'team')->name('team');
    Route::view('/testimonial', 'testimonial')->name('testimonial');
    Route::view('/404', '404')->name('404');
    Route::view('/contact', 'contact')->name('contact');
});


/*
|--------------------------------------------------------------------------
| Admin Routes (للأدمن فقط)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'CheckAdmin'])
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [AdminController::class, 'dashboard'])
            ->name('dashboard');

        // Students
        Route::get('/students', [AdminController::class, 'students'])
            ->name('students.index');

        Route::get('/students/show/{student}', [AdminController::class, 'showStudent'])
            ->name('students.show');

        Route::get('/students/delete/{student}', [AdminController::class, 'deleteStudent'])
            ->name('students.delete');

        // Courses
        Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
        Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
        Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
        Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
        Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
        Route::get('/courses/delete/{course}', [CourseController::class, 'delete'])->name('courses.delete');

        // Users
        Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');
        Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    });
