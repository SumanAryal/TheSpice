
<?php
if(isset($_POST['submit'])){
    $to = "aryal.suman95@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
   $Traveller = $_POST["Traveller"];
    $number =$_POST["Contact"];
    $Ddate =$_POST["Ddate"];
    $subject =$_POST["message"];
    $subject1 = "Online Reservation";
    $subject2 = "Copy of your Reservation";
    $message = "Yo Got A New Reservation From :  " . $Name .  "\n\n ". "Phone Number:"." ". $number ."\n\n ". "Reservation Date: :"." ". $Ddate ."\n\n ".  "Number Of Guests:"." ". $Traveller ."\n\n ". "Message:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your Reservation " . $Name .  "\n\n ". "Phone Number:"." ". $number ."\n\n ". "Reservation Date: :"." ". $Ddate ."\n\n ".  "Number Of Guests:"." ". $Traveller ."\n\n ". "Message:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo '<script type="text/javascript">'; 
echo 'alert("Thankyou For Reservation. We Will Contact You Soon. :)");'; 
echo 'window.location.href = "index1.html";';
echo '</script>';
//     echo '<script language="javascript">';
// echo 'alert("Thankyou For Your Message. We Will Contact You Soon. :) ")';
// echo '</script>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>