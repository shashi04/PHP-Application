<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Event</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">


</head>
<body>
	<!--<div class="artboard-content" style="display:none;">
		
		<p style="text-align:center; margin-top: 38%; position: relative;">
		<img src="assets/image/aun-new1.gif" style="max-width: 240px;" />
		</p>
		<p style="padding:20px; color:#5c5959; text-align:center; font-weight: 600;">PLEASE ROTATE YOUR DEVICE FOR BETTER EXPERIENCE</p>
	</div>-->
	 <div class="event-reg-bg-img">
      <div class="event-reg-content">
        <header>Event Registration</header>
		<?php 
			include'db-connect.php';			
			// define variables to empty values  
			$nameErr = $emailErr = $phoneErr = $addressErr ="";    
			//$name = $email = $phone = $address = "";  
			  
			//Input fields validation  
			if(isset($_POST['reg_submit'])){ 
				  
			//String Validation  
				if (empty($_POST["name"])) {  
					 $nameErr = "Name is required";  
				} else {  
					 $name = input_data($_POST["name"]);  
						// check if name only contains letters and whitespace  
						if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
							$nameErr = "Only alphabets and white space are allowed";  
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
						// check if mobile no is well-formed  
						if (!preg_match ("/^[0-9]*$/", $phone) ) {  
						$phoneErr = "Only numeric value is allowed.";  
						}  
					//check mobile no length should not be less and greator than 10  
					if (strlen ($phone) != 10) {  
						$phoneErr = "Mobile no must contain 10 digits.";  
						}  
				}  
				  
				//URL Validation      
				
						 $address = input_data($_POST["address"]);  
					     
				 
				$sql ="SELECT * FROM event_reg_tb WHERE email='$email'";
					$res=mysqli_query($connect,$sql);
					if (mysqli_num_rows($res) > 0) 
					{
							?>
						  <br><br>  <p align="center" style="color:red">email already exist.please enter different email!</p>
							<?php
					}
					else
					{
						
						 $result="insert into event_reg_tb (name,email,phone,address) values ('$name','$email','$phone','$address')";
						 $query=mysqli_query($connect,$result);
							if($query==true)
						{
							$_SESSION['UserPass_id']=$email;
							?>
							<script>
							    window.location.href = 'lobby.php';
							</script>
							<?php
						}
						else
						{
							//echo mysqli_error($connect)
						?>
						  <br><br>  <p align="center" style="color:red">Sorry, We Ran Into Some Problem! We are Fixing It!</p>
							 <?php
						}
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
				<div class="col-md-6">
					<div class="form-group">
					<label>Name*</label>
					<input type="text" class="form-control" placeholder="Enter name"  name="name" required="true" >
					<span class="error"><?php echo $nameErr; ?> </span>  
				  </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					<label>Phone*</label>
					<input type="text" class="form-control" pattern="^[6-9]\d{9}$" maxLength="10" minLength="10" placeholder="Enter phone"  name="phone" required="true" >
					<span class="error"><?php echo $phoneErr; ?> </span>  
				  </div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
					<label>Email*</label>
					<input type="email" class="form-control" name="email" placeholder="Enter email" required="true">
					<span class="error"><?php echo $emailErr; ?> </span>  
				  </div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
					<label>City</label>
					<input type="text"  class="form-control" maxLength="200" placeholder="Enter city"  name="address"  >
					<span class="error"><?php echo $addressErr; ?> </span>  
				  </div>
				</div>
				<div class="col-md-12">
				  <div class="form-check mb-2 mr-sm-2">
					<label class="form-check-label">
					  <input class="form-check-input" type="checkbox"> Agree to Terms of Service:  
					</label>
				  </div>
				 </div> 
			  </div>
			  <button type="submit" class="btn btn-primary" name="reg_submit">Submit</button>
			</form>
		</div>
	</div>
	
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php ob_flush();?>
