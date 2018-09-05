<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
      'name',
    ];

    /**
     * A role can have multiple users
     * 'role_id'
     */

     public function users(){
       return $this->hasMany('App\Models\User');
     }

}
