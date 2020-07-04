<?php


namespace App\Support;


class SimilarityCalculator
{
    private function removeDuplicates()
    {

    }


    public static function sorensenDiceDistance($text_1, $text_2)
    {
        $preprocessor = new Preprocessor();
        $bigrams_1 = collect(ngrams($preprocessor->textToFingerprintHashes($text_1), 2, ''));
        $bigrams_2 = collect(ngrams($preprocessor->textToFingerprintHashes($text_2), 2, ''));

        return (2 *  $bigrams_1->intersect($bigrams_2)->unique()->count()) /
            ($bigrams_1->unique()->count() + $bigrams_2->unique()->count());
    }
}
