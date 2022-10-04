<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\OAuth2\Client\Provider\Google;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MailController extends Controller
{
    //1//0e79AIsk0qx7fCgYIARAAGA4SNwF-L9IrmhJN9lhGBzzhbZFqrGosnzYP--BZsJ46mBCjFUPn1XFXG2VJLdeiPqyNza5CWU3YT8Y

    private $email;
    private $name;
    private $client_id;
    private $client_secret;
    private $token;
    private $provider;

    /**
     * Default Constructor
     */
    public function __construct()
    {
       
     
        $this->client_id        = env('GOOGLE_API_CLIENT_ID');
        $this->client_secret    = env('GOOGLE_API_CLIENT_SECRET');
        $this->provider         = new Google(
            [
                'clientId'      => $this->client_id,
                'clientSecret'  => $this->client_secret
            ]
        );

    }
    //Sending Email Template
 
 /*    public function sendcredentials($email){
       
      $receiver = $email;
       $name = "Samplemail";
        $this->token = "1//0e79AIsk0qx7fCgYIARAAGA4SNwF-L9IrmhJN9lhGBzzhbZFqrGosnzYP--BZsJ46mBCjFUPn1XFXG2VJLdeiPqyNza5CWU3YT8Y";
        $mail = new PHPMailer(true);

       try {
           $mail->isSMTP();
           $mail->SMTPDebug = SMTP::DEBUG_OFF;
           $mail->Host = 'smtp.gmail.com';
           $mail->Port = 465;
           $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
           $mail->SMTPAuth = true;
           $mail->AuthType = 'XOAUTH2';
           $mail->setOAuth(
               new OAuth(
                   [
                       'provider'          => $this->provider,
                       'clientId'          => $this->client_id,
                       'clientSecret'      => $this->client_secret,
                       'refreshToken'      => $this->token,
                       'userName'          => "noreply.zcmctelemedicine@gmail.com",
                   ]
               )
           );

           $mail->setFrom("noreply.zcmctelemedicine@gmail.com","Noreply@Telemedicine");
           $mail->addAddress($receiver, $name);
           $mail->Subject = 'Test Email TElemed';
           $mail->CharSet = PHPMailer::CHARSET_UTF8;
           $body = '<!DOCTYPE html>
           <html lang="en">
           
           <head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <meta http-equiv="X-UA-Compatible" content="ie=edge">
               <title></title>
           </head>
           
           <body style="background-color: aquamarine;text-align:center">
           <p><br><br><br></p>
               <h2><a target="_blank" href="#">Medical Clinic</a></h2>
           
               <h3 style="color:rgb(14, 87, 136)">Welcome new Administrator!
           
           
                   </h3>
                   <h4>Here are your Login Credentials,</h4>
           
           
           
           
                   <h4>Test mail
           
                   </h4>
           
                   <br>
                   <h5>
                       Do not share this to anyone.
                       <br>
           
                       All rights Reserved &middot; 2022
           
                   </h5>
                   <p><br><br><br></p>
           
           </body>
           
           </html>
           
           ';
           $mail->msgHTML($body);
           $mail->AltBody = 'This is a plain text message body';
           if( $mail->send() ) {
          echo "was sent";
           } else {
              echo "not send";
           }
       } catch(Exception $e) {
           return redirect()->back()->with('error', 'Exception: ' . $e->getMessage());
       }  

    }

 */
}