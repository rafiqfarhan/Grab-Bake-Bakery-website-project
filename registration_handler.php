<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "loginuser";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (! $conn){
		die("Connection failed :" . mysqli_connect_error());
	} 
    if (isset($_POST['register'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginuser";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $password = $_POST["password"];
   


    $sql = "INSERT INTO register (firstname,lastname,username,email,address,password)
    VALUES ('$firstname','$lastname','$username','$email','$address','$password')";

    if (mysqli_query($conn,$sql)){
	echo '<script language="javascript">';
		 echo 'alert("Register Successfull");';
		 echo 'window.location.href = "login.html";'; 
		 echo '</script>';
	} else {
		echo "Error:" . $sql . "<br>" . mysqli_error($conn);
	}
}

?>