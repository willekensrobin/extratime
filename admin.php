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

?><?php include('templates/header.php');?>

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
            <a href="editgame.php">Aanpassen</a>
            <input type="submit" name="delBtn" class="noback" id="" value="Verwijderen"/>
        </div>
        <?php endwhile; ?>  
        
        <div class="center top50">
            <a class="btn btn-logsign" href="addgame.php">
            AANMELDEN
            </a>
        </div>  
    </div>   
</div>

<?php include('templates/footer.php'); ?>
			






