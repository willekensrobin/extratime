<?php 
include('classes/userauth.class.php');
include('classes/vote.class.php');

$votes = new Vote();

$votes->getVotes();

?>

<?php include('templates/header.php');?>

<div id="page">
   
    <div class="header">
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
    <div class="content">
               <p class="h4 top100 marginleftright">Niet eens met de scheids, druk!</p>

            <a href="uservote.php" class="knop"></a>
    </div>
    
    <div class="container center">  
                
                <div class="col-xs-3 center"><input type="button" value="<?php echo 2?>" name="red" id="red" class="card-red" /></div>
                <div class="col-xs-3"><input type="button" value="<?php echo 4 ?>" name="yellow" id="yellow" class="card-yellow" /></div>
                <div class="col-xs-3"><input type="button" value="<?php echo 0 ?>" name="goal" id="goal" class="card-goal" />
                </div>
                <div class="col-xs-3"><input type="button" value="<?php echo 0 ?>" name="offside" id="offside" class="card-offside"/></div>
        
    </div>
    
</div>

<?php include('templates/footer.php'); ?>




