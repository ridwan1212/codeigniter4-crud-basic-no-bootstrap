<?php

namespace App\Models;

use CodeIgniter\Model;

class YourModel extends Model
{
    // your table
    protected $table = 'your_table';
    // primary key
    protected $primaryKey = 'id';
    // table fields
    protected $allowedFields = ['name', 'email', 'address'];

    public function getList()
    {
        return $this->orderBy('name', 'ASC')->findAll();
    }

    public function createNew()
    {
        $this->insert($_POST);
    }

    public function getForEdit($id)
    {
        return $this->find($id);
    }

    public function updateData()
    {
        $this->update($_POST['id'], $_POST);
    }
}
