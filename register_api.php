<?php

mysql_connect("localhost","root","");

mysql_select_db("register");


$stu_firstname = $_POST["stu_firstname"];
$stu_lastname = $_POST["stu_lastname"];
//$stu_id = $_POST["stu_id"];
$stu_email = $_POST["stu_email"];
$stu_phone = $_POST["stu_phone"];
$stu_username = $_POST["stu_username"];
$stu_re_password = $_POST["stu_re_password"];
$stu_password = $_POST["stu_password"];

if($stu_firstname==""||$stu_lastname==""||$stu_email==""||$stu_phone==""||$stu_username==""||$stu_password=="")

{?>
	<script>
	alert("กรุณากรอกข้อมูลให้ครบถ้วน")
	history.back()
	</script>
<?php

exit();

}


if($stu_password != $stu_re_password)

{?>
	<script>
	alert("รหัสผ่านไม่ตรงกัน")
	history.back()

	</script>
<?php


exit();

}


 


if(strlen($stu_phone) != 10||!is_numeric($stu_phone))

{?>
	<script>
	alert("กรุณากรอกเบอร์โทรศัพท์เป็นตัวเลขจำนวน 10 ตัว")
	history.back()

	</script>
<?php


exit();

}

 
 

$strSQL = "SELECT * FROM member_info WHERE stu_username = '".$stu_username."' ";

$objQuery = mysql_query($strSQL);

$objResult = mysql_fetch_array($objQuery);

if($objResult)

{
	?>
	<script>
	alert("กรุณาเปลี่ยนชื่อผู้ใช้ มีผู้ใช้ชื่อนี้แล้ว")
	history.back()

	</script>
<?php

}

else

{  

 

$strSQL = "INSERT INTO member_info (stu_username,stu_password,stu_firstname,stu_lastname,stu_email,stu_phone) VALUES ('".$stu_username."',

'".$stu_password."','".$stu_firstname."','".$stu_lastname."','".$stu_email."','".$stu_phone."')";

$objQuery = mysql_query($strSQL);

 session_start();
 
 $_SESSION['stu_username'] = $stu_username;
 $_SESSION['stu_firstname'] = $stu_firstname;
$_SESSION['stu_lastname'] = $stu_lastname;
$_SESSION['stu_email'] = $stu_email;
$_SESSION['stu_phone'] = $stu_phone;

header("location:re-regis.php");

 

}

 
mysql_close();

?>