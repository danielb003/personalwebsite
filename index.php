<!doctype html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
	<meta name="keywords" content="web,web development,web designer,web design,web develop,develop web,webpage development,webpage creation,website creation,website creator,website creators,website builder,website builders,building websites,building website,build web,web build,build website,website build,internet website,website development,website design,website designer,website designers,quick websites,quick webpages,quick website,quick webpage,quality website,quality webpage,web agency,website agency,webpage agency,website solutions,webpage solutions,web solutions,web content,good web content,great web content,seo,web business,website business,webpage business,web businesses,website businesses,webpage businesses, daniel,daniel bellino,bellino,d bellino,daniel b,dan b,dan bell,dan bellino,daniel bell,danny bellino,danny,daneil bellino">
	<meta name="description" content="I build and design custom websites. Full stack developer with 4 years experience. Located in Melbourne's south east.">
	<title>Daniel Bellino</title>
	<link rel="stylesheet" type="text/css" href="personal.css">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="icon" href="personal_website_icon.png">
</head>
<?php
	session_start();

	$success_msg = "Message submitted successfully";
	$error_msg = "Message failed to submit, please try again";
	/* for debuggin only
	if(isset($_SESSION['valid_form'])) {
		echo "valid form is : " . $_SESSION['valid_form'];
	} */

	/*if(isset($_POST['submit']) && isset($_SESSION['valid_form']) && $_SESSION['valid_form'] == true) {
		$mail->SingleTo = true;
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls'; // ssl or tls
		$mail->Host = 'smtp.live.com';
		$mail->Port = 465; // 465 or 587
		$mail->IsHTML(true);
		$mail->Username = 'bellino-pak@hotmail.com';
		$mail->Password = '#Tinymango817';
		$mail->SetFrom('bellino-pak@hotmail.com');
		$mail->Subject = 'Personal Website Enquiry';
		$mail->Body = $_POST['name'] . ", sent a message from my personal website. It reads, " . $_POST['message'] . ".<br> Their email is " . $_POST['email'];
		/* $mail->AddAddress('s3399062@student.rmit.edu.au'); 
		$mail->AddAddress('bellino-pak@hotmail.com');

		if(!$mail->Send()) {
			/* for debugging only 
			echo "Mailer Error: " . $mail->ErrorInfo;
			

			echo "<script type='text/javascript'>alert(\"$error_msg\");</script>";
		} elseif($mail->Send()) {
			echo "<div id='form_success_message'>Form submitted successfully!</div>";
			echo "<script type='text/javascript'>alert(\"$success_msg\");</script>";
		}
	}*/

	if(isset($_POST['submit']) && isset($_SESSION['valid_form']) && $_SESSION['valid_form'] == true) {
		$to = "bellino-pak@hotmail.com";
		$from = $_POST['email'];
		$name = $_POST['name'];
		$subject = "Personal Website Enquiry";
		$message = $name . ", sent a message from my personal website. It reads, " . $_POST['message'] . ".\nTheir email is " . $from;
		$headers = "From: " . $from;
		$headers2 = "To: " . $to;
		mail($to,$subject,$message,$headers);

		echo "<div id='form_success_message'>Form submitted successfully!</div>";
		echo "<script type='text/javascript'>alert(\"$success_msg\");</script>";

		$_SESSION['valid_form'] = false;
		unset($_SESSION['valid_form']);
		unset($_POST['submit']);
	}
?>
<body>
<!-- code for the desktop application -->
<div id="loading_mask">
	<div id="banner">
		<div id="banner_tint">
			<header>
				<nav>
					<a href="#" class="scroll">Home</a>
					<a href="#portfolio_div" class="scroll">Portfolio</a>
					<a href="#experience_div" class="scroll">Experience</a>
				    <a href="#contact_div" class="scroll">Contact</a>
				</nav>
			</header>
			<div id="banner_content">
				<h1>Daniel Bellino</h1>
				<p>Computer Science student at RMIT University</p>
			</div>
		</div>
	</div>
	<div id="mainframe">
		<div id="about_div">
			<div id="about_centering_div">
				<h1>About Me</h1>
				<p id="about_intro_p">I am a full-stack website developer from the south east of Melbourne. I have 4 years experience, personal and professional. I love minimalist design, intuitive functionality and a great user experience.</p>
				</br>
				<h3>Insight</h3>
				<div id="about_items_div">
					<div class="about_items">
						<img src="framework_icon.png" width="60" height="60">
						<p>I make web applications using a variety of frameworks including ReactJS &amp; Laravel. I also use photoshop to design any custom signage.</p>
					</div>
					<div class="about_items">
						<img src="tools_icon.png" width="60" height="60">
						<p>When building web applications I first consider the scope of the project to determine the best route. I also put a lot of effort into responsiveness and modularity.</p>
					</div>
					<div class="about_items">
						<img src="iterate_icon.png" width="70" height="70" id="iterate_spec_icon">
						<p id="iterate_spec_p">I continually observe and learn from some of the most popular web applications and apply their knowledge into my work.</p>
					</div>
				</div>
			</div>
		</div>
		<div id="portfolio_div">
			<div id="portfolio_title_centering_div">
				<h1>Portfolio</h1>
			</div>
			<div id="portfolio_row_centering_div">
				<div id="portfolio_row">
					<div id="portfolio_image_div">
						<img src="prolifictrading_portfolio.jpg">
						<div class="portfolio_hover_div">
							<h1>ReactJS stock market app</h1>
							<p>A game simulation of the stock market</p>
							<form action="https://monopoly-shoe-crypto-trader.firebaseapp.com" target="_blank">
							<button>VISIT WEBSITE</button>
							</form>
						</div>
					</div>
					<div id="portfolio_image_div">
						<img src="guesswho_portfolio.jpg">
						<div class="portfolio_hover_div">
							<h1>Guess Who Algorithms</h1>
							<p>Two algorithms that play Guess Who</p>
							<form action="https://github.com/danielb003/GuessWhoAlgorithm" target="_blank">
							<button>VIEW CODE</button>
							</form>
						</div>
					</div>
				</div>
				<div id="portfolio_row">
					<div id="portfolio_image_div">
						<img src="staypressdc_portfolio.jpg">
						<div class="portfolio_hover_div">
							<h1>Staypress Dry Cleaners</h1>
							<p>A fully responsive website made for a dry cleaning business</p>
							<form action="http://www.staypressdrycleaners.com.au" target="_blank">
							<button>VISIT WEBSITE</button>
							</form>
						</div>
					</div>
					<div id="portfolio_image_div">
						<img src="gnda_portfolio.jpg">
						<div class="portfolio_hover_div">
							<h1>Get Noticed Digital Agency</h1>
							<p>A fully responsive website made for a digital agency</p>
							<form action="http://www.getnoticeddigitalagency.com" target="_blank">
							<button>VISIT WEBSITE</button>
							</form>
						</div>
					</div>
				</div>
				<div id="portfolio_row">
					<div id="portfolio_image_div">
						<img src="bookingsystem_portfolio.jpg">
						<div class="portfolio_hover_div">
							<h1>Booking System</h1>
							<p>A Java program (w/ GUI) that facilitates bookings</p>
							<form action="https://github.com/danielb003/bookingsystem" target="_blank">
							<button>VIEW CODE</button>
							</form>
						</div>
					</div>
					<div id="portfolio_image_div">
						<img src="phonebook_portfolio.jpg">
						<div class="portfolio_hover_div">
							<h1>Phone Book</h1>
							<p>A C program that uses linked lists to manage phone entires.</p>
							<form action="https://github.com/danielb003/phonebook" target="_blank">
							<button>VIEW CODE</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="experience_div">
			<div id="experience_centering_div">
				<h1>Experience</h1>
				<div id="experience_module_div">
					<div id="experience_left_div">
						<div class="experience_content_div">
							<h2>Get Noticed Digital Agency (Internship)</h2>
							<h3>Jul 2017 - Dec 2017</h3>
							<p>I was working at a digital agency as an intern. This is a start-up business and they offer web development and media/marketing solutions for small to medium businesses. My primary work here was to write websites both front and back end. I also coded their business website which can be found above in the portfolio section.</p>
						</div>
						<div class="experience_content_div">
							<h2>Ramsay Health Care Ltd</h2>
							<h3>Jun 2014 - Oct 2016</h3>
							<p>I worked for Ramsay Health Care Ltd at The Avenue Hospital (located in Windsor). This position was the most demanding in regards of the standards of customer service and enabled me to gain many valuable skills in the service industry that can be transferred into many other positions. Some of the most prominent things I’ve learnt from this role was mainly centred around communicating simply and effectively and presenting myself as a friendly and approachable person. I also learnt how to work under pressured timed conditions as patients were often admitted only a couple hours before surgery and we often admitted patients in blocks at certain times. If I was slowing the doctors would need to wait for me so it was fundamentally important that I was able to work under these conditions.</p>
							<ul style="list-style-type:disc">
								<li>Admission duties which require taking payments from patients as well as signing documentation (handling significant amounts of cash and being responsible for completing transactions with significant value).</li>
								<li>Data entry and room allocation. I was required to verify and update patient details and book them into their allocated room.</li>
								<li>Pre-admission duties which require calling patients and entering patients’ relevant information for schedules procedures in the near future. </li>
								<li>Reception/Switchboard duties.</li>
								<li>Providing excellent customer service and having good communication skills.</li>
							</ul>
						</div>
						<div class="experience_content_div">
							<h2>Crown Casino Ltd</h2>
							<h3>Feb 2013 - Apr 2014</h3>
							<p>I worked for Crown Casino Ltd before I got my job at The Avenue Hospital. The work here was very enjoyable and rewarding and the company took care of its employees very well. My role at Crown Casino was a Parking Services Officer. I learnt a lot about dealing with customers from many demographics as Crown Casino has very diverse patrons. I also learnt a lot of problem solving skills here. As I worked in the car park if there was a problem (i.e. a patron was unable to pay), it would be up to me to successfully solve the problem in good time to make sure the exits/entrances didn’t build up.</p>
							<ul style="list-style-type:disc">
								<li>Working as a Parking Services Officer my main responsibilities were to allow in patrons with memberships in and re-direct patrons without memberships to other parking areas in Crown.</li>
								<li>Being very respectful to not offend patrons who are unaware of the parking restrictions and being able to communicate effectively with foreign patrons.</li>
								<li>Keeping the car park entrances/exits clear and solving any immediate issues a patron may have with their parking tickets.</li>
								<li>Having good knowledge of the layout of crown so I can answer questions patrons had as to where they could find a shop/section of crown.</li>
							</ul>
						</div>
						<div class="experience_content_div">
							<h2>Neighbours Cafe</h2>
							<h3>May 2011 - Jan 2013</h3>
							<p>Neighbours Café is a small suburban style café located in the residential streets of St Kilda West. It was in a very prime location and was often quite busy. My role here was as a kitchen hand and dish washer. I worked by the side of one chef and we we’re to manage the service through the kitchen together. Working here taught me a lot about working as a team while also managing myself and my own service responsibilities</p>
							<ul style="list-style-type:disc">
								<li>Working as a kitchen hand, my main responsibilities were food prep and cleaning up dishes. I had to work under pressure to make sure plates, glasses, cooking containers and utensils were ready to be used as to keep the flow of the kitchen smooth.</li>
								<li>Cutting fruit and veg when its quiet, helping maintain/clean the coffee machine.</li>
								<li>Making smoothies and milkshakes as orders come in.</li>
							</ul>
						</div>
					</div>
					<div id="experience_right_div">
						<h1>Skill Proficiency</h1>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>Microsoft Office</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Intermediate</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_70"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>HTML5 / XHTML</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Advanced</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_90"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>CSS3</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Advanced</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_85"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>JavaScript</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Advanced</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_85"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>PHP</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Intermediate</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_65"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>ReactJS</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Intermediate</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_70"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>Laravel</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Intermediate</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_70"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>PHPStorm IDE</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Intermediate</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_70"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>Java</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Intermediate</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_65"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>SQL / RDBMS / BaaS</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Intermediate</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_70"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>(ANSI) C</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Beginner</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_40"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>Windows OS</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Intermediate</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_70"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>Networking / Wi-Fi</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Intermediate</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_65"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>Web Security / Encryption</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Intermediate</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_65"></div>
								</div>
							</div>	
						</div>
						<div class="skill_proficiency_div">
							<div class="skill_proficiency_title_div">
								<div class="skill_proficiency_title_div_left">
									<h2>Windows Server 2008, Mac OS, UNIX</h2>
								</div>
								<div class="skill_proficiency_title_div_right">
									<h2>Beginner</h2>
								</div>
							</div>
							<div class="skill_proficiency_slider_div">
								<div class="skill_proficiency_slider">
									<div class="skill_proficiency_progress" id="progress_40"></div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="education_seperator_div">
			<div id="education_seperator"></div>
		</div>
		<div id="education_div">
			<div id="education_centering_div">
				<h1>Education</h1>
				<h2><b>Tertiary</b></h2>
				<div id="rmit_div">
					<div id="rmit_label">
						<i>RMIT</i>
					</div>
					<div id="rmit_achievements">
						<p>Bachelor of Computer Science 3rd year</p>
						<p>Diploma of Information Technology</p>
						<p>Certificate IV Marketing</p>
					</div>
				</div>
				<div id="monash_div">
					<div id="monash_label">
						<i>Monash University</i>
					</div>
					<div id="monash_achievements">
						<p>Certificate III Hospitality</p>
					</div>
				</div>
				<h2><b>School</b></h2>
				<div id="school_div">
					<div id="school_label">
						<i>De La Salle College</i>
					</div>
					<div id="school_achievements">
						<p>Victorian Certificate of Education</p>
					</div>
				</div>
			</div>
		</div>
		<div id="contact_div">
			<div id="contact_centering_div">
				<h1>Contact</h1>
				<div id="contact_info">
					<div id="contact_location_div">
						<img src="location_icon.png" width="20" height="20">
						<p>Oakleigh, Melbourne</p>
					</div>
					<p id="contact_info_p">https://github.com/danielb003</p>
				</div>
				<p><i>Send me a message directly!</i></p>
				<form id="contact_form" action="" method="POST">
					<input type="text" class="small_input" name="name" pattern="[A-Za-z ,.'`-]{3,40}" placeholder="Enter your name *" title="Characters only" required>
					<input type="email" class="small_input" name="email" placeholder="Enter your email *" required>
					<textarea rows="1" cols="1"  id="large_input" name="message" pattern="[A-Za-z0-9 ,.'-_+=\|#@!%&]{2,}" placeholder="Enter your message *" required></textarea>
					<input type="submit" id="submit_contact_message" name="submit" value="Send Message">
				</form>
				<?php
					if(isset($_POST['submit'])) {
						if($_POST['name'] == "") {
							echo "no name entered";
						} else if($_POST['email'] == "") {
							echo "no email entered";
						} else if($_POST['message'] == "") {
							echo "no message entered";
						} else {
							$_SESSION['valid_form'] = true;
						}
					}
				?>
			</div>
		</div>
	</div>
	<footer>
		<div id="footer_div">
			<p>Designed and coded by Daniel Bellino. All rights reserved.</p>
		</div>
	</footer>
</div>

<div id="mobile_mask">

</div>
</body>

</html>