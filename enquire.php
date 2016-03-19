<?php
session_start();
$_SESSION['msg']="";
$_SESSION['flag']=false;
$err = "";
 
if(isset($_POST['submit'])) 
{
          // EDIT THE 2 LINES BELOW AS REQUIRED
         
            $email_to = "abhinavagrawal1995@gmail.com";
         
            $email_subject = "Enquiry via csaconsultants.in";
         
            function died($error) {
                // your error code can go here
         
                $_SESSION['msg'].="Your enquiry could not be submitted due to the following error(s):<br>";
                $_SESSION['msg'].=$error."<br />"; 
                header('Location:enquiry.php?sent=0'); 
                die("1");
            }
         
             
         
            // validation expected data exists
         
            if(!isset($_POST['name']) || 
                !isset($_POST['email']) || 
                !isset($_POST['subject']) || 
                !isset($_POST['message'])) {
         
                $flag=0;  
                $err.='Some fields were left blank.<br>';  
         
            }
         
             
         
            $name = $_POST['name']; // required
         
            $email_from = $_POST['email']; // required
         
            $subject = $_POST['subject']; // not required
         
            $message = $_POST['message']; // required
         
             
         
            
         
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
         
          if(!preg_match($email_exp,$email_from)) {
         
            $err .= 'The Email Address you entered does not appear to be valid.<br />';
         
          }
         
            $string_exp = "/^[A-Za-z .'-]+$/";
         
          if(!preg_match($string_exp,$name)) {
         
            $err .= 'The Name you entered does not appear to be valid.<br />';
         
          }
         
          if(strlen($message) < 2) {
         
            $err .= 'The Message you entered do not appear to be valid.<br />';         
          }
         
          if(strlen($err) > 0) {
         
            died($err);
            die("Something went wrong.");
         
          }
         
            $email_message = "Enquiry Form: \n\n";
         
             
         
            function clean_string($string) {
         
              $bad = array("content-type","bcc:","to:","cc:","href");
         
              return str_replace($bad,"",$string);
         
            }
         
             
         
            $email_message .= "Name: ".clean_string($name)."\n";
         
            $email_message .= "Email: ".clean_string($email_from)."\n";
         
            $email_message .= "Subject: ".clean_string($subject)."\n";
         
            $email_message .= "Message: ".clean_string($message)."\n";
         
             
         
             
         
        // create email headers
         
        $headers = 'From: '.$email_from."\r\n".
         
        'Reply-To: '.$email_from."\r\n" .
         
        'X-Mailer: PHP/' . phpversion();
 
      if(mail($email_to, $email_subject, $email_message, $headers))
      {
        $_SESSION['flag']=true; 
        $_SESSION['msg']="Your enquiry has been submitted. We will Get back to you shortly.";
        header('Location:enquiry.php?sent=1'); 
        die("8");
      }
      else
      {
          died("Sorry, Something went wrong. Try again later.");
          die("Sorry, Something went wrong.");
      }
        
}
 
?>