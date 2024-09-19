<html>
    <head>

    </head>
    <body>
        <form action="#" method="get">
            Guess the number : <input type="text" name="guess" id="">   
            <input type="submit" name="sub" id="">

        </form>
    </body>
</html>

<?php 

if(isset($_REQUEST['sub'])){
    $a=$_GET['guess'];
    $randomNumber = rand(1, 10);
    if ($a==$randomNumber) {
        echo "You are correct ! $randomNumber";
    }else{
        echo "You are Wrong :( (correct is $randomNumber)";
    }

}


?>