<?php
namespace BlueFission\Services;

use ReflectionClass;
use BlueFission\Val;
use BlueFission\Str;
use BlueFission\Obj;
use BlueFission\Arr;
use BlueFission\Behavioral\IDispatcher;
use BlueFission\Behavioral\Behaviors\Behavior;

/**
 * Class Service 
 *
 * @package BlueFission\Services
 */
class Service extends Obj {

	/**
	 * @var array $registrations
	 */
	protected $_registrations;

	/**
	 * @var array $routes
	 */
	protected $_routes;

	/**
	 * @var object $parent
	 */
	protected $_parent;

	/**
	 * @var string $response
	 */
	protected $_response;

	/**
	 * @var int $LOCAL_LEVEL
	 */
	const LOCAL_LEVEL = 1;

	/**
	 * @var int $SCOPE_LEVEL
	 */
	const SCOPE_LEVEL = 2;
	
	/**
	 * @var array $data
	 */
	protected $_data = [
		'name'=>'',
		'arguments'=>'',
		'instance'=>'',
		'type'=>'',
		'scope'=>'',
	];

	/**
	 * Service constructor.
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->_registrations = [];
		$this->scope = $this;
	}

	/**
	 * Returns instance of service
	 * 
	 * @return mixed
	 */
	public function instance()
	{
		if ( isset( $this->instance ) && $this->instance instanceof $this->type ) {
			$service = $this->instance;
		} else {
			$reflection_class = new ReflectionClass($this->type);
			$args = Arr::toArray( $this->arguments );
    		$this->instance = $reflection_class->getConstructor() ? $reflection_class->newInstanceArgs( $args ) : $reflection_class->newInstanceWithoutConstructor();

			foreach ($this->_registrations as $name=>$registrations) {
				usort($registrations, function ($a, $b) {
					if ($a['priority'] == $b['priority']) {
						return 0;
					}
					return ($a['priority'] < $b['priority']) ? -1 : 1;
				});
				foreach ($registrations as $registration) {
					$this->apply( $registration );
				}
			}
		}
		return $this->instance;
	}

	/**
	 * Returns name of service
	 * 
	 * @return string
	 */
	public function name() {
		return $this->name;
	}

	/**
	 * Method to get or set the parent of the current object.
	 *
	 * @param object|null $object  The parent object.
	 *
	 * @return object  The parent object.
	 */
	public function parent($object = null) 
	{
	    if (Val::isNotNull($object)) {
	        $this->_parent = $object;
	    }

	    return $this->_parent;
	}

	/**
	 * Method to broadcast a behavior from the current object.
	 *
	 * @param object $behavior  The behavior object.
	 */
	public function broadcast($behavior) 
	{
	    if ($behavior instanceof Behavior) {
	        $behavior->target = $this;
	    }

	    $this->dispatch($behavior);
	}

	/**
	 * Method to boost a behavior from the current object.
	 *
	 * @param object $behavior  The behavior object.
	 */
	public function boost($behavior) 
	{
	    $parent = $this->parent();

	    if (!$parent) {
	    	$this->broadcast($behavior);
	    } elseif ($parent instanceof Application) {
	        $parent->boost($behavior);
	    } elseif ($parent instanceof Service) {
	        $parent->boost($behavior);
	    } elseif ($parent instanceof IDispatcher) {
	        $parent->dispatch($behavior);
	    }
	}

	/**
	 * Method to send a message to the current object's instance.
	 *
	 * @param string $behavior  The behavior name.
	 * @param mixed  $args      The arguments to pass to the behavior.
	 */
	public function message($behavior, $args = null, $callback = null) 
	{
	    $instance = $this->instance();
	    if ($instance instanceof IDispatcher && is_callable([$instance, 'behavior'])) {
	        $instance->dispatch($behavior, $args);
	        if ($callback) {
	        	if (is_callable($callback)) {
	        		$this->_response = call_user_func_array($callback, $args);
	        	}
	        }
	    } else {
	        $this->_response = $this->call($callback ?? $behavior, $args);
	    }
	}

	/**
	 * Method to call a function on the current object's instance.
	 *
	 * @param string $call  The function name to call.
	 * @param mixed  $args  The arguments to pass to the function.
	 *
	 * @return mixed  The return value of the function.
	 */
	public function call($call, $args = [])
	{
	    if (is_callable([$this->instance, $call])) {
	    	$args = new Arr($args);
	        $return = call_user_func_array([$this->instance, $call], $args());
	        return $return;
	    }
	}

	/**
	 * Method to register a handler for the current object.
	 *
	 * @param string $name      The name of the handler.
	 * @param object $handler   The handler object.
	 * @param int    $level     The level at which to apply the handler (LOCAL_LEVEL or SCOPE_LEVEL).
	 * @param int    $priority  The priority of the handler.
	 */
	public function register($name, $handler, $level = self::LOCAL_LEVEL, $priority = 0)
	{
	    $registration = ['handler' => $handler, 'level' => $level, 'priority' => $priority];
	    $this->_registrations[$name][] = $registration;
	    
	    if (isset($this->instance) && $this->instance instanceof $this->type) {
	        $this->apply($registration);
	    }
	}

	/**
	 * Prepare the callback by binding it to the appropriate scope.
	 *
	 * @param mixed $callback The callback to be prepared
	 *
	 * @return mixed The prepared callback
	 */
	private function prepareCallback( $callback ) {
		if ( is_object($callback) ) {
			$callback = $callback->bindTo($this->scope, $this->instance);
		} elseif (Str::is($callback) && (Str::pos($callback, '::') !== false)) {
			$function = explode('::', $callback);
			$callback = [$callback[0], $function[1]];
		} elseif (Str::is($callback)) {
			$callback = [$this->instance, $callback];
		}

		if (Arr::is($callback) && Arr::size( $callback ) == 2) {
			if ( $this->instance instanceof $callback[0] ) {
				$callback[0] = $this->instance;
			}
		}

		return $callback;
	}

	/**
	 * Apply the registration by calling the `behavior` method on the appropriate scope.
	 *
	 * @param array $registration An array containing the registration data
	 */
	private function apply( $registration ) {
		$level = $registration['level'];
		$handler = $registration['handler'];
		$callback = $handler->callback();
		$this->scope = (is_object($this->scope)) ? $this->scope : $this->instance;

		$callback = $this->prepareCallback($callback);

		if ( $level == self::SCOPE_LEVEL && $this->scope instanceof IDispatcher && is_callable( [ $this->scope, 'behavior' ] ) )
		{
			if ( $this->instance instanceof IDispatcher && is_callable( array( $this->instance, 'behavior')) ) {	
				$this->instance->behavior($handler->name(), $callback);
				$this->echo($this->instance, $handler->name());
			} else {
				$this->scope->behavior($handler->name(), $callback);
			}

			$this->scope->behavior($handler->name(), $this->message);
		} elseif ( $level == self::LOCAL_LEVEL && $this->instance instanceof IDispatcher && is_callable( [ $this->instance, 'behavior' ] ) ) {
			$this->instance->behavior($handler->name(), $callback);
			$this->instance->behavior($handler->name(), $this->message);
			$this->instance->behavior($handler->name(), $this->broadcast);
		} else {
			$this->behavior($handler->name(), $callback);
		}
	}

	public function response(): ?string {
		return $this->_response;
	}
	// public function dispatch( $behavior, $args = null ) {
	// 	// echo "{$behavior}\n";
	// 	if ( $behavior instanceof Behavior && $behavior->target == $this->instance ) {
	// 		$behavior->target = $this;
	// 	}
	// 	parent::dispatch($behavior, $args);
	// }
}