<?php

// Configuration file for CADViewer Community and CADViewer Enterprise version and standard settings
require 'CADViewer_config.php';


    // Define the full path to your folder from root

$path = $_POST['directory'];
$path_url = $_POST['directoryurl'];


$listtype = "";

if (!empty($_GET)) {
	if (isset($_GET['listtype'])) {
		$listtype = $_GET['listtype'];
	}
}
else{
	// no data passed by get
	if (isset($_POST['listtype'])) {
		$listtype = $_POST['listtype'];
	}
}


	// we user a server side path 
	if ($listtype == "serverfolder"){
		
		$path = $home_dir . $path;
		
	}


    // Open the folder

    $dir_handle = @opendir($path) or die("Unable to open $path");


    // Loop through the files

    while ($file = readdir($dir_handle)) {


    if($file == "." || $file == ".." || $file == "list-directory.php" || $file == "delete-file.php" || $file == "load-header.php" || $file == "filenames.rw" || $file == "load-file.php" || $file == "save-file-p1.php" )
        continue;

	$fileLower = strtolower($file);
	$jspos =  strpos($file, ".js");

	if ($jspos == false)
		continue;     // no redline .js files, we continue and do not




	$pos = strpos($file, ".");
	if ($pos == false)
		continue;     // no file extension, therefore a subdirectory

		$fname = $path_url . $file;

#        echo "<a href=\"$fname\">$file</a><br />";

        echo "<br>$file";
#        echo "$file<br/>";



    }



    // Close

    closedir($dir_handle);



?>