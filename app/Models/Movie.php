<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'genre', 'director', 'storyline', 'created'
            ];

        public function comments()             
      {
        return $this->hasMany(Comment::class);   
      }           

}



//   Movie::create[('title' => 'neki film', 'genre' => 'action', 'director' => 'neki lik', 'storyline' => 'kjhkjh kjhkjkj kj kj hk jhkjhkjwiuiuwef', 'created' => 1999)];