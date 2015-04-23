<html>
<title>$WEBTITLE</title>
<style type="text/css">
td.on {
	font-family: Georgia, "Times New Roman", Times, serif;
	background-image: url(../images/menu_bg2.gif);
    background-position: center center;
	background-repeat: no-repeat;
}
td.off {
	font-family: Georgia, "Times New Roman", Times, serif;
	background-image: url(../images/menu_bg1.gif);
    background-position: center center;
	background-repeat: no-repeat;
}
.lin{
  text-align: left;
}
.rin{
  text-align: right;
}


</style>
<body bgcolor="#4c5656" background="background.gif" topmargin=15 leftmargin=0 >

<div align=left>

<center>
<!--------Table 1:- Main table-------->

<table width=600 cellpadding=0 cellspacing=0 border=0>

<tr>

  <td>



<!--------Table 2:- Main heading-------->

  <table width=600 cellpadding=0 cellspacing=0 border=0>

  <tr>
	<td width=600 valign=top align=center>
	<font size=5 face="arial,helvetica" STYLE="font-size:18pt" color="#333333">
        <b><i><?php $WEBTITLE="Try Blog"; echo $WEBTITLE; ?></i></b>
	</font>
	<br>
	<br>
        <img src="top_bar.gif" width=486 height=35 border=0 alt="Top Bar">
	</td>
  </tr>

  <tr>
	<td width=600 valign=top>&nbsp;
	</td>
<!--------End Table 2-------->
  </tr>
  </table>

<!--------Table 3:- Main Body-------->

  <table width=600 cellpadding=0 cellspacing=0 border=0>
  <tr>
	<td width=50 valign=top align=right>&nbsp;
	</td>
	<td width=500 valign=top align=center>

	<!--------Table 3.1:- First ROW Picture-------->

	<table width=500 cellpadding=0 cellspacing=0 border=0 >

	<tr>

	  <td width=56 valign=top align=center>&nbsp;
	  </td>
          <td valign=top align=center >

           <table>
           <tr>
		   <td width="151" height="32" class="off" onMouseOut="this.className='off'" onMouseOver="this.className='on'"><a href="index.php"><center>Home</center></a></td>
		   <td width="151" height="32" class="off" onMouseOut="this.className='off'" onMouseOver="this.className='on'"><a href="Aboutme.htm"><center>About me</center></a></td>
		   <td width="151" height="32" class="off" onMouseOut="this.className='off'" onMouseOver="this.className='on'"><a href="index.php"><center>Feedback</center></a></td>
		   <td width="151" height="32" class="off" onMouseOut="this.className='off'" onMouseOver="this.className='on'"><a href="Contact.php"><center>Contact</center></a></td>
           </tr>
           </table>
	      </td>

	  <td width=35 valign=top align=center>&nbsp;
	  </td>

	<!--------End Table 3.1-------->
	</tr>

	</table>

	<!--------Table 3.2:- Body Text-------->

	<table width=500 cellpadding=0 cellspacing=0 border=0>
	<tr>
	  <td width=500 valign=top align=center>&nbsp;
	  </td>
	</tr>
	<tr>
	  <td width=500 valign=top align=center>

       <?php include($_SERVER['DOCUMENT_ROOT'] . "/blog/body.php"); ?>
	  </td>
	</tr>
	<tr></tr>
	  <td width=500 valign=top align=center>&nbsp;
	  </td>

	<!--------End Table 3.2-------->

	</tr>
	</table>
	<!--------Table 3.4:- Footer-------->

	<table width=500 cellpadding=0 cellspacing=0 border=0>
	<tr>
	  <td width=500 valign=top align=center>

  	  <font size=2 face="arial,helvetica" STYLE="font-size:10pt" color="#c9b49a">
          <img src="footer.gif" width=488 height=36 border=0 alt="Bottom line">
          <p>
          <i><font color="#000000">$WEBFOOTER</font></i><font color="#000000">
          </font> 	  </font>	  </td>
  	<!--------End Table 3.4-------->

	</tr>
	</table>

	</td>

	<td width=50 valign=top align=right>&nbsp;

 <iframe id="datamain" src="external.htm" width=95 height=100% marginwidth=0 marginheight=0 hspace=0 vspace=3 frameborder=0 scrolling=no></iframe>

	</td>
<!--------End Table 3-------->

  </tr>
  </table>
  </td>
<!--------End Table 1-------->
</tr>

</table>
</div>
</body>
</center>
</html>