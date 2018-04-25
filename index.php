<?php
$timezone = new DateTimeZone("Asia/Kolkata");
$date = new DateTime();
$date->setTimezone($timezone );
$wdate = $date->format( 'D' );
$wmonth = $date->format( 'M' );
$eng_tamil_days=array('Mon'=>'திங்கள்','Tue'=>'செவ்வாய்','Wed'=>'புதன்','Thu'=>'விழாழன்','Fri'=>'வெள்ளி','Sat'=>'சனி','Sun'=>'ஞாயிறு');
$eng_tamil_months=array('Jan'=>'ஜனவரி','Feb'=>'பிப்ரவரி','Mar'=>'மார்ச்','Apr'=>'ஏப்ரல்','May'=>'மே','Jun'=>'ஜூன்','Jul'=>'ஜூலை','Aug'=>'ஆகஸ்ட்','Sept'=>'செப்டம்பர்','Oct'=>'அக்டோபர்','Nov'=>'நவம்பர்','Dec'=>'டிசம்பர்');
echo $eng_tamil_days[$wdate].', '.$eng_tamil_months[$wmonth].' '.$date->format( 'jS, Y' )." <span>".$date->format( 'g:i:s A' )."</span>";
?>
<h1>Date & Time in Tamil Language</h1>
A simple snippets for display date in Tamil language for tamil lovers. It is based on PHP Language.

<h1>Result View</h1>
Tue, Apr 24th, 2018 2:37:53 PM
செவ்வாய், ஏப்ரல் 24th, 2018 2:37:53 PM

Enjoy!!