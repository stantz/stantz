<?php

/**
 * EntityInterface
 *
 * Interface for Entity classes
 *
 * @author      Stantz Development
 * @package     Stantz\Interfaces
 * @version     0.1.0
 *
 */

namespace Stantz\Interfaces;

interface EntityInterface
{
    public function __construct();
    public function __toString();
    public function __clone();
}
