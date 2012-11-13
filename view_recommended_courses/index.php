<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>View Recommended Courses</title>
	<link rel ="stylesheet" type="text/css" href="stylesheet/view_recommended_courses.css" />
	<link rel ="stylesheet" type="text/css" href="../common/stylesheet/navigation_bar.css" />
	<script src="../common/jQuery/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="stylesheet/javascript/header.js">
	
	</script>
	
</head>
<body>
	<div class="wrapper">
		<div class="header" >
			<div class="notification">
				<spam id="user_name"><?php echo $_SESSION['username'];?></spam> 
				<a class="sign-out" href="../login/logout.php">Logout</a>
				<a href="#" ><img id="mail_img" src="../common/images/e_mail_16x16.png" /></a>
			</div>
			<h1 id="test">Student Online Advisory Portal</h1>
			<nav>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Profile Management</a>
						<ul class="drop_down_list">
							<li><a href="">View Student Profile</a></li>
							<li><a href="">Edit Personal Profile</a></li>
							<li><a href="">Update Security</a></li>
						</ul>
					</li>
					<li><a href=""  >Course Advisory</a>
						<ul class="drop_down_list" >
							<li><a href="">Get Recommended</a></li>
							<li><a href="">Review Course</a></li>
							<li><a href="">Compare Course Timetables</a></li>
						</ul>
					</li>
					<li><a href="">Register</a>
						<ul class="drop_down_list">
							<li><a href="">Register Course</a></li>
							<li><a href="">Request Override</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<div class="content" >
			<dl>
				<dt><h3 >Search Course</h3></dt>
					<dd>Searches for courses based on the critera entered.</dd>
			</dl>
			

			<form action="list_course/index.php" method="post">
				<dl class="field_title">
					<dt><h4>Basic Search</h4></dt>
					<dd>Specific details about courses.</dd>
				</dl>
				<div class="left_column">
					<p>Course Name<br/>
						<input type="text" class="text"/>	
					</p>
					<p>Course Code or CRN <br/>
						<input type="text" class="text" style="width:120px"/>
					</p>
					<p>Course Title <br/>
						<input type="text" class="text"/>
					</p>
				</div>
				<div class="right_column">
					<p>Credit Range<br />
						<select class="select" style="width: 50px;">
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
						to 
						<select class="select" style="width: 50px;margin-left:10px">
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</p>
					<p>
						Faculty <br/>
						<select class="select">
							<option>Pure and Applied Sciences</option>
							<option>Humanities</option>
							<option>Social Sciences</option>
						</select>
					</p>
					<p>Days of The Week<br>
							<input type="checkbox" checked = "checked"/>Mon
							<input type="checkbox" checked = "checked"/>Tue
							<input type="checkbox" checked = "checked"/>Wen
							<input type="checkbox" checked = "checked"/>Thur
							<input type="checkbox" checked = "checked"/>Fri
							<input type="checkbox" checked = "checked"/>Sat
					</p>
				</div>
				<p style="text-align:center;"><img src="../common/images/fleron-byline.gif" style="margin-top:50px;" /></p>
				<dl class="field_title">
					<dt><h4>Detailed Search</h4></dt>
					<dd>Generates search based of personal perference</dd>
				</dl>

					<h4 style="margin-left:40px">Personal</h4>
					
				<div id="personal_prefrence">
					<p>Degree Name<br/>
						<input typ="text" class="text"/>
					</p>
					<p>Simester 	<spam style="margin-left:100px;">Year/Level of Degree<spam><br/> 
						<select class="select" style="width:150px;">
							<option>First Simester</option>
							<option>Second Simester</option>
							<option>Summer</option>
						</select>
						<select class="select">
							<option>1st</option>
							<option>2nd</option>
							<option>3rd</option>
							<option>4th</option>
							<option>5th</option>
							<option>6th</option>
							<option>7th</option>
						</select>
					</p>
				</div>
				<h4 style="margin-left:40px">Other </h4>
				<div  id="other">
					<p>Lecturer's Name <br/>
						<input type="text" class="text"/>
					</p>
					<p>Course Time <br/>
						<input type="text" class="text" style="width:70px;margin-right:10px;"/> to <input type="text" class="text" style="width:70px;margin-left:10px;" />
					</p>
					<p>Max Class Duration <br/>
						<input type="text" class="text" style="width:100px;">
					</p>
					<p>Lecture's Gender <br/>
						<input type="checkbox" name="gender" checked = "checked">Male
						<input type="checkbox" name="gender" checked = "checked">Female
					</p>
					<p>Type of Course <br />
						<input type="checkbox" checked = "checked"/>Theoretical
						<input type="checkbox" checked = "checked"/>Practical
						<input type="checkbox" checked = "checked"/> Technical
					</p>
					<p>Lab Course <br/>
						<input type="radio" name="lab_course" checked="checked">Both
						<input type="radio" name="lab_course">Yes
						<input type="radio" name="lab_course">No
					</p>

				</div>
				
				<input type="button" value="submit" class="submit" /> 
			</form>
		</div>

		<div class="footer">
			<a href="">Home</a>
		</div>
	</div>
	

</body>
</html>