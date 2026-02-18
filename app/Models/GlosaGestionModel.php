<?php

namespace App\Models;

use CodeIgniter\Model;

class GlosaGestionModel extends Model
{
    protected $table      = 'glosa_gestion';
    protected $primaryKey = 'id_glosa';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id_glosa',
        'nombre',
        'fecha_inicio',
        'fecha_fin_programada',
        'fecha_cierre_real',
        'estado'
    ];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
