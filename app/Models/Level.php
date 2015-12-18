<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
	protected $table = 'levels';

	protected $primaryKey = 'level_id';

	public function lessons()
	{
		return $this->hasMany('App\Models\Lesson', 'lesson_id', 'level_id');
	}

	public function subjects()
	{
		return $this->belongsToMany('App\Models\Subject', 'levels_subjects', 'level_id', 'subject_id');
	}
}
