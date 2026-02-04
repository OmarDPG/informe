<?php

namespace App\Models;

use CodeIgniter\Model;

class EstrategiasSocioambientalModel extends Model
{
    protected $table      = 'estrategias_socioambiental';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id',
        'objetivo_id',
        'codigo',
        'descripcion'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
