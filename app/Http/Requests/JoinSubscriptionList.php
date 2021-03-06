<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoinSubscriptionList extends FormRequest
{
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
            'email' => 'required|unique:subscriptions|email',
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
        'email.unique' => 'Love the enthusiasm! You are already subscribed to this list.',
    ];
}
}
