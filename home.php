<?php

	require_once("classes/session.php");
	
	require_once("classes/user.class.php");

	$auth_user = new User();
	
	$user_id = $_SESSION['session'];
	
	$statement = $auth_user->runQuery("SELECT * FROM db_user WHERE id=:id");
	$statement->execute(array(":id"=>$user_id));
	
	$userRow=$statement->fetch(PDO::FETCH_ASSOC);

?>
<?php include('templates/header.php') ?>

<div class="clearfix"></div>
    	
    
<div class="container-fluid" style="margin-top:80px;">
	
    <div class="container">


    <p class="h4">Wedstrijden</p> 

    <div>

        <div class="container center">      
            <div class="row light">

                <a class="btn btn-club" href="timeline.php" role="button">
                <div class="col-xs-5 col-md-5 col-lg-5">
                <img src="images/brugge.png" class="logoklein"> <br><p class="right">Club Brugge</p>
                </div>
                
                <div class="col-xs-2 col-md-2 col-lg-2">
                <p class="right">VS</p>
                </div>
                
                <div class="col-xs-5 col-md-5 col-lg-5">
                <img src="images/and.png" class="logoklein"> <p class="right">Anderlecht</p>
                </div>
            </a>
            
            </div>

        </div>     

    </div>

    </div>

</div>

</body>
</html>