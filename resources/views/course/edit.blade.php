<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Course') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('course.update', $course) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><label for="name" class="form-label">Course Title</label></td>
                                    <td><input type="text" class="form-control" id="name" name="name" value="{{ old('name', $course->name) }}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="short_description" class="form-label">Short Description</label></td>
                                    <td><textarea class="form-control" id="short_description" name="short_description" required>{{ old('short_description', $course->short_description) }}</textarea></td>
                                </tr>
                                <tr>
                                    <td><label for="long_description" class="form-label">Long Description</label></td>
                                    <td><textarea class="form-control" id="long_description" name="long_description" required>{{ old('long_description', $course->long_description) }}</textarea></td>
                                </tr>
                                <tr>
                                    <td><label for="price" class="form-label">Price</label></td>
                                    <td><input type="number" class="form-control" id="price" name="price" value="{{ old('price', $course->price) }}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="selling_price" class="form-label">Selling Price</label></td>
                                    <td><input type="number" class="form-control" id="selling_price" name="selling_price" value="{{ old('selling_price', $course->selling_price) }}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="images" class="form-label">Images</label></td>
                                    <td><input type="file" class="form-control" id="images" name="images[]" multiple></td>
                                </tr>
                                <tr>
                                    <td><label for="file" class="form-label">File</label></td>
                                    <td><input type="file" class="form-control" id="file" name="file"></td>
                                </tr>
                                <tr>
                                    <td><label for="start_date" class="form-label">Start Date</label></td>
                                    <td><input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $course->start_date) }}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="skill_level" class="form-label">Skill Level</label></td>
                                    <td>
                                        <select class="form-control" id="skill_level" name="skill_level" required>
                                            <option value="beginner" {{ old('skill_level', $course->skill_level) == 'beginner' ? 'selected' : '' }}>Beginner</option>
                                            <option value="intermediate" {{ old('skill_level', $course->skill_level) == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                                            <option value="advanced" {{ old('skill_level', $course->skill_level) == 'advanced' ? 'selected' : '' }}>Advanced</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="category_id" class="form-label">Category</label></td>
                                    <td>
                                        <select class="form-control" id="category_id" name="category_id" required>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id', $course->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
