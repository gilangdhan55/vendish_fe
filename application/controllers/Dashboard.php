<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	

	public function render($view, array $data = NULL, $dataHeader = NULL)
    {
         
        $this->load->view('template/template', $dataHeader); 
    }


	public function index()
	{
		$data					= array();
		$dataHeader['title']	= 'Dashboard';
		$dataHeader['menu']		= 'dashboard';
		$dataHeader['submenu']	= '';

		$this->render('Dashboard', $data, $dataHeader);
	}


}
