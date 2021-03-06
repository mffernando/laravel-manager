<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'body',
      'url',
      'commentable_id',
      'commentable_type',
      'user_id',
    ];
}
