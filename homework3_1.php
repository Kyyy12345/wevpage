<!DOCTYPE html>
<html>
<head>

<!--Q1-->
<?php
$n=30;
$sum=0;
$prod=1;
for($i=1;$i<=$n;$i++) {
    echo ("$i <br>");
    $sum+=$i;
    $prod*=$i;
}
echo "1부터 30까지의 합 = $sum";<br>
echo "1부터 30까지의 곱 = $prod";<br>
?>
</head>
</html>