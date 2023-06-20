<?php

namespace App\Traits;

trait Document
{   
    /**
     * Generate cpf
     *
     * @param array $request
     * @return string
     */
    public static function cpfGenerator($request = []) :string
    {
        return fake()->cpf(false);
    }

    /**
     * Generate cnpj
     *
     * @param array $request
     * @return string
     */
    public static function cnpjGenerator($request = []) :string
    {
        return fake()->cnpj(false);
    }

    /**
     * Generate rg
     *
     * @param array $request
     * @return string
     */
    public static function rgGenerator($request = []) :string
    {
        return fake()->rg(false);
    }
}