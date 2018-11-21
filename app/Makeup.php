<?php

namespace Proyecto;

use Illuminate\Database\Eloquent\Model;

class Makeup extends Model
{
	protected $fillable = ['name','price','tone','slug','description','avatar'];


    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
