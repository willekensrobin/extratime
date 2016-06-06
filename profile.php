<?php
include('classes/userauth.class.php');
include('classes/edit.class.php');
include('uploadprofpic.php');

$user = new Edit();

if(!empty($_POST))
{
    $user->Username = $_POST['username'];
    $user->Email = $_POST['email'];
    $user->Password = $_POST['password'];  
    $user->Picture = strip_tags(($_FILES['picture']["name"]));
        
    $user->editAccount();
}


?>
<?php 
if($userRow['type'] == 1)
{
    include('templates/adminheader.php');
}
else if($userRow['type'] == 0)
{
    include('templates/header.php');
}
?>

<div id="page">
   
    <div class="header">
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
    <button onclick="history.go(-1);">Terug</button>
    
    <div class="content"><br><br>
        <div><img class="circular" src="uploads/<?php echo $userRow['picture']; ?>"/ alt=""></div>
        
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Gebruikersnaam" value="<?php echo $userRow['username']; ?>" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $userRow['email']; ?>" />
            </div>
            <div class="form-group">
            	<input type="password" class="form-control" name="password" placeholder="Wijzig wachtwoord"  />
            </div>
                       
            <div class="form-group">
            <input type="file" class="form-control noline" name="picture" id="file" placeholder="" value="" /><br>
            <label for="file" class="upload"><img class="iconmenu" src="images/upload.svg"> Profielfoto</label>
            </div>
                        
            <div class="clearfix"></div>
            <br>

            <div class="form-group center top10">

            	<button type="submit" class="btn btn-logsign" name="btn-signup">
                	BEWAAR
                </button>        
        </form>
        

    </div>

    
</div>


<?php include('templates/footer.php'); ?>
