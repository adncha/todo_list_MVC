<?

    /**
     * This class is responsible for making all the DB queries regarding admins.
     **/
    class task_model extends CI_Model
    {
        public
        function __construct()
        {
            parent::__construct();
        }

        //Get all tasks
        function getAll()
        {
            $query = $this->db->get('tasks');

            return $query->num_rows() > 0 ? $query->result() : false;
        }

        //Update a task
        function update($id, $eta = false)
        {
            $this->db
                ->set('eta', $eta)
                ->where('id', $id)
                ->update('tasks');

            return $eta;
        }

        function create($task)
        {
            $this->db->insert('tasks', ['task' => $task]);
            return $this->db->insert_id();
        }


        // Delete a task
        function delete($id)
        {
            $this->db
                ->where('id', $id)
                ->delete('tasks');

            return 1;

        }

    }
