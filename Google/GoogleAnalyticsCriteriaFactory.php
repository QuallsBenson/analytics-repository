<?php namespace Quallsbenson\Analytics\Google;


use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria;
use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteriaFormatter;
use RicAnthonyLee\Itemizer\ItemCollectionFactory;
use RicAnthonyLee\Itemizer\ItemFactory;
use Quallsbenson\Analytics\Google\GoogleAnalyticsSegments as Segments;


class GoogleAnalyticsCriteriaFactory{


	protected static $segmentManager;


	public static function setSegmentManager( Segments $manager )
	{

		static::$segmentManager = $manager;

	}

	public static function getSegmentManager()
	{

		return static::$segmentManager;

	}


	public static function make()
	{

		$criteria   = new GoogleAnalyticsCriteria;
		$formatter  = new GoogleAnalyticsCriteriaFormatter;
		$factory    = new ItemFactory;
		$collection = new ItemCollectionFactory;

		$criteria->setFormatter( $formatter )
				 ->setItemFactory( $factory )
				 ->setFactory( $collection )
				 ->setSegmentManager( static::getSegmentManager() );


		return $criteria;

	}


}