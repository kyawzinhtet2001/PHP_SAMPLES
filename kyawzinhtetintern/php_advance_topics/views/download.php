<?php
function download($realfile)
{
    if (isset($realfile)) {

        $file = urldecode($realfile);
        $filepath = "upload/" . $file;

        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename = "' . basename($filepath) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');

            header('Content-Length: ' . filesize($filepath));
            flush();
            readfile($filepath);
            exit();
        }
    }
}

download($_REQUEST['file']);
