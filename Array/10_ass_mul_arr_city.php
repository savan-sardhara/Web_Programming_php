<?php 

    $city=array('rajkot'=>array(20000,'gujrat','india'),
                'new york'=>array(30000,'clifornia','US'),
                'mumbai'=>array(50000,'maharasra','india')
                );


    foreach($city as $cn => $val){
        echo "$cn <br>";
            echo "population is  $val[0] And area $val[1] And country $val[2] <br> ";
    }

?>