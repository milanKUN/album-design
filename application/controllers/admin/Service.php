<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

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
        $crud->set_table('service');
        $crud->set_subject('Service');

        // $crud->set_primary_key('id');
        $crud->columns('service_title', 'service_image', 'status');
        // $crud->fields('name', 'email', 'phone');
        $crud->required_fields('service_title', 'service_image', 'service_slug','service_details','status');


		$crud->set_field_upload('service_image', 'uploads/service');


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
