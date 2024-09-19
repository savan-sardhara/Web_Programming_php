<html>
    <head>
        <title>Largest Number</title>
    </head>
    <body>
        <form action="#" method="get">
            Enter the Number <input type="number" name="n1" id="">
            <br>
            Enter the Number <input type="number" name="n2" id="">
            <br>
            Enter the Number <input type="number" name="n3" id="">
            <br>
            <input type="submit" name="sub" id="">
        </form>
    </body>
</html>


<?php

    if (isset($_REQUEST['sub'])) {
        $n1=$_GET['n1'];
        $n2=$_GET['n2'];
        $n3=$_GET[ 'n3'];

        if($n1>=$n2 && $n1>$n3){
            echo "$n1 is Big";
        }
        else if($n2>$n1 && $n2>$n3)
        {
            echo "$n2 is Big";
        }
        else{
            echo " $n3 is Big";
        }
    }

?>