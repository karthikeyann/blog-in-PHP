 <?php echo $WEBBODY;
    $id=$_GET['id'];
	if($id)
	{
    $pos=explode("-",$id);
    $fp=fopen($pos[0]."//".$pos[1].".txt","r");
    $content=fread($fp,10240);
    $content=explode("|",$content);
	//$content[2]=htmlentities($content[2]);
    //$content[3]=htmlentities($content[3]);
   fclose($fp);
   }
   else
   {
	echo "<script> location.href = \"index.php\"</script><a href=\"\index.php\"> Go Home </a>"; /* Redirect browser */
	exit;
   }
    ?>
    <center><font color="#0000FF" STYLE="font-size:15pt" ><a href="show.php?id=<? echo $id."\">".$content[1];?></a></font></center><br>

    <p><font size=2 face="arial,helvetica" STYLE="font-size:10pt" color="#000000"><? echo $content[2];?></p></font><br />

    <p><font size=2 face="arial,helvetica" STYLE="font-size:10pt" color="#000000"><? echo $content[3]; ?></p></font><br>

    <br><table><tr><td><a href="<?echo $_SERVER['PHP_SELF']."?id=".$id."&add=1#add"; ?>" > Add Comment </a><br></td><td width="40%"><font color="#FF0000"> Post no : <?echo $content[0]; ?>
    <br> Posted&nbsp;at&nbsp;<? echo $content[4]; ?>
    <br> <? echo substr_count($content[5],"#"); ?> comments</font></td></tr>
	<tr>
	 <td>
	 <? if($content[5])
		{
		$content[5]=explode("#",$content[5]);
		foreach($content[5] as $val)
		{$val=explode("£",$val);
		echo "<u>".$val[0]."</u>: ".$val[1]."<br>";
		}
		}
		?>
	 </td>
	 <td></td>
	</tr>
	<tr><td>
	<? if($_GET['add']==1)
	{?>
	<form method="get" action="show.php" id="add">
	Name:<input type="text" name="name" size="93"/><br>
	Comment:<textarea rows="10" cols="70" name="com" ></textarea>
	<input type="hidden" name="id" value="<?echo $id;?>"/><br>
	<input type="submit" name="add" value="comment" />
	</form>
	<? }
	if($_GET['add']=="comment" && !empty($name) && !empty($com))
	{
	include("functions.php");
	$fp=fopen($pos[0]."//".$pos[1].".txt","a");
	$com = stripslashes($com);
	//$com = nl2br($com);
	$com   = myformat($com);
	fwrite($fp,"#".$name."£".$com);
    fclose($fp);
	echo "<u>".$name."</u>: ".$com."<br>";
	}
	?></td>
	</tr>
	</table>