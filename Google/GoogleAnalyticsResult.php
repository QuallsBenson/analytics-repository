<?php namespace Quallsbenson\Analytics\Google;


use Criteria\CriteriaBuilder;
use Quallsbenson\Analytics\Google\GoogleAnalyticsCriteria;
use Google_Service_Analytics_GaData;
use RicAnthonyLee\Itemizer\Interfaces\ItemCollectionInterface;
use RicAnthonyLee\Itemizer\Interfaces\ItemFactoryInterface;


class GoogleAnalyticsResult extends CriteriaBuilder{


	protected $criteria, $rawResult, $columns;


	public function setCriteria( GoogleAnalyticsCriteria $criteria )
	{
		//get a clone of the criteria because it 
		//should not change after result
		$this->criteria = clone $criteria;

		return $this;

	}

	public function getCriteria()
	{

		//return a clone to prevent original from being altered

		return clone $this->criteria;

	}

	public function setRawResult( Google_Service_Analytics_GaData $data )
	{

		$this->rawResult = clone $data;
		return $this;

	}


	public function getRawResult()
	{

		return clone $this->rawResult;

	}


	public function setColumns()
	{

		$this->addParameter( "columns", [ $this, 'setColumnCollection' ]  );

		return $this;

	}

	public function setRows()
	{

		$this->addParameter( "rows", [ $this, 'setRowCollection' ]  );

		return $this;

	}

	public function setRowCollection( ItemCollectionInterface $rows, ItemFactoryInterface $item )
	{

		$raw  = $this->getRawResult();


		$columnNames = array_keys( iterator_to_array( $this['columns'] ) );


		foreach( $raw['rows'] as $i => $rawColumns )
		{

			//create the column collection and push to rows collection
			$columnCollection = $this->factory()->make( $i );

			foreach( $rawColumns as $k => $columnValue )
			{
				$key = $columnNames[$k];
				$val = $columnValue;

				$columnCollection->add( $this->item()->make( $key, $val ) );
 
			}

			//add columns collection (row) to row collection
			$rows->add( $columnCollection );

		} 

	}


	public function setColumnCollection( ItemCollectionInterface $columns, ItemFactoryInterface $item )
	{

		$criteria = $this->getCriteria();
		$raw      = $this->getRawResult();

		$headers          = $raw['columnHeaders'];
		$formattedHeaders = array_merge(
		        iterator_to_array( $criteria['dimensions'] ), 
		        iterator_to_array( $criteria['metrics'] ) 
		);

		foreach( $headers as $header )
		{

			foreach( $formattedHeaders as $fh )
			{

				if( $fh->getValue() === $header['name'] )
				{
					$key   = $fh->getAlias();
					$val   = $fh->getAlias();
					$alias = $fh->getAlias();

					$columns->add( $item->make( $key, $val, $alias ) );

				}

			}

		}



	}



}