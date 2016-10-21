<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LUDecomposer extends Controller
{
    public static function upperAndLowerMatrix($type, $matrix)
    {
        $Lvalues = array();
        $newRows = array();
        $pivots = array();
        $steps = sizeof($matrix);
        $newArray = $matrix;
        $newLower = array();
        if($newArray !=false)
        {
            for($c = 1;$c<=$steps;$c++)
            {
                for($l = 1;$l<=$steps;$l++)
                {
                    $newLower[$c][$l] = 0;
                }
            }
            for($c = 1;$c<=$steps;$c++)
            {
                for($l = 1;$l<=$steps;$l++)
                {
                    if($l == $c)
                    {
                        $newLower[$l][$c] = 1;
                    }
                }
            }
            for($x = 1;$x < $steps;$x++)
            {
                for($i = $x;$i<$steps;$i++)
                {
                    $Lvalues[$i] = $newArray[$i+1][$x]/$newArray[$x][$x];
                    if($i == $steps - 1)
                    {
                        $pivots[] = $newArray[$x][$x];
                    }
                }
                for($i = $x;$i<$steps;$i++)
                {
                    for($q = $x;$q<=$steps;$q++)
                    {
                        $newRows[$i][$q] = $newArray[$x][$q] * $Lvalues[$i];
                    }
                }
                for($l = $x;$l<$steps;$l++)
                {
                    $newLower[$l + 1][$x] = $newArray[$l+1][$x]/$newArray[$x][$x];
                }
                for($i = $x;$i<$steps;$i++)
                {
                    for($q = $x;$q<=$steps;$q++)
                    {
                        $newArray[$i +1][$q] = $newArray[$i + 1][$q] - $newRows[$i][$q];
                    }
                }
            }
            if($type == 1)
            {
                return $newArray;
            }
            elseif($type == 2)
            {
                return $pivots;
            }
            elseif($type == 3)
            {
                return $newLower;
            }
        }
    }
}
