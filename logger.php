<?php

function logMessage($logLevel, $message)
{	

	$date = date('Y-m-d H:i:s');
	$filename = 'log-' . $date . '.log';
	$handler = fopen($filename, 'a');
	$contents = trim(filesize($filename));
	if ($contents == 0) {
		fwrite($handler, $date . $message) . "\n";
	}
	
	fclose($handler);
}

function logInfo($message = "info") {
	logMessage("info", $message) . "\n";
}
function logError($message = "error") {
	logMessage("error", $message) . "\n";
}
logInfo();
logError();