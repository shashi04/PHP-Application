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
	 <section class="audi-banner">
		<img src="assets/image/Audi Final.jpg" alt="Audi Final"  />
		 <div class="agenda-btn" data-toggle="modal" data-target="#agenda-popup" style="top: calc(85% - 45px); padding: 7px 27px;">
            <img src="assets/image/agenda-icon.png" alt="">
            <span>Agenda</span>
        </div>
        <div class="q_a_btn" data-toggle="modal" data-target="#q-a-popup" style="top: calc(85% - 45px); padding: 7px 27px;">
            <img src="assets/image/q_a-icon.png" alt="">
            <span>Q & A</span>
        </div>
		<div class="youtube-audi scr-img middle aun-iframe1" >
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/MCSRFNpCqC4?autoplay=1&mute=1" autoplay="1" frameborder="0" allow="fullscreen;" allowfullscreen></iframe>
                    <!--<iframe width="100%" height="100%" src="assets/image/coming_soon_live.jpg"></iframe>-->
                </div>
	</section>
	       <!--q&n popup -->
     <div class="modal fade" id="q-a-popup" tabindex="-1" role="dialog" aria-labelledby="q-a-popup"
     aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
         <div class="modal-body">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
               <div class="mdl-cnt q-a-popup">
                   <h3 class="head">Q & A </h3>
                   <div class="question-answer">
					 <div class="alert alert-success d-none success"></div>
                    <div class="alert alert-danger d-none error"></div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post">
					  <div class="" style="border:1px solid#e5e5e5;">
					  <input type="hidden" id="email" value="<?php echo $_SESSION['UserPass_id'];?>" class="form-control">
					   <textarea name="message" maxLength="499" id="message" class="form-control" rows="5"  required="true" placeholder="Ask Your Question"></textarea>
					  </div>
					  <div class="mt-2 mb-4">
						<select name="speaker" required="true" id="speaker" class="form-control">
							<option value="">Select speaker..</option>
							<option value="Dr. Ritupushp">Dr. Ritupushp</option>
							<option value="Dr. Pramoj Jindal">Dr. Pramoj Jindal</option>
						</select>
					  </div>
					  <button type="submit" class="btn btn-warning btn-block mybtn submitform" id="submit_chat" >Submit</button>
					</form>
                   </div>
               </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Agenda Popup -->
	<div class = "modal fade" id = "agenda-popup" role = "dialog" class="info-box" style="min-width:800px;">
		<div class = "modal-dialog" style="min-width:800px;">
			<div class = "information" style="padding:3px !important; top:50px; width:800px; height:560px;">
			<span class="info-close" style="">
			<img src="assets/image/cancel--v1.png" style="padding-left:3px; cursor:pointer; "/></span>
				<div class = "modal-body pt-3">
					<div class="modal-content info-data" style="min-height:520px;">
					<h3 class="font-weight-bold" style="font-size:19px; margin-bottom: 0px !important; padding-bottom:11px; font-weight:400 !important; letter-spacing:1px; text-transform:uppercase; border-bottom: 1px solid rgba(0,0,0,.1);"><img src="https://img.icons8.com/fluent/32/000000/overtime.png"/> Co-Existence With Covid-19: Stay Informed And Stay Safe</h3>
					<div class="name" style="padding-top: 0px;">
						<table class="table table-bordered table-sm table-striped">
						<thead>
						<tr style="background:#3e3f43">
						<th colspan="3"><h4 style="font-size:15px; color:#ffffff; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
						<img src="assets/image/clock.png"/> May 16, 2021</h4>
						</th>
						</tr>
						<tr style="background:#e5e5e5;">
						<th scope="col-sm-2" style="font-size:16px; font-weight:500; width: 110px;">Time</th>
						<th scope="col-sm-8" style="font-size:16px; font-weight:500;">Session By</th>
						<th scope="col-sm2" style="font-size:16px; font-weight:500;">Status</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;"> <img src="assets/image/video-call.png"/><br> - </td>
						<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr. Ritupushp
							SCIENTIST- C - Mission Delhi, AIIMS </p>
						</td>                         
						</tr>
						<tr>
						<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;"> <img src="assets/image/video-call.png"/><br> - </td>
						<td style="font-size:15px; font-weight:400; color:#3c4043;"> <p style="font-size:14px; font-weight:400; color:#636566;">Dr. Pramoj Jindal
						Director Thoracic & Robotic Thoracic Surgery - Max Super Speciality Hospital, Patparganj & Vaishali
							SCIENTIST- C - Mission Delhi, AIIMS </p>
						</td>                         
						</tr>


						</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(function() {
        $(document).on('click', '#submit_chat', function(e) {
            e.preventDefault();

            var message = $('#message').val();
            var speaker = $('#speaker').val();
            var email = $('#email').val();
            if (message == '') {
                alert('Please enter message')
            } else if (speaker == '') {
                alert('Please choose speaker')
            } else {
                $.ajax({
                    url: 'insert-question.php',
                    method: 'post',
                    data: {
                        email: email,
                        message: message,
                        speaker: speaker
                    },
                    success: function(data) {
                        $('.success').removeClass('d-none').html(data);
                    },
                    error: function(data) {
                        $('.error').removeClass('d-none').html(data);
                    }
                });
            }
        });
    });
</script>
</body>
</html>
<?php ob_flush();?>
