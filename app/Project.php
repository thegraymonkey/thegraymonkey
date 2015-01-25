<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model{


	protected $fillable = 
		[
			'title',
			'description',
			'content',
			'filename',
			'file_ext',
			'img_description',
			'link'
		];


	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function getImagePath()
	{
		return sprintf('/upload/projects/%s.%s', $this->filename, $this->file_ext);
	}

	

}