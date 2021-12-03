<?php

$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="proyecto_senaplay";

     $con = mysqli_connect($servidor, $usuario, $clave, $basededatos);
if (!$con) {
    echo"error al conectar el servidor";
}


     session_start();


 $id=$_GET['id'];
 $consulta = " SELECT  * from usuario WHERE   idusuario=".$id ;
   $ejecutarconsulta = mysqli_query($con,$consulta);
               $verfilas = mysqli_num_rows($ejecutarconsulta);
               $fila = mysqli_fetch_array($ejecutarconsulta);

                 $nombre=$fila['nombre'];
$apellido=$fila['apellido'];
$correo=$fila['correo'];
$telefono=$fila['telefono'];
$id_cargoFK=$fila['id_cargoFK'];
$pass=$fila['pass'];



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dinamiclass123@gmail.com';                     //SMTP username
    $mail->Password   = 'hola123.';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dinamiclass123@gmail.com', 'Dinamiclass');
    $mail->addAddress($correo);     //Add a recipient


    //Attachments    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirmacion de su Registro';
    $mail->Body    = '<!doctype html>
    <html ⚡4email data-css-strict>
        <head>
            <meta charset="utf-8">
            <style amp4email-boilerplate>
            body{visibility:hidden}
            </style>
            <script async src="https://cdn.ampproject.org/v0.js"></script>
            <style amp-custom>
    .es-desk-hidden {	
    display:none;	
    float:left;	
    overflow:hidden;	
    width:0;
    max-height:0;	
    line-height:0;
     }
    
     s {
    text-decoration:line-through;
      }
    
     body {	
     width:100%;	
     font-family:lato,"helvetica neue", helvetica, arial, sans-serif;
     }
    
    table {
        border-collapse:collapse;	
        border-spacing:0px;
          }
    
     table td, html, body, .es-wrapper {
    padding:0;
    Margin:0;
       }
    
    .es-content, .es-header, .es-footer {
     table-layout:fixed;
     width:100%;
     }
    
     p, hr {	
      Margin:0;
         }
        
     h1, h2, h3, h4, h5 {
    Margin:0;      
    line-height:120%;
    font-family:lato, "helvetica neue", helvetica, arial, sans-serif;
        }
        
    .es-left {	
     float:left;
    }
    .es-right {	
    float:right;
    }
    .es-p5 {	
    padding:5px;
    }
    .es-p5t {
    padding-top:5px;
    }
    .es-p5b {
    padding-bottom:5px;
    }
    .es-p5l {	
    padding-left:5px;
    }
    .es-p5r {
    padding-right:5px;
     }
    .es-p10 {	
    padding:10px;
    }
    .es-p10t {
    padding-top:10px;
    }
    .es-p10b {
    padding-bottom:10px;
    }
    .es-p10l {
    padding-left:10px;
    }
    .es-p10r {
    padding-right:10px;
    }
    .es-p15 {	
    padding:15px;
    }
    .es-p15t {	
     padding-top:15px;
        }
    .es-p15b {
    padding-bottom:15px;
    }
    .es-p15l {
    padding-left:15px;
    }
    .es-p15r {
    padding-right:15px;
    }
    .es-p20 {	
    padding:20px;
    }
    .es-p20t {
    padding-top:20px;
    }
    .es-p20b 
    {	
      padding-bottom:20px;
    }
    .es-p20l {	
      padding-left:20px;
    }
    .es-p20r {	
      padding-right:20px;
    }
    .es-p25 {	
      padding:25px;
    }
    .es-p25t {	
      padding-top:25px;
    }
    .es-p25b
    {
      padding-bottom:25px;
    }
    .es-p25l {
      padding-left:25px;
    }
    .es-p25r {
      padding-right:25px;
    }
    .es-p30 {
      padding:30px;
    }
    .es-p30t {
      padding-top:30px;
    }
    .es-p30b {
      padding-bottom:30px;
    }
    .es-p30l {
      padding-left:30px;
    }
    .es-p30r {
      padding-right:30px;
    }
    .es-p35 {
      padding:35px;
    }
    .es-p35t {
      padding-top:35px;
    }
    .es-p35b {
      padding-bottom:35px;
    }
    .es-p35l {
      padding-left:35px;
    }
    .es-p35r {
      padding-right:35px;
    }
    .es-p40 {
      padding:40px;
    }
    .es-p40t {
      padding-top:40px;
    }
    .es-p40b {
      padding-bottom:40px;
    }
    .es-p40l {
      padding-left:40px;
    }
    .es-p40r {
      padding-right:40px;
    }
    .es-menu td {
      border:0;
    }
    a {
      text-decoration:underline;
    }
    p, ul li, ol li {
      font-family:lato,"helvetica neue",helvetica,arial,sans-serif;
      line-height:150%;
    }
    ul li, ol li {
      Margin-bottom:15px;
    }
    .es-menu td a {
      text-decoration:none;
      display:block;
      font-family:lato, "helvetica neue", helvetica, arial, sans-serif;
    }
    .es-menu amp-img, .es-button amp-img {
      vertical-align:middle;
    }
    .es-wrapper {
      width:100%;
      height:100%;
    }
    .es-wrapper-color {	
      background-color:#F4F4F4;
    }
    .es-header {
      background-color:#EC6D64;
    }
    .es-header-body {
      background-color:#EC6D64;
    }
    .es-header-body p, .es-header-body ul li, .es-header-body ol li {
      color:#666666;
      font-size:14px;
    }
    .es-header-body a {
      color:#111111;
      font-size:14px;
    }
    .es-content-body {
      background-color:#FFFFFF;
    }
    .es-content-body p, .es-content-body ul li, .es-content-body ol li {
      color:#666666;
      font-size:18px;
    }
    .es-content-body a {
      color:#EC6D64;
      font-size:18px;
    }
    .es-footer {
      background-color:transparent;
    }
    .es-footer-body {
      background-color:transparent;
    }
    .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li {
      color:#666666;
      font-size:14px;
    }
    .es-footer-body a {
      color:#111111;
      font-size:14px;
    }
    .es-infoblock, .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li{
      line-height:120%;
      font-size:12px;
      color:#CCCCCC;
    }
    .es-infoblock a {
      font-size:12px;
      color:#CCCCCC;
    }
    h1 {
      font-size:48px;	font-style:normal;
      font-weight:normal;
      color:#111111;
    }
    h2 {
      font-size:24px;
      font-style:normal;
      font-weight:normal;
      color:#111111;
    }
    h3 {	font-size:20px;
      font-style:normal;
      font-weight:normal;
      color:#111111;
    }
    .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a {
      font-size:48px;
    }
    .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a {
      font-size:24px;
    }
    .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a {
      font-size:20px;
    }
    a.es-button, button.es-button {
      border-style:solid;
      border-color:#EC6D64;
      border-width:15px 25px 15px 25px;
      display:inline-block;
      background:#EC6D64;
      border-radius:2px;
      font-size:20px;
      font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;
      font-weight:normal;
      font-style:normal;
      line-height:120%;
      color:#FFFFFF;
      text-decoration:none;
      width:auto;
      text-align:center;
    }
    .es-button-border {
      border-style:solid solid solid solid;
      border-color:#EC6D64 #EC6D64 #EC6D64 #EC6D64;
      background:#EC6D64;
      border-width:1px 1px 1px 1px;
      display:inline-block;
      border-radius:2px;
      width:auto;
    }
    .es-p-default {
      padding-top:20px;
      padding-right:30px;
      padding-bottom:0px;
      padding-left:30px;
    }
    .es-p-all-default {
      padding:0px;
    }
    @media only screen and (max-width:600px) {
    p, ul li, ol li, a {
      line-height:150% 
    }
     h1, h2, h3, h1 a, h2 a, h3 a {
      line-height:120% 
    }
     h1 {
     font-size:30px;
     text-align:center 
    }
    h2 {
     font-size:26px;
     text-align:center
    }
    h3 {
     font-size:20px;
     text-align:center
     }
    .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a {
     font-size:30px 
    } 
    .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a {
     font-size:26px 
    }
    .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a {
     font-size:20px 
    }
    .es-menu td a {
     font-size:16px
    }
    .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a {
     font-size:16px 
    }
    .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a {
     font-size:16px 
    }
    .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a {
     font-size:16px 
    }
    .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a {
     font-size:12px 
    }
    *[class="gmail-fix"] { display:none } 
    .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 {
     text-align:center
    }
    .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 {
     text-align:right 
    }
     .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3{
     text-align:left 
    }
    .es-m-txt-r amp-img {
     float:right 
    }
    .es-m-txt-c amp-img {
     margin:0 auto 
    }
    .es-m-txt-l amp-img {
     float:left 
    }
    .es-button-border {
     display:block 
    }
    a.es-button, button.es-button {
      font-size:20px;
      display:block; 
      border-width:15px 25px 15px 25px 
    }
    .es-btn-fw {
       border-width:10px 0px;
       text-align:center 
    }
    .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right {
      width:100% 
    }
    .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header {
      width:100%; 
      max-width:600px 
    }
    .es-adapt-td {
       display:block;
       width:100% 
    }
    .adapt-img {
      width:100%;
      height:auto 
    }
    td.es-m-p0 {
       padding:0px
    }
    td.es-m-p0r {
      padding-right:0px 
    }
    td.es-m-p0l {
      padding-left:0px 
    }
    td.es-m-p0t {
      padding-top:0px 
    }
    td.es-m-p0b {
      padding-bottom:0 
    }
    td.es-m-p20b {
      padding-bottom:20px 
    }
    .es-mobile-hidden, .es-hidden {
       display:none
    }
    tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { 
      width:auto;
       overflow:visible;
      float:none; 
      max-height:inherit; 
      line-height:inherit 
    }
    tr.es-desk-hidden {
      display:table-row 
    }
    table.es-desk-hidden {
      display:table 
    }
    td.es-desk-menu-hidden{
      display:table-cell 
    }
    .es-menu td {
      width:1% 
    }
    table.es-table-not-adapt, .esd-block-html table {
      width:auto
    }
    table.es-social {
      display:inline-block 
    }
    table.es-social td {
      display:inline-block 
    }
    }
    </style>
    </head>
    <body>
    <div class="es-wrapper-color">
     <!--[if gte mso 9]><v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t"> <v:fill type="tile" color="#f4f4f4"></v:fill> </v:background><![endif]-->
     <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
         <tr class="gmail-fix" height="0">
             <td>
                 <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                 <tr>
                     <td style="line-height: 1px;min-width: 600px" height="0">
                    <amp-img src="images/41521605538834349.png" style="display: block;max-height: 0px;min-height: 0px;min-width: 600px;width: 600px" alt width="600" height="1"></amp-img>
                </td>
            </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                <tr>
                    <td align="center">
                        <table class="es-content-body" style="background-color: transparent" width="600" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td class="es-p15t es-p15b es-p10r es-p10l" align="left">
                                     <!--[if mso]><table width="580" cellpadding="0" cellspacing="0"><tr><td width="282" valign="top"><![endif]-->
                                       
                                        </td>
                                    </tr>
                                </table> <!--[if mso]></td><td width="20"></td>
    <td width="278" valign="top"><![endif]-->
       
         <!--[if mso]></td></tr></table><![endif]-->
        </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    <table class="es-header" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td align="center" bgcolor="#87b4ec" style="background-color: #87b4ec">
                <table class="es-header-body" width="600" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" style="background-color: #ffffff">
                    <tr>
                        <td class="es-p20t es-p10b es-p10r es-p10l" align="left">
                            <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="580" valign="top" align="center">
                                        <table width="100%" cellspacing="0" cellpadding="0" role="presentation">
                                            <tr>
                                                <td align="center" style="font-size: 0px">
                                                    <amp-img class="adapt-img" src="images/logodc.png" alt style="display: block" width="301" height="301" layout="responsive">
                                                    </amp-img>
                                                </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    <table class="es-content" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td style="background-color: #f4a96f" bgcolor="#f4a96f" align="center">
                <table class="es-content-body" style="background-color: transparent" width="600" cellspacing="0" cellpadding="0" align="center">
                    <tr><td align="left"><table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="600" valign="top" align="center">
                                <table style="background-color: #ffffff;border-radius: 4px;border-collapse: separate" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff" role="presentation"><tr><td class="es-p35t es-p5b es-p30r es-p30l" align="center"><h1>DinamiClass</h1>
                                </td>
    </tr>
    <tr>
        <td class="es-p5t es-p5b es-p20r es-p20l" bgcolor="#ffffff" align="center" style="font-size:0">
        <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
            <tr>
                <td style="border-bottom: 1px solid #ffffff;background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;height: 1px;width: 100%;margin: 0px">
                </td>
            
            </tr>
        </table>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    <table class="es-content" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td align="center">
                <table class="es-content-body" style="background-color: #ffffff" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                    <tr>
                        <td align="left">
                            <table width="100%" cellspacing="0" cellpadding="0">
                                <tr><td width="600" valign="top" align="center">
                                    <table style="background-color: #ffffff" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff" role="presentation">
                                        <tr>
                                            <td class="es-m-txt-l es-p20t es-p15b es-p30r es-p30l" bgcolor="#ffffff" align="left">
                                                <p>Buen día<br>Estimado usuario, es de nuestro agrado informarle que su registro en nuestra plataforma se ejecuto de manera exitosa.<br><br>Los datos suministrados por nuestro sistema para su ingreso son:<br>'.$correo.'    contraseña:  '.$pass.'<br><br></p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
    <tr>
        <td class="es-p20b es-p30r es-p30l" align="left"><table width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td width="540" valign="top" align="center"><table width="100%" cellspacing="0" cellpadding="0" role="presentation">
                    
                    <tr>
                        <td class="es-p40t es-p40b es-p10r es-p10l" align="center">
                            <span class="es-button-border" style="background: #7757ee;border-color: #ffffff">
                                <a href="login.php" class="es-button es-button-1" target="_blank" style="border-width: 15px 25px;background: #7757ee;border-color: #7757ee">Ingrese </a>
                            </span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    <table class="es-content" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td align="center"><table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                <tr>
                    <td align="left"><table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="600" valign="top" align="center">
                                <table style="border-radius: 4px;border-collapse: separate;background-color: #111111" width="100%" cellspacing="0" cellpadding="0" bgcolor="#111111" role="presentation">
                                    <tr>
                                        <td class="es-m-txt-l es-p35t es-p30r es-p30l" bgcolor="#111111" align="left">
                                            <h2 style="color: #ffffff;font-size: 16px">© Dinamiclass 2021 | Abello, Bernal, Jaimes y Valencia</h2>
                                            <p>
    
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </div>
    </body>
    </html>
    ';
                      
                       
    

    $mail->send();
      header('location:login.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}