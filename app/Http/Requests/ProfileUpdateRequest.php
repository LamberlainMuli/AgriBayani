<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'picture_url' => ['nullable', 'string'],
            'phone_number' => ['required', 'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/'],
            'location' => ['required', 'string', 'max:255'],
            'goal_amount' => ['nullable', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
        ];
    }
}
