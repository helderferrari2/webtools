<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Password
{   
    /**
     * Generate password
     *
     * @param array $request
     * @return string
     */
    public static function passwordGenerator($request = []) :string
    {
        $letters = true;
        $spaces = false;
        $length =  $request['length'] ?? 16;
        $numbers = $request['numbers'] ?? true;
        $symbols = $request['symbols'] ?? false;
        $lowercase = $request['lowercase'] ?? true;
        $uppercase = $request['uppercase'] ?? true;

        $password = Str::password($length, $letters, $numbers, $symbols, $spaces);

        if (!(bool)$lowercase) {
            $password = strtoupper($password);
        }

        if (!(bool)$uppercase) {
            $password = strtolower($password);
        }

        return $password;
    }
}