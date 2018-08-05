<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 24/12/2017
 * Time: 17:36
 */

class Pages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //loading teh files
        $this->load->helper('url');
        $this->load->model('');
        $this->load->library('session');
    }

    public function home()
    {
        $this->load->view('pages/home.php');
    }

    public function contacts()
    {
        $this->load->view('pages/contact.php');
    }

    public function services()
    {
        $this->load->view('pages/services.php');
    }

    public function about()
    {
        $this->load->view('pages/about.php');;

    }
    public function team(){
        $this->load->view('pages/team.php');
    }

}
