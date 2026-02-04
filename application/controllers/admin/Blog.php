<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
        $upload_path = FCPATH . "uploads/blog";

        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true);
        }

        /* -----------------------------------------------------
           GROCERY CRUD SETUP
        ------------------------------------------------------*/
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap');
        $crud->set_table('blog');
        $crud->set_subject('Blog');

        $crud->required_fields('blog_title', 'blog_slug', 'blog_details', 'blog_image', 'status');

        // Upload field
        $crud->set_field_upload('blog_image', 'uploads/blog');

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
