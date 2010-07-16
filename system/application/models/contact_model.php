<?php

class Contact_model Extends Model {

	function Contact_model()
	{
		parent::Model();

		// Other stuff

	}
        function getcontacts()
        {
            $limit=$this->input->post('limit');
            $offset=$this->input->post('offset');
            $query = $this->db->get('tbl_contacts', 10);
            return $query->result();
        }
        function getpubliccontacts()
        {
            $limit=$this->input->post('limit');
            $offset=$this->input->post('offset');
            $query = $this->db->get_where('tbl_contacts',array('public' => 1));
            return $query->result();

        }
}
?>
