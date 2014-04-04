<html>
<head>
<style type="text/css">
body {
	font-family:"Courier New", Courier, monospace;
	font-size:18px;
}
</style>
</head>
<body>
<form name="form1" method="post" action="star.php">
  <label>
  <input name="star_size" type="text" id="star_size">
  </label>
  <label>
  <input type="submit" name="Submit" value=" Create ">
  </label>
</form>
<?php

$n=$_POST["star_size"];;

for ($i = 1; $i <= $n; $i++)
{
	for ($j = 1; $j <= ($n * (2)) - $i; $j++)
	{
		echo ("&nbsp;");
	}
	for ($k = 1; $k <= (2 * $i) - 1; $k++)
	{
		echo ("*");

	}
	echo "<br>";
}
for ($i = 1; $i <= ($n/2)+2; $i++)
{
	for ($j = $n; $j >= $n - $i + 1; $j--)
	{
		echo ("&nbsp;");
		$o = $n - $i + 1;
	}
	for ($l = (($k - 1) * 2); $l >= (2 * $i) - 1; $l--)
	{
		echo ("*");
		$m = $k;
	}
	echo "<br>";

}
for ($i = 1; $i <= $n-1; $i++)
{
	for ($j = 1; $j <= ($n) - $i; $j++)
	{
		echo ("&nbsp;");
	}
	for ($j = 1; $j <= ($n) - $i; $j++)
	{
		echo ("*");
	}
	for ($k = 1; $k <= (2 * $i); $k++)
	{
		echo ("&nbsp;&nbsp;");

	}
	for ($j = 1; $j <= ($n) - $i; $j++)
	{
		echo ("*");
	}
	echo "<br>";
}
?>
</body>
</html>
