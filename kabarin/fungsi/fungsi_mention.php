<?php
function mention($text) {
//untuk mention
$text = preg_replace("/@(\w{1,15})/i", "@<a href=\"ajax.php?user=\\1\" class=\"ajax\" alt=\"Image Tooltip\" rel=\"tooltip\" ajax=\"t_profil_tipsy.php?user=\\1\">\\1</a>", $text);
//untuk hashtag
$text = preg_replace("/#(\w{1,15})/i", "#<a href=\"search.php?q=\\1\">\\1</a>", $text);
return $text;
}
?>