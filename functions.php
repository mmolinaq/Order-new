<?php
require 'includes/post-types.php';
require "includes/recursive-html.php";
require "includes/ajax-request.php";
require '.env.php';
require 'includes/phpmailer/PHPMailer.php';
require 'includes/phpmailer/SMTP.php';
add_theme_support("post-thumbnails");

function env($key)
{
  global $env;
  return $env[$key];
}

function sendMail($data = array())
{
  global $env;

  $receptors = $data["receptors"];
  $html = $data["html"];
  $subject = $data["subject"];

  $MAIL_HOST = env("mail_host");
  $MAIL_PORT = env("mail_port");
  $MAIL_USER = env("mail_user");
  $MAIL_PASSWORD = env("mail_password");
  $MAIL_ENCRYPT = env("mail_encrypt");
  $ADMIN_EMAIL = env("admin_email");

  $mail = new PHPMailer(true);

  $mail->SMTPDebug = 0;
  $mail->isSMTP();
  $mail->Host       = $MAIL_HOST;
  $mail->SMTPAuth   = true;
  $mail->Username   = $MAIL_USER;
  $mail->Password   = $MAIL_PASSWORD;
  $mail->SMTPSecure = $MAIL_ENCRYPT;
  $mail->Port       = $MAIL_PORT;
  $mail->CharSet = 'UTF-8';

  $mail->setFrom($ADMIN_EMAIL["mail"], $ADMIN_EMAIL["name"]);
  foreach ($receptors as $rkey => $rval) {
    $mail->addCC($rkey, $rval);
  }

  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body    = $html;

  return $mail->send();
}

function mypage_get_html($name, $data = array())
{
  extract($data);
  ob_start();
  require(get_template_directory() . "/templates/" . $name . ".php");
  $html = ob_get_clean();
  return $html;
}
?>