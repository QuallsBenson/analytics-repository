<?php namespace Quallsbenson\Analytics\Repository;


use Criteria\CriteriaBuilder as Criteria;
use Quallsbenson\Analytics\Interfaces\DatabaseProviderInterface;


class AnalyticsRepository{


	use \RicAnthonyLee\Itemizer\Traits\CallbackMapperTrait;


	public function __construct()
	{

		$this->setCallbackMap([
			"criteria" => "getCriteriaBuilder",
			"database" => "getDatabaseProvider"
		]);

	}


	public function setCriteriaBuilder( Criteria $criteria )
	{

		$this->criteria = $criteria;

	}


	public function getCriteriaBuilder()
	{

		return $this->criteria;

	}


	public function setDatabaseProvider( DatabaseProviderInterface $database )
	{	

		$this->database = $database;

	}


	public function getDatabaseProvider()
	{

		return $this->database;

	}


	public function find()
	{

		$criteria = $this->criteria();
		

		$results  = $this->database()->findBy( $criteria );


		return $results;

	}



}
