<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dailyprod extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function render_view($data)
    {
        $this->template->load('template', $data); //Display Page
    }


    public function index()
    {
        // if ($this->session->userdata('Nik') != null && $this->session->userdata('Username') != null) {
            $data = array(
                'page_content'      => '../page/dailyprod',
                'ribbon'            => '<li class="active">Daily Prod Result</li>',
                'page_name'         => 'Daily Prod Result',
            );
            $this->render_view($data); //Memanggil function render_view
        // } else {
        //     $this->load->view('page/login'); //Memanggil function render_view
        // }
    }
}