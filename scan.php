<?php

$dir = "Main";

// Run the recursive function 

$response = scan($dir);


// This function scans the files folder recursively, and builds a large array

function scan($dir){

	$sort_order = 0;
	if(isset($_GET['sort']) && $_GET['sort'] == "desc") $sort_order = 1;

	$files = array();

	// Is there actually such a folder/file?

	if(file_exists($dir)){
	
		foreach(scandir($dir, $sort_order) as $f) {
		
			if(!$f || $f[0] == '.') {
				continue; // Ignore hidden files
			}

			if(is_dir($dir . '/' . $f)) {

				// The path is a folder

				$files[] = array(
					"name" => $f,
					"type" => "folder",
					"path" => $dir . '/' . $f,
					"items" => scan($dir . '/' . $f) // Recursively get the contents of the folder
				);
			}
			
			else if (is_file($dir . '/' . $f)) {

				// It is a file

				$files[] = array(
					"name" => $f,
					"type" => "file",
					"path" => $dir . '/' . $f,
					"size" => filesize($dir . '/' . $f) // Gets the size of this file
				);
			}
		}
	
	}

	return $files;
}



// Output the directory listing as JSON

header('Content-type: application/json');

echo json_encode(array(
	"name" => basename($dir),
	"type" => "folder",
	"path" => $dir,
	"items" => $response
));
