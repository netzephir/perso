<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller
{
    public function index()
    {
        $this->load->model('Job_model');
        $listJob = $this->Job_model->get();
        $this->template->view('Resume',$listJob);
    }

}