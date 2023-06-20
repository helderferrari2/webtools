<?php

function onlyNumbers($string)
{
    preg_replace('/\D/', '', $string);
}

function objectToArray(object $object)
{
    return json_decode(json_encode($object), true);
}