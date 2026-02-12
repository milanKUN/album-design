<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function insert_contact($data)
    {
        return $this->db->insert('contact_messages', $data);
    }
}
