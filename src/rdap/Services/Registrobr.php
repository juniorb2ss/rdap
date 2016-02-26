<?php 
namespace rdap\Services;
use rdap\Services\ServiceInterface;

/**
* 
*/
class Registrobr implements ServiceInterface
{
	/**
	 * [$url description]
	 * @var [type]
	 */
	private $url;

	/**
	 * [$domain description]
	 * @var [type]
	 */
	private $domain;

	/**
	 * [$credentials description]
	 * @var [type]
	 */
	private $credentials;

	/**
	 * [$parsed description]
	 * @var [type]
	 */
	private $parsed;

	/**
	 * [request description]
	 * @return [type] [description]
	 */
	public function request(){}

	/**
	 * [response description]
	 * @return [type] [description]
	 */
	public function response(){}

	/**
	 * [parameters description]
	 * @param  [type] $parameters [description]
	 * @return [type]             [description]
	 */
	public function parameters($parameters){}

	/**
	 * [requestType description]
	 * @param  [type] $type [description]
	 * @return [type]       [description]
	 */
	public function requestType($type){}

	/**
	 * [setDomain description]
	 * @param [type] $domain [description]
	 */
	public function setDomain($domain)
	{
		$this->domain = $domain;
	}

	/**
	 * [details description]
	 * @return [type] [description]
	 */
	public function details($response, $parser)
	{
		$this->parsed = $parser->json($response);
	}

	/**
	 * [handle description]
	 * @return [type] [description]
	 */
	public function handle()
	{	
		return $this->parsed->get('handle');
	}

	/**
	 * [ldhName description]
	 * @return [type] [description]
	 */
	public function ldhName()
	{
		return $this->parsed->get('ldhName');
	}

	public function nameservers()
	{
		return $this->parsed->get('nameservers');
	}

	/**
	 * [secureDNS description]
	 * @return [type] [description]
	 */
	public function secureDNS()
	{
		return $this->parsed->get('secureDNS');
	}

	/**
	 * [links description]
	 * @return [type] [description]
	 */
	public function links()
	{
		return $this->parsed->get('links');
	}

	/**
	 * [entities description]
	 * @return [type] [description]
	 */
	public function entities()
	{
		return $this->parsed->get('entities');
	}

	/**
	 * [entities description]
	 * @return [type] [description]
	 */
	public function events()
	{
		return $this->parsed->get('events');
	}

	/**
	 * [entities description]
	 * @return [type] [description]
	 */
	public function status()
	{
		return $this->parsed->get('status');
	}

	/**
	 * [entities description]
	 * @return [type] [description]
	 */
	public function notices()
	{
		return $this->parsed->get('notices');
	}

	/**
	 * [entities description]
	 * @return [type] [description]
	 */
	public function rdapConformance()
	{
		return $this->parsed->get('rdapConformance');
	}

	/**
	 * [credentials description]
	 * @param  array  $credentials [description]
	 * @return [type]              [description]
	 */
	public function credentials(array $credentials){}
}