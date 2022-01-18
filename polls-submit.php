	<?php
	include'db-connect.php';
		$answer=mysqli_real_escape_string($connect,htmlspecialchars($_POST['answer']));;
		$question=mysqli_real_escape_string($connect,htmlspecialchars($_POST['question']));
		$email=mysqli_real_escape_string($connect,htmlspecialchars($_POST['email']));
		
		if($answer!=null && $question!=null){
			$sql ="SELECT * FROM event_reg_tb WHERE email='$email'";
				$res=mysqli_query($connect,$sql);
				$count = mysqli_num_rows($res);
				if($count == 1)
				{
						$row = mysqli_fetch_array($res);
						$name=$row['firstname'];
						$result =mysqli_query($connect, "insert into poll_tb (name,email,answer,question) values ('$name','$email','$answer','$question')");
						if($result )
						{
							echo 'Your answer is successfully submitted.';	
						}
						else
						{
							echo 'Sorry, We Ran Into Some Problem! We are Fixing It!';	
						}
				}
				else
				{
					echo 'Please login first!';	
				}   
		
			
		}
		else
		{
			echo 'Please Fill in All the Data';
		}

?>