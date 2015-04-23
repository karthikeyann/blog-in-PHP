 <?php include("top.html"); //template's top part ?>
<?php echo $WEBBODY;
    $fp=fopen("info.txt","r");
    $info=fread($fp,1024);
    fclose($fp);
    $info=explode(":",$info);
    $globalpostno=$info[0];
    $tags=explode(",",$info[1]);
	if($_GET['show'])
	{$i=0;
	foreach($tags as $tag)
	if($_GET['show']==$tag)
	$i=1;
	if($i)
	{
		$fp=fopen($_GET['show']."\info.txt","r");
        $i=fread($fp,1024);
        fclose($fp);
		while($i)
		{
		$fp=fopen($_GET['show']."\\".$i.".txt","r");
		$content=fread($fp,10240);
		$content=explode("|",$content);
		fclose($fp);
		echo "<a href=\"show.php?id=$show-$i\">$content[1]</a><p></p>";
		$i--;
		}
	}
	}
	else
	foreach($tags as $tag)
	echo "<a href=\"topics.php?show=$tag\">$tag</a><p></p>";
?>
<head>
		<title> Techbird .. fly through technology..</title>
		<meta name="keywords" content="PIC, pic, electronics, electronic, circuit, project, diagram, windows, software, basic, basics, fundamentals">
		<meta name="description" content="Tech updates at your Doorstep">
	   </head>
	   <?php include("bottom.html"); //template's bottom part ?>