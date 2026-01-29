<?php
namespace App\Models;

use CodeIgniter\Model;
 class RespuestasModel extends Model{
    protected $table      = 'respuestas';
    protected $primaryKey = 'id_respuesta';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

   protected $allowedFields = [
      'id_respuesta',
      'id_usuario',
      'id_periodo',
      'principales_funciones',
      'comentarios_funciones',
      'meta_uno',
      'fecha_cumplimiento_meta_uno',
      'calificacion_meta_uno',
      'meta_dos',
      'fecha_cumplimiento_meta_dos',
      'calificacion_meta_dos',
      'meta_tres',
      'fecha_cumplimiento_meta_tres',
      'calificacion_meta_tres',
      'meta_cuatro',
      'fecha_cumplimiento_meta_cuatro',
      'calificacion_meta_cuatro',
      'meta_cinco',
      'fecha_cumplimiento_meta_cinco',
      'calificacion_meta_cinco',
      'total_segmento_dos',
      'puntuaje_segmento_dos',
      'criterio_desempeño_uno',
      'ruta_evidencia_uno',
      'calificacion_uno',
      'calificacion_uno_evaluador',
      'criterio_desempeño_dos',
      'ruta_evidencia_dos',
      'calificacion_dos',
      'calificacion_dos_evaluador',
      'criterio_desempeño_tres',
      'ruta_evidencia_tres',
      'calificacion_tres',
      'calificacion_tres_evaluador',
      'criterio_desempeño_cuatro',
      'ruta_evidencia_cuatro',
      'calificacion_cuatro',
      'calificacion_cuatro_evaluador',
      'criterio_desempeño_cinco',
      'ruta_evidencia_cinco',
      'calificacion_cinco',
      'calificacion_cinco_evaluador',
      'criterio_desempeño_seis',
      'ruta_evidencia_seis',
      'calificacion_seis',
      'calificacion_seis_evaluador',
      'criterio_desempeño_siete',
      'ruta_evidencia_siete',
      'calificacion_siete',
      'calificacion_siete_evaluador',
      'criterio_desempeño_ocho',
      'ruta_evidencia_ocho',
      'calificacion_ocho',
      'calificacion_ocho_evaluador',
      'total_segmento_tres',
      'puntuaje_segmento_tres',
      'total_segmento_tres_evaluador',
      'puntuaje_segmento_tres_evaluador',
      'valor_agregado_uno',
      'valor_agregado_uno_evaluador',
      'valor_agregado_dos',
      'valor_agregado_dos_evaluador',
      'valor_agregado_tres',
      'valor_agregado_tres_evaluador',
      'valor_agregado_cuatro',
      'valor_agregado_cuatro_evaluador',
      'valor_agregado_cinco',
      'valor_agregado_cinco_evaluador',
      'valor_agregado_seis',
      'valor_agregado_seis_evaluador',
      'valor_agregado_siete',
      'valor_agregado_siete_evaluador',
      'valor_agregado_ocho',
      'valor_agregado_ocho_evaluador',
      'valor_agregado_nueve',
      'valor_agregado_nueve_evaluador',
      'valor_agregado_diez',
      'valor_agregado_diez_evaluador',
      'total_uno',
      'total_uno_evaluador',
      'total_dos_evaluador',
      'total_dos',
      'total_segmento_cuatro',
      'total_segmento_cuatro_evaluador',
      'puntuaje_segmento_cuatro',
      'puntuaje_segmento_cuatro_evaluador',
      'final_segmento_tres',
      'final_segmento_cuatro',
      'total_global',
      'final_segmento_tres_evaluador',
      'final_segmento_cuatro_evaluador',
      'total_global_evaluador',
      'comentarios_evaluado',
      'comentarios_evaluador_uno',
      'comentarios_evaluador_dos',
      'comentarios_evaluador_tres',
      'comentarios_evaluador_cuatro',
      'id_unidad',
      'id_evaluacion',
      'fecha_respuesta'
                           ];

   protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
 }

?>