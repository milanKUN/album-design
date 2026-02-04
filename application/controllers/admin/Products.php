<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('grocery_CRUD');

        // Check if user is logged in
        if (!$this->session->userdata('user_email')) {
            redirect('admin/login');
        }
    }

    public function index()
    {
        /* -----------------------------------------------------
           AUTO CREATE UPLOAD FOLDER (FIX FOR YOUR ERROR)
        ------------------------------------------------------*/
        $upload_path = FCPATH . "uploads/product";

        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true);
        }

        /* -----------------------------------------------------
           GROCERY CRUD SETUP
        ------------------------------------------------------*/
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap');
        $crud->set_table('product');
        $crud->set_subject('Product');

        $crud->required_fields('title', 'product_slug', 'details', 'more_details','image_1', 'status');
        $crud->columns('title', 'product_slug','image_1', 'status');

        // Upload field
        $crud->set_field_upload('image_1', 'uploads/product');
        $crud->set_field_upload('image_2', 'uploads/product');
        $crud->set_field_upload('image_3', 'uploads/product');
        $crud->set_field_upload('image_4', 'uploads/product');


        /* -----------------------------------------------------
           RENDER OUTPUT
        ------------------------------------------------------*/
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function _example_output($output = null)
    {
        $this->load->view('admin/common/header', (array)$output);
        $this->load->view('admin/dashboard', (array)$output);
        $this->load->view('admin/common/footer', (array)$output);
    }
}
