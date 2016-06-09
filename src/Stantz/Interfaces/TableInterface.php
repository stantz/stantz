<?php

/**
 * TableInterface
 *
 * Interface for Table classes
 *
 * @author      Stantz Development
 * @package     Stantz\Interfaces
 * @version     0.1.0
 *
 */

namespace Stantz\Interfaces;

interface TableInterface
{
    public function query($sql);
}
