<?php

class Dashboard extends Controller {

	function Dashboard()
	{
		parent::Controller();	
                $this->load->model('contact_model');
                $this->load->model('trail_model');
                $this->load->library('pagination');
	}

	function index()
	{
        //load home page view
            	$menu='<div id="menu">
		<ul id="main">
			<li class="current_page_item"><a href="/bacat">Home</a></li>
			<li><a href="arts">Arts</a></li>
			<li><a href="community">Community</a></li>
                        <li><a href="gardens">Gardens</a></li>
                        <li><a href="trails">Trails</a></li>
			<li><a href="about">About Us</a></li>
			<li><a href="contact">Contact Us</a></li>
		</ul>
		<ul id="feed">
			<li><a href="#">Flickr</a></li>
			<li><a href="gallery">Comments RSS</a></li>
		</ul>
                </div>';
            $pageData= array();
            $trails=$this->trail_model->gettrails();
            $pageData['trails']=$trails;
            $pageData['menu']=$menu;
           // var_dump($pageData);
          $this->load->view('vw_home',$pageData);
        }
        function trails()
        {
             $this->load->view('vw_trails');
        }
        function contacts($public=1)
        {// function to return public facing contacts.
          if ($public==0)
              {$cdata=$this->contact_model->getcontacts();
              echo('private');              }
              else
          {$cdata=$this->contact_model->getpubliccontacts();
          echo('public');
          }
           echo (json_encode($cdata));
        }
        function returnFiltered()
        { //return the filtered set of results
            $cats =array();
            $types =array();
            $sizes =array();
            $products =array();
//Dump the post into the appropriate arrays
            foreach($_POST as $key => $data) {
                if (!is_array($data)){
                }else{
                        foreach($data as $item =>$nf)
                        switch($key){
                        case 'category':
                            $cats[]=$item;
                            break;
                        case 'capacity':
                            $sizes[]=$item;
                            break;
                        case 'type':
                            $types[]=$item;
                            break;
                        }
                }
            }
// Use arrays to retrieve filtered results
            $results=$this->product_model->filterfn($sizes,$cats,$types);
           // var_dump($results);
            if (!$results){ return false;}
//  if (!results){}else{
             if (count($results)>0){
// $fcats=$this->product_model->filtreCats($cats);
                    foreach($results as $cat => $filter) {
                        if ($cat=='sizes'){$sizes=$filter;}
                        if ($cat=='types'){$types=$filter;}
                        if ($cat=='cats'){$cats=$filter;}
                        if ($cat=='products'){$products=$filter;}
                    }
             }
           $data=array('success'=> true,'items'=>(array('categories'=>$cats,'types'=>$types,'sizes'=>$sizes,'products'=>$products)));
           header('Content-type: application/json');
           $this->json_lib->sendJSON($data);
        }

}

?>