<!DOCTYPE html>
<html lang="en">

<head>    <meta charset="UTF-8">
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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300,600' rel='stylesheet' type='text/css'>
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

<nav id="menu">
    <ul><br>
                <div class="center bigfont"><li><a href="profile.php">Hallo <?php echo $userRow['username']; ?></a></li></div>

        <div><img class="circular" src="uploads/<?php echo $userRow['picture']; ?>"/ alt=""></div>

        <li><a href="home.php" class="dark"><img class="iconmenu" src="images/ball.svg">Wedstrijden</a></li>
        <li><a href="profile.php"><img class="iconmenu" src="images/avatar.svg">Profiel</a></li>
        <li><a href="logout.php?logout=true"><img class="iconmenu" src="images/logout.svg">Uitloggen</a></li>
        <div class="bottom"> 
    <h1 id="madewithlove">Made with &hearts;  in Mechelen</h1>
</div>
    </ul>

</nav>
