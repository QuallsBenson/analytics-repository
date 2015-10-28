<?php

class HTML{


	public static function table( $headers, $rows )
	{

        $table = "<table>";

        foreach( $headers as $header )
        {

            $table .= "<th>{$header}</th>";

        }

        foreach( $rows as $row )
        {

            $table .= "<tr>";
                
            foreach( $row as $column )
            {

                $table .= "<td>{$column}</td>";

            }

            $table .= "</tr>";

        }

        $table .= "</table>";

        return $table;

	}


}