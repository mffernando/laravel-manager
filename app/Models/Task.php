<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
      'name',
      'project_id',
      'user_id',
      'days',
      'hours',
      'company_id',
    ];

    /**
     * Many tasks belong to a user
     */

     public function user(){
       return $this->belongsTo('App\Models\User');
     }

     /**
      * Many tasks belong to a project
      */

      public function project(){
        return $this->belongsTo('App\Models\Project');
      }

      /**
       * Many tasks belong to a company
       */

       public function company(){
         return $this->belongsTo('App\Models\Company');
       }

       /**
        * Many tasks belong to many users
        */

        public function users(){
          return $this->belongsToMany('App\Models\User');
        }
}
