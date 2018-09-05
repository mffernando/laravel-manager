<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //fillable
    protected $fillable = [
      'name',
      'description',
      'company_id',
      'user_id',
      'days',
    ];

    /**
     * Many projects belong to many users
     */

     public function users(){
       return $this->belongsToMany('App\Models\User');
     }

     /**
      * Many projects belong to a company
      */

      public function company(){
        return $this->belongsTo('App\Models\Company');
      }

}
