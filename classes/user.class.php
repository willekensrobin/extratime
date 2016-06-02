<?php

include_once('db.class.php');

class User
{	

	private $conn;
    private $m_sUsername;
    private $m_sFirstname;
    private $m_sLastname;
    private $m_sEmail;
    private $m_sPassword;
    private $m_iType;
    private $m_iCode;
    
    public function __set($p_sProperty, $p_vValue) {

		switch ($p_sProperty) {
			
			case 'Username': 
			$this->m_sUsername = $p_vValue;
			break;

			case 'Firstname':
				$this->m_sFirstname = $p_vValue;
			break;
                
            case 'Lastname':
				$this->m_sLastname = $p_vValue;
			break;

			case 'Email': 
				$this->m_sEmail = $p_vValue;
			break;
            
            case 'Password': 
				$this->m_sPassword = $p_vValue;
			break;
            
            case 'Code':
				$this->m_iCode = $p_vValue;
			break;
		}
}
	public function __get($p_sProperty) {

		switch ($p_sProperty) {

			case 'Username':
			return $this->m_sUsername;
			break;

			case 'Firstname':
			return $this->m_sFirstname;
			break;

			case 'Lastname':
			return $this->m_sLastname;
			break;

			case 'Email':
			return $this->m_sEmail;
			break;

			case 'Password':
			return $this->m_sPassword;
			break;

			case 'Code':
			return $this->m_iCode;
			break;
				
		}
}
    
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
	
	public function register()
	{
		try
		{
            $m_iType = 0;
            $username = $this->Username;
            $firstname = $this->Firstname;
            $lastname = $this->Lastname;
            $email = $this->Email;
			$password = password_hash($this->Password, PASSWORD_DEFAULT);
			
			$statement = $this->conn->prepare("INSERT INTO db_user(username, firstname, lastname, email, password, type) 
		                                               VALUES(:username, :firstname, :lastname, :email, :password, :type)");
												  
			$statement->bindparam(":username", $username);
            $statement->bindparam(":firstname", $firstname);
            $statement->bindparam(":lastname", $lastname);
			$statement->bindparam(":email", $email);
			$statement->bindparam(":password", $password);
            $statement->bindparam(":type", $m_iType);
            
			$statement->execute();	
				
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
    
    public function registeradmin()
	{
		try
		{    
            $m_iType = 1;
            $m_iCode = $this->Code;
            $username = $this->Username;
            $firstname = $this->Firstname;
            $lastname = $this->Lastname;
            $email = $this->Email;
			$password = password_hash($this->Password, PASSWORD_DEFAULT);
			
			$statement = $this->conn->prepare("INSERT INTO db_user(username, firstname, lastname, email, password, type, code) 
		                                               VALUES(:username, :firstname, :lastname, :email, :password, :type, :code)");
												  
			$statement->bindparam(":username", $username);
            $statement->bindparam(":firstname", $firstname);
            $statement->bindparam(":lastname", $lastname);
			$statement->bindparam(":email", $email);
			$statement->bindparam(":password", $password);
            $statement->bindparam(":type", $m_iType);
            $statement->bindparam(":code", $m_iCode);
            
			$statement->execute();	
			
			return $statement;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}

		
	public function login()
	{
            $username = $this->Username;
            $email = $this->Username;
            $password = $this->Password;
            
			$statement = $this->conn->prepare("SELECT id, username, email, password, type FROM db_user WHERE username=:username OR email=:email");
			$statement->execute(array(':username'=>$username, ':email'=>$email));
			$userRow=$statement->fetch(PDO::FETCH_ASSOC);
            $type = $userRow['type'];
            
			if($statement->rowCount() == 1)
			{
				if(password_verify($password, $userRow['password']) && $type == 0)
				{
					$_SESSION['session'] = $userRow['id'];
                    header('Location: home.php');
					return true;        
				}
                else if(password_verify($password, $userRow['password']) && $type == 1)
				{
					$_SESSION['session'] = $userRow['id'];
                    header('Location: admin.php');
					return true;        
				}
				else
				{
					return false;
				}
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