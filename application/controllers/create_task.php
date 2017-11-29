<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class create_task extends MY_Controller {


        public function index()
        {
            $data['title']= 'create task';
            $this->load->template('create_task',$data);
        }

        public function create()
        {
            //Security Check
            if(!$this->input->post())
            {
                header( 'Location: /index.php/create_task' ) ;
                exit;
            }

            //Create task
            $this->task_model->create($this->input->post('task'));

            //Redirect
            header( 'Location: /index.php/tasks?suc_mess=1' ) ;
            exit;
        }
    }
