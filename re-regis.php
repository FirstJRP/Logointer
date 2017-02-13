<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="css/re-regis-style-1.css">
 	<script type="text/javascript">
 		function finishRegis(){
 			alert("Register success!");
 		}

 	</script>
</head>
<body>

	<div class="wrapper">
 		<div class="wrap-top">
	 		<div class="header-site">
	 			<a href="index.html"><div class="logo"></div></a>
	 			 
	 	</div>
	 	 




<form action="edit_register.php" method="POST">
	 		 <div class="reserve-box">
	 		 	 


	 		 	<?php
				    include "conn.php";
				     session_start();
				      	$stu_username = $_SESSION['stu_username'];
						$stu_firstname = $_SESSION['stu_firstname'];
						$stu_lastname = $_SESSION['stu_lastname'];
						$stu_email = $_SESSION['stu_email'];
						$stu_phone = $_SESSION['stu_phone'];



				    $sql = "SELECT stu_username,stu_firstname,stu_lastname,stu_email,stu_phone FROM member_info WHERE stu_username = '".$stu_username."'";
				    $result = $conn->query($sql);

				    if ($result->num_rows > 0) {
				        while($row = $result->fetch_assoc()) {

            	?>

	 			<div class="reserve-box-bg"></div>
	 			<div class="all-text">
		 			<div class="head-login">Confrim information</div>
		 			<div class="line"></div>	
		 				<div class="reserve-box-in-1">
			 			 	<div class="user-id1"> Username : </div> <div class="user-id2" ><input type="hidden" name= "stu_username" value="<?php echo $row["stu_username"];?>"><?php echo $row["stu_username"];?></div>
		 			 	</div>
		 			  	<div class="reserve-box-in-2"> 
			 			 	 <div class="username1">Firstname-Lastname : </div><div class="username2"><?php echo $row["stu_firstname"];?></div>
             											<div class="username3"><?php echo $row["stu_lastname"];?></div>
		 			 	</div>
		 			   
		 			  	<div class="reserve-box-in-4"> 
		 			 	 	 <div class="email1">Email :</div><div class="email2"><?php echo $row["stu_email"];?></div>
		 			 	</div>
		 			 	<div class="reserve-box-in-5"> 
		 			 	 	<div class="phone1">Phone :	</div><div class="phone2"><?php echo $row["stu_phone"];?></div>
		 			 	</div>
	 			</div>

	 			
	 			<input type="submit" name="Submit" value="Cancel"/>
	 			<a href="index.html" onclick="finishRegis()"><div class="check-btn">OK</div></a>

	 			<?php
			        }
			    } else {
			        echo "0 results";
			    }
    


  			  $conn->close();

				?>
  		
	 				 
	 				 

			</div>
 	</form>
 		</div>
	 <footer>
		 
		 
		</footer>
 	

 	</div>





</body>
</html>