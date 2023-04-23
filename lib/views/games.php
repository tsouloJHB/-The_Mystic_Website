<?php
include_once("../layouts/header.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $targetDirectory = "../../uploads/games"; // Specify target directory where files will be uploaded
        $targetFile = $targetDirectory . basename($_FILES["file"]["name"]); // Specify target file path
        $allowedExtensions = array("zip", "rar"); // Specify allowed file extensions
        
        // Get the file extension
        $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
        // Check if file extension is allowed
        if (in_array($fileExtension, $allowedExtensions)) {
            // Check if file already exists
            if (file_exists($targetFile)) {
                echo "File already exists. Please choose a different file.";
            } else {
                // Upload the file to the target directory
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                    echo "File uploaded successfully.";
                } else {
                    echo "Error uploading file. Please try again.";
                }
            }
        } else {
            echo "Only ZIP and RAR files are allowed.";
        }
    } else {
        echo "Error uploading file. Please try again.";
    }
}

?>


<body>
    <h2>File Upload Form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>
    <a href="uploads\gamesThe Mystic Website_041542.rar" download>link_text</a>
</body>


<?php include("../layouts/footer.php"); ?>
