<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'middle_name',
        'city',
        'role_id',
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
     * A user can have multiple tasks
     */

     public function tasks(){
       return $this->hasMany('App\Models\Task');
     }

     /**
      * A user can have multiple comments
      */

      public function comments(){
        return $this->hasMany('App\Models\Comment');
      }

      /**
       * A user can have multiple companies
       */

       public function companies(){
         return $this->hasMany('App\Models\Company');
       }

      /**
       * Many users belong to a role
       */

       public function role(){
         return $this->belongsTo('App\Models\Role');
       }

       /**
        * Many users belong to many tasks
        */

        public function tasks(){
          return $this->belongsToMany('App\Models\Task');
        }

        /**
         * Many users belong to many projects
         */

         public function projects(){
           return $this->belongsToMany('App\Models\Project');
         }
}
