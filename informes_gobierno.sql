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