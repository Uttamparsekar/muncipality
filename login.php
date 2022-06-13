<?php include 'configg.php' ?>


<!DOCTYPE html>
<html>
<head>
<title>Muncipaltyconnect</title>
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
  background:#85B3D1FF;
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
  background-color:#0D47A1;
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
  color: black;
  font-size: 12px;
}
.form .message a {
  color: black;
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
	  
</style>
</head>
<body>
<?php include 'header.php'; ?>
 
 <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3 style="color:white">LOGIN</h3>
            <p style="color:white">Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" action="homee.php" method="POST">
          <input type="text" placeholder="Enter your mobile number" name="mobile"/>
          <input type="password" placeholder="password" name="password"/>
          <button>login</button>
          <p class="message">Not registered? <a href="indexx.php">Create an account</a></p>
        </form>
      </div>
    </div>
 
 <footer>
 </footer>
</body>
</html>	  