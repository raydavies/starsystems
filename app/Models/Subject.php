<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $table = 'subjects';

	protected $primaryKey = 'subject_id';

	public function lessons()
	{
		return $this->hasMany('App\Models\Lesson', 'lesson_id', 'subject_id');
	}

	public function levels()
	{
		return $this->belongsToMany('App\Models\Level', 'levels_subjects', 'subject_id', 'level_id');
	}
}
