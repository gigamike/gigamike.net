<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Recaptcha implements Rule
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
      $recaptcha = new \ReCaptcha\ReCaptcha(env('GOOGLE_RECAPTCHA_SECRET', false));
      $resp = $recaptcha->setExpectedHostname($_SERVER['SERVER_NAME'])
                        ->setExpectedAction('contact')
                        ->verify($value, $_SERVER['REMOTE_ADDR']);

      if ($resp->isSuccess()) {
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
        return 'Invalid ReCaptcha!';
    }
}
