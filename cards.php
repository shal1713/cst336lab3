<?php

function setCards(){
    global $deck;
    
    $suits = array("clubs", "diamonds", "hearts", "spades");
        
    $deck = array();
    for($i = 1; $i <= 52; $i++)
        $deck[] = $i;
        
    shuffle($deck);
    
    return $deck;
}

function deal($hand){
    
    
    return $hand;
}

function countScore($hand){
    $sum = 0;
    for($i = 0; $i < count($hand); $i++)
        $sum += $hand[i];
    return $sum;
}

?>