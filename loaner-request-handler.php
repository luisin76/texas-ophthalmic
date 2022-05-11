<?php
   
    // submit theform
        $userName = $_POST['name'];
        $practiceName = $_POST['practiceName'];
        $officeAddress = $_POST['officeAddress'];
        $officeCity = $_POST['officeCity'];
        $officeState = $_POST['officeState'];
        $officeZip = $_POST['officeZip'];
        $userEmail = $_POST['email'];
        $userPhone = $_POST['phone'];
        $message = $_POST['message'];

        if(preg_match('/http|www/i',$message)) {
            $error_message .= "We do not allow a url in the comment.<br />";
            die()
          } 
        
        $to = "admin@texas-ophthalmic.com, adriana2020@texas-ophthalmic.com, luiscflores@gmail.com";

        
        $body = "";
        $body .= "Loaner request submitted by ".$userName. "\r\n";
        $body .= "Practice Name: ".$practiceName. "\r\n";
        $body .= "Office Address: ".$officeAddress. "\r\n";
        $body .= "Office City: ".$officeCity. "\r\n";
        $body .= "Office State: ".$officeState. "\r\n";
        $body .= "Office Zip: ".$officeZip. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Phone: ".$userPhone. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        $messageSubject = '';
        $messageSubject .= "Loaner Request ".$userName. "\r";

        
        mail($to,$messageSubject,$body);

        header("Location: http://texas-ophthalmic.com/landingPage.html");

?>