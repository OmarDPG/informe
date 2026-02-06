<?php

namespace App\Models;

use CodeIgniter\Model;

class OdsMetasModel extends Model
{
    protected $table      = 'ods_metas';
    protected $primaryKey = 'id_meta';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id_meta',
        'id_objetivo',
        'codigo_meta',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
