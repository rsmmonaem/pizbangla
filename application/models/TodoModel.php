<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TodoModel extends CI_Model {

    // Method to get all todo items from the database
    public function getTodos() {
        // Fetch todo items from the database (example query)
        $query = $this->db->get('todos');
        return $query->result();
    }


    public function addTodo($data) {
        $this->db->insert('todos', $data);
    }

    public function deleteTodo($id) {
        $this->db->where('id', $id);
        $this->db->delete('todos');
    }

	// public function markDone($id, $done)
    // {
    //     $data = ['done' => $done];
    //     return $this->update($id, $data);
    // }

    // Other CRUD operations can be similarly implemented
}
