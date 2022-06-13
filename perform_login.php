<?php include'configg.php'; ?>

<?php
  $valid = true;
  if(!isset($_POST['submit']))
	$mob = $_POST['mobile'];
	$pass = $_POST['password'];
	$valid = false;
?>
<?php if(empty($mob)): ?>
	<div>mobile number cannot be empty</div>
<?php $valid = false; ?>
<?php endif; ?>

<?php if (empty($pass)): ?>
<div>password cant be empty</div>
<?php $valid = false; ?>
<?php endif; ?>

<?php $query="SELECT * FROM users WHERE mobile='$mob'AND password='$pass'"; ?>
<?php $result = mysqli_query($con, $query) ?>
<?php if(mysqli_num_rows($result) == 0): ?>
	<div>Invalid credentials</div>
<?php $valid = false; ?>
<?php endif; ?>
<?php
	if ($valid)
	{
		 header('Location: homee.php');
		 exit;
	}
	
?>
