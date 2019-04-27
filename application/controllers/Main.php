<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Posts_model', 'posts');
	}
	public function index()
	{
	    $data['posts'] = $this->posts->all_posts();
	    $data['count'] = count($data['posts']);
		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
}
