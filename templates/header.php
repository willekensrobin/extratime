<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welkom, <?php echo $userRow['username']; ?></title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/menu.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<span class="glyphicon glyphicon-user"></span>&nbsp;Hallo <?php echo $userRow['username']; ?>&nbsp;</span>

    <a href="home.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Wedstrijden</a>
    <a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Profiel</a>
    <a href="gamedata.php"><span class="glyphicon glyphicon-game"></span>&nbsp;Mijn wedstrijden</a>
    <a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Uitloggen</a>
</div>
