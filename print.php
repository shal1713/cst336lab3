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
    
    echo "<div>";
    printWinner(determineWinner());
    echo "</div>";
    
}

function printPlayer($i){
    global $players;
    echo "<img src='img/players/" . $player[$i] . ".jpg'/>";
    echo "<br />";
    echo "<div2>";
    echo $players[$i];
    echo "</div2>";
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
    echo "<div2>";
    echo $scores[$i];
    echo "</div2>";
}


function printWinner($winner){
    global $players;
    echo "<br />Winner: " . $players[$winner];
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
