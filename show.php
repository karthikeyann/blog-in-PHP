	   <?php include("top.html"); //template's  top part?> 
	   <?php include("body_s.php"); //displays contents of post ?>
	   <head>
		<title>Techbird - <? echo $content[1]; ?></title>
		<meta name="keywords" content="<? echo $pos[0].", ".strtr($content[1]," ",", "); ?>">
		<meta name="description" content="<? echo $content[1]; ?>">
	   </head>
	   <?php include("bottom.html"); //tempate's  bottom part?>