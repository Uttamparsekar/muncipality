<?php include 'configg.php' ?>
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
					background-color:#85B3D1FF;
					
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
			  font-size: 14px;
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
			button{
				line-height: 60px;
				width: 700px;
				font-size: 23pt;
				font-family: tahoma;
				margin-top: 10px;
				background-color:white;
				margin-left: 950px;
				display:block;
				border:2px solid black;
				cursor:pointer;
				padding:14px 28px;
				top:0;
				right:0;
				width:33%
				float:top;
			}	

			 footer {
				 background-color:black;
			 }
			 #col-1{
				 position:fixed;
				 width:50%;
				 float:left;
				 height:100%;
				 z-index:1010101010
			 }
			 #col-2{
				 position:fixed;
				 width:50%;
				 align:right;
				 float:right;
				 height:100%;
				 z-index:1010101010
			 }
		</style>
	</head>
<body>


<?php include 'header.php'; ?>

<?php include 'main_navigation.php'; ?>

 <div id="col-1">

 <image src="muncipalty.jpg"  style="width:900px;height:700px;">

 </div>
 
 <div id="col-2">

  <button class="btna" onclick="window.location.href='complaint.php'" type="button">Register Complaint</button>
 
  <button class="btnb" onclick ="window.location.href='applydoc.php'"type="button">Apply for Documents</button>
   <button class="btnc"  type="button">Apply for Schemes</button>
  <button class="btnd" type="button">Check Notices</button>
  

</div>

  
</body>

</html>