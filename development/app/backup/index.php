<?php

include_once ("../add/functions/file.php");

// get database directory
$file = getcwd();
$file = realpath($file . "/fkr");
$copyTo = realpath("../../../userdata/MySQL-5.7-x64/fkr");

//Read previous creation date
$lastModifiedDate = fopen( "date.txt", "r+") or die("Unable to open file");
$lastModifiedTimestamp = fread($lastModifiedDate, filesize("date.txt"));

// Get creation date
$newDatabaseCreationTime = filectime($file);

//Read Open Server creation date
$currentDatabaseCreationDate = filectime($copyTo);




// If date Old date OLDER than New than copy files to MySql directory
if( $newDatabaseCreationTime > $lastModifiedTimestamp) {

    //Save new date to file
    fseek($lastModifiedDate,0);
    fwrite($lastModifiedDate, $newDatabaseCreationTime);
    fclose($lastModifiedDate);

    // Update database files
    recurse_copy( $file, $copyTo);
    echo " <h1>Your database has been updated </h1>";
}else{
    fclose($lastModifiedDate);
    echo "<h1>Your database is up to date </h1>";
}



