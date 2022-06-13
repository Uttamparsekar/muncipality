<?php  
    include 'configg.php';
	$image = $_FILES['complaint_pic']['name'];
	$unam = $_POST['name'];
	$addd = $_POST['address'];
	$mobb = $_POST['mobile'];
	$wardnn = $_POST['wardnumber'];
	$subb = $_POST['subject'];
	$compp = $_POST['content'];
	
	$image_path = "images/".basename($image);
	
	move_uploaded_file($_FILES['complaint_pic']['tmp_name'], $image_path);
	
	$sql="INSERT into complaint (name,address,mobile,wardnumber,subject,content,image_path) values('$unam','$addd','$mobb','$wardnn','$subb','$compp','$image_path')";
	$result=mysqli_query($con,$sql);
	 
	 if(!$result)
	 {
		 echo "Not submited".$image_path;
	 }
	 else
	 {
		 echo "Succesfuly Registered";
		 header('Location: homee.php');

		exit;
	 }
	 
	 



?>