<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JoinProviderRequest  extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'string', '', 'min:6', 'max:255'],
            'company_name' => ['required', 'string', 'min:3', 'max:255'],
            'city' => ['required', 'string', 'min:3', 'max:255'],
            'company_url' => ['required', 'string', 'min:3', 'max:255'],
            'phone_number' => ['required', 'digits:10'],
            'commercial_reggister' => [ 'file','nullable'],
        ];
    }
}
