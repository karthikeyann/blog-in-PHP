<?php
$fd = fopen ("Messages.rmd", "r");
while (!feof ($fd)) {
    $buffer= fgets($fd, 4096);
    echo($buffer);
}
?>