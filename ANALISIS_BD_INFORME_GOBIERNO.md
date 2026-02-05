# Análisis y Propuesta de Base de Datos - Informe de Gobierno

## 📊 Análisis de Campos del Formulario

### Campos Identificados en el Formulario

| Campo | Tipo | Longitud Máx | Requerido | Observaciones |
|-------|------|--------------|-----------|---------------|
| informe_id | Hidden | - | No | Para edición |
| unidad_administrativa | Text | - | Sí | Solo lectura (viene de sesión) |
| fecha_corte | Date | - | Sí | - |
| alineacionPED | Select | - | Sí | FK a tabla de líneas PED |
| ordenPrioridad | Select | 1-10 | Sí | - |
| tema | Text | 100 | Sí | - |
| subtema | Text | 100 | Sí | - |
| descripcion | Text | 100 | Sí | Descripción del resultado |
| contexto | Textarea | 500 | Sí | - |
| accion | Text | 100 | Sí | - |
| impacto | Textarea | 300 | Sí | - |
| territorio | Textarea | 250 | Sí | - |
| beneficiarios | Text | 150 | Sí | - |
| inversion | Textarea | 200 | Sí | - |
| desarrollo_resultado | Textarea | 3500 | Sí | - |
| alineacionProgramasDerivados | Select | - | Sí | FK (dinámico según unidad) |
| alineacionODS | Select | - | Sí | FK a ODS |
| mapas[] | File | - | No | Multiple Excel |
| graficos[] | File | - | No | Multiple Excel |
| fotografias[] | File | - | No | Multiple JPG/PNG |
| audio[] | File | - | No | Multiple MP3/WAV |
| video[] | File | - | No | Multiple MP4/AVI |
| otros[] | File | - | No | Multiple PDF/DOC |
| conclusionTematica | Textarea | 1900 | Sí | - |
| logrosDestacados | Textarea | 1900 | Sí | - |

---

## 🏗️ Estructura de Base de Datos Propuesta

### Opción 1: Estructura Normalizada (Recomendada)

Esta opción proporciona mayor flexibilidad, control de versiones y mejor integridad de datos.

#### 1. Tabla Principal: `informes_gobierno`

```sql
CREATE TABLE informes_gobierno (
    id_informe INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT(11) NOT NULL,
    id_unidad INT(11) NOT NULL,
    id_periodo_anual INT(11) NULL,
    id_etapa INT(11) NULL,
    
    -- Información básica
    fecha_corte DATE NOT NULL,
    id_alineacion_ped INT(11) NOT NULL,
    orden_prioridad TINYINT(2) NOT NULL,
    
    -- Contenido principal
    tema VARCHAR(100) NOT NULL,
    subtema VARCHAR(100) NOT NULL,
    descripcion_resultado VARCHAR(100) NOT NULL,
    contexto TEXT NOT NULL,
    accion VARCHAR(100) NOT NULL,
    impacto TEXT NOT NULL,
    territorio VARCHAR(250) NOT NULL,
    beneficiarios VARCHAR(150) NOT NULL,
    inversion VARCHAR(200) NOT NULL,
    desarrollo_resultado TEXT NOT NULL,
    
    -- Conclusiones
    conclusion_tematica TEXT NOT NULL,
    logros_destacados TEXT NOT NULL,
    
    -- Alineaciones
    id_alineacion_programa_derivado INT(11) NOT NULL,
    id_alineacion_ods INT(11) NOT NULL,
    
    -- Control de estados
    estado ENUM('borrador', 'enviado', 'revisado', 'aprobado', 'rechazado') DEFAULT 'borrador',
    observaciones TEXT NULL,
    
    -- Auditoría
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL,
    
    -- Índices
    INDEX idx_usuario (id_usuario),
    INDEX idx_unidad (id_unidad),
    INDEX idx_estado (estado),
    INDEX idx_fecha_corte (fecha_corte),
    
    -- Foreign Keys
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_unidad) REFERENCES unidades(id_unidad),
    FOREIGN KEY (id_periodo_anual) REFERENCES periodos_anuales(id_periodo_anual),
    FOREIGN KEY (id_alineacion_ods) REFERENCES ods_temas(id_tema)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

#### 2. Tabla: `informe_archivos`

Para manejar múltiples archivos adjuntos de forma normalizada:

```sql
CREATE TABLE informe_archivos (
    id_archivo INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_informe INT(11) NOT NULL,
    tipo_archivo ENUM('mapa', 'grafico', 'fotografia', 'audio', 'video', 'otro') NOT NULL,
    nombre_archivo VARCHAR(255) NOT NULL,
    nombre_original VARCHAR(255) NOT NULL,
    ruta_archivo VARCHAR(500) NOT NULL,
    extension VARCHAR(10) NOT NULL,
    tamanio_kb INT(11) NOT NULL,
    mime_type VARCHAR(100) NOT NULL,
    orden TINYINT(3) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    INDEX idx_informe (id_informe),
    INDEX idx_tipo (tipo_archivo),
    
    FOREIGN KEY (id_informe) REFERENCES informes_gobierno(id_informe) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

#### 3. Tabla: `informe_versiones` (Opcional - Control de Versiones)

```sql
CREATE TABLE informe_versiones (
    id_version INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_informe INT(11) NOT NULL,
    version INT(3) NOT NULL,
    datos_json LONGTEXT NOT NULL, -- JSON con todos los campos
    modificado_por INT(11) NOT NULL,
    comentario_cambio TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    INDEX idx_informe (id_informe),
    
    FOREIGN KEY (id_informe) REFERENCES informes_gobierno(id_informe) ON DELETE CASCADE,
    FOREIGN KEY (modificado_por) REFERENCES usuarios(id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

#### 4. Tabla: `informe_comentarios` (Opcional - Sistema de Revisión)

```sql
CREATE TABLE informe_comentarios (
    id_comentario INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_informe INT(11) NOT NULL,
    id_usuario INT(11) NOT NULL,
    campo_referencia VARCHAR(100) NULL, -- Campo específico al que se refiere
    comentario TEXT NOT NULL,
    tipo ENUM('observacion', 'correccion', 'aprobacion') DEFAULT 'observacion',
    estado ENUM('pendiente', 'atendido', 'descartado') DEFAULT 'pendiente',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    INDEX idx_informe (id_informe),
    INDEX idx_usuario (id_usuario),
    
    FOREIGN KEY (id_informe) REFERENCES informes_gobierno(id_informe) ON DELETE CASCADE,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

#### 5. Tabla: `informe_historial_estados` (Opcional - Auditoría de Estados)

```sql
CREATE TABLE informe_historial_estados (
    id_historial INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_informe INT(11) NOT NULL,
    estado_anterior VARCHAR(50) NULL,
    estado_nuevo VARCHAR(50) NOT NULL,
    id_usuario INT(11) NOT NULL,
    observacion TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    INDEX idx_informe (id_informe),
    
    FOREIGN KEY (id_informe) REFERENCES informes_gobierno(id_informe) ON DELETE CASCADE,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

---

### Opción 2: Estructura Simplificada

Si prefieres una estructura más simple (menos tablas), puedes usar:

```sql
CREATE TABLE informes_gobierno (
    id_informe INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT(11) NOT NULL,
    id_unidad INT(11) NOT NULL,
    id_periodo_anual INT(11) NULL,
    
    -- Todos los campos del formulario
    fecha_corte DATE NOT NULL,
    alineacion_ped INT(11) NOT NULL,
    orden_prioridad TINYINT(2) NOT NULL,
    tema VARCHAR(100) NOT NULL,
    subtema VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    contexto TEXT NOT NULL,
    accion VARCHAR(100) NOT NULL,
    impacto TEXT NOT NULL,
    territorio VARCHAR(250) NOT NULL,
    beneficiarios VARCHAR(150) NOT NULL,
    inversion VARCHAR(200) NOT NULL,
    desarrollo_resultado TEXT NOT NULL,
    alineacion_programas_derivados INT(11) NOT NULL,
    alineacion_ods INT(11) NOT NULL,
    conclusion_tematica TEXT NOT NULL,
    logros_destacados TEXT NOT NULL,
    
    -- Archivos como JSON
    archivos_mapas JSON NULL,
    archivos_graficos JSON NULL,
    archivos_fotografias JSON NULL,
    archivos_audio JSON NULL,
    archivos_video JSON NULL,
    archivos_otros JSON NULL,
    
    -- Control
    estado ENUM('borrador', 'enviado', 'revisado', 'aprobado') DEFAULT 'borrador',
    observaciones TEXT NULL,
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_unidad) REFERENCES unidades(id_unidad)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

---

## 📋 Modelo CodeIgniter Actualizado

```php
<?php

namespace App\Models;

use CodeIgniter\Model;

class InformeGobiernoModel extends Model
{
    protected $table = 'informes_gobierno';
    protected $primaryKey = 'id_informe';
    
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true; // Para soft delete
    
    protected $allowedFields = [
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
        'id_alineacion_programa_derivado',
        'id_alineacion_ods',
        'conclusion_tematica',
        'logros_destacados',
        'estado',
        'observaciones'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    
    protected $validationRules = [
        'id_usuario' => 'required|integer',
        'id_unidad' => 'required|integer',
        'fecha_corte' => 'required|valid_date',
        'tema' => 'required|max_length[100]',
        'subtema' => 'required|max_length[100]',
        'descripcion_resultado' => 'required|max_length[100]',
        'contexto' => 'required|max_length[500]',
        'accion' => 'required|max_length[100]',
        'impacto' => 'required|max_length[300]',
        'territorio' => 'required|max_length[250]',
        'beneficiarios' => 'required|max_length[150]',
        'inversion' => 'required|max_length[200]',
        'desarrollo_resultado' => 'required|max_length[3500]',
        'conclusion_tematica' => 'required|max_length[1900]',
        'logros_destacados' => 'required|max_length[1900]',
    ];
    
    protected $validationMessages = [];
    protected $skipValidation = false;
    
    // Métodos útiles
    public function getInformesPorUsuario($id_usuario, $estado = null)
    {
        $builder = $this->where('id_usuario', $id_usuario);
        
        if ($estado) {
            $builder->where('estado', $estado);
        }
        
        return $builder->orderBy('created_at', 'DESC')->findAll();
    }
    
    public function getInformesPorUnidad($id_unidad, $periodo = null)
    {
        $builder = $this->where('id_unidad', $id_unidad);
        
        if ($periodo) {
            $builder->where('id_periodo_anual', $periodo);
        }
        
        return $builder->orderBy('fecha_corte', 'DESC')->findAll();
    }
    
    public function cambiarEstado($id_informe, $nuevo_estado, $observaciones = null)
    {
        $data = ['estado' => $nuevo_estado];
        
        if ($observaciones) {
            $data['observaciones'] = $observaciones;
        }
        
        return $this->update($id_informe, $data);
    }
}
```

---

## 📁 Modelo para Archivos

```php
<?php

namespace App\Models;

use CodeIgniter\Model;

class InformeArchivoModel extends Model
{
    protected $table = 'informe_archivos';
    protected $primaryKey = 'id_archivo';
    
    protected $allowedFields = [
        'id_informe',
        'tipo_archivo',
        'nombre_archivo',
        'nombre_original',
        'ruta_archivo',
        'extension',
        'tamanio_kb',
        'mime_type',
        'orden'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = false;
    
    public function getArchivosPorInforme($id_informe, $tipo = null)
    {
        $builder = $this->where('id_informe', $id_informe);
        
        if ($tipo) {
            $builder->where('tipo_archivo', $tipo);
        }
        
        return $builder->orderBy('orden', 'ASC')->findAll();
    }
    
    public function eliminarArchivo($id_archivo)
    {
        $archivo = $this->find($id_archivo);
        
        if ($archivo && file_exists($archivo['ruta_archivo'])) {
            unlink($archivo['ruta_archivo']);
        }
        
        return $this->delete($id_archivo);
    }
}
```

---

## 💡 Recomendaciones y Mejores Prácticas

### 1. **Gestión de Archivos**
- ✅ Crear estructura de carpetas: `writable/uploads/informes/{año}/{mes}/{id_unidad}/`
- ✅ Renombrar archivos con hash único: `{timestamp}_{hash}_{nombre_original}`
- ✅ Limitar tamaños de archivos según tipo
- ✅ Validar tipos MIME antes de guardar
- ✅ Implementar soft delete para recuperación

### 2. **Control de Estados**
- ✅ Flujo: `borrador` → `enviado` → `en_revision` → `aprobado`/`rechazado`
- ✅ Guardar historial de cambios de estado
- ✅ Notificaciones por correo en cada cambio de estado
- ✅ Permisos por rol (usuario vs revisor vs admin)

### 3. **Validaciones**
- ✅ Validar longitudes de caracteres en backend
- ✅ Validar fechas (no futuras para fecha_corte)
- ✅ Validar que las relaciones FK existan
- ✅ Sanitizar inputs antes de guardar

### 4. **Optimización**
- ✅ Índices en campos de búsqueda frecuente
- ✅ Caché de catálogos (PED, ODS, Programas)
- ✅ Paginación para listados
- ✅ Lazy loading de archivos adjuntos

### 5. **Seguridad**
- ✅ Protección CSRF en formularios
- ✅ Validar permisos antes de editar/eliminar
- ✅ Escapar HTML en outputs
- ✅ Logs de auditoría de acciones críticas

### 6. **Funcionalidades Adicionales Recomendadas**
- ✅ **Borradores automáticos**: Guardar progreso cada X minutos
- ✅ **Duplicar informe**: Reutilizar informes como plantilla
- ✅ **Exportar a PDF**: Generar documento oficial
- ✅ **Búsqueda avanzada**: Por tema, fecha, estado, unidad
- ✅ **Estadísticas**: Dashboard con métricas
- ✅ **Notificaciones**: Sistema de alertas y recordatorios
- ✅ **Firma digital**: Para informes aprobados

---

## 🔄 Flujo de Datos Recomendado

```
1. Usuario crea informe (estado: borrador)
   ↓
2. Usuario completa formulario y sube archivos
   ↓
3. Usuario envía informe (estado: enviado)
   ↓
4. Revisor recibe notificación
   ↓
5. Revisor revisa y comenta (estado: en_revision)
   ↓
6a. Revisor aprueba (estado: aprobado)
    ↓
    Generación de PDF oficial
    
6b. Revisor rechaza (estado: rechazado)
    ↓
    Usuario recibe notificación con observaciones
    ↓
    Usuario corrige y reenvía (vuelve a paso 3)
```

---

## 📊 Script de Migración

```sql
-- Crear tabla principal
CREATE TABLE informes_gobierno (
    -- [copiar estructura de arriba]
);

-- Crear tabla de archivos
CREATE TABLE informe_archivos (
    -- [copiar estructura de arriba]
);

-- Opcional: Crear tabla de versiones
CREATE TABLE informe_versiones (
    -- [copiar estructura de arriba]
);

-- Opcional: Crear tabla de comentarios
CREATE TABLE informe_comentarios (
    -- [copiar estructura de arriba]
);

-- Insertar algunos estados iniciales si es necesario
INSERT INTO periodos_anuales (anio, activo) VALUES (2026, 1);
```

---

## 🎯 Próximos Pasos

1. **Revisar y aprobar** la estructura propuesta
2. **Crear migración** en CodeIgniter
3. **Actualizar/Crear modelos** necesarios
4. **Implementar controlador** con métodos CRUD
5. **Ajustar vista** para conectar con backend
6. **Implementar manejo de archivos**
7. **Crear sistema de permisos**
8. **Implementar notificaciones**
9. **Testing** de funcionalidades
10. **Documentar** API y procedimientos

---

## 📞 Contacto y Soporte

¿Necesitas ayuda con la implementación? Puedo asistirte con:
- Código del controlador completo
- Lógica de manejo de archivos
- Sistema de validaciones
- Queries optimizadas
- Sistema de notificaciones

¡Estoy aquí para ayudarte! 🚀
