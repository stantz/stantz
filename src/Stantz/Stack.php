<?php

/**
 * Stack
 *
 * Container for various items using the stack data type. LIFO (Last In First
 * Out)
 *
 * @author      Stantz Development
 * @package     Stantz
 * @version     0.1.0
 *
 */

namespace Stantz;

class Stack
{
  /**
   * Stack container
   * @var array
   */
  private $stack;

  /**
   * Create new stack object
   */
  public function __construct()
  {
    $this->stack = [];
  }

  /**
   * Add item to top of the stack
   * @param  mixed $item
   */
  public function push($item)
  {
    array_push($this->stack, $item);
  }

  /**
   * Returns item from the top of the stack
   * @return mixed
   */
  public function pop()
  {
    return array_pop($this->stack);
  }

  /**
   * View the next item on the stack
   * @return mixed
   */
  public function peek()
  {
    return !$this->isEmpty() ? $this->stack[$this->length() - 1] : NULL;
  }

  /**
   * Determines if the stack is empty or not
   * @return boolean
   */
  public function isEmpty()
  {
    return empty($this->stack);
  }

  /**
   * Gets length of the current stack
   * @return interger
   */
  public function length()
  {
    return (int) count($this->stack);
  }
}
