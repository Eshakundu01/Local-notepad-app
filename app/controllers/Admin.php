<?php

/**
 * Admin is a controller that consists of d=functions related to admin page.
 * 
 */
class Admin extends FrameWork {
  /**
   * This function views the admin page as well as performs submission.
   *
   * @return void
   */
  public function index() {
    $this->view('admin');
    if (isset($_POST['save'])) {
      $picName = $_FILES['image']['name'];
      $path = 'assets/uploads/' . basename($picName);
      move_uploaded_file($_FILES['image']['tmp_name'], $path);
      if ($this->model('book')) {
        $books = new Book();
        if ($books->insertEntry($_POST['id'], $_POST['title'], $_POST['genre'], 
        $_POST['date'], $_POST['author'], $picName, (float)$_POST['rate'], 
        $_POST['category'])) {
          echo "<script>alert('Successfully entered the information')</script>";
        } else {
          echo "<script>alert('Could not enter the values')</script>";
        }
      }
    }
  }

  /**
   * This ends the session as well as after destroying the session redirects to
   * the login page.
   *
   * @return void
   */
  public function logout() {
    session_start();
    session_unset();
    session_destroy();
    $this->redirect('login/index'); 
  }

}
