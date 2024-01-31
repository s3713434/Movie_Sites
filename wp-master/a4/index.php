<?php
    include "tools.php";
    $msg=check();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignment 4</title>
	<!-- Keep wireframe.css for debugging, add your css to style.css -->
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
	<link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
	<script src='../wireframe.js'></script>
	<script src="script.js"></script>
</head>

<body>
	<header id='header'>
		<div>
			<img src='../../media/Lunardo.png' alt='Lunardo' length=300 width=200 />
		</div>
		<nav>
			<ul class='nav'>
					<li class="nav_li"><a href="#Now_showing_section">Now Showing</a></li>
				<li class="nav_li"><a href="#booking">Prices</a></li>
				<li class="nav_li"><a href="#Whats_new">About Us</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<article id='' class="headers" >
				<a name="Now_showing_section" style="position: relative;top: -174px;"></a>
			<h1>Now Showing</h1>
			<div id="FirstTwo">
				<div id='Avengers_End_game'>
					<div id='Avengers_Photo'>
						<img src='../../media/End-game.jpg' alt='Avengers-End-game' length=400 width=300 />
					</div>
					<div id='End_game_Description'>
						<dl>
							<dt>Avengers:EndGame PG</dt>
							<dd>Wednesday - 9pm(T21)</dd>
							<dd>Friday - 9am(T09)</dd>
							<dd>Saturday - 6pm(T18)</dd>
							<dd>Sunday - 6pm(T18)</dd>
						</dl>
					</div>
				</div>
				<div id='Top_End_Wedding' class="div_td">
					<div id='Top_End_Wedding_Photo'>
						<img src='../../media/Top-End-Wedding.jpg' alt='Top-End-Wedding' length=400 width=300 />
					</div>
					<div id='Top_End_Wedding_Description'>
						<dl>
							<dt>Top End Wedding M</dt>
							<dd>Monday - 6pm(T18)</dd>
							<dd>Tuesday - 6pm(T18)</dd>
							<dd>Saturday - 3pm(T15)</dd>
							<dd>Sunday - 3pm(T15)</dd>
					</div>
				</div>
			</div>
			<div id="SecondTwo">
				<div id='Dumbo'>
					<div id='Dumbo_Photo'>
						<img src='../../media/Dumbo.jpg' alt='Dumbo' length=400 width=300 />
					</div>
					<div id='Dumbo_Description'>
						<dl>
							<dt>Dumbo PG</dt>
							<dd>Monday - 12pm(T12)</dd>
							<dd>Thursday - 12pm(T12)</dd>
							<dd>Wednesday - 6pm(T18)</dd>
							<dd>Friday - 6pm(T18)</dd>
							<dd>Saturday - 12pm(T12)</dd>
							<dd>Sunday - 12pm(T12)</dd>
					</div>
				</div>
				<div id='The_Happy_Prince'>
					<div id='The_Happy_Prince_Photo'>
						<img src='../../media/The_Happy_Prince.jpg' alt='The Happy Prince' length=400 width=300 />
					</div>
					<div id='The_Happy_Prince_Description'>
						<dl>
							<dt>The Happy Prince R</dt>
							<dd>Wednesday - 12pm(T12)</dd>
							<dd>Friday - 12pm(T12)</dd>
							<dd>Saturday - 9pm(T21)</dd>
							<dd>Sunday - 9pm(T21)</dd>
					</div>
				</div>
			</div>

		</article>
      <div id="Moive_Introduction">
		<div id="Synopsis_Section_one">
			<div id='Synopsis'>
					<div id="Synopsis_Vedio_one" class="dn_div ">
			<div id ='Synopsis_description'>
						<h3><strong>Avengers:EndGame   PG</strong></h3>
						<h4>Plot description</h4>
						<p><p1>Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his
					   oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow,
						Captain America and Bruce Banner -- must figure out a way to bring back their vanquished
						 allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and
						  the universe.</p1></p>
					</div>
					<div id = '1' class="div_td">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/TcMBFSGVi1c"
		frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen length = "600" width ="350">
					</iframe>
			  </div>
		</div>
    </div>
    </div>
		<div id="Synopsis_Vedio_two" class="dn dn_div">
			<div id ='Synopsis_description'>
						<h3><strong>Top End Wedding</strong></h3>
						<h4>Plot description</h4>
						<p><p1>Engaged and in love Lauren and Ned have just 10 days
						 to reunite her newly separated parents and pull off their
						 dream Top End Wedding. But Lauren's mother has gone missing,
						  experiencing a midlife crisis. In order to find her, the couple
						  goes on a fantastic road trip across northern Australia</p1></p>
					</div>
					<div id = 'Synopsis_Vedio_two' class=" div_td ">
								<iframe width="100%" height="100%" src="https://www.youtube.com/embed/uoDBvGF9pPU"
									 frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen length = "600" width ="350">
								</iframe>
					 </div>
		</div>
		<div id="Synopsis_Vedio_three" class="dn dn_div">
			<div id ='Synopsis_description'>
					<h3><strong>Dumbo</strong></h3>
					<h4>Plot description</h4>
					<p><p1>A young circus elephant is born with comically large
					ears and given the cruel nickname Dumbo. One day at a show,
					 he is taunted by a group of kids, inciting his mother into
					  a rage that gets her locked up. After Dumbo's ears cause
					  an accident that injures many of the other elephants,
					   he is made to dress like a clown and perform dangerous stunts.
						Everything changes when Dumbo discovers that his enormous
						ears actually allow him to fly, and he astounds everyone
						 at the circus with his new talent.</p1></p>
					</div>
					<div id = '' class="div_td">
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/7NiYVoqBt-8"
							 frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
							  picture-in-picture" allowfullscreen length = "600" width ="350">
						</iframe>
					</div>
		</div>
		<div id="Synopsis_Vedio_four" class="dn_div dn">
			<div id ='Synopsis_description'>
				<h3><strong>The Happy Prince</strong></h3>
				<h4>Plot description</h4>
				<p><p1>The Happy Prince by Oscar Wilde is the story of a statue, the Happy Prince, covered with gold and many fine jewels. It sits overlooking the city. One day, a swallow passing through seeks shelter under the statue and discovers the prince is not happy, but sad.
			</p1></p>
			</div>
			<div id = '' class="div_td">
				<iframe width="100%" height="100%"  src="https://www.youtube.com/embed/tXANCJQkUIE"
					 frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen length = "600" width ="350">
				</iframe>
			</div>
		</div>
  </div>
				<div id='booking'>
					<h4>Make a booking:</h4>
					<div class="live_common live1" id="booking1">
						<button type="button" class="btn1 button"> <span class="live_days">WED</span>  - <span class="live_time">T21</span> </button>
						<button type="button" class="btn2 button"><span class="live_days">FRI</span> - <span class="live_time">T09</span></button>
						<button type="button" class="btn3  button"><span class="live_days">SAT</span> - <span class="live_time">T18</span></button>
						<button type="button" class="btn4 button"><span class="live_days">SUN</span> - <span class="live_time">T18</span></button>
					</div>
					<div  class="live_common dn live2"id="booking1">
						<button type="button" class="btn1 button"> <span class="live_days">MON</span>  - <span class="live_time">T18</span> </button>
						<button type="button" class="btn2 button"><span class="live_days">TUE</span> - <span class="live_time">T18</span></button>
						<button type="button" class="btn3  button"><span class="live_days">SAT</span> - <span class="live_time">T15</span></button>
						<button type="button" class="btn4 button"><span class="live_days">SUN</span> - <span class="live_time">T15</span></button>
					</div>
					<div  class="live_common dn live3"id="booking1">
						<button type="button" class="btn1 button"> <span class="live_days">MON</span>  - <span class="live_time">T12</span> </button>
						<button type="button" class="btn2 button"><span class="live_days">TUE</span> - <span class="live_time">T12</span></button>
						<button type="button" class="btn3  button"><span class="live_days">WED</span> - <span class="live_time">T18</span></button>
						<button type="button" class="btn4 button"><span class="live_days">FRI</span> - <span class="live_time">T18</span></button>
						<button type="button" class="btn4 button"><span class="live_days">SUN</span> - <span class="live_time">T12</span></button>
						<button type="button" class="btn4 button"><span class="live_days">SUN</span> - <span class="live_time">T12</span></button>

					</div>
					<div  class="live_common dn live4"id="booking1">
						<button type="button" class="btn1 button"> <span class="live_days">WED</span>  - <span class="live_time">T12</span> </button>
						<button type="button" class="btn2 button"><span class="live_days">FRI</span> - <span class="live_time">T12</span></button>
						<button type="button" class="btn3  button"><span class="live_days">SAT</span> - <span class="live_time">T21</span></button>
						<button type="button" class="btn4 button"><span class="live_days">SUN</span> - <span class="live_time">T21</span></button>
					</div>
				</div>
			</div>
		</div>
		<article id='Prices_Section_box'>
				<a name="Prices_Section" style="position: relative;top: -174px;"></a>
			</div>
			<table>
				<tr>
					<td>Seat Tyoe</td>
					<td>Seat Code</td>
					<td>All Day Monday and Wednesday AND 12pm on Weekdays</td>
					<td>All other times</td>
				</tr>
				<tr>
					<td>Standard Adult</td>
					<td>STA</td>
					<td>14.00</td>
					<td>19.80</td>
				</tr>
				<tr>
					<td>Standard Concession</td>
					<td>STP</td>
					<td>12.50</td>
					<td>17.50</td>
				</tr>
				<tr>
					<td>Standar Child</td>
					<td>STC</td>
					<td>11.00</td>
					<td>15.30</td>
				</tr>
				<tr>
					<td>First Class Adult</td>
					<td>FCA</td>
					<td>24.00</td>
					<td>30.00</td>
				</tr>
				<tr>
					<td>First Class Concession</td>
					<td>FCP</td>
					<td>22.50</td>
					<td>27.00</td>
				</tr>
				<tr>
					<td>First Class Child</td>
					<td>FCC</td>
					<td>21.00</td>
					<td>24.00</td>
				</tr>
			</table>
		</article>
		<article id='About_US'>
			<div id='About_US1'>
					<a name="Whats_new" ></a>
				<div id='dolby'>
					<div id='dolby_descripon'>
						<h3>What's new?</h3>
						<h4>3D Dolby Vision projection and Dolby Atmos Sound</h4>
						<p>Lunado has upgraded with 3D dolby vision projection and Dolby Atoms Sound!
							Watch the vedio to learn more!</p>
					</div>
					<div id='intro_dolby_vedio' length='600'>
						<iframe src="https://flowplayer.com/e/?t=%0A%09Dolby%20in%20the%20Cinema%0A&c=eyJkZWJ1ZyI6ZmFsc2UsImRpc2FibGVkIjpmYWxzZSwiZnVsbHNjcmVlbiI6dHJ1ZSwia2V5Ym9hcmQiOnRydWUsInJhdGlvIjowLjU2MjUsImFkYXB0aXZlUmF0aW8iOmZhbHNlLCJydG1wIjowLCJwcm94eSI6ImJlc3QiLCJobHNRdWFsaXRpZXMiOnRydWUsInNlZWtTdGVwIjpmYWxzZSwic3BsYXNoIjp0cnVlLCJsaXZlIjpmYWxzZSwibGl2ZVBvc2l0aW9uT2Zmc2V0IjoxMjAsInN3ZiI6Ii9zd2YvZmxvd3BsYXllci5zd2YiLCJzd2ZIbHMiOiIvc3dmL2Zsb3dwbGF5ZXJobHMuc3dmIiwic3BlZWRzIjpbMC4yNSwwLjUsMSwxLjUsMl0sInRvb2x0aXAiOmZhbHNlLCJtb3VzZW91dFRpbWVvdXQiOjUwMDAsIm11dGVkQXV0b3BsYXkiOnRydWUsInZvbHVtZSI6MSwiZXJyb3JzIjpbIiIsIlZpZGVvIGxvYWRpbmcgYWJvcnRlZCIsIk5ldHdvcmsgZXJyb3IiLCJWaWRlbyBub3QgcHJvcGVybHkgZW5jb2RlZCIsIlZpZGVvIGZpbGUgbm90IGZvdW5kIiwiVW5zdXBwb3J0ZWQgdmlkZW8iLCJTa2luIG5vdCBmb3VuZCIsIlNXRiBmaWxlIG5vdCBmb3VuZCIsIlN1YnRpdGxlcyBub3QgZm91bmQiLCJJbnZhbGlkIFJUTVAgVVJMIiwiVW5zdXBwb3J0ZWQgdmlkZW8gZm9ybWF0LiBUcnkgaW5zdGFsbGluZyBBZG9iZSBGbGFzaC4iXSwiZXJyb3JVcmxzIjpbIiIsIiIsIiIsIiIsIiIsIiIsIiIsIiIsIiIsIiIsImh0dHA6Ly9nZXQuYWRvYmUuY29tL2ZsYXNocGxheWVyLyJdLCJwbGF5bGlzdCI6W10sImhsc0ZpeCI6ZmFsc2UsImRpc2FibGVJbmxpbmUiOmZhbHNlLCJlbWJlZCI6dHJ1ZSwid21vZGUiOiJvcGFxdWUiLCJrZXkiOiIkNDc3MzE5MzI4NzY5MDU2IiwibmF0aXZlX2Z1bGxzY3JlZW4iOnRydWUsImNsaXAiOnsicHJlbG9hZCI6Im5vbmUiLCJzdWJ0aXRsZXMiOltdLCJzb3VyY2VzIjpbeyJzcmMiOiIiLCJzdWZmaXgiOiJ2aWRlby9tcDQ7IGNvZGVjcz1cImVjLTNcIiIsInR5cGUiOiJ2aWRlby9tcDQ7IGNvZGVjcz1cImVjLTNcIiJ9LHsic3JjIjoiaHR0cDovL2Rvd25sb2FkLmRvbGJ5LmNvbS91cy9lbi90ZWNobm9sb2d5L2RvbGJ5LWF0bW9zLW92ZXJ2aWV3Lm1wNCIsInN1ZmZpeCI6Im1wNCIsInR5cGUiOiJ2aWRlby9tcDQifV19LCJhbmFseXRpY3MiOiJVQS0yODEyNzUxLTEiLCJzcmNQaG9uZUhpZ2hyZXMiOiIvdXBsb2FkZWRJbWFnZXMvd3d3LmRvbGJ5LmNvbS9Db250ZW50L1BpbGxhcnMvSW5fdGhlX0NpbmVtYS9kb2xieS1hdG1vcy1vdmVydmlldy1zY3JlZW5zaG90LnBuZz9yZXNpemU9NDgwOjI3MCIsInNyY1RhYmxldEhpZ2hyZXMiOiIvdXBsb2FkZWRJbWFnZXMvd3d3LmRvbGJ5LmNvbS9Db250ZW50L1BpbGxhcnMvSW5fdGhlX0NpbmVtYS9kb2xieS1hdG1vcy1vdmVydmlldy1zY3JlZW5zaG90LnBuZz9yZXNpemU9OTc5OjU1MSIsInNyY0Rlc2t0b3BIaWdocmVzIjoiL3VwbG9hZGVkSW1hZ2VzL3d3dy5kb2xieS5jb20vQ29udGVudC9QaWxsYXJzL0luX3RoZV9DaW5lbWEvZG9sYnktYXRtb3Mtb3ZlcnZpZXctc2NyZWVuc2hvdC5wbmc%2FcmVzaXplPTEyODA6NzIwIiwic3JjUGhvbmUiOiIvdXBsb2FkZWRJbWFnZXMvd3d3LmRvbGJ5LmNvbS9Db250ZW50L1BpbGxhcnMvSW5fdGhlX0NpbmVtYS9kb2xieS1hdG1vcy1vdmVydmlldy1zY3JlZW5zaG90LnBuZz9yZXNpemU9NDgwOjI3MCIsInNyY1RhYmxldCI6Ii91cGxvYWRlZEltYWdlcy93d3cuZG9sYnkuY29tL0NvbnRlbnQvUGlsbGFycy9Jbl90aGVfQ2luZW1hL2RvbGJ5LWF0bW9zLW92ZXJ2aWV3LXNjcmVlbnNob3QucG5nP3Jlc2l6ZT05Nzk6NTUxIiwic3JjRGVza3RvcCI6Ii91cGxvYWRlZEltYWdlcy93d3cuZG9sYnkuY29tL0NvbnRlbnQvUGlsbGFycy9Jbl90aGVfQ2luZW1hL2RvbGJ5LWF0bW9zLW92ZXJ2aWV3LXNjcmVlbnNob3QucG5nP3Jlc2l6ZT0xMjgwOjcyMCIsImhvc3RuYW1lIjoid3d3LmRvbGJ5LmNvbSIsIm9yaWdpbiI6Imh0dHBzOi8vd3d3LmRvbGJ5LmNvbS91cy9lbi9jaW5lbWEvaW5kZXguaHRtbCIsImpzIjpbXSwiY3NzIjpbXX0%3D&r=https%3A%2F%2Fwww.dolby.com%2Fus%2Fen%2Fcinema%2Findex.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="600" height="350"> -->
						<p>Your browser does not support iframes.</p>
						</iframe>
					</div>
				</div>
				<div id='seat-verona'>
					<div id='photo_of_first_class'>
						<h3>VERONA</h3>
						<p>Now Lunardo have upgraded the new seats for our loyal customers! Let's meet the First Class
							Seats, VERONA.<a
								href='http://www.profurn.com.au/portfolio-item/verona-single-zero-wall/'>Learn more</a>
						</p>
						<dl>
							<dt>First Class Seats Features:</dt>
							<dd>luxurious aesthetic & fully reclining seat</dd>
							<dd>two individual motors & central processor</dd>
							<dd>footrest sensor option & easy lift system</dd>
							<dd>underseat lighting & autoreturn footrest option</dd>
						</dl>
					</div>
				</div>
				<div id='seat-538'>
					<div id='photo_of_standard_seats'>
						<H3>538</H3>
						<p>If you are not interesting in our First Class Seats, we also have a Standar Seats for you!
							Let's meet our 538!<a href='http://www.profurn.com.au/portfolio-item/538/'>Learn more</a>
						</p>
						<dl>
							<dt>Standard seats Features:</dt>
							<dd>Leather headrest for extended durability</dd>
							<dd>Multi-angled positioned backrest</dd>
							<dd>No finger traps</dd>
						</dl>
					</div>
				</div>
			</div>
		</article>

	</main>
	<div class="mask dn">

		<form class="order_form" onsubmit="return check();" method='post' <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
			<div class="order_form_left">
				<p class="Movie_time">Movie Title - Day - Time</p>
				<div class="order_form_standard">
					<p>Standard</p>
					<div>
						<div class="form_standard_item">
							<label for="">
								<p>Adults</p>
								<select id='seats_STA'  class="seats_sta" name='seats[STA]' >
									<option value="0">Please Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								</select>
							</label>
						</div>
						<div class="form_standard_item">
							<label for="">
								<p>Concession</p>
								<select ​id="seats_stp" class="seats_stp" name="seats[STP]"  ​>
									<option value="0">Please Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								</select>
							</label>
						</div>
						<div class="form_standard_item">
							<label for="">
								<p>Childern</p>
								<select name='seats[STC]' class="seats_stc"  ​id='seats_STC' ​>
									<option value="0">Please Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								</select>
							</label>
						</div>
					</div>
				</div>
				<div class="order_form_standard">
					<p>First Class</p>
					<div>
						<div class="form_standard_item">
							<label for="">
								<p>Adults</p>
								<select id='seats_FCA' class="seats_fca" name='seats[FCA]' >
									<option value="0">Please Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								</select>
							</label>
						</div>
						<div class="form_standard_item">
							<label for="">
								<p>Concession</p>
								<select id='seats_FCP' class="seats_fcp" name="seats[FCP]"  ​>
									<option value="0">Please Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								</select>
							</label>
						</div>
						<div class="form_standard_item">
							<label for="">
								<p>Childern</p>
								<select id='seats_FCC' class="seats_fcc" name="seats[FCC]"  ​>
									<option value="0">Please Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								</select>
							</label>
						</div>
					</div>
				</div>
				<div class="total_info">
				</div>

				<p>Total: $<span class="total red">0</span></p>
                <input type="hidden" name="price" id="price">
			</div>
			<div class="order_form_right">
				<div class="form_standard_item">
					<label for="">
						<p>Name</p>
						<input name='cust[name]'  class="name" ​id='cust_name' ​>
						<span class = "error"><?php echo $msg["nameErr"];?></span>
					</label>
				</div>
				<div class="form_standard_item">
					<label for="">
						<p>Email</p>
						<input name='cust[email]' ​id='email' ​ type="email" ​>
            <span class = "error"><?php echo $msg["emailErr"];?></span>
					</label>
				</div>
				<div class="form_standard_item">
					<label for="">
						<p>Mobile</p>
						<input name='cust[mobile]'  class="mobile" ​id='cust_mobile' ​>
						<span class = "error"><?php echo $msg["mobileErr"];?></span>
					</label>
				</div>
				<div class="form_standard_item">
					<label for="">
						<p>Credit Card</p>
						<input name='cust[card]'  ​id='card' class="card" ​ type="text">
            <span class = "error"><?php echo $msg["cardErr"];?></span>
					</label>
				</div>
				<div class="form_standard_item">
					<label for="">
						<p>Expiry</p>
						<!-- <input type="month" min="2019-09"  placeholder="Please Select"
							name='cust[expiry]' class="date" ​id='cust_date'> -->
						<input onkeydown="return false;" type="number"  class="expiry-left" maxlength="2" max="12" min="1" name = 'cust[expiryMonth]'>
             / <input type="number" maxlength="2" min="19" onkeydown="return false;" class="expiry-right" name = 'cust[expiryYear]'>
             <span class = "error"><?php echo $msg["expirtyErr"];?></span>
					</label>
				</div>
				<input type="hidden" name='movie[id]' ​id='movie_id' class="live_id">
				<input type="hidden" name='movie[day]' ​id='movie_day' class="live_day">
				<input type="hidden" name='movie[hour]' ​id='movie_hour' class="live_hour">
				<div class="form_standard_close">
					close
				</div>
				<button id="order" name="submit" value="submit" type="submit" class="form_standard_order">
					Order
				</button>
			</div>

		</form>
	</div>

	<footer>
		<div>&copy;
			<script>
				document.write(new Date().getFullYear());
			</script> Shiyu Chen Xiaodong Wang, s3713434 - s3632143(s) and Code:red. Last modified
			<?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>
          Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
          Programming course at RMIT University in Melbourne, Australia.
          <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </div>
	</footer>
</body>

</html>
