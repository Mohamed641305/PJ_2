<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    // GET: /api/course
    public function index()
    {
        return response()->json([
            "msg" => "All Courses",
            "status" => 200,
            "data" => Course::all()
        ]);
    }

    // GET: /api/course/{id}
    public function show($id)
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json([
                "msg" => "Course not found",
                "status" => 404,
                "data" => null
            ], 404);
        }

        return response()->json([
            "msg" => "Course Details",
            "status" => 200,
            "data" => $course
        ]);
    }

    // POST: /api/course
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "description" => "required",
            "price" => "required|numeric|min:0",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "msg" => "Validation failed",
                "status" => 422,
                "data" => $validator->errors()
            ], 422);
        }

        $course = Course::create($request->only('name', 'description', 'price'));

        return response()->json([
            "msg" => "Course created successfully",
            "status" => 201,
            "data" => $course
        ], 201);
    }

    // PUT: /api/course/{id}
    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json([
                "msg" => "Course not found",
                "status" => 404,
                "data" => null
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            "name" => "required",
            "description" => "required",
            "price" => "required|numeric|min:0",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "msg" => "Validation failed",
                "status" => 422,
                "data" => $validator->errors()
            ], 422);
        }

        $course->update($request->only('name', 'description', 'price'));

        return response()->json([
            "msg" => "Course updated successfully",
            "status" => 200,
            "data" => $course
        ]);
    }

    // DELETE: /api/course/{id}
    public function delete($id)
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json([
                "msg" => "Course not found",
                "status" => 404,
                "data" => null
            ], 404);
        }

        $course->delete();

        return response()->json([
            "msg" => "Course deleted successfully",
            "status" => 200,
            "data" => null
        ]);
    }
}
