
<?php
if(isset($_POST['submit1'])){
    $to = "aryal.suman95@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $first_name = $_POST['Firstname'];
    $last_name = $_POST["Lastname"];
    $number =$_POST["Contact"];
    $subject =$_POST["Message"];
    $subject1 = "Contact Us Mail";
    $subject2 = "Copy of your form Message To Spice";
    $message = "Yo Got A New Mail From :  " . $first_name . " " . $last_name . "\n\n ". "Phone Number:"." ". $number ."\n\n ". "Message:"." ". $subject ."\n\n ";
    $message2 = "Here is a copy of your message " . $first_name . " " . $last_name . "\n\n ". "Phone Number:"." ". $number ."\n\n ". "Message:"." ". $subject ."\n\n ";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo '<script type="text/javascript">'; 
echo 'alert("Thankyou For Your Message. We Will Contact You Soon. :)");'; 
echo 'window.location.href = "contactus.html";';
echo '</script>';
//     echo '<script language="javascript">';
// echo 'alert("Thankyou For Your Message. We Will Contact You Soon. :) ")';
// echo '</script>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>