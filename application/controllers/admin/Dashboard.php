<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();

        // Check if user is logged in
        if (!$this->session->userdata('user_email')) {
            redirect('admin/login');
        }
    }

    public function index() {
        $data['css_files'] = []; // prevent undefined variable error
        $data['js_files']  = [];

        $this->load->view('admin/common/header', $data);
        $this->load->view('admin/dashboard_view');
        $this->load->view('admin/common/footer');
    }
}
