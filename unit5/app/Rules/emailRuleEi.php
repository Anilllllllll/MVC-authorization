<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class EmailRuleEI implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $value = trim($value);

        // Required check
        if ($value === '') {
            $fail("Email should not be empty");
            return;
        }

        // Check valid email format (important)
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $fail("Invalid email format");
            return;
        }

        // Check domain
        if (!str_ends_with($value, '@yahoo.in')) {
            $fail("Only yahoo.in emails are accepted");
        }
    }
}