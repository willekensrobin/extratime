<?php

include_once('db.class.php');

class Game
{
    private $conn;
    private $m_sTeam1;
    private $m_sTeam2;
    private $m_fImage1;
    private $m_fImage2;
    
    public function __set($p_sProperty, $p_vValue) {

		switch ($p_sProperty) {
			
			case 'Team1':
			$this->m_sTeam1 = $p_vValue;
			break;

			case 'Team2':
				$this->m_sTeam2 = $p_vValue;
			break;
                
            case 'Image1':
				$this->m_fImage1 = $p_vValue;
			break;

			case 'Image2': 
				$this->m_fImage2 = $p_vValue;
			break;
		}
}
	public function __get($p_sProperty) {

		switch ($p_sProperty) {

			case 'Team1':
			return $this->m_sTeam1;
			break;

			case 'Team2':
			return $this->m_sTeam2;
			break;

			case 'Image1':
			return $this->m_fImage1;
			break;

			case 'Image2':
			return $this->m_fImage2;
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
    
    public function getGame()
    {
        $statement = $this->conn->query("SELECT * FROM db_games ORDER BY id DESC");
        return $statement;
    }
    
    public function addGame()
    {
        try
		{
            $hometeam = $this->Team1;
            $visitors = $this->Team2;
            $picture = $this->Image1;
            $picturetwo = $this->Image2;
            
			$statement = $this->conn->prepare("INSERT INTO db_games(hometeam, visitors, picture, picturetwo) 
		                                               VALUES(:hometeam, :visitors, :picture, :picturetwo)");
			
            $statement->bindparam(":hometeam", $hometeam);
			$statement->bindparam(":visitors", $visitors);
            $statement->bindparam(":picture", $picture);
			$statement->bindparam(":picturetwo", $picturetwo);
            
			$statement->execute();	
				
		}
		catch(PDOException $error)
		{
			echo $error->getMessage();
		}	
    }
    
    
    public function editGame()
    {
        try
		{	
            $hometeam = $this->Team1;
            $visitors = $this->Team2;
            $picture = $this->Image1;
            $picturetwo = $this->Image2;
            
            $statement1 = $this->conn->prepare("SELECT id FROM db_games");
			$gameRow=$statement1->fetch(PDO::FETCH_ASSOC);
            $id = $gameRow['id'];
            
            $statement = $this->conn->prepare("UPDATE db_games SET hometeam=:hometeam, visitors=:visitors, picture=:picture, picturetwo=:picturetwo WHERE id=". $id .";");
			$statement->bindparam(":hometeam", $hometeam);
            $statement->bindparam(":visitors", $visitors);
			$statement->bindparam(":picture", $picture);
            $statement->bindparam(":picturetwo", $picturetwo);	
				
			$statement->execute();	
			
			return $statement;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }
    
    public function delGame()
    {
        try
		{	  
            
            $statement = $this->conn->prepare("DELETE FROM db_games WHERE id=". $id .";");	
				
			$statement->execute();	
			
			return $statement;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }
    
    public function redirect($url)
	{
		header("Location: $url");
	}
}

?>