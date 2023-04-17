<?php

namespace App\Http\Requests\Api\Employee;

use App\Models\Employee;
use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class StoreEmployeeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(Employee::class, 'email')],
            'password' => ['nullable', Password::defaults()],
            'manger_id' => ['required', Rule::exists(Employee::class, 'id')],
            'role_id' => ['required', Rule::exists(Role::class, 'id')],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
