<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(10);
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Course::create($request->all());

        return redirect()->route('course.index')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $course->update($request->all());

        return redirect()->route('course.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index')->with('success', 'Course deleted successfully.');
    }
}
