<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {


	protected $fillable = 
	[
		'title',
		'description',
		'content',
		'filename',
		'image_description'

	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	//public function getImagePath()
	//{
	//	return sprintf('/upload/posts/%s.%s', $this->file_name, $this->file_ext);
	//}
}
