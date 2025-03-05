<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;

use App\Models\Course;
use App\Models\Category;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    $categories = Category::with('courses')->withCount('courses')->get();
        return view('index', compact('categories'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/course-detail', function () {
    return view('course_detail');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');

Route::resource('category', CategoryController::class);
Route::resource('course', CourseController::class);

Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.details');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
