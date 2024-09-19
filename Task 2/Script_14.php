<h1>Sum of all the number from 1 to 100</h1>

<?php
$sum=0;
for ($i=1; $i<=100 ; $i++) { 
    $sum=$i+$sum;
}

echo "Sum is $sum"

?>