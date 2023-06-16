<?php

namespace App\Traits;

trait Person
{   
    /**
     * Generate person name
     *
     * @param array $request
     * @return string
     */
    public static function generatePersonName($request = []) :string
    {
        return fake()->name();
    }

    /**
     * Generate person
     *
     * @param array $request
     * @return array
     */
    public static function generatePerson($request = []) :array
    {
        $person = [
            'name' => fake()->name(),
            'email' => fake()->email()
        ];

        return $person;
    }

}