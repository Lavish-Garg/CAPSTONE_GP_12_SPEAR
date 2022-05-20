<?php

// Name of the file
$filename = 'project.sql';

// Connect to MySQL server
$link=mysqli_connect("localhost","root","") or die('Error connecting to MySQL server: ' . mysqli_error());
$query1="Drop database project";
$query="Create database project";
mysqli_query($link,$query1);
mysqli_query($link,$query);

// Select database
mysqli_select_db($link,'project') or die('Error selecting MySQL database: ' . mysqli_error());

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysqli_query($link,$templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysqli_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
 echo "<center><h1>WELCOME TO VAPT SIMULATOR</h1><br>";
 echo '<body bgcolor="#F8F9F9"><center><h3>Database Has Been Created</h3><br><br>';
 echo '<a href="./index.php"><h2>Home</h2></a></center></body>';
?>