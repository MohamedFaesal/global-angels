<?php

namespace App\Exceptions;

use Throwable;

/**
 * NotFoundException Class not found exception
 * @package App\Exceptions
 */
class NotFoundException extends \Exception
{
    /**
     * NotFoundException constructor.
     * @param string $entity
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($entity = "", $code = 0, Throwable $previous = null)
    {
        $message =  "$entity Not Found";
        parent::__construct($message, $code, $previous);
    }
}