<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    protected $table = 'wink_posts';

    public $incrementing = false;

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
