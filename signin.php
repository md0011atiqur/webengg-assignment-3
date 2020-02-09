<?php
session_start();
include("db_conn.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
  $username = $_POST['username'];
  $ppassword = $_POST['password'];
  $password=md5($ppassword);
	$sql = "SELECT * FROM `applicant` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) == 0) {
      header('Location: signin.php');
    } else {
      $user = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $user['username'];
      $_SESSION['admin'] = $user['admin'];
	  header('Location: index.php');
	}
}
?>

<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="css/bootstrap.css" rel="stylesheet"/>
<script type="text/javascript" src="js/bootstrap.js" ></script>

</head>
<body>
<div class="container p-3 my-3 border jumbotron">

	<div class="col-sm-1"></div>
	<div class="col-sm-11">
	<div class="row">
		<table align ='center'>
			<tr >
				<td align='center'><a href="index.php"><button type="button" class="btn btn-success btn-lg btn-block">Home</button></a></td>
				<td align='center'><a href="signin.php"><button type="button" class="btn btn-success btn-lg btn-block">Signin</button></a></td>
				<td align='center'><a href="signup.php"><button type="button" class="btn btn-success btn-lg btn-block">Signup</button></a></td>
				<td align='center'><a href="admin.php"><button type="button" class="btn btn-success btn-lg btn-block">Admin</button></a></td>
				<td align='center'><a href="logout.php"><button type="button" class="btn btn-success btn-lg btn-block">Logout</button></a></td>
			</tr>
		</table>
	</div>
	<div style="line-height: 0.1"><h3>Job Application of X Company </h3><br> Wish to play a role in building the future?<hr></div>
		<form class="form-horizontal" id="validation" action="<?php echo $_SERVER['PHP_SELF']?>"  method="post">
		<!-- Username -->
		<div class="form-group row">
			<div class="align-text-bottom"><br><label for="username">Username</label></div>
		</div>
		<div class="form-group row">
			<div class="input-group col-md-8"><input id="username" type="text" name="username" class="form-control form-control-lg border-md input-md"></div>
		</div>
		<!-- Password -->
		<div class="form-group row">
			<div class="align-text-bottom">
			<br><label for="password">Password</label>
			</div>
		</div>
		<div class="form-group row">
			<div class="input-group col-md-8">
			<input id="password" type="password" name="password" class="form-control form-control-lg border-md input-md">
			</div>
		</div>
				
		<div class="form-group row">
			<div class="col-md-4">
					
					<input type="submit" id="submit" value="submit" onclick="sendMessage(); clearInput(); class="btn btn-success btn-lg">
					
			</div>
		</div>
		
		</form>
		<script type="text/javascript" src="jquery-validation/jquery-3.4.1.min.js" ></script>
		<script type="text/javascript" src="jquery-validation/dist/jquery.validate.js" ></script>
		<script>
			$("#validation").validate({
										rules: {
											username: "required",
											password: {
											required: true
											}
										},
										messages: {
											username: "Please enter username",
											password: {
											required: "Please enter password"
											}
										}
			});
		</script>

	</div>
	<div class="col-sm-1"></div>
</div>
</body>
</html>



