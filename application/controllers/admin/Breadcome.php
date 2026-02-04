<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Breadcome extends CI_Controller {

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
        $crud->set_table('breadcome');
        $crud->set_subject('Breadcome');

        // $crud->set_primary_key('id');
        $crud->columns('title', 'image', 'status');
        // $crud->fields('title', 'image', 'status');
        $crud->required_fields('title', 'image', 'status');


		$crud->set_field_upload('image', 'uploads/breadcome');


        // Check if user is logged in
        // if (!$this->session->userdata('logged_in')) {
            // $crud->unset_add();
        //     $crud->unset_edit();
            // $crud->unset_delete();
        // }

        $output = $crud->render();
        $this->_example_output($output);
    }

    public function _example_output($output = null)
    {
		$this->load->view('admin/common/header',(array)$output);
        $this->load->view('admin/dashboard', (array)$output);
		$this->load->view('admin/common/footer',(array)$output);
    }
}
