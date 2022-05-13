<?php
function glob_single_scan(string $path)
{
    foreach (glob($path, GLOB_NOSORT) as $i) {
        echo (basename("$i") . " the file size is " . filesize($i) . "  bytes...");
    }
}
function glob_with_recursive(string $path)
{
    if (is_dir($path)) {
        $arr = glob("$path/*");
        $arr = array_diff($arr, ['.', '..']);
        foreach ($arr as $i) {
            if (is_dir($i)) {
                glob_with_recursive("$i");
            } else {
                echo (basename($i) . "<br>");
            }
        }
    } else {
        echo "it is no directory";
    }
}
// glob_single_scan("./mydir/*.txt");
glob_with_recursive("./mydir");
