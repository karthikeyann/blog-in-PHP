<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Trying the Blog!</title>
</head>

<body>
 <h1>Start New Tag</h1>
<?php

$fp=fopen("info.txt","r");
$info=fread($fp,1024);
fclose($fp);
$info=explode(":",$info);

if($_POST['action']=="create")
{
if(!file_exists($_POST['tag']))
{
$tag=$_POST['tag'];
mkdir($tag,0777);
$info[1]=$info[1].",".$tag;
$replace = $info[0].":".$info[1].":".$info[2];
$fp=fopen("info.txt","w");
fwrite($fp,$replace);
fclose($fp);
$fp=fopen($tag."\info.txt","w");
fwrite($fp,"0");
fclose($fp);
echo "Success<br>";
echo "Available Tags : ".$info[1]."<br>";
}
else
echo "Directory or file already Exists<br>";

echo "<a href=\"newtag.php\" >Create New Tag</a><br>";
}
else
{
echo "Available Tags : ".$info[1]."<br>";
 ?>
 <form action="newtag.php" method="post">
 <input type="text" name="tag"  />
 <input type="submit" name="action" value="create" />
 </form>
 <?
}
?>

</body>

</html>