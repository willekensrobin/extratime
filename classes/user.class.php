<?php

require_once('db.class.php');

class User
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Db();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$statement = $this->conn->prepare($sql);
		return $statement;
	}
	
	public function register($username,$email,$password)
	{
		try
		{
			$new_password = password_hash($password, PASSWORD_DEFAULT);
			
			$statement = $this->conn->prepare("INSERT INTO db_user(username, email, password) 
		                                               VALUES(:username, :email, :password)");
												  
			$statement->bindparam(":username", $username);
			$statement->bindparam(":email", $email);
			$statement->bindparam(":password", $new_password);
				
			$statement->execute();	
			
			return $statement;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}

		
	public function login($username,$email,$password)
	{
		try
		{
			$statement = $this->conn->prepare("SELECT id, username, email, password FROM db_user WHERE username=:username OR email=:email ");
			$statement->execute(array(':username'=>$username, ':email'=>$email));
			$userRow=$statement->fetch(PDO::FETCH_ASSOC);
			if($statement->rowCount() == 1)
			{
				if(password_verify($password, $userRow['password']))
				{
					$_SESSION['session'] = $userRow['id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function loggedin()
	{
		if(isset($_SESSION['session']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function logout()
	{
		session_destroy();
		unset($_SESSION['session']);
		return true;
	}
}
?>