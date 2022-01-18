<?php
function changeName() {
    $dir = './';
    if(is_dir($dir)){
        $info = opendir($dir);
        while (($file = readdir($info)) !== false) {
            if (strpos($file, 'jpg') !== false ) {
              echo "\n file is ".$file."\n";
              $res = explode("_", $file);
              $newFile = $res[0];
              if (strpos($newFile, 'jpg') == false ) {
                $newFile = $newFile . ".jpg"; 
              }
                
              rename("./".$file, "./".$newFile);
              
            }
        } 
        closedir($info);
    }
}

changeName();
