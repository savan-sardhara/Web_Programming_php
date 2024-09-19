<!-- Check The prime number  -->


<html>
    <head>

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
        $number=$_GET['num'];
        
            if ($number < 2) {
                echo "$number is not a prime number.";
            } else {
                $isPrime = true;  
                
                
                for ($i = 2; $i <= sqrt($number); $i++) {
                    if ($number % $i == 0) {
                        $isPrime = false;  
                        break; 
                    }
                }

                
                if ($isPrime) {
                    echo "$number is a prime number.";
                } else {
                    echo "$number is not a prime number.";
                }
            }
    }
?>