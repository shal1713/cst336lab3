<?php

$suits = array("clubs", "diamonds", "hearts", "spades");

function printBoard(){
    global $players, $hands;
    echo "<table>";
    
    echo " <br /> <br /> <br />";
    for($i = 0; $i < count($players); $i++){
        echo "<tr>";
        
        echo "<td>";
            printPlayer($i);
        echo "</td> <td>";
            printHand($i);
        echo "</td> <td>";
            printScore($i);
        echo "</td>";
        
        echo "</tr>";
    }
    
    echo "</table>";
    
    printWinner(determineWinner());
}

function printPlayer($i){
    global $players;
    echo "<img src='img/plaers/" . $player[$i] . ".png'/>";
    echo "<br />";
    echo $players[$i];
}

function printHand($i){
    global $hands;
    for($j = 0; $j < count($hands[$i]); $j++){
        $suit = getCardSuit($hands[$i][$j]);
        $value = getCardValue($hands[$i][$j]);
        printCard($suit, $value);
    }
}

function printScore($i){
    global $hands, $scores;
    echo $scores[$i];
}


function printWinner($winner){
    global $players;
    echo "<br /><br />Winner: " . $players[$winner];
}

function printCard($suit, $value){
    echo "<img src='img/cards/" . $suit . "/" . $value . ".png'/>";
}

function printDeck($deck){    
    global $suits;
    
    for($i = 0; $i < count($deck); $i++){
        $suit = getCardSuit($deck[$i]); 
        $value = getCardValue($deck[$i]);
        printCard($suit, $value);
        //echo "<br />";
    }
}

?>
