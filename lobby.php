<?php
session_start();
ob_start();
if($_SESSION['UserPass_id']=="")
{
	header('location:login.php');
}
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
	<div class="artboard-content" style="display:none;">
		<p style="text-align:center; margin-top: 38%; position: relative;">
		<img src="assets/image/aun-new1.gif" style="max-width: 240px;" />
		</p>
		<p style="padding:20px; color:#5c5959; text-align:center; font-weight: 600;">PLEASE ROTATE YOUR DEVICE FOR BETTER EXPERIENCE</p>
	</div>
	 <section class="lobby-banner">
		<img src="assets/image/lobby.png" alt="lobby"  />
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
      <div class="auditorium-video" style="display: none;">
		<video  muted class="w-100 adi-video">
			<source src="assets/image/entry.mp4" type="video/mp4" />
		</video>
	</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
	$('.auditoriam').click(function(){ 
			$('#carouselExampleControls').hide();
			$('#carouselExampleControlss').hide();
		   
			$('.auditorium-video').fadeIn();
			 $(".lobby-banner").fadeOut();
			$('.adi-video').get(0).play() 
		});
		   $(".adi-video").on("ended", function () {
			window.location.href = 'audi.php';
		});
		
  </script>
</body>
</html>

