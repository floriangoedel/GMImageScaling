<!DOCTYPE html>
<head>
    <title>File Upload</title>
    <style>
        body {
            font-family: Arial;
        }
    </style>
</head>
<body>
    <form action="backend.php" method="post" enctype="multipart/form-data">
        <label for="fileUpload">Gewünschte Datei:</label><br>
        <input type="file" id="fileUpload" name="picture">
        <input type="submit">
    </form>
</body>
</html>