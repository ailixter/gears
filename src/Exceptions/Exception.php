<?php

/*
 * (C) 2018, AII (Alexey Ilyin).
 */

namespace Ailixter\Gears\Exceptions;

/**
 * @author AII (Alexey Ilyin)
 */
class Exception extends \RuntimeException
{
    protected static function getTypename($var)
    {
        return is_object($var) ? get_class($var) : gettype($var);
    }
}
