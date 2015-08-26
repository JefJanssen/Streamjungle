<?php

session_start();

require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors = [];

if(isset($_POST['name'], $_POST['email'], $_POST['message'], $_POST['feedback'])) {

  $fields = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'message' => $_POST['message'],
    'feedback' => $_POST['feedback']
  ];

  foreach($fields as $field => $data) {
    if(empty($data)) {
      $errors[] = 'The ' . $field . ' field is required.';
    }
  }

  if(empty($errors)) {

    $m = new PHPMailer;

    $m->isSMTP();
    $m->SMTPAuth = true;



    $m->Host = 'smtp.gmail.com';
    $m->Username = 'sensonthebeast@gmail.com';
    $m->Password = 'Abowh2506';
    $m->SMTPSecure = 'ssl';
    $m->Port = 465;

    $m->isHTML();

    $m->Subject = 'Streamjungle User Contacted You..';
    $m->Body = '<i>From: ' . $fields['name'] . ' (' . $fields['email'] . ')</i><br><br><p><strong>SUBJECT: ' . $fields['feedback'] . '<br><br>' . $fields['message'] . '</p></strong>';

    $m->FromName = 'Streamjungle User';

    $m->AddAddress('dirkxsenneinc@gmail.com', 'Stream Jungle');

    if($m->send()) {
      header('Location: home.php');
      die();
    } else {
      $errors[] = 'Sorry, could not send email. Try again later.';
    }

  }


} else {
  $errors[] = 'Something went wrong.';
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

header('Location: contactform.php');
 ?>
