<?php include('classes/userauth.class.php');?>
<?php include('templates/header.php');?>

<div id="page">
   
    <div class="header">
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
    <div class="content"><br><br>
        <div class="circular top100"></div>
        

            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Gebruikersnaam" value="<?php echo $userRow['username']; ?>" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $userRow['email']; ?>" />
            </div>
            <div class="form-group">
            	<input type="password" class="form-control" name="password" placeholder="Wijzig wachtwoord" />
            </div>
                        
            <div class="clearfix"></div>
            <br>

            <div class="form-group center top10">

            	<button type="submit" class="btn btn-logsign" name="btn-signup">
                	BEWAAR
                </button>        
        
        

    </div>

    
</div>


<?php include('templates/footer.php'); ?>
