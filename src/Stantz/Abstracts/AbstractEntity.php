<?php namespace Stantz\Abstracts;

/**
 * AbstractEntity
 *
 * Abstract class for Entity classes
 *
 * @author      Stantz Development
 * @package     Stantz\Abstracts
 * @version     0.1.0
 *
 */

abstract class AbstractEntity
{
  /**
   * Add property to object
   *
   * @param string  $property Name of property to assign to data object
   * @param mixed   $value
   */
  public function __set($property, $value)
  {
    $this->$property = $value;
  }

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
