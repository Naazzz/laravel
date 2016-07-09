<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
 protected $fillable = ['writer_name','book_name','genre_name'];
 public function comments()
 {
 	return $this->hasMany(Comment::class);
 }
}
