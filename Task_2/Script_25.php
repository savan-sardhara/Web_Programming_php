<html>
    <head>
        <title>Swap two number without using the third varable</title>
    </head>
    <body>
        <form action="#" method="get">
            Enter A number : <input type="number" name="n1" id="">
            <br>
            Enter B number : <input type="number" name="n2" id="">
            <br>
            <input type="submit" name="sub" id="">
        </form>
    </body>
</html>

<?php

    if (isset($_REQUEST['sub'])) {
        $n1=$_REQUEST['n1'];
        $n2=$_REQUEST['n2'];

        $n1 = $n1 + $n2;  
        $n2 = $n1 - $n2;  
        $n1 = $n1 - $n2; 

        echo "A : $n1 B : $n2";
    }

?>