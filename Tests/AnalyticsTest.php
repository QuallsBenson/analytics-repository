<?php


use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria;
use Quallsbenson\Analytics\Tests\Mock\GoogleAnalyticsSearchProvider;
use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteriaFactory;


require dirname(dirname(__FILE__)) .'/vendor/autoload.php';


class AnalyticsTest extends PHPUnit_Framework_TestCase{


	public function repository()
	{

		return new GoogleAnalyticsSearchProvider;

	}


	public function setCustomDimensions( GoogleAnalyticsCriteria $criteria )
	{

		$criteria->add("customDimensions", function( $c, $p ){

			$c->add( $p->make( "dimension1", "ga:dimension1", "ipAddress" ) );

		});

		return $criteria;

	}


	public function testInit()
	{

		$criteria   = new GoogleAnalyticsCriteriaFactory;
		$ga         = $criteria->make();
		$ga         = $this->setCustomDimensions( $ga );

		return $ga;

	}

	/**
	* @depends testInit
	**/

	public function testMetrics( GoogleAnalyticsCriteria $criteria )
	{

		$criteria->metric( "sessions", "percentNewSessions" );	

		$metrics = $criteria["metrics"];

		$this->assertEquals( $metrics->count(), 2 );
		$this->assertEquals( $metrics['sessions']->getName(), "ga:sessions" );

		return $criteria;

	}

	/**
	* @depends testInit
	**/


	public function testDimensions( GoogleAnalyticsCriteria $criteria )
	{

		$criteria->by( "ipAddress" );

		$dimensions = $criteria['dimensions'];

		$this->assertEquals( $dimensions->count(), 1 );
		$this->assertEquals( $dimensions['ipAddress'], "ga:dimension1" );		


	}

	/**
	* @depends testInit
	**/

	public function testFormatting( GoogleAnalyticsCriteria $criteria )
	{

		$this->repository()->findBy( $criteria );

	}


}