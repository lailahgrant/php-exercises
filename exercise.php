<!DOCTYPE html>
<html>
<body>

<?php
$r=7;
echo "Hello world!<br>";
echo "Area of a circle using pi()<br>";
echo (pi()*$r*$r);
echo "<br/>";

echo "Random Number between 1000 and 100,000 <br/>";
function randNum($x, $y){
	echo (rand($x, $y));
}
echo randNum(1000, 100000);

?> 

</body>
</html>
