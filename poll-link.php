
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
  <div class="container mt-5">
      <div class="row">
		<?php 
			include'db-connect.php';			
			// define variables to empty values  
			$linkErr ="";    
			  
			//Input fields validation  
			if(isset($_POST['form_submit'])){ 
				  
				//Email Validation   
				if (empty($_POST["link"])) {  
						$linkErr = "link is required";  
				} else {  
						 $link = input_data($_POST["link"]); 
						// check that the e-mail address is well-formed  
				
				 }  
				
				 
				$upsql ="update poll_link_tb set link='$link' WHERE id='1'";
				$upres=mysqli_query($connect,$upsql);
					
					if($upres)
					{
						?>
						<br><br>  <p align="center" style="color:green">successfully updated!</p>
						<?php
					}
					else
					{
						//echo mysqli_error($connect);
						?>
						<br><br>  <p align="center" style="color:red">failed to update!</p>
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
			<div class="col-md-12">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			  <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter link.." name="link" required="true">
				<span class="error"><?php echo $linkErr; ?> </span>  
			  </div>
			
			  <button type="submit" class="btn btn-primary btn-block" name="form_submit">Submit</button>
			</form>
			</div>
		</div>
	</div>
	

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



