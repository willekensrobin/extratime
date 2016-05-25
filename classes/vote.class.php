<?php

include_once('db.class.php');

class Vote
{	
	private $conn;
    private $m_iRed;
    private $m_iYellow;
    private $m_iGoal;
    private $m_iOffside;
    
    public function __set($p_sProperty, $p_vValue) {

		switch ($p_sProperty) {
			
			case 'Red': 
			$this->m_iRed = $p_vValue;
			break;

			case 'Yellow':
				$this->m_iYellow = $p_vValue;
			break;
                
            case 'Goal':
				$this->m_iGoal = $p_vValue;
			break;

			case 'Offside': 
				$this->m_iOffside = $p_vValue;
			break;
		}
}
	public function __get($p_sProperty) {

		switch ($p_sProperty) {

			case 'Red':
			return $this->m_iRed;
			break;

			case 'Yellow':
			return $this->m_iYellow;
			break;

			case 'Goal':
			return $this->m_iGoal;
			break;

			case 'Offside':
			return $this->m_iOffside;
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
            $red = $this->Red;
            $yellow = $this->Yellow;
            $goal = $this->Goal;
            $offside = $this->Offside;
			
			$statement = $this->conn->prepare("INSERT INTO db_votes(red, yellow, goal, offside) 
		                                               VALUES(:red, :yellow, :goal, :offside)");
												  
			$statement->bindValue(":red", $red);
            $statement->bindValue(":yellow", $yellow);
            $statement->bindValue(":goal", $goal);
			$statement->bindValue(":offside", $offside);
			$statement->execute();
    }
    
    public function getVotes()
    {
        $statement = $this->conn->prepare("SELECT * db_votes");
        return $statement;
    }
    
    public function redirect($url)
	{
		header("Location: $url");
	}
}