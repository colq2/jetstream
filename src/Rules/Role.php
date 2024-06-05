<?php

namespace Laravel\Jetstream\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Laravel\Jetstream\Jetstream;

class Role implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(!in_array($value, array_keys(Jetstream::$roles))) {
            $fail(__('The :attribute must be a valid role.'));
        }
    }
}
