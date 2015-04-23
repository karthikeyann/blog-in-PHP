<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Trying the Blog!</title>
</head>

<body>

<?php
echo("Welcome to Try Blog<br> Let's Try one more time..." );
$date_array = getdate();
echo $date_array['mday'].".".$date_array['mon'].".".$date_array['year'].",".$date_array['hours'].":".$date_array['minutes'].":".$date_array['seconds']."#";
$dir="Windows";
$file=3;
if(!file_exists($dir))
mkdir($dir,0777);
else
echo "directory exists already";
$fp=fopen($dir."\\".$file.".txt","w");
fwrite($fp,"karthi keyan is trying something");
fclose($fp);
echo "Success";
?>

</body>

</html>