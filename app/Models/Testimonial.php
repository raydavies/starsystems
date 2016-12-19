<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
	protected $table = 'testimonials';

	protected $fillable = [
		'name',
		'city',
		'state_province',
		'comment'
	];
	
	public function getCreatedAtAttribute()
    {
        $value = $this->attributes['created_at'];
    
        return $this->setLocalTimezone($value);
    }
    
    public function getUpdatedAtAttribute()
    {
        $value = $this->attributes['updated_at'];
        
        return $this->setLocalTimezone($value);
    }
    
    /**
     * @param mixed $date
     * @return null|Carbon
     */
    protected function setLocalTimezone($date)
    {
        if (is_null($date)) {
            return $date;
        }
        return $this->asDateTime($date)->timezone('America/Chicago');
    }
}
