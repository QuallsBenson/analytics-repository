<?php namespace Quallsbenson\Analytics\Interfaces;

use Criteria\CriteriaBuilder as Criteria;


interface DatabaseProviderInterface{

	/**
	* Perform search using given criteria
	**/

	public function findBy( Criteria $criteria );


}