<?php


class Posts_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function all_posts()
    {
        $this->db->select('p.*, concat(u.first_name, " ", u.last_name) as user');
        $this->db->join('users u', 'u.id=p.author', 'left');
        return $this->db->get_where('posts p', array('active'=>'1'))->result_array();
    }
}