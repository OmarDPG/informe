<?php
namespace App\Models;

use CodeIgniter\Model;
 class PreguntasModel extends Model{
    protected $table      = 'preguntas';
    protected $primaryKey = 'id_pregunta';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_pregunta', 'id_parte', 'texto', 'descripcion', 'calificacion', 'evidencia'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
 }

?>