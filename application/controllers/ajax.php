<?php if (!defined('BASEPATH'))
{
    session_start();
    exit('No direct script access allowed');
}

    class ajax extends MY_Controller
    {

        function __construct()
        {
            parent::__construct();

            if (!$this->input->is_ajax_request())
            {
                exit('No direct script access allowed');
            }
        }

        function task_create()
        {
            $this->load->model('task_model');
            die(json_encode($this->task_model->create($this->input->post())));
        }


        function task_update()
        {
            $this->load->model('task_model');
            die(json_encode($this->task_model->update(
                $this->input->post('id'),
                $this->input->post('eta')
            )));
        }

        function task_delete()
        {
            $this->load->model('task_model');
            die(json_encode($this->task_model->delete($this->input->post('id'))));
        }


    }
