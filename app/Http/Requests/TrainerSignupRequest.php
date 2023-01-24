<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Http\Traits\ResponseTrait;
use App\Rules\WithoutSpace;
use Illuminate\Foundation\Http\FormRequest;

class TrainerSignupRequest extends FormRequest
{
    use ResponseTrait;
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
        return [
            'user_type' => 'required|max:255|string',
            'name' => 'required|max:255|string',
            'email' => ["required", "unique:users,email", new WithoutSpace],
            'password' => 'required|confirmed|min:8',
            'image' => 'required',
            'contact_number' => 'required',
            'about' => 'required',
            'emergency_contact' => 'required',
            'relation_emergency' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'state' => 'required',
            'location' => 'required',
            'weight' => 'required',
            'hieght' => 'required',
            'medical_condition' => 'required'
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $errors = $this->sendError(implode(",", $validator->errors()->all()));
        throw new HttpResponseException($errors, 422);
    }
}
