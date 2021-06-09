<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/REC-html40/loose.dtd">

<?php
	//$exposure="";
	//foreach ($_POST["exposure"] as $arr) {
	//	$exposure=$exposure.implode(",",$arr)."|";
	//}
	//$arr = $_POST["exposure"];
    //    for ($i=0; $i<count($arr); $i++) {
  //        $exposure=$exposure.implode(",",$arr[$i])."|";
  //      }

	//$exposure = substr($exposure, 0, -1);
	ksort($_POST["profSpeak"]);
	ksort($_POST["profWrite"]);
	ksort($_POST["profUSpeak"]);
	ksort($_POST["profUWrite"]);

	$my_file = 'results/results_'.$_POST["idn"].'.csv';
	$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);


#file_put_contents($my_file, "degrees":.$_POST['deg'], FILE_APPEND);


	fwrite($handle,
  "id:,".$_POST["idn"]."\n".
	"\n".
	"country:,".$_POST["country"]."\n".
	"englishfirst:,".$_POST["english"]."\n".
	"age:,".$_POST["age"]."\n".
	"gender:,".$_POST["gender"]."\n".
	"ethnicity:,".$_POST["ethnicity"]."\n".
	"race:,".implode(",",$_POST["race"])."\n".
	"\n".
	"handedness:,".implode(",",$_POST["handedness"])."\n".
	"instruments:,".implode(",",$_POST["instr"])."\n".
	"instrumentsstart:,".implode(",",$_POST["instrsy"])."\n".
	"instrumentsend:,".implode(",",$_POST["instrey"])."\n".
	"choir:,".$_POST["choir"]."\n".
	"choir_years:,".implode(",",$_POST["choirt"])."\n".
	"musictheory:,".$_POST["mtheory"]."\n".
	"mt_years:,".implode(",",$_POST["mtyears"])."\n".
	"hoursmusic:,".$_POST["hourslisten"]."\n".
	"typemusic:,".$_POST["musiclisten"]."\n".
	"musicother:,".$_POST["musicother"]."\n".
	"\n".
	"languages:,".implode(",",$_POST["lang"])."\n".
	"percents:,".implode(",",$_POST["langp"])."\n".
	"agefirstexp:,".implode(",",$_POST["aofe"])."\n".
	"numyrexp:,".implode(",",$_POST["noye"])."\n".
	"exp_oneparentspeaks:,".implode(",",$_POST["exposure1"])."\n".
	"exp_twoparentspeak:,".implode(",",$_POST["exposure2"])."\n".
	"exp_relativespeaks:,".implode(",",$_POST["exposure3"])."\n".
	"exp_schoolclasses:,".implode(",",$_POST["exposure4"])."\n".
	"exp_collegeclasses:,".implode(",",$_POST["exposure5"])."\n".
	"exp_otherclasses:,".implode(",",$_POST["exposure6"])."\n".
	"exp_speakregularly:,".implode(",",$_POST["exposure7"])."\n".
	"yrincountry:,".implode(",",$_POST["yic"])."\n".
	"profSpeak:,".implode(",",$_POST["profSpeak"])."\n".
	"profWrite:,".implode(",",$_POST["profWrite"])."\n".
	"profUSpeak:,".implode(",",$_POST["profUSpeak"])."\n".
	"profUWrite:,".implode(",",$_POST["profUWrite"]));

	fclose($handle);
?>

<html>
<head>
<title></title>
<script language="Javascript" src="form.js"></script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#f3f3f3" topmargin="0" marginheight="0">

<div align="center">
<br>
<br>
  <table border="1" width="500" cellpadding="5" cellspacing="1" bgcolor="#ffffff">
    <tr>
      <td><p class="title">&nbsp;</p>
      <p class="title">&nbsp;</p>
      <p class="title">&nbsp;</p>
      <p class="title">&nbsp;</p>
      <p class="title">&nbsp;</p>
      <p class="title">&nbsp;</p>
      <p class="title">&nbsp;</p>
      <p class="title">Done!</p>
      <p class="title">If you are not redirected to the experiment in a few seconds, click the link below.</p>
      <p class="title"><a href="https://evlab.scripts.mit.edu/MTurk/Pros/univ/trial/trialxlp.html">https://evlab.scripts.mit.edu/MTurk/Pros/univ/trial/trialxlp.html</a></p>
      <p class="title">&nbsp;</p>
      <p class="title">&nbsp;</p>
      <p class="title">&nbsp;</p>
      <p class="title">&nbsp;</p>
      <p class="title">&nbsp;</p>
      <p class="title">&nbsp;</p></td>
    </tr>
  </table>
</div>
</body>
</html>

<?php
        echo "<script> location.href='https://evlab.scripts.mit.edu/MTurk/Pros/univ/trial/trialxlp.html'; </script>";
        exit;
?>
