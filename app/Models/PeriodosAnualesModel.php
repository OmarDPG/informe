<?php

namespace App\Models;

use CodeIgniter\Model;

class PeriodosAnualesModel extends Model
{
    protected $table      = 'periodos_anuales';
    protected $primaryKey = 'id_periodo_anual';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_periodo_anual', 'anio', 'descripcion', 'estado', 'created_at', 'updated_at'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
