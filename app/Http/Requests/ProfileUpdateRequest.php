<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Account;

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
            'email' => ['nullable', 'email', 'max:255', Rule::unique(Account::class)->ignore($this->user()->id)],
            'first_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'picture_url' => ['nullable', 'string'],
            'phone_number' => ['nullable', 'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/'],
            'location' => ['nullable', 'string', 'max:255'],
            'goal_amount' => ['nullable', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
        ];
    }
}
