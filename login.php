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
  <div class="bg-img">
	   <!--<img src="assets/image/Scene1.jpg" alt=""  />-->
      <div class="content">
		<img src="assets/image/Final-Logo.png"  />
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
				
				 
				$sql ="SELECT * FROM event_reg_tb WHERE email='$email'";
					$res=mysqli_query($connect,$sql);
					 $count = mysqli_num_rows($res);
					
					if($count == 1)
					{
						$tdate=date('d-m-Y');
						$upsql ="update event_reg_tb set event_login='ACTIVE',event_logindt='$tdate' WHERE email='$email'";
						$upres=mysqli_query($connect,$upsql);
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
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			  <div class="form-group">
				<input type="email" class="form-control" placeholder="Enter email to continue.." name="email" required="true">
				<span class="error"><?php echo $emailErr; ?> </span>  
			  </div>
			
			  <button type="submit" class="btn btn-primary btn-block" name="form_submit">Submit</button>
			</form>
		</div>
	</div>
	

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php ob_flush();?>


