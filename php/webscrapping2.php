<?php
$text = file_get_contents("eltiempo.html");
print_r(explode("<td>", $text));
?>