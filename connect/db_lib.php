

<?php

	//connect to database

	$db_msg='';
	function connect_db()
	{
		$hostname = 'localhost';
		$username = "root";
		$password = "123456";

		try {

	    $db = new PDO("mysql:host=localhost;port=3306;dbname=interhome", $username, $password);

	    }
		catch(PDOException $e)
	    {
	    	$db = -1 ;
	    	$db_msg='could not connect to database'. $e->getMcessage(); 
	    }

	    return $db;
	}


    ////////////////////////////////////////////////////////////

    //record_salesoffice($xml->code,$xml->name,$xml->address 1);

	function record_salesoffice($code,$name,$address1){

		$db = connect_db();

		if($db)
		{

			try {

		    $sql = "INSERT INTO salesoffice (code,name,address1)VALUES(\"$code\",\"$name\",\"$address1\")";
		    //echo "<p>". $sql."</p>";
		    //$r = $db->query($sql);

		    //$key = array_keys($data);
			//$val = array_values($data);
			//$sql = "INSERT INTO $table (" . implode(', ', $key) . ") "
			//. "VALUES ('" . implode("', '", $val) . "')";
			 
		    }
			catch(PDOException $ex)
		    {
		    	echo'An Error Occured Writing to  database'. $ex->getMcessage(); 
		    }

		}

	}


	////////////////////////////////////////////////////////////////////////////////////

	function record_payments($mode,$type,$salesoffice){

		$db = connect_db();

		if($db)
		{

			try {

		    $sql = "INSERT INTO payments (mode,type,salesoffice)VALUES(\"$mode\",\"$type\",\"$salesoffice\")";
		   // echo "<p>". $sql."</p>";
		  // $r = $db->query($sql);

		    }
			catch(PDOException $ex)
		    {
		    	
		    	echo'An Error Occured Writing to  database'. $ex->getMcessage();
		        
		    }

		}

	}

	//////////////////////////////////////////////////////////////////////////////////

	//record_banks($bank->name,$bank->bankcode,$bank->accountnumber,$bank->swift,$bank->iban);

	function record_banks($name,$bankcode,$accountnumber,$swift,$iban){

		$db = connect_db();

		if($db)
		{

			try {

		    $sql = "INSERT INTO banks (name,bankcode,accountnumber,swift,iban)VALUES(\"$name\",\"$bankcode\",
		    \"$accountnumber\",\"$swift\",\"$iban\")";
		    //echo "<p>". $sql."</p>";
		    //$r = $db->query($sql);

		    }
			catch(PDOException $ex)
		    {
		    	
		    	echo'An Error Occured Writing to  database'. $ex->getMcessage();
		        
		    }

		}

	}


?>