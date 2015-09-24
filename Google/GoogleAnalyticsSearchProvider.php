<?php namespace Quallsbenson\Analytics\Google;


use Criteria\CriteriaBuilder as Criteria;
use Quallsbenson\Analytics\Interfaces\DatabaseProviderInterface;
use Quallsbenson\Analytics\Interfaces\GoogleAnalyticsResultFactoryInterface;
use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria;
use Google_Service_Analytics_GaData;


class GoogleAnalyticsSearchProvider implements DatabaseProviderInterface{


	protected $service = null;


	public function __construct( \Google_Service_Analytics $service )
	{

		$this->service = $service;

	}


	/**
	* Perform search using given criteria
	**/


	public function findBy( Criteria $criteria )
	{

		$parameters = $criteria->format();

		$options    = array(
		    'dimensions'  => @$parameters['dimensions'],
		    'sort' 		  => @$parameters['sort'],
		    'max-results' => @$parameters['max-results'],
		    'filters'     => @$parameters['filters']
		);

		$results =  $this->service->data_ga->get(
				    		@$parameters["site"],
				    		@$parameters["start-date"],
				    		@$parameters["end-date"],
				    		@$parameters["metrics"],
				    		$options
					);
  
		return $this->createResult( $criteria, $results );
	}


	public function createResult( GoogleAnalyticsCriteria $criteria, Google_Service_Analytics_GaData $rawData )
	{

		return $this->getResultFactory()->make( $criteria, $rawData );

	}

	public function setResultFactory( GoogleAnalyticsResultFactoryInterface $factory )
	{

		$this->resultFactory = $factory;

		return $this;

	}

	public function getResultFactory()
	{

		return $this->resultFactory;

	}



}