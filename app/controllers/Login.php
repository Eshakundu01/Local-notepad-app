<?php

/**
 * This is the controller for login that validates users and redirects to that
 * particular page.
 */
class Login extends FrameWork {
  /**
   * This function views the login page.
   *
   * @return void
   */
  public function index() {
    $this->view('login');

    if (isset($_POST['submit'])) {
      if ($this->model('clientDatabase')) {
        $object = new ClientDatabase();
        $role = $object->getRole($_POST['user_name']);
        if ($role == "admin") {
          $this->redirect('admin/index');
        } elseif ($role == "reader") {
          $this->redirect('reader/index');
        }
      }
    }
  }

  public function authenticate() {
    if (isset($_POST['name'])) {
      if ($this->model('clientDatabase')) {
        $object = new ClientDatabase();
        if (!($object->getClientInfo("username", $_POST['name']))) {
          $message['error'] = "Not a valid username";
        } else {
          $message['error'] = false;
        }
        echo json_encode($message);
      }
    }

    if (isset($_POST['key'])) {
      if ($this->model('clientDatabase')) {
        $object = new ClientDatabase();
        if (!($object->getClientInfo("passcode", $_POST['key']))) {
          $message['error'] = "Invalid password";
        } else {
          $message['error'] = false;
        }
        echo json_encode($message);
      }
    }
  }

  
}
