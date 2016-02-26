<?php
namespace rdap\Transport;

/**
* 	
*/
class Request
{
	/**
	 * [$url description]
	 * @var [type]
	 */
	private $url;

	/**
	 * [$response description]
	 * @var [type]
	 */
	private $response;

	/**
	 * [$request description]
	 * @var [type]
	 */
	private $request;

	/**
	 * [setUrl description]
	 * @param [type] $url [description]
	 */
	public function setUrl($url)
	{
		$this->url = $url;
	}

	/**
	 * [call description]
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function call()
	{
		$json = file_get_contents( $this->url );
		$this->response = json_decode($json);
		return $this;
	}

	public function getResponse()
	{
		return $this->response;
	}
}