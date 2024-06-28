<?php

namespace App\Models;

use CodeIgniter\Model;

class Students extends Model
{
    protected $table      = 'students';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['adm_number', 'dob', 'f_name', 'l_name', 'o_name', 'phone', 'gender', 'img', 'class'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}