<?php
namespace rdap;
use rdap\Services\Service;
use ReflectionClass;

/**
* 
*/
class Reflect 
{
	/**
	 * fire class reflection
	 * @return [type] [description]
	 */
	static function fire()
	{
		$args = func_get_args();
		$class = new ReflectionClass(Service::class);
		return $class->newInstanceArgs($args);
	}
}