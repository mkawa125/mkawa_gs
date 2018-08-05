<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function __autoload($classname) {
    if (strpos($classname, 'CI_') !== 0) {
        $file = APPPATH . 'libraries/' . $classname . '.php';
        if (file_exists($file) && is_file($file)) {
            @include_once($file);
        }
    }
}
class Download2 extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        //loading the files
        $this->load->helper(array('form', 'url'));
        $this->load->model('');
        $this->load->library('session');
        $this->load->helper('download');
    }

    public function download(){
        if (!empty($_GET['file'])){
            $fileName = basename($_GET['file']);
            $filePath = 'base_url()/catalogue'. $fileName;

            if (!empty($fileName) && file_exists($filePath)){
                //Defining headers
                header("cache-control: public");
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename=$fileName");
                header("Content-Type: application/zip");
                header("Content-Transfer-encoding: binary");

                //read the file
                force_download ( $fileName);
                exit;
            }
        }
        else{
            redirect('Pages/home', 'refresh');
        }
    }
}
