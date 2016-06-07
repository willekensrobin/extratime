<?php 
include('classes/userauth.class.php');
include('classes/games.class.php');

$game = new Game();

$games = $game->getGame();

if(!empty($_POST['delBtn']))
{
    $game->delGame();
    $game-redirect('admin.php');
}

?><?php include('templates/adminheader.php');?>

<div id="page">
    <div class="header">
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
<div class="clearfix"></div>
   
    <div class="content top75">
    
       <?php while($game = $games->fetch(PDO::FETCH_ASSOC)): ?>
        <a href="timeline.php">
        <div class="containerclub2">
            <div class="col-xs-5"><img class="logoklein" src="uploads/<?php echo $game['picture'] ?>"/ alt=""><br><p class="right"><?php echo $game['hometeam'];  ?></p></div>
            <div class="col-xs-2"><p class="right vs">VS</p></div>    
            <div class="col-xs-5"><img class="logoklein" src="uploads/<?php echo $game['picturetwo'] ?>"/ alt=""><p class="right"><?php echo $game['visitors']; ?></p></div>
            </a>
            <div class="col-xs-3"></div>
            <div class="col-xs-2"><a href="editgame.php"><img class="icon3" src="images/settings.svg"></a></div>
            <div class="col-xs-2"></div>
            <div class="col-xs-2"><input type="submit" name="delBtn" class="noback noline" id="" value=""/>
            <label for="file"><img class="icon3" src="images/garbage.svg"></label></div>
            <div class="col-xs-3"></div>
        </div>
        <?php endwhile; ?>  
    </div>  
        <div class="center top50">
            <a class="btn btn-logsign" href="addgame.php">
            + WEDSTRIJD
            </a>
        </div>  
    </div>   
</div>

<?php include('templates/footer.php'); ?>
			






