<html>
    <head>
        <title>Square Root of Number</title>
    </head>
    <body>
        <form action="#" name="get">

            Enter The Number : <input type="number" name="num" id="">
            <input type="submit" name="sub" id="">
        </form>
    </body>
</html>

<?php 
    if (isset($_REQUEST['sub'])) {
        $nm=$_REQUEST['num'];
        $sqr=sqrt($nm);
        echo "Square root : $sqr";
    }

?>
