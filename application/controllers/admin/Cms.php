<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

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
        // -------------------------
        // AUTO CREATE UPLOAD FOLDER
        // -------------------------
        $upload_path = FCPATH . "uploads/cms";

        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true);
        }

        // -------------------------
        // GROCERY CRUD START
        // -------------------------
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap');
        $crud->set_table('cms');
        $crud->set_subject('Cms');

        $crud->columns('page', 'section', 'title', 'image1');

        // Upload fields
        $crud->set_field_upload('image1', 'uploads/cms');
        $crud->set_field_upload('image2', 'uploads/cms');
        $crud->set_field_upload('image3', 'uploads/cms');

        $output = $crud->render();
        $this->_example_output($output);
    }

    public function _example_output($output = null)
    {
        $this->load->view('admin/common/header',(array)$output);
        $this->load->view('admin/dashboard',(array)$output);
        $this->load->view('admin/common/footer',(array)$output);
    }
}
