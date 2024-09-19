<html>
    <head>

    </head>
    <body>
        <form action="#" method="get">
            Enter The year : <input type="text" name="year" id="">
            <input type="submit" name="sub" id="">
        </form>
    </body>
</html>

<?php
    if(isset($_REQUEST['sub'])){
        $year=$_GET['year'];
        if($year%4==0){
            echo "Year is Leap Year";
        }else{
            echo "Year is not Leap Year";
        }
    }

?>
