<?php 

include('classes/userauth.class.php');
include('classes/vote.class.php');

$vote = new Vote();

if(!empty($_POST))
{
    try
    {
        $vote->Red = $_POST['red'];
        $vote->Yellow = $_POST['yellow'];
        $vote->Goal = $_POST['goal'];
        $vote->Offside = $_POST['offside'];
        
        $vote->vote();
        $vote->redirect('timeline.php');
    }
    catch(PDOException $e)
    {
		echo $e->getMessage();
    }
}
?>
<?php include('templates/header.php');?>

<div id="page">
   
    <div class="header">
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
    <div class="container center">
           
            <form action="" method="post">
                <div class="col-xs-6 center"><input type="submit" value="" name="red" id="red" class="card-red" />  </div>
                <div class="col-xs-6"><input type="submit" value="" name="yellow" id="yellow" class="card-yellow" /></div>
                <div class="col-xs-6"><input type="submit" value="" name="goal" id="goal" class="card-goal" /> </div>
                <div class="col-xs-6"><input type="submit" value="" name="offside" id="offside" class="card-offside"/></div>
            </form>
        
    </div>
    
</div>

<?php include('templates/footer.php'); ?>



