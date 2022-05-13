<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        if (isset($_FILES["file_upload"]) && $filetype = $_FILES["file_upload"]["error"] == 0) {
            $filename = $_FILES["file_upload"]["name"];
            $filesize = $_FILES["file_upload"]["size"];
            $filetmp_name = $_FILES["file_upload"]["tmp_name"];
            $filetype = $_FILES["file_upload"]["type"];

            $allowed = array(
                "png" => "image/png",
                "jpg" => "image/jpg",
                "jpeg" => "image/jpeg",
                "gif" => "image/gif",
            );

            // $type = pathinfo($filename, PATHINFO_EXTENSION);
            $type = mime_content_type($filetmp_name);
            // var_dump($type);
            // if (!array_key_exists($type, $allowed)) die("You need to upload valid file");
             if ($type!=$filetype) die("You need to upload valid file");
            // var_dump(in_array($filetype, array_values($allowed)));
            $valid_size = 5 * 1024 * 1024;
            if ($filesize > $valid_size) die("You need smaller file");
            if (in_array($type, array_values($allowed))) {
                if(!file_exists("upload/".$filename)){
                    $bool=move_uploaded_file($filetmp_name, "upload/" . $filename);
                    echo "<div> Uploaded Successfully</div>";
                }
                else{
                    die("already exists");
                }
                
            } else {
                die("something wrong");
            }
        }
    }
}
