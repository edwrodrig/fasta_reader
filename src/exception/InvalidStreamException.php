<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: edwin
 * Date: 11-06-18
 * Time: 15:53
 */

namespace edwrodrig\fasta_reader\exception;


use Exception;

class InvalidStreamException extends Exception
{

    /**
     * InvalidStreamException constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}