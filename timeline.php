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

<script type="text/javascript">

$(document).ready(function(){

$("#page2").hide();
$("#page").show();

$('.knopwhist').click(function(){
    $("#page").hide();    
    $("#page2").slideToggle();
});

$('.btnBack').click(function(){
    $("#page2").hide();    
    $("#page").slideToggle();
});

});

</script>

<div id="page">
   
    <div class="header">
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
    <div class="content">
        

<p class="h5 top75"><time>00:00</time></p>

            <a href="#"><img class="knopwhist"src="images/whis.svg"></a>
    </div>
    
    <div class="container center top50">  
         <div class="row">
            <div class="col-xs-5"><img class="logoklein" src="uploads/and.png"/ alt=""><br></div>
            <div class="col-xs-2"><p class="right vs">VS</p></div>    
            <div class="col-xs-5"><img class="logoklein" src="uploads/brugge.png" alt=""></div>
        </div>
        
        <div class="row">
                <div class="col-xs-5"><input type="button" value="<?php echo 2?>" name="red1" id="red1" class="scard-red" /><input type="button" value="<?php echo 4 ?>" name="yellow1" id="yellow1" class="scard-yellow" /></div>
                <div class="col-xs-2"></div>
                <div class="col-xs-5"><input type="button" value="<?php echo 2?>" name="red2" id="red2" class="scard-red" /><input type="button" value="<?php echo 4 ?>" name="yellow2" id="yellow2" class="scard-yellow" /></div>
        </div>
    </div>
    
</div>

<div id="page2">
   
    <div class="header">
        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
    
    <a href="#" class="btnBack">X</a>
    
    <div class="container center top150">
            <div class="col-xs-5"><img class="logoklein" src="uploads/and.png"/ alt=""><br></div>
            <div class="col-xs-2"><p class="right vs">VS</p></div>    
            <div class="col-xs-5"><img class="logoklein" src="uploads/brugge.png" alt=""></div>
            <form action="" method="post">
                <div class="col-xs-5 "><input type="submit" value="" name="red1" id="red1" class="scard-red" /><input type="submit" value="" name="yellow1" id="yellow1" class="scard-yellow" />  </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-5 "><input type="submit" value="" name="red2" id="red2" class="scard-red" /><input type="submit" value="" name="yellow2" id="yellow2" class="scard-yellow" />  </div>
            </form>
        
    </div>
    
</div>

<?php include('templates/footer.php'); ?>
<script>
    var p = document.getElementsByTagName('p')[0],
    start = document.getElementById('start'),
    stop = document.getElementById('stop'),
    clear = document.getElementById('clear'),
    seconds = 0, minutes = 0,
    t;

function add() {
    seconds++;
    if (seconds >= 60) {
        seconds = 0;
        minutes++;
        if (minutes >= 60) {
                clearTimeout(t);
        }
    }
    
    p.textContent = (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);

    timer();
}
function timer() {
    t = setTimeout(add, 1000);
}
timer();


/* Start button */
start.onclick = timer;

/* Stop button */
stop.onclick = function() {
    clearTimeout(t);
}

/* Clear button */
clear.onclick = function() {
    p.textContent = "00:00";
    seconds = 0; minutes = 0;
}</script>



