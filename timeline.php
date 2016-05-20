<?php

	require_once("classes/session.php");
	
	require_once("classes/user.class.php");
	$auth_user = new User();
	
	
	$user_id = $_SESSION['session'];
	
	$statement = $auth_user->runQuery("SELECT * FROM db_user WHERE id=:id");
	$statement->execute(array(":id"=>$user_id));
	
	$userRow=$statement->fetch(PDO::FETCH_ASSOC);
	
?><?php include('templates/header.php'); ?>


    <div class="container center">
         
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
         
         <p>Tijdlijn</p>
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a class="btn btn-knop"></a>
    
    </div>
    
</body>
</html>