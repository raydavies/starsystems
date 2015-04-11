<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Level;
use App\Models\Subject;
use DB;
use Request;

class LessonController extends Controller
{
	public function index()
	{
		$level_id = (int) Request::input('level', 1);
		$subject_id = (int) Request::input('subject', 1);

		$levels = Level::all();
		$level = Level::find($level_id);
		$subject = Subject::find($subject_id);
		$lessons = Lesson::whereRaw('level_id = ? AND subject_id = ?', [$level_id, $subject_id])->get();

		return view('samplelessons', [
			'levels' => $levels,
			'subjects' => $level->subjects,
			'lessons' => $lessons,
			'current_level' => $level,
			'current_subject' => $subject
		]);
	}
}
