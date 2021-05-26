<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'address', 'tel', 'email', 'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function purchase_histories()
    {
        return $this->belongsToMany(Textbook::class, 'purchase_histories')->withTimestamps();
    }
    
    public function textbooks()
    {
        return $this->belongsToMany(Textbook::class);
    }

    public function register_histories()
    {
        return $this->belongsToMany(Textbook::class, 'register_histories');
    }

}
