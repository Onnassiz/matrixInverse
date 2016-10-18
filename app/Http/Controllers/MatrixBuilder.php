<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect;

class MatrixBuilder extends Controller
{
    public function validateMatrix($dim, Request $request) {
        for($i = 1; $i <= $dim; $i++){
            for($j = 1; $j <= $dim; $j++){
                $validationArray['A'.$i.$j] = 'required|numeric';
            }
        }
        $message = [
            'required'  =>  ':attribute is required.',
            'numeric'  =>  ':attribute must be a number.'
        ];
        $this->validate($request, $validationArray, $message);

        $this->buildMatrix($request,$dim);
    }

    public function buildMatrix($req, $dim) {
        $matrix = [];
        for($i = 1; $i <= $dim; $i++){
            for($j = 1; $j <= $dim; $j++){
                $matrix[$i][$j] = $req['A'.$i.$j];
            }
        }
        ?>
        <pre><?php print_r($matrix) ?></pre><?php
    }
}
