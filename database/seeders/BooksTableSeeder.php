<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $books = [
            ['title' => 'Harry Potter and the Sorcerer\'s Stone', 'author' => 'J.K. Rowling'],
            ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien'],
            ['title' => '1984', 'author' => 'George Orwell'],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
            ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger'],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen'],
            ['title' => 'The Lord of the Rings', 'author' => 'J.R.R. Tolkien'],
            ['title' => 'Animal Farm', 'author' => 'George Orwell'],
            ['title' => 'Moby Dick', 'author' => 'Herman Melville'],
            ['title' => 'War and Peace', 'author' => 'Leo Tolstoy'],
            ['title' => 'The Odyssey', 'author' => 'Homer'],
            ['title' => 'Crime and Punishment', 'author' => 'Fyodor Dostoevsky'],
            ['title' => 'The Brothers Karamazov', 'author' => 'Fyodor Dostoevsky'],
            ['title' => 'Brave New World', 'author' => 'Aldous Huxley'],
            ['title' => 'The Iliad', 'author' => 'Homer'],
            ['title' => 'Les Misérables', 'author' => 'Victor Hugo'],
            ['title' => 'Jane Eyre', 'author' => 'Charlotte Brontë'],
            ['title' => 'Wuthering Heights', 'author' => 'Emily Brontë'],
            ['title' => 'Great Expectations', 'author' => 'Charles Dickens'],
            ['title' => 'David Copperfield', 'author' => 'Charles Dickens'],
            ['title' => 'Anna Karenina', 'author' => 'Leo Tolstoy'],
            ['title' => 'One Hundred Years of Solitude', 'author' => 'Gabriel Garcia Marquez'],
            ['title' => 'The Catch-22', 'author' => 'Joseph Heller'],
            ['title' => 'Slaughterhouse-Five', 'author' => 'Kurt Vonnegut'],
            ['title' => 'The Grapes of Wrath', 'author' => 'John Steinbeck'],
            ['title' => 'The Old Man and the Sea', 'author' => 'Ernest Hemingway'],
            ['title' => 'A Tale of Two Cities', 'author' => 'Charles Dickens'],
            ['title' => 'Don Quixote', 'author' => 'Miguel de Cervantes'],
            ['title' => 'Ulysses', 'author' => 'James Joyce'],
            ['title' => 'Madame Bovary', 'author' => 'Gustave Flaubert'],
            ['title' => 'The Divine Comedy', 'author' => 'Dante Alighieri'],
            ['title' => 'The Picture of Dorian Gray', 'author' => 'Oscar Wilde'],
            ['title' => 'Dracula', 'author' => 'Bram Stoker'],
            ['title' => 'Frankenstein', 'author' => 'Mary Shelley'],
            ['title' => 'The Count of Monte Cristo', 'author' => 'Alexandre Dumas'],
            ['title' => 'The Three Musketeers', 'author' => 'Alexandre Dumas'],
            ['title' => 'The Metamorphosis', 'author' => 'Franz Kafka'],
            ['title' => 'The Trial', 'author' => 'Franz Kafka'],
            ['title' => 'The Stranger', 'author' => 'Albert Camus'],
            ['title' => 'The Plague', 'author' => 'Albert Camus'],
            ['title' => 'The Sun Also Rises', 'author' => 'Ernest Hemingway'],
            ['title' => 'The Scarlet Letter', 'author' => 'Nathaniel Hawthorne'],
            ['title' => 'Heart of Darkness', 'author' => 'Joseph Conrad'],
            ['title' => 'The Adventures of Huckleberry Finn', 'author' => 'Mark Twain'],
            ['title' => 'The Adventures of Tom Sawyer', 'author' => 'Mark Twain'],
            ['title' => 'Alice\'s Adventures in Wonderland', 'author' => 'Lewis Carroll'],
            ['title' => 'Through the Looking-Glass', 'author' => 'Lewis Carroll'],
            ['title' => 'Fahrenheit 451', 'author' => 'Ray Bradbury'],
            ['title' => 'The Shining', 'author' => 'Stephen King'],
            ['title' => 'It', 'author' => 'Stephen King'],
        ];

        foreach ($books as $book) {
            DB::table('books')->insert([
                'title' => $book['title'],
                'author' => $book['author'],
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
