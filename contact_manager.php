<?php

// function manageContacts($filename) {
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	fclose($handle);
	$list = explode("\n", $contents);
	foreach ($list as $contact) {
		$contactArray = explode("|", $contact);
		$contentsArray[] = [
	 		'name' => $contactArray[0],
	 		'number' => $contactArray[1]
	 	];	
	}
$input = ' ';
do {
	//Main Menu
$menu = "1.View Contacts.
2.Add new contact.
3.Search by name.
4.Delete contact.
5.Exit.
Please select an option 1-5" . "\n";
	fwrite(STDOUT, $menu);
$operate = trim(fgets(STDIN));
	//Menu Options
if ($operate == '1') {
	print_r($contentsArray) . "\n";
	
} elseif ($operate =='2') {
	$handle = fopen('contacts.txt', 'a+');
	fwrite(STDOUT, "Who would you like to add?  NAME|PHONE#" . "\n");
	$added = trim(fgets(STDIN));
	file_put_contents($filename, $added, FILE_APPEND);
	fclose($handle);
	
} elseif ($operate == '3') {
	fwrite(STDOUT, "Who would you like to see?" . "\n");
	fwrite(STDOUT, "Please enter full first and last name." . "\n");
	$search = trim(fgets(STDIN));
	foreach ($contentsArray as $content) {
		if ($content['name'] === $search) {
			echo implode("|", $content) . PHP_EOL;
			break;
		}
	}
	
	
} elseif ($operate == '4') {
	$handle = fopen('contacts.txt', 'a+');
	fwrite(STDOUT, "Who would you like to remove?" . "\n");
	$remove = trim(fgets(STDIN));
	foreach ($contentsArray as $key => $content) {
		if ($content['name'] === $remove) {
			fwrite(STDOUT, "Are you sure you want to delete this contact? y/n" . "\n");
			$yes = trim(fgets(STDIN));
			if ($yes == 'y') {
				echo "Success" . PHP_EOL;
				unset($contentsArray[$key]); 
			} else {
				echo "Failed to delete contact" . PHP_EOL;
				break;
			}
		} 
	}
	fclose($handle);
	

} elseif ($operate == '5') {
	die;
}
} while ($input != 'die');