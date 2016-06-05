<?php
session_start();

include_once('classes/user.class.php');

$user = new User();

if($user->loggedin()!="")
{
	$user->redirect('home.php');
}

if(!empty($_POST))
{
	$user->Username = $_POST['username'];
    $user->Firstname = $_POST['firstname'];
    $user->Lastname = $_POST['lastname'];
    $user->Email = $_POST['email'];
    $user->Password = $_POST['password'];
	
	if($user->Username=="")	{
		$error[] = "Geef een gebruikersnaam in";	
	}
	else if($user->Email=="")	{
		$error[] = "Geef een emailadres in";	
	}
	else if(!filter_var($user->Email, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Geef een geldig emailadres in';
	}
	else if($user->Password=="")	{
		$error[] = "Wachtwoord invullen";
	}
	else if(strlen($user->Password) < 6){
		$error[] = "Wachtwoord moet minstens 6 karakters bevatten";	
	}
    else if($user->Firstname=="")	{
		$error[] = "Geef uw voornaam in";	
	}
    else if($user->Lastname=="")	{
		$error[] = "Geef uw achternaam in";	
	}
	else
	{
		try
		{
			$statement = $user->runQuery("SELECT username, email FROM db_user WHERE username=:username OR email=:email");
			$statement->execute(array(':username'=>$user->Username, ':email'=>$user->Email));
			$row=$statement->fetch(PDO::FETCH_ASSOC);
				
			if($row['username']==$user->Username) {
				$error[] = "Gebruikersnaam is al in gebruik";
			}
			else if($row['email']==$user->Email) {
				$error[] = "Emailadres is al in gebruik";
			}
			else
			{
				$user->register();
                $user->redirect('signup.php?joined');
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}
?><!DOCTYPE html>
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
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
    <div class="content">
        <form method="post" class="form-signin top50">
            <div class="clearfix"></div>

            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-danger top50">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                 <div class="alert alert-info top50">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; U bent geregistreerd <a href='login.php'>Log hier in.</a>
                 </div>
                 <?php
			}
			?>
            
            <div class="form-group">
            <input type="text" class="form-control" name="firstname" placeholder="Voornaam" value="<?php if(isset($error)){echo $user->Firstname;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="lastname" placeholder="Achternaam" value="<?php if(isset($error)){echo $user->Lastname;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Gebruikersnaam" value="<?php if(isset($error)){echo $user->Username;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Emailadres" value="<?php if(isset($error)){echo $user->Email;}?>" />
            </div>
            <div class="form-group">
            	<input type="password" class="form-control" name="password" placeholder="Wachtwoord" />
            </div>
                        
            <div class="clearfix"></div>
            <br>
            <a class="top50" href="adminsignup.php">Heeft u een admincode?</a>

            <div class="form-group center top10">

            	<button type="submit" class="btn btn-logsign" name="btn-signup">
                	REGISTREER
                </button>
            </div>
            <br />
            <label>Heeft u al een account? <a href="login.php">Aanmelden</a></label>
        </form>
       </div>
        </div>

<?php include('templates/footer.php'); ?> 