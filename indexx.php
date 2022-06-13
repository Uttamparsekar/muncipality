<!DOCTYPE html>
<html>
<head>

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
	  
	  
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background:grey;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
 
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: white;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color:goldenrod;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 20px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: white;
  font-size: 12px;
}
.form .message a {
  color: white;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
 footer {
	 background-color:black;
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
</head>

<body>
<?php include 'header.php'; ?>

 <h1 style="text-align:center;">Please Register Here:</h1>
 




<form action="create_account.php" method="POST">
	<input type="text" name="name" placeholder="enter username">
	<br>
	<input type="password" name="password" placeholder="enter password">
	<br>
	<input type="text" name="age" placeholder="enter your age" ">
	<br>
	<input type="text" name="mobile" placeholder="enter Mobile">
	<br>
	<input type="text" name="address" placeholder="enter Address">
	<br>
	<input type="text" name="wardnumber" placeholder="enter ward Number">
	<br>
	<input type="text" name="profession" placeholder="enter your profession">
	<br>
	<input type="text" name="pincode" placeholder="enter pincode">
	<br>
	
	<input type="submit" name="submit" value="register"> 
</form> 

</body>

</html>