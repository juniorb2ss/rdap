<?php 
namespace rdap\Parser;
use rdap\Parser\ParserInterface;

/**
* 
*/
class Parser implements ParserInterface
{
	/**
	 * [$json description]
	 * @var [type]
	 */
	private $json;

	/**
	 * [$united description]
	 * @var [type]
	 */
	private $united;

	/**
	 * [json description]
	 * @param  [type] $json [description]
	 * @return [type]       [description]
	 */
	public function json($json)
	{
		$this->json = $json;
		$this->united = $json;
		return $this;
	}

	/**
	 * [get description]
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	public function get($key = false)
	{
		if($key)
		{
			if(property_exists($this->united, $key))
			{
				$this->united = $this->united->$key;
			}

			if(is_string($this->united))
			{
				return $this->united;
			}

			return $this->united;
		}

		return $this->united;
	}
}