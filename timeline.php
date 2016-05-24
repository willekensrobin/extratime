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
    
    <div class="content">
            <a class="knop"></a>
    </div>
    
    <div class="container center">
    <div class="col-xs-1"></div>
    <div class="col-xs-1"><div class="circle"></div> 10' </div>
    <div class="col-xs-1"><div class="circle"></div> 20' </div>
    <div class="col-xs-1"><div class="circle"></div> 30' </div>
    <div class="col-xs-1"><div class="circle"></div> 40' </div>
    <div class="col-xs-1"><div class="circle"></div> 50' </div>
    <div class="col-xs-1"><div class="circle"></div> 60' </div>
    <div class="col-xs-1"><div class="circle"></div> 70' </div>
    <div class="col-xs-1"><div class="circle"></div> 80' </div>
    <div class="col-xs-1"><div class="circle"></div> 90' </div>
    <div class="col-xs-1"><div class="circle"></div> +90' </div>
    <div class="col-xs-1"></div>

    </div>
    
</div>

<?php include('templates/footer.php'); ?>




