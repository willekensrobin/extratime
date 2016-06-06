<?php

session_start();

include_once("classes/user.class.php");

$login = new User();

if($login->loggedin()!="")
{
	$login->redirect('home.php');
}

if(!empty($_POST))
{
    try
    {
        $login->Username = $_POST['username'];
        $login->Password = $_POST['password'];
            
        $login->login();
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }		
}
?><?php include_once('templates/header.php') ?>
<!DOCTYPE html>
<html lang="en">
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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300,600' rel='stylesheet' type='text/css'>
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
        <div class="logo"></div>
    </div>
    <div class="content">
        <div class="clearfix"></div>
               <form class="form-signin" method="post" id="login-form">
      
        
        <div id="error">
        <?php
			if(isset($e))
			{
				?>
                <div class="alert alert-danger">
                   <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $e; ?>
                </div>
                <?php
			}
		?>
        </div>
        
        <div class="form-group top125">
        <input type="text" class="form-control" name="username" placeholder="Gebruikersnaam of Email" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Wachtwoord" />
        </div>
       
        
        <div class="form-group center top50">
            <button type="submit" name="btn-login" class="btn btn-logsign">
            AANMELDEN
            </button>
        </div>  
      	<br />
            <label>Nog geen account? <a href="signup.php">Registreer</a></label>
      </form>
    </div>
    
</div>
			
<?php include('templates/footer.php'); ?>
