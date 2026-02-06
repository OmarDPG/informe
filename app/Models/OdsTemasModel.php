<?php

namespace App\Models;

use CodeIgniter\Model;

class OdsTemasModel extends Model
{
    protected $table      = 'ods_temas';
    protected $primaryKey = 'id_tema';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id_tema',
        'id_meta',
        'tema',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getODS()
    {
        return $this->db->table('ods_temas t')
            ->select('
                t.id_tema,
                t.tema,
                m.id_meta,
                m.codigo_meta,
                o.id_objetivo,
                o.nombre AS objetivo,
                o.descripcion AS descripcion
            ')
            ->join('ods_metas m', 't.id_meta = m.id_meta')
            ->join('ods_objetivos o', 'm.id_objetivo = o.id_objetivo')
            ->orderBy('o.id_objetivo, m.codigo_meta, t.id_tema')
            ->get()
            ->getResultArray();
    }
}
