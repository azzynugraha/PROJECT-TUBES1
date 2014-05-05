<?php
require_once 'xpath.php';
set_time_limit(0);
$startUrl = "http://www.youtube.com/playlist?list=PLF15D20605A193237";

// anchor text "//td[@class='pl-video-title']/a/text()"
// anchor href "//td[@class='pl-video-title']/a/@href"
// anchor img src "//td[@class = 'pl-video-thumbnail']//img/@src"
// anchor img src 1 "//td[@class = 'pl-video-thumbnail'] //span[@class = 'yt-thumb-clip']//img/@src"
// anchor owner text "//td[@class = 'pl-video-owner']/a/text()"
// anchor owner href "//td[@class = 'pl-video-owner']/a/@href()"
// timestamp "//div[@class = 'timestamp']"

function scrapeYoutube($url){
	$baseUrl = "http://www.youtube.com";
	$array = array();
	$xpath = new XPATH($url);	

	$imageSrcQuery = $xpath->query("//td[@class = 'pl-video-thumbnail'] //span[@class = 'yt-thumb-clip']//img/@src");
	$linkTitleQuery = $xpath->query("//td[@class='pl-video-title']/a/text()");
	$linkHrefQuery = $xpath->query("//td[@class='pl-video-title']/a/@href");
	$linkOwnerQuery = $xpath->query("//td[@class='pl-video-owner']/a/text()");
	$linkOwnerHrefQuery = $xpath->query("//td[@class='pl-video-owner']/a/@href");
	$linkTimestampQuery = $xpath->query("//div[@class='timestamp']");

	$fh = fopen("youtube.txt", "a+");
	for($x=0; $x<$linkHrefQuery->length; $x++){

		$string = $array[$x]['imageSrc'] = $imageSrcQuery->item($x)->nodeValue ."*";
		$string .= $array[$x]['linkTitle'] = $linkTitleQuery->item($x)->nodeValue ."*";
		$string .= $array[$x]['linkHref'] = $baseUrl . $linkHrefQuery->item($x)->nodeValue ."*";
		$string .= $array[$x]['linkOwner'] = $linkOwnerQuery->item($x)->nodeValue ."*";
		$string .= $array[$x]['linkOwnerHref'] = $baseUrl . $linkOwnerHrefQuery->item($x)->nodeValue ."*";
		$string .= $array[$x]['linkTimestamp'] = $linkTimestampQuery->item($x)->nodeValue ."*";

		fwrite($fh, $string ."\n");
		//$array[$x]['imageSrc'] = $imageSrcQuery->item($x)->nodeValue;
		//$array[$x]['linkTitle'] = $linkTitleQuery->item($x)->nodeValue;
		//$array[$x]['linkHref'] = $baseUrl . $linkHrefQuery->item($x)->nodeValue;
		//$array[$x]['linkOwner'] = $linkOwnerQuery->item($x)->nodeValue;
		//$array[$x]['linkOwnerHref'] = $baseUrl . $linkOwnerHrefQuery->item($x)->nodeValue;
		//$array[$x]['linkTimestamp'] = $linkTimestampQuery->item($x)->nodeValue;

	}
	fclose($fh);
	return $array;
}

$data = scrapeYoutube("http://www.youtube.com/playlist?list=PLF15D20605A193237");


echo "<pre>";
print_r($data);
