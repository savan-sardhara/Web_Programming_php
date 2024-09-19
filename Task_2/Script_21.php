<html>
    <head>
        <title>Piladram</title>
    </head>
    <body>
        <form action="#" method="get">
            Enter The Number : <input type="number" name="num" id="">
            <input type="submit" name="sub" id="">
        </form>
    </body>
</html>

<?php

    if (isset($_REQUEST['sub'])) {
        $num=$_GET['num'];
        $orignal=$num;
        $rev=0;
        while ($num > 0) {
             $rem=$num%10;
             $rev=($rev*10)+$rem;
             $num=(int)($num/10);
        }
        if ($rev==$orignal) {
            echo "Number is Pelidraum";
        }else{
            echo "Number is Not Pelidrum";
        }
    }

?>