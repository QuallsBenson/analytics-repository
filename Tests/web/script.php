<?php

use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteriaFactory as Criteria;
use Quallsbenson\Analytics\Google\GoogleAnalyticsSearchProvider as Repository;
use Quallsbenson\Analytics\Google\GoogleAnalyticsResultFactory as ResultFactory;
use RicAnthonyLee\Itemizer\ItemCollectionFactory;
use RicAnthonyLee\Itemizer\ItemFactory;


$ga = require 'init.php';
require 'html_helpers.php';


Criteria::setSegmentManager( $segments );

//instantiate repository (search provider)
$repository = new Repository( $ga['service'] ); 

$repository->setResultFactory( new ResultFactory );

/*
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





//find new/returning users by medium

//new users

$criteria->find( "newUsers" )
         ->by( "sourceMedium", "ipAddress" );


$newUsersByMedium = $repository->findBy( $criteria );


//all users by medium

$criteria->find( "users" );


$usersByMedium    = $repository->findBy( $criteria );



/*
echo "<pre>";


foreach( $service->management_segments->listManagementSegments() as $seg )
{

	echo get_class( $seg )."\n";

}
*/

//find all converted users - grouped by ip 
//table:

//this query let's us gather all the converted users 
//within given timeframe

/*------------------------------------------------

    users | event_label

-------------------------------------------------*/

/*

$criteria->find( "users" )
         ->by( "event_label" )
         ->where( "event_category", "contact_form" );
*/
//

//

//next we want to source them
//we can loop throw each row, running the following query
//order by date ascending, and only return one row to get the
//earliest source
      

$criteria = Criteria::make();


$criteria->site( $config['site'] ) 
         ->find( "users" )
         ->between( "7daysAgo", date('Y-m-d') )
         ->segment( "paidTraffic" );


$originalSource = $repository->findBy( $criteria );

 


//echo "<pre>";

//var_dump( $originalSource ); exit;


//assign source to lead












