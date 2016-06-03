<?php namespace Stantz;

/**
 * Queue
 *
 * Object for queueing various items. Uses the queue data type or FIFO (First
 * In First Out)
 *
 * @author      Stantz Development
 * @package     Stantz
 * @version     0.1.0
 *
 */

class Queue
{
  /**
   * Array to hold queued items
   * @var array
   */
  private $queue;

  /**
   * Creates new queue object with an empty queue
   */
  public function __construct()
  {
    $this->queue = [];
  }

  /**
   * Adds a new item to the back of queue
   * @param  mixed $item
   */
  public function enqueue($item)
  {
    array_push($this->queue, $item);
    $this->length++;
  }

  /**
   * Pops item off the front of the queue
   * @return mixed
   */
  public function dequeue()
  {
    $item = array_shift($this->queue);
    $this->length--;
    return $item;
  }

  /**
   * Removes all items from queue
   * @return void
   */
  public function clear()
  {
    $this->queue = [];
  }

  /**
   * Returns the item from the front of the queue
   * @return mixed
   */
  public function front()
  {
    return !$this->isEmpty() ? $this->queue[0] : NULL;
  }

  /**
   * Returns item from the back of the queue
   * @return [type] [description]
   */
  public function back()
  {
    return !$this->isEmpty() ? $this->queue[$this->length() - 1] : NULL;
  }

  /**
   * Determine if queue is empty or not
   * @return boolean
   */
  public function isEmpty()
  {
    return empty($this->queue);
  }

  /**
   * Return lenght of queue
   * @return integer
   */
  public function length()
  {
    return (int) count($this->queue);
  }
}
