<?php
    function indexedArrays(){
        $prices = array(500, 300, 600);
        print_r($prices);  /* Displays content of array */
          
        array_push($prices, 100); //adds an element to the end of the array
        $prices[] = 200; //adds an element to the end of the array
        echo "<br />";
        print_r($prices);
        unset($prices[1]);
        echo "<br />";
        print_r($prices);
        echo "<br />";
        $prices = array_values($prices); //reindexes the values of the array
          
        print_r($prices);
         
        //sort($prices);
        echo "<br />";
        print_r($prices);
          
        //displaying one value at a time
        for ($i=0; $i < count($prices); $i++)
            echo $prices[$i] . "<br />";
    }
    
    function associatedArrays(){
        $products = array("iPad Mini" => 250, "iPad Pro" => 700);
        
        //add to array
        $products["iPad Air"] = 450;
        
        foreach($products as $productName => $price)
            echo $productName . "   " . $price . "<br />";
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <h1>Arrays in PHP</h1>
        <?php
            $prices = array(500, 300, 600);
            
            /* Displays contents of Array */
            print_r($prices);
            echo "<br />";
            
            /* both add an element to the end of array */
            array_push($prices, 100);
            $prices[] = 200;
            
            print_r($prices);
            echo "<br />";
            
            /* sort elements of the array least->greatest */
            sort($prices);
            print_r($prices);
            echo "<br />";
            
            /* sort elements of the array greatest->least */
            rsort($prices);
            print_r($prices);
            echo "<br />";
            
            /* remove an element of an array, but leaves empty space */
            unset($prices[1]);
            print_r($prices);
            echo "<br />";
            
            /* reindexes values of array */
            $prices = array_values($prices);
        ?>
    </body>
</html>