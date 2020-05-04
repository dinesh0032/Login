<?php
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');


	if(!empty($username) || !empty($password))
	{
			 
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "form_reg";

			//create connection
		
			$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

			if(mysqli_connect_error())
			{
				die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
			}

			else
			{
				$sql ="INSERT INTO table1(username, password)
				values('$username', '$password')";
				if($conn->query($sql))
				{
					echo "inserted sucessfully";
			    }
				else
				{
					echo "Error".$sql."<br>".$conn->error;
				}
			}
			$conn->close();
	
	}
	else{
		echo "enter username and password";
		die();
	}

	?>