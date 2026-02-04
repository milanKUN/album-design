<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    private $allowed_emails = [
        'milankundu2003@gmail.com',
        'suvoclick01@gmail.com'
    ];
    private $password = 'Milan@2003'; // Static password

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['session']);
        $this->load->helper(['url', 'form']);
    }

    public function index()
    {
        if ($this->session->userdata('user_email')) {
            redirect('admin/dashboard');
        }
        $this->load->view('admin/login_view');
    }

    // Direct login – no OTP
    public function check_credentials()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        if (in_array($email, $this->allowed_emails) && $password === $this->password) {

            // Save session
            $this->session->set_userdata('user_email', $email);

            echo json_encode([
                'status' => true,
                'message' => 'Login successful',
                'redirect' => site_url('admin/dashboard')
            ]);

        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Invalid email or password'
            ]);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
