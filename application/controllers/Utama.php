<?php

class Utama extends CI_Controller {
	function __construct()
	{
		ini_set('error_reporting', E_ALL & ~E_DEPRECATED);
		parent::__construct();
        $this->load->model('m_model');
           
	}
	
	public function index()
	{
		$data =array(

			'bencana' => $this->m_model->data_bencana(),
			
		);
		$this->load->view('utama',$data, FALSE);
	}
}
