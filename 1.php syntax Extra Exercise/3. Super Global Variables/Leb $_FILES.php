<?php
if(isset($_POST["submit"]))
{
    $file=$_POST["file"];
    {

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $fileName = $_FILES["file"]["name"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"];
    $fileType = $_FILES["file"]["type"];
    $fileError = $_FILES["file"]["error"];

    echo "<h2>File Upload Information</h2>";
    echo "<p><strong>File Name:</strong> $fileName</p>";
    echo "<p><strong>File Size:</strong> " . $fileSize . " bytes</p>";
    echo "<p><strong>File Type:</strong> $fileType</p>";

    if ($fileError === 0) {
        echo "<p>File uploaded successfully!</p>";
        
        $uploadDir = "uploads/"; 
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true); 
        }
        $uploadPath = $uploadDir . basename($fileName);

        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            echo "<p>The file has been uploaded to: $uploadPath</p>";
        } else {
            echo "<p>Sorry, there was an error uploading your file.</p>";
        }
    } else {
        echo "<p>There was an error uploading your file. Error code: $fileError</p>";
    }
}
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>
<body>
    <center>

    <h2>Upload a File</h2>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="file">Choose a file:</label>
        <input type="file" name="file" id="file" required>
        <br><br>
        <input type="submit" value="Upload File">
    </form>
    
</center>

</body>
</html>



