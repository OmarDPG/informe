<?php
namespace App\Models;

use CodeIgniter\Model;
 class UnidadesModel extends Model{
    protected $table      = 'unidades';
    protected $primaryKey = 'id_unidad';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['descripcion','determinante', 'activo'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
 }

?>