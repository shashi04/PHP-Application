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
    <!--<body onload=window.location='comingsoon.php'>-->
	<!--<div class="artboard-content" style="display:none;">
		
		<p style="text-align:center; margin-top: 38%; position: relative;">
		<img src="assets/image/aun-new1.gif" style="max-width: 240px;" />
		</p>
		<p style="padding:20px; color:#5c5959; text-align:center; font-weight: 600;">PLEASE ROTATE YOUR DEVICE FOR BETTER EXPERIENCE</p>
	</div>-->
   <div class="landing-video">
		<video  muted class="landing-video"  autoplay style="width:100%;">
			<source src="assets/image/entry.mp4" type="video/mp4" />
		</video>
	</div>
	<!--<audio autoplay>
	  <source src="assets/image/Starting.mp3" type="audio/mpeg">
	</audio>-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
		// $( document ).ready(function() {
			 // $(.landing-video).play();
		// });
		$(".landing-video").on("ended", function () {
			window.location.href = 'login.php';
		});
</script>
</body>
</html>



