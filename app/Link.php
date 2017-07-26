<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
	    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'links';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['url'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    /*protected $hidden = ['password', 'remember_token'];*/

}
