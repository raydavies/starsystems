<?php
namespace App\Http\Controllers;

use App\Http\Requests\CreateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use DB;
use Mail;

class TestimonialController extends Controller
{
	protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	/**
	 * Loads the testimonials page.
	 *
	 * @return Illuminate\View\View
	 */
	public function get()
	{
		$testimonials = Testimonial::where('flag_active', 1)->get();

		return view('testimonials', [
			'testimonials' => $testimonials
		]);
	}

	/**
	 * Loads the create new testimonial form.
	 *
	 * @return Illuminate\View\View
	 */
	public function create()
	{
		return view('create-testimonial');
	}

	/**
	 * Validates the form request and saves the testimonial.
	 *
	 * @param CreateTestimonialRequest $request
	 * @return Illuminate\View\View
	 */
	public function store(CreateTestimonialRequest $request)
	{
		if (!$this->request->ajax()) {
			abort(404);
		}
		return redirect('testimonials')->with('alert', array('status' => 'success', 'message' => 'Thank you for your feedback!'));
	}
}
