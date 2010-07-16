<?php
class Products extends Public_Controller {
	function Products()
	{
		parent::Public_Controller();
		$this->load->library('validation');
		$this->load->helper('form');
		$this->load->model('product_model');
                $this->load->library('pagination');
	}
        function index()
        {
            var_dump($_GET); 
            // Search Form Parameters
            $products = $this->product_model->selectAllProducts(); // Should this be product types?
            $categories = $this->product_model->selectBaseCategories(); // !!Base Categories for FLP (Polymer)
            $applications = $this->product_model->selectAllApplications();//
          //FLP - return types and capacity
            $types=$this->product_model->selectProductTypes(); //
            $capacities=$this->product_model->selectCapacityLookup2();
            $config['base_url']='products';
            $config['total_rows']='36';
            $config['per_page']='12';
            $this->pagination->initialize($config); 

            $pageData= array();
            $pageData['types'] = $types;
            $pageData['capacities'] = $capacities;
            $pageData['products'] = $products;
            $pageData['categories'] = $categories;
            $pageData['applications'] = $applications;

           $content=$this->load->view('search_form_view', array('pageData'=>$pageData), true);
            $rightContent = $this->load->view('search_form_right', array(), true);
            $this->load->view('search_form_view', array('pageData'=>$pageData));
           // $this->load->view('cms_wrapper_view', array('content'=>$content,'rightContent'=>$rightContent));
        }

	function results($page=1)
	{
		$this->session->set_userdata('page', serialize($page));
		$newSearch = $this->input->post('newSearch');
		if($newSearch == 1)
		{
			$this->session->unset_userdata('searchParams');
		}
		elseif($this->input->post('refineSearch') !== false)
		{
			$searchParams = unserialize($this->session->userdata('searchParams'));
			$this->session->unset_userdata('searchParams');
			$field = $this->input->post('refineField');
			$value = $this->input->post('refineValue');
			if ($field == 'referral')
			{
				$searchParams[$field] = $value;
			}
			else
			{
				unset($searchParams[$field][$value]);
			}
			$this->session->set_userdata('searchParams', serialize($searchParams));
		}
		if ($this->session->userdata('searchParams') === false)
		{
                    // FLP
                        $types=$this->input->post('types');
			$cat = $this->input->post('category');
                        $capacity = $this->input->post('capacity');
                    // MIRAGE
			$application = $this->input->post('application');
			$industry = $this->input->post('industry');
			$allapplications = $this->input->post('allapplications');
			$cat = $this->input->post('category');
                        $allcat = $this->input->post('allcategory');
			$searchParams = array();
			// buld up the search parts
			if ($application !== false && !empty($application))
			{
				$searchParams['byApplication'] = true;
				$searchParams['application'] = $application;
			}
			else
			{
				$searchParams['byApplication'] = false;
				if ($allapplications !== false)
				{
					$searchParams['allapplications'] = true;
				}
				else
				{
					$searchParams['allpplications'] = false;
				}
			}

			if ($industry !== false && !empty($industry))
			{
				$searchParams['anyIndustry'] = false;
				$searchParams['industry'] = $industry;
			}
			else
			{
				$searchParams['anyIndustry'] = true;
			}

			if ($category !== false && !empty($category))
			{
				$searchParams['categoryIds'] = $category;
			}

			$this->session->set_userdata('searchParams', serialize($searchParams));
                        }
		else
		{
			$searchParams = unserialize($this->session->userdata('searchParams'));
		}
		$start = (PER_PAGE * $page) - PER_PAGE;
		$results = $this->product_model->selectProductsBySearch($searchParams, $start, PER_PAGE);
		$totalPages = floor($results['totalResults']/PER_PAGE) + (($results['totalResults']%PER_PAGE) ? 1 : 0);
		$page = ($page > $totalPages) ? $totalPages : $page;  // check the supplied page is in range
		$start = ($page > 0 ) ? ($page*PER_PAGE)-PER_PAGE : 0;
		$pagingNav = $this->load->view('search_results_paging', array('page'=>$page, 'totalPages'=>$totalPages), true);
// Here Thursday 06102010
        	$disabilityTypeLookup = $this->disabilitytypes_model->selectDisabilityTypesLookup();
		$breakTypeLookup = $this->breaktypes_model->selectBreakTypesLookup();
		$areaLookup = $this->providers_model->selectAreasLookup();
//
                $content=$this->load->view('search_results', array('results'=>$results, 'pagingNav'=>$pagingNav), true);
		$rightContent = $this->load->view('search_results_right', array('searchParams'=>$searchParams, 'disabilityTypeLookup'=>$disabilityTypeLookup, 'breakTypeLookup'=>$breakTypeLookup, 'areaLookup'=>$areaLookup), true);
		$this->load->view('cms_wrapper_view', array('content'=>$content,'rightContent'=>$rightContent));

	}

	function detail($productId)
	{
		$product = $this->product_model->selectProductById($productId);
		if ($this->session->userdata('page') !== false)
		{
			$backPage = unserialize($this->session->userdata('page'));
			$backPage = ($backPage > 1) ? $backPage : '';
		}
		else
		{
			$backPage = false;
		}
		$content=$this->load->view('search_detail', array('product'=>$product,'backPage'=>$backPage), true);
		$rightContent = $this->load->view('search_detail_right', array('backPage'=>$backPage), true);
		$this->load->view('cms_wrapper_view', array('content'=>$content,'rightContent'=>$rightContent));

	}


	function _sendError($msg, $file='', $line=''){
		echo '({msg: "'.$msg.', $file = '.$file.', $line = '.$line.'"})';
//		echo '({msg: "'.$msg.'"})';
		exit(0);
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
            if (!$results){ echo ('results Duff');}
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
        //    }
         /*
            if (count($cats)>0){
                       $fcats=$this->product_model->filtreCats($cats);
                        foreach($fcats as $cat => $filter) {
                            if ($cat=='sizes'){$sizes=$filter;}
                            if ($cat=='types'){$types=$filter;}
                        }
                }else
                {
                    // must be all categories
                }
            if (count($sizes)>0){
                        $fcaps=$this->product_model->filtreCaps($sizes);
                        foreach($fcaps as $cap => $filter) {
                            if ($cap=='cats'){$cats=$filter;}
                            if ($cap=='types'){$types=$filter;}
                        }
            }else
            {
                // must be all sizes
            }
            $products=$this->product_model->getProductFromCats($cats);
//           var_dump($products);
  *
  */
           $data=array('success'=> true,'items'=>(array('categories'=>$cats,'types'=>$types,'sizes'=>$sizes,'products'=>$products)));
           header('Content-type: application/json');
           $this->json_lib->sendJSON($data);
        }

}
?>
