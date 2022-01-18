<?php
session_start();
ob_start();
if($_COOKIE['UserPass_id']=="")
{
	header('location:index.php');
}
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
	
	 <section class="lobby-banner">
		<img src="assets/image/lobby.png" alt="lobby"  />
		<div class="lobby-video" >
			<video  muted autoplay controls >
				<source src="assets/image/Lobby Video.mp4" type="video/mp4" />
			</video>
		</div>
		<div class="exhibition-btn auditoriam">
			<img src="assets/image/Arrow.gif" style="width: 40px; height: 40px;" />
	   </div>
	   <div class="exhibition-btn auditoriam">
			<p>Click Here</p>
	   </div>
	    <div class="animated-logo">
			<img src="assets/image/logo-animated.gif"  />
	   </div>
	</section>
	<div class="artboard-contentmob" style="display:none;">
		<p style="padding:10px; color:#5c5959; text-align:center; font-size:25px;font-weight: 800;">PLEASE ROTATE YOUR PHONE FOR BETTER EXPERIENCE</p>
		<p style="color:#5c5959; text-align:center;font-size:18px; font-weight: 800;">Note: Go To Phone Settings and Switch On Auto Rotate</p>
	</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
	$('.auditoriam').click(function(){ 
			window.location.href = 'audi.php';
		});
	window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "audi.php";

    }, 10000);	
  </script>
</body>
</html>

