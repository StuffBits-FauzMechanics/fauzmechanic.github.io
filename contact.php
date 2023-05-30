<?php

//if(isset($_REQUEST['submit']))
 // {
   
     //Email information
     $to = "fauzmechanichs@gmail.com";
     $subject ="Contact Mail";
  
     $name=$_POST['name'];       
     $email=$_POST['email'];
     $subject1=$_POST['subject'];
     $comment=$_POST['message'];
     
   $msg.="New contact details :";
   $msg.="Name: ".$name;
   $msg.="\n\nEmail: ".$email;
   $msg.="\n\nSubject: ".$subject1; 
   $msg.="\n\nMessage: ".$comment;
 
	$From="fauzmechanichs@gmail.com";
	$sub_reply="Acknowledgement by Fauz Mechanichas";
	$msg_reply="\nThank you for contacting us.\n  We will have a look at your request and get back to you soon. \n\n\n  Thank You,\n Fauz Mechanics\n +91 93215 56894";
   

         $result= mail($to,$subject,$msg,$From);
        
         $result_reply= mail($email,$sub_reply,$msg_reply,$From);
         
         if($result == true && $result_reply == true) {
           echo "<script>alert('Message sent successfully...!.Thanks');
           window.location= 'index.html'</script>";
         }else {
           // echo "Message could not be sent...";
           echo "<script>alert('Message could not be sent...!')</script>";
         }
      
//}

  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
//   $receiving_email_address = 'fauzmechanics@gmail.com';

//   if( file_exists($php_email_form = 'https://fauzmechanics.com/assets/vendor/php-email-form/php-email-form.php' )) {
//     include( $php_email_form );
//   } else {
//     die( 'Unable to load the "PHP Email Form" Library!');
//   }

//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];

//   // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
//   /*
//   $contact->smtp = array(
//     'host' => 'example.com',
//     'username' => 'example',
//     'password' => 'pass',
//     'port' => '587'
//   );
//   */

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
?>
