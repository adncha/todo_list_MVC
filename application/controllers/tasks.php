<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class tasks extends MY_Controller
    {

        public function index()
        {

            $data =
                [
                    'tasks' => $this->task_model->getAll(),
                    'title' => 'tasks'
                ];
            $this->load->template('tasks',$data);
        }
    }
