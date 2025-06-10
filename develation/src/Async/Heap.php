<?php

namespace BlueFission\Async;

use BlueFission\Behavioral\Behaviors\Event;
use BlueFission\Behavioral\Behaviors\State;

/**
 * Class Heap for managing a stack of tasks.
 * This class extends the Async abstract class to provide specific implementations for task stacking.
 */
class Heap extends Async {

    /**
     * Adds a task to the stack.
     * 
     * @param callable $function The function that represents the task to be executed.
     * @param int $priority The priority of the task; higher values are processed earlier.
     * @return Heap The instance of the Heap class.
     */
    public static function do($function, $priority = 10) {
        return static::exec($function, $priority);
    }

    /**
     * Optional: Implement additional stack-specific methods like task dependency management, delay between tasks, etc.
     */

    // Additional methods can be implemented here
}
