<?php

use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteriaFactory as Criteria;
use Quallsbenson\Analytics\Google\GoogleAnalyticsSearchProvider as Repository;


$ga = require 'init.php';
require 'html_helpers.php';


//create search criteria
$criteria   = Criteria::make();

//date range of search
$from    = date('Y-m-d', time() + (60 * 60 * 24 * -7) );
$to      = date('Y-m-d');

//set site and date range
$criteria->site( $config['site'] )
         ->between( $from, $to );

//register custom dimensions
$criteria->add("customDimensions", function( $dimensions, $factory ){

	$dimensions->add( $factory->make( "dimension1", "ga:dimension1", "ipAddress" ) );

});         


//instantiate repository (search provider)
$repository = new Repository( $ga['service'] ); 


//find new/returning users by medium

//new users

$criteria->metric( "newUsers" )
         ->by( "sourceMedium" );


$newUsersByMedium = $repository->findBy( $criteria );


//all users by medium

unset( $criteria['metrics'] );

$criteria->metric( "users" );


$usersByMedium    = $repository->findBy( $criteria );










