<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="css/register-style.css">
 	
</head>
<body>

	<div class="wrapper">
 		<div class="wrap-top">
	 		<div class="header-site">
	 			<a href="index.html"><div class="logo"></div></a>
	 			 <div class="nav-wrapper">
	 			 	<!--<nav>
			            <ul>
			                <a href="register.php"><li class="nav-box hov-btn active-btn">Register</li></a>
			                <li class="between-box">|</li>
			                <a href="login.php"><li class="nav-box hov-btn">ลงชื่อเข้าใช้</li></a>
			            </ul>
				</nav>-->
			</div>
	 	</div>
	 	 

<form action="register_api.php" method="POST">
	 		 <div class="reserve-box">
	 		 	 
	 			<div class="reserve-box-bg"></div>
	 			<div class="head-login">Register</div>
	 			<div class="line"></div>
	 			<div class="reserve-box-in-1">
	 			 	Username :
	 			 	 	<input type="text" class="username" name="stu_username" placeholder="Input your username" >
	 			 	 </div>
	 			<div class="reserve-box-in-2">
	 			 	 Password :
	 			 	 	<input type="password" class="password" name="stu_password" placeholder="Input your password">
	 			 </div>
	 			 <div class="reserve-box-in-3"> 
	 			 	 Re-password :
	 			 	 	<input type="password" class="password" name="stu_re_password" placeholder="Input re-password">
	 			 </div>
	 			  <div class="reserve-box-in-4"> 
	 			 	 Firstname :
	 			 	 	<input type="text" class="firstname" name="stu_firstname" placeholder="Input your firstname">
	 			 </div>
	 			  <div class="reserve-box-in-5"> 
	 			 	Lastname :
	 			 	 	<input type="text" class="lastname" name="stu_lastname" placeholder="Input your lastname">
	 			 </div>

	 			 
	 			  <div class="reserve-box-in-7"> 
	 			 	 Email :
	 			 	 	<input type="text" class="email" name="stu_email" placeholder="Input your email">
	 			 </div>
	 			 	  <div class="reserve-box-in-8"> 
	 			 	 Phone :
	 			 	 	<input type="text" class="phone" name="stu_phone" placeholder="Input your phone">
	 			 
	 			 </div>
	 			
  			 	<input type="reset" class="check-btn2" name="Reset" value="Cancel"/>
	 			<input type="submit" class="check-btn" name="Submit" value="Save"/>

			</div>
 	</form>
 		</div>
	 <footer>
			<div class="contact-txt">
			 
				 
			</div>

		 
			<div class="contact-icon">
				  

			</div>
		</footer>
 	

 	</div>





</body>
</html>