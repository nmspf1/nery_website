<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Landing extends CI_Controller
{
  /**
   * This is default constructor of the class
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->model('slideshow');

  }

  public function index() {
    $data['files'] = $this->slideshow->getRows();
    $this->load->view('landing', $data);
  }

}

?>
