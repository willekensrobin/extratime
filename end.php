<?php 
include('classes/userauth.class.php');
//include('classes/vote.class.php');

//$vote = new Vote();

//if(!empty($_POST))
//{
//    try
//    {
//        if(isset($_POST['red1']))
//        {
//          $vote->Red1 = $_POST['red1'];
//            $vote->Red1 = 1;
//        }
//        else if(isset($_POST['yellow1']))
//        {
//          $vote->Yellow1 = $_POST['yellow1'];
//            $vote->Yellow1 = 1;
//        }
//        else if(isset($_POST['red2']))
//        {
//          $vote->Red2 = $_POST['red2'];
//            $vote->Red2 = 1;
//        }
//        else if(isset($_POST['yellow2']))
//        {
//          $vote->Yellow2 = $_POST['yellow2'];
//            $vote->Yellow2 = 1;
//        }
//          
//        $vote->vote();
//    }
//    catch(PDOException $e)
//    {
//		echo $e->getMessage();
//    }
//}
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

<script type="text/javascript">

$(document).ready(function(){

$("#page2").hide();
$("#page").show();

$('.knopwhist').click(function(){
    $("#page").hide();    
    $("#page2").slideToggle();
});

$('#red-card').click(function(){
    $("#page2").hide();    
    $("#page").slideToggle();
});

$('#red-card2').click(function(){
    $("#page2").hide();    
    $("#page").slideToggle();
});

$('#yellow-card').click(function(){
    $("#page2").hide();    
    $("#page").slideToggle();
});
    
$('#yellow-card2').click(function(){
    $("#page2").hide();    
    $("#page").slideToggle();
});

$('#red-card').click( function() {
    var counter = $('#red1').val();
    counter++ ;
    $('#red1').val(counter);
});

$('#red-card2').click( function() {
    var counter = $('#red2').val();
    counter++ ;
    $('#red2').val(counter);
});

$('#yellow-card').click( function() {
    var counter = $('#yellow1').val();
    counter++ ;
    $('#yellow1').val(counter);
});

$('#yellow-card2').click( function() {
    var counter = $('#yellow2').val();
    counter++ ;
    $('#yellow2').val(counter);
});
    
});

</script>
<style type="text/css">
 #share-buttons{
    bottom: 0;

    display: block;
    width: 75%;
position: fixed;
left: 50%;
margin-left: -37.5%;
}
#share-buttons img {
width: 80px;
padding: 15px;
border: 0;
box-shadow: 0;
display: inline;
    
}
 
</style>
<div id="page">
   
    <div class="header">
            <img class="back" src="images/back.svg" alt=""onclick="history.go(-1);">

        <a href="#menu"></a>
        <div class="logo"></div>
    </div>
        
    <div class="content">
        

<p class="h5 top75"><time>90:00</time></p>

            
    </div>
    
    <div class="container center top50">  
         <div class="row">
            <div class="col-xs-5"><img class="logoklein" src="uploads/and.png"/ alt=""><br></div>
            <div class="col-xs-2"><p class="right vs">VS</p></div>    
            <div class="col-xs-5"><img class="logoklein" src="uploads/brugge.png" alt=""></div>
        </div>
        
        <div class="row">
            <div class="col-xs-5"><input type="button" value="" name="red1" id="red1" class="scard-red" /><input type="button" value="" name="yellow1" id="yellow1" class="scard-yellow" /></div>
            <div class="col-xs-2"></div>
            <div class="col-xs-5"><input type="button" value="" name="red2" id="red2" class="scard-red" /><input type="button" value="" name="yellow2" id="yellow2" class="scard-yellow" /></div>
 <div id="share-buttons">
    
    
 <p class="h4">Deel met je vrienden</p>
    <!-- Facebook -->
    <a href="http://www.facebook.com/sharer.php?text=Ik%20gaf%205%20rode%20kaarten&amp;hashtags=ExtraRef"" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
    
    <!-- Google+ -->
    <a href="https://plus.google.com/share?text=Ik%20gaf%205%20rode%20kaarten&amp;hashtags=ExtraRef"target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
    
    <!-- Twitter -->
    <a href="https://twitter.com/share?text=Ik%20gaf%205%20rode%20kaarten&amp;hashtags=ExtraRef" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>
    

</div>
        </div>
    </div>
    
</div>



<?php include('templates/footer.php'); ?>




