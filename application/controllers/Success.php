<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Success extends CI_Controller {
    function __construct(){
        parent::__construct();
    }

    function success() {
        $this->load->view('headers/headers');
    	$this->load->view('success/success');
    }
}
?>