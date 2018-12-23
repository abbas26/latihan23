<!DOCTYPE html>
<html>
<head>
	<title>Nilai Terbesar</title>
</head>
<body>
	<form action ="" method="POST">
		<label for = "input">variabel a</label>
		<input type="number" size="30" name="variabel_a" id="input"><br><br>
		<label for = "input">variabel b</label>
		<input type="number" size="30" name="variabel_b" id="input"><br><br>
		<label for = "input">variabel c</label>
		<input type="number" size="30" name="variabel_c" id="input"><br><br>
		<input type="submit" value="Terbesar">
		<input type="reset" value="Batal">

	</form>
	<br>

<?php  
$a=$_POST['variabel_a'];
$b=$_POST['variabel_b'];
$c=$_POST['variabel_c'];
$terbesar=max ($a, $b, $c);
echo "variabel a = " . $a . "<br>";
echo "variabel b = " . $b . "<br>";
echo "variabel c = " . $c . "<br>";
echo "variabel dengan nilai terbesar = ";
if($terbesar== $a )
{
	echo "Variabel a";
} elseif ($terbesar== $b) {
	echo "Variabel b";
}elseif ($terbesar== $c) {
	echo "Variabel c";
}


?>
</body>
</html>