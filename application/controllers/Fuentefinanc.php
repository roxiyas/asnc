<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fuentefinanc extends CI_Controller {

        public function index(){
                 $this->load->view('templates/header.php');
                 $this->load->view('templates/navigator.php');
                 $this->load->view('tablas/fuentefinanc.php');
                 $this->load->view('templates/footer.php');
        }
}
