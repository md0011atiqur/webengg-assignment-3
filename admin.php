<?php
include("db_conn.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $sl = $_POST['sl'];
  $sql1 = "DELETE FROM `applicant` WHERE `sl` = '$sl'";
  $result1 = mysqli_query($db, $sql1);
  if ($result1) {
    $successMessage = "Delete successfull!";
  } else {
    $errorMessage = "Delete failed! Something went wrong! Please try again!";
  }
}
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="css/bootstrap.css" rel="stylesheet"/>
<script src="js/bootstrap.js" ></script>
</head>
<body>
<div class="container p-3 my-3 border jumbotron">



	<div class="col-sm-1"></div>
	<div class="col-sm-10">
	
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
		<div class="row">
<?php
session_start();
if(isset($_SESSION['admin'])){
		if ($_SESSION['admin'] != '1') 
		{?>
			<div class='alert alert-info'>
			Only for Admin Access.
			</div>
		<?php
		}
		else
		{

		
		$sql = "SELECT  * FROM applicant";
			$result = $db->query($sql);
				if ($result->num_rows > 0) {
				?>	
				<table class="table table-bordered table-hover">
				<tr><th class="text-center">Name</th><th>Phone</th><th>Email</th><th>Date of Birth</th><th>Interest</th>
				<th>Degree</th><th>Experience</th><th>CV</th><th>Remove</th></tr>
					<?php
					while ($row = $result->fetch_assoc()) {
					?>
					<tr align='center'>
					<td><?php echo $row['firstname'].' '.$row['lastname'];?></td><td><?php  echo $row['phone'];?></td>
					<td><?php  echo $row['email'];?></td><td><?php  echo $row['dob'];?></td><td><?php  echo $row['interest'];?></td>
					<td><?php  echo $row['degree'];?></td><td><?php  echo $row['experience'];?></td>
					<td><a href="<?php  echo "allcv/".$row['cv'];?>">Download CV</a></td>
					<td>
					<?php if ($row['admin'] != 1) { ?>
						<form method="post" action="<?php __FILE__ ?>">
						<input type="hidden" id="sl" name="sl" value="<?php echo $row['sl']; ?>">
						<input type="submit" onclick="return confirm('Are you sure?');" name="submit" value="Delete">
						</form>
						<?php } ?>
					</td>
				</tr>  
		<?php
		}
		?>
		</table> 
	<?php
	}
	}
}
else
{
	header("location: index.php");
}
?>
</div>
	</div>
	<div class="col-sm-1"></div>
</div>
</body>
</html>



