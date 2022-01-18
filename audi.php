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
	<!--<img src="assets/image/coming_soon.jpg" alt="thank you" style="width:100%;height:auto;"  />-->
	 <section class="audi-banner">
		<img src="assets/image/audi.jpg" alt="Audi Final"  />
		 <div class="agenda-btn" data-toggle="modal" data-target="#agenda-popup" >
            <img src="assets/image/agenda-icon.png" alt="">
            <span>Agenda</span>
        </div>
        <div class="q_a_btn" data-toggle="modal" data-target="#q-a-popup">
            <img src="assets/image/q_a-icon.png" alt="">
            <span>Q & A</span>
        </div>
		 <div class="poll_btn btn-poll" >
            <img src="assets/image/polls.png" alt="">
            <span>Polls</span>
        </div>
		 <div class="poll_btn_mob btn-poll" style="display:none;">
            <img src="assets/image/polls.png" alt="">
            <span>Polls</span>
        </div>
		<div class="youtube-audi scr-img middle aun-iframe1" >
			<!--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/JjB9PMvTwx8?autoplay=1&mute=1&enablejsapi=1" frameborder="0" allow="fullscreen;" allowfullscreen></iframe>-->
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZaWZvcljA_I?autoplay=1&mute=1&enablejsapi=1" frameborder="0" allow="fullscreen;" allowfullscreen></iframe>
		</div>
	</section>
	<div class="artboard-contentmob" style="display:none;">
		<p style="padding:10px; color:#5c5959; text-align:center; font-size:25px;font-weight: 800;">PLEASE ROTATE YOUR PHONE FOR BETTER EXPERIENCE</p>
		<p style="color:#5c5959; text-align:center;font-size:18px; font-weight: 800;">Note: Go To Phone Settings and Switch On Auto Rotate</p>
	</div>
	<!--polls-->
	 <div class="modal fade" id="polls-popup" tabindex="-1" role="dialog" aria-labelledby="q-a-popup"
     aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
         <div class="modal-body">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
               <div class="mdl-cnt q-a-popup">
                   <h3 class="head">Polls</h3>
                   
                   <div id="fetchsrc"></div>
                  
               </div>
         </div>
       </div>
     </div>
   </div>
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
					  <input type="hidden" id="email" value="<?php echo $_COOKIE['UserPass_id'];?>" class="form-control">
					   <textarea name="message" maxLength="499" id="message" class="form-control" rows="5"  required="true" placeholder="Ask Your Question"></textarea>
					  </div>
					  <div class="mt-2 mb-4">
						<select name="speaker" required="true" id="speaker" class="form-control">
							<option value="">Track Name..</option>
							<option value="TRACK TWO : Leading Millennials and Gen Z -Moving Beyond Conventional Leadership (2:00 PM - 4:00 PM)">TRACK TWO : Leading Millennials and Gen Z -Moving Beyond Conventional Leadership (2:00 PM - 4:00 PM)</option>
							<option value="TRACK THREE: Innovation in Managing Human Resources - Passion for Excellence: Compassion for People (4:00 PM- 5:00 PM)">TRACK THREE: Innovation in Managing Human Resources - Passion for Excellence: Compassion for People (4:00 PM- 5:00 PM)</option>
							<option value="TRACK FOUR: NURSE LEADER-360 DEGREE VIEW: Value what you do; Add value by what you do (11:45 AM - 1:30 PM)">TRACK FOUR: NURSE LEADER-360 DEGREE VIEW: Value what you do; Add value by what you do (11:45 AM - 1:30 PM)</option>
							<option value="TRACK SEVEN: TECHNOLOGY, INNOVATIONS & SAFETY: Prepare & Prevent Instead of Repair and Repent  (2:45 PM - 3:45 PM)">TRACK SEVEN: TECHNOLOGY, INNOVATIONS & SAFETY: Prepare & Prevent Instead of Repair and Repent  (2:45 PM - 3:45 PM)</option>
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
	<div class = "modal fade" id = "agenda-popup" role = "dialog" class="info-box">
		<div class = "modal-dialog" style="min-width:800px;">
			<div class = "information" style="padding:3px !important; top:50px; width:800px; height:560px;">
			<span class="info-close" style="">
			<img src="assets/image/cancel--v1.png" style="padding-left:3px; cursor:pointer; "/></span>
				<div class = "modal-body pt-3">
					<div class="modal-content info-data" style="min-height:520px;">
					<h3 style="font-weight:bold;font-size:19px; margin-bottom: 0px !important; text-align:center;padding-bottom:11px; font-weight:700 !important; letter-spacing:1px; text-transform:uppercase; border-bottom: 1px solid rgba(0,0,0,.1);">ANEICON 2021 - May 21 -22 ( 11:45 am to 5 pm)</h3>
					<div class="name table-responsive" style="padding-top: 0px;" >
						<table class="table table-bordered table-sm table-striped">
						<thead>
						<tr style="background:#fff;">
						<th colspan="3"><h4 style="font-size:15px;text-align:center;color:#000000; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
						Day 1</h4>
						</th>
						</tr>
						<tr style="background:#3e3f43">
						<th colspan="3"><h4 style="font-size:15px;text-align:center;color:#ffffff; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
						TRACK ONE: Inauguration (11:45 am to 2 pm)</h4>
						</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Invocation</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Association of Nurse Executives (India)  - ANEI Delhi Chapter</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Introduction to ANEICON 2021</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms.Shubhada Sakurikar, Founder Secretary, Association of Nurse Executives (India)</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Welcome Address</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms.Thankam Gomez, Founder President, Association of Nurse Executives (India)</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Inaugural Address</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Harsh Vardhan, Honorable Minister of Health and Family Welfare, Govt of India</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Address: Guest of Honor</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Girdhar Gyani, Director General, Association of Healthcare Providers India</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Address: Guest of Honor</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Roy K George, President, Trained Nurses Association of India</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Key Note Address</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Robyn Begley, CEO, American Organization for Nursing Leadership, USA</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">ANEI ANNUAL AWARDS</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Jothi Clara Michael, Founder Vice President - Association of Nurse Executives (India)</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Vote of Thanks</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Capt.Sandhya Shankar Pandey, President, Delhi Chapter ANEI  & Organizing Secreta</p>
							</td>                         
						</tr>
						</tbody>
						</table>
						<table class="table table-bordered table-sm table-striped">
							<thead>
							<tr style="background:#3e3f43">
							<th colspan="3"><h4 style="font-size:15px;text-align:center;color:#ffffff; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
							TRACK TWO : Leading Millennials and Gen Z -Moving Beyond Conventional Leadership (2 - 4 pm)</h4>
							</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Chair</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Raminder Kalra, Vice President, Delhi Chapter ANEI </p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Introduction of theme</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr. Usha Banerjee,  Founder EC Member ANEI</p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">International Outlook</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr. Sharon Vasuthevan, Chief Nursing & Quality Executive Life Healthcare Group, South Africa</p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Winning at Stress - Resilience in Leadership</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Lydia Albuquerque, President, National Association of Indian Nurses of America (NAINA)</p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Voice of Millenials</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">N/Cdt Rabiya Agnihotri, College of Nursing, Army Hospital (R&R), Delhi Cantt,Ms. Priyanka N Shirsath, Nurse Manager, Jupiter Hospital, Thane </p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Q & A</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">chair</p>
								</td>                         
							</tr>
						
							</tbody>
						</table>
						<table class="table table-bordered table-sm table-striped">
							<thead>
							<tr style="background:#3e3f43">
							<th colspan="3"><h4 style="font-size:15px;text-align:center;color:#ffffff; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
							TRACK THREE: Innovation in Managing Human Resources - Passion for Excellence: Compassion for People ( 4 - 5 pm)</h4>
							</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Chair</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms.Ajitha PS, Founder Treasurer, Association of Nurse Executives (India) </p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">How HR practices evolved in 2020?</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Mr.Harshvendra Soin, Global Chief People Officer, Head - Marketing , Tech Mahindra</p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">ANEI Study Presentation -Nurses Engagement</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Rosaline Rachel, Vice President - TN Chapter  ANEI</p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Innovative Staffing Strategies</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Annu Kaushik, EC Member, ANEI</p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Q & A</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">chair</p>
								</td>                         
							</tr>
						
							</tbody>
						</table>
					</div>
					
					<div class="name table-responsive" style="padding-top: 0px;" >
						<table class="table-responsive table table-bordered table-sm table-striped">
						<thead>
						<tr style="background:#fff;">
						<th colspan="3"><h4 style="font-size:15px;text-align:center;color:#000000; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
						Day 2</h4>
						</th>
						</tr>
						<tr style="background:#3e3f43">
						<th colspan="3"><h4 style="font-size:15px;text-align:center;color:#ffffff; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
						TRACK FOUR: NURSE LEADER-360 DEGREE VIEW: Value what you do; Add value by what you do ( 12 - 1:30 pm)</h4>
						</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Chair</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms.Josephine Cyrill, President, Haryana Chapter ANEI</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">View from the Executive Desk</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Mr.Shriram Vijayakumar, CEO, IHH, India</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Nurses Well Being - Study by ANEI</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms.Haritha Vijayan, President,Telangana Chapter ANEI</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">The role of "WHY" - Not just What and How</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.K Sridhar, Director, Institute of Neurosciences and Spine, MGM Healthcare, Chennai</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">From the lens of a Staff Nurse</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms.Natasha Kohli, Clinical Instructor, Fortis Hospital, Mohali</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Staff Centricity Vs Customer Centricity</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Mr. Ashish Singh, International Facilitator and CEO Coach, Star Consulting Global, India</p>
							</td>                         
						</tr>
						<tr>
							<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Q & A</td>
							<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Chair</p>
							</td>                         
						</tr>
						</tbody>
						</table>
						<table class="table-responsive table table-bordered table-sm table-striped">
							<thead>
							<tr style="background:#3e3f43">
							<th colspan="3"><h4 style="font-size:15px;text-align:center;color:#ffffff; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
							TRACK FIVE: Nurses Championing Quality ( 1:30 - 2 pm)</h4>
							</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Nurse Led Quality Improvement Projects</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Glenegales Hospital, Chennai<br>Indraprastha Apollo Hospital, New Delhi<br>Kerala Institute of Medical Sciences, Thiruvananthapuram, Kerala </p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Jury Members</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Arati Verma, Senior VP, Medical Quality, Max Healthcare, New Delhi <br>
								Ms.Lavina Lall, Head Quality & Patient Safety, Head Patient Experience, Manager General Administration, Fortis Hospital, Mulund<br>
								Dr.Latha Venkatesan, Founder EC Member ANEI<br>
								Dr.Unmona Borgohain, Founder EC Member ANEI<br>
								Ms.Vincy Tribhuvan, EC Member</p>
								</td>                         
							</tr>
						
						
							</tbody>
						</table>
						<table class="table-responsive table table-bordered table-sm table-striped">
							<thead>
							<tr style="background:#3e3f43">
							<th colspan="3"><h4 style="font-size:15px;text-align:center;color:#ffffff; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
							TRACK SIX: Synergizing Efforts- Panel Discussion ( 2 - 2:45 pm)</h4>
							</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Moderator</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms. Thankam Gomez, President - ANEI </p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Panelists</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Col. Binu Sharma, President, Infusion Nusing Society, India - US Affiliate<br>
								Dr.Jaeny Kempi, Vice President, South Region,Trained Nurses Association of India <br>
								Dr.Jaya Kuruvilla- President, Critical Care Nursing Society<br>
								Dr.Farukh Khan, Nurse Teachers Association, India<br>
								Dr.K Reddemma, President, Indian Society of Psychiatric Nurses</p>
								</td>                         
							</tr>
							</tbody>
						</table>
						<table class="table-responsive table table-bordered table-sm table-striped">
							<thead>
							<tr style="background:#3e3f43">
							<th colspan="3"><h4 style="font-size:15px;text-align:center;color:#ffffff; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
							TRACK SEVEN: TECHNOLOGY, INNOVATIONS & SAFETY: Prepare & Prevent Instead of Repair and Repent  ( 2:45 pm - 3:45 pm)</h4>
							</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Chair</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms.Sandhya Shankar Pandey, President, Dehi Chapter ANEI </p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Leadership for Safety</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Donna M. Prosser, Chief Clinical Officer, Patient Safety Movement, USA</p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Skin Safety - Advanced Practices and Solutions</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms.Jane Mayes, Clinical Education Manager, Essity & Honorary Tissue Viability Nurse, NHS, UK </p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Technology and Competency Development</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms.Andres Mellik, Founder CEO, Cognuse Inc. Estonia </p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Q & A</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Chair </p>
								</td>                         
							</tr>
		
							</tbody>
						</table>
						<table class="table-responsive table table-bordered table-sm table-striped">
							<thead>
							<tr style="background:#3e3f43">
							<th colspan="3"><h4 style="font-size:15px;text-align:center;color:#ffffff; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
							TRACK EIGHT: Valedictory  (4 - 5 pm)</h4>
							</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Summary of Action Plans from ANEICON 2021</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms. Shubhada Sakurikar, Founder Secretary, ANEI </p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Release the Leadership Competencies Tool</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Ms. Thankam Gomez, President & Dr.Jothi Clara Michael, Vice President ANEI</p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Announcement of Best Nurse Led Initiative</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Latha Venkatesan, Founder EC member ANEI</p>
								</td>                         
							</tr>
							<tr>
								<td style="font-size:14px; width:200px; font-weight:400; color:#3c4043;">Vote of Thanks</td>
								<td style="font-size:15px; font-weight:400; color:#3c4043;">  <p style="font-size:14px; font-weight:400; color:#636566;">Dr.Geeta Parwanda, EC Member ANEI</p>
								</td>                         
							</tr>

		
							</tbody>
						</table>
						
						<table class="table-responsive table table-bordered table-sm table-striped">
							<thead>
							<tr style="background:#3e3f43">
							<th colspan="3"><h4 style="font-size:15px;text-align:center;color:#ffffff; margin-bottom: 8px; font-weight:500 !important; letter-spacing:1px; text-transform:uppercase;">
							NATIONAL ANTHEM</h4>
							</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td style="font-size:14px; width:200px; text-align:center;font-weight:400; color:#3c4043;">Final 13052021</td>
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
                alert('Please choose track name')
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
						var message = $('#message').val('');
					var speaker = $('#speaker').val('');
                    },
                    error: function(data) {
                        $('.error').removeClass('d-none').html(data);
                    }
                });
            }
        });
    });

</script>


  <script language="javascript" type="text/javascript">

  $('.btn-poll').click(function() 
  {
	
    $.ajax({                                      
      url: 'api.php',                  //the script to call to get data          
      data: "",                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      type: 'get',                //data format      
      success: function(response)          //on recieve of reply
      {    
	  $('#polls-popup').modal('show');
	  document.getElementById("fetchsrc").innerHTML=response; 

      } 
    });
  }); 

  </script>
</body>
</html>
<?php ob_flush();?>
