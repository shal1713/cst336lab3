<?php

function setCards(){
    global $deck;
    
    for($i = 1; $i <= 52; $i++)
        $deck[] = $i;
    shuffle($deck);
    
    return $deck;
}

function deal($hand, $deck){
    global $deck, $scores;
    
    do{
        $hand[] = array_pop($deck);
    }while(countScore($hand) <= 37);
    $scores[] = countScore($hand);
    
    return $hand;
}

function countScore($hand){
    $sum = 0;
    
    for($i = 0; $i < count($hand); $i++){
        $value = getCardValue($hand[$i]);
        $sum += $value;
    }
    
    return $sum;
}

function getCardSuit($index){
    if($index <= 13)
        return "clubs";
    else if($index <= 26)
        return "diamonds";
    else if($index <= 39)
        return "hearts";
    else 
        return "spades";
}

function getCardValue($index){
    $value = $index % 13;
    return $value == 0 ? 13 : $value;
}

?>