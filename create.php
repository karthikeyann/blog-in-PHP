<html>
<title>Editing a file</title>
<body>
<center>
<table>
<tr><td>
<h2> NEW POST </h2><br />
<?php
include("functions.php"); 
$fp=fopen("info.txt","r");
$info=fread($fp,1024);
$position=strpos($info,":");
$replace=$info;
$info=explode(":",$info);
$globalpostno=$info[0]+1;
$tags=explode(",",$info[1]);
echo "Global Post No:".$globalpostno;
fclose($fp);
if(!isset($_POST['save']) || isset($_GET['newpost']))
{
?>
<br />
<form method="post" action="create.php">
<table>
<tr><td>Post Topic: </td><td><input type="text" name="topic" size="93"/></td></tr>
<tr><td>Summary:    </td><td><textarea rows="10" cols="70" name="summary" ></textarea></td></tr>
<tr><td>Content:    </td><td><textarea rows="20" cols="70" name="content" ></textarea></td></tr>
<tr><td>Tag:        </td><td><select name="tag" >
<?php foreach ($tags as $c)
echo "<option value=\"".$c."\" >".$c."</option>";
?>
</select>
<input type="submit" name="save" value="save" /></td></tr> </table>
</form>
<?php
}
if(isset($_POST['save']) && $_POST['save'] == "save")
		{
        echo "winner ";
        $topic   = stripslashes($_POST['topic']);
        $summary = stripslashes($_POST['summary']);
        $content = stripslashes($_POST['content']);
		$summary = nl2br($summary);
		$content = nl2br($content);
		$topic   = myformat($topic);
		$summary = myformat($summary);
		$content = myformat($content);
	
        $tag = stripslashes($_POST['tag']);
        if(!empty($topic) && !empty($summary) && !empty($content))
        {
        /// read the tag's postno
        $fp=fopen($tag."\info.txt","r");
        $info=fread($fp,1024);
        $postno=$info+1;
        fclose($fp);
        /// write the tag's postno
        $fp=fopen($tag."\info.txt","w");
        fwrite($fp,$postno);
        fclose($fp);
        /// create the post in the tag folder
        $file=$tag."\\".$postno.".txt";
			$fp=fopen($file,"w");
			fwrite($fp,$globalpostno);
            fwrite($fp,"|".$topic);
            fwrite($fp,"|".$summary);
            fwrite($fp,"|".$content);
            $date_array = getdate();
            fwrite($fp,"|".$date_array['mday'].".".$date_array['mon'].".".$date_array['year'].",".$date_array['hours'].":".$date_array['minutes'].":".$date_array['seconds']."|");
			fclose($fp);
        /// write posts ordered and reverse ordered (ordered is helpful for "earlier posts at first")
            $fp=fopen("orderedposts.txt","a");
            fwrite($fp,$tag."-".$postno."\r\n");
            fclose($fp);
            $fp=fopen("reorderedposts.txt","r");
            $old=fread($fp,10240);
            fclose($fp);
            $fp=fopen("reorderedposts.txt","w");
            fwrite($fp,$tag."-".$postno."\r\n");
            fwrite($fp,$old);
            fclose($fp);
            ////////////////  updating the the last five posts and globalpostno at info.txt
            $fp=fopen("info.txt","r");
            $info=fread($fp,1024);
            fclose($fp);
            $info=explode(":",$info);
            $posts=explode(",",$info[2]);
            $info[2]=$tag."-".$postno.",".$posts[0].",".$posts[1].",".$posts[2].",".$posts[3];
            $replace = $globalpostno.":".$info[1].":".$info[2];
            $fp=fopen("info.txt","w");
            fwrite($fp,$replace);
            fclose($fp);
            echo "Total No of Posts : ".$globalpostno;
		}
        else echo "<br>Failure:some text field is Empty<br>";
        ?>
        <a href="create.php?newpost=1">New Post</a>
        <br />
        <h3 align="center" ><a href="index.php">View Blog</a></h3>
        <?
        }
		else
		echo "Does not Exist";
?>  </td></tr></table>
</center>
</body>
</html>