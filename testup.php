<?php
$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 0;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{
    // Allow certain file formats
    $whitelist = array("pdf","doc","docx");
    foreach ($whitelist as $item) 
    {
     if ($item==$fileType) 
            $uploadOk = 1;
    }
    if ($uploadOk==0) {
            echo "Only doc, docx, or pdf allowed.";
            $uploadOk = 0;
        }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 3000000) {
        echo "Sorry, your file is too large. Max limit: 3 Mb.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.*****";
            echo $target_file;
        }
    }
}
?>

<form method="post" action="testup.php" enctype="multipart/form-data">
    <div class="row uniform 50%">
    <div class="4u 12u(mobilep)">To apply, submit your resume here :</div>
        <div class="4u 6u(mobilep)">
            <input type="file" name="fileToUpload" id="fileToUpload" />
        </div>
        <div class="4u 6u(mobilep)">
            <ul class="actions">
                <li><input type="submit" value="Send" name="submit" /></li>
            </ul>
        </div>
    </div>
</form>