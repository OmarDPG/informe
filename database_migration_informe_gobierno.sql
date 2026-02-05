-- ===================================================
-- MIGRACIÓN: Sistema de Informes de Gobierno
-- Fecha: 04 de Febrero de 2026
-- Base de datos: sistemas (MySQL/MariaDB)
-- ===================================================

-- ===================================================
-- 1. TABLA PRINCIPAL: informes_gobierno
-- ===================================================

DROP TABLE IF EXISTS informe_historial_estados;
DROP TABLE IF EXISTS informe_comentarios;
DROP TABLE IF EXISTS informe_versiones;
DROP TABLE IF EXISTS informe_archivos;
DROP TABLE IF EXISTS informes_gobierno;

CREATE TABLE informes_gobierno (
    id_informe INT(11) PRIMARY KEY AUTO_INCREMENT COMMENT 'ID único del informe',
    id_usuario INT(11) NOT NULL COMMENT 'Usuario que creó el informe',
    id_unidad INT(11) NOT NULL COMMENT 'Unidad administrativa',
    id_periodo_anual INT(11) NULL COMMENT 'Periodo anual de reporte',
    id_etapa INT(11) NULL COMMENT 'Etapa del proceso',
    
    -- ===== INFORMACIÓN BÁSICA =====
    fecha_corte DATE NOT NULL COMMENT 'Fecha de corte del informe',
    id_alineacion_ped INT(11) NOT NULL COMMENT 'Alineación con el PED',
    orden_prioridad TINYINT(2) NOT NULL COMMENT 'Orden de prioridad (1-10)',
    
    -- ===== CONTENIDO PRINCIPAL =====
    tema VARCHAR(100) NOT NULL COMMENT 'Tema del informe',
    subtema VARCHAR(100) NOT NULL COMMENT 'Subtema del informe',
    descripcion_resultado VARCHAR(100) NOT NULL COMMENT 'Descripción breve del resultado',
    contexto TEXT NOT NULL COMMENT 'Contexto del informe (máx 500 caracteres)',
    accion VARCHAR(100) NOT NULL COMMENT 'Acción realizada',
    impacto TEXT NOT NULL COMMENT 'Impacto generado (máx 300 caracteres)',
    territorio VARCHAR(250) NOT NULL COMMENT 'Territorio donde se realizó',
    beneficiarios VARCHAR(150) NOT NULL COMMENT 'Beneficiarios del resultado',
    inversion VARCHAR(200) NOT NULL COMMENT 'Inversión realizada',
    desarrollo_resultado TEXT NOT NULL COMMENT 'Desarrollo detallado del resultado (máx 3500 caracteres)',
    
    -- ===== CONCLUSIONES =====
    conclusion_tematica TEXT NOT NULL COMMENT 'Conclusión de la temática (máx 1900 caracteres)',
    logros_destacados TEXT NOT NULL COMMENT 'Logros destacados (máx 1900 caracteres)',
    
    -- ===== ALINEACIONES =====
    id_alineacion_programa_derivado INT(11) NOT NULL COMMENT 'Alineación con programas derivados',
    id_alineacion_ods INT(11) NOT NULL COMMENT 'Alineación con ODS',
    
    -- ===== CONTROL DE ESTADOS =====
    estado ENUM('borrador', 'enviado', 'en_revision', 'aprobado', 'rechazado', 'archivado') 
        DEFAULT 'borrador' 
        COMMENT 'Estado actual del informe',
    observaciones TEXT NULL COMMENT 'Observaciones del revisor',
    
    -- ===== AUDITORÍA =====
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación',
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    deleted_at TIMESTAMP NULL COMMENT 'Fecha de eliminación (soft delete)',
    
    -- ===== ÍNDICES =====
    INDEX idx_usuario (id_usuario),
    INDEX idx_unidad (id_unidad),
    INDEX idx_estado (estado),
    INDEX idx_fecha_corte (fecha_corte),
    INDEX idx_periodo (id_periodo_anual),
    INDEX idx_deleted (deleted_at),
    INDEX idx_busqueda (tema, subtema),
    
    -- ===== FOREIGN KEYS =====
    CONSTRAINT fk_informe_usuario FOREIGN KEY (id_usuario) 
        REFERENCES usuarios(id_usuario) ON UPDATE CASCADE,
    CONSTRAINT fk_informe_unidad FOREIGN KEY (id_unidad) 
        REFERENCES unidades(id_unidad) ON UPDATE CASCADE,
    CONSTRAINT fk_informe_periodo FOREIGN KEY (id_periodo_anual) 
        REFERENCES periodos_anuales(id_periodo_anual) ON UPDATE CASCADE ON DELETE SET NULL,
    CONSTRAINT fk_informe_ods FOREIGN KEY (id_alineacion_ods) 
        REFERENCES ods_temas(id_tema) ON UPDATE CASCADE
        
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
COMMENT='Tabla principal de informes de gobierno';


-- ===================================================
-- 2. TABLA: informe_archivos
-- Gestión de archivos adjuntos
-- ===================================================

CREATE TABLE informe_archivos (
    id_archivo INT(11) PRIMARY KEY AUTO_INCREMENT COMMENT 'ID único del archivo',
    id_informe INT(11) NOT NULL COMMENT 'ID del informe al que pertenece',
    
    -- ===== INFORMACIÓN DEL ARCHIVO =====
    tipo_archivo ENUM('mapa', 'grafico', 'fotografia', 'audio', 'video', 'otro') 
        NOT NULL COMMENT 'Tipo de archivo adjunto',
    nombre_archivo VARCHAR(255) NOT NULL COMMENT 'Nombre del archivo en el sistema',
    nombre_original VARCHAR(255) NOT NULL COMMENT 'Nombre original del archivo',
    ruta_archivo VARCHAR(500) NOT NULL COMMENT 'Ruta completa del archivo',
    extension VARCHAR(10) NOT NULL COMMENT 'Extensión del archivo',
    tamanio_kb INT(11) NOT NULL COMMENT 'Tamaño en kilobytes',
    mime_type VARCHAR(100) NOT NULL COMMENT 'Tipo MIME del archivo',
    
    -- ===== ORGANIZACIÓN =====
    orden TINYINT(3) DEFAULT 1 COMMENT 'Orden de visualización',
    descripcion VARCHAR(255) NULL COMMENT 'Descripción opcional del archivo',
    
    -- ===== AUDITORÍA =====
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de subida',
    uploaded_by INT(11) NULL COMMENT 'Usuario que subió el archivo',
    
    -- ===== ÍNDICES =====
    INDEX idx_informe (id_informe),
    INDEX idx_tipo (tipo_archivo),
    INDEX idx_orden (orden),
    
    -- ===== FOREIGN KEYS =====
    CONSTRAINT fk_archivo_informe FOREIGN KEY (id_informe) 
        REFERENCES informes_gobierno(id_informe) 
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_archivo_usuario FOREIGN KEY (uploaded_by) 
        REFERENCES usuarios(id_usuario) 
        ON UPDATE CASCADE ON DELETE SET NULL
        
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
COMMENT='Archivos adjuntos a los informes de gobierno';


-- ===================================================
-- 3. TABLA: informe_versiones (OPCIONAL)
-- Control de versiones del informe
-- ===================================================

CREATE TABLE informe_versiones (
    id_version INT(11) PRIMARY KEY AUTO_INCREMENT COMMENT 'ID único de la versión',
    id_informe INT(11) NOT NULL COMMENT 'ID del informe',
    
    -- ===== INFORMACIÓN DE LA VERSIÓN =====
    version INT(3) NOT NULL COMMENT 'Número de versión',
    datos_json LONGTEXT NOT NULL COMMENT 'Snapshot completo en JSON',
    hash_datos VARCHAR(64) NOT NULL COMMENT 'Hash MD5 para detectar cambios',
    
    -- ===== INFORMACIÓN DEL CAMBIO =====
    modificado_por INT(11) NOT NULL COMMENT 'Usuario que realizó el cambio',
    comentario_cambio TEXT NULL COMMENT 'Descripción del cambio realizado',
    tipo_cambio ENUM('creacion', 'edicion', 'cambio_estado', 'restauracion') 
        DEFAULT 'edicion' COMMENT 'Tipo de modificación',
    
    -- ===== AUDITORÍA =====
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de la versión',
    
    -- ===== ÍNDICES =====
    INDEX idx_informe (id_informe),
    INDEX idx_version (id_informe, version),
    INDEX idx_fecha (created_at),
    
    -- ===== FOREIGN KEYS =====
    CONSTRAINT fk_version_informe FOREIGN KEY (id_informe) 
        REFERENCES informes_gobierno(id_informe) 
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_version_usuario FOREIGN KEY (modificado_por) 
        REFERENCES usuarios(id_usuario) ON UPDATE CASCADE,
        
    -- ===== UNIQUE CONSTRAINT =====
    UNIQUE KEY uk_informe_version (id_informe, version)
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
COMMENT='Control de versiones de informes';


-- ===================================================
-- 4. TABLA: informe_comentarios (OPCIONAL)
-- Sistema de comentarios y observaciones
-- ===================================================

CREATE TABLE informe_comentarios (
    id_comentario INT(11) PRIMARY KEY AUTO_INCREMENT COMMENT 'ID único del comentario',
    id_informe INT(11) NOT NULL COMMENT 'ID del informe',
    id_usuario INT(11) NOT NULL COMMENT 'Usuario que comenta',
    
    -- ===== CONTENIDO DEL COMENTARIO =====
    campo_referencia VARCHAR(100) NULL COMMENT 'Campo específico al que se refiere',
    comentario TEXT NOT NULL COMMENT 'Texto del comentario',
    
    -- ===== CLASIFICACIÓN =====
    tipo ENUM('observacion', 'correccion', 'aprobacion', 'rechazo', 'consulta') 
        DEFAULT 'observacion' COMMENT 'Tipo de comentario',
    prioridad ENUM('baja', 'media', 'alta') 
        DEFAULT 'media' COMMENT 'Prioridad del comentario',
    estado ENUM('pendiente', 'atendido', 'descartado') 
        DEFAULT 'pendiente' COMMENT 'Estado del comentario',
    
    -- ===== RESPUESTA =====
    id_comentario_padre INT(11) NULL COMMENT 'Referencia a comentario padre (hilos)',
    respuesta TEXT NULL COMMENT 'Respuesta al comentario',
    respondido_por INT(11) NULL COMMENT 'Usuario que respondió',
    respondido_en TIMESTAMP NULL COMMENT 'Fecha de respuesta',
    
    -- ===== AUDITORÍA =====
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación',
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de actualización',
    
    -- ===== ÍNDICES =====
    INDEX idx_informe (id_informe),
    INDEX idx_usuario (id_usuario),
    INDEX idx_estado (estado),
    INDEX idx_tipo (tipo),
    INDEX idx_padre (id_comentario_padre),
    
    -- ===== FOREIGN KEYS =====
    CONSTRAINT fk_comentario_informe FOREIGN KEY (id_informe) 
        REFERENCES informes_gobierno(id_informe) 
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_comentario_usuario FOREIGN KEY (id_usuario) 
        REFERENCES usuarios(id_usuario) ON UPDATE CASCADE,
    CONSTRAINT fk_comentario_padre FOREIGN KEY (id_comentario_padre) 
        REFERENCES informe_comentarios(id_comentario) 
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_comentario_respondido FOREIGN KEY (respondido_por) 
        REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE SET NULL
        
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
COMMENT='Comentarios y observaciones de informes';


-- ===================================================
-- 5. TABLA: informe_historial_estados (OPCIONAL)
-- Auditoría de cambios de estado
-- ===================================================

CREATE TABLE informe_historial_estados (
    id_historial INT(11) PRIMARY KEY AUTO_INCREMENT COMMENT 'ID único del registro',
    id_informe INT(11) NOT NULL COMMENT 'ID del informe',
    
    -- ===== CAMBIO DE ESTADO =====
    estado_anterior VARCHAR(50) NULL COMMENT 'Estado previo',
    estado_nuevo VARCHAR(50) NOT NULL COMMENT 'Nuevo estado',
    
    -- ===== INFORMACIÓN ADICIONAL =====
    id_usuario INT(11) NOT NULL COMMENT 'Usuario que realizó el cambio',
    observacion TEXT NULL COMMENT 'Motivo u observación del cambio',
    ip_address VARCHAR(45) NULL COMMENT 'Dirección IP del usuario',
    user_agent VARCHAR(255) NULL COMMENT 'Navegador/dispositivo utilizado',
    
    -- ===== AUDITORÍA =====
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha del cambio',
    
    -- ===== ÍNDICES =====
    INDEX idx_informe (id_informe),
    INDEX idx_usuario (id_usuario),
    INDEX idx_estados (estado_anterior, estado_nuevo),
    INDEX idx_fecha (created_at),
    
    -- ===== FOREIGN KEYS =====
    CONSTRAINT fk_historial_informe FOREIGN KEY (id_informe) 
        REFERENCES informes_gobierno(id_informe) 
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_historial_usuario FOREIGN KEY (id_usuario) 
        REFERENCES usuarios(id_usuario) ON UPDATE CASCADE
        
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
COMMENT='Historial de cambios de estado de informes';


-- ===================================================
-- 6. VISTAS ÚTILES
-- ===================================================

-- Vista: Resumen de informes
CREATE OR REPLACE VIEW v_informes_resumen AS
SELECT 
    i.id_informe,
    i.tema,
    i.subtema,
    i.fecha_corte,
    i.estado,
    i.created_at,
    u.nombre_s,
    u.apellido_p,
    uni.nombre_unidad,
    (SELECT COUNT(*) FROM informe_archivos WHERE id_informe = i.id_informe) AS total_archivos,
    (SELECT COUNT(*) FROM informe_comentarios WHERE id_informe = i.id_informe AND estado = 'pendiente') AS comentarios_pendientes
FROM informes_gobierno i
LEFT JOIN usuarios u ON i.id_usuario = u.id_usuario
LEFT JOIN unidades uni ON i.id_unidad = uni.id_unidad
WHERE i.deleted_at IS NULL;

-- Vista: Estadísticas por unidad
CREATE OR REPLACE VIEW v_informes_estadisticas AS
SELECT 
    uni.id_unidad,
    uni.nombre_unidad,
    COUNT(DISTINCT i.id_informe) AS total_informes,
    SUM(CASE WHEN i.estado = 'borrador' THEN 1 ELSE 0 END) AS borradores,
    SUM(CASE WHEN i.estado = 'enviado' THEN 1 ELSE 0 END) AS enviados,
    SUM(CASE WHEN i.estado = 'aprobado' THEN 1 ELSE 0 END) AS aprobados,
    SUM(CASE WHEN i.estado = 'rechazado' THEN 1 ELSE 0 END) AS rechazados
FROM unidades uni
LEFT JOIN informes_gobierno i ON uni.id_unidad = i.id_unidad AND i.deleted_at IS NULL
GROUP BY uni.id_unidad, uni.nombre_unidad;


-- ===================================================
-- 7. PROCEDIMIENTOS ALMACENADOS
-- ===================================================

DELIMITER //

-- Procedimiento: Cambiar estado de informe
CREATE PROCEDURE sp_cambiar_estado_informe(
    IN p_id_informe INT,
    IN p_nuevo_estado VARCHAR(50),
    IN p_id_usuario INT,
    IN p_observacion TEXT,
    IN p_ip_address VARCHAR(45)
)
BEGIN
    DECLARE v_estado_actual VARCHAR(50);
    
    -- Obtener estado actual
    SELECT estado INTO v_estado_actual 
    FROM informes_gobierno 
    WHERE id_informe = p_id_informe;
    
    -- Actualizar el informe
    UPDATE informes_gobierno 
    SET 
        estado = p_nuevo_estado,
        observaciones = COALESCE(p_observacion, observaciones)
    WHERE id_informe = p_id_informe;
    
    -- Registrar en el historial
    INSERT INTO informe_historial_estados 
        (id_informe, estado_anterior, estado_nuevo, id_usuario, observacion, ip_address)
    VALUES 
        (p_id_informe, v_estado_actual, p_nuevo_estado, p_id_usuario, p_observacion, p_ip_address);
        
    SELECT 'OK' AS resultado, 'Estado actualizado correctamente' AS mensaje;
END //

-- Procedimiento: Obtener informes con paginación
CREATE PROCEDURE sp_listar_informes(
    IN p_id_usuario INT,
    IN p_id_unidad INT,
    IN p_estado VARCHAR(50),
    IN p_limite INT,
    IN p_offset INT
)
BEGIN
    SELECT 
        i.*,
        CONCAT(u.nombre_s, ' ', u.apellido_p) AS nombre_usuario,
        uni.nombre_unidad,
        (SELECT COUNT(*) FROM informe_archivos WHERE id_informe = i.id_informe) AS total_archivos
    FROM informes_gobierno i
    LEFT JOIN usuarios u ON i.id_usuario = u.id_usuario
    LEFT JOIN unidades uni ON i.id_unidad = uni.id_unidad
    WHERE i.deleted_at IS NULL
        AND (p_id_usuario IS NULL OR i.id_usuario = p_id_usuario)
        AND (p_id_unidad IS NULL OR i.id_unidad = p_id_unidad)
        AND (p_estado IS NULL OR i.estado = p_estado)
    ORDER BY i.created_at DESC
    LIMIT p_limite OFFSET p_offset;
END //

DELIMITER ;


-- ===================================================
-- 8. TRIGGERS
-- ===================================================

DELIMITER //

-- Trigger: Crear versión inicial al crear informe
CREATE TRIGGER trg_informe_crear_version
AFTER INSERT ON informes_gobierno
FOR EACH ROW
BEGIN
    INSERT INTO informe_versiones (id_informe, version, datos_json, modificado_por, tipo_cambio)
    VALUES (NEW.id_informe, 1, JSON_OBJECT(
        'tema', NEW.tema,
        'subtema', NEW.subtema,
        'estado', NEW.estado
    ), NEW.id_usuario, 'creacion');
END //

-- Trigger: Registrar cambio de estado automáticamente
CREATE TRIGGER trg_informe_cambio_estado
AFTER UPDATE ON informes_gobierno
FOR EACH ROW
BEGIN
    IF OLD.estado != NEW.estado THEN
        INSERT INTO informe_historial_estados 
            (id_informe, estado_anterior, estado_nuevo, id_usuario)
        VALUES 
            (NEW.id_informe, OLD.estado, NEW.estado, NEW.id_usuario);
    END IF;
END //

DELIMITER ;


-- ===================================================
-- 9. DATOS INICIALES (OPCIONAL)
-- ===================================================

-- Insertar periodo actual si no existe
INSERT IGNORE INTO periodos_anuales (anio, activo) VALUES (2026, 1);


-- ===================================================
-- 10. PERMISOS Y COMENTARIOS FINALES
-- ===================================================

-- Comentarios adicionales en tablas
ALTER TABLE informes_gobierno 
    COMMENT = 'Sistema de informes de gobierno - Tabla principal v1.0';

-- Optimizar tablas
OPTIMIZE TABLE informes_gobierno;
OPTIMIZE TABLE informe_archivos;

-- Fin de la migración
SELECT 'MIGRACIÓN COMPLETADA CON ÉXITO' AS resultado;
