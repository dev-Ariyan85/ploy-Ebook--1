@extends('admin.layouts.admin')

@section('content')
<div class="mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-6">Add New Book</h1>

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-100 text-red-800 rounded-md">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        {{-- Title & Author --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="block mb-1 font-medium text-gray-700">Title <span class="text-red-500">*</span></label>
                <input type="text" name="title" value="{{ old('title') }}" required
                    class="w-full border-gray-300 border-2 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
            </div>
            <div>
                <label class="block mb-1 font-medium text-gray-700">Author</label>
                <input type="text" name="author" value="{{ old('author') }}"
                    class="w-full border-gray-300 border-2 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
            </div>
        </div>

        {{-- Category, Department & Semester --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div>
                <label class="block mb-1 font-medium text-gray-700">Category</label>
                <input type="text" name="category" value="{{ old('category') }}"
                    class="w-full border-gray-300 border-2 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
            </div>
            <div>
                <label class="block mb-1 font-medium text-gray-700">Department</label>
                <select name="department_id" class="w-full border-gray-300 border-2 rounded-md shadow-sm px-3 py-2">
                    <option value="">Select a department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>
                            {{ $department->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block mb-1 font-medium text-gray-700">Semester</label>
                <select name="semester_id" class="w-full border-gray-300 border-2 rounded-md shadow-sm px-3 py-2">
                    <option value="">Select a semester</option>
                    @foreach ($semisters as $semister)
                        <option value="{{ $semister->id }}" {{ old('semester_id') == $semister->id ? 'selected' : '' }}>
                            {{ $semister->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- Description --}}
        <div>
            <label class="block mb-1 font-medium text-gray-700">Description</label>
            <textarea name="description" rows="4"
                class="w-full border-gray-300 border-2 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 px-3 py-2">{{ old('description') }}</textarea>
        </div>

        {{-- Price & Free Book --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 items-center">
            <div>
                <label class="block mb-1 font-medium text-gray-700">Price (BDT) <span class="text-red-500">*</span></label>
                <input type="number" step="0.01" name="price" value="{{ old('price') }}" required
                    class="w-full border-gray-300 border-2 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
            </div>
            <div class="flex items-center gap-2 mt-5 md:mt-0">
                <input type="checkbox" name="is_free" value="1" {{ old('is_free') ? 'checked' : '' }}
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label class="font-medium text-gray-700">Free Book</label>
            </div>
        </div>

        {{-- Cover Image & PDF --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="block mb-1 font-medium text-gray-700">Cover Image</label>
                <input type="file" name="cover_image" accept="image/*"
                    class="w-full border-gray-300 border-2 rounded-md px-3 py-2">

            </div>
            <div>
                <label class="block mb-1 font-medium text-gray-700">PDF File <span class="text-red-500">*</span></label>
                <input type="file" name="pdf_file" accept="application/pdf" required
                    class="w-full border-gray-300 border-2 rounded-md px-3 py-2">
            </div>
        </div>

        {{-- Published --}}
        <div>
            <label class="block mb-1 font-medium text-gray-700">Published</label>
            <select name="published" class="w-full border-gray-300 rounded-md shadow-sm px-3 py-2">
                <option value="1" {{ old('published') == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('published') == 0 ? 'selected' : '' }}>No</option>
            </select>
        </div>

        {{-- Submit --}}
        <div>
            <button type="submit"
                class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded-md shadow">
                Save Book
            </button>
        </div>
    </form>
</div>
@endsection
