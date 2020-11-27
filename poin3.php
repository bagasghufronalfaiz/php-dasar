<?php 
function splitgram($paragraf)
{
    $kata = explode(" ", $paragraf);
    $unigram = [];
    $bigram = array_chunk($kata, 2);
    $trigram = array_chunk($kata, 3);

    foreach ($kata as $key) {
        array_push($unigram, $key);
    }

    echo 'Paragraf = Jakarta adalah ibukota negara Republik Indonesia';
    echo '<br><br>';
    echo 'Unigram : ';
    foreach ($unigram as $key) {
        echo $key . ', ';
    }

    echo '<br>';
    echo 'Bigram : ';
    foreach ($bigram as $key) {
        echo implode(" ", $key) . ', ';
    }

    echo '<br>';
    echo 'Trigram : ';
    foreach ($trigram as $key) {
        echo implode(" ", $key) . ', ';
    }
}

$paragraf = "Jakarta adalah ibukota negara Republik Indonesia";
splitgram($paragraf);
?>