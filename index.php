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
            $fileName = basename($file);
            echo "<li><a href=\"$file\" id=\"fileLink-$fileName\">$fileName</a> <button onclick=\"copyToClipboard('$file')\">Copy Link</button></li>";
        }
        ?>
    </ul>

    <script>
    function copyToClipboard(text) {
        var tempInput = document.createElement("input");
        tempInput.value = text;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        alert("Link copied to clipboard: " + text);
    }
    </script>
</body>
</html>
