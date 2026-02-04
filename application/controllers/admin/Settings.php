<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('grocery_CRUD');
        $this->load->library('session');

        // Check login
        if (!$this->session->userdata('user_email')) {
            redirect('admin/login');
        }
    }

    public function index()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('settings');
        $crud->set_subject('Settings');

        // Fields in form
        $crud->fields(
            'company_name',
            'email',
            'phone',
            'address',
            'logo',
            'favicon',
            'map',
            'facebook',
            'linkedin',
            'instagram',
            'twitter',
            'company_slogan'
        );

        // Columns in list view
        $crud->columns('company_name', 'email', 'phone', 'address', 'logo', 'favicon');

        // Upload fields
        // $crud->set_field_upload('logo1', 'uploads/settings');
        $crud->set_field_upload('logo', 'uploads/settings');
        $crud->set_field_upload('favicon', 'uploads/settings');

        // ❗ Correct Logic for Single Row Settings
        $count = $this->db->count_all('settings');

        if ($count >= 1) {
            // Disable Add, allow Edit
            $crud->unset_add();
        } else {
            // No row exists → allow Add, disable Edit
            $crud->unset_edit();
        }

        $crud->unset_delete(); // No delete for settings

        $output = $crud->render();
        $this->_example_output($output);
    }

    private function _example_output($output = null)
    {
        $this->load->view('admin/common/header', (array)$output);
        $this->load->view('admin/dashboard', (array)$output);
        $this->load->view('admin/common/footer', (array)$output);
    }
}
