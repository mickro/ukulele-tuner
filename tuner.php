<?php
  include 'detect_navigator.php';
  $css_hack_file = false;
  switch ( $browser ) {
    case 'moz':
      $css_hack_file = 'moz_tuner.css';
    break;
    case 'webkit':
      $css_hack_file = 'web_kit_tuner.css';
    break;
    case 'opera':
      $css_hack_file = 'o_tuner.css';
    break;
  }
?><!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Ukulele Tuner</title>
    <link rel="stylesheet" type="text/css" href="./css/tuner.css" />
    <?php if ($css_hack_file) {
	    print '<link rel="stylesheet" type="text/css" href="./css/' . $css_hack_file. '" />';
    } ?>
  </head>
  <body>
  <div id='background-content-effect'>
      <div id='background-content'>
	<div id='content'>
	  <div id='background'>
	    <img id='ukulele' src='./img/Ukulele.svg' alt='SVG format not supported by your browser or content unavailable' />
	  </div>
	  <div id='foreground'>
	    <div id='strings'>
	      <div class='title'>Ukul&eacute;l&eacute; Tuner</div>
	      <br/>
	      Tune top string also known as <div class='bold'>4th string</div> to <div class='bold'>G</div>:
	      <br/><br/>
	      <audio controls="controls" loop="loop">
		<source src="./audio/string_4_G4_196hz.ogg" type="audio/ogg" />
		<source src="./audio/string_4_G4_196hz.mp3" type="audio/mpeg" />
	      Your browser does not support the audio element.
	      </audio>
	      <br/><br/>
	      Tune <div class='bold'>3th string</div> to <div class='bold'>C</div>:
	      <br/><br/>
	      <audio controls="controls" loop="loop">
		<source src="./audio/string_3_C4_130.8hz.ogg" type="audio/ogg" />
		<source src="./audio/string_3_C4_130.8hz.mp3" type="audio/mpeg" />
	      Your browser does not support the audio element.
	      </audio>
	      <br/><br/>
	      Tune <div class='bold'>2nd string</div> to <div class='bold'>E</div>:
	      <br/><br/>
	      <audio controls="controls" loop="loop">
		<source src="./audio/string_2_E4_164.8hz.ogg" type="audio/ogg" />
		<source src="./audio/string_2_E4_164.8hz.mp3" type="audio/mpeg" />
	      Your browser does not support the audio element.
	      </audio>
	      <br/><br/>
	      Tune bottom string also known as <div class='bold'>1st string</div> to <div class='bold'>A</div>:
	      <br/><br/>
	      <audio controls="controls" loop="loop">
		<source src="./audio/string_1_A4_220hz.ogg" type="audio/ogg" />
		<source src="./audio/string_1_A4_220hz.mp3" type="audio/mpeg" />
	      Your browser does not support the audio element.
	      </audio>
	      <br/>
	      <br/>
	      <div id='credits'>HTML5 + CSS3 in 2012 by <a href='http://nz.linkedin.com/in/mickro/en'>Mickaël Foucaux</a></div>
	    </div>
	  </div>
	</div>
      </div>
    </div>
  </body>
</html>
 