<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

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
        $crud->set_table('banner');
        $crud->set_subject('Banner');

        // $crud->set_primary_key('id');
        // $crud->columns('id', 'name', 'email', 'phone');
        // $crud->fields('name', 'email', 'phone');
        // $crud->required_fields('name', 'email', 'phone');


		$crud->set_field_upload('image', 'uploads/banner');


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
