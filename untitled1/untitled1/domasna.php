<?php


$directoryName = "";
$fileSystemPath = getcwd();
$directory = $fileSystemPath . "/" . $directoryName;
// open a directory if it doesn't already exist
if(!is_dir($directory)) {
    mkdir($directory, 7777);
}
// create 'file.txt'
$filename = "file.txt";
$firstFile = $directory . $filename;
$data = file_get_contents('file.txt');
$size = filesize('file.txt');

if(!file_exists($firstFile)) {
    $handle = fopen($firstFile, "r");
    fclose($handle);
}

// count characters without space
$newStrs = preg_replace('/\s+/', '', $data);
$numChar = strlen($newStrs);
echo "Број на карактери: " .$numChar. "<br>";

//counts words
$numWords = str_word_count($data);
echo "Број на зборови:  " . $numWords . " <br>";

//counts lines
$file = $filename;
$numLines = count(file($file));
echo "Број на редови: $numLines <br>";

