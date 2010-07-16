<?php
/*Product model - provides access to product characteristics
 * 23/03/2010 RCM - KOM
*/
class Product_Model extends Model
{
	function ProductModel()
	{
		parent::Model();
		$this->load->database();
		$this->load->helper('form');
		//  $this->load->library('JSON_lib');
		//    $this->load->helper('JSON_help');
	}
	function checkRelationship()
	{
		// using category id and parent category id check that the relationship is valid.
	}
	function getApplication($i)
	{
		$sql = 'SELECT * from '.TBL_APPLICATIONS.' where applicationID= '.$i ;
		$query = $this->db->query($sql);
		$app = $query->result_array();
		if ($query->num_rows > 0)
		{
			foreach ($app AS $i)
			{
				$result[] = $i;
			}
			return $result;
		}
		else
		{
			return false;
		}
	}

	function getCategoriesDropdown()
	{
		$sql = 'SELECT pcatid,pcategory,Xhead,Yhead,Zhead FROM '.TBL_CATEGORY.' where parentid=0 order by pcategory ASC';
		$query = $this->db->query($sql);
		$acats = $query->result_array();
		if ($query->num_rows > 0)
		{
			foreach ($acats AS $i)
			{
				$result[] = $i;
			}
			//return $d ;
			return $result;
		}
		else
		{
			return false;
		}

	}



	function makeThumb($imgname='')
	{
		if ($imgname<>'')
		{
			$config['source_image']	= './assets/images/product/'.$imgname;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']	 = 75;
			$config['height']	= 50;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$this->image_lib->clear();
		}
	}
	function getImageNames()
	{
		$this->load->helper('file');
		$var=get_dir_file_info('./assets/images/product/');
		return $var;
	}
	function selectAllCategories()
	{
		$sql = 'SELECT c.pcatid, p.pcategory as parent, c.pcategory , c.Xhead,c.Yhead,c.Zhead  ';
		$sql .= 'FROM tbl_productcategory c left outer join tbl_productcategory p' ;
		$sql .= ' on c.parentid = p.pcatid order by  c.parentid,c.pcategory';
		$query = $this->db->query($sql);
		$acats = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $acats;
		}
		else
		{
			return false;
		}
	}

	function selectBaseCategories()
	{
		$sql = 'SELECT pcatid,pcategory as "pcatText",Xhead,Yhead,Zhead FROM '.TBL_CATEGORY.' where parentid=0 order by pcategory ASC';
		$query = $this->db->query($sql);
		$acats = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $acats;
		}
		else
		{
			return false;
		}
	}

	function getAllProducts()
	{
		$result = array();
		$this->db->order_by("id", "asc");
		$aprods = $this->db->get(TBL_PRODUCTS);
		//    var_dump($aprods);
		if ($aprods->num_rows() > 0)
		{
			$rows = $aprods->result_array();
			foreach ($rows as $row)
			{
				$result[] = $row['name'];
			}
		}
	}
        function getProductFromCats($cats)
        {
            foreach ($cats as $catid)
            {
                $result[] .= $catid['pcatid'];
              //   print_r($catid['pcatid']);
            }
      //          var_dump($cats);
           //     $this->db->where("productCatID",explode($result));
		$this->db->order_by("productId", "asc");
		$aprods = $this->db->get(TBL_PRODUCTS);
                        $rows = $aprods->result_array();
			foreach ($rows as $row)
			{
                            $result[] = $row['productCode'];
			}
                return($result);
        }
	function selectAllProducts()
	{
		//	$sql = 'SELECT *, pcategory as pcatText, fn_X(productDimx)as X,fn_Y(productDimy)as Y,fn_Z(productDimz)as Z FROM '.TBL_PRODUCTS.' Inner join '.TBL_CATEGORY. ' on productCatId=pcatid';
		$sql = 'SELECT productId,productCode, productName,productType,productOptions, pcategory as pcatText,productCatId  FROM '.TBL_PRODUCTS.' left outer join '.TBL_CATEGORY. ' on productCatId=pcatid';
		//print_r($sql);
		$query = $this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $res;
		}
		else
		{
			return false;
		}
	}
	function selectProductTypes()
	{
		$sql = 'SELECT * FROM tbl_producttype';
		$query = $this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $res;
		}
		else
		{
			return false;
		}
	}
	function selectXs()
	{
		$sql = 'SELECT * FROM '.TBL_X.' ORDER BY Dimensions ASC';
		$query = $this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $res;
		}
		else
		{
			return false;
		}
	}
	function Xdropdowns()
	{
		$sql = 'SELECT * FROM uvw_X ORDER BY Dimensions ASC';
		$query = $this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $res;
		}
		else
		{
			return false;
		}
	}
	function selectYs()
	{
		$sql = 'SELECT * FROM '.TBL_Y.' ORDER BY Dimensions ASC';
		$query = $this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $res;
		}
		else
		{
			return false;
		}
	}
	function Ydropdowns()
	{
		$sql = 'SELECT * FROM uvw_Y ORDER BY Dimensions ASC';
		$query = $this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $res;
		}
		else
		{
			return false;
		}
	}
	function selectZs()
	{
		$sql = 'SELECT * FROM '.TBL_Z.' ORDER BY Dimensions ASC';
		$query = $this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $res;
		}
		else
		{
			return false;
		}
	}
	function Zdropdowns()
	{
		$sql = 'SELECT * FROM uvw_Z ORDER BY Dimensions ASC';
		$query = $this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $res;
		}
		else
		{
			return false;
		}
	}
	function selectAllApplications()
	{
		$sql = 'SELECT * FROM '.TBL_APPLICATIONS.' ORDER BY application ASC';
		$query = $this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $res;
		}
		else
		{
			return false;
		}
	}
	
	function selectApplications($start=0, $limit=15, $sortField='application', $sortDir='ASC')
	{
		$sql = 'SELECT * FROM '.TBL_APPLICATIONS.' ORDER BY '.$sortField.' '.$sortDir.' LIMIT '.$start.','.$limit;
		$query = $this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			// add casting for the id field
			foreach($res as $row=>$data)
			{
				$res[$row]['applicationID'] = (int) $data['applicationID'];
			}
			//------------------------------
//			var_dump($res);
			return $res;
		}
		else
		{
			return false;
		}
	}
	
	function selectCountApplications()
	{
		$sql = 'SELECT COUNT(applicationID) AS "total" FROM '.TBL_APPLICATIONS;
		$query = $this->db->query($sql);
		$res = $query->row_array();
		if ($query->num_rows > 0)
		{
			return $res['total'];
		}
		else
		{
			return false;
		}
	}

	function selectAllIndustries()
	{
		$sql = 'SELECT * FROM '.TBL_INDUSTRIES.' ORDER BY industry ASC';
		$query = $this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $res;
		}
		else
		{
			return false;
		}
	}
        /*
<<<<<<< Updated upstream
	function dimension($pcatId=1)
	{
		$sql =' select tbl_product.productCode,fn_X(tbl_product.productDimx) as XDIM,fn_Y(tbl_product.productDimy) as YDIM,fn_Z(tbl_product.productDimz) as ZDIM';
		$sql .= ' FROM lnk_productcategory';
		$sql .= ' INNER JOIN tbl_product ON (lnk_productcategory.productId = tbl_product.productId)';
		$sql .= ' INNER JOIN tbl_productcategory ON (tbl_productcategory.pcatid = lnk_productcategory.pcatId)';
		$sql .= 'LEFT JOIN tbl_dimX X ON (tbl_product.productDimx = X.idX)';
		$sql .= 'LEFT JOIN tbl_dimY Y ON (tbl_product.productDimy = Y.idY)';
		$sql .= 'LEFT JOIN tbl_dimZ Z ON (tbl_product.productDimz = Z.idZ)';
		$sql .= 'WHERE lnk_productcategory.pcatid='.$this->db->escape($pcatId);
		//   print_r('~'.$sql.'~');
		$query=$this->db->query($sql);
		$res = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $res;
		}
		else
		{
			return false;
		}
	}

	function getWhere($tname,$field,$param)
	{
		$this->db->where($field,$param);
		$query=$this->db->get($tname);
		// return result set as an associative array
		$ret = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $ret;
		}
		else
		{
=======
*/
        function selectCapacityLookup()
        // return the Z dimension of product in a format for dropdown/selection
        {$sql = 'SELECT productId,fn_Z(tbl_product.productDimz)as capacity from tbl_product where fn_Z(tbl_product.productDimz) is not null ';
        	$qry = $this->db->query($sql);
		if($qry->num_rows() > 0){
			$res = $qry->result_array();
			$lookup = array();
			foreach($res as $row)
			{
				$lookup[$row['productId']] = $row['capacity'];
			}
			return $lookup;
		}

		return false;
        }
        function selectCapacityLookup2()
        // return the productId andZ dimension of product in a format for dropdown/selection
        {$sql = 'SELECT productId,fn_Z(tbl_product.productDimz)as capacity from tbl_product where fn_Z(tbl_product.productDimz) is not null ';
        	$qry = $this->db->query($sql);
		if($qry->num_rows() > 0){
			$res = $qry->result_array();
		//	$lookup = array();
	//		foreach($res as $row)
//			{//
			//	$lookup[$row['productId']] = $row['capacity'];
		//	}
			return $res;
		}

		return false;
        }
        function selectCapacity($capid)
        { // return a the Z dimensions formatted
            $sql = 'SELECT * FROM uvw_Z';
            $sql .= ' WHERE';
            $sql .= ' idZ = '.$this->db->escape($capid);
            $qry = $this->db->query($sql);
            if($qry->num_rows() == 1)
            {
                    $row = $qry->row_array();
                    return $row;
            }
            return false;
        }


        function dimension($pcatId=1)
        {
            $sql =' select tbl_product.productCode,fn_X(tbl_product.productDimx) as XDIM,fn_Y(tbl_product.productDimy) as YDIM,fn_Z(tbl_product.productDimz) as ZDIM';
            $sql .= ' FROM lnk_productcategory';
	    $sql .= ' INNER JOIN tbl_product ON (lnk_productcategory.productId = tbl_product.productId)';
	    $sql .= ' INNER JOIN tbl_productcategory ON (tbl_productcategory.pcatid = lnk_productcategory.pcatId)';
	    $sql .= 'LEFT JOIN tbl_dimX X ON (tbl_product.productDimx = X.idX)';
	    $sql .= 'LEFT JOIN tbl_dimY Y ON (tbl_product.productDimy = Y.idY)';
	    $sql .= 'LEFT JOIN tbl_dimZ Z ON (tbl_product.productDimz = Z.idZ)';
            $sql .= 'WHERE lnk_productcategory.pcatid='.$this->db->escape($pcatId);
             //   print_r('~'.$sql.'~');
            $query=$this->db->query($sql);
            $res = $query->result_array();
            if ($query->num_rows > 0)
            {
                    return $res;
            }
            else
            {
//>>>>>>> Stashed changes
			return false;
		}
	}

	function insertProduct($productCode,$productName, $productType,$productDimx=0,$productDimy=0,$productDimZ=0,$productOptions='',$productVATRate='S')
	{
		$sql = 'INSERT INTO '.TBL_PRODUCT.' SET productCode='.$this->db->escape($productCode);
		$sql .= ', productType='.$this->db->escape($productType);
		$this->db->query($sql);
		$activityId = $this->db->insert_id();
		return $activityId;
	}
	function deleteApplication($id)
	{
		$this->db->where('applicationID', $id);
		$this->db->delete(TBL_APPLICATIONS);
	}
	function deleteCategory($id=0)
	{
		$this->db->where('pcatid', $id);
		$this->db->delete(TBL_CATEGORY);
	}
	function deleteProduct($id=0)
	{
		$this->db->where('productId', $id);
		$this->db->delete(TBL_PRODUCTS);
	}
	function deleteProductType($id=0)
	{
		$this->db->where('tid', $id);
		$this->db->delete('tbl_producttype');
	}

	function getCategoryHeaders($pcatID=0)
	{// return the dimensional headers for a category
		$sql = 'SELECT Xhead,Yhead,Zhead FROM '.TBL_CATEGORY.' WHERE pcatid='.$this->db->escape($pcatID).' ORDER BY pcategory';
		$query = $this->db->query($sql);
		$ret = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $ret;
		}
		else
		{
			return false;
		}
	}

	function getJSONCategoryHeaders($pcatID=0)
	{// return Base Level Categories in JSON format
		$result = array();
		$this->db->where('parentid', 0);
		$this->db->order_by("pcatid,pcategory", "asc");
		$aprods = $this->db->get(TBL_CATEGORY);

		if ($aprods->num_rows() > 0)
		{
			$rows = $aprods->result_array();
			$o = array(
				"success"=>true
				,"totalCount"=>sizeof($rows)
				,"rows"=>$rows
			);
			header('Content-type: application/json');
			$this->json_lib->sendjson($o); // see NOTE!
		}
	}
	function getJSONApplications()
	{// return Base Level Categories in JSON format
		$result = array();
		// $this->db->where('parentid', 0);
		$this->db->order_by("applicationID,application", "asc");
		$aprods = $this->db->get(TBL_APPLICATIONS);

		if ($aprods->num_rows() > 0)
		{
			$applications = $aprods->result_array();
			$o = array(
				"success"=>true
				,"totalCount"=>sizeof($applications)
				,"applications"=>$applications
			);
			header('Content-type: application/json');
			$this->json_lib->sendjson($o); // see NOTE!
		}
	}



	function selectCategoryData($pcatID=0)
	{// Select all first generation child categories
		$sql = 'SELECT * FROM '.TBL_CATEGORY.' WHERE pcatid='.$this->db->escape($pcatID).' ORDER BY pcategory';
		$query = $this->db->query($sql);
		$ret = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $ret;
		}
		else
		{
			return false;
		}
	}
	function selectCategoryProducts($pcatID=0)
	{
		$sql = 'SELECT * FROM '.TBL_PRODUCTS.' WHERE productCatId='.$this->db->escape($pcatID).' ORDER BY productName';
		;
		$query = $this->db->query($sql);
		$ret = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $ret;
		}
		else
		{
			return false;
		}
	}
	function selectProductCategories($pcatID=0)
	{// Select all first generation child categories
		$sql = 'SELECT * FROM '.TBL_CATEGORY.' WHERE parentId='.$this->db->escape($pcatID).' ORDER BY pcategory';
		$query = $this->db->query($sql);
		$ret = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $ret;
		}
		else
		{
			return false;
		}
	}
	function selectChildProducts($productId=0)
	{
		// Select all products where the parentId is $productId
		$sql = 'SELECT * FROM '.TBL_PRODUCT.'INNER JOIN LNK_PRODUCTS LP ON LP.productID='.TBL_PRODUCT.' WHERE parentId='.$this->db->escape($productId).' ORDER BY companyName ASC';
		$query = $this->db->query($sql);
		$ret = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $ret;
		}
		else
		{
			return false;
		}

	}
	function selectSiblingProducts($pcatId=0)
	{
		// Select all products where the parent category is shared
		$sql = 'select DISTINCT productID, productCode from tbl_product inner join tbl_productcategory on tbl_product.productCatId=tbl_productcategory.parentid';
		$query = $this->db->query($sql);
		$ret = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $ret;
		}
		else
		{
			return false;
		}
	}
	function selectProductApplications($pcatId=0)
	{// Select all applications for this product category
		$sql = 'SELECT tbl_applications.applicationID, tbl_applications.application FROM ';
		$sql .= 'lnk_categoryapplication INNER JOIN tbl_productcategory';
		$sql .= ' ON (lnk_categoryapplication.pcatId = tbl_productcategory.pcatid)';
		$sql .= 'INNER JOIN tbl_applications';
		$sql .= ' ON (tbl_applications.applicationID = lnk_categoryapplication.applicationId)';
		$sql .= 'WHERE lnk_categoryapplication.pcatId='.$pcatId.' ORDER BY application';
		$query = $this->db->query($sql);
		$ret = $query->result_array();
		if ($query->num_rows > 0)
		{
			return $ret;
		}
		else
		{
			return false;
		}
	}
	function deleteCategoryApplication($pcatId,$appid)
	{
		var_dump($_POST);
	}
	function insertCategoryApplications($catId,$appid)
	// Inserts a link to the Category Application - Ignores duplicate errors

	{

		//       var_dump($appid);
		//       var_dump($catid);
		$sql = 'INSERT IGNORE INTO '.LNK_CATEGORYAPPLICATION.' SET pcatId = '.$this->db->escape($catId).', applicationId = '.$this->db->escape($appid);
		return $this->db->query($sql);
	}

	function insertProductAccessortLink($productid,$accessoryId)
	// Inserts a link between Product and Accessory - Ignores duplicate errors

	{
		$sql = 'INSERT IGNORE INTO '.LNK_PRODUCTACCESSORY.' SET productId = '.$this->db->escape($productid).', accessoryId = '.$this->db->escape($accessoryId);
		return $this->db->query($sql);
	}
	function updateProductEdit()
	{
		$id = $this->input->xss_clean($this->input->post('productId'));
		//Check the Dimension table to verify these dimensions exist
		$data = array(
			'unit'=>$this->input->xss_clean($this->input->post('unitx')),
			'low'=>$this->input->xss_clean($this->input->post('lowx')),
			'high'=>$this->input->xss_clean($this->input->post('highx'))

		);
		// Save them if they don't!!!
		$ix=$this->saveProductDimensions('tbl_dimX','idX',$data);
		$data = array(
			'unit'=>$this->input->xss_clean($this->input->post('unity')),
			'low'=>$this->input->xss_clean($this->input->post('lowy')),
			'high'=>$this->input->xss_clean($this->input->post('highy'))
		);
		$iy=$this->saveProductDimensions('tbl_dimY','idY',$data);
		$data = array(
			'unit'=>$this->input->xss_clean($this->input->post('unitz')),
			'low'=>$this->input->xss_clean($this->input->post('lowz')),
			'high'=>$this->input->xss_clean($this->input->post('highz'))
		);
		$iz=$this->saveProductDimensions('tbl_dimZ','idZ',$data);

		$data = array(
			'productCode' => $this->input->xss_clean($this->input->post('productCode')),
			'productName' => $this->input->xss_clean($this->input->post('productName')),
			'productType' => $this->input->xss_clean($this->input->post('productType')),
			'productCatId' => $this->input->xss_clean($this->input->post('productCatId')),
			'productDimx' => $ix,
			'productDimy' => $iy,
			'productDimz' => $iz,
			'productOptions' => $this->input->xss_clean($this->input->post('productOptions')),
			'productMass' => $this->input->xss_clean($this->input->post('productMass')),
			'productVATCode' => 'S'//$this->input->xss_clean($this->input->post('productVATCode'))
		);
		if ($id != 0)
		{
			$this->db->where("productId", $id);
			$this->db->update(TBL_PRODUCTS, $data);
		}

	}


	function saveProductDimensions($tname,$i,$c)
	{
		$row = $this->db->get_where($tname, $c)->row_array();
		//       var_dump($c);
		if (empty($row))
		{
			$this->db->insert($tname, $c);
			// Retrieve inserted id to update link TABLE with this product
			$id=$this->db->insert_id();
			return $id;
			;
		}
		else
		{
			return $row[$i];
		};
	}
	function updateProduct()
	{// Update or insert into the product table.
		$id = $this->input->xss_clean($this->input->post('productId'));

		$pcatid=$this->input->xss_clean($this->input->post('productCatId'));
		$data = array(
			'productCode' => $this->input->xss_clean($this->input->post('productCode')),
			'productName' => $this->input->xss_clean($this->input->post('productName')),
			'productType' => $this->input->xss_clean($this->input->post('productType')),
			'productCatId' => $this->input->xss_clean($this->input->post('productCatId')),
			'productDimx' => $this->input->xss_clean($this->input->post('productDimx')),
			'productDimy' => $this->input->xss_clean($this->input->post('productDimy')),
			'productDimz' => $this->input->xss_clean($this->input->post('productDimz')),
			'productOptions' => $this->input->xss_clean($this->input->post('productOptions')),
			'productVATCode' => 'S'//$this->input->xss_clean($this->input->post('productVATCode'))
		);
		if ($id != 0)
		{
			$this->db->where("productId", $id);
			$this->db->update(TBL_PRODUCTS, $data);
		}
		else
		{
			$this->db->insert(TBL_PRODUCTS, $data);
			// Retrieve inserted id to update link TABLE with this product
			$id=$this->db->insert_id();
			//     $sql= 'INSERT IGNORE INTO lnk_productcategory (productid,pcatid) values ('.$id.','.$pcatid.')';
			//   return $this->db->query($sql);
			return;
		}

	}
	function updateJSONApplication($data)
	{// Update or insert into the product table.
		foreach ($data as $key =>$val)
		{
			if ($key=='applicationID')
			{
				$id=$val;
			} else
			{
				$result[] = $data;
			}
		}
		if ($id != 0)
		{
			$this->db->where("applicationID", $id);
			$this->db->update('tbl_applications', $data);
			return $id;
		}
		else
		{
			$this->db->insert('tbl_applications', $data);
			return $this->db->insert_id();
		}
	}
	function updateJSONCategory($data)
	{// Update or insert into the product table.

		var_dump($data);
		foreach ($data as $key =>$val)
		{
			if ($key=='pcatid')
			{
				$id=$val;
			} else
			{
				$result[] = $data;
			}
		}
		var_dump($id);
		if ($id != 0)
		{
			$this->db->where("pcatid", $id);
			$this->db->update('tbl_productcategory', $data);
		}
		else
		{
			$this->db->insert('tbl_productcategory', $data);
		}
	}
	function updateJSONIndustry($data)
	{// Update or insert into the product table.
		foreach ($data as $key =>$val)
		{
			if ($key=='id')
			{
				$id=$val;
			} else
			{
				$result[] = $data;
			}
		}
		if ($id != 0)
		{
			$this->db->where("id", $id);
			$this->db->update('tbl_industry', $data);
		}
		else
		{
			$this->db->insert('tbl_industry', $data);
		}

	}
	function updateJSONProduct($data)
	{// Update or insert into the product table.
		// var_dump($data);

		foreach ($data as $key =>$val)
		{
			if ($key=='productId')
			{
				$id=$val;
			} // find if insert of update
			if ($key=='pcategory')
			{
				unset($key);
			} // ditch category
		}
		if ($id != 0)
		{
			$this->db->where("productId", $id);
			$this->db->update('tbl_product', $data);
		}
		else
		{
			$this->db->insert('tbl_product', $data);
		}
	}


	function updateJSONProductType($data)
	{// Update or insert into the product table.
		foreach ($data as $key =>$val)
		{
			if ($key=='tid')
			{
				$id=$val;
			} else
			{
				$result[] = $data;
			}
		}
		if ($id != 0)
		{
			$this->db->where("tid", $id);
			$this->db->update('tbl_producttype', $data);
		}
		else
		{
			$this->db->insert('tbl_producttype', $data);
		}
	}

	function updateProductCategory()
	{// Update or insert into the product table.
		$id = $this->input->xss_clean($this->input->post('pcatid'));
		$data = array(
			'parentid' => $this->input->xss_clean($this->input->post('parentid')),
			'pcategory' => $this->input->xss_clean($this->input->post('pcategory')),
			'Xhead' => $this->input->xss_clean($this->input->post('Xhead')),
			'Yhead' => $this->input->xss_clean($this->input->post('Yhead')),
			'Zhead' => $this->input->xss_clean($this->input->post('Zhead'))
		);
		if ($id != 0)
		{
			$this->db->where("pcatid", $id);
			$this->db->update(TBL_CATEGORY, $data);
		}
		else
		{
			$this->db->insert(TBL_CATEGORY, $data);
		}

	}


	function updateApplication()
	{
		$id = $this->input->xss_clean($this->input->post('applicationID'));
		$data = array(
			'application' => $this->input->xss_clean($this->input->post('application')),
			'prodcatId' => $this->input->xss_clean($this->input->post('prodcatId')),
			'description' => $this->input->xss_clean($this->input->post('description'))
		);
		if ($id != 0)
		{
			$this->db->where("applicationId", $id);
			$this->db->update(TBL_APPLICATIONS, $data);
		}
		else
		{
			$this->db->insert(TBL_APPLICATIONS, $data);
		}
	}


	function updateField($tableName, $tablePk, $fieldId, $fieldName, $newValue, $oldValue='')
	{
		$sql = 'UPDATE '.$tableName.' SET '.$fieldName.'='.$this->db->escape($newValue);
		$sql .= ', dateModified=NOW()';
		$sql .= ' WHERE '.$tablePk.'='.$this->db->escape($fieldId);
		return $this->db->query($sql);
	}

        // Beginning of Front End search funcationality...
	function selectProductsBySearch($params, $start=false, $limit=false)
	{
		$sqlWhat = 'SELECT *';
		$sqlFrom = ' FROM '.TBL_PRODUCTS.' p';
		if ($params['byPostcode'] !== false || $params['areaIds'] !== false)
		{
			$sqlFrom .= ' INNER JOIN  '.PATH_PROVISION2AREAS.' p2a ON p.provisionId=p2a.provisionId';
			$sqlFrom .= ' INNER JOIN  '.PATH_AREAS.' a ON p2a.areaId=a.areaId';
		}
		if (isset ($params['disabilityIds']) && count($params['disabilityIds']) > 0)
		{
			$sqlFrom .= ' INNER JOIN  '.PATH_PROVISION2DISABILITYTYPES.' p2d ON p.provisionId=p2d.provisionId';
			$sqlFrom .= ' INNER JOIN  '.PATH_DISABILITYTYPES.' d ON p2d.disabilityId=d.disabilityId';

		}
		if (isset ($params['breakIds']) && count($params['breakIds']) > 0)
		{
			$sqlFrom .= ' INNER JOIN  '.PATH_PROVISION2BREAKTYPES.' p2b ON p.provisionId=p2b.provisionId';
			$sqlFrom .= ' INNER JOIN  '.PATH_BREAKTYPES.' b ON p2b.breakId=b.breakId';
		}

		$sqlParts = array();
		if ($params['byPostcode'] == true)
		{
			$areaId = $this->_selectAreaByPostcode($params['postcode']);
			$sqlParts[] = ' a.areaId='.$this->db->escape($areaId);
		}
		elseif($params['areaIds'] !== false && count($params['areaIds']) > 0)
		{
			foreach($params['areaIds'] as $k => $v)
			{
				$params['areaIds'][$k] = $this->db->escape($v);
			}
			$sqlParts[] = ' a.areaId IN ('. implode(', ',$params['areaIds']). ')';
		}

		if ($params['anyAge'] !== true)
		{
			$sqlParts[] = ' (p.startAge <= '.$this->db->escape($params['age']).' AND p.endAge >= '.$this->db->escape($params['age']).')';
		}

		if (isset ($params['referral']))
		{
			$sqlTmp = ' (p.referral = "Both"';
			switch($params['referral'])
			{
				case 'Self':
				case 'Professional':
					$sqlTmp .= ' OR p.referral = '.$this->db->escape($params['referral']);
					break;
				case 'Both':
					$sqlTmp .= ' OR p.referral = "Self"';
					$sqlTmp .= ' OR p.referral = "Professional"';
					break;
			}

			$sqlTmp .= ')';
			$sqlParts[] = $sqlTmp;
		}
		if (isset ($params['disabilityIds']) && count($params['disabilityIds']) > 0)
		{
			$sqlParts[] = ' d.disabilityId IN ('.implode(', ',$params['disabilityIds']).')';
		}
		if (isset ($params['breakIds']) && count($params['breakIds']) > 0)
		{
			$sqlParts[] = ' b.breakId IN ('.implode(', ',$params['breakIds']).')';
		}

//		var_dump($sqlParts);
		$sqlWhere = '';
		if (count($sqlParts) > 0)
		{
			$sqlWhere .= ' WHERE';
			$sqlWhere .= implode(' AND ', $sqlParts);
		}

		$sqlGroup = ' GROUP BY p.provisionId';
		$sqlOrder = ' ORDER BY p.providerName ASC';
		$sql = $sqlWhat.$sqlFrom.$sqlWhere.$sqlGroup.$sqlOrder;
//		echo($sql);
		if($start !== false && $limit !== false)
		{
			$sql .= ' LIMIT '.$start.', '.$limit;
		}

		$qry = $this->db->query($sql);
		$totalResults = $this->selectProviderBySearchCount('SELECT COUNT(DISTINCT p.provisionId) AS "total"'.$sqlFrom.$sqlWhere);
		if($qry->num_rows() > 0)
		{
			$results['rows'] = $qry->result_array();
			$results['totalResults'] = $totalResults;
			return $results;
		}

		return false;
	}


        function filtreCats($cat='*')
        {// passed and array of categories will return two arrays of sizes and types
            $sizes=array();
            $types=array();
            $t1=implode(",",$cat);// return a comma delimited list of categories to match on
         // get dimensions(Z)
            $sql = 'SELECT distinct tbl_dimZ.idZ FROM tbl_dimZ INNER JOIN lnk_productcategory';
            $sql .= ' ON (tbl_dimZ.pid = lnk_productcategory.productId) INNER JOIN tbl_productcategory ';
            $sql .= ' ON (lnk_productcategory.pcatId = tbl_productcategory.pcatid)' ;
            $sql .= ' where tbl_productcategory.pcatid in ('.$t1.')';

            $query = $this->db->query($sql);
            $ret = $query->result_array();
            if ($query->num_rows > 0)
		{foreach ($query->result_array() as $row)
                    {
                       $sizes[]=$row['idZ'];
                    }
		}else{
                  if (!is_array($sizes)){$sizes=array();}
		}

         //get product types
            $sql2 = 'SELECT distinct tbl_producttype.tid FROM  tbl_productcategory INNER JOIN lnk_productcategory ';
            $sql2 .= ' ON (tbl_productcategory.pcatid = lnk_productcategory.pcatId)  INNER JOIN tbl_product ';
            $sql2 .= 'ON (lnk_productcategory.productId = tbl_product.productId)  INNER JOIN tbl_producttype ';
            $sql2 .= 'ON (tbl_product.productType = tbl_producttype.Type) where tbl_productcategory.pcatid in  ('.$t1.')';
         //   var_dump($sql2);
            $query = $this->db->query($sql2);
            $ret = $query->result_array();
            if ($query->num_rows > 0)
		{foreach ($query->result_array() as $row)
                    {
                    $types[]=$row['tid'];
                    }
		}else{
                  if (!is_array($types)){$types=array();}
		}
   //         $prods = $this->ProductModel()
            $rhet =array('sizes'=>$sizes,'types'=>$types);
            return $rhet;
        }


// Production filter function
        function filterfn($cap=0,$cat=0,$type=0)
        {// function to return filtered categories,sizes and types together with resulting product list
// build the where clauses
            if (count($cap)>0){$wherecap=implode(",",$cap);}
            if (count($cat)>0){$wherecat=implode(",",$cat);}
            if (count($type)>0){$wheretype=implode(",",$type);}
// build the query
            $sql= 'SELECT distinct tbl_product.productId,tbl_dimZ.idZ,tbl_product.productCatId,tbl_product.productType';
            $sql .= ' FROM   lnk_productcategory    INNER JOIN tbl_product';
            $sql .= ' ON (lnk_productcategory.productId = tbl_product.productId) INNER JOIN tbl_producttype ';
            $sql .= ' ON (tbl_producttype.tid = tbl_product.productType) INNER JOIN tbl_dimZ ';
            $sql .= ' ON (tbl_product.productDimz = tbl_dimZ.idZ)';
 // Where clause
            $where = '';
            if (count($cat)>0||count($cap)>0 || count($type)>0){$where=' where ';}
// check conditions to implement various wheres
// capacity clause
            if (count($cap)>0){ $where .= 'tbl_dimZ.idZ in ('.$wherecap .')';}
// category clause
                if ((count($cat) >0 && count($cap)>0)) {
                                        $where .= ' AND tbl_product.productCatId in ('.$wherecat.')';
                                        }
                                elseif (count($cat)>0)
                                {
                                        $where .= ' productCatId in ('.$wherecat.')';
                                }
// type clause
                if ((count($cat)>0||count($cap)>0)&& count($type)>0)
                        {$where .= ' AND tbl_product.productType in ('.$wheretype.')';
                        }
                elseif (count($type)>0)
                        {$where .= 'tbl_product.productType in ('.$wheretype.')';
                        }
                $sql .= $where;
            $query = $this->db->query($sql);
            $ret = $query->result_array();
            if ($query->num_rows > 0)
		{foreach ($query->result_array() as $row)
                    {
                        $cats[]=$row['productCatId'];
                        $types[]=$row['productType'];
                        $sizes[]=$row['idZ'];
                        $productIds[]=$row['productId'];
                    }
		}else{
                    return false;
		}
// add product details using the productID to return to controller
            $products=$this->getProductsToShow($productIds);
            $rhet =array('cats'=>$cats,'types'=>$types,'sizes'=>$sizes,'products'=>$products);
            return $rhet;
        }

        function getProductsToShow($ids=0,$start=0,$limit=12)
        {// if passed an empty string
            if (!$ids){return false;} else
                // retrieve products
            {
                $sql ='select  productId,  productCode,  productName,  tbl_producttype.Type,  pcategory,  fn_Z(productDimz) ';
                $sql .= 'from tbl_product  inner join tbl_producttype on tbl_producttype.tid = tbl_product.productType';
                $sql .= ' inner join tbl_productcategory    on tbl_productcategory.pcatid = tbl_product.productCatId';
                $sql .= ' inner join tbl_dimZ on tbl_dimZ.idZ = tbl_product.productDimz';
                $query = $this->db->query($sql);
		if ($query->num_rows >0)
                  {foreach ($query->result_array() as $row)
                    {
                       $rows[]=$row;
                        }
                    }
                    $o = array(
                            "success"=>true
                            ,"totalCount"=>sizeof($rows)
                            ,"rows"=>$rows
                    );
                    return $o;
		}
            }
        
        //--------------------------------------------------------------------------------------------------------
// deprecated in favour of the above function - RCM 12/05/2010
        function filtreCaps($cap)
        {// passed and array of sizes (capacities) will return two arrays of categories and types   
            $cats=array();
            $types=array();
            $t1=implode(",",$cap);// return a comma delimited list of categories to match on
   //         var_dump($t1);
         // get categories
            $sql = 'SELECT DISTINCT  lnk_productcategory.pcatId FROM tbl_productcategory ';
            $sql.= ' INNER JOIN lnk_productcategory  ON (tbl_productcategory.pcatid = lnk_productcategory.pcatId)';
            $sql.= ' INNER JOIN tbl_product ON (lnk_productcategory.productId = tbl_product.productId)';
            $sql.= ' INNER JOIN tbl_producttype ON (tbl_product.productType = tbl_producttype.Type)';
            $sql.= ' WHERE (tbl_product.productDimz in  ('.$t1.'))';
      //      print_r($sql);
            $query = $this->db->query($sql);
            $ret = $query->result_array();
            if ($query->num_rows > 0)
		{foreach ($query->result_array() as $row)
                    {
                       $cats[]=$row['pcatId'];
                    }
		}else{
                  if (!is_array($cats)){$cats=array();}
		}

         //get product types
            $sql2 = 'SELECT distinct tbl_producttype.tid FROM  tbl_productcategory INNER JOIN lnk_productcategory ';
            $sql2 .= ' ON (tbl_productcategory.pcatid = lnk_productcategory.pcatId)  INNER JOIN tbl_product ';
            $sql2 .= 'ON (lnk_productcategory.productId = tbl_product.productId)  INNER JOIN tbl_producttype ';
            $sql2 .= 'ON (tbl_product.productType = tbl_producttype.Type) where (tbl_product.productDimz in  ('.$t1.'))';
         //   var_dump($sql2);
            $query = $this->db->query($sql2);
            $ret = $query->result_array();
            if ($query->num_rows > 0)
		{foreach ($query->result_array() as $row)
                    {
                    $types[]=$row['tid'];
                    }
		}else{
                  if (!is_array($types)){$types=array();}
		}

            $rhet =array('cats'=>$cats,'types'=>$types);
            return $rhet;
        }
        function filtreType($typ)
        {// passed an array of Types will return two arrays of categories and sizes
            
        }

}
?>
