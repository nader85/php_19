<?php

include_once('config.php');	


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];

        $sql = "INSERT INTO categories (name) values (:name)";
        
        $sqlQuery = $con->prepare($sql);
    
        $sqlQuery->bindParam(':name', $name); 


        $sqlQuery->execute();

        echo "Data saved successfully ...";
	}
