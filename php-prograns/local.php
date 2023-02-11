<?php
$dir = ".";
$files = scandir($dir);
foreach ($files as $file) {
  if (!is_dir($file)) {
    echo $file . "\n";
    
  }
}
?>
