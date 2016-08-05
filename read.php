<?php
$dir    = "C:\_VAS_RF";

// Открыть известный каталог и начать считывать его содержимое
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "файл: $file : тип: " . filetype($dir . $file) . "\n";
        }
        closedir($dh);
    }
}
?>


