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
  <div class="bg-img">
		<div class="desktop" >
			<img  src="assets/image/login.jpg" alt=""  />
		</div>
	  <div class="mobile" >
	  <img  src="assets/image/login-mobile.png" alt=""  />
	  </div>
      <div class="content">
		<?php 
			include'db-connect.php';			
			// define variables to empty values  
			$emailErr ="";    
			  
			//Input fields validation  
			if(isset($_POST['form_submit'])){ 
				  
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
				
					$emailinsert="insert into event_reg_log_tb (email) values ('$email')";
				    $que=mysqli_query($connect,$emailinsert);
					$sql ="SELECT * FROM event_reg_tb WHERE email='$email'";
					$res=mysqli_query($connect,$sql);
					if (mysqli_num_rows($res) > 0) 
					{
							$tdt=date('Y-m-d');
							$upsql ="update event_reg_tb set event_logind2='Yes',event_logindtd2='$tdt' WHERE email='$email'";
							$upres=mysqli_query($connect,$upsql);
						    setcookie("UserPass_id",$email,60*60*10+time());
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
						<script>
							window.location.href = 'event-registration.php';
						</script>
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
			<form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			  <div class="form-group">
				<input type="email" class="form-control" placeholder="Enter email to continue.." name="email" required="true">
				<span class="error"><?php //echo $emailErr; ?> </span>  
			  </div>
			
			  <button type="submit" class="btn btn-primary btn-block" name="form_submit">Submit</button>
			  <p> In case of any query call <br> <a href="tel:+91 - 8527219026">+91 - 8527219026</a></p>
			</form>
		</div>
	</div>
	

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php ob_flush();?>


