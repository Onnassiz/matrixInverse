<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MultiplyMatrix extends Controller
{
    public static function multiplyMatrix($mat_a, $mat_b)
    {
        $pivots = LUDecomposer::upperAndLowerMatrix(2, $mat_a);
        if(!empty($mat_a) and !empty($mat_b))
        {
            $returnedArray = array();
            $size = sizeof($mat_a);
            for($i = 1;$i<=$size;$i++)
            {
                for($j = 1;$j<=$size;$j++)
                {
                    $sum = 0;
                    for($c = 1;$c<=$size;$c++)
                    {
                        $sum += $mat_a[$i][$c] * $mat_b[$c][$j];
                    }
                    if(strpos($sum,'E'))
                    {
                        //$sum = 0;
                    }
                    $returnedArray[$i][$j] = $sum;
                }
            }
            return $returnedArray;
        }
    }
}
