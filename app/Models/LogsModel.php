<?php
namespace App\Models;

use CodeIgniter\Model;
 class LogsModel extends Model{
    protected $table      = 'logs';
    protected $primaryKey = 'id_log';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_carga','id_usuario', 'fecha_edit'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
 }

?>