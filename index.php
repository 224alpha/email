<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $mail = new PHPMailer(true);                              
        try {
            $mail->SMTPDebug = 1;                                
            $mail->isSMTP();                                    
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;                              
            $mail->Username = 'emailid@gmail.com'; //put your gmail email id                                        
            $mail->Password = 'password';  //put your gmail password
            $mail->SMTPSecure = 'tls';                            
            $mail->Port = 587;                                   
            $mail->setFrom("kirankumardas18091997@gmail.com", 'client');   //send from
            $mail->addAddress("kirankumardas18091997@gmail.com");         //send to     
            $mail->isHTML(true);                                 
            $mail->Subject ="Test" ;
            $mail->Body    =    ;
            $mail->send();
            echo "Done";
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
        

?>
