<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>   
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("db_conn.php");
$username = $_POST['username']; 
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$web = $_POST['web'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$staddress = $_POST['staddress'];
$city = $_POST['city'];
$province = $_POST['province'];
$postal = $_POST['postal'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$bio = $_POST['bio'];
$newinterest = $_POST['interest'];
$intrst = '';
foreach ($newinterest as $i){
	$intrst .= $i . ",";
}


$salary = $_POST['salary'];
$degree = $_POST['degree'];
$experience = $_POST['experience'];
$designation = $_POST['designation'];

$timestamp=time();
$rand = rand(10,99);
$target_dir = "allcv/";
$target_file = $target_dir .$timestamp.'-'.$rand.'-'.basename($_FILES["cv"]["name"]);
if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
$cv=$timestamp.'-'.$rand.'-'.basename( $_FILES["cv"]["name"]);
}


if(!empty($username) && !empty($email) && !empty($phone) && !empty($password))
{
	$sql = "SELECT username, email, phone FROM applicant WHERE username='$username' AND email='$email' AND phone='$phone'";
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
	if ($result->num_rows == 0)
	{
		if (!isset($row['email']))
			{
				$password=md5($password);
			$sql = "INSERT INTO applicant (username, password, firstname, lastname, email, phone,
			web, dob, address, staddress, city, province, postal, country,
			gender, bio, interest, salary, degree, experience, designation, cv)
			VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$phone',
			'$web', '$dob', '$address', '$staddress', '$city', '$province', '$postal', '$country',
			'$gender', '$bio', '$intrst', '$salary', '$degree', '$experience', '$designation', '$cv')";
			
			if ($db->query($sql) == TRUE) 
			{
				echo "Data Successfully inserted";
			header('Location: signin.php'); 
			} 
			else 
			{
			echo "Error: " . $sql . "<br>" . $db->error;
			header('Location: signup.php');
			}					
		  }
	}
	else
	{
	 echo "<font color='red'>Your Information already Exist. Please Signin With Your Username and Password.</font>";
	}
}
else 
{
echo " <font color='red'>Need Empty Field.</font>";
}

?>


</body>
</html>
