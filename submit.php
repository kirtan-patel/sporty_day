<?php
require('config.php');
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

//require 'PHPMailer/src/Exception.php';
//require 'PHPMailer/src/PHPMailer.php';
//require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit_now'])) {
    $Fname = $_POST['Fname'];
    $Mname = $_POST['Mname'];
    $Lname = $_POST['Lname'];
    $name = $Fname." ".$Mname." ".$Lname;
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    //$email=$_POST['email'];
    $games = $_POST['techno'];
    $games_selecetd = "";
    foreach ($games as $games_selecetd1) {
        $games_selecetd .= $games_selecetd1 . ",";
    }

    //$query = "INSERT INTO `reg`( `Name`, `Number`,`Email`, `Gender`, `D.O.B`, `Age`,`Games`) VALUES ('$name','$phone','$email','$gender','$dob','$age','$games_selecetd')";
    $query = "INSERT INTO `reg`( `Name`, `Number`, `Gender`, `D.O.B`, `Age`,`Games`) VALUES ('$name','$phone','$gender','$dob','$age','$games_selecetd')";
    
    if (mysqli_query($con, $query)) {

/*$to = $email;
$subject = 'PATEL SAMAJ SPORT ENTRY FOR '.$name;
$from = 'patelsamajkisumu22@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi '.$name .'</h1>';
$message .= '<p style="color:#080;font-size:18px;">Name: '.$name.' </p>';
$message .= '<p style="color:#080;font-size:18px;">Phone: '.$phone.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Email: '.$email.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Gender: '.$gender.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Date Of Birth : '.$dob.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Age: '.$age.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Games: '.$games_selecetd.'</p>';

$message .= '</body></html>';
 
$mail = new PHPMailer(true);
  
//try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'patelsamajkisumu22@gmail.com';                 
    $mail->Password   = 'PatelYouth!2022';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('patelsamajkisumu22@gmail.com', 'PATEL SAMAJ KISUMU');           
    $mail->addAddress($email);
    //$mail->addAddress('receiver2@gfg.com', 'Name');
       
    $mail->isHTML(true);                                  
    $mail->Subject = $subject;
    $mail->Body    = $message;
   // $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
   // echo "Mail has been sent successfully!";
//} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//}
*/
    
    echo "<script>alert('Entry Submitted Successfully');document.location='index.php'</script>";
   
    } else {
    ?>
        <script>
            alert("Form Not Submitted, try again");
        </script>
            <?php


        }
    }





            ?>