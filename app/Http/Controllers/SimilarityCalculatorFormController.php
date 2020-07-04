<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimilarityCalculatorFormController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        return response()->view("similarity-calculator-form");
    }
}
