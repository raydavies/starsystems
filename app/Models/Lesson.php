<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
	protected $table = 'lessons';

	protected $primaryKey = 'lesson_id';

	public function subject()
	{
		return $this->belongsTo('App\Models\Subject', 'subject_id');
	}

	public function level()
	{
		return $this->belongsTo('App\Models\Level', 'level_id');
	}
}
