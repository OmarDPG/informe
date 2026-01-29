<?php

namespace App\Models;

use CodeIgniter\Model;

class PeriodosModel extends Model
{
   protected $table      = 'periodos';
   protected $primaryKey = 'id_periodo';

   protected $useAutoIncrement = true;

   protected $returnType     = 'array';
   protected $useSoftDeletes = false;

   protected $allowedFields = ['fecha_ini', 'fecha_fin', 'year', 'periodo', 'activo', 'nombre_periodo'];

   protected $useTimestamps = false;

   protected $validationRules    = [];
   protected $validationMessages = [];
   protected $skipValidation     = false;
}
