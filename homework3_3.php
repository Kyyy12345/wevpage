<?php 
$factorial=1;
for($i=1;$i<=30;$i++) {
    $factorial *= $i;
}
?>
<br>
<?php
$prev=0;
$current =1;

for($i=1; $i<=6; $i++) {
    $ratio = ($prev == 0 && $i <= 2) ? 1 : $current / $prev;
    echo $i." ".$current." ".$ratio.;
    $next = $prev + $current;
    $prev = $current;
    $current = $next;
}

?>