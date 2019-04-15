<?php
if($_GET["i"]){
$i = $_GET["i"];
$b = "";
while ($i != 0) {
    $b = ($i % 2) . $b;
    $i = (int) floor($i / 2);
}
echo '10 -> 2 <br/>';
echo $b;
exit();
}
?>	
<html>
<head>
Десятичного числа в двоичное
</head>
<body>
<form>
	Десятичного числа
	<input type="text" name="i"><br/>
	<input type="submit" name="submit">
</form>	

</body>
</html>