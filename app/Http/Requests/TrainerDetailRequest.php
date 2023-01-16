<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Http\Traits\ResponseTrait;

use Illuminate\Foundation\Http\FormRequest;

class TrainerDetailRequest extends FormRequest
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
            'category_id' => 'required',
            'trainer_id' => 'required',
            
            'session*day' => 'required',
            'session*start_time' => 'required',
            'session*end_time' => 'required',
            'class_images*image' => 'required',

        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $errors = $this->sendError(implode(",", $validator->errors()->all()));
        throw new HttpResponseException($errors, 422);
    }
}
