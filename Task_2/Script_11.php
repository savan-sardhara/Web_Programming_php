<html>
    <body>
        
        <h1>checking Even Odd</h1>


        <form action="#">
            Enter the Number : <input type="number" name="num">
            <br>
            <br>
            <input type="submit" value="calculate" name="submit">
        </form>

    </body>
</html>

<?php

    if(isset($_REQUEST['submit'])){
    $num=$_GET['num'];
    if ($num%2==0) {
        echo "$num is EVEN";
    }else{
        echo "$num is ODD";
    }

    }
?>
