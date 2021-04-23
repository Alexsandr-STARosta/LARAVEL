<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
class PhraseServiceProvider extends ServiceProvider{
    private $Phrase;

    public function __construct(string $phrase) { 
        $this->Phrase = $phrase;
    }
    public function getPhrase() { 
        $new_text = '';
        $phrase = $this->Phrase;
        $phrase = mb_strtolower($phrase);
        $phrase = preg_replace('/[^ a-zа-яё\d]/ui', '',$phrase );
        $phrase = preg_replace('/ /', '', $phrase);
        for ($i = mb_strlen($phrase); $i>=0; $i--) {
            $new_text .= mb_substr($phrase, $i, 1);
        }
        echo ($phrase==$new_text)?"Фраза является палиндромом!!!":"Фраза не является палиндромом!!!";
        echo "<br>";
    }
}