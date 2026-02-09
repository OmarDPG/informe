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
