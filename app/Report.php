<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
	protected $table='reports';
    protected $fillable = [
        'userId','category','title', 'file',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
