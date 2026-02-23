<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all();
        $data = [
            "msg" => "All Courses",
            "status" => 200,
            "data" => $course
        ];
        return response()->json($data);
    }

    public function show($id)
    {
        $course = Course::find($id);
        if (!$course) {
            return response()->json([
                "msg" => "Course not found",
                "status" => 404,
                "data" => null
            ]);
        } else {
            $data = [
                "msg" => "Course Details",
                "status" => 200,
                "data" => $course
            ];
        }
        return response()->json($data);
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $course = Course::find($id);
        if ($course) {

            $course->delete();
            $data = [
                "msg" => "Course deleted successfully",
                "status" => 200,
                "data" => null
            ];
        } else {
            $data = [
                "msg" => "Course not found",
                "status" => 404,
                "data" => null
            ];
        }

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "description" => "required",
            "price" => "required|numeric|min:0",
        ]);

        if ($validator->fails()) {
            $data = [
                "msg" => "Validation failed",
                "status" => 422,
                "data" => $validator->errors()
            ];
            return response()->json($data, 422);
        }


        $course = Course::create([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,

        ]);
        $data = [
            "msg" => "Course created successfully",
            "status" => 201,
            "data" => $course
        ];
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {


        $course = Course::find($id);
        if (!$course) {
            $data = [
                "msg" => "Course not found",
                "status" => 404,
                "data" => null
            ];
            return response()->json($data, 404);
        }

        if ($course) {
            $validator = Validator::make($request->all(), [
                "name" => "required",
                "description" => "required",
                "price" => "required|numeric|min:0",
            ]);

            if ($validator->fails()) {
                $data = [
                    "msg" => "Validation failed",
                    "status" => 422,
                    "data" => $validator->errors()
                ];
                return response()->json($data, 422);
            }
            $course->update([
                "name" => $request->name,
                "description" => $request->description,
                "price" => $request->price,
            ]);

            $course->update([
                "name" => $request->name,
                "description" => $request->description,
                "price" => $request->price,
            ]);

            $data = [
                "msg" => "Course updated successfully",
                "status" => 200,
                "data" => $course
            ];
        }

        return response()->json($data);
    }
}
