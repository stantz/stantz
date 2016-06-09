<?php

/**
 * AbstractTable
 *
 * Abstract class for Table classes
 *
 * @author      Stantz Development
 * @package     Stantz\Abstracts
 * @version     0.1.0
 */

namespace Stantz\Abstracts;

abstract class AbstractTable
{
    protected $table;

    public function __construct($tablename)
    {
        $this->table = $tablename;
    }
}
