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
    -- observaciones TEXT NULL,
    
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

CREATE TABLE informe_comentarios (
    id_comentario INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_informe INT(11) NOT NULL,
    id_usuario INT(11) NOT NULL,

    campo_referencia VARCHAR(100) NULL, -- NULL = comentario general

    comentario TEXT NOT NULL,

    tipo ENUM('observacion', 'correccion', 'aprobacion') 
        DEFAULT 'observacion',

    estado ENUM('pendiente', 'atendido', 'descartado') 
        DEFAULT 'pendiente',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
        ON UPDATE CURRENT_TIMESTAMP,

    INDEX idx_informe (id_informe),
    INDEX idx_usuario (id_usuario),
    INDEX idx_campo (campo_referencia),

    FOREIGN KEY (id_informe) REFERENCES informes_gobierno(id_informe) 
        ON DELETE CASCADE,

    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE informe_archivos (
    id_archivo INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_informe INT(11) NOT NULL,
    tipo_archivo ENUM('mapa', 'grafico', 'cuadro', 'esquema', 'fotografia', 'resultados') NOT NULL,
    nombre_archivo VARCHAR(255) NOT NULL,
    nombre_original VARCHAR(255) NOT NULL,
    ruta_archivo VARCHAR(500) NOT NULL,
    extension VARCHAR(10) NOT NULL,
    tamanio_kb INT(11) NOT NULL,
    mime_type VARCHAR(100) NOT NULL,
    orden TINYINT(3) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado ENUM('activo','eliminado','rechazado') DEFAULT 'activo',

    
    INDEX idx_informe (id_informe),
    INDEX idx_tipo (tipo_archivo),
    
    FOREIGN KEY (id_informe) REFERENCES informes_gobierno(id_informe) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
