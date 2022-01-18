
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aniecon 2021</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Refresh" content="300">
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
	<div class="artboard-content" style="display:none;">
		
		<p style="text-align:center; margin-top: 38%; position: relative;">
		<img src="assets/image/aun-new1.gif" style="max-width: 240px;" />
		</p>
		<p style="padding:20px; color:#5c5959; text-align:center; font-weight: 600;">PLEASE ROTATE YOUR DEVICE FOR BETTER EXPERIENCE</p>
	</div>
    <div class="container q-and-a">
		  <h2>Questions lists</h2>          
		  <table class="table table-striped wrap">
			<thead>
			  <tr>
				<th>#</th>
				<th>Name</th>
				<th>Question to</th>
				<th>Message</th>
			  </tr>
			</thead>
			<tbody>
			 <?php	
			include'db-connect.php';			 
			$res=mysqli_query($connect,"select * from  q_a_tb");
			$i=1;
			while($r=mysqli_fetch_array($res))
			{
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $r['name']; ?></td>
					<td><?php echo $r['speaker']; ?></td>
					<td><?php echo $r['message']; ?></td>
			  </tr>
			  <?php
			  $i++;
			}
			?>

			</tbody>
		  </table>
		</div>
	

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


