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
	line-height: 60px;
				width: 700px;
				font-size: 23pt;
				font-family: tahoma;
				margin-top: 1px;
				background-color:white;
				margin-left: 350px;
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


 <nav>
 
 <a> </a>
 
 </nav>
 <body>
 <fieldset>
 <h1 style="text-align:center; color:black ">Register Your Complaint Here</h1>
 
 
 
 <form action="create_complaint.php" method="POST" enctype="multipart/form-data">
	 <label for="name">Enter Your Name: </label><br>
	 <input type="text" id="name" size="40" align="center" name="name"><br>
	 
	 <label for="address">Enter Your Address: </label><br>
	 <input type="text" id="address" size="40" align="center" name="address"><br>
	 
	 <label for="mobile">Enter Your Mobile Number: </label><br>
	 <input type="text" id="mobile" size="40" align="center" name="mobile"><br>
	 
	 <label for="wardnumber">Enter Your Ward Number: </label><br>
	 <input type="text" id="wardnumber" size="40" align="center" name="wardnumber"><br>
	 
	 <label for="subject">Complaint subject: </label><br>
	 <input type="text" id="subject" size="40" align="center" name="subject"><br>
	 
	 <label for="content">Enter Your Complaint: </label><br>
	 <textarea cols="30" rows="10" size="50" name="content"></textarea>
	 <br>
	 
	 <label for="complaint_pic">File: </label>
	 <input type="file" name="complaint_pic" id="complaint_pic">
	 <br>
     <input type= "submit" name="submit" value="SUBMIT">
  </form>
 </body>
 </html>