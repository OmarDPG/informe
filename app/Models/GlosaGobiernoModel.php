<?php

namespace App\Models;

use CodeIgniter\Model;

class GlosasGobiernoModel extends Model
{
    protected $table      = 'glosas_gobierno';
    protected $primaryKey = 'id_glosa_gobierno';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id_glosa_gobierno',
        'id_usuario',
        'id_unidad',
        'id_glosa',
        'fecha_corte',
        'id_alineacion_ped',
        'orden_prioridad',
        'tema',
        'introduccion',
        'accion',
        'desarrollo',
        'id_alineacion_programa_derivado',
        'id_alineacion_ods',
        'estado',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
