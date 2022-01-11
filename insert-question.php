	<?php
	include'db-connect.php';
		$message=mysqli_real_escape_string($connect,htmlspecialchars($_POST['message']));;
		$speaker=mysqli_real_escape_string($connect,htmlspecialchars($_POST['speaker']));
		$email=mysqli_real_escape_string($connect,htmlspecialchars($_POST['email']));
		
		if($message!=null && $speaker!=null){
			$sql ="SELECT * FROM event_reg_tb WHERE email='$email'";
				$res=mysqli_query($connect,$sql);
				$count = mysqli_num_rows($res);
				if($count == 1)
				{
						$row = mysqli_fetch_array($res);
						$name=$row['name'];
						$result =mysqli_query($connect, "insert into q_a_tb (name,email,message,speaker) values ('$name','$email','$message','$speaker')");
						if($result )
						{
							echo 'Thank you for your question.we will answer you shortly!';	
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