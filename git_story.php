<?php
// ini adalah untuk menampilkan git story
 
$dir = "/path/to/your/repo/";
$output = array();
chdir($dir);
exec("git log",$output);
$history = array();
foreach($output as $line){
    if(strpos($line, 'commit')===0){
	if(!empty($commit)){
	    array_push($history, $commit);	
	    unset($commit);
	}
	$commit['hash']   = substr($line, strlen('commit'));
    }
    else if(strpos($line, 'Author')===0){
	$commit['author'] = substr($line, strlen('Author:'));
    }
    else if(strpos($line, 'Date')===0){
	$commit['date']   = substr($line, strlen('Date:'));
    }
    else{		
	$commit['message']  .= $line;
    }
}
 
print_r($history);
 
?>
