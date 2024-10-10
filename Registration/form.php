<?php 
	
	 $firstName = $_POST['fname'];
    $middleName = $_POST['mname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mob'];
    $address = $_POST['adress'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['cont'];
    $password = $_POST['pass'];


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $conn=mysqli_connect('sql210.infinityfree.com','if0_37324910','cX6PqHEPGBu','if0_37324910_MCA_42');

    $query="INSERT INTO `user_details`( `first name`, `middle name`, `last name`, `Email`, `mobile`, `adress`, `city`, `state`, `country`, `password`) VALUES ('$firstName','$middleName','$lastName','$email','$mobile','$address',' $city','$state','$country','$hashed_password')";

    $res=mysqli_query($conn,$query);

    if ($res) {
        echo "successs ..";
    }else{
        echo "Not success..";
    }



?>