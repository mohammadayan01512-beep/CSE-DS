<!-- Aim: Perform file handling operations in PHP. -->

<?php

// Create and write file
$file = fopen("student.txt", "w");

fwrite($file, "Welcome to PHP File Handling");

fclose($file);

echo "File Created Successfully<br>";

// Read file
$file = fopen("student.txt", "r");

$content = fread($file, filesize("student.txt"));

echo "File Content: " . $content;

fclose($file);

?>
