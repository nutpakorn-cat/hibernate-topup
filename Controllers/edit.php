<?php
class edit extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index()
    {
        if($this->session->userdata("login_admin") == TRUE)
        {
            if($this->input->post("v1",TRUE) != NULL && $this->input->post("v2",TRUE) != NULL && $this->input->post("v3",TRUE) != NULL && $this->input->post("v4",TRUE) != NULL && $this->input->post("v5",TRUE) != NULL && $this->input->post("v6",TRUE) != NULL)
            {
                for($i = 1;$i != 7;$i++)
                {
                    $this->db->where(array(
                        "point_id" => "$i"
                    ));
                    $this->db->update("tb_point",array(
                        "point_point" => $this->input->post("v$i",TRUE)
                    ));
                }
                redirect("admin");
            }
            else if($this->input->post("v8",TRUE) != NULL && $this->input->post("v9",TRUE) != NULL)
            {
                $this->db->where(array(
                        "setting_id" => "1"
                ));
                $this->db->update("tb_topup_setting",array(
                    "topup_uid" => $this->input->post("v8",TRUE)
                ));
                redirect("admin");
            }
            else 
            {
                redirect("admin");
            }
        }
        else 
        {
            redirect("welcome");
        }
    }
}