<?php
/*
Detect from $_SERVER['HTTP_USER_AGENT']

results can be like that :

Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0) Gecko/20100101 Firefox/14.0.1 

Opera/9.80 (X11; Linux i686; U; fr-CA) Presto/2.10.289 Version/12.00

Mozilla/5.0 (X11; Linux i686) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11

*/
  $browser = 'unknown';

  if ( preg_match ( '/Firefox/', $_SERVER['HTTP_USER_AGENT'] ) ) {
    $browser = "moz";
  } elseif ( preg_match ( '/Chrome|Safari/', $_SERVER['HTTP_USER_AGENT'] ) ) {
    $browser = "webkit";
  } elseif ( preg_match ( '/Opera/', $_SERVER['HTTP_USER_AGENT'] ) ) {
    $browser = "opera";
  }
?>