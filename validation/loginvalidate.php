<?php

require_once '../database/Database.php';

if (isset($_POST['name'])) {
  $object = new Database();
  if (!($object->getClientInfo("username", $_POST['name']))) {
    $message['error'] = "Not a valid username";
  } else {
    $message['error'] = false;
  }
  echo json_encode($message);
}

if (isset($_POST['key'])) {
  $object = new Database();
  if (!($object->getClientInfo("passcode", $_POST['key']))) {
    $message['error'] = "Invalid password";
  } else {
    $message['error'] = false;
  }
  echo json_encode($message);
}
