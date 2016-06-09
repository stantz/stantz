<?php

/**
 * Collection
 *
 * Object for a collection of various items (objects)
 *
 * @author      Stantz Development
 * @package     Stantz
 * @version     0.1.0
 *
 */

 namespace Stantz;

abstract class Collection implements \Iterator
{
  private $collection = [];
  private $index = 0;
  private $current = null;

  public function current()
  {
    return $this->current;
  }

  public function key()
  {
    return $this->index;
  }

  public function next()
  {
    return $this->index++;
  }

  public function rewind()
  {
    $this->index = 0;
    $this->current = null;
  }

  public function valid()
  {
    return $this->current !== null;
  }

  public function add($item)
  {
    $this->collection[] = $item;
  }

  public function remove($key)
  {
    $item = null;

    if(array_key_exists($key, $this->collection)) {
      $item = $this->collection[$key];
      unset($this->collection[$key]);
    }

    return $item;
  }

  public function clear()
  {
    $this->collection[];
    $this->current = null;
    $this->index = 0;
  }

  public function get($key)
  {
    return array_key_exists($key, $this->collection) ? $this->collection[$key] : null;
  }
}
