<?php
session_start();
$_SESSION['msg']="";
$_SESSION['flag']=false;
$_SESSION['filename']="";
$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$file = $_FILES["fileToUpload"]["name"];
$array = explode('.', $file);
$fileName=$array[0];
$fileExt=$array[1];
$newfile=$fileName."_".date("d-m-Y")."_".time().".".$fileExt;

$err="";
// var_dump($newfile);
// var_dump($_FILES);
$target_file = $target_dir . $newfile;

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
            $err="Only doc, docx, or pdf allowed.";
            $uploadOk = 0;
        }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 3000000) {
        $err="Your file is too large. Max limit: 3 Mb.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg="Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
    else 
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
            $msg = "Your CV has been uploaded. We will get back to you shortly.";
            $_SESSION['flag']=true;
            $_SESSION['filename']=$newfile;
        } 
        else {
            $msg="Sorry, your file was not uploaded.";
            $err="Please send a mail to info@csaconsultants.in.";
        }
    }
    
    $msg=$msg." ".$err;
    $_SESSION['msg']="<center><code>".$msg."</code></center>";
    if($_SESSION['flag'])
    	header('Location:send.php');
    else
    	header('Location:career.php?sent=0');
    //var_dump($_SESSION);
}
?>