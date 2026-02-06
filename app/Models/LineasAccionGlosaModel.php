<?php

namespace App\Models;

use CodeIgniter\Model;

class LineasAccionGlosaModel extends Model
{
    protected $table      = 'lineas_accion_glosa';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id',
        'estrategia_id',
        'codigo',
        'descripcion',
        'responsable',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getLineasAccionPorPrograma($programaId)
    {
        return $this->db->table('lineas_accion_glosa la')
            ->select('
                la.id,
                la.codigo,
                la.descripcion,
                es.codigo AS estrategia,
                o.codigo AS objetivo,
                t.codigo AS tematica,
                e.codigo AS eje,
                ps.codigo AS programa_sectorial
            ')
            ->join('estrategias_glosa es', 'es.id = la.estrategia_id')
            ->join('objetivos_glosa o', 'o.id = es.objetivo_id')
            ->join('tematicas_glosa t', 't.id = o.tematica_id')
            ->join('ejes_glosa e', 'e.id = t.eje_id')
            ->join('programas_sectoriales_glosa ps', 'ps.id = e.programa_id')
            ->where('ps.id', $programaId)
            ->orderBy('la.codigo', 'ASC')
            ->get()
            ->getResultArray();
    }
}