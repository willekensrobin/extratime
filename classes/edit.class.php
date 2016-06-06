<?php

include_once('db.class.php');

class Edit
{	

	private $conn;
    private $m_sUsername;
    private $m_sFirstname;
    private $m_sLastname;
    private $m_sEmail;
    private $m_sPassword;
    private $m_iType;
    private $m_iCode;
    private $m_fImage;
    
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
                
            case 'Picture':
				$this->m_fImage = $p_vValue;
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
                
            case 'Picture':
			return $this->m_fImage;
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

     
    public function editAccount()
    {
        try
		{	
            $username = $this->Username;
            $email = $this->Email;
            $password = password_hash($this->Password, PASSWORD_DEFAULT);
            $picture = $this->Picture;
            
            $userRow = $_SESSION['session'];
            $statement = $this->conn->prepare("UPDATE db_user SET username=:username, email=:email, password=:password, picture=:picture WHERE id=". $userRow .";");
			$statement->bindparam(":username", $username);
			$statement->bindparam(":email", $email);
            $statement->bindparam(":password", $password);
            $statement->bindparam(":picture", $picture);
				
			$statement->execute();	
			
			return $statement;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}	
    }
	
}
?>