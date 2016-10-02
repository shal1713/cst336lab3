<?php

include './silverjack.php';
include './cards.php';
include './print.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 3 </title>
        <link rel="stylesheet" href="css/lab3.css" type="text/css" />
    </head>
    <body>
        <header>
            <h1>Lab 3: Silverjack</h1>
        </header>
        <main>
            <?=start()?>
            <?=printBoard()?>
        </main>
    </body>
</html>