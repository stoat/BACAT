<?php

class Contacts extends Controller {

	function Contacts()
	{
		parent::Controller();
               // $this->load->helper('json');
                }
	
	function index()
	{
	//	$this->load->view('welcome_message');
          //      $this->load->view('vw_trailadmin');
                //$this->load->view('example');
            $fdata=$this->getcontacts();
          header('Content-type: application/json');
          $gdata=$this->json_encode($fdata);
          return $gdata;

            }
        function getcontacts()
        {
            $this->load->model('contact_model');
            $data=$this->contact_model->getcontacts();
             $fdata=array('success'=> true,'items'=>(array('contacts'=>$data)));
           return $fdata;
            //return json_encode($data);
            
        }
}
?>

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */