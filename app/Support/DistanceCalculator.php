<?php


namespace App\Support;


class DistanceCalculator
{
    private function removeDuplicates()
    {

    }


    public static function sorensenDiceDistance($text_1, $text_2)
    {
        $preprocessor = new Preprocessor();
        $bigrams_1 = collect(ngrams($preprocessor->textToFingerprintHashes($text_1), 2, ''))->unique();
        $bigrams_2 = collect(ngrams($preprocessor->textToFingerprintHashes($text_2), 2, ''))->unique();

        return (2 *  $bigrams_1->intersect($bigrams_2)->count()) /
            ($bigrams_1->count() + $bigrams_2->count());
    }
}
