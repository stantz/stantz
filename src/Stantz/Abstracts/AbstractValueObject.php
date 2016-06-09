<?php

/**
 * AbstractValueObject
 *
 * Abstract class for Value Object classes
 *
 * @author      Stantz Development
 * @package     Stantz\Abstracts
 * @version     0.1.0
 */

namespace Stantz\Abstracts;

abstract class AbstractValueObject
{
  /**
   * Returns specific property's value
   * 
   * @param  string $property Name of requested property
   * @return mixed
   */
  public function __get($property)
  {
    return property_exists($this, $property) ? $this->$property : NULL;
  }
}
