<?php
namespace rdap\Services;

interface ServiceInterface 
{
	/**
	 * [request description]
	 * @return [type] [description]
	 */
	public function request();

	/**
	 * [response description]
	 * @return [type] [description]
	 */
	public function response();

	/**
	 * [parameters description]
	 * @param  [type] $parameters [description]
	 * @return [type]             [description]
	 */
	public function parameters($parameters);

	/**
	 * [requestType description]
	 * @param  [type] $type [description]
	 * @return [type]       [description]
	 */
	public function requestType($type);

	/**
	 * [setDomain description]
	 * @param [type] $domain [description]
	 */
	public function setDomain($domain);

	/**
	 * [details description]
	 * @return [type] [description]
	 */
	public function details($response, $parserInstance);

	/**
	 * [credentials description]
	 * @param  array  $credentials [description]
	 * @return [type]              [description]
	 */
	public function credentials(array $credentials);

	public function handle();
	public function ldhName();
	public function nameservers();
	public function secureDNS();
	public function links();
	public function entities();
	public function events();
	public function status();
	public function notices();
	public function rdapConformance();

}