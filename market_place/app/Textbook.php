<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Textbook extends Model
{

    protected $fillable = ['title', 'price', 'author', 'publisher', 'category', 'state'];
    
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function register_histories()
    {
        return $this->belongsToMany(User::class, 'register_histories');
    }

    public function purchase_history()
    {
        return $this->belongsTo(PurchaseHistory::class);
    }

}
