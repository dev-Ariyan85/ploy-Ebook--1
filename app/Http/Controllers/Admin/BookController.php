<?php

namespace App\Http\Controllers\Admin; // <-- important

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
{
    $books = Book::all(); // সব বই নিয়ে আসবে
    return view('admin.books.index', compact('books'));
}


   public function create()
{
    return view('admin.books.create'); // Add new book page
}

   public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'nullable|string|max:255',
        'pdf' => 'required|mimes:pdf|max:10240', // 10MB max
    ]);

    $pdfPath = $request->file('pdf')->store('books', 'public');

    Book::create([
        'title' => $request->title,
        'author' => $request->author,
        'pdf_path' => $pdfPath,
    ]);

    return redirect()->route('admin.books.index')->with('success', 'Book added successfully!');
}
    public function destroy(Book $book)
    {
        if (Storage::disk('public')->exists($book->pdf_path)) {
            Storage::disk('public')->delete($book->pdf_path);
        }

        $book->delete();
        return back()->with('success', 'Book deleted successfully!');
    }
}
