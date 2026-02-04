<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('grocery_CRUD');

        if (!$this->session->userdata('user_email')) {
            redirect('admin/login');
        }

        $this->load->database();
    }

    public function index()
    {
        // Auto-create upload folder
        $upload_path = FCPATH . "uploads/portfolio";
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true);
        }

        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap');
        $crud->set_table('portfolio');
        $crud->set_subject('Portfolio');

        $crud->set_relation('category', 'portfolio_category', 'category_name');
        $crud->required_fields('title','product_no','category','image','status');
        $crud->columns('title','product_no','category','image','status');

        // portfolio_id should not be editable
        $crud->field_type('portfolio_id', 'hidden');

        // Image upload
        $crud->set_field_upload('image', 'uploads/portfolio');

        // Callbacks
        $crud->callback_before_insert(array($this, 'before_insert_portfolio'));
        $crud->callback_before_update(array($this, 'before_update_portfolio'));

        $output = $crud->render();
        $this->_example_output($output);
    }

    // -----------------------------------------------------
    // BEFORE INSERT  → Generate unique portfolio_id
    // -----------------------------------------------------
    public function before_insert_portfolio($post_array)
    {
        // Get the last portfolio ID
        $last = $this->db->select('portfolio_id')
                         ->order_by('id', 'DESC')
                         ->limit(1)
                         ->get('portfolio')
                         ->row();

        if ($last && preg_match('/PORT-(\d+)/', $last->portfolio_id, $match)) {
            $num = intval($match[1]) + 1;
        } else {
            $num = 1;
        }

        // Create formatted unique ID → PORT-0001
        $new_id = 'PORT-' . str_pad($num, 4, '0', STR_PAD_LEFT);

        $post_array['portfolio_id'] = $new_id;

        return $post_array;
    }

    // -----------------------------------------------------
    // BEFORE UPDATE  → Keep the same portfolio_id
    // -----------------------------------------------------
    public function before_update_portfolio($post_array, $primary_key)
    {
        // Fetch existing portfolio_id so it never changes
        $existing = $this->db->select('portfolio_id')
                             ->where('id', $primary_key)
                             ->get('portfolio')
                             ->row();

        if ($existing) {
            $post_array['portfolio_id'] = $existing->portfolio_id;
        }

        return $post_array;
    }

    // -----------------------------------------------------
    // CATEGORY CRUD
    // -----------------------------------------------------
    public function category()
    {
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap');
        $crud->set_table('portfolio_category');
        $crud->set_subject('Category');

        $crud->required_fields('category_name', 'status');
        $crud->columns('category_name','status');

        $output = $crud->render();
        $this->_example_output($output);
    }

    // -----------------------------------------------------
    // LOAD TEMPLATE
    // -----------------------------------------------------
    public function _example_output($output = null)
    {
        $this->load->view('admin/common/header', (array)$output);
        $this->load->view('admin/dashboard', (array)$output);
        $this->load->view('admin/common/footer', (array)$output);
    }
}
