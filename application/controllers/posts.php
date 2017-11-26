<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class posts extends CI_Controller {
    public function create()
	{
		$data['title']='create post';
		$this->load->view('templates/header');
		$this->load->view('posts/create',$data);
		$this->load->view('templates/footer');
	
	}
	public function save()
		{
		$this->post_model->create();
		 redirect('posts/index');
		}

  public function index()
  {
  	$data['title']='all posts';
  	$data['posts'] = $this->post_model->getposts();
  	
  		$this->load->view('templates/header');
  	$this->load->view('posts/index',$data);
  		$this->load->view('templates/footer');

  	}
  	public function edit($id)
  	{
  		$data['post'] = $this->post_model->getpost($id);

  		$this->load->view('templates/header');
  		$this->load->view('posts/edit',$data);
  		$this->load->view('templates/footer');
  	}
  	public function update($id)
  	{
  		$data['post'] = $this->post_model->updatePost($id);
  		redirect('posts/index');
  	}

  	public function delete($id)
  	{
  		$data['post'] = $this->post_model->deletePost($id);
  		redirect('posts/index');
  		
  	}
}
