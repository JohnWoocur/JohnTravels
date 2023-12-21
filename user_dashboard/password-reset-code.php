<?php
    
    include 'functions.php';
    session_start();
    require 'db-connection.php';
   
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    //Load Composer's autoloader
    
    require 'vendor/autoload.php';
    
    
    
    


function send_password_reset($get_name,$get_email,$token)
{
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP(); 
    $mail->SMTPAuth   = true;
                                               //Send using SMTP
    $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through                                   //Enable SMTP authentication
    $mail->Username   = "Info.johntravels@gmail.com";                     //SMTP username
    $mail->Password   = "dzkl enqo uggb gnmy";  
                                 //SMTP password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("Info.johntravels@gmail.com", $get_name);
    $mail->addAddress($get_email);     //Add a recipient
  //  $mail->addAddress('ellen@example.com');               //Name is optional
  //  $mail->addReplyTo('info@example.com', 'Information');
  //  $mail->addCC('cc@example.com');
  //  $mail->addBCC('bcc@example.com');

    //Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    $mail->isHTML(true);
     $mail->Subject="Reset Password Notification";

    
     $email_template ="
     <h2> Welcome!! <br/> Embark on the adventure of resetting your password with JohnTravels </h2>
     <h3>You are receiving this email because we received a password reset request for your account.</h3>
     <br/><br/>
     <a href='https://johntravels.lk/user_dashboard/changepwd.php?token=$token&Email=$get_email'>click me </a>
     <p>If you did not request a password reset, please ignore.</p>
     ";

     $mail->Body=$email_template;
     $mail->send();
  
}

 if(isset($_POST['reset_password']))

    {
        $email = mysqli_real_escape_string($conn, $_POST['Email']);
        $token =md5(rand());

        $check_email= "SELECT Email FROM customers WHERE Email='$email'LIMIT 1 ";
        $check_email_run = mysqli_query($conn,$check_email);

        if (mysqli_num_rows($check_email_run) > 0) {
            $row=mysqli_fetch_array($check_email_run);
            $get_name=$row['Username'];
            $get_email = $row['Email'];

            $update_token = "UPDATE customers SET verify_token='$token' WHERE Email='$get_email' LIMIT 1 ";
            $update_token_run = mysqli_query($conn,$update_token);

            if ($update_token_run) {
                send_password_reset($get_name,$get_email,$token);
                $_SESSION['status']="We emailed you a password reset link";
                header("Location: forgot.php");
                exit(0);
            } else {
                $_SESSION['status']="Something went wrong. #1 ";
                header("Location: forgot.php");
                exit(0);
            }
            
        }
        else {
            $_SESSION['status']="No Email Found ";
            header("Location: forgot.php");
            exit(0);
        }
    }


    if (isset($_POST['set_new_password'])) {
        $email=mysqli_real_escape_string($conn,$_POST['Email']);
        $new_password = mysqli_real_escape_string($conn,$_POST['new_password']);
        $confirm_password = mysqli_real_escape_string($conn,$_POST['confirm_password']);
        $token=mysqli_real_escape_string($conn,$_POST['paassword_token']);

        if (!empty($token)) {
            
            if (!empty($email) &&!empty($new_password) && !empty($confirm_password)) {
                
                $check_token="SELECT verify_token FROM customers WHERE verify_token='$token'LIMIT 1";
                $check_token_run = mysqli_query($conn,$check_token);

                if (mysqli_num_rows($check_token_run) > 0)
                {
                    if($new_password == $confirm_password)

                    {
                        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                        $update_password = "UPDATE customers SET password='$hashed_password' WHERE verify_token='$token' LIMIT 1";
                        $update_password_run = mysqli_query($conn,$update_password);

                        if ($update_password_run)
                         {
                            $new_token = md5(rand())."funda";
                            $update_to_new_token = "UPDATE customers SET verify_token ='$new_token' WHERE verify_token='$token' LIMIT 1";
                            $update_to_new_token_run = mysqli_query($conn,$update_password);

                            $_SESSION['status']="New Password Update Succesfully";
                            header("Location:login.php");
                            exit(0);
                        } 
                        else
                        {
                            $_SESSION['status']="Did Not Update Password Something wrong ";
                            header("Location: changepwd.php?token=$token&Email=$email");
                            exit(0);
                        }
                        
                    }
                    else
                    {
                    $_SESSION['status']="password and confirm password does not match ";
                    header("Location: changepwd.php?token=$token&Email=$email");
                    exit(0);
                    }
                }
                else
                {
                    $_SESSION['status']="Invalid Token ";
                    header("Location: changepwd.php?token=$token&Email=$email");
                    exit(0);
                }

            } else {
                $_SESSION['status']="All  Filed are Mandetory ";
                header("Location: changepwd.php?token=$token&Email=$email");
                exit(0);
            }
            




        } else {
            $_SESSION['status']="No Token Available ";
            header("Location: changepwd.php");
            exit(0);
        
        }
     }   
     
        
    
    








?>