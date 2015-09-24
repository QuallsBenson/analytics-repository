<?php namespace Quallsbenson\Analytics\Interfaces;

use Google_Service_Analytics_GaData;
use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria as Criteria;


interface GoogleAnalyticsResultFactoryInterface{

	/**
	* creates a result object from analytics object
	**/

	public static function make( Criteria $criteria, Google_Service_Analytics_GaData $rawData );


}