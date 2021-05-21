<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Textbook extends Model
{
    protected $fillable = ['category', 'state', 'title', 'price', 'author', 'publisher'];
    public function category()
    {
        return $this->belongsTo('Category::class');
    }
    public function state()
    {
        return $this->belongsTo('State::class');
    }
    public function register_histories()
    {
        return $this->belongsToMany(User::class, 'register_histories');
    }
    public function purchase_histories()
    {
        return $this->belongsToMany(User::class, 'purchase_histories');
    }
}
