<?php

include('dbconnection.php');

if(isset($_POST['login']))
{
	$query = "SELECT * FROM `admin` WHERE 'admin_name' = '$_POST[username]' AND 'admin_password' = '$_POST[pass]'";
	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result)==1)
	{
		echo "Currect";
	}
	else
	{
		echo "incurrect";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<form method = "post" name = "admin">

<input type = "text" name = "username" placeholder = "Admin Name"><br>
<input type = "text" name = "pass" placeholder = "Password"><br>
<button type = "submit" name = "login1"> Login </button>
</form>

</body>
</html>
