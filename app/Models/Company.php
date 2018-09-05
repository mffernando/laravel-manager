<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
      'name',
      'description',
      'user_id',
    ];

    /**
     * Many companies belong to a user
     */

     public function user(){
       return $this->belongsTo('App\Models\User');
     }

}
