<?php
	include_once("classes/session.php");
	
	include_once("classes/user.class.php");

	$auth_user = new User();
	
	$user_id = $_SESSION['session'];
	
	$statement = $auth_user->runQuery("SELECT * FROM db_user WHERE id=:id");
	$statement->execute(array(":id"=>$user_id));
	
	$userRow=$statement->fetch(PDO::FETCH_ASSOC);

?>