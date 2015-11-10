<?php

namespace com\checkout\helpers;


class ApiUrls
{
	private $_baseApiUri                = null;
	private $_cardTokensApiUri          = null;
	private $_paymentTokensApiUri       = null;
	private $_cardProvidersUri          = null;
	private $_localPaymentProvidersUri  = null;
	private $_customersApiUri           = null;
	private $_cardsApiUri               = null;
	private $_cardChargesApiUri         = null;
	private $_cardTokenChargesApiUri    = null;
	private $_defaultCardChargesApiUri  = null;
	private $_chargeRefundsApiUri       = null;
	private $_captureChargesApiUri      = null;
	private $_updateChargesApiUri       = null;
	private $_retrieveChargesApiUri     = null;
	private $_verifyChargesApiUri       = null;
	private $_chargeWithPaymentTokenUri = null;


	public function __construct()
	{
		$this->setBaseApiUri(\com\checkout\helpers\AppSetting::getSingletonInstance()->getBaseApiUri());
	}
	/**
	 * get the base api url
	 * @return string
	 */
	public function getBaseApiUri ()
	{
		return $this->_baseApiUri;
	}

	/**
	 * set the base api url
	 * @param string $baseApiUri
	 */
	public function setBaseApiUri ( $baseApiUri )
	{
		$this->_baseApiUri = $baseApiUri;
	}

	/**
	 * return url to verify a charge
	 * @return string
	 */
	public function getVerifyChargesApiUri ()
	{
		if(!$this->_verifyChargesApiUri) {
			$this->setVerifyChargesApiUri($this->getBaseApiUri()."/charges/%s");
		}

		return $this->_verifyChargesApiUri;
	}

	/**
	 * set the url for verify a charge
	 * @param string $verifyChargesApiUri
	 */
	public function setVerifyChargesApiUri ( $verifyChargesApiUri )
	{
		$this->_verifyChargesApiUri = $verifyChargesApiUri;
	}

	/**
	 * return card token url
	 * @return string
	 */
	public function getCardTokensApiUri ()
	{
		if(!$this->_cardTokensApiUri) {
			$this->setCardTokensApiUri($this->getBaseApiUri()."/tokens/card");
		}
		return $this->_cardTokensApiUri;
	}

	/**
	 * set card token url
	 * @param string $cardTokensApiUri
	 */
	public function setCardTokensApiUri ( $cardTokensApiUri )
	{
		$this->_cardTokensApiUri = $cardTokensApiUri;
	}

	/**
	 * set payment token url
	 * @return string
	 */
	public function getPaymentTokensApiUri ()
	{
		if(!$this->_paymentTokensApiUri) {
			$this->setPaymentTokensApiUri($this->getBaseApiUri()."/tokens/payment");
		}
		return $this->_paymentTokensApiUri;
	}

	/**
	 * set payment token url
	 * @param string $paymentTokensApiUri
	 */
	public function setPaymentTokensApiUri ( $paymentTokensApiUri )
	{
		$this->_paymentTokensApiUri = $paymentTokensApiUri;
	}

	/**
	 * return payment token url
	 * @return string
	 */
	public function getCardProvidersUri ()
	{
		if(!$this->_cardProvidersUri) {
			$this->setCardProvidersUri($this->getBaseApiUri()."/providers/cards");
		}
		return $this->_cardProvidersUri;
	}

	/**
	 * set payment token url
	 * @param string $cardProvidersUri
	 */
	public function setCardProvidersUri ( $cardProvidersUri )
	{
		$this->_cardProvidersUri = $cardProvidersUri;
	}

	/**
	 * set local payment url
	 * @return string
	 */
	public function getLocalPaymentProvidersUri ()
	{
		if(!$this->_localPaymentProvidersUri) {
			$this->setLocalPaymentProvidersUri($this->getBaseApiUri()."/providers/localpayments");
		}

		return $this->_localPaymentProvidersUri;
	}

	/**
	 * set local payment url
	 * @param string $localPaymentProvidersUri
	 */
	public function setLocalPaymentProvidersUri ( $localPaymentProvidersUri )
	{
		$this->_localPaymentProvidersUri = $localPaymentProvidersUri;
	}

	/**
	 * return customer url
	 * @return string
	 */
	public function getCustomersApiUri ()
	{
		if(!$this->_customersApiUri) {
			$this->setCustomersApiUri($this->getBaseApiUri()."/customers");
		}

		return $this->_customersApiUri;
	}

	/**
	 * set customer url
	 * @param string $customersApiUri
	 */
	public function setCustomersApiUri ( $customersApiUri )
	{
		$this->_customersApiUri = $customersApiUri;
	}

	/**
	 * get card url
	 * @return string
	 */
	public function getCardsApiUri ()
	{
		if(!$this->_cardsApiUri) {
			$this->setCardsApiUri($this->getBaseApiUri()."/customers/%s/cards");
		}
		return $this->_cardsApiUri;
	}

	/**
	 * set card url
	 * @param string $cardsApiUri
	 */
	public function setCardsApiUri ( $cardsApiUri )
	{
		$this->_cardsApiUri = $cardsApiUri;
	}

	/**
	 * get card charge url
	 * @return string
	 */
	public function getCardChargesApiUri ()
	{
		if(!$this->_cardChargesApiUri) {
			$this->setCardChargesApiUri($this->getBaseApiUri()."/charges/card");
		}
		return $this->_cardChargesApiUri;
	}

	/**
	 * set cart charge url
	 * @param string $cardChargesApiUri
	 */
	public function setCardChargesApiUri ( $cardChargesApiUri )
	{
		$this->_cardChargesApiUri = $cardChargesApiUri;
	}

	/**
	 * get card token charge url
	 * @return string
	 */
	public function getCardTokenChargesApiUri ()
	{
		if(!$this->_cardTokenChargesApiUri) {
			$this->setCardTokenChargesApiUri($this->getBaseApiUri()."/charges/token");
		}
		return $this->_cardTokenChargesApiUri;
	}

	/**
	 * set card token charge url
	 * @param string $cardTokenChargesApiUri
	 */
	public function setCardTokenChargesApiUri ( $cardTokenChargesApiUri )
	{
		$this->_cardTokenChargesApiUri = $cardTokenChargesApiUri;
	}


	/**
	 * get the charge payment token url
	 * @return string
	 */
	public function getChargeWithPaymentTokenUri ()
	{
		if(!$this->_chargeWithPaymentTokenUri) {
			$this->setChargeWithPaymentTokenUri($this->getBaseApiUri()."/charges/js/card");
		}

		return $this->_chargeWithPaymentTokenUri;
	}

	/**
	 * set the charge payment token url
	 * @param string $chargeWithPaymentTokenUri
	 */
	public function setChargeWithPaymentTokenUri ( $chargeWithPaymentTokenUri )
	{
		$this->_chargeWithPaymentTokenUri = $chargeWithPaymentTokenUri;
	}

	/**
	 * @return string
	 */
	public function getDefaultCardChargesApiUri ()
	{
		if(!$this->_defaultCardChargesApiUri) {
			$this->setDefaultCardChargesApiUri($this->getBaseApiUri()."/charges/customer");
		}
		return $this->_defaultCardChargesApiUri;
	}

	/**
	 * @param string $defaultCardChargesApiUri
	 */
	public function setDefaultCardChargesApiUri ( $defaultCardChargesApiUri )
	{
		$this->_defaultCardChargesApiUri = $defaultCardChargesApiUri;
	}

	/**
	 * @return string
	 */
	public function getChargeRefundsApiUri ()
	{
		if(!$this->_chargeRefundsApiUri) {
			$this->setChargeRefundsApiUri($this->getBaseApiUri()."/charges/%s/refund");
		}
		return $this->_chargeRefundsApiUri;
	}

	/**
	 * @param string $chargeRefundsApiUri
	 */
	public function setChargeRefundsApiUri ( $chargeRefundsApiUri )
	{
		$this->_chargeRefundsApiUri = $chargeRefundsApiUri;
	}

	/**
	 * @return string
	 */
	public function getCaptureChargesApiUri ()
	{
		if(!$this->_captureChargesApiUri) {
			$this->setCaptureChargesApiUri($this->getBaseApiUri()."/charges/%s/capture");
		}
		return $this->_captureChargesApiUri;
	}

	/**
	 * @param string $captureChargesApiUri
	 */
	public function setCaptureChargesApiUri ( $captureChargesApiUri )
	{
		$this->_captureChargesApiUri = $captureChargesApiUri;
	}

	/**
	 * @return string
	 */
	public function getUpdateChargesApiUri ()
	{
		if(!$this->_updateChargesApiUri) {
			$this->setUpdateChargesApiUri($this->getBaseApiUri()."/charges/%s");
		}
		return $this->_updateChargesApiUri;
	}

	/**
	 * @return string
	 */
	public function getRetrieveChargesApiUri ()
	{

		if(!$this->_retrieveChargesApiUri) {
			$this->setRetrieveChargesApiUri($this->getBaseApiUri()."/charges/%s");
		}

		return $this->_retrieveChargesApiUri;
	}

	/**
	 * @param string $retrieveChargesApiUri
	 */
	public function setRetrieveChargesApiUri ( $retrieveChargesApiUri )
	{
		$this->_retrieveChargesApiUri = $retrieveChargesApiUri;
	}

	/**
	 * @param string $updateChargesApiUri
	 */
	public function setUpdateChargesApiUri ( $updateChargesApiUri )
	{
		$this->_updateChargesApiUri = $updateChargesApiUri;
	}

}