<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "contact@gruhalaya.com" ;
    $subject = "Enquiry from website";

    $name = $_POST["fname"]." ".$_POST["lname"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $userMessage=$_POST["message"];
    $message = "Name : ".$name."\nEmail : ".$email. "\nMobile no: ".$mobile."\nMessage : ".$userMessage;

    

    $headers = "From:"." <". $email .">";

    mail($to, $subject, $message, $headers);

    //test mail to gmail
    
    mail("contactgruhalaya@gmail.com", $subject, $message, $headers);

    header("Location: .?emailStatus=contactPass");
    exit;
}
?>