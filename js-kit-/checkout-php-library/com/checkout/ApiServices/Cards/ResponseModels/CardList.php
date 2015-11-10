<?php
/**
 * Created by PhpStorm.
 * User: dhiraj.gangoosirdar
 * Date: 3/18/2015
 * Time: 11:52 AM
 */

namespace com\checkout\ApiServices\Cards\ResponseModels;


class CardList
{
	private $_object;
	private $_count;
	private $_data;

	public function __construct($response)
	{
		$this->_setCount ( $response->getCount() );
		$this->_setData ( $response->getData() );
		$this->_setObject ( $response->getObject() );
	}
	/**
	 * @param mixed $count
	 */
	private function _setCount ( $count )
	{
		$this->_count = $count;
	}

	/**
	 * @param mixed $data
	 */
	private function _setData ( $data )
	{
		$arrayData = $data->toArray();
		foreach($arrayData as $card){

			$this->_data[] = $this->getCard($card);
		}
	}

	/**
	 * @param mixed $object
	 */
	private function _setObject ( $object )
	{
		$this->_object = $object;
	}

	private function getCard ( $card )
	{
		$dummyObjCart = new \CheckoutApi_Lib_RespondObj();
		$dummyObjCart->setConfig($card);
		$cardObg = new \com\checkout\ApiServices\Cards\ResponseModels\Card($dummyObjCart);
		return $cardObg;
	}
}