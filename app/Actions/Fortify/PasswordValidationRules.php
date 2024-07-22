<?php

namespace App\Actions\Fortify;

use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>
     */
    protected function passwordRules(): array
    {
        return [
            'required',
            'string',
            'min:8', // Longitud mínima de 8 caracteres
            'regex:/[a-z]/', // Debe contener al menos una letra minúscula
            'regex:/[A-Z]/', // Debe contener al menos una letra mayúscula
            'regex:/[0-9]/', // Debe contener al menos un número
            'regex:/[@$!%*#?&]/', // Debe contener al menos un carácter especial
            'confirmed'
        ];
    }
}
