<?php

namespace App\Models;

use CodeIgniter\Model;

class InformeModel extends Model
{
   protected $table      = 'informe';
   protected $primaryKey = 'id_informe';

   protected $useAutoIncrement = true;

   protected $returnType     = 'array';
   protected $useSoftDeletes = false;

   protected $allowedFields = [
      'id_informe',
      'id_usuario',
      'id_unidad',
      'id_etapa',
      'id_periodo_anual',
      'informe_id',
      'unidad_administrativa',
      'fecha_corte',
      'alineacion_ped',
      'orden_prioridad',
      'alineacion_ods',
      'tema',
      'subtema',
      'descripcion',
      'contexto',
      'accion',
      'impacto',
      'territorio',
      'beneficiarios',
      'inversion',
      'desarrollo_resultado',
      'conclusion_tematica',
      'logros_destacados',
      'estado',
      'ruta_evidencia'
   ];

   protected $useTimestamps = true;
   protected $createdField  = 'created_at';
   protected $updatedField  = 'updated_at';


   protected $validationRules    = [];
   protected $validationMessages = [];
   protected $skipValidation     = false;
}
