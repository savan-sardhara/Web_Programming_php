
<html>
    <body>
        
        <h1>Area of Rectangale</h1>


        <form action="#">
            Enter the Length : <input type="number" name="length">
            <br>
            Enter the Width : <input type="number" name="width"><br>
            <input type="submit" value="calculate" name="submit">
        </form>

    </body>
</html>

<?php

    if(isset($_REQUEST['submit'])){
    $ln=$_GET['length'];
    $wd=$_GET['width'];
    echo $ln*$wd;
    }
?>

