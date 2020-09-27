<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
        // $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()){
            if ($this->input->post()) {
                if ($this->user_model->doLogin()) redirect(site_url('admin'));
            }
            $this->load->view("admin/login_page.php");
        } else {
            redirect(site_url('admin'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php'));
    }

    public function test()
    {
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('foo' => 'bar')));
    }
}
