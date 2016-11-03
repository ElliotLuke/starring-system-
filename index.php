<?php include_once("avg.php");?>
<!doctype html>
<html>

    <head>
<title> Elliots Cook Book</title>
<script type="text/javascript">

</script>
</head>
<body>
<?php echo $display;?>
<div id ="ratings">
<strong>Rate this Recepe</strong>
<br/>
What would you rate this Recepe?
<br/>

<input type ="image" class="btns" id="rbl" src="image/starNorm.png" alt="star"
onmouseover="btnSwap(this.id);" onmouseout="btnSwap(this.id);"value="1" onclick"ratings('1');">
<input type "hidden" name="choice" id="1" value="1"> 
<input type ="image" class="btns" id="rb2" src="image/starNorm.png" alt="star"
onmouseover="btnSwap(this.id);" onmouseout="btnSwap(this.id);"value="2" onclick"ratings('2');">
<input type "hidden" name="choice" id="2" value="2"> 
<input type ="image" class="btns" id="rb3" src="image/starNorm.png" alt="star"
onmouseover="btnSwap(this.id);" onmouseout="btnSwap(this.id);"value="3" onclick"ratings('3');">
<input type "hidden" name="choice" id="3" value="3"> 
<input type ="image" class="btns" id="rb4" src="image/starNorm.png" alt="star"
onmouseover="btnSwap(this.id);" onmouseout="btnSwap(this.id);"value="4" onclick"ratings('4');">
<input type "hidden" name="choice" id="4" value="4"> 
<input type ="image" class="btns" id="rb5" src="image/starNorm.png" alt="star"
onmouseover="btnSwap(this.id);" onmouseout="btnSwap(this.id);"value="5" onclick"ratings('5');">
<input type "hidden" name="choice" id="5" value="5"> 

<br/>
<br/>
<strong><?php echo $ rating; ?></strong>
<div id="status"></div>
</div>
<br/>
<br/>
<br/>
</body>
</html>



