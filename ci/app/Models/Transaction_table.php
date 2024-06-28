<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaction_table extends Model
{
    protected $table      = 'transaction_table';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['adm_number', 'email', 'trans_ref', 'amount', 'status', 'link'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}