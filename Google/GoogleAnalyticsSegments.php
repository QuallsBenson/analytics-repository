<?php namespace Quallsbenson\Analytics\Google;


use Google_Service_Analytics_ManagementSegments_Resource as SegmentManager;


class GoogleAnalyticsSegments{


	protected $manager, $segments;


	public function __construct( SegmentManager $manager )
	{

		$this->setManager( $manager )
		     ->setSegments( $manager->listManagementSegments() );

	}


	public function setManager( SegmentManager $manager )
	{

		$this->manager = $manager;
		return $this;

	}

	public function getManager()
	{

		return $this->manager;

	}


	public function getSegment( $id )
	{

		return @$this->segments[ $id ];

	}

	public function getSegments()
	{

		return $this->segments;

	}

	public function setSegments( $segments )
	{

		foreach( $segments as $seg )
		{

			$id  = $this->formatSegmentId( $seg->getName() );



			$this->segments[ $id ] = $seg;

		}

		return $this;

	}

	public static function formatSegmentId( $segment )
	{

		$segment = str_replace([' ','-'], '_', $segment);
		$segment = preg_replace('/[^A-Za-z0-9\-]/', '_', $segment);

	    return lcfirst(
	      implode(
	        '',
	        array_map(
	          'ucfirst',
	          array_map(
	            'strtolower',
	            explode(
	              '_', $segment)))));

	}




}