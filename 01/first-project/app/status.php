<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
class status extends Model
{
    protected $table = 'statuss';
     public function comments(){
    	return $this->hasMany('App\Comment', 'comment_id', 'id');
    }

    // public function path(){
    // 	return '/status/'.$this->id;
    // }
}
