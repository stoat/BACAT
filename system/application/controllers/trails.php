<?php

class Gallery extends Controller {

	function Gallery()
	{
		parent::Controller();
                $this->load->model('contact_model');
                $this->load->model('trail_model');
                $this->load->library('pagination');
	}

	function index()

	{  $menu='<div id="menu">
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
                            <li><a href="#">Comments RSS</a></li>
                    </ul>
                </div>';
            $pageData= array();
            $trails=$this->trail_model->gettrails();
            $pageData['trails']=$trails;
            $pageData['menu']=$menu;
            $this->load->view('vw_gallery',$pageData);
        }

}