<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Category;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('course_detail', compact('course'));
    }

    public function create()
    {
        $categories = Category::paginate(10);
        return view('course.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'images.*' => 'required|mimes:png,jpg,jpeg,svg',
            'file' => 'required|file',
            'start_date' => 'required|date',
            'skill_level' => 'required|string',
            'category_id' => 'required|integer',
        ]);

        $data['images'] = json_encode(array_map(function ($file) {
            return $file->store('images');
        }, $request->file('images')));

        $data['file'] = $request->file('file')->store('files');

        Course::create($data);

        return redirect()->route('course.index')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('course.edit', compact('course', 'categories'));
    }

    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'images.*' => 'nullable|mimes:png,jpg,jpeg,svg',
            'file' => 'nullable|file',
            'start_date' => 'required|date',
            'skill_level' => 'required|string',
            'category_id' => 'required|integer',
        ]);

        if ($request->hasFile('images')) {
            $data['images'] = json_encode(array_map(function ($file) {
                return $file->store('images');
            }, $request->file('images')));
        }

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('files');
        }

        $course->update($data);

        return redirect()->route('course.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index')->with('success', 'Course deleted successfully.');
    }
}
