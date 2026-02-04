<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
        
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap');
        $crud->set_table('gallery');
        $crud->set_subject('Gallery');

        $crud->required_fields('image_title', 'image');

        // Upload field
        $crud->set_field_upload('image', 'uploads/gallery');

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
