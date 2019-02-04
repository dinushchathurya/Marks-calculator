
<html>
<head>
<meta charset="utf-8">
<title>Marks Calculator</title>
</head>

<body>
    <?php
    //get the name from 
	$name=$_REQUEST["uname"];
	$s1=$_REQUEST["sub1"];
	$s2=$_REQUEST["sub2"];
	echo "<h3>Name: $name</h3>";
	$sum=$s1+$s2;
	$avg=$sum/2;
	echo "Total Marks: $sum <br>";
	echo "Average Marks: $avg <br>";
	if($avg >= 50)
		echo "<b>Status : You have Passed</b>";
	else
		echo "<b>Status : You have failed</b>"; ?>

</body>
</html>