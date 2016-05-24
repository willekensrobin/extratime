<?php

	require_once("classes/session.php");

	require_once("classes/user.class.php");
	$auth_user = new User();
	
	
	$user_id = $_SESSION['session'];
	
	$statement = $auth_user->runQuery("SELECT * FROM db_user WHERE id=:id");
	$statement->execute(array(":id"=>$user_id));
	
	$userRow=$statement->fetch(PDO::FETCH_ASSOC);
	
?><?php include('templates/header.php'); ?>

<div id="page">
    <div class="header">
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
<div class="clearfix"></div>
   
    <div class="content">

    <p class="h4 top100">Wedstrijden</p> 

    <a href="timeline.php">
        <div class="row light">

        <div class="col-xs-5">
        <img src="images/brugge.png" class="logoklein"> <br><p class="right">Club Brugge</p>
        </div>
                
        <div class="col-xs-2">
        <p class="right">VS</p>
        </div>
                
        <div class="col-xs-5">
        <img src="images/and.png" class="logoklein"> <p class="right">Anderlecht</p>
        </div>
            
            
        </div>
    </a>   

    </div>   

<?php include('templates/footer.php'); ?> 