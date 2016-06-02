<?php

include_once('db.class.php');

class Vote
{	
	private $conn;
    private $m_iRed1 = 0;
    private $m_iYellow1 = 0;
    private $m_iRed2 = 0;
    private $m_iYellow2 = 0;
    
    public function __set($p_sProperty, $p_vValue) {

		switch ($p_sProperty) {
			
			case 'Red1': 
			$this->m_iRed1 = $p_vValue;
			break;

			case 'Yellow1':
				$this->m_iYellow1 = $p_vValue;
			break;
                
            case 'Red2':
				$this->m_iRed2 = $p_vValue;
			break;

			case 'Yellow2': 
				$this->m_iYellow2 = $p_vValue;
			break;
		}
}
	public function __get($p_sProperty) {

		switch ($p_sProperty) {

			case 'Red1':
			return $this->m_iRed1;
			break;

			case 'Yellow1':
			return $this->m_iYellow1;
			break;

			case 'Red2':
			return $this->m_iRed2;
			break;

			case 'Yellow2':
			return $this->m_iYellow2;
			break;
		}
}
    
    public function __construct()
	{
		$database = new Db();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
    
    public function vote()
    {
            $red1 = $this->Red1;
            $yellow1 = $this->Yellow1;
            $red2 = $this->Red2;
            $yellow2 = $this->Yellow2;
			
			$statement = $this->conn->prepare("INSERT INTO db_votes(red1, yellow1, red2, yellow2) 
		                                               VALUES(:red1, :yellow1, :red2, :yellow2)");									  
			$statement->bindValue(":red1", $red1);
            $statement->bindValue(":yellow1", $yellow1);
            $statement->bindValue(":red2", $red2);
            $statement->bindValue(":yellow2", $yellow2);
			$statement->execute();
    }
    
    public function getVotes()
    {
        $statement = $this->conn->prepare("SELECT * FROM db_votes");
        return $statement;
    }
    
    public function redirect($url)
	{
		header("Location: $url");
	}
}