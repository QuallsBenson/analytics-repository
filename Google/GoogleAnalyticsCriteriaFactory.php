<?php namespace Quallsbenson\Analytics\Google;


use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria;
use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteriaFormatter;
use RicAnthonyLee\Itemizer\ItemCollectionFactory;
use RicAnthonyLee\Itemizer\ItemFactory;


class GoogleAnalyticsCriteriaFactory{


	public static function make()
	{

		$criteria   = new GoogleAnalyticsCriteria;
		$formatter  = new GoogleAnalyticsCriteriaFormatter;
		$factory    = new ItemFactory;
		$collection = new ItemCollectionFactory;

		$criteria->setFormatter( $formatter )
				 ->setItemFactory( $factory )
				 ->setFactory( $collection );


		return $criteria;

	}


}