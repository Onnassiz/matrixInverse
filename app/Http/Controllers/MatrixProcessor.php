<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect;

class MatrixProcessor extends Controller
{
    public $determinant;
    public function __construct() {
        $this->determinant = new Determinant();
    }

    public function matrix($matrix) {
        return view('processor')->with('matrix', $matrix);
    }

    public function forwardSub($matrix)
    {
        $matrixArray = LUDecomposer::upperAndLowerMatrix(3, $matrix);
        $dimension = sizeof($matrix);
        $identity = array();
        $innerMatrix = array();
        $linearVariables = array();
        $returnedVariables = array();
        $counter = 1;
        if(sizeof($matrixArray) !=0)
        {
            for($c = 1;$c<=$dimension;$c++)
            {
                for($l = 1;$l<=$dimension;$l++)
                {
                    $identity[$c][$l] = 0;
                }
            }
            for($c = 1;$c<=$dimension;$c++)
            {
                for($l = 1;$l<=$dimension;$l++)
                {
                    if($l == $c)
                    {
                        $identity[$l][$c] = 1;
                    }
                }
            }

            for($i = 1; $i<=sizeof($matrixArray);$i++)
            {
                for($c = 1;$c<=sizeof($matrixArray);$c++)
                {
                    $new = $matrixArray;
                    for($k = 1;$k<=sizeof($matrixArray);$k++)
                    {
                        $new[$k][$c] = $identity[$k][$i];
                    }
                    $innerMatrix[sizeof($innerMatrix) + 1] = $new;
                }
            }

            for($c = 1;$c<=($dimension * $dimension);$c++)
            {
                $linearVariables[$c] = $this->determinant->matrixDeterminant($innerMatrix[$c])/$this->determinant->matrixDeterminant($matrixArray);
            }
            for($c = 1;$c<=($dimension);$c++)
            {
                for($r = 1;$r<=($dimension);$r++)
                {
                    $returnedVariables[$r][$c] = $linearVariables[$counter];
                    $counter++;
                }
            }
            return $returnedVariables;
        }
    }

    function backwardSubstitution($matrix)
    {
        $returnedVariables = array();
        $linearVariables = array();
        $matrixArray = LUDecomposer::upperAndLowerMatrix(1, $matrix);
        $zVariables = $this->forwardSub($matrix);
        $innerMatrix = array();
        $counter = 1;
        if(sizeof($matrixArray) != 0)
        {
            for($i = 1; $i<=sizeof($matrixArray);$i++)
            {
                for($c = 1;$c<=sizeof($matrixArray);$c++)
                {
                    $new = $matrixArray;
                    for($k = 1;$k<=sizeof($matrixArray);$k++)
                    {
                        $new[$k][$c] = $zVariables[$k][$i];
                    }
                    $innerMatrix[sizeof($innerMatrix) + 1] = $new;
                }
            }
            for($c = 1;$c<=(sizeof($matrixArray) * sizeof($matrixArray));$c++)
            {
                $linearVariables[$c] = $this->determinant->matrixDeterminant($innerMatrix[$c])/$this->determinant->matrixDeterminant($matrixArray);
            }
            for($c = 1;$c<=(sizeof($matrixArray));$c++)
            {
                for($r = 1;$r<=(sizeof($matrixArray));$r++)
                {
                    $returnedVariables[$r][$c] = $linearVariables[$counter];
                    $counter++;
                }
            }
            //echo $this->matrixDeterminant($innerMatrix[4]).' '.$this->matrixDeterminant($matrixArray);
            return $returnedVariables;
        }
    }
}
