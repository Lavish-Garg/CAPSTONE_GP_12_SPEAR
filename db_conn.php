<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,'project');

{
echo'<body bgcolor="#ff6666"><br><br><center>
<a href="reset.php"><h3>Create Database</h3></a></center><br><br></body>';
exit("<center><b>Create Database First</b></center>");
}

?>

<html>
<head>
<title>VAPT SIMULATOR</title>
		
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/font.css">
</head>
<body>
</script>
<div class = "page">
			
<div class="x">
	<form action="reset.php">
		<input type="submit" value="Reset Database">
	</form>
</div>
</body>
</html>