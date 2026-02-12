<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model');
        $this->load->library('email');
    }

    public function submit_contact()
    {
        if ($this->input->is_ajax_request()) {

            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $message = $this->input->post('message');

            $data = [
                'username' => $username,
                'email' => $email,
                'phone' => $phone,
                'message' => $message
            ];

            // Save in Database
            $this->Contact_model->insert_contact($data);

            // Email Configuration Load
            $this->email->initialize($this->config->item('email'));

            $this->email->from('kundumilankundu2003@gmail.com', 'Website Contact');
            $this->email->to('milankundu2003@gmail.com');
            $this->email->subject('New Contact Message');

            $mail_body = "
                <h3>New Contact Message</h3>
                <p><strong>Name:</strong> {$username}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p><strong>Message:</strong><br>{$message}</p>
            ";

            $this->email->message($mail_body);
            $this->email->send();

            echo json_encode(['status' => 'success']);
        }
    }
}
