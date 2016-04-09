<?php

/*
	Authorization Class
	Deal with auth tasks
*/

class Auth
{

 	private $salt = 'j4H9?s0d';
	
	/*
		Constructor
	*/
	function __construct()
	{
		global $Database;
		$this->Database = $Database;
	}
	
	/*
		Functions
	*/
	public function validate_login($user, $password)
	{
		// access db
		global $database;
		//var_dump($password);
	    $password = md5($this->salt.$password);
		//var_dump($password);die();

		//echo "SELECT * FROM users WHERE username = '$user' AND password = '$password'";
		//die();
		// create query
		if ($stmt = $this->Database->prepare("SELECT * FROM users WHERE username = ? AND password = ? ")) 
		{



			$stmt->bind_param("ss", $user,$password);
			$stmt->execute();
			$stmt->store_result();

			//var_dump($stmt->num_rows);die;
			
			
			// check for num rows
			if ($stmt->num_rows > 0)
			{
				// success
				//var_dump($stmt);
				$stmt->close();
				return 1;
			}
			else
			{
				// failure
				$stmt->close();
				return 0;
			}
		}
		else
		{
			die("ERROR: Could not prepare MySQLi statement.");
		}
	}

	//check admin


	public function validate_login_admin($user, $password)
	{
		// access db
		global $database;
		//var_dump($password);
	    $password = md5($this->salt.$password);
		//var_dump($password);die();

		//echo "SELECT * FROM users WHERE username = '$user' AND password = '$password'";
		//die();
		// create query
		if ($stmt = $this->Database->query("SELECT is_admin FROM users WHERE username = '".$user."' AND password = '".$password."'")) 
		{



			// $stmt->bind_param("ss", $user,$password);
			// $stmt->execute();
			// $stmt->store_result();

			//var_dump($stmt->num_rows);die;
			
			$is_admin='';
			// check for num rows
			if ($stmt->num_rows > 0)
			{

				while ($row=$stmt->fetch_array())
					{
						$is_admin=$row['is_admin'];
					}

				if($is_admin==1){
				return 1;

			    }else{
				return 0;
			    }
				
				
			}

			// else
			// {
			// 	// failure
			// 	$stmt->close();
			// 	return 0;
			// }
		}
		else
		{
			die("ERROR: Could not prepare MySQLi statement.");
		}
	}


	public  function validate_registation($user, $password,$re_password,$email)
	{
		   $password = md5($this->salt.$password);
					/* Create a prepared statement */
			if($stmt =$this->Database->prepare("INSERT INTO users(username,password,email,re_password) VALUES(?,?,?,?)"))
			{
			$stmt->bind_param("ssss", $user,$password, $email,$re_password);
			$stmt->execute();
				//$last_id=$stmt->insert_id;
			    //var_dump($last_id);die;
			

			
			}else{
				echo "couldn't connect";
			}
			$stmt->close();
			
	}

	
	
	function check_login_status()
	{
		//session_start();
		if (isset($_SESSION['loggedin']))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function check_login_status_admin()
	{
		//session_start();
		if (isset($_SESSION['admin']))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	function logout()
	{
		unset($_SESSION['cart'],$_SESSION['loggedin'],$_SESSION['admin']);
		session_unset();
		
		//session_destroy($_SESSION['cart'],$_SESSION['loggedin']);
		session_destroy();
		//session_start();
		//
	}
}