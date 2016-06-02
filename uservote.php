<?php 

include('classes/userauth.class.php');
include('classes/vote.class.php');

$vote = new Vote();

if(!empty($_POST))
{
    try
    {
        if(isset($_POST['red1']))
        {
          $vote->Red1 = $_POST['red1'];
            $vote->Red1 = 1;
        }
        else if(isset($_POST['yellow1']))
        {
          $vote->Yellow1 = $_POST['yellow1'];
            $vote->Yellow1 = 1;
        }
        else if(isset($_POST['red2']))
        {
          $vote->Red2 = $_POST['red2'];
            $vote->Red2 = 1;
        }
        else if(isset($_POST['yellow2']))
        {
          $vote->Yellow2 = $_POST['yellow2'];
            $vote->Yellow2 = 1;
        }
          
        $vote->vote();
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




