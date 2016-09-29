<?php

function printBoard($players){
    echo "<table>";
    
    for($i = 0; $i < count($players); $i++){
        printPlayer($players, $i);
    }
    
    echo "</table>";
}

function printPlayer($players, $i){
    
}

function printHand($hand, $i){
    
}


function printWinner($players){
    
}

function printDeck($deck){    
    $suits = array("clubs", "diamonds", "hearts", "spades");
    
    for($i = 0; $i < 4; $i++){
        for($j = 1; $j <= 13; $j++)
            echo "<img src='img/cards/" . $suits[$i] . "/" . $j . ".png'/>";
        echo "<br />";
    }
    
    for($i = 0; $i < count($deck); $i++){
        
        
        echo "<img src='img/cards/" . $suits[$i] . "/" . $j . ".png'/>";
        echo "<br />";
    }
}

?>