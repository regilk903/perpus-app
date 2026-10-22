<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookController extends Controller
{
     public function index()
    {
        $books = Book::all();

        return Inertia::render('Books/Index', [
            'books' => $books,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_buku' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
        ]);

        Book::create($validated);

        return redirect()->back()->with('success', 'Buku berhasil ditambahkan.');
    }
}
