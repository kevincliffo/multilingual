<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Welcome extends CI_Controller {
      public function __construct(){
        parent::__construct();
      }
      public function index()
      {
        $this->session->set_userdata('site_lang',  "english");
        $data['align'] = $this->session->userdata('align');
        $this->load->view('welcome_message', $data);
      }
      public function switchLang($language = "") {
        $this->session->set_userdata('site_lang', $language);
        
        if($language == 'arabic')
        {
            $this->session->set_userdata('align', 'right');
        }
        else
        {
            $this->session->set_userdata('align', 'left');
        }
        header('Location: http://localhost:8012/multilingual/');
      }
    }