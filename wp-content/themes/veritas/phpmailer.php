<?php

include_once "model/config.php";

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
if (!empty($_POST["submit"])) {

          $recaptcha = $_POST['g-recaptcha-response'];
          
          // Put secret key here, which we get
          // from google console
          $secret_key = '6Lcze9YiAAAAAAEu16VZtdp75svG3iL6-A4B97BW';

          // Hitting request to the URL, Google will
          // respond with success or error scenario
          $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
                . $secret_key . '&response=' . $recaptcha;

          // Making request to verify captcha
          $response = file_get_contents($url);

          // Response return by google is in
          // JSON format, so we have to parse
          // that json
          $response = json_decode($response);

          // Checking, if response is true or not
          if ($response->success == true) {
              // echo '<script>alert("Google reCAPTACHA verified")</script>';          

  
          $first_name = $_POST['f_name'];
          $last_name = $_POST['l_name'];
          $gender = $_POST['gender'];

          if($gender == "Others"){
              $gender = $_POST['others'];
          }else{
              $gender =$_POST['gender'];
          }

          $dob = $_POST['dob'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];

          $cancer_type = $_POST['cancer_type'];

          if(is_array($cancer_type)) {
                $cancer_type = implode(',' , $cancer_type);
              }

          $diagnosed = $_POST['diagnosed'];
          $comment = $_POST['comment'];




//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jeroldjeis06@gmail.com';                     //SMTP username
    $mail->Password   = 'evhskrktlltqaxle';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('jeroldjeis06@gmail.com', 'Server');
    $mail->addAddress('jeroldjeis06@gmail.com', 'Deen');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'An Appointment Request From the people';

   
    

    $message  = "<html><body>";  
    $message .= "<table align='center' width='100%' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff;  border: 15px groove; font-family:Verdana, Geneva, sans-serif;'>";
    $message .= "<thead>
      <tr height='100'>  
      <th colspan='4' style='background-color:#4d705c; font-family:Verdana, Geneva, sans-serif; color:#fff; font-size:25px; border: 15px groove;'>
      <img src='https://abiteoffrance.com/veritas/img/footlogo.png' alt='logo' title='logo' style='height:auto; width:50%; max-width:50%;' />      
      </th> 
      </tr>
                </thead>";
    $message .= "<tbody>

          <th colspan='4' style='background-color:#4d705c; font-family:Verdana, Geneva, sans-serif; color:#fff; font-size:25px; border: 15px groove;'>      
            Appointment Contact Form      
            </th>      
      
          <tr align='left' height='50'>
          <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Full Name</th>
          <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$first_name." ".$last_name." </td>         
          </tr>

          <tr align='left' height='50'>
          <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Gender</th>
          <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$gender."</td>         
          </tr>

          <tr align='left' height='50'>
          <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Date of Birth</th>
          <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$dob."</td>         
          </tr>

          <tr align='left' height='50'>
          <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Contact Number</th>
          <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$phone."</td>         
          </tr>

          <tr align='left' height='50'>
          <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Mail ID</th>
          <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$email."</td>         
          </tr>

          <tr align='left' height='50'>
          <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>What is the known or suspected cancer type?</th>
          <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$cancer_type."</td>         
          </tr>

          <tr align='left' height='50'>
          <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Have you been diagnosed?</th>
          <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$diagnosed."</td>         
          </tr>

          <tr align='left' height='50'>
          <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Do you have any pre-existing health conditions?</th>
          <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$comment."</td>         
          </tr>
          </tbody>";
    $message .= "</table>";
    $message .= "</body></html>";   
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    // $mail->send(); 

    $sql = "INSERT INTO appointment_details(first_name, last_name, gender, dob, phone, email, cancer_type, diagnosed, comment) VALUES ('$first_name','$last_name','$gender','$dob','$phone','$email','$cancer_type','$diagnosed','$comment')";
if ((mysqli_query($conn, $sql))&&($mail->send())) {
    echo "<script> 
        alert('Your appointment request is sent successfully. We will contact you soon.');
        window.location.href = 'contactus.php';
        </script>";
  }else{
    echo "<script> 
        alert('Your appointment is not booked please Try again.');
        window.location.href = 'contactus.php';
        </script>";
  }
} catch (Exception $e) {
    echo "<script> 
        alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
        window.location.href = 'contactus.php';
        </script>";
}
} else {
   echo "<script> 
        alert('Error in Google reCAPTACHA');
        window.location.href = 'contactus.php';
        </script>";
}
}

// Patient Network Form
if (!empty($_POST["network_submit"])) {

  $recaptcha = $_POST['g-recaptcha-response'];
  
  // Put secret key here, which we get
  // from google console
  $secret_key = '6Lcze9YiAAAAAAEu16VZtdp75svG3iL6-A4B97BW';

  // Hitting request to the URL, Google will
  // respond with success or error scenario
  $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
        . $secret_key . '&response=' . $recaptcha;

  // Making request to verify captcha
  $response = file_get_contents($url);

  // Response return by google is in
  // JSON format, so we have to parse
  // that json
  $response = json_decode($response);

  // Checking, if response is true or not
  if ($response->success == true) {
      // echo '<script>alert("Google reCAPTACHA verified")</script>';          


  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];

  if($gender == "others"){
      $gender = $_POST['others'];
  }else{
      $gender =$_POST['gender'];
  }

  $cancer_type = $_POST['cancer_type'];

  $network_type = $_POST['network_type'];
 
  if(is_array($network_type)) {
        $network_type = implode(', ' , $network_type);
      }

  

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
//Server settings
$mail->SMTPDebug = 0;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'jeroldjeis06@gmail.com';                     //SMTP username
$mail->Password   = 'evhskrktlltqaxle';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('jeroldjeis06@gmail.com', 'Server');
$mail->addAddress('jeroldjeis06@gmail.com', 'Deen');     //Add a recipient

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Want to get into Patients Network';




$message  = "<html><body>";  
$message .= "<table align='center' width='100%' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; border: 15px groove; font-family:Verdana, Geneva, sans-serif;'>";
$message .= "<thead>
<tr height='100'>  
<th colspan='4' style='background-color:#4d705c; font-family:Verdana, Geneva, sans-serif; color:#fff; font-size:25px; border: 15px groove;'>
<img src='https://abiteoffrance.com/veritas/img/footlogo.png' alt='logo' title='logo' style='height:auto; width:50%; max-width:50%;' />      
</th> 
</tr>
        </thead>";
$message .= "<tbody>

  <th colspan='4' style='background-color:#4d705c; font-family:Verdana, Geneva, sans-serif; color:#fff; font-size:25px; border: 15px groove;'>      
    Get in Touch Form      
    </th>      

  <tr align='left' height='50'>
  <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Full Name</th>
  <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$name."</td>         
  </tr>

  <tr align='left' height='50'>
  <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Age</th>
  <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$age."</td>         
  </tr>

  <tr align='left' height='50'>
  <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Mail ID</th>
  <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$email."</td>         
  </tr>

  <tr align='left' height='50'>
  <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Contact Number</th>
  <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$phone."</td>         
  </tr>

  <tr align='left' height='50'>
  <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Gender</th>
  <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$gender."</td>         
  </tr>

  <tr align='left' height='50'>
  <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>What is your type of cancer?</th>
  <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$cancer_type."</td>         
  </tr>   

  <tr align='left' height='50'>
  <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>I am interested in</th>
  <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$network_type."</td>         
  </tr> 
  </tbody>";
$message .= "</table>";
$message .= "</body></html>";   
$mail->Body = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
// $mail->send(); 

$query = "INSERT INTO get_in_touch(full_name, age, email, phone, gender, cancer_type, network_type) VALUES ('$name','$age','$email','$phone','$gender','$cancer_type','$network_type')";
if ((mysqli_query($conn, $query)) && ($mail->send())) {

echo "<script> 
        alert('Your details have added successfully. We will contact you soon');
        window.location.href = 'patient-network.php';
        </script>";

// echo 'Message has been sent';
}else{
echo "<script> 
        alert('Your details are not added please Try again.');
        window.location.href = 'patient-network.php';
        </script>";

}
} catch (Exception $e) {
echo "<script> 
        alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
        window.location.href = 'patient-network.php';
        </script>";

}
} else {
echo "<script> 
        alert('Error in Google reCAPTACHA');
        window.location.href = 'patient-network.php';
        </script>";

}
}

// Subcribe Email Form
if (!empty($_POST["subcribe_email"])) { 

  $email = $_POST['email_footer'];
  
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
//Server settings
$mail->SMTPDebug = 0;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'jeroldjeis06@gmail.com';                     //SMTP username
$mail->Password   = 'evhskrktlltqaxle';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('jeroldjeis06@gmail.com', 'Server');
$mail->addAddress('jeroldjeis06@gmail.com', 'Deen');     //Add a recipient

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Want to Subcribe Your Newsletter';




$message  = "<html><body>";  
$message .= "<table align='center' width='100%' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; border: 15px groove; font-family:Verdana, Geneva, sans-serif;'>";
$message .= "<thead>
<tr height='100'>  
<th colspan='4' style='background-color:#4d705c; font-family:Verdana, Geneva, sans-serif; color:#fff; font-size:25px; border: 15px groove;'>
<img src='https://abiteoffrance.com/veritas/img/footlogo.png' alt='logo' title='logo' style='height:auto; width:50%; max-width:50%;' />      
</th> 
</tr>
        </thead>";
$message .= "<tbody>

  <th colspan='4' style='background-color:#4d705c; font-family:Verdana, Geneva, sans-serif; color:#fff; font-size:25px; border: 15px groove;'>      
  Subscribe Email for Newsletter
  </th>      

  <tr align='left' height='50'>
  <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Email ID</th>
  <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$email."</td>         
  </tr>
  </tbody>";
$message .= "</table>";
$message .= "</body></html>"; 

$mail->Body = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
// $mail->send(); 

$query = "INSERT INTO subcribe_mail(email) VALUES ('$email')";
if ((mysqli_query($conn, $query))&&($mail->send())) {
echo "<script> 
        alert('Thank you for subcribing. We will contact you soon.');
        window.location.href = 'index.php';
        </script>";
}else{
  
echo "<script> 
        alert('Your mail is not entered please Try again.');
        window.location.href = 'index.php';
        </script>";
}
} catch (Exception $e) {
echo "<script> 
        alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
        window.location.href = 'index.php';
        </script>";
}
// } else {
// echo '<script>alert("Error in Google reCAPTACHA")</script>';
// }
}


// Newsletter Subscribe Email Form
if (!empty($_POST["newsletter_submit"])) { 

  $email = $_POST['newsletter_email'];
  
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
//Server settings
$mail->SMTPDebug = 0;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'jeroldjeis06@gmail.com';                     //SMTP username
$mail->Password   = 'evhskrktlltqaxle';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('jeroldjeis06@gmail.com', 'Server');
$mail->addAddress('jeroldjeis06@gmail.com', 'Deen');     //Add a recipient

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Want to Subcribe Your Newsletter';




$message  = "<html><body>";  
$message .= "<table align='center' width='100%' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; border: 15px groove; font-family:Verdana, Geneva, sans-serif;'>";
$message .= "<thead>
<tr height='100'>  
<th colspan='4' style='background-color:#4d705c; font-family:Verdana, Geneva, sans-serif; color:#fff; font-size:25px; border: 15px groove;'>
<img src='https://abiteoffrance.com/veritas/img/footlogo.png' alt='logo' title='logo' style='height:auto; width:50%; max-width:50%;' />      
</th> 
</tr>
        </thead>";
$message .= "<tbody>

  <th colspan='4' style='background-color:#4d705c; font-family:Verdana, Geneva, sans-serif; color:#fff; font-size:25px; border: 15px groove;'>      
  Subscribe Email for Newsletter
  </th>      

  <tr align='left' height='50'>
  <th style='font-size:15px; border: 1px groove; padding-left: 15px;'>Email ID</th>
  <td style='font-size:15px; border: 1px groove; padding-left: 15px;'>".$email."</td>         
  </tr>
  </tbody>";
$message .= "</table>";
$message .= "</body></html>"; 

$mail->Body = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
// $mail->send(); 

$query = "INSERT INTO subcribe_mail(email) VALUES ('$email')";
if ((mysqli_query($conn, $query))&&($mail->send())) {
echo "<script> 
        alert('Thank you for subcribing. We will contact you soon.');
        window.location.href = 'patient-network.php';
        </script>";
}else{
  
echo "<script> 
        alert('Your mail is not entered please Try again.');
        window.location.href = 'patient-network.php';
        </script>";
}
} catch (Exception $e) {
echo "<script> 
        alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
        window.location.href = 'patient-network.php';
        </script>";
}
// } else {
// echo '<script>alert("Error in Google reCAPTACHA")</script>';
// }
}