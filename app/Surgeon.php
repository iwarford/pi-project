<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surgeon extends Model
{

    protected $fillable = [
	'name',
	'email',
    ];

    public function patients() 
    {
        return $this->hasMany('App\Patient');
    }
}
