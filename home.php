<?php

	require_once("classes/session.php");
	
	require_once("classes/user.class.php");

	$auth_user = new User();
	
	$user_id = $_SESSION['session'];
	
	$statement = $auth_user->runQuery("SELECT * FROM db_user WHERE id=:id");
	$statement->execute(array(":id"=>$user_id));
	
	$userRow=$statement->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Extra Time</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link type="text/css" rel="stylesheet" href="css/demo.css" />
    <link type="text/css" rel="stylesheet" href="dist/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="css/style.css"> 
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.0.js"></script>
    <script type="text/javascript" src="dist/js/jquery.mmenu.all.min.js"></script>
    <script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu();
			});
    </script>


    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div id="page">
    <div class="header">
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    <div class="clearfix"></div>
    <div class="content">


    <p class="h4 top100">Wedstrijden</p> 

    

            <a href="#"><div class="row light">

                <div class="col-xs-5">
                <img src="images/brugge.png" class="logoklein"> <br><p class="right">Club Brugge</p>
                </div>
                
                <div class="col-xs-2">
                <p class="right">VS</p>
                </div>
                
                <div class="col-xs-5">
                <img src="images/and.png" class="logoklein"> <p class="right">Anderlecht</p>
                </div>
            
            
                </div></a>   


    </div>    
			
    <?php include_once('templates/header.php') ?>
    
</div><div class="site-footer center">Copyright Extra TimeLine</div>
    
	</body>
</html>





