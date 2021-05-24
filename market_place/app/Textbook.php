<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Textbook extends Model
{
    protected $fillable = ['title','price','author','publisher','category','state'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

  /*  public function register_histories_textbooks()
    {
        return $this->belongsToMany(Textbook::class, 'register_histories');
    } */
}

