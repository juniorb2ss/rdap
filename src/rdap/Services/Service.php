<?php 

namespace rdap\Services;

use rdap\Services\ServiceInterface;
use rdap\Bag\CacheInterface;
use rdap\Parser\ParserInterface;
use rdap\Transport\Request;

/**
* Service container
*/
class Service 
{
	/**
	 * Service instance
	 * @var [type]
	 */
	public $service;

	/**
	 * Bag container
	 * @var [type]
	 */
	public $bag;

	/**
	 * Parser container
	 * @var [type]
	 */
	public $parser;

	/**
	 * Set service container
	 * @param ServiceInterface $service [description]
	 * @param CacheInterface   $bag     [description]
	 * @param ParserInterface  $parser  [description]
	 * @param Request          $request [description]
	 */
	public function __construct(ServiceInterface $service, CacheInterface $bag, ParserInterface $parser, Request $request)
	{
		$this->service = $service;
		$this->bag = $bag;
		$this->parser = $parser;
		$this->request = $request;
	}

	/**
	 * [setUrl description]
	 * @param [type] $url [description]
	 */
	public function setUrl($url)
	{
		$this->request->setUrl($url);
		return $this;
	}

	/**
	 * [setDomain description]
	 * @param [type] $domain [description]
	 */
	public function setDomain($domain)
	{
		$this->service->setDomain($domain);
		return $this;
	}

	/**
	 * [details description]
	 * @return [type] [description]
	 */
	public function details()
	{
		$this->request->call();
		$this->service->details($this->request->getResponse(), $this->parser);
	}
}