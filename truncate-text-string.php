<?php
/*
Take a string of X amount of characters and shorten it to whatever length is defined
Usage: truncate("This is a stringg")
You can define your own length individually as well as global. Easily added to a config defines
*/
function truncate($string,$length=10,$append="&hellip;") {
  $string = trim($string);

  if(strlen($string) > $length) {
	$string = wordwrap($string, $length);
	$string = explode("\n", $string, 2);
	$string = $string[0] . $append;
  }

  return $string;
}
?>