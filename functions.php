<?php

function myformat($string)
{
$i=0;
$tok[0] = strtok($string,"<");
while ($tok[$i]) {
	$tok[$i] = htmlentities($tok[$i]);
	$i++;
    $tok[$i] = strtok(">");
	if($tok[$i])
	{
	$tok[$i] = "<".$tok[$i].">";
	}
	$i++;
	$tok[$i] = strtok("<");
}
return strtr(implode("",$tok),"|","1");
}
function unhtmlentities ($string)
{
	$trans_tbl = get_html_translation_table (HTML_ENTITIES);
	$trans_tbl = array_flip ($trans_tbl);
	return strtr ($string, $trans_tbl);
}
?>
