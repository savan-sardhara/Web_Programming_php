<?php

$country=array("india"=>"delhi","america"=>"Wasington","china"=>"Beijine","Rusia"=>"Moskow","italy"=>"rome");

echo "Before any changes :<br>";
print_r($country);

$country["Germany"]="Berlin";
$country["america"]="New York";
   echo "<br> <br> After changes :- <br>";
foreach($country as $cont => $cap)
{
        echo " $cap is $cont's capital <br>";
}



?>