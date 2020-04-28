<?php

include('simple_dom/simple_html_dom.php');

$html = file_get_html('https://na.op.gg/summoner/userName=BUZZLIGHTYEAR99');
$Tierrank = 'notfound';

foreach($html->find('.TierRank') as $e)

	$Tierrank = $e->plaintext;
foreach($html->find('.LeaguePoints') as $l)
	$Points = $l->plaintext;

$Tierrank = str_replace(" ", "", $Tierrank);
$Points = str_replace(" ", "", $Points);
$out = $Tierrank . " " . $Points;

$fp = fopen('info.txt', 'w');
fwrite($fp, $out);
fwrite($fp, $Tierrank);
fwrite($fp, $Points);
fclose($fp);
echo $Tierrank;
echo $Points;
echo '<br>';
echo $out;



?>
