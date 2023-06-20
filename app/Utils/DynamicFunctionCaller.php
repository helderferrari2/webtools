<?php

namespace App\Utils;

use App\Traits\Document;
use App\Traits\Password;
use App\Traits\Person;
use App\Traits\Phone;
use DomainException;
use Throwable;

class DynamicFunctionCaller
{
    use Password, Person, Document, Phone;

    public static function call($method, $arguments = [])
    {
        try {
            $response = self::{$method}($arguments);
            return $response;
        } catch (Throwable $th) {
            throw new DomainException($th->getMessage(), $th->getCode());
        }
    }
}
