<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title', 'description', 'author', 'price',
    ];

    public function getBooks()
    {
        $books = \DB::table('books')
          ->select('title', 'description', 'author', 'price')
          ->orderBy('title', 'asc')
          ->get();
        return $books;
    }
}
