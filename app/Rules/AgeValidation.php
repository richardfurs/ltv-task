<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class AgeValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $minAge = date('d/m/Y', strtotime('-18 years'));

        if($value) {
            $minAgeDate = Carbon::createFromFormat('d/m/Y', $minAge);
            $valueDate = Carbon::createFromFormat('d/m/Y', $value);
            return $minAgeDate > $valueDate;
        } else {
            return true;
        }


    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Lai turpinātu, jābūt vismaz 18 gadus vecam';
    }
}
