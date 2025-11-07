@extends('admin.layouts.admin')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">📚 All PDF Books</h1>
    <a href="{{ route('admin.books.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
      + Add New
    </a>
  </div>

  @if(session('success'))
    <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-lg mb-4">
      {{ session('success') }}
    </div>
  @endif

  @if($books->count() > 0)
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($books as $book)
      <div class="bg-white shadow-md rounded-xl p-4 border border-gray-200">
        <h2 class="font-bold text-lg text-gray-800">{{ $book->title }}</h2>
        <p class="text-sm text-gray-600">{{ $book->author ?? 'Unknown Author' }}</p>
        <p class="text-gray-500 text-sm mt-2 line-clamp-3">{{ $book->description }}</p>

        <div class="mt-4 flex justify-between items-center">
          <a href="{{ asset('storage/' . $book->pdf_path) }}" target="_blank"
             class="text-indigo-600 hover:underline">📄 View</a>

          <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:underline">🗑 Delete</button>
          </form>
        </div>
      </div>
    @endforeach
  </div>
  @else
    <p class="text-gray-600 text-center mt-10">No books uploaded yet 📭</p>
  @endif
</div>
@endsection
