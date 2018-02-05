<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $table='workshops';
	protected $fillable=['userId','title','date','location','objective','file'];
}
