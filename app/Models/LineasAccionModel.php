<?php

namespace App\Models;

use CodeIgniter\Model;

class LineasAccionModel extends Model
{
    protected $table      = 'lineas_accion';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id',
        'estrategia_id',
        'codigo',
        'descripcion'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getLineasAccionConContexto()
    {
        return $this->db->table('lineas_accion la')
            ->select('
            la.id,
            la.codigo,
            la.descripcion,
            es.codigo AS estrategia,
            o.codigo AS objetivo,
            t.codigo AS tematica,
            e.codigo AS eje
        ')
            ->join('estrategias es', 'es.id = la.estrategia_id')
            ->join('objetivos o', 'o.id = es.objetivo_id')
            ->join('tematicas t', 't.id = o.tematica_id')
            ->join('ejes e', 'e.id = t.eje_id')
            ->orderBy('la.codigo', 'ASC')
            ->get()
            ->getResultArray();
    }
}
