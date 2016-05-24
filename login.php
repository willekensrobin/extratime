<?php

session_start();

require_once("classes/user.class.php");

$login = new User();

if($login->loggedin()!="")
{
	$login->redirect('home.php');
}

if(!empty($_POST))
{
	$username = strip_tags($_POST['username']);
	$email = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
		
	if($login->login($username,$email,$password))
	{
		$login->redirect('home.php');
	}
	else
	{
		$error = "Email en wachtwoord zijn ongeldig";
	}	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Extra Time</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
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
    <div class="content">
               <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading top50">Aanmelden</h2>
        
        <div id="error">
        <?php
			if(isset($error))
			{
				?>
                <div class="alert alert-danger">
                   <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                </div>
                <?php
			}
		?>
        </div>
        
        <div class="form-group top50">
        <input type="text" class="form-control" name="username" placeholder="Gebruikersnaam of Email" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Wachtwoord" />
        </div>
       
        
        <div class="form-group center top50">
            <button type="submit" name="btn-login" class="btn btn-default">
            AANMELDEN
            </button>
        </div>  
      	<br />
            <label>Nog geen account? <a href="signup.php">Registreer</a></label>
      </form>
    </div>
			
<?php include('templates/footer.php'); ?>
