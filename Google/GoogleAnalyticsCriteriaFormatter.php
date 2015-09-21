<?php namespace Quallsbenson\Analytics\Google;


use RicAnthonyLee\Itemizer\Item;
use RicAnthonyLee\Itemizer\Interfaces\ItemInterface;
use RicAnthonyLee\Itemizer\Interfaces\FormattableItemInterface;
use RicAnthonyLee\Itemizer\Interfaces\FormatterInterface;
use RicAnthonyLee\Itemizer\Interfaces\ItemCollectionInterface;



class GoogleAnalyticsCriteriaFormatter implements FormatterInterface{



	public function format( ItemInterface $item )
	{

		return $this->formatRequestParameters( $item );

	}


	public function formatRequestParameters( ItemCollectionInterface $item )
	{

		$result = [];

		foreach( $item as $i )
		{

			switch( $i->getName() )
			{

				case "dimensions":

					$result['dimensions'] = implode(",", iterator_to_array($i) );

				break;
				case "timeframe":

					$result['start-date'] = $i['start']->getValue();
					$result['end-date']   = $i['end']->getValue();

				break;
				case "metrics":

					$result['metrics'] = implode(",", iterator_to_array($i) );

				break;
				case "site":

					$result['site'] = $i->getValue();

				break;
				case 'sort':

					$result['sort'] = implode(",", iterator_to_array($i) );

				break;
				case 'max-results':

					$result['max-results']  = $i->getValue();

				break;
				case 'filters':

					$filters = [];

					foreach( $i as $f )
					{

						$filters[] = $f->getName().$f->getValue();

					}

					$result["filters"] = implode(",", $filters);

				break;

			}

		}

		return $result;


	}



}