<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model{


	protected $fillable = 
	[
		'about',
		'personal',
		'education',
		'expiriance',
		'lang',
		'skills'
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

}