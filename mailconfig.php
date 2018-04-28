<?php

    //include PHPMailerAutoload.php
    require 'phpmailer/PHPMailerAutoload.php';

if (empty($_POST) === false) {
    $errors = array();

    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $name = htmlentities($_POST['name'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES);

    if (empty($name) === true || empty($email) === true || empty($message) === true) {
        $errors[] = 'Prénom, email et message sont obligatoire dans le formulaire de contact!';
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'L\'email n\'est pas valide dans le formulaire de contact';
        }
        if (ctype_alpha($name) === false) {
            $errors[] = 'Le prénom doit contenir seulement des lettres dans le formulaire de contact!';
        }
    }

        if (empty($errors) === true) {
            //create an instance of PHPMailer
            $mail = new PHPMailer();

            //set a host
            $mail->Host = "smtp.gmail.com";

            //enable SMTP
            $mail->isSMTP();
            //set authentication to true
            $mail->SMTPAuth = true;

            //set login details for Gmail account
            $mail->Username = "glpi.mirror@gmail.com";
            $mail->Password = "Glpimirror66";

            //set type of protection
            $mail->SMTPSecure = "ssl"; //or we can use TLS

            //set a port
            $mail->Port = 465; //or 587 if TLS

            //set subject
            $mail->Subject = "Contact Ghand";

            //set HTML to true
            $mail->isHTML(true);

            //set body
            $mail->Body = "Auteur : $name, $email <br/>
                      <br/> Son message: <br/> $message  ";

            //add attachment
            //$mail->addAttachment('attachment/fbcover.png', 'Facebook cover.png');

            //nom qui s'affiche
            $mail->setFrom('glpi.mirror@gmail.com', 'Client');

            //adresse de celui qui vas recevoir
            $mail->addAddress('glpi.mirror@gmail.com');

            $mail->SMTPDebug = 0;
            //send an email
            if ($mail->send())
                header('Location: index.php?sent');


            //ancien test avec variables
            //mail('gregory.cascales@gmail.com','Contact Ghand','$message','From: ' . $email);
            //header('Location: index.php?sent');
            exit();
        }
    }
?>
