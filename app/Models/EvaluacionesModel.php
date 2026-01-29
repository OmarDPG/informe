<?php
namespace App\Models;

use CodeIgniter\Model;
 class EvaluacionesModel extends Model{
    protected $table      = 'evaluaciones';
    protected $primaryKey = 'id_evaluacion';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_evaluacion', 'nombre', 'descripcion', 'id_periodo', 'id_usuario', 'id_unidad'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
 }

?>