<!DOCTYPE html>
<html>
<head>
    <title>File Management</title>
</head>
<body>
    <h1>File Management</h1>

    <!-- File Upload Form -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>

    <hr>

    <!-- List of Uploaded Files -->
    <h2>Uploaded Files</h2>
    <ul>
        <?php
        // List uploaded files
        $files = glob('uploads/*');
        foreach ($files as $file) {
            echo "<li><a href=\"download.php?file=" . urlencode($file) . "\">" . basename($file) . "</a></li>";
        }
        ?>
    </ul>
</body>
</html>
