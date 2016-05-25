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
        <p class="h4 top100"><time>00:00</time></p>


            <a href="uservote.php"><img class="knopwhist"src="images/whis.svg"></a>
    </div>
    
    <div class="container center">  
                <div class="row">
                    <div class="col-xs-2"></div>
                <div class="col-xs-4"><input type="button" value="<?php echo 2?>" name="red" id="red" class="scard-red" /></div>
                <div class="col-xs-4"><input type="button" value="<?php echo 4 ?>" name="yellow" id="yellow" class="scard-yellow" /></div>
                    <div class="col-xs-2"></div>
        </div>
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



