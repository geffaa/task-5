<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }
    public function search(Request $request)
    {
        $query = Book::query();
        
        if ($request->has('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }
        
        if ($request->has('author')) {
            $query->where('author', 'like', '%' . $request->input('author') . '%');
        }
        
        return response()->json($query->get());
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book);
    }

    public function borrow($id)
    {
        $book = Book::findOrFail($id);
        if (!$book->available) {
            return response()->json(['message' => 'Book is not available.'], 400);
        }
        $book->available = false;
        $book->save();

        return response()->json(['message' => 'Book borrowed successfully.']);
    }

    public function return($id)
    {
        $book = Book::findOrFail($id);
        if ($book->available) {
            return response()->json(['message' => 'Book is already available.'], 400);
        }
        $book->available = true;
        $book->save();

        return response()->json(['message' => 'Book returned successfully.']);
    }
}
