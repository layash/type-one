<?php 
?>

<html>
    <title>test calculator</title>
    <head>
    </head>
<div>
<form method="POST" action="calc.php">
    <input type="number" name="first" id="a" placeholder="first number">
    <input type="number" name="second" id="b" placeholder="second number">
    <br>
    <div>
    <input type="radio" value="add"      name="cal"> add
    <input type="radio" value="subtract" name="cal"> subtract<br>
    <input type="radio" value="multiply" name="cal"> multiply
    <input type="radio" value="divide"   name="cal"> divison<br>
    </div>
	<input type="submit" name="submit" id="submit" value="calculate"/>
</form>
</div>
<div>
	<h3><?php if(@$_GET['msg']){
	echo $msg=$_GET['msg'];
// echo $msg;
}else{
	echo "nothing";
} ?></h3>
</div>
<h3></h3>
</html>
