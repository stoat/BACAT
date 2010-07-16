<?php

class Trail_model Extends Model {

	function Trail_model()
	{
		parent::Model();

		// Other stuff

	}
        function gettrails()
        {

            $limit=$this->input->post('limit');
            $offset=$this->input->post('offset');
                        $this->db->order_by("wet", "desc");
            $query = $this->db->get('tbl_trails', 10);
           // $this->db->order_by("wet", "desc");

            $ret=array();
            $trails = $query->result_array();
            foreach($trails as $fred=>$t){
                 $ret[]=$t['trailname'];
                     foreach($t as $barney=>$t1){
                                              //    var_dump($trails);
                             //   var_dump($t['trailname']);
                                              //  echo ('<li><a href="#">'.$t1.'</a></li>');
                    }
            }
            return $ret;
        }

}
?>
