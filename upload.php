<?php
  echo <<<_CONTENT
    <html><head><title>PHP Form Upload</title></head><body>
    <form method="post" action="upload.php" enctype="enctype="multipart/form-data">
    Select File: <input type="file" name="filename" size="10">
    <input type="submit" value="Upload">
    </form>
  _CONTENT;

if ($_FILES)
{
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    echo "Uploaded image '$name'<br><img src='$name'>";
}
    echo "</body</html";


?>