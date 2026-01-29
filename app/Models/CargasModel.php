<?php
namespace App\Models;

use CodeIgniter\Model;
 class CargasModel extends Model{
    protected $table      = 'cargas';
    protected $primaryKey = 'id_carga';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_unidad', 'year', 't_carga', 'fecha_alta', 'fecha_ultima_edit', 'accion_factor', 'descripcion', 'fecha_inicio', 'fecha_termino', 'medio_verificacion', 'estado', 'aprobado' ,'observacion', 'justificacion', 'activo'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
 }

?>