<?php
class clear extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index()
    {
        if($this->session->userdata("login_admin") == TRUE)
        {
            $this->db->empty_table('tb_topup');
            redirect("admin");
        }
        else
        {
            redirect("welcome");
        }
    }
}