<?php


		$firstname=$_POST['first_name']
		$lastname=$_POST['last_name'];
		$password=$_POST['password'];
		$Gender=$_POST['gender'];
		
	if (!empty($firstname)) || !empty($lastname) || !empty(email) || !empty(password) || !empty(gender)
	
		$server = "localhost";
		$username = "root";
		$password = "s";
		$databasename  = "dbFacebook";
		$tablename ="tblFacebook";
//create connecton
conn =new mysqli($server,$username,$password,$databasename,$tablename);
if(mysqli_connect_error()) {
	die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
} else {
	$SELECT ="SELECT email From regester Where email= ? Limit 1";
	$INSERT ="INSERT into register (firstname,lastname,password,gender) values(?, ?, ?, ?, ?, ?,)"
	$stmt = $conn- >prepaer($SELECT);
	$stmt - >execute();
	$stmt - >bind_param("s", $email);
	$stmt - >store_result ();
	$rnum = $stmt - >num_rows;

	if ($rnum==0) {
		$stmt - >close();

		$stmt = $conn- >prepare($INSERT);
		$stmt - >bind_param("sSSSII", $firstname,$lastname,$password,$gender);
		$stmt- >execute();
		echo "New record inserted successfully";

	} else {
		echo "Some alredy register using this email";
	}
	$stmt- >close();
	conn- >close();
}

{else {
			echo "All fields are required";
			die
		}



	}


		//$sqlSelect =mysql_query("insert into users(Name,Email,Password,Gender,birthday_day,birth_year,birth_month) values('$Name','$Email','$Password','$Gender','$birthday_day','birth_year','$birth_month')");

		?>	