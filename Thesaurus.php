<?php

/**
 * A thesaurus contains words and synonyms for each word. Below is an example of a data structure that defines a thesaurus:
 *
 * array("buy" => array("purchase"), "big" => array("great", "large"))
 * Implement the function getSynonyms, which accepts a word as a string and returns all synonyms for that word in JSON format, as in the example below.
 *
 * For example, the call $thesaurus->getSynonyms("big") should return:
 *
 * '{"word":"big","synonyms":["great", "large"]}'
 * while a call with a word that doesn't have synonyms, like $thesaurus->getSynonyms("agelast") should return:
 *
 * '{"word":"agelast","synonyms":[]}'
 *
 * Class Thesaurus
 */
class Thesaurus
{
    private $thesaurus;

    function __construct(array $thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms(string $word) : string
    {
        return '';
    }
}

$thesaurus = new Thesaurus(
    [
        "buy" => ["purchase"],
        "big" => ["great", "large"]
    ]
);

echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");