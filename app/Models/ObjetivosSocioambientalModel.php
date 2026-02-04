<?php

namespace App\Models;

use CodeIgniter\Model;

class ObjetivosSocioambientalModel extends Model
{
    protected $table      = 'objetivos_socioambiental';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id',
        'tematica_id',
        'codigo',
        'descripcion',
        'indicador',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
