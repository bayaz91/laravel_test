<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Lang;

class Password implements Rule
{
    // Should return true or false depending on whether the attribute value is valid or not.
    public function passes($attribute, $value)
    {
        $result = false;
        if ((6 == mb_strlen($value))) {
            $result = true;
        }

        return $result;
    }

    // This method should return the validation error message that should be used when validation fails
    public function message()
    {
        return Lang::get('validation.fields.no-correct-password');
    }
}
