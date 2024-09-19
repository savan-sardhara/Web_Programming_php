<html>
    <body>
        
        <h1>Celsius To Fahrenheit</h1>


        <form action="#">
            Enter the Tempreture in Celsius : <input type="number" name="cel">
            <br>
            <br>
            <input type="submit" value="Convert" name="submit">
        </form>

    </body>
</html>

<?php
//  (C × 9/5) + 32.

    if(isset($_REQUEST['submit'])){
    $cel=$_GET['cel'];
        $fer=(($cel * (9/5))+32);
        echo "Temprature in Fahrenheit : $fer";

    }
?>
