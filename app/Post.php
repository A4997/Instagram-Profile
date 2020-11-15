<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\Post as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'caption','image'
    ];
    public function user()
    {
      return $this->belongsTo(User::class);
    }

}
