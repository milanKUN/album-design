<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function save_enquiry()
    {
        // Get product title safely
        $product_title = $this->input->post('product_title');

        if (empty($product_title)) {
            echo json_encode(['status' => 'missing_product']);
            return;
        }

        // Prepare data
        $data = [
            'product_id' => $this->input->post('product_id'),
            'product_title' => $product_title,
            'name' => $this->input->post('author'),
            'phone' => $this->input->post('Phone'),
            'address' => $this->input->post('Address'),
            'message' => $this->input->post('comment')
        ];

        // Save in database
        if ($this->Product_model->insert_enquiry($data)) {

            // Load Email Config
            $this->load->config('email');

            $config = [
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'kundumilankundu2003@gmail.com',
                'smtp_pass' => 'ewkjxsqxorsopfnc', // 🔥 Put App Password here
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n",
                'crlf' => "\r\n",
                'smtp_timeout' => 30,
                'wordwrap' => TRUE
            ];

            $this->load->library('email', $config);

            $this->email->clear(TRUE);

            $this->email->from('kundumilankundu2003@gmail.com', 'Product Enquiry');
            $this->email->to('milankundu2003@gmail.com');
            $this->email->subject('New Product Enquiry');

            $body = "
                <h3>New Product Enquiry</h3>
                <p><b>Product:</b> {$data['product_title']}</p>
                <p><b>Name:</b> {$data['name']}</p>
                <p><b>Phone:</b> {$data['phone']}</p>
                <p><b>Address:</b> {$data['address']}</p>
                <p><b>Message:</b><br>{$data['message']}</p>
            ";

            $this->email->message($body);

            if ($this->email->send()) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode([
                    'status' => 'mail_error',
                    'debug' => $this->email->print_debugger()
                ]);
            }

        } else {
            echo json_encode(['status' => 'db_error']);
        }
    }
}
