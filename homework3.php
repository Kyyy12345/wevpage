<!--1번문제-->
<?php
$n = 30;
$sum = 0;
$prod = 1;
for($i=1;$i<=$n;$i++) {
    echo ("$i <br\>");
    $sum += $i;
    $prod *= $i;
}
echo "1부터 30까지의 합 = $sum <br\>";
echo "1부터 30까지의 곱 = $prod";
?>

<!--2번 문제-->

<?php
$n = 30;
for ($i=0; $i<$n; $i++) {
    $dada[$i] = rand(10, 100);
}
sort($dada);

echo "생성된 결과: ";
foreach ($dada as $value) {
    echo $value . " ";
}

echo "\n오름차순으로 정렬한 결과: ";
sort($dada);
foreach ($dada as $value) {
    echo $value . " ";
}
?>

<!--3번문제-->

<?php
$n = 100; // 입력받은 수
$f0 = 0; // 첫 번째 항
$f1 = 1; // 두 번째 항

echo "i\tfi\tfi+1\tfi+2/fi\n";
echo "1\t1\t1\t\n";
echo "2\t1\t2\t\n";

for ($i=3; $i<=$n; $i++) {
    $f2 = $f1 + $f0; // 다음 항 계산
    echo "$i\t$f1\t$f2\t" . number_format($f2/$f1, 6) . "\n"; // 출력
    $f0 = $f1; // 다음 항 계산을 위해 이전 항을 저장
    $f1 = $f2; // 다음 항 계산을 위해 현재 항을 저장
}
?>

<!--4번 문제--> 

<!DOCTYPE html>
<html>
<head>
	<title>삼각형 면적 계산기</title>
</head>
<body>
	<h1>삼각형 면적 계산기</h1>
	<form method="post" action="">
		<label for="width">밑변:</label>
		<input type="number" id="width" name="width"><br><br>
		<label for="height">높이:</label>
		<input type="number" id="height" name="height"><br><br>
		<input type="submit" name="submit" value="계산">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$width = $_POST['width']; // 밑변 입력받기
		$height = $_POST['height']; // 높이 입력받기
		$area = $width * $height / 2; // 면적 계산
		echo "<p>밑변이 $width이고 높이가 $height인 삼각형의 면적은 $area 입니다.</p>";
	}
	?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>직사각형 면적 계산기</title>
</head>
<body>
	<h1>직사각형 면적 계산기</h1>
	<form method="post" action="">
		<label for="width">가로:</label>
		<input type="number" id="width" name="width"><br><br>
		<label for="height">세로:</label>
		<input type="number" id="height" name="height"><br><br>
		<input type="submit" name="submit" value="계산">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$width = $_POST['width']; // 가로 입력받기
		$height = $_POST['height']; // 세로 입력받기
		$area = $width * $height; // 면적 계산
		echo "<p>가로가 $width이고 세로가 $height인 직사각형의 면적은 $area 입니다.</p>";
	}
	?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>원 면적 계산기</title>
</head>
<body>
	<h1>원 면적 계산기</h1>
	<form method="post" action="">
		<label for="radius">반지름:</label>
		<input type="number" id="radius" name="radius"><br><br>
		<input type="submit" name="submit" value="계산">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$radius = $_POST['radius']; // 반지름 입력받기
		$pi = 3.14; // pi 값 설정
		$area = $pi * pow($radius, 2); // 면적 계산
		echo "<p>반지름이 $radius인 원의 면적은 $area 입니다.</p>";
	}
	?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>직육면체 체적 계산기</title>
</head>
<body>
	<h1>직육면체 체적 계산기</h1>
	<form method="post" action="">
		<label for="width">가로:</label>
		<input type="number" id="width" name="width"><br><br>
		<label for="length">세로:</label>
		<input type="number" id="length" name="length"><br><br>
		<label for="height">높이:</label>
		<input type="number" id="height" name="height"><br><br>
		<input type="submit" name="submit" value="계산">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$width = $_POST['width']; // 가로 입력받기
		$length = $_POST['length']; // 세로 입력받기
		$height = $_POST['height']; // 높이 입력받기
		$volume = $width * $length * $height; // 체적 계산
		echo "<p>가로가 $width, 세로가 $length, 높이가 $height인 직육면체의 체적은 $volume 입니다.</p>";
	}
	?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>원통 체적 계산기</title>
</head>
<body>
	<h1>원통 체적 계산기</h1>
	<form method="post" action="">
		<label for="radius">반지름:</label>
		<input type="number" id="radius" name="radius"><br><br>
		<label for="height">높이:</label>
		<input type="number" id="height" name="height"><br><br>
		<input type="submit" name="submit" value="계산">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$radius = $_POST['radius']; // 반지름 입력받기
		$height = $_POST['height']; // 높이 입력받기
		$volume = pi() * pow($radius, 2) * $height; // 체적 계산
		echo "<p>반지름이 $radius이고, 높이가 $height인 원통의 체적은 $volume 입니다.</p>";
	}
	?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>구 체적 계산기</title>
</head>
<body>
	<h1>구 체적 계산기</h1>
	<form method="post" action="">
		<label for="radius">반지름:</label>
		<input type="number" id="radius" name="radius"><br><br>
		<input type="submit" name="submit" value="계산">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$radius = $_POST['radius']; // 반지름 입력받기
		$volume = 4/3 * pi() * pow($radius, 3); // 체적 계산
		echo "<p>반지름이 $radius인 구의 체적은 $volume 입니다.</p>";
	}
	?>
</body>
</html>

<!--5번문제--><?php
 $year = 2001;
 $month = 3;
 list($tday, $dday) = split('[ ]',
         date('t w',mktime(0,0,1,$month,1,$year)));
 ?>

 현재 <?=$year?>년 <?=$month?>월 입니다.
 <table width='400' border=1 cellspacing=0 cellpadding=0>
 <tr>
 <td>일<td>월<td>화<td>수<td>목<td>금<td>토
 <tr>

 <?php
 $col = 0;
 $vtd = "<td>&nbsp;\n";

 for($i = 0; $i < $dday; $i++){
      echo $vtd;
      $col++;
 }

 for($i = 1; $i <= $tday; $i++){
      echo "<td>${i}\n";
      $col++;

      if(($col == 7) && ($col !== $tday)){
           echo "<tr>\n";
           $col = 0;
      }
 }

 while($col > 0 && $col < 7){
      echo $vtd;
      $col++;
 }
 ?>
 </table>
