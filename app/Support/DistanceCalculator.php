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

        $bigrams_1 = ngrams($preprocessor->textToFingerprintHashes($text_1), 2, '');
        $bigrams_2 = ngrams($preprocessor->textToFingerprintHashes($text_2), 2, '');

        dump($bigrams_1);


//        $joined_1 = array_map(fn($bigram) => "{$bigrams_1}{}", $bigrams_1);




    }
}
