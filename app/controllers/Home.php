<?php

/**
 * Home is a controller that performs function related to the home page.
 */
class Home extends FrameWork {
  public function index() {
    $this->view('home');
  }
}
