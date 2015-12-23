<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
	protected $table = 'testimonials';

	protected $primaryKey = 'testimonial_id';

	protected $fillable = [
		'name',
		'city',
		'state_province',
		'comment'
	];
}
