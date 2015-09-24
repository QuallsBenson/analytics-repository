<?php namespace Quallsbenson\Analytics\Google;


use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria;
use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteriaFormatter;
use RicAnthonyLee\Itemizer\ItemCollectionFactory;
use RicAnthonyLee\Itemizer\ItemFactory;
use Google_Service_Analytics_GaData;
use Quallsbenson\Analytics\Google\GoogleAnalyticsResult;
use Quallsbenson\Analytics\Interfaces\GoogleAnalyticsResultFactoryInterface;


class GoogleAnalyticsResultFactory implements GoogleAnalyticsResultFactoryInterface{


	public static function make( GoogleAnalyticsCriteria $criteria, Google_Service_Analytics_GaData $raw )
	{

        $result = new GoogleAnalyticsResult;

		$result->setRawResult( $raw )
		       ->setCriteria( $criteria )
		       ->setFactory( new ItemCollectionFactory )
		       ->setItemFactory( new ItemFactory )
		       ->setColumns()
		       ->setRows();    

		return $result;            

	}


}