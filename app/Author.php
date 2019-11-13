<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Author extends Model
{
    protected $table = 'wink_authors';

    public $incrementing = false;

    public function posts()
    {
        return  $this->hasMany(Post::class);
    }
}
