<?php

$deck = array();
$players = array();
$hands = array();
$scores = array();

function start(){
    global $deck, $players, $hands;
    
    //Initialize game with 4 players
    initializePlayers(4, $players);
    
    //Set and shuffle $deck
    $deck = setCards();
    
    //Start game
    play($players, $hands, $deck);
}

function initializePlayers($numPlayers, $players){
    global $players;
    
    //Initialize faculty game of SilverJack
    $names = array("Eric", "Young-Joon", "Miguel", "Krzysztof", 
                   "Christian", "Bude", "Karen", "Patrick");
    
    for($i = 0; $i < $numPlayers; $i++)
        $players[] = array_pop($names);
}

function play($players, $hands, $deck){
    global $players, $hands, $deck;
    
    for($i = 0; $i < count($players); $i++){
        $currHand = array();
        $currHand = deal($currHand, $deck);
        $hands[] = $currHand;
    }
}

function determineWinner(){
    global $players, $hands, $scores;
    $leader = -1;
    
    for($i = 0; $i < count($players); $i++){
        if($scores[$i] > $scores[$leader] && $scores[$i] <=42)
            $leader = $i;
    }
    
    return $leader;
}

?>