   <?php echo $WEBBODY;
          $fp=fopen("info.txt","r");
    $info=fread($fp,1024);
    fclose($fp);
    $info=explode(":",$info);
    $globalpostno=$info[0];
    $tags=explode(",",$info[1]);
//    $posts=explode(",",$info[2]);
    if(!isset($_GET['next']) || $_GET['next']==1)
    {
          $i=1;
          $limit=5;
    }
    else
    {
    $i=$_GET['next'];
    $limit=10;
    }
    $fp=fopen("reorderedposts.txt","r");
    for($count=1;$count < $i && $count!=$i;$count++)
    { $posts=fgets($fp,1024);
    }
    for( $count=$i;( $count<$i+$limit && !feof($fp) ); $count++)
    {  $posts=fgets($fp,1024);
       $posts=rtrim($posts);
       $pos=explode("-",$posts);
     if($posts!="")
     {
    $fp2=fopen($pos[0]."\\".$pos[1].".txt","r");
    $content=fread($fp2,10240);
    $content=explode("|",$content);
    $content[2]=nl2br($content[2]);
    fclose($fp2);

     ?>
    <center><font color="#0000FF" STYLE="font-size:15pt" ><a href="show.php?id=<? echo $posts."\">".$content[1]; ?></a></font></center><br>

    <font size=2 face="arial,helvetica" STYLE="font-size:10pt" color="#000000"><? echo $content[2]; ?></font>
    <table><tr><td width="50%">
    <font color="#FF0000" size="2" ><p align="left"> Posted&nbsp;at&nbsp;<? echo $content[4]; ?></p> </font> </td><td>
    <font color="#FF0000" ><p align="right"><? echo substr_count($content[5],"#"); ?> comments</p></font></td></tr></table><br>
    <?
    }
    }
    if($i==6)
    $prev=1;
    else
    $prev=$i-10;
      //$prev indicates orevious page
     //$i indicates next
    echo "Total No of Posts : ".$globalpostno;
    if(!feof($fp))
    echo "<br><a href=\"index.php?next=".$count."\" > Next 10 Posts </a>";
    if($i!=1)
     echo "<br><a href=\"index.php?next=".$prev."\" > Previous Page </a>";
    fclose($fp);

	 ?>