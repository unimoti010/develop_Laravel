<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    public function textbook()
    {
        return $this->belongsTo(Textbook::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
