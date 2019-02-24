<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Validators\ReCaptcha;

class PollRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Make sure this should be true if we need to access this without login
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'radio'=>'required',
            'g-recaptcha-response'=>'required|recaptcha'
        ];
    }
    
    public function messages()
    {
        return [            
            'g-recaptcha-response.required'=>'Please ensure that you are a human!',
            'g-recaptcha-response.recaptcha'=>'Please ensure that you are a human!'
        ];
    }
}
