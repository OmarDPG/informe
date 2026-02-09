<?php

namespace App\Models;

use CodeIgniter\Model;

class InformeComentariosModel extends Model
{
    protected $table      = 'informe_comentarios';
    protected $primaryKey = 'id_comentario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id_comentario',
        'id_informe',
        'id_usuario',
        'campo_referencia',
        'comentario',
        'tipo',
        'estado',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
