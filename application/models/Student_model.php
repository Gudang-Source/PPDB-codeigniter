<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model
{
    private $_table = "students";

    public $student_id;
    public $name;
    public $age;
    public $address;
    public $gender;
    public $phone;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'age',
            'label' => 'Age',
            'rules' => 'numeric'],
            
            ['field' => 'address',
            'label' => 'Address',
            'rules' => 'required'],

            ['field' => 'gender',
            'label' => 'Gender',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["student_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->student_id = uniqid();
        $this->name = $post["name"];
		$this->age = $post["age"];
        $this->address = $post["address"];
        $this->gender = $post["gender"];
        $this->phone = $post["phone"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->student_id = $post["id"];
        $this->name = $post["name"];
		$this->age = $post["age"];
        $this->address = $post["address"];
        $this->gender = $post["gender"];
        $this->phone = $post["phone"];
        $this->db->update($this->_table, $this, array('student_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("student_id" => $id));
	}

}
