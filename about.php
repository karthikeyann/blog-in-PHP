   <?php include("top.html"); ?>
   <font size=+2 COLOR=#FF0000 >Karthikeyan.N </font><br>
   Phone: +91 94892 44684(India)<br>
   Mail ID: karthi.amrita.cbe@gmail.com<br><br>
   <?php if($_POST['send'] != "send")
          { ?>
          <table>
          <form action="about.php" method="post">
          <tr><td>Your Name:</td><td><input name="name" value="" /></td></tr>
          <tr><td>Your Mail ID:</td><td><input name="mailid" value="" /></td></tr>
          <tr><td>Subject:</td><td><input name="subject" value="" /></td></tr>
          <tr><td>Message:</td><td><textarea name="message" rows="10" cols="30"></textarea></td></tr>
          <tr><td></td><td><input type="submit" name="send" value="send" /></td></tr>
          </form>
          </table>
          <? }
          else
          {
          $fp=fopen("Messages.rmd","a");
		  include("functions.php");
		  $mess=myformat($_POST['message']);
          fwrite($fp,$_POST['name']."<br>".$_POST['mailid']."<br>".$_POST['subject']."<br>".$mess."\r\n<br>***");
          fclose($fp);
          echo "Your Message has been sent to administrator succesfully :-) ";
          //mail("karthi.amrita.cbe@gmail.com",$POST['subject'],$POST['message'],"From: postmaster@gmail.com\r\n"."Reply-To: ".$_POST['mailid']."\r\n");
          }
          ?>
		   <head>
		<title> Techbird .. fly through technology..</title>
		<meta name="keywords" content="PIC, pic, electronics, electronic, circuit, project, diagram, windows, software, basic, basics, fundamentals">
		<meta name="description" content="Tech updates at your Doorstep">
	   </head>
   <?php include("bottom.html"); ?>