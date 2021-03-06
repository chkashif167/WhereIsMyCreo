<?php
namespace com\checkout\helpers;

final class ApiHttpClient
{
	/**
	 * @param String $requestUri
	 * @param String $authenticationKey
	 * @param string|null $requestPayload
	 */
	public static function postRequest( $requestUri,  $authenticationKey, $requestPayload = null)
	{
		$requestPayload['method'] = 'POST';
		$temp = \CheckoutApi_Api::getApi()->request($requestUri,$requestPayload, true);

		if($temp->isValid()) {
			return $temp;
		}else {

			throw new \Exception($temp->getExceptionState ()->getErrorMessage ());

		}
	}

	/**
	 * @param String $requestUri
	 * @param String $authenticationKey
	 * @param string|null $requestPayload
	 */
	public static function getRequest( $requestUri,  $authenticationKey, $requestPayload = null)
	{
		$requestPayload['method'] = 'GET';
		$temp = \CheckoutApi_Api::getApi()->request($requestUri,$requestPayload, true);
		if($temp->isValid()) {
			return $temp;
		}else {
			throw new \Exception($temp->getExceptionState ()->getErrorMessage ());
		}
	}

	/**
	 * @param String $requestUri
	 * @param String $authenticationKey
	 * @param string|null $requestPayload
	 */
	public static function putRequest( $requestUri,  $authenticationKey, $requestPayload = null)
	{
		$requestPayload['method'] = 'PUT';
		$temp =  \CheckoutApi_Api::getApi()->request($requestUri,$requestPayload, true);

		if($temp->isValid()) {
			return $temp;
		}else {
			throw new \Exception($temp->getExceptionState ()->getErrorMessage ());
		}
	}


	/**
	 * @param String $requestUri
	 * @param String $authenticationKey
	 * @param string|null $requestPayload
	 */
	public static function deleteRequest( $requestUri,  $authenticationKey, $requestPayload = null)
	{
		$requestPayload['method'] = 'DELETE';
		$temp =  \CheckoutApi_Api::getApi()->request($requestUri,$requestPayload, true);

		if($temp->isValid()) {
			return $temp;
		}else {
			throw new \Exception($temp->getExceptionState ()->getErrorMessage ());
		}
	}
}
