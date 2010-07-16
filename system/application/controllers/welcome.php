<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
            $this->load->model('contact_model');

        }
	
	function index()
	{
		 $this->load->view('welcome_message');
	}
        function getcontacts()
        {
            $this->load->model('contact_model');
            $data=$this->contact_model->getcontacts();
            return $data;
        }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */