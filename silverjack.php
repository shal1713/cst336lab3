<?php

include './cards.php';
include './print.php';

$deck = array();
$players = array();
$hands = array();

function start(){
    global $deck, $players, $hands;
    initializePlayers(4, $players);
    
    $deck = setCards();
    printDeck($deck);
    
    play($players, $hands, $deck);
}

function initializePlayers($numPlayers, $players){
    $names = array("Eric", "Young-Joon", "Miguel", "Krzysztof", 
                   "Christian", "Bude", "Karen", "Patrick");
    for($i = 0; $i < $numPlayers; $i++){
        $players[] = array_pop($names);
    }
}

function play($players, $hands, $deck){
    global $players, $hands, $deck;
    
    for($i = 0; $i < count($players); $i++){
        $currHand = array();
        $currHand = deal($currHand);
        $hands[] = $currHand;
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <main>
            <?=start()?>
        </main>
    </body>
</html>