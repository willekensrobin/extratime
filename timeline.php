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
        
    <div class="col-xs-12">
    <?php 
    //$v= $votes->fetch(PDO::FETCH_ASSOC); 
    //
    //echo "Rood " . count($v['red']) . "Geel" . count($v['yellow']) . "Goal" . count($v['goal']) . "Buitenspel" . count($v['offside']); 
    
    ?>
    
    </div>

    
</div>
</div>

<?php include('templates/footer.php'); ?>




