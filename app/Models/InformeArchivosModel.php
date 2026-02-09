<?php

namespace App\Models;

use CodeIgniter\Model;

class InformeArchivosModel extends Model
{
    protected $table      = 'informe_archivos';
    protected $primaryKey = 'id_archivo';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id_archivo',
        'id_informe',
        'tipo_archivo',
        'nombre_archivo',
        'nombre_original',
        'ruta_archivo',
        'extension',
        'tamanio_kb',
        'mime_type',
        'orden',
        'created_at',
        'estado'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
