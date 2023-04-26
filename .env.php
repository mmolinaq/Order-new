<?php

$mail_host = get_field('mail_host', 'option');
$mail_port = get_field('mail_port', 'option');
$mail_user = get_field('mail_user', 'option');
$mail_password = get_field('mail_password', 'option');
$mail_encrypt = get_field('mail_encrypt', 'option');
$admin = get_field('admin', 'option');

$env = array(
    "mail_host" => $mail_host,
    "mail_port" => $mail_port,
    "mail_user" => $mail_user,
    "mail_password" => $mail_password ,
    "mail_encrypt" => $mail_encrypt,
    "admin_email" => array(
      "mail" => $admin['email_admin'],
      "name" => $admin['name_admin']
    )
    );


?>
