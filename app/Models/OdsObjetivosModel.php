<?php

namespace App\Models;

use CodeIgniter\Model;

class OdsObjetivosModel extends Model
{
    protected $table      = 'ods_objetivos';
    protected $primaryKey = 'id_objetivo';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id_objetivo',
        'nombre',
        'descripcion'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
