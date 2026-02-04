<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('Contact_model');
    }

    public function save_message()
    {
        // Get POST data
        $data = [
            'name'      => $this->input->post('contact_name'),
            'phone'     => $this->input->post('contact_phone'),
            'email'     => $this->input->post('contact_email'),
            'subject'   => $this->input->post('subject'),
            'message'   => $this->input->post('contact_message')
        ];

        // Save to database
        $this->Contact_model->insert_message($data);

        // Send Email to Owner using Web3Forms
        $this->send_web3_email($data);

        echo json_encode([
            "status" => "success",
            "message" => "Message submitted successfully"
        ]);
    }

    private function send_web3_email($data)
    {
        $access_key = "a3d67eff-8f78-407c-9db5-544647b45085";

        $post_data = [
            "access_key" => $access_key,
            "from_name"  => "Creative Photo Book Website",
            "subject"    => $data['subject'],
            "email"      => $data['email'],
            "message"    => "
                Name: {$data['name']}
                Phone: {$data['phone']}
                Email: {$data['email']}
                Subject: {$data['subject']}
                Message: {$data['message']}
            "
        ];

        $ch = curl_init("https://api.web3forms.com/submit");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
    }
}
