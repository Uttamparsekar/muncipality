<style>
header{
	 background-color:#0D47A1;
	 height:70px;
	 font-size:25px;
}
	  nav{
		  background-color:black;
		  height:30px;
		  overflow:hidden;
		word-spacing:40px;
		  text-align:center;
	 text-decoration:none;
	  }
	  body{
		background-color:gainsboro;
	
	  }
	  form{
		  text-align:center;
		  text-size:100%;
		  width:100%
	  }
	  button{
		  background-color:skyblue;
		  padding:15px 150px;
		  text-align:Center;
		  display:inline-block;
		  font-size:22px;
		  border:2px solid black;
		  
	  }
	  form{
	line-height: 60px;
				width: 700px;
				font-size: 23pt;
				font-family: tahoma;
				margin-top: 1px;
				background-color:white;
				margin-left: 400px;
				display:block;
				border:2px solid black;
				cursor:pointer;
				padding:14px 28px;
				top:0;
				right:0;
				width:33%
				float:top;	
	  }
		  
	  
	 </style> 

<html>
<body>
<?php include 'header.php'; ?>

 <h1 style="text-align:center; color:black ">APPLICATION FORM FOR INCOME CERTIFICATE</h1>
 <form action="create_income.php" method="POST" enctype="multipart/form-data>
 <label for="applicants_name">Name of the Applicant: </label><br>
 <input type="text" id="applicants_name" size="40" align="center" name="applicants_name"><br>
 
 <label for="fathers/husbands_name">Father/Husband's Name: </label><br>
 <input type="text" id="fathers/husbands_name" size="40" align="center" name="fathers/husbands_name"><br>
 
 <label for="gender">Gender </label><br>
 <input type="text" id="gender" size="40" align="center" name="gender"><br>
 
 <label for="address">Residential Address: </label><br>
 <input type="text" id="address" size="40" align="center" name="address"><br>
 
 <label for="purpose">Purpose which the certificate is required: </label><br>
 <input type="text" id="purpose" size="40" align="center" name="purpose"><br>
 
 <label for="ration_cardno">Ration card number: </label><br>
 <input type="text" id="ration_cardno" size="40" align="center" name="ration_cardno"><br>
 <label for="annual_income">Your annual income from all the sources: </label><br>
 <input type="text" id="annual_income" size="40" align="center" name="annual_income"><br>
 <label for="adhaar_pic">Upload your Adhaar card photo </label><br>
 <input type="file" id="adhaar_pic"  align="center" name="adhaar_pic"><br>
 <label for="ration_pic">Upload your Ration card photo </label><br>
 <input type="file" id="ration_pic"  align="center" name="ration_pic"><br>
 <label for="affidavit_pic">Upload Affidavit </label><br>
 <input type="file" id="affidavit_pic"  align="center" name="affidavit_pic"><br>
 <input type= "submit" name="submit" value="SUBMIT">
 </form>
 </body>
 </html>