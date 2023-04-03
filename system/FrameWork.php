<?php

/**
 * 
 * FrameWork is a class that contains functions related to using files in view,
 * model.
 * 
 */
class FrameWork {
  /**
   * 
   * It requires the file if the file exists in the view folder.
   * 
   * @param string $fileName the name of the file.
   * @return void
   */
  public function view($fileName) {
    if (file_exists('app/views/' . $fileName . '.php')) {
      require_once 'app/views/' . $fileName . '.php';
    }
  }
  
  /**
   * 
   * It requires the file if the file exists in the model folder.
   * 
   * @param string $fileName the name of the file.
   * @return boolean
   */
  public function model($fileName) {
    if (file_exists('app/models/' . ucfirst($fileName) . '.php')) {
      require_once 'app/models/' . ucfirst($fileName) . '.php';
      return true;
    }
  }

  /**
   * 
   * It uses the header function to redirect to that page.
   * 
   * @param string $path the path where the it is to be redirected. 
   * @return void
   */
  public function redirect($path) {
    header('location: /' . $path);
  }
}
