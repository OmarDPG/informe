<?php

namespace App\Models;

use CodeIgniter\Model;

class EtapasModel extends Model
{
    protected $table      = 'etapas';
    protected $primaryKey = 'id_etapa';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_etapa', 'id_periodo_anual', 'numero_etapa', 'nombre', 'fecha_inicio', 'fecha_fin', 'estado', 'created_at', 'updated_at'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
