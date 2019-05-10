<html>
<head>
<title>Uploader</title>
</head>
<body>

<?php
// Where the file is going to be placed 
$target_path = "uploads/";

/* Add the original filename to our target path.  
Result is "uploads/filename.extension" */
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

$tmp_path = $_FILES['uploadedfile']['tmp_name'];

echo "<p>$tmp_path -- $target_path</p>";

if(move_uploaded_file($tmp_path, $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

$target_path = realpath($target_path);

echo "<pre>";
//echo "$target_path";
//system("/home/workspace/projects/autosys/stack/./main.py /home/workspace/projects/autosys/stack-config/crash.conf '$target_path'");
echo "</pre>";
?>

</body>
</html>


