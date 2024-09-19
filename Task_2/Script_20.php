<html>
    <head>

    </head>
    <body>
        <form action="#" method="get">
            Enter the number : <input type="number" name="num" id="">
            <input type="submit" name="sub" id="">
        </form>
        
    </body>
</html>

<?php 



        if (isset($_REQUEST['sub'])) {
            $num=$_GET['num'];
            $lim=$num;
            if ($num == 0 || $num==1) {
                $num=1;
            }
            for ($i=2; $i < $lim; $i++) { 
                $num=$num*$i;
            }
               
            echo "Factorial is : $num";
        }

?>