<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function insert_enquiry($data)
    {
        return $this->db->insert('product_enquiry', $data);
    }
}
