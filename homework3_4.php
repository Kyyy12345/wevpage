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
