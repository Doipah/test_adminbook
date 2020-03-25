<?php

namespace App;
// use App\Book;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'book_name', 'price_book', 'category_book','category_file','year_print','user_write','image','description'
       ];
}
