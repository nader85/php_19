<?php

include_once('config.php');	


	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		$email = $_POST['email'];

        $password = password_hash($pass, PASSWORD_DEFAULT);
		
        $sql = "INSERT INTO users (username, pass, email) values (:username, :pass, :email)";
        
        $sqlQuery = $con->prepare($sql);
    
        $sqlQuery->bindParam(':username', $uname); 
        $sqlQuery->bindParam(':pass', $password); 
        $sqlQuery->bindParam(':email', $email);

        $sqlQuery->execute();

        echo "Data saved successfully ...";
	}

?>