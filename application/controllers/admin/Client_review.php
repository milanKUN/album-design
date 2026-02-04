<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_review extends CI_Controller {

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
        $crud->set_table('client_review');
        $crud->set_subject('Client Review');

        // $crud->set_primary_key('id');
        // $crud->columns('id', 'name', 'email', 'phone');
        $crud->fields('client_name','client_comment', 'client_image');
        $crud->required_fields('client_name','client_comment', 'client_image','status');


		$crud->set_field_upload('client_image', 'uploads/client_review');


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
