<?php

namespace Proyecto;

use Illuminate\Database\Eloquent\Model;

class Fragrance extends Model
{
     public function getRouteKeyName()
    {
    	return 'slug';
    }
}
