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
						$name=$row['firstname'];
						$result =mysqli_query($connect, "insert into q_a_tb (name,email,message,speaker) values ('$name','$email','$message','$speaker')");
						if($result )
						{
							echo 'Thank You for asking the question. We will try our best to take up the question during the LIVE session otherwise we will revert to your query through E-mail.';	
						}
						else
						{
							echo 'Sorry, We Ran Into Some Problem! We are Fixing It!';
							//echo mysqli_error($connect);
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