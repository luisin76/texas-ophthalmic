<?php
   
   // submit theform
   $userName = $_POST['name'];
   $practiceName = $_POST['practiceName'];
   $officeAddress = $_POST['officeAddress'];
   $officeCity = $_POST['officeCity'];
   $officeState = $_POST['officeState'];
   $userEmail = $_POST['email'];
   $userPhone = $_POST['phone'];
   $message = $_POST['message'];
   
   if(preg_match('/http|www/i',$message)) {
       die() ;
     }
		    $from = 'developer@texas-ophthalmic.com';
        $to = 'admin@texas-ophthalmic.com, adriana2020@texas-ophthalmic.com, developer@texas-ophthalmic.com';
        
        $body = "";
        $body .= "Contact form submitted by ".$userName. "\r";
        $body .= "Practice Name: ".$practiceName. "\r\n";
        $body .= "Office Address: ".$officeAddress. "\r\n";
        $body .= "Office City: ".$officeCity. "\r\n";
        $body .= "Office State: ".$officeState. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Phone: ".$userPhone. "\r\n";
        $body .= "Message: ".$message. "\r\n";


        $headers .= "Reply to $userEmail \r\n";

        $messageSubject = '';
        $messageSubject .= "Contact form submitted by ".$userName. "\r";
        
        mail($to,$messageSubject,$body,$headers);
        header("Location: http://texas-ophthalmic.com/landingPage.html");
?>