<?php

function recurse_copy($src,$dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while(false !== ( $file = readdir($dir)) ) {
        if (( $file != '.' ) && ( $file != '..' )) {
            if ( is_dir($src . DIRECTORY_SEPARATOR  . $file) ) {
                recurse_copy($src . DIRECTORY_SEPARATOR  . $file,$dst . DIRECTORY_SEPARATOR  . $file);
            }
            else {
                copy($src . DIRECTORY_SEPARATOR  . $file, $dst . DIRECTORY_SEPARATOR  . $file);
            }
        }
    }
    closedir($dir);
}

