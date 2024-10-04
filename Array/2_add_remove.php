<?php

$fruit=array("mengo","orange","banana","kivi","apple");

echo "Before modification <br>";
print_r($fruit);

$fruit[]="watermelon";
$fruit[]="jackfruit";
array_splice($fruit, 0, 1);


echo "<br>After modification <br>";
print_r($fruit);

?>