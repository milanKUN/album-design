<?php
class Contact_model extends CI_Model {

    public function insert_message($data){
        return $this->db->insert('contact_messages', $data);
    }
}
