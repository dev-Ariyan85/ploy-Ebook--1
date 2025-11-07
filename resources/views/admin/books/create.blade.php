@extends('admin.layouts.admin')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
  <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">📘 Upload New PDF Book</h1>

    @if ($errors->any())
      <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-lg mb-4">
        <ul class="list-disc list-inside">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
      @csrf

      <div>
        <label class="block font-medium text-gray-700">Book Title</label>
        <input type="text" name="title" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <div>
        <label class="block font-medium text-gray-700">Author</label>
        <input type="text" name="author" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
      </div>

      <div>
        <label class="block font-medium text-gray-700">Description</label>
        <textarea name="description" rows="4" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500"></textarea>
      </div>

      <div>
        <label class="block font-medium text-gray-700">Upload PDF File</label>
        <input type="file" name="pdf" accept="application/pdf" class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 bg-gray-50 focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <div class="flex justify-between items-center">
        <a href="{{ route('admin.books.index') }}" class="text-gray-600 hover:underline">⬅ Back to list</a>
        <button type="submit" class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition">
          Upload Book
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
