<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

	public function __construct(){
			$this->load->database();
		}

		public function create()
		{
			$title = $this->input->post('title');
			$body =  $this->input->post('body');
			
			$data =array(
				"title"=>$title,
				"body"=>$body);
			
			$this->db->insert('post', $data);
			
		}
		public function getposts()
		{
			$query = $this->db->get('post');
			return $query->result_array();
			
		}
		public function getpost($id)
		{
			$query = $this->db->get_where('post', array('id' => $id));
			return $query->row_array();
		}
		public function updatePost($id)
		{
			$title = $this->input->post('title');
			$body =  $this->input->post('body');
			
			$data =array(
				"title"=>$title,
				"body"=>$body);

			$this->db->where('id', $id);
			$this->db->update('post', $data);
		}
		public function deletePost($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('post');
		}

	}