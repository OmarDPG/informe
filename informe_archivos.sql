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
