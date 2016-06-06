<?php
include('classes/userauth.class.php');
include('classes/games.class.php');

$game = new Game();

if(!empty($_POST))
{
    
    $game->Team1 = $_POST['team-1'];
    $game->Team2 = $_POST['team-2'];
    $game->Image1 = strip_tags(($_FILES['team-logo1']["name"]));
    $game->Image2 = strip_tags(($_FILES['team-logo2']["name"]));
        
    $game->editGame();
    $game->redirect('admin.php');
           
}
?><?php include('templates/adminheader.php') ?>
<div id="page">
    <div class="header">
        
            <img class="back" src="images/back.svg" alt=""onclick="history.go(-1);">

        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
    <button onclick="history.go(-1);">Terug</button>
    
    <div class="content">
        <form class="addgame-form top100" method="post" action="" enctype="multipart/form-data" id="addgame-form">
      
           

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
            <input type="text" class="form-control" name="team-1" value="" placeholder="Team 1" required />
            <span id="check-e"></span>
            </div>

            <div class="form-group">
            <input type="file" class="form-control noline" name="team-logo1" id="file" placeholder="team-logo1" value="" /><br>
            <label for="file" class="upload"><img class="iconmenu" src="images/upload.svg"> Kies het logo!</label>
            </div>
            
            <div class="form-group top50">
            <input type="text" class="form-control" name="team-2" value="" placeholder="Team 2" required />
            <span id="check-e"></span>
            </div>

            <div class="form-group">
            <input type="file" class="form-control noline" name="team-logo2" id="file" placeholder="team-logo2" value="" /><br>
            <label for="file" class="upload"><img class="iconmenu" src="images/upload.svg"> Kies het logo!</label>
            </div>

        <div class="form-group center top50">
            <button type="submit" name="btn-login" class="btn btn-logsign">
            OPSLAAN
            </button>
        </div>  
   

      </form>
    </div>
    
</div>
			
<?php include('templates/footer.php'); ?>