<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramaSectorialGlosaModel extends Model
{
    protected $table      = 'programas_sectoriales_glosa';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id',
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
