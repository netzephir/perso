<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index()
	{
            $this->load->model('Project_model');
            $listProject = $this->Project_model->get();
            $this->template->view('Project/List',array('listProject'=>$listProject));
	}
}
