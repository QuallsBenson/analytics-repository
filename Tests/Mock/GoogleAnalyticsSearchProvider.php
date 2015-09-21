<?php namespace Quallsbenson\Analytics\Tests\Mock;


use Criteria\CriteriaBuilder as Criteria;
use Quallsbenson\Analytics\Interfaces\DatabaseProviderInterface;


class GoogleAnalyticsSearchProvider implements DatabaseProviderInterface{


	protected $service = null;

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

		//just dump the parameters to make sure they're formatted correctly

		var_dump( $parameters );

	}


}