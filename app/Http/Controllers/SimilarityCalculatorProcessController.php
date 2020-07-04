<?php

namespace App\Http\Controllers;

use App\Support\SimilarityCalculator;
use Illuminate\Http\Request;

class SimilarityCalculatorProcessController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            "textA" => ["required", "string"],
            "textB" => ["required", "string"],
        ]);

        $similarity = SimilarityCalculator::sorensenDiceDistance(
            $data["textA"],
            $data["textB"]
        );

        return response([
            "similarity" => $similarity
        ]);
    }
}
