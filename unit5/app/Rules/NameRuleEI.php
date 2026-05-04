<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NameRuleEI implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $value = trim($value);

        // Required check
        if ($value === '') {
            $fail("Name is required");
            return;
        }

        // Only letters
        if (!preg_match('/^[a-zA-Z]+$/', $value)) {
            $fail("Only letters are allowed");
            return;
        }

        // Length check
        if (strlen($value) < 3 || strlen($value) > 15) {
            $fail("Name must be between 3 and 15 characters");
        }
    }
}