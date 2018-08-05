<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );


class Download extends CI_Controller {
    public function __construct() {
        parent::__construct ();
        $this->load->helper(array('form','url', 'file'));
        $this->load->library('session','form_validation');
        $this->load->helper('download');
    }

    public function index() {
        $this->load->view ( 'pages/home');
    }

    public function download() {
        $this->load->helper('download');
        $file = realpath ( 'catalogue/Notus_catalogue.pdf');
        // check file exists
        if (file_exists ( $file )) {
            // get file content
            $data = file_get_contents ( $file );

            //force download
            force_download ( $file, $data);
        } else {
            // Redirect to base url
            redirect ('Pages/home', 'refresh');
        }
    }
}