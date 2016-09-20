<?php
    function displayRandomCard(){
        $suits = array("clubs", "diamonds", "hearts", "spades");
        echo "<img src='img/cards/" . $suits[rand(0,3)] . "/" . rand(1, 13) . ".png'/>";
        
        $deck = array();
        for($i = 1; $i <= 52; $i++)
            $deck[] = $i;
        shuffle($deck);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?=displayRandomCard()?>

    </body>
</html>