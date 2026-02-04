<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_enquery extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function submit_product_form() {

        // Receive form data
        $name         = $this->input->post('contact-name');
        $phone        = $this->input->post('contact-phone');
        $location     = $this->input->post('subject');
        $message      = $this->input->post('product-message');
        $portfolio_id = $this->input->post('product-id');
        $product_no   = $this->input->post('product-number');

        // Save to DB
        $insert_data = [
            'portfolio_id' => $portfolio_id,
            'product_no'   => $product_no,
            'name'         => $name,
            'phone'        => $phone,
            'location'     => $location,
            'message'      => $message,
            'created_at'   => date("Y-m-d H:i:s")
        ];

        $this->db->insert('product_inquiry', $insert_data);

        // ------------------------------
        // SEND EMAIL USING WEB3FORMS API
        // ------------------------------

        $web3_url = "https://api.web3forms.com/submit";

        $postData = [
            "access_key" => "a3d67eff-8f78-407c-9db5-544647b45085",
            "from_name"  => "Creative Photo Book Website",
            "subject"    => "New Product Order from: $name",
            "redirect"   => "", // no redirect (using AJAX)
            "message"    => "
                <h2>New Product Order Received</h2>
                <p><strong>Portfolio ID:</strong> $portfolio_id</p>
                <p><strong>Product No:</strong> $product_no</p>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Location:</strong> $location</p>
                <p><strong>Message:</strong> $message</p>
            ",
            "email" => "milankundu2003@gmail.com"
        ];

        // CURL SEND
        $ch = curl_init($web3_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        $response = curl_exec($ch);
        curl_close($ch);

        echo json_encode(["status" => "success"]);
    }
}
?>
