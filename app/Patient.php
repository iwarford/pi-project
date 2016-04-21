<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
	'name',
	'email',
	'gender',
	'birthdate',
	'surgeon_id',
	'phone'
    ];

    public function surgeon() 
    {
        return $this->belongsTo('App\Surgeon');
    }
}
