<?php

require_once 'database/Database.php';

if (isset($_POST['submit'])) {
  $object = new Database();
  $role = $object->getRole($_POST['user_name']);
  if ($role == "admin") {
    header('location:admin.php');
  } else {
    header('location:reader.php');
  }
}
