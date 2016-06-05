<?php 
include('classes/userauth.class.php');
include('classes/games.class.php');

$game = new Game();

$games = $game->getGame();

?><?php include('templates/header.php');?>

<div id="page">
    <div class="header">
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
<div class="clearfix"></div>
   
    <div class="content top100">


    <?php while($game = $games->fetch(PDO::FETCH_ASSOC)): ?>
        <a href="timeline.php">
        <div class="containerclub">
            <div class="col-xs-5"><img class="logoklein" src="uploads/<?php echo $game['picture'] ?>"/ alt=""><br><p class="right"><?php echo $game['hometeam'];  ?></p></div>
            <div class="col-xs-2"><p class="right vs">VS</p></div>    
            <div class="col-xs-5"><img class="logoklein" src="uploads/<?php echo $game['picturetwo'] ?>"/ alt=""><p class="right"><?php echo $game['visitors']; ?></p></div>
        </div>
        </a>
        <?php endwhile; ?>  

    </div>   
</div>

<?php include('templates/footer.php'); ?>
			






