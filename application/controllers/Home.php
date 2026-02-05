<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Generalmodel');
		$this->load->library('upload');
	}

	public function index()
	{

		$data['settings'] = $this->Generalmodel->show_data_id('settings', 1, 'id', 'get', '');
		$data['banner'] = $this->Generalmodel->show_data_id('banner', 'Active', 'status', 'get', '');
		$data['service'] = $this->Generalmodel->show_data_id('service', 'Active', 'status', 'get', '');
		$data['our_team'] = $this->Generalmodel->show_data_id('our_team', 'Active', 'status', 'get', '');
		$data['blog'] = $this->Generalmodel->show_data_id('blog', 'Active', 'status', 'get', '');
		$data['client_review'] = $this->Generalmodel->show_data_id('client_review', 'Active', 'status', 'get', '');
		$data['product'] = $this->Generalmodel->show_data_id('product', 'Active', 'status', 'get', '');
		$data['gallery'] = $this->Generalmodel->show_data_id('gallery', 'Active', 'status', 'get', '');




		$data['cms1'] = $this->Generalmodel->show_data_id('cms', 1, 'id', 'get', '');
		$data['cms2'] = $this->Generalmodel->show_data_id('cms', 2, 'id', 'get', '');
		$data['cms3'] = $this->Generalmodel->show_data_id('cms', 3, 'id', 'get', '');
		$data['cms4'] = $this->Generalmodel->show_data_id('cms', 4, 'id', 'get', '');
		$data['cms5'] = $this->Generalmodel->show_data_id('cms', 5, 'id', 'get', '');
		$data['cms6'] = $this->Generalmodel->show_data_id('cms', 6, 'id', 'get', '');









		$data['title'] = "Home";



		$this->load->view('common/header', $data);
		$this->load->view('home');
		$this->load->view('common/footer');
	}


	public function about()
	{
		$data['settings'] = $this->Generalmodel->show_data_id('settings', 1, 'id', 'get', '');
		// $data['cms1'] = $this->Generalmodel->show_data_id('cms', 1, 'id', 'get', '');

		$data['review'] = $this->Generalmodel->show_data_id('client_review', 'Active', 'status', 'get', '');
		$data['service'] = $this->Generalmodel->show_data_id('service', 'Active', 'status', 'get', '');
		$data['our_team'] = $this->Generalmodel->show_data_id('our_team', 'Active', 'status', 'get', '');

		$data['about_banner'] = $this->Generalmodel->show_data_id('breadcome', 1, 'id', 'get', '');
		$data['product'] = $this->Generalmodel->show_data_id('product', 'Active', 'status', 'get', '');



		$data['cms7'] = $this->Generalmodel->show_data_id('cms', 7, 'id', 'get', '');
		$data['cms2'] = $this->Generalmodel->show_data_id('cms', 2, 'id', 'get', '');
		$data['cms3'] = $this->Generalmodel->show_data_id('cms', 3, 'id', 'get', '');
		$data['cms4'] = $this->Generalmodel->show_data_id('cms', 4, 'id', 'get', '');






		$data['title'] = "About Us";


		$this->load->view('common/header', $data);
		$this->load->view('about_us');
		$this->load->view('common/footer');
	}

	public function product()
	{
		$data['settings'] = $this->Generalmodel->show_data_id('settings', 1, 'id', 'get', '');

		$data['product'] = $this->Generalmodel->show_data_id('product', 'Active', 'status', 'get', '');
		$data['cms2'] = $this->Generalmodel->show_data_id('cms', 2, 'id', 'get', '');



		$data['title'] = "Product";


		$this->load->view('common/header', $data);
		$this->load->view('product');
		$this->load->view('common/footer');
	}

	public function product_details()
	{
		$data['settings'] = $this->Generalmodel->show_data_id('settings', 1, 'id', 'get', '');



		$last_segment = $this->uri->segment($this->uri->total_segments());

		$data['product_details'] = $this->Generalmodel->show_data_id('product', $last_segment, 'product_slug', 'get', '');
		$data['product'] = $this->Generalmodel->show_data_id('product', 'Active', 'status', 'get', '');



		$this->load->view('common/header', $data);
		$this->load->view('product_details');
		$this->load->view('common/footer');
	}


	public function gallery($last_id = 0)
	{
		$data['settings'] = $this->Generalmodel->show_data_id('settings', 1, 'id', 'get', '');

		$data['cms2'] = $this->Generalmodel->show_data_id('cms', 2, 'id', 'get', '');


		// Load 10 images at a time
		$limit = 10;

		$this->db->order_by('id', 'DESC');
		if ($last_id) {
			$this->db->where('id <', $last_id); // older images
		}
		$this->db->limit($limit);
		$query = $this->db->get('gallery');
		$data['images'] = $query->result();

		// Pass last image ID to view
		$data['last_id'] = !empty($data['images']) ? end($data['images'])->id : 0;

		$data['title'] = "Gallery";

		$this->load->view('common/header', $data);
		$this->load->view('gallery', $data);
		$this->load->view('common/footer');
	}

	public function blog()
	{
		$data['settings'] = $this->Generalmodel->show_data_id('settings', 1, 'id', 'get', '');

		$data['blog'] = $this->Generalmodel->show_data_id('blog', 'Active', 'status', 'get', '');


		$data['title'] = "Our Blog";

		$this->load->view('common/header', $data);
		$this->load->view('blog', $data);
		$this->load->view('common/footer');
	}




	public function blog_details()
	{
		$data['settings'] = $this->Generalmodel->show_data_id('settings', 1, 'id', 'get', '');

		$last_segment = $this->uri->segment($this->uri->total_segments());

		// Get blog details
		$data['blog_details'] = $this->Generalmodel->show_data_id('blog', $last_segment, 'blog_slug', 'get', '');




		$this->load->view('common/header', $data);
		$this->load->view('blog_details');
		$this->load->view('common/footer');
	}




	public function contuct_us()
	{
		$data['settings'] = $this->Generalmodel->show_data_id('settings', 1, 'id', 'get', '');

		$data['title'] = "Contuct Us";


		$this->load->view('common/header', $data);
		$this->load->view('contuct_us');
		$this->load->view('common/footer');
	}






	public function test()
	{
		$data['settings'] = $this->Generalmodel->show_data_id('settings', 1, 'id', 'get', '');

		$data['page'] = $this->Generalmodel->show_data_id('page', 3, 'id', 'get', '');

		$data['title'] = "Payment Method";


		$this->load->view('common/header', $data);
		$this->load->view('test');
		$this->load->view('common/footer');
	}

	// public function login()
	// {  



	// 	$data['title'] = "login";



	// 	$this->load->view('login');
	// }

	// 	public function signup()
	// {  



	// 	$data['title'] = "signup";



	// 	$this->load->view('common/header', $data);
	// 	$this->load->view('signup');
	// 	$this->load->view('common/footer');
	// }
}
