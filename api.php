<?php 
  include'db-connect.php';	
  $result = mysqli_query($connect,"SELECT * FROM poll_link_tb where id='1'");          
  $res = mysqli_fetch_array($result);                           
	?><iframe height='500px' width='100%' frameborder='0' allowTransparency='true' scrolling='auto' src='<?php echo $res['link'];?>'></iframe><?php

?>