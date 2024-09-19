<html>
    <body>
        
        <h1>Largest of three number</h1>


        <form action="#">
            Enter first Number : <input type="number" name="n1">
            <br>
            Enter second Number : <input type="number" name="n2">
            <br>
            Enter third number :<input type="number" name="n3">
            <br>
            <input type="submit" value="Find" name="submit">
        </form>

    </body>
</html>

<?php

    if(isset($_REQUEST['submit'])){
    $n1=$_GET['n1'];
    $n2=$_GET['n2'];
    $n3=$_GET['n3'];
    if ($n1>$n2) {
        if ($n1>$n3) {
            echo "Largest number $n1";
        }else {
            echo "Largest number $n3";
        }
    }
    elseif ($n2>$n3) {
        echo "Largest number is $n2";
    }
    else{
        echo "Largest number is $n3";
    }
    }
?>
