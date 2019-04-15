<?php
if($_GET["b"]){
$b = $_GET["b"];
$i = 0;
while ($b != "") {
    $i = $i * 2 + substr($b, 0, 1);
    $b = substr($b, 1);
}
echo "2 -> 10 <br/>";
echo $i;
exit();	
}
?>	
<html>
<head>
Двоичное	
</head>
<body>
<form>
	Двоичное числа
	<input type="text" name="b"><br/>
	<input type="submit" name="submit">
</form>	

</body>
</html>