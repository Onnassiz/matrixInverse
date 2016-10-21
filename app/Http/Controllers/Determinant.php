<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Determinant extends Controller
{
    public function matrixDeterminant($matrix){
        $n = sizeof($matrix);
        $det = 0;
        $temp = array();
        if($n == 1)
        {
            return $matrix[1][1];
        }
        elseif($n == 2)
        {
            $det = ($matrix[1][1] * $matrix[2][2]) - ($matrix[1][2] * $matrix[2][1]);
            return $det;
        }
        else
        {
            for($p = 1; $p<=$n;$p++)
            {
                $h = 1;
                $k = 1;
                for($i = 2; $i <=$n;$i++)
                {
                    for($j = 1; $j <= $n;$j++)
                    {
                        if($j == $p)
                        {
                            continue;
                        }
                        $temp[$h][$k] = $matrix[$i][$j];
                        $k++;
                        if($k == $n)
                        {
                            $h++;
                            $k = 1;
                        }
                    }
                }
                $det = $det + $matrix[1][$p] * pow(-1,$p-1) * $this->matrixDeterminant($temp);
            }
            return $det;
        }
    }
}
