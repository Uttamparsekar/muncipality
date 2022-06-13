<?php  
    include 'configg.php';
	//$adhar = $_FILES['adhaar_pic']['name'];
	//$ration = $_FILES['ration_pic']['name'];
	//$affid = $_FILES['affidavit_pic']['name'];
	$appname = $_POST['applicants_name'];
	$fathname = $_POST['fathers/husbands_name'];
	$gend = $_POST['gender'];
	$purpos = $_POST['purpose'];
	$rationno = $_POST['ration_cardno'];
	$addr = $_POST['address'];
	$annual_income = $_POST['annual_income'];
	
//	$image_adhar = "images/".basename($adhar);
//	$image_ration = "images/".basename($ration);
//	$image_affi = "images/".basename($affid);
	
	
	//	move_uploaded_file($_FILES['adhaar_pic']['tmp_name'], $image_adhar);
	//		move_uploaded_file($_FILES['ration_pic']['tmp_name'], $image_ration);
	//			move_uploaded_file($_FILES['affidavit_pic']['tmp_name'], $image_affi);
	
	$sql="INSERT into income_certificate(applicants_name,fathers/husbands_name,gender,purpose,ration_cardno,address,annual_income) values('$appname','$fathname','$gend','$purpos','$rationno','$addr','$annual_income')";
	$result=mysqli_query($con,$sql);
	 
	 if(!$result)
	 {
		 echo "Not submited";
	 }
	 else
	 {
		 echo "Succesfuly Registered";
		 header('Location: homee.php');

		exit;
	 }
	 
	 



?>