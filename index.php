<?php
$fh = fopen("youtubescrapefix.txt", "r");

while(!feof($fh)){
	$current = trim(fgets($fh));
	$iArray[] = explode("*", $current);
}
$count = count($iArray);
for($x=$count-2; $x<$count; $x++){
	$newArray[$x]["imageSrc"] = $iArray[$x][0];
	$newArray[$x]["title"] = $iArray[$x][1];
	$newArray[$x]["link"] = $iArray[$x][2];
	$newArray[$x]["owner"] = $iArray[$x][3];
	$newArray[$x]["ownerLink"] = $iArray[$x][4];
	$newArray[$x]["duration"] = $iArray[$x][5];

}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>XML Responsive Web Design</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link rel="stylesheet" href="stylesheets/style.css">
</head>
<body>
	<div class="container">
	    <div class="sixteen columns header">
	        <h1>XML Responsive Web Design</h1>
	    </div>
	    
	    <div class="sixteen columns navigation">
	        <ul>
	            <li><a href="javascript:void(0);" class="active">Home</a></li>
	            <li><a href="javascript:void(0);">About Us</a></li>
	            <li><a href="javascript:void(0);">Blog</a></li>
	            <li><a href="javascript:void(0);">Contact Us</a></li>
	        </ul>
	    </div>
	</div>
	
	<div class="container">
	    <div class="sixteen columns banner">
	        <div style="color:white;
				border:0px solid #a1a1a1;
				padding:10px 40px; 
				background:#7FFF00;
				width:auto;
				border-radius:10px;
				margin:3px 0px 0px 0px;"><h1>Test Drive</h1>
			</div>
	    </div>
	</div>
	
	<div class="container mid-content">
	    <div class="one-third column">
	        <h1>Web Services</h1>
	        <p align=justify>
			<?php
				$output = '';
				foreach($newArray as $new){
					/*echo '<div class="video">';
					echo '<img src ="' .$new['imageSrc'] . '" alt="youtube image">';
					echo '<a href="' . $new['link'] . '"><h4>' . $new['title'] . '</h4></a>';*/

				echo '<table border="0" cellpadding="1" cellspacing="2">';
				echo '<tr class="row">';
				echo '<td><img src="' .$new['imageSrc']. '" alt="Youtube image"></td>';
				echo '<td class="col"><a href="' .$new['link']. '"><h5>' .$new['title']. '</h5></a></td>';
				echo '<td class="dur">' .$new['duration']. '</td>';
				echo '</tr>';
				echo '</table>';
				}
			?>
			</p>
	    </div>
	    <div class="one-third column">
	        <h1>Web Services</h1>
	        <p align=justify>
			<?php
				$output = '';
				foreach($newArray as $new){
					/*echo '<div class="video">';
					echo '<img src ="' .$new['imageSrc'] . '" alt="youtube image">';
					echo '<a href="' . $new['link'] . '"><h4>' . $new['title'] . '</h4></a>';*/

				echo '<table border="0" cellpadding="1" cellspacing="2">';
				echo '<tr class="row">';
				echo '<td><img src="' .$new['imageSrc']. '" alt="Youtube image"></td>';
				echo '<td class="col"><a href="' .$new['link']. '"><h5>' .$new['title']. '</h5></a></td>';
				echo '<td class="dur">' .$new['duration']. '</td>';
				echo '</tr>';
				echo '</table>';
				}
			?>
			</p>
	    </div>
	    <div class="one-third column">
	        <h1>Web Services</h1>
	        <p align=justify>
			<?php
				$output = '';
				foreach($newArray as $new){
					/*echo '<div class="video">';
					echo '<img src ="' .$new['imageSrc'] . '" alt="youtube image">';
					echo '<a href="' . $new['link'] . '"><h4>' . $new['title'] . '</h4></a>';*/

				echo '<table border="0" cellpadding="1" cellspacing="2">';
				echo '<tr class="row">';
				echo '<td><img src="' .$new['imageSrc']. '" alt="Youtube image"></td>';
				echo '<td class="col"><a href="' .$new['link']. '"><h5>' .$new['title']. '</h5></a></td>';
				echo '<td class="dur">' .$new['duration']. '</td>';
				echo '</tr>';
				echo '</table>';
				}
			?>
			</p>
	    </div>
	</div>
	
	<div class="container blog-feed">
	    <div class="sixteen columns">
	        <h1>Otobiografi</h1>
	        <p align=justify>
			<?php
				$output = '';
				foreach($newArray as $new){
					/*echo '<div class="video">';
					echo '<img src ="' .$new['imageSrc'] . '" alt="youtube image">';
					echo '<a href="' . $new['link'] . '"><h4>' . $new['title'] . '</h4></a>';*/

				echo '<table border="0" cellpadding="1" cellspacing="2">';
				echo '<tr class="row">';
				echo '<td><img src="' .$new['imageSrc']. '" alt="Youtube image"></td>';
				echo '<td class="col"><a href="' .$new['link']. '"><h5>' .$new['title']. '</h5></a></td>';
				echo '<td class="dur">' .$new['duration']. '</td>';
				echo '</tr>';
				echo '</table>';
				}
			?>
			</p>
	    </div>
	</div>
	
	<div class="container footer">
	    <div class="sixteen columns">
	        Copyright 2014 &copy; m2skyline
	    </div>
	</div>
</body>
</html>
