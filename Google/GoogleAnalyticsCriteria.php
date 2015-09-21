<?php namespace Quallsbenson\Analytics\Google;


use Criteria\CriteriaBuilder;
use RicAnthonyLee\Itemizer\ItemFactory;
use RicAnthonyLee\Itemizer\ItemCollectionFactory;


class GoogleAnalyticsCriteria extends CriteriaBuilder{


	public $DIMENSIONS = [
			"userType",
			"sessionCount",
			"daysSinceLastSession",
			"userDefinedValue",
			"sessionDurationBucket",
			"referralPath",
			"fullReferrer",
			"campaign",
			"source",
			"medium",
			"sourceMedium",
			"keyword",
			"adContent",
			"socialNetwork",
			"hasSocialSourceReferral",
			"campaignCode",
			"adGroup",
			"adSlot",
			"adSlotPosition",
			"adDistributionNetwork",
			"adMatchType",
			"adKeywordMatchType",
			"adMatchedQuery",
			"adPlacementDomain",
			"adPlacementUrl",
			"adFormat",
			"adTargetingType",
			"adTargetingOption",
			"adDisplayUrl",
			"adDestinationUrl",
			"adwordsCustomerID",
			"adwordsCampaignID",
			"adwordsAdGroupID",
			"adwordsCreativeID",
			"adwordsCriteriaID",
			"adQueryWordCount",
			"isTrueViewVideoAd",
			"goalCompletionLocation",
			"goalPreviousStep1",
			"goalPreviousStep2",
			"goalPreviousStep3",
			"browser",
			"browserVersion",
			"operatingSystem",
			"operatingSystemVersion",
			"mobileDeviceBranding",
			"mobileDeviceModel",
			"mobileInputSelector",
			"mobileDeviceInfo",
			"mobileDeviceMarketingName",
			"deviceCategory",
			"dataSource",
			"continent",
			"subContinent",
			"country",
			"region",
			"metro",
			"city",
			"latitude",
			"longitude",
			"networkDomain",
			"networkLocation",
			"cityId",
			"countryIsoCode",
			"regionId",
			"regionIsoCode",
			"subContinentCode",
			"flashVersion",
			"javaEnabled",
			"language",
			"screenColors",
			"sourcePropertyDisplayName",
			"sourcePropertyTrackingId",
			"screenResolution",
			"socialActivityEndorsingUrl",
			"socialActivityDisplayName",
			"socialActivityPost",
			"socialActivityTimestamp",
			"socialActivityUserHandle",
			"socialActivityUserPhotoUrl",
			"socialActivityUserProfileUrl",
			"socialActivityContentUrl",
			"socialActivityTagsSummary",
			"socialActivityAction",
			"socialActivityNetworkAction",
			"hostname",
			"pagePath",
			"pagePathLevel1",
			"pagePathLevel2",
			"pagePathLevel3",
			"pagePathLevel4",
			"pageTitle",
			"landingPagePath",
			"secondPagePath",
			"exitPagePath",
			"previousPagePath",
			"nextPagePath",
			"pageDepth",
			"landingContentGroupXX",
			"previousContentGroupXX",
			"contentGroupXX",
			"nextContentGroupXX",
			"searchUsed",
			"searchKeyword",
			"searchKeywordRefinement",
			"searchCategory",
			"searchStartPage",
			"searchDestinationPage",
			"searchAfterDestinationPage",
			"appInstallerId",
			"appVersion",
			"appName",
			"appId",
			"screenName",
			"screenDepth",
			"landingScreenName",
			"exitScreenName",
			"eventCategory",
			"eventAction",
			"eventLabel",
			"transactionId",
			"affiliation",
			"sessionsToTransaction",
			"daysToTransaction",
			"productSku",
			"productName",
			"productCategory",
			"currencyCode",
			"checkoutOptions",
			"internalPromotionCreative",
			"internalPromotionId",
			"internalPromotionName",
			"internalPromotionPosition",
			"orderCouponCode",
			"productBrand",
			"productCategoryHierarchy",
			"productCategoryLevelXX",
			"productCouponCode",
			"productListName",
			"productListPosition",
			"productVariant",
			"shoppingStage",
			"socialInteractionNetwork",
			"socialInteractionAction",
			"socialInteractionNetworkAction",
			"socialInteractionTarget",
			"socialEngagementType",
			"userTimingCategory",
			"userTimingLabel",
			"userTimingVariable",
			"exceptionDescription",
			"experimentId",
			"experimentVariant",
			"date",
			"year",
			"month",
			"week",
			"day",
			"hour",
			"minute",
			"nthMonth",
			"nthWeek",
			"nthDay",
			"nthMinute",
			"dayOfWeek",
			"dayOfWeekName",
			"dateHour",
			"yearMonth",
			"yearWeek",
			"isoWeek",
			"isoYear",
			"isoYearIsoWeek",
			"nthHour",
			"dcmClickAd",
			"dcmClickAdId",
			"dcmClickAdType",
			"dcmClickAdTypeId",
			"dcmClickAdvertiser",
			"dcmClickAdvertiserId",
			"dcmClickCampaign",
			"dcmClickCampaignId",
			"dcmClickCreativeId",
			"dcmClickCreative",
			"dcmClickRenderingId",
			"dcmClickCreativeType",
			"dcmClickCreativeTypeId",
			"dcmClickCreativeVersion",
			"dcmClickSite",
			"dcmClickSiteId",
			"dcmClickSitePlacement",
			"dcmClickSitePlacementId",
			"dcmClickSpotId",
			"dcmFloodlightActivity",
			"dcmFloodlightActivityAndGroup",
			"dcmFloodlightActivityGroup",
			"dcmFloodlightActivityGroupId",
			"dcmFloodlightActivityId",
			"dcmFloodlightAdvertiserId",
			"dcmFloodlightSpotId",
			"dcmLastEventAd",
			"dcmLastEventAdId",
			"dcmLastEventAdType",
			"dcmLastEventAdTypeId",
			"dcmLastEventAdvertiser",
			"dcmLastEventAdvertiserId",
			"dcmLastEventAttributionType",
			"dcmLastEventCampaign",
			"dcmLastEventCampaignId",
			"dcmLastEventCreativeId",
			"dcmLastEventCreative",
			"dcmLastEventRenderingId",
			"dcmLastEventCreativeType",
			"dcmLastEventCreativeTypeId",
			"dcmLastEventCreativeVersion",
			"dcmLastEventSite",
			"dcmLastEventSiteId",
			"dcmLastEventSitePlacement",
			"dcmLastEventSitePlacementId",
			"dcmLastEventSpotId",
			"userAgeBracket",
			"userGender",
			"interestOtherCategory",
			"interestAffinityCategory",
			"interestInMarketCategory",
			"channelGrouping"
	];


	public $METRICS =[
			"correlationScore",
			"queryProductQuantity",
			"relatedProductQuantity",
			"users",
			"newUsers",
			"percentNewSessions",
			"sessionsPerUser",
			"sessions",
			"bounces",
			"bounceRate",
			"sessionDuration",
			"avgSessionDuration",
			"hits",
			"organicSearches",
			"impressions",
			"adClicks",
			"adCost",
			"CPM",
			"CPC",
			"CTR",
			"costPerTransaction",
			"costPerGoalConversion",
			"costPerConversion",
			"RPC",
			"ROAS",
			"goalXXStarts",
			"goalStartsAll",
			"goalXXCompletions",
			"goalCompletionsAll",
			"goalXXValue",
			"goalValueAll",
			"goalValuePerSession",
			"goalXXConversionRate",
			"goalConversionRateAll",
			"goalXXAbandons",
			"goalAbandonsAll",
			"goalXXAbandonRate",
			"goalAbandonRateAll",
			"socialActivities",
			"pageValue",
			"entrances",
			"entranceRate",
			"pageviews",
			"pageviewsPerSession",
			"uniquePageviews",
			"timeOnPage",
			"avgTimeOnPage",
			"exits",
			"exitRate",
			"contentGroupUniqueViewsXX",
			"searchResultViews",
			"searchUniques",
			"avgSearchResultViews",
			"searchSessions",
			"percentSessionsWithSearch",
			"searchDepth",
			"avgSearchDepth",
			"searchRefinements",
			"percentSearchRefinements",
			"searchDuration",
			"avgSearchDuration",
			"searchExits",
			"searchExitRate",
			"searchGoalXXConversionRate",
			"searchGoalConversionRateAll",
			"goalValueAllPerSearch",
			"pageLoadTime",
			"pageLoadSample",
			"avgPageLoadTime",
			"domainLookupTime",
			"avgDomainLookupTime",
			"pageDownloadTime",
			"avgPageDownloadTime",
			"redirectionTime",
			"avgRedirectionTime",
			"serverConnectionTime",
			"avgServerConnectionTime",
			"serverResponseTime",
			"avgServerResponseTime",
			"speedMetricsSample",
			"domInteractiveTime",
			"avgDomInteractiveTime",
			"domContentLoadedTime",
			"avgDomContentLoadedTime",
			"domLatencyMetricsSample",
			"screenviews",
			"uniqueScreenviews",
			"screenviewsPerSession",
			"timeOnScreen",
			"avgScreenviewDuration",
			"totalEvents",
			"uniqueEvents",
			"eventValue",
			"avgEventValue",
			"sessionsWithEvent",
			"eventsPerSessionWithEvent",
			"transactions",
			"transactionsPerSession",
			"transactionRevenue",
			"revenuePerTransaction",
			"transactionRevenuePerSession",
			"transactionShipping",
			"transactionTax",
			"totalValue",
			"itemQuantity",
			"uniquePurchases",
			"revenuePerItem",
			"itemRevenue",
			"itemsPerPurchase",
			"localTransactionRevenue",
			"localTransactionShipping",
			"localTransactionTax",
			"localItemRevenue",
			"buyToDetailRate",
			"cartToDetailRate",
			"internalPromotionCTR",
			"internalPromotionClicks",
			"internalPromotionViews",
			"localProductRefundAmount",
			"localRefundAmount",
			"productAddsToCart",
			"productCheckouts",
			"productDetailViews",
			"productListCTR",
			"productListClicks",
			"productListViews",
			"productRefundAmount",
			"productRefunds",
			"productRemovesFromCart",
			"productRevenuePerPurchase",
			"quantityAddedToCart",
			"quantityCheckedOut",
			"quantityRefunded",
			"quantityRemovedFromCart",
			"refundAmount",
			"revenuePerUser",
			"totalRefunds",
			"transactionsPerUser",
			"socialInteractions",
			"uniqueSocialInteractions",
			"socialInteractionsPerSession",
			"userTimingValue",
			"userTimingSample",
			"avgUserTimingValue",
			"exceptions",
			"exceptionsPerScreenview",
			"fatalExceptions",
			"fatalExceptionsPerScreenview",
			"metricXX",
			"dcmFloodlightQuantity",
			"dcmFloodlightRevenue",
			"dcmCPC",
			"dcmCTR",
			"dcmClicks",
			"dcmCost",
			"dcmImpressions",
			"dcmROAS",
			"dcmRPC",
			"adsenseRevenue",
			"adsenseAdUnitsViewed",
			"adsenseAdsViewed",
			"adsenseAdsClicks",
			"adsensePageImpressions",
			"adsenseCTR",
			"adsenseECPM",
			"adsenseExits",
			"adsenseViewableImpressionPercent",
			"adsenseCoverage",
			"correlationScore",
			"queryProductQuantity",
			"relatedProductQuantity"
	];


	protected function __setCallbacks()
	{

		parent::__setCallbacks();

	}


	/**
	* set the site id for query
	* @return Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria
	**/


	public function site( $id )
	{

		$site = $this->item()->make( 'site', "ga:".$id );

		$this->addItem( $site );
		return $this;

	}


	/**
	* Set the dimensions that we're using to search
	* @return Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria
	**/


	public function by()
	{

		$dimensions = func_get_args();

		$dimensions = is_array($dimensions[0]) ? $dimensions[0] : $dimensions;


		$custom     = $this->get( "customDimensions" );

		$this->add( "dimensions", function( $criteria, $param ) use ($dimensions, $custom){


			foreach( $dimensions as $d )
			{

				if( $custom && $custom->has( $d ) )
				{

					$criteria->set( $custom->get( $d ) );

				}
				else 
				{

					$criteria->set( $param->make( "ga:".$d, "ga:".$d, $d ) );

				}

			}


		});

		return $this;

	}


	/**
	* Set the metrics for the search
	* @return Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria
	**/


	public function metric()
	{

		$metrics = func_get_args();

		$metrics = is_array($metrics[0]) ? $metrics[0] : $metrics;

		$this->add( "metrics", function( $criteria, $param ) use( $metrics ){


			foreach( $metrics as $m )
			{

				$criteria->add( $param->make( "ga:".$m, "ga:".$m, $m ) );

			}

		});

		return $this;

	}


	/**
	* Set the time frame to search
	* @return Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria
	**/


	public function between( $from, $until )
	{

		$this->add( "timeframe", function( $criteria, $param ) use ( $from, $until ) {


			$criteria->add( $param->make( "start-date", $from, "start" ) );

			$criteria->add( $param->make( "end-date", $until, "end" ) );


		});

		return $this;

	}


	/**
	* Set the order of the search 
	* @return Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria
	**/


	public function orderBy()
	{

		$order = func_get_args();

		$this->add( "sort", function( $criteria, $param ) use ( $order ) {

			foreach( $order as $o )
			{

				$o   = explode( " ", trim( $o ) );

				$key = $o[0];
				$ord = strtolower( $o[1] ) === "desc" ? "-" : "" ; 

				$criteria->add( $param->make( "ga:".$key, $ord."ga:".$key, $key ) );

			}

		});	

		return $this;	

	}

	/**
	* Filter the Results
	* @return Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria
	**/

	public function where( $key, $value )
	{

		$param = func_get_args();
		
		$operator = "==";

		if(count( $param ) === 3)
		{

			$operator = $param[1];
			$value    = $param[2];

		}	

		$operator = trim( $operator );

		$originalOperator = $operator;

		$i = 1;
		$operator = str_replace([ "is greater than or equal to", "greater than or equal"], ">=", $operator, $i );
		$operator = str_replace([ "is less than or equal to", "less than or equal"], "<=", $operator, $i );
		$operator = str_replace([ "greater than" ], ">", $operator, $i );
		$operator = str_replace([ "less than" ], "<", $operator, $i );
		$operator = str_replace([ "contains", "containing" ], "=@", $operator, $i );
		$operator = str_replace([ "does not contain" ], "!@", $operator, $i );
		$operator = str_replace([ "is not equal to", "is not", "isn't", "not"], "!=", $operator, $i );
		$operator = str_replace([ "is equal to", "equals", "is" ],    "==", $operator, $i );


		if( !in_array( $operator, ["==","!=", ">", "<", ">=", "<=", "=@", "!@"] ) )
			throw new \InvalidArgumentException("invalid value: '".$originalOperator."' given for operator ");



		$this->add( "filters", function( $filters, $param ) use ( $key, $value, $operator ) {

			//if the parameter already exists, just update it 

			if( $filters->has( $key ) )
			{

				$filters->get( $key )->setValue( $operator.$value );
				return null;

			}

			//else then create the new filter parameter
			
			$filters->add( $param->make( "ga:".$key, $operator.$value, $key ) );

		});

		return $this;

	}


	/**
	* Set the max number of results to return per search
	* @return Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria
	**/


	public function limit( $limit )
	{

		$limit = $this->item()->make( "max-results", $limit, "limit" );
		$this->addItem( $limit );

		return $this;

	}
}