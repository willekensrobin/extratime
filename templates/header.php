<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welkom, <?php echo $userRow['username']; ?></title>
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
    <script type="text/javascript">$(function() {$('nav#menu').mmenu();});</script>
</head>

<body>

<nav id="menu">
    <ul>
        <div class="center space50 bigfont"><li><a href="profile.php">Hallo <?php echo $userRow['username']; ?></a></li></div>
        <li><a href="home.php" class="dark"><img class="iconmenu" src="images/ball.svg">Wedstrijden</a></li>
        <li><a href="profile.php"><img class="iconmenu" src="images/avatar.svg">Profiel</a></li>
        <li><a href="userdata.php" class="dark"><img class="iconmenu" src="images/ball.svg">Mijn wedstrijden</a></li>
        <li><a href="logout.php?logout=true"><img class="iconmenu" src="images/logout.svg">Uitloggen</a></li>
    </ul>
</nav>