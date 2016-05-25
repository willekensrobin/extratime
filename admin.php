<?php include('classes/userauth.class.php');?>
<?php include('templates/header.php');?>

<div id="page">
    <div class="header">
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
<div class="clearfix"></div>
   
    <div class="content">

    <p class="h4 top100">Wedstrijden</p>
     
    <a href="addgame.php">Wedstrijd toevoegen</a>
    
    <a href="timeline.php">
        <div class="row light">

        <div class="col-xs-5">
        <img src="images/brugge.png" class="logoklein"> <br><p class="right">Club Brugge</p>
        </div>
                
        <div class="col-xs-2">
        <p class="right">VS</p>
        </div>
                
        <div class="col-xs-5">
        <img src="images/and.png" class="logoklein"> <p class="right">Anderlecht</p>
        
        </div>
            
        <a href="editgame.php">Aanpassen</a>
                
        </div>
    </a>   

    </div> 
</div>  

<?php include('templates/footer.php'); ?> 