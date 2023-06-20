<?php

namespace App\Traits;

trait Phone
{   
    /**
     * Generate phone number
     *
     * @param array $request
     * @return string
     */
    public static function phoneNumberGenerator($request = []) :string
    {
        // $faker = \Faker\Factory::create('pt_BR');
        return sprintf('(0%s) %s', fake()->areaCode(), fake()->landline());
    }

    /**
     * Generate phone number
     *
     * @param array $request
     * @return string
     */
    public static function cellPhoneNumberGenerator($request = []) :string
    {
        return fake()->cellphoneNumber();
    }
}