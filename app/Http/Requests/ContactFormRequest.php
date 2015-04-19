<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$this->sanitize();

		return [
			'first_name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'email' => 'required|email',
			'subject' => 'required|alpha_dash',
			'message' => 'required'
		];
	}

	/**
	 * Filter the inputs from the request.
	 *
	 * @return void
	 */
	public function sanitize()
	{
		$inputs = $this->all();

		foreach ($inputs as $field => $value) {
			$inputs[$field] = filter_var($value, FILTER_SANITIZE_STRING);
		}

		$this->replace($inputs);
	}

}
