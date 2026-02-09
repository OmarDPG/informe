<?php

namespace App\Models;

use CodeIgniter\Model;

class InformesGobiernoModel extends Model
{
   protected $table      = 'informes_gobierno';
   protected $primaryKey = 'id_informe';

   protected $useAutoIncrement = true;

   protected $returnType     = 'array';
   protected $useSoftDeletes = false;

   protected $allowedFields = [
      'id_informe',
      'id_usuario',
      'id_unidad',
      'id_periodo_anual',
      'id_etapa',
      'fecha_corte',
      'id_alineacion_ped',
      'orden_prioridad',
      'tema',
      'subtema',
      'descripcion_resultado',
      'contexto',
      'accion',
      'impacto',
      'territorio',
      'beneficiarios',
      'inversion',
      'desarrollo_resultado',
      'conclusion_tematica',
      'logros_destacados',
      'id_alineacion_programa_derivado',
      'id_alineacion_ods',
      'estado',
      'created_at',
      'updated_at',
      'deleted_at'
   ];

   protected $useTimestamps = true;
   protected $createdField  = 'created_at';
   protected $updatedField  = 'updated_at';


   protected $validationRules    = [];
   protected $validationMessages = [];
   protected $skipValidation     = false;
}
