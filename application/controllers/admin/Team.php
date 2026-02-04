<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

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
        $upload_path = FCPATH . "uploads/our_team";

        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true);
        }

        /* -----------------------------------------------------
           GROCERY CRUD SETUP
        ------------------------------------------------------*/
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap');
        $crud->set_table('our_team');
        $crud->set_subject('Team');

        $crud->fields('name', 'member_image','position', 'status');
        $crud->required_fields('name', 'position', 'member_image', 'status');

        // Upload field
        $crud->set_field_upload('member_image', 'uploads/our_team');

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
