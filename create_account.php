<?php  
    include 'configg.php';
	
	$uname = $_POST['name'];
	$pass = $_POST['password'];
	$age = $_POST['age'];
	$add = $_POST['address'];
	$mob = $_POST['mobile'];
	$wardn = $_POST['wardnumber'];
	$prof = $_POST['profession'];
	$pinc = $_POST['pincode'];
	
	$sql="INSERT into users(name,password,age,address,mobile,wardnumber,profession,pincode) values('$uname','$pass','$age','$add','$mob','$wardn','$prof','$pinc')";
	$result=mysqli_query($con,$sql);
	 
	 if(!$result)
	 {
		 echo "Not submited";
	 }
	 else
	 {
		 echo "Succesfuly Registered";
		 header('Location: login.php');

			exit;
	 }
	 
	 



?>
	
