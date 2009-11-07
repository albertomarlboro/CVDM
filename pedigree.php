<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="generator" content="PSPad editor, www.pspad.com">
<title></title>

<script type="text/JavaScript" src="js/jquery.corner.js"></script> 
<script>
$(function(){
    $(".bis,.avo,.pai,.mae,.dogName").corner("10px");
})
</script>
</head>
<style>
.bis,.avo,.pai,.mae,.dogName{
    background:#DE137C;
    width:400px;
    font-size:1em;
    height:1.8em;
    line-height:1.8em;
    display:block;
    text-align:left;
    padding-left:30px;
    vertical-align:middle;
    clear:right;
    margin-top:4px;
    margin-bottom:4px;
    border:0;
    font-size:12px;
    color:#fff;
    font-family:arial,helvetica,sans-serif;
    font-weight:bold;
    text-transform:uppercase;    
}
.dogName{
    background:#079C13;
}
.bis{
    margin-left:250px;
}
.avo{
    margin-left:150px;
}
.mae{
    margin-left:0px;
}
</style>
<body>
<?php

$dog = array("PAR'DELLAS IRENE"=>array("p"=>"CH.; GR CH.; CH.PAN.; CH.INT.;PAR’DELLAS SEBASTIAN","pp"=>"CH.AM.;CH.CAN.;CH.;GR.CH.;CH.PAN.;YORKBORO JUST A HANDSOME GUY","mp"=>"pai avo mae","ppp"=>"psai do psai do psai","mpp"=>"mae do pai do pai","pmp"=>"pai da mae do pasi","mmp"=>"mae da mae do pai","m"=>"DAYSY BLUE POINT","pm"=>"HECTOR MONTCLAIR BLUE POINT","mm"=>"FERNANDA BLUE POINT","ppm"=>"pai do pai da mae","mpm"=>"mae do pai da mae","pmm"=>"pai da mae da mae","mmm"=>"mae da mae da mae"));

$nome = stripslashes($_REQUEST['nome']);
?>
<div class="dogName"><?=$nome?></div>
<div class="bis"><?=$dog[$nome]['ppp'];?></div>
<div class="avo"><?=$dog[$nome]['pp'];?></div>
<div class="bis"><?=$dog[$nome]['mpp'];?></div>
<div class="pai"><?=$dog[$nome]['p'];?></div>
<div class="bis"><?=$dog[$nome]['pmp'];?></div>
<div class="avo"><?=$dog[$nome]['mp'];?></div>
<div class="bis"><?=$dog[$nome]['mmp'];?></div>


<div class="bis"><?=$dog[$nome]['ppm'];?></div>
<div class="avo"><?=$dog[$nome]['pm'];?></div>
<div class="bis"><?=$dog[$nome]['mpm'];?></div>
<div class="mae"><?=$dog[$nome]['m'];?></div>
<div class="bis"><?=$dog[$nome]['pmm'];?></div>
<div class="avo"><?=$dog[$nome]['mm'];?></div>
<div class="bis"><?=$dog[$nome]['mmm'];?></div>

</body>
</html>
