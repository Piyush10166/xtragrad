<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Course') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
                        <div class="bg-red-500 text-white p-4 rounded mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-1">
                                <label for="name" class="block text-sm font-medium text-gray-700">Course Title</label>
                                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="name" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="col-span-1">
                                <label for="short_description" class="block text-sm font-medium text-gray-700">Short Description</label>
                                <textarea class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="short_description" name="short_description" required>{{ old('short_description') }}</textarea>
                            </div>
                            <div class="col-span-2">
                                <label for="long_description" class="block text-sm font-medium text-gray-700">Long Description</label>
                                <textarea class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="long_description" name="long_description" required>{{ old('long_description') }}</textarea>
                            </div>
                            <div class="col-span-1">
                                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                <input type="number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="price" name="price" value="{{ old('price') }}" required>
                            </div>
                            <div class="col-span-1">
                                <label for="selling_price" class="block text-sm font-medium text-gray-700">Selling Price</label>
                                <input type="number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="selling_price" name="selling_price" value="{{ old('selling_price') }}" required>
                            </div>
                            <div class="col-span-2">
                                <label for="images" class="block text-sm font-medium text-gray-700">Images</label>
                                <input type="file" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="images" name="images[]" multiple required>
                            </div>
                            <div class="col-span-2">
                                <label for="file" class="block text-sm font-medium text-gray-700">File</label>
                                <input type="file" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="file" name="file" required>
                            </div>
                            <div class="col-span-1">
                                <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                                <input type="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
                            </div>
                            <div class="col-span-1">
                                <label for="skill_level" class="block text-sm font-medium text-gray-700">Skill Level</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="skill_level" name="skill_level" required>
                                    <option value="beginner" {{ old('skill_level') == 'beginner' ? 'selected' : '' }}>Beginner</option>
                                    <option value="intermediate" {{ old('skill_level') == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                                    <option value="advanced" {{ old('skill_level') == 'advanced' ? 'selected' : '' }}>Advanced</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="category_id" name="category_id" required>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-2 text-center">
                                <button type="submit" class="bg-blue-900 px-4 py-2 rounded-md shadow-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
