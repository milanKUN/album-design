<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Generalmodel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Fetch all records from a table
	 */
	public function get_all($table)
	{
		return $this->db->get($table)->result();
	}

	/**
	 * Fetch data with single condition
	 * Example: show_data_id('settings', 1, 'id')
	 */
	public function show_data_id($table, $value, $column)
	{
		return $this->db->where($column, $value)->get($table)->result();
	}

	/**
	 * Fetch data with multiple conditions (array)
	 */
	public function get_where($table, $conditions)
	{
		return $this->db->where($conditions)->get($table)->result();
	}

	/**
	 * Fetch limited rows
	 */
	public function get_limit($table, $limit, $offset = 0)
	{
		return $this->db->limit($limit, $offset)->get($table)->result();
	}

	/**
	 * Fetch data in ascending order
	 */
	public function get_order_asc($table, $column)
	{
		return $this->db->order_by($column, 'ASC')->get($table)->result();
	}

	/**
	 * Fetch data in descending order
	 */
	public function get_order_desc($table, $column)
	{
		return $this->db->order_by($column, 'DESC')->get($table)->result();
	}

	/**
	 * Fetch data with limit + order
	 */
	public function get_limit_order($table, $limit, $column, $order = 'ASC')
	{
		return $this->db->order_by($column, $order)->limit($limit)->get($table)->result();
	}

	/**
	 * Fetch data with 3 conditions
	 */
	public function get_three_conditions($table, $cond1, $cond2, $cond3)
	{
		return $this->db
			->where($cond1)
			->where($cond2)
			->where($cond3)
			->get($table)
			->result();
	}

	/**
	 * Fetch single row (e.g. settings row)
	 */
	public function get_row($table, $conditions)
	{
		return $this->db->where($conditions)->get($table)->row();
	}

	public function get_latest_images($limit = 20)
	{
		$this->db->order_by('created_at', 'DESC');
		$this->db->limit($limit);
		$query = $this->db->get('gallery');
		return $query->result();
	}

	public function get_last_images_by_service($service_id, $limit = 10)
	{
		$this->db->where('service_id', $service_id);
		$this->db->order_by('id', 'DESC'); // assuming your gallery table has 'id' as primary key
		$this->db->limit($limit);
		$query = $this->db->get('gallery');
		return $query->result(); // returns an array of objects
	}

	public function get_gallery_images($where = [], $last_id = null, $limit = 10)
	{
		if ($last_id) {
			$this->db->where('id <', $last_id);
		}
		if (!empty($where)) {
			$this->db->where($where);
		}
		$this->db->order_by('id', 'DESC');
		$this->db->limit($limit);
		$query = $this->db->get('gallery');
		return $query->result();
	}

	public function get_blog_posts($where = [], $last_id = 0, $limit = 4)
	{
		$this->db->where('status', 'Active');
		if (!empty($where)) $this->db->where($where);

		if ($last_id > 0) {
			$this->db->where('id <', $last_id); // load older posts
		}

		$this->db->order_by('id', 'DESC');
		$this->db->limit($limit);

		$query = $this->db->get('blog');
		return $query->result();
	}
}
