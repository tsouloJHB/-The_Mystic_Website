<?php
include_once("../layouts/header.php");
session_start();
if(!isset( $_SESSION["admin"])){
    header("location: ../views/login.php");
 
}

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
<?php  include "../layouts/navbar.php"; ?>
    <div class="admin-container">
        <h2>welcome admin</h2>
        <p>Upload A game</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <label>File (zip,rar)</label>
            <input type="file" name="file"/>
            <label>Thumbnail (jpeg,jpg,png)</label>
            <input type="file" name="thumbnail">
            <input type="submit" value="Upload">
        </form>
        <hr>
        <p>Upload A movie</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <label>File (mp4,meg,zip,rar)</label>
            <input type="file" name="file">
            <label>Thumbnail (jpeg,jpg,png)</label>
            <input type="file" name="thumbnail">
            <input type="submit" value="Upload">
        </form>
        <p>Upload A music</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <label>Thumbnail (jpeg,jpg,png)</label>
            <input type="file" name="thumbnail">
            <input type="submit" value="Upload">
        </form>
    </div>
</body>


<?php include("../layouts/footer.php"); ?>
