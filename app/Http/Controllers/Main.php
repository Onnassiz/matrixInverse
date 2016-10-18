<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Main extends Controller
{
    public function dimension(Request $request) {
        $this->validate($request, [
            'dimension' =>  'required|integer|min:1|max:10'
        ]);

        $dimension = $request['dimension'];

        return \Redirect::to('dimension/'.$dimension);
    }

    public function setDimension($dim) {
        if($dim < 1 or $dim > 10){
            return \Redirect::to('/');
        }
        return view('welcome')->with('dimension', $dim)->with('first', true);
    }
}
