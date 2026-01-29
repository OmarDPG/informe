<?php
namespace App\Models;

use CodeIgniter\Model;
 class PartesModel extends Model{
    protected $table      = 'partes';
    protected $primaryKey = 'id_partes';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_parte', 'nombre', 'descripcion', 'id_evaluacion', 'numero_preguntas'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
 }

?>