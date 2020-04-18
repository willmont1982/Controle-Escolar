<?php

namespace App\Exceptions;

use Exception;

/**
 * Repository Exception.
 *
 * @author Willian>
 */
class RepositoryException extends Exception
{
    protected $message = 'Error on CRUD';
    protected $code = 500;
}
