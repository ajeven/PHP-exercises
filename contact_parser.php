<?php

function parseContacts($filename) {
	$contacts = array();
	// todo - read file and parse contacts
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	fclose($handle);
	$contentsArray = (explode("\n", $contents));

	foreach ($contentsArray as $content) {
		$contact = [];
		$content = explode("|", $content);
		$dash = substr($content['1'], 0, 3) . "-" . substr($content['1'], 3, 3) . "-" . substr($content['1'], 6);
		$contact['name'] = $content['0'];
		$contact['number'] = $dash;
		$contacts[] = $contact;
	}
	return $contacts;
}

var_dump(parseContacts('contacts.txt'));
