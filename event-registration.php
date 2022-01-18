<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aniecon 2021</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
   <link rel="apple-touch-icon" type="image/png" href="assets/image/apple-touch-icon.png"><!-- iPhone -->
  <link rel="shortcut icon" href="assets/image/favicon.ico" type="image/x-icon">
  <link rel="icon"  sizes="16x16" href="assets/image/favicon-16x16.png" type="image/x-icon">
  <link rel="icon"  sizes="32x32" href="assets/image/favicon-32x32.png" type="image/x-icon">
  <link rel="icon"  sizes="192x192" href="assets/image/android-chrome-192x192.png" type="image/x-icon">
  <link rel="icon"  sizes="512x512" href="assets/image/android-chrome-512x512.png" type="image/x-icon">


</head>
<body>
	<!--<div class="artboard-content" style="display:none;">
		
		<p style="text-align:center; margin-top: 38%; position: relative;">
		<img src="assets/image/aun-new1.gif" style="max-width: 240px;" />
		</p>
		<p style="padding:20px; color:#5c5959; text-align:center; font-weight: 600;">PLEASE ROTATE YOUR DEVICE FOR BETTER EXPERIENCE</p>
	</div>-->
	 <div class="event-reg-bg-img">
	<div class="evdesktop" >
			<img  src="assets/image/login.jpg" alt=""  />
		</div>
	  <div class="evmobile" >
	  <img  src="assets/image/login-mobile.png" alt=""  />
	  </div>
      <div class="event-reg-content">
        <header>Register Now</header>
		<?php 
			include'db-connect.php';			
			// define variables to empty values  
			$titleErr = $firstnameErr = $lastnameErr = $emailErr = $phoneErr = $categoryErr = $anei_memberErr = $countryErr = $organisationErr = $term_conditionErr ="";    
			//$name = $email = $phone = $address = "";  
			  
			//Input fields validation  
			if(isset($_POST['reg_submit'])){ 
				  
			//String Validation  
				if (empty($_POST["title"])) {  
					 $titleErr = "title is required";  
				} else 
				{  
					 $title = input_data($_POST["title"]);   
				} 
				if (empty($_POST["firstname"])) 
				{  
					 $firstnameErr = "firstname is required";  
				} 
				else 
				{  
					 $firstname = input_data($_POST["firstname"]);  
						// check if name only contains letters and whitespace  
						if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {  
							$firstnameErr = "Only alphabets and white space are allowed";  
						}  
				}
				if (empty($_POST["lastname"])) {  
					 $lastnameErr = "lastname is required";  
				} else {  
					 $lastname = input_data($_POST["lastname"]);  
						// check if name only contains letters and whitespace  
						if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {  
							$lastnameErr = "Only alphabets and white space are allowed";  
						}  
				}				
				  
				//Email Validation   
				if (empty($_POST["email"])) {  
						$emailErr = "Email is required";  
				} else {  
						 $email = input_data($_POST["email"]);  
						// check that the e-mail address is well-formed  
						if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
							$emailErr = "Invalid email format";  
						}  
				 }  
				
				//Number Validation  
				if (empty($_POST["phone"])) {  
						$phoneErr = "Mobile no is required";  
				} else {  
						 $phone = input_data($_POST["phone"]);   
						}  

				if (empty($_POST["category"])) {  
						$categoryErr = "category is required";  
				} 
				else {  
						 $category = input_data($_POST["category"]);   
						}  

				if (empty($_POST["organisation"])) {  
						$organisationErr = "organisation is required";  
				} else {  
						 $organisation = input_data($_POST["organisation"]);   
						}  

				  
						 $anei_member = input_data($_POST["anei_member"]);   
					

				if (empty($_POST["country"])) {  
						$countryErr = "country is required";  
				} else {  
						 $country = input_data($_POST["country"]);   
						}  

				if (empty($_POST["term_condition"])) {  
						$term_conditionErr = "term_condition is required";  
				} else {  
						 $term_condition = input_data($_POST["term_condition"]);   
						}  
				
				  
				//URL Validation      
				
						 $state = input_data($_POST["state"]);  
						 $anei_number = input_data($_POST["anei_number"]);  
						 $other_cat = input_data($_POST["other_cat"]);  
						 $other_country = input_data($_POST["other_country"]);  
			
			
						
						 $result="insert into event_reg_tb (title,firstname,lastname,category,email,phone,organisation,country,term_condition,state,anei_number,anei_member) values ('$title','$firstname','$lastname','$category','$email','$phone','$organisation','$country','$term_condition','$state','$anei_number','$anei_member')";
						 $query=mysqli_query($connect,$result);
							if($query==true)
						{
							setcookie("UserPass_id",$email,60*60*10+time());
							?>
							<script>
							    window.location.href = 'lobby.php';
							</script>
							<?php
						}
						else
						{
							//echo mysqli_error($connect);
						    	?>
								<br><br>  <p align="center" style="color:red">Sorry, We Ran Into Some Problem! We are Fixing It!</p>
							<?php
						}
  

			}  
		    function input_data($data) {  
			  $data = trim($data);  
			  $data = stripslashes($data);  
			  $data = htmlspecialchars($data);  
			  return $data;  
			}  
			?>  
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
			  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="form-group">
					<label>Title<span>*</span></label>
					<select class="form-control" required="true" name="title">
						<option value="">select..</option>
						<option value="Mr.">Mr.</option>
						<option value="Mrs.">Mrs.</option>
						<option value="Ms.">Ms.</option>
						<option value="Dr.">Dr.</option>
					</select>
					<span class="error"><?php echo $titleErr; ?> </span>  
				  </div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="form-group">
					<label>First Name<span>*</span></label>
					<input type="text" class="form-control" maxLength="100" placeholder="Enter first Name"  name="firstname" required="true" >
					<span class="error"><?php echo $firstnameErr; ?> </span>  
				  </div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="form-group">
					<label>Last Name<span>*</span></label>
					<input type="text" class="form-control"  maxLength="100" placeholder="Enter last Name"  name="lastname" required="true" >
					<span class="error"><?php echo $lastnameErr; ?> </span>  
				  </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
					<label>Category<span>*</span></label>
					<select class="form-control" required="true" name="category" onchange="yesnoCategory(this);">
						<option value="">select..</option>
						<option value="Nurse">Nurse</option>
						<option value="Nurse Team Leader">Nurse Team Leader</option>
						<option value="Nurse Supervisor">Nurse Supervisor</option>
						<option value="Nursing Head" >Nursing Head</option>
						<option value="Group Nursing Head">Group Nursing Head</option>
						<option value="Nursing Faculty">Nursing Faculty</option>
						<option value="Nursing Student" >Nursing Student</option>
						<option value="Paramedical">Paramedical</option>
						<option value="Doctor">Doctor</option>
						<option value="Other">Other</option>
					</select>
					<span class="error"><?php echo $categoryErr; ?> </span>  
				  </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6" id="ifcategory" style="display: none;">
					<div class="form-group">
					<label>Other Category <span>*</span></label>
					<input type="text" class="form-control"    maxLength="200" placeholder="Enter Other Category"  name="other_cat"  >
				  </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
					<label>Email Id<span>*</span></label>
					<input type="email" class="form-control"  maxLength="200" name="email" placeholder="Enter email" required="true">
					<span class="error"><?php echo $emailErr; ?> </span>  
				  </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
					<label>Mobile No. (Whats App)<span>*</span></label>
					<input type="text" class="form-control"   maxLength="100" placeholder="Enter phone"  name="phone" required="true" >
					<span class="error"><?php echo $phoneErr; ?> </span>  
				  </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
					<label>ANEI Member <span>*</span></label><br>
					<div class="form-check-inline">
					  <label class="form-check-label">
						<input type="radio" class="form-check-input" value="Yes" name="anei_member" onclick="yesnoCheck(this);">Yes
					  </label>
					</div>
					<div class="form-check-inline">
					  <label class="form-check-label">
						<input type="radio" class="form-check-input" value="No" name="anei_member" onclick="yesnoCheck(this);">No
					  </label>
					</div>
					<span class="error"><?php echo $anei_memberErr; ?> </span>  
				  </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6" id="ifYes" style="display: none;">
					<div class="form-group">
					<label>ANEI Number <span>*</span></label>
					<input type="text" class="form-control"    maxLength="200" placeholder="Enter ANEI Number"  name="anei_number"  >
				  </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
					<label>Name of the Organization<span>*</span></label>
					<input type="text" class="form-control"  maxLength="200"  placeholder="Enter Name of the Organization"  name="organisation" required="true" >
					<span class="error"><?php echo $organisationErr; ?> </span>  
				  </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
					<label>Country <span>*</span></label>
					<select name="country" class="form-control" onchange="yesnoSelect(this);" required="true" >
						<option value="">Select...</option>
						<option value="India">India</option>
						<option value="Other">Other</option>
					</select>
					<span class="error"><?php echo $countryErr; ?> </span>  
				  </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6" id="ifcountry" style="display: none;">
					<div class="form-group">
					<label>State <span>*</span></label>
					<select name="state" class="form-control" >
						<option value="">Select...</option>
						<?php	
							include'db-connect.php';
							$res=mysqli_query($connect,"select * from  states");
							while($r=mysqli_fetch_array($res))
							{
								?>
							<option value="<?php echo $r['name']; ?>"><?php echo $r['name']; ?></option>
								<?php
						
							}
							?>					
					</select>
				  </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6" id="ifothercountry" style="display: none;">
					<div class="form-group">
					<label>Other Country <span>*</span></label>
					<input type="text" class="form-control"   maxLength="200" placeholder="Enter Other Country"  name="other_country"  >
				  </div>
				</div>
				<div class="col-md-12 col-sm-12">
				  <div class="form-check mb-2 mr-sm-2">
					<label class="form-check-label">
					  <input class="form-check-input" name="term_condition" type="checkbox" value="I hereby approve that the recorded version of this conference can be used in full or in parts for promotional/Educational Activities of ANEI" required="true"> I hereby approve that the recorded version of this conference can be used in full or in parts for promotional/Educational Activities of ANEI <span>*</span> 
					  <span class="error"><?php echo $term_conditionErr; ?> </span>  
					</label>
				  </div>
				 </div> 
			  </div>
			  <button type="submit" class="btn btn-primary" name="reg_submit">Submit</button>
			</form>
			  <p> In case of any query call <br> <a href="tel:+91 - 8527219026">+91 - 8527219026</a></p>
		</div>
	</div>
	
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
	function yesnoCheck(that) {
    if (that.value == "No") {
        document.getElementById("ifYes").style.display = "none"; 
    } 
	
	else {
        document.getElementById("ifYes").style.display = "block";
    }
	}
</script>
  <script>
	function yesnoSelect(that)
	{
		if (that.value == "Other") {
			document.getElementById("ifothercountry").style.display = "block";
			document.getElementById("ifcountry").style.display = "none";
		} 
		
		else {
			document.getElementById("ifcountry").style.display = "block";
			document.getElementById("ifothercountry").style.display = "none";

		}
	}
	function yesnoCategory(that) 
	{
		if (that.value == "Other") {
			document.getElementById("ifcategory").style.display = "block";
		} 
		
		else {
			document.getElementById("ifcategory").style.display = "none";

		}
	}
</script>
</body>
</html>
<?php ob_flush();?>
