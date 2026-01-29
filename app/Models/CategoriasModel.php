<?php
namespace App\Models;

use CodeIgniter\Model;
 class CategoriasModel extends Model{
    protected $table      = 'categorias';
    protected $primaryKey = 'id_categoria';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_categoria', 'nombre_categoria'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
 }

?>