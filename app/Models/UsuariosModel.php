<?php
namespace App\Models;

use CodeIgniter\Model;
 class UsuariosModel extends Model{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_unidad','usuario', 'password', 'correo', 'nombre_s', 'apellido_p', 'apellido_m', 'n_expediente', 'fecha_alta', 'fecha_ultimo_acceso', 'activo', 'adm', 'admGen', 'lista_raya', 'evaluacion', 'id_categoria', 'ver_evaluacion', 'con_evaluador', 'informe', 'glosa', 'loadinforme', 'loadglosa'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
 }

?>