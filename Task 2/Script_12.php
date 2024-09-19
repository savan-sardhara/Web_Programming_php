<html>
    <body>
        
        <h1>Concat the String</h1>


        <form action="#">
            Enter the Length : <input type="text" name="s1">
            <br>
            Enter the Width : <input type="text" name="s2"><br>
            <input type="submit" value="concate" name="submit">
        </form>

    </body>
</html>

<?php

    if(isset($_REQUEST['submit'])){
    $s1=$_GET['s1'];
    $s2=$_GET['s2'];
    echo $s1.$s2;
    }
?>
