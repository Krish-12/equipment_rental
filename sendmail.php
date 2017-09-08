<?php 


    $to = "krishanu.mondl@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
	$subject = $_POST['subject'];
    $comments = $_POST['comments'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $subject . " " . $comments . " " . "\n\n" ;
    $message2 = "Here is a copy of your message " . $name . " " . $subject . " " . $comments . " " . "\n\n" ;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    
?>