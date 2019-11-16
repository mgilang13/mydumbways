<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Controller {
	
	public function readdata()
	{
        $this->db->select('categories.name as categoryName,books.id, books.name as bookName, books.stok, books.image, books.deskripsi')
                ->from('books')
                ->join('categories', 'books.category_id=categories.id');
        $query = $this->db->get();
        return $query;

    }
    
    public function insertData($data)
    {
        $this->db->insert('books', $data);
    }

    public function readById($id){
        $this->db->select('*')
                ->from('books')
                ->where('id', $id);
        return $this->db->get();
    }
    
    public function updateData($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('books', $data);
    }

    public function deleteBooks($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('books');
    }
}