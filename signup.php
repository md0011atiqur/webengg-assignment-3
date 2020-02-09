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
		<form class="form-horizontal" id="validation" role="form" enctype="multipart/form-data" action="appicationprocess.php"  method="post">
		
		<!-- Username -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="username">Username</label></div></div>
		<div class="form-group row"><div class="input-group col-md-8"><input id="username" type="text" name="username" class="form-control form-control-lg border-md input-md" required></div></div>
		<!-- Password -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="password">Password</label></div></div>
		<div class="form-group row">
			<div class="input-group col-md-8">
			<input id="password" type="password" name="password" placeholder="Enter Minimum 5 charactar" class="form-control form-control-lg border-md input-md" >
			</div>
		</div>
		<!-- Confirm Password -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="cpassword">Confirm Password</label></div></div>
		<div class="form-group row">
			<div class="input-group col-md-8">
			<input id="cpassword" type="password" name="cpassword" placeholder="Enter same password" class="form-control form-control-lg border-md input-md" >
			</div>
		</div>
		<!-- Name -->
		<div class="form-group row"><div class="align-text-bottom" ><label for="name">Name</label></div>
		</div>
		<div class="form-group row">
			<!-- First Name -->
			<div class="input-group col-md-4">
			<input id="name" type="text" name="firstname" placeholder="Enter firstname" class="form-control form-control-lg input-md border-md" required> 
			</div>
				
			<!-- Last Name -->
			<div class="input-group col-md-4">
			<input id="name" type="text" name="lastname" placeholder="Enter lastname" class="form-control form-control-lg input-md border-md" required> 
			</div>
		</div>
		
		<!-- Email -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="email">Email</label></div></div>
		<div class="form-group row">
			<div class="input-group col-md-8">
			<input id="email" type="email" name="email" placeholder="Enter your email" class="form-control form-control-lg border-md input-md" required>
			</div>
		</div>
		<!-- Phone -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="phone">Phone</label></div></div>
		<div class="form-group row">
			<div class="input-group col-md-8">
				<input id="phone" type="text" name="phone" maxlength="11" placeholder="880XXX XXXXXX" class="form-control form-control-lg border-md input-md" required>
			</div>
		</div>
		<!-- Web Site -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="web">Web Site</label></div></div>
		<div class="form-group row">
			<div class="input-group col-md-8">
				<input id="web" type="url" name="web" placeholder="http://" class="form-control form-control-lg border-md input-md">
			</div>
		</div>
		
		<!-- Date of Birth -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="dob">Date of Birth</label></div></div>
		<div class="form-group row">
			<!-- Month -->
			<div class="input-group col-md-8">
				<input id="dob" type="date" name="dob" class="form-control form-control-lg input-md border-md" required>
			</div>
		</div>
		
		<!-- Address -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="address">Address</label></div></div>
		<div class="form-group row">
			<div class="input-group col-md-8">
				<input id="address" type="text" name="address" class="form-control form-control-lg border-md input-md" required>
			</div>
		</div>
		
		<!--Street Address -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="staddress">Street Address</label></div></div>
		<div class="form-group row">
			<div class="input-group col-md-8">
				<input id="staddress" type="text" name="staddress" class="form-control form-control-lg border-md input-md">
			</div>
		</div>
		
		<!-- Address Line 2 -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="city">Address Line 2</label></div></div>
		<div class="form-group row">
			<!-- City -->
			<div class="input-group col-md-4">
				<input id="city" type="text" name="city" class="form-control form-control-lg input-md border-md" required>
			</div>
			<!-- State/Province/Region -->
			<div class="input-group col-md-4">
				<input id="st-pr-re" type="text" name="province" class="form-control form-control-lg input-md border-md" required>
			</div>
		</div>
		<!-- Postal/Zip Code and Country -->
		<div class="form-group row">		</div>
		<div class="form-group row">
			<!-- Postal/Zip -->
			<div class="input-group col-md-4">
				<input id="postal" type="text" name="postal" class="form-control form-control-lg input-md border-md" required>
			</div>
			<!-- Country -->
			<div class="input-group col-md-4">
					<select id="country" name="country" class="form-control form-control-lg input-md border-md" required>
						
						<option value="">--Select--</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Nepal">Nepal</option>
						<option value="Sri Lanka">Sri Lanka</option>
					</select> 
			</div>
		</div>
		
		<!-- Gender -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="gender">Sex</label></div></div>
		<div class="form-group row">
			<!-- Gender -->
			<div class="input-group col-md-4">
				<input class="radio-inline" type="radio" name="gender" id="gender" value="Male" checked>
				<label class="form-check-label" for="inlineRadio1">Male</label>
					<div style="width: 50px;"> </div>
				<input class="radio-inline" type="radio" name="gender" id="gender" value="Female">
				<label class="form-check-label" for="inlineRadio2">Female</label>
			</div>
		</div>
		
		
		<!-- Bio -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="bio">Bio</label></div></div>
		<div class="form-group row">
			<div class="input-group col-md-8">
				<textarea  id="bio" name="bio" class="form-control form-control-lg border-md input-md"></textarea>
			</div>
		</div>

		<!-- Division of Interest -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="interest">Division of Interest</label></div></div>
		<div class="form-group row">
			<div class="input-group col-md-8">
				<div class="checkbox"><label for="checkboxes-0"><input type="checkbox" name="interest[]" id="interest" value="HR Division">HR Division</label></div>
				<div class="checkbox"><label for="checkboxes-1"><input type="checkbox" name="interest[]" id="interest" value="IT Division">IT Division</label></div>
				<div class="checkbox"><label for="checkboxes-2"><input type="checkbox" name="interest[]" id="interest" value="Marketing Division">Marketing Division</label></div>
				<div class="checkbox"><label for="checkboxes-3"><input type="checkbox" name="interest[]" id="interest" value="Other">Other</label></div>
			</div>
		</div>
		
		<!-- Expected Salary -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="salary">Expected Salary</label></div></div>
		<div class="form-group row">
			<div class="input-group col-md-8">
				<input id="salary" type="number" name="salary" placeholder="Enter Minimum Salary 1000." class="form-control form-control-lg input-md border-md" required> 
			</div>
		</div>
		
		<!-- Latest Degree -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="degree">Latest Degree</label></div></div>
		<div class="form-group row">
			<div class="input-group col-md-8">
				<select id="degree" name="degree" class="form-control form-control-lg custom-select custom-select-lg mb-3" required>
					<option value="">--Select--</option>
					<option value="MBA">MBA</option>
					<option value="BBA">BBA</option>
					<option value="M Sc">M Sc</option>
					<option value="B Sc">B Sc</option>
					<option value="Diploma">Diploma</option>
				</select>
			</div>
		</div>
		<!-- Years of Experience -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="experience">Years of Experience</label></div></div>
		<div class="form-group row"><div class="input-group col-md-8"><input id="experience" type="text" name="experience" class="form-control form-control-lg border-md input-md" required></div></div>
		<!-- Name of Current Designation -->
		<div class="form-group row"><div class="align-text-bottom"><br><label for="designation">Name of Current Designation</label></div></div>
		<div class="form-group row"><div class="input-group col-md-8"><input id="designation" type="text" name="designation" class="form-control form-control-lg border-md input-md"></div></div>
		<!-- Upload CV -->
		<div class="form-group row"><div id="cv" class="align-text-bottom"><br>Upload CV</div></div>
		<div class="form-group row"><div class="input-group col-md-8"><div class="default-file-upload"><input id="cv" name="cv" type="file" required></div></div></div>
		<div class="form-group row"><div class="col-md-8"><button type="submit" class="btn btn-success btn-lg">Submit Application</button></div></div>
		</form>
		<script type="text/javascript" src="jquery-validation/jquery-3.4.1.min.js" ></script>
		<script type="text/javascript" src="jquery-validation/dist/jquery.validate.js" ></script>
		<script>
			$("#validation").validate({
										rules: {
												username: {
												required: true
												},
												password: {
												minlength: 5
												},
												cpassword: {
												minlength: 5,
												equalTo: "#password"
												},
												phone: {
													matches:"[0-9]+",
													digits: true,
													minlength:11,
													maxlength:11
												},
												web: {
													required: true,
													url:true
												},
												salary:{
													required:true,
													digits: true,
													minlength:4
												}
										},
										
										messages: {
											salary: "Please Enter Minimum 4 digit salary",
											username: "Please Enter This Field",
											web: "Please Enter Valid URL",
											password: "Enter Minimum 5 charactar/number",
											cpassword: {
											required: "Please Enter the same password as above",
											equalTo: "Password and Confirm Password Not Match"
											},
											phone: {
											required: "Please Enter phone number",
											digits: "Please enter digit",
											minlength: "Enter Minimum 11 digit",
											maxlength: "Enter Minimum 11 digit"
											}
										},
										submitHandler: function(form){
											form.submit();
										}
			});
		</script>
	</div>
	<div class="col-sm-1"></div>
</div>
</body>
</html>



