<html>
    <head>

    </head>
    <body>
        <form action="#" method="get">
            Enter the String : <input type="text" name="str" id="">
            <br><input type="submit" name="sub" id="">
        </form>
    </body>
</html>


<?php


if(isset($_REQUEST['sub'])){

    $str=$_GET['str'];
    $no=strlen($str);
    
    echo "String Length :- ".$no;
}


?>

