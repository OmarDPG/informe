-- =========================================
-- MIGRACIÓN COMPLETA DE BASE DE DATOS
-- Incluye: ODS, Programas Sectoriales, Sistemas PED y Sistemas de Informes
-- =========================================

START TRANSACTION;

-- Deshabilitar verificaciones de claves foráneas temporalmente
SET FOREIGN_KEY_CHECKS = 0;

-- =========================================
-- ELIMINAR TABLAS EXISTENTES (en orden inverso de dependencias)
-- =========================================

-- Tablas de Sistemas de Informes (Sección 4)
DROP TABLE IF EXISTS `informe_comentarios`;
DROP TABLE IF EXISTS `informe_archivos`;
DROP TABLE IF EXISTS `informes_gobierno`;
DROP TABLE IF EXISTS `glosa_comentarios`;
DROP TABLE IF EXISTS `glosa_archivos`;
DROP TABLE IF EXISTS `glosas_gobierno`;
DROP TABLE IF EXISTS `glosa_gestion`;
DROP TABLE IF EXISTS `etapas`;
DROP TABLE IF EXISTS `periodos_anuales`;

-- Tablas PED (Sección 3)
DROP TABLE IF EXISTS `lineas_accion`;
DROP TABLE IF EXISTS `estrategias`;
DROP TABLE IF EXISTS `objetivos`;
DROP TABLE IF EXISTS `tematicas`;
DROP TABLE IF EXISTS `ejes`;

-- Tablas Programas Sectoriales (Sección 2)
DROP TABLE IF EXISTS `lineas_accion_informe`;
DROP TABLE IF EXISTS `estrategias_informe`;
DROP TABLE IF EXISTS `objetivos_informe`;
DROP TABLE IF EXISTS `tematicas_informe`;
DROP TABLE IF EXISTS `ejes_informe`;
DROP TABLE IF EXISTS `programas_sectoriales_informe`;

-- Tablas ODS (Sección 1)
DROP TABLE IF EXISTS `ods_temas`;
DROP TABLE IF EXISTS `ods_metas`;
DROP TABLE IF EXISTS `ods_objetivos`;

-- =========================================
-- SECCIÓN 1: TABLA ODS (Objetivos de Desarrollo Sostenible)
-- =========================================

-- Tablas ODS
CREATE TABLE ods_objetivos (
    id_objetivo INTEGER PRIMARY KEY,
    nombre VARCHAR(255),
    descripcion TEXT
);

CREATE TABLE ods_metas (
    id_meta INTEGER PRIMARY KEY,
    id_objetivo INTEGER,
    codigo_meta VARCHAR(20),
    FOREIGN KEY (id_objetivo) REFERENCES ods_objetivos(id_objetivo)
);

CREATE TABLE ods_temas (
    id_tema INTEGER PRIMARY KEY,
    id_meta INTEGER,
    tema VARCHAR(255),
    FOREIGN KEY (id_meta) REFERENCES ods_metas(id_meta)
);

-- Datos ODS Objetivos
INSERT INTO ods_objetivos (id_objetivo, nombre, descripcion) VALUES
(1, 'Fin de la Pobreza', 'Poner fin a la pobreza en todas sus formas en todo el mundo'),
(2, 'Hambre Cero', 'Poner fin al hambre'),
(3, 'Salud y Bienestar', 'Garantizar una vida sana y promover el bienestar'),
(4, 'Educación de Calidad', 'Garantizar una educación inclusiva y equitativa'),
(5, 'Igualdad de Género', 'Lograr la igualdad de género y empoderar a todas las mujeres'),
(6, 'Agua Limpia y Saneamiento', 'Garantizar la disponibilidad de agua y su gestión sostenible'),
(7, 'Energía Asequible y No Contaminante', 'Garantizar el acceso a una energía asequible, fiable y moderna'),
(8, 'Trabajo Decente y Crecimiento Económico', 'Promover el crecimiento económico sostenido e inclusivo'),
(9, 'Industria, Innovación e Infraestructura', 'Construir infraestructuras resilientes y fomentar la innovación'),
(10, 'Reducción de las Desigualdades', 'Reducir la desigualdad en y entre los países'),
(11, 'Ciudades y Comunidades Sostenibles', 'Lograr que las ciudades sean inclusivas, seguras y resilientes'),
(12, 'Producción y Consumo Responsables', 'Garantizar modalidades de consumo y producción sostenibles'),
(13, 'Acción por el Clima', 'Adoptar medidas urgentes para combatir el cambio climático'),
(15, 'Vida de Ecosistemas Terrestres', 'Gestionar sosteniblemente los bosques y luchar contra la desertificación'),
(16, 'Paz, Justicia e Instituciones Sólidas', 'Promover sociedades justas, pacíficas e inclusivas'),
(17, 'Alianzas para lograr los Objetivos', 'Revitalizar la Alianza Mundial para el Desarrollo Sostenible');

-- ODS Metas - Objetivo 1
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(101, 1, '1.1'), (102, 1, '1.2'), (103, 1, '1.3'), (104, 1, '1.4'), (105, 1, '1.5'), (106, 1, '1.a'), (107, 1, '1.b');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(1, 101, 'Pobreza'), (2, 101, 'Pobreza extrema'), (3, 101, 'Nivel de ingreso'), (4, 101, 'Línea de bienestar mínimo'),
(5, 102, 'Pobreza'), (6, 102, 'Pobreza multidimensional'),(7, 102, 'Reducción pobreza'),
(8, 103, 'Sistemas y medidas para la protección social'), (9, 103, 'Seguridad social'),
(10, 104, 'Garantización de derechos a recursos económicos'), (11, 104, 'Ingreso familiar'), (12, 104, 'Servicios básicos'), (13, 104, 'Propiedad y control de la tierra'), (14, 104, 'Propiedad y control de la tierra'),(15, 104, 'Recursos naturales'), (16, 104, 'Acceso tecnológico (TICs)'), (17, 104, 'Servicios financieros y de crédito'),
(18, 105, 'Resiliencia'), (19, 105, 'Vulnerabilidad social, climática y desastres'),
(20, 106, 'Cooperación para el desarrollo'), (21, 106, 'Movilización de recursos'), (22, 106, 'Combate a la pobreza'), (23, 106, 'Programas y políticas para el fin de la pobreza'), (24, 106, 'Movilización y cooperación internacional'),
(25, 107, 'Marcos normativos: nacional, regional e internacional'), (26, 107, 'Estrategia de desarrollo con perspectiva de género'), (27, 107, 'Erradicación de la pobreza'), (28, 107, 'Pobreza');

-- ODS Metas - Objetivo 2
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(201, 2, '2.1'), (202, 2, '2.2'), (203, 2, '2.3'), (204, 2, '2.4'), (205, 2, '2.5'), (206, 2, '2.a'), (207, 2, '2.b'), (208, 2, '2.c');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(29, 201, 'Fin al hambre'), (30, 201, 'Acceso a alimentación saludable y nutritiva y suficiente'), (31, 201, 'Carencia alimentaria'),
(32, 202, 'Fin a la mala alimentación'), (33, 202, 'Atender nutrición'),
(34, 203, 'Incremento productividad agrícola'), (35, 203, 'Incremento de ingresos de productores alimentarios'), (36, 203, 'Respeto al medio ambiente y biodiversidad de la región'), (37, 203, 'Servicios financieros para el campo'),
(38, 204, 'Sostenibilidad de sistemas de producción, alimentaria'),(39, 204, 'Campo'), (40, 204, 'Prácticas agroalimentarias resilientes'), (41, 204, 'Aumento de producción y productividad alimentaria'), (42, 204, 'Mantenimiento de ecosistemas'), (43, 204, 'Adaptación al cambio climático'), (44, 204, 'Mejoramiento de la calidad del suelo y la tierra'),
(45, 205, 'Mantenimiento de diversidad genética: semillas, plantas y animales'), (46, 205, 'Buena gestión y diversificación de bancos genéticos nacionales, regionales e internacionales'), (47, 205, 'Producción agroalimentaria'), (48, 205, 'Semillas'),
(49, 206, 'Aumento de inversiones'), (50, 206, 'Infraestructura rural, investigación agrícola, desarrollo tecnológico y banco genes'), (51, 206, 'Tecnificación agraria'), (52, 206, 'Mejoramiento de capacidad de producción agrícola'),
(53, 207, 'Mercados agropecuarios'), (54, 207, 'Prevenir restricciones comerciales'),
(55, 208, 'Funcionamiento de mercados de productos básicos alimentarios'), (56, 208, 'Inestabilidad de precios');

-- ODS Metas - Objetivo 3
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(301, 3, '3.1'), (302, 3, '3.2'), (303, 3, '3.3'), (304, 3, '3.4'), (305, 3, '3.5'), (306, 3, '3.6'), (307, 3, '3.7'), (308, 3, '3.8'), (309, 3, '3.9'), (310, 3, '3.a'), (311, 3, '3.b'), (312, 3, '3.c'), (313, 3, '3.d');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(57, 301, 'Reducción de mortalidad materna'), (58, 301, 'Partos atendidos'),
(59, 302, 'Fin a la mortalidad infantil y neonatal (Perinatal)'),
(60, 303, 'SIDA, tuberculosis, malaria, enfermedades tropicales'), (61, 303, 'Enfermedades transmitidas por el agua'), (62, 303, 'Enfermedades transmisibles'),
(63, 304, 'Mortalidad prematura por enfermedades no transmisibles'), (64, 304, 'Enfermedades crónicas y suicidio'), (65, 304, 'Salud mental'),(66, 304, 'Bienestar'),
(67, 305, 'Prevención'), (68, 305, 'Tratamiento'), (69, 305, 'Rehabilitación'), (70, 305, 'Estupefacientes'), (71, 305, 'Alcohol'),
(72, 306, 'Accidentes de tráfico (Vehuiculares)'), (73, 306, 'Mortalidad accidentes de tráfico'),
(74, 307, 'Acceso universal a servicios de salud sexual y reproductiva'), (75, 307, 'Planificación familiar'), (76, 307, 'Educación sexual'),
(77, 308, 'Cobertura sanitaria universal'), (78, 308, 'Protección contra riesgos sanitarios'), (79, 308, 'Acceso a servicios de salud de calidad'), (80, 308, 'Aceeso a medicamentos'), (81, 308, 'Vacunas'),
(82, 309, 'Mortalidad por quimicos y contaminación del aire, agua y suelo'),
(83, 310, 'Control de tabaco'), (84, 310, 'Prevención del consumo del tabaco'),
(85, 311, 'Apoyo a la investigación en salud'), (86, 311, 'Desarrollo de vacunas y medicamentos'), (87, 311, 'Acceso a vacunas y medicamentos'),
(88, 312, 'Financiación de la salud'), (89, 312, 'Contratación, capacitación y retención de personal medico'),
(90, 313, 'Reducción y gestión de riesgos sanitarios');

-- ODS Metas - Objetivo 4
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(401, 4, '4.1'), (402, 4, '4.2'), (403, 4, '4.3'), (404, 4, '4.4'), (405, 4, '4.5'), (406, 4, '4.6'), (407, 4, '4.7'), (408, 4, '4.a'), (409, 4, '4.b'), (410, 4, '4.c');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(91, 401, 'Asegurar termino de primaria y secundaria'), (92, 401, 'Educación gratuita, equitativa y de calidad'), (93, 401, 'Efectividad del aprendizaje'),
(94, 402, 'Acceso a servicios de atención y desarrollo') , (95, 402, 'Educación preescolar de calidad'), (96, 402, 'Aprendizaje infantil'),
(97, 403, 'Acceso igualatorio a la educación'), (98, 403, 'Educación media superior y superior'), (99, 403, 'Educación para adultos'),
(100, 404, 'Formación de profesionistas'), (101, 404, 'Trabajo decente'), (102, 404, 'Acceso al empleo, trabajo decente y emprendimiento'),
(103, 405, 'Igualdad de género en la educación'), (104, 405, 'Acceso educativo igualitario: personas vulnerables, personas con discapacidad y pueblos indígenas'),
(105, 406, 'Alfabetización en jovenes y adultos'), (106, 406, 'Conocimiento en matemáticas'), (107, 406, 'Aritmética'),
(108, 407, 'Conocimientos para la promoción del: desarrollo sostenible, derechos humanos, igualdad de género, cultura de paz y no violencia, diversidad cultural'),
(109, 408, 'Contruir y adecuar instalaciones educativas para las poblaciones vulnerables'), (110, 408, 'Ambiente seguro, inclusivo y eficaz'), (111, 408, 'Escuelas con accesibilidad'),
(112, 409, 'Incremento de becas educativas en el nivel medio superior y superior.'),
(113, 410, 'Incremento de oferta de docentes calificados'), (114, 410, 'Cursos, capacitaciones, certificacionesy talleres'), (115, 410, 'Formación de docentes');

-- ODS Metas - Objetivo 5
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(501, 5, '5.1'), (502, 5, '5.2'), (503, 5, '5.3'), (504, 5, '5.4'), (505, 5, '5.5'), (506, 5, '5.6'), (507, 5, '5.a'), (508, 5, '5.b'), (509, 5, '5.c');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(116, 501, 'Fin a la discriminación contra mujeres y niñas'),
(117, 502, 'Eliminar violencia contra mujeres y niñas (trata, explotación sexual y explotación)'),
(118, 503, 'Erradicar matrimonio infantil, precoz y forzado'), (119, 503, 'Eliminar mutilación genital femenina'),
(120, 504, 'Reconocer y valorar el trabajo domestico no remunerado'), (121, 504, 'Prestación de servicios publico e infraestructura'),(122, 504, 'Políticas de protección social'), (123, 504, 'Promoción de la responsabilidad compartida del hogar'),
(124, 505, 'Igualdad de oportunidades'), (125, 505, 'Actividades con perspectiva de género'), (126, 505, 'Participación de las mujeres'),
(127, 506, 'Garantizar acceso a salud sexual y reproductiva'), (128, 506, 'Derechos reproductivos'),
(129, 507, 'Igualdad económica'), (130, 507, 'Acceso a la propiedad y control de la tierra y otros bienes'), (131, 507, 'Creditos'), (132, 507, 'Herencias'), (133, 507, 'Recursos naturales de acuerdo con las leyes nacionales'),
(134, 508, 'Empoderamiento de la mujer'),
(135, 509, 'Promoción de la igualdad de género y el empoderamiento femenino');

-- ODS Metas - Objetivo 6
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(601, 6, '6.1'), (602, 6, '6.2'), (603, 6, '6.3'), (604, 6, '6.4'), (605, 6, '6.5'), (606, 6, '6.6'), (607, 6, '6.a'), (608, 6, '6.b');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(136, 601, 'Precio asequible para todos'), (137, 601, 'Servicios básicos'),
(138, 602, 'Acceso a servicios de saneamiento e higiene adecuados'), (139, 602, 'Drenaje'),
(140, 603, 'Mejora la calidad del agua'),(141, 603, 'Reducción de la contaminación del agua'), (142, 603, 'Reutilización del agua'), (143, 603, 'Aumentar el porcentaje de aguas residuales tratadas'),
(144, 604, 'Uso eficiente de recursos hídricos'), (145, 604, 'Sostenibilidad de agua dulce frente a la escasez'), (146, 604, 'Reducir la falta de agua'), (147, 604, 'Estrés hídrico'),
(148, 605, 'Gestión de recursos hídricos'),
(149, 606, 'Proteger y restablecer ecosistemas relacionados con el agua: ríos, lagos, mantos acuíferos, bosques, montañas y humedales'),
(150, 607, 'Ampliar cooperación internacional para actividades y proyectos referentes al agua y el saneamiento'), (151, 607, 'Captación de agua'), (152, 607, 'Tratamiento de aguas residuales'), (153, 607, 'Reciclado y reutilización.'),
(154, 608, 'Apoyo y esfuerzo en la participación de gestión del agua y saneamiento');

-- ODS Metas - Objetivo 7
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(701, 7, '7.1'), (702, 7, '7.2'), (703, 7, '7.3'), (704, 7, '7.a'), (705, 7, '7.b');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(155, 701, 'Acceso universal a servicios energéticos asequibles, confiables y modernos'), (156, 701, 'Electricidad, gasolina y gas natural'), (157, 701, 'Combustibles'), (158, 701, 'Energía limpia'),
(159, 702, 'Aumento de energias renovables'), (160, 702, 'Fuentes energéticas'),
(161, 703, 'Mejoramiento de la eficiencia energética'),
(162, 704, 'Cooperación internacional para el acceso a al investigación y tecnología en energía limpia'), (163, 704, 'Eficiencia energética'), (164, 704, 'Inversión en la infraestructura energética y tecnología de energía limpia'),
(165, 705, 'Ampliación de infraestructura energética'), (166, 705, 'Mejoramiento de tecnología'), (167, 705, 'Serviciios energéticos modenos y sostenibles'), (168, 705, 'Inversión en eficiencia energética');

-- ODS Metas - Objetivo 8
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(801, 8, '8.1'), (802, 8, '8.2'), (803, 8, '8.3'), (804, 8, '8.4'), (805, 8, '8.5'), (806, 8, '8.6'), (807, 8, '8.7'), (808, 8, '8.8'), (809, 8, '8.9'), (810, 8, '8.10'), (811, 8, '8.a'), (812, 8, '8.b');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(169, 801, 'Mantener el crecimiento económico y el Producto Interno Bruto (PIB)'), (170, 801, 'Valor agregado censal bruto'),
(171, 802, 'Elevar niveles de productividad económica'), (172, 802, 'Diversificación, modernización e innovación tecnológica'), (173, 802, 'Uso de mano de obra'),
(174, 803, 'Trabajo decente y formal'), (175, 803, 'Emprendimiento, creatividad e innovación'), (176, 803, 'Crecimiento de las microempresas, pequeñas y medianas empresas (MIPYMES)'),(177, 803, 'Acceso a servicios financieros'),
(178, 804, 'Mejorar el consumo y producción sostenibles sin afectar el medio ambiente'),
(179, 805, 'Lograr empleo pleno y productivo'), (180, 805, 'Trabajos decentes incluyendo a jovenes y discapacitados con perspectiva de género'), (181, 805, 'Igualdad salarial'),
(182, 806, 'Reducción de proporcion de jóvenes sin empleo, educación o formación'),
(183, 807, 'Erradicar trabajo forzoso'), (184, 807, 'Fin al trabajo infantil'), (185, 807, 'Fin a la esclavitud'),
(186, 808, 'Protección de los derechos laborales'), (187, 808, 'Promoción de entorno de seguro y protegido de trabajo'), (188, 808, 'Trabajadores migrantes y personas con empleos precarios'),
(189, 809, 'Promoción de turismo sostenible'), (190, 809, 'Empleos de indole turística'), (191, 809, 'Promoción de cultura y productos locales'),
(192, 810, 'Fortalecer capacidad de instituciones financieras'), (193, 810, 'Ampliar acceso a servicios bancarios y financieros'),
(194, 811, 'Aumento a la iniciativa de ayuda para el comercio a países en desarrollo'),
(195, 812, 'Desarrollo de estrategias para empleo juvenil');

-- ODS Metas - Objetivo 9
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(901, 9, '9.1'), (902, 9, '9.2'), (903, 9, '9.3'), (904, 9, '9.4'), (905, 9, '9.5'), (906, 9, '9.a'), (907, 9, '9.b'), (908, 9, '9.c');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(196, 901, 'Desarrollo de infraestructura fiable, sostenible y resiliente y de calidad'), (197, 901, 'Apoyo a desarrollo económico'), (198, 901, 'Carreteras'),
(199, 902, 'Promoción de una industria sostenible y sostenible'), (200, 902, 'Aumento del empleo y del PIB'), (201, 902, 'Crecimiento económico'),
(202, 903, 'Aumento del acceso de PyMEs a servicios financieros'), (203, 903, 'Prestamos y creditos'), (204, 903, 'Valor añadido'), (205, 903, 'Mercados'),
(206, 904, 'Modenización de la infraestructura'), (207, 904, 'Industria sostenible'), (208, 904, 'Uso de recursos de manera eficaz'), (209, 904, 'Promoción de tecnología ambiental'),
(210, 905, 'Aumento de investigación científica'), (211, 905, 'Mejoramiento de la capacidad tecnológica industrial'), (212, 905, 'Fomento de la innovación'),
(213, 906, 'Desarrollo de infraestructura sostenible y resiliente'), (214, 906, 'Apoyo financiero al desarrollo'), (215, 906, 'Apoyo tecnológico en infraestructura'), (216, 906, 'Apoyo tenico en infraestructura'),
(217, 907, 'Desarrollo de tecnología nacional, investigación e innovación'), (218, 907, 'Aportación tecnológica'),
(219, 908, 'Aumento del acceso a las TICs'), (220, 908, 'Acceso universal a Internet');

-- ODS Metas - Objetivo 10
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(1001, 10, '10.1'), (1002, 10, '10.2'), (1003, 10, '10.3'), (1004, 10, '10.4'), (1005, 10, '10.5'), (1006, 10, '10.6'), (1007, 10, '10.7'), (1008, 10, '10.a'), (1009, 10, '10.b'), (1010, 10, '10.c');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(221, 1001, 'Incremento del ingreso de población en pobreza'), (222, 1001, 'Reducción de la pobreza por ingreso'),
(223, 1002, 'Inclusión social, económica y política sin discriminación'),
(224, 1003, 'Igualdad de oportunidades'), (225, 1003, 'Reducir la desigualdad de resultados'), (226, 1003, 'Eliminación de politicas y prácticas discriminatorias'),
(227, 1004, 'Fiscales'), (228, 1004, 'Sociales'), (229, 1004, 'Salariales'), (230, 1004, 'Seguridad e igualdad social'),
(231, 1005, 'Mejora de reglamentación de instituciones financieras'), (232, 1005, 'Vigilancia institucional y de mercados financieros'),
(233, 1006, 'Asegurar representación y voz de los países en desarrollo'), (234, 1006, 'Desiciones economicas y financieras eficaces, fiables, responsables y legítimas'),
(235, 1007, 'Migración y movilidad de manera ordenada, segura, regulada y responsable'),
(236, 1008, 'Trato especial países en desarrollo'), (237, 1008, 'Importaciones'), (238, 1008, 'Exportaciones'),
(239, 1009, 'Asistencia oficial para desarrollo'), (240, 1010, 'Fondos internaciones'), (241, 1010, 'Inversión extranjera directa IED'),
(242, 1010, 'Reducir costos de transacción de remesas'), (243, 1010, 'Migrantes');

-- ODS Metas - Objetivo 11
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(1101, 11, '11.1'), (1102, 11, '11.2'), (1103, 11, '11.3'), (1104, 11, '11.4'), (1105, 11, '11.5'), (1106, 11, '11.6'), (1107, 11, '11.7'), (1108, 11, '11.a'), (1109, 11, '11.b'), (1110, 11, '11.c');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(244, 1101, 'Acceso a viviendas'), (245, 1101, 'Acceso a servicios básicos adecuados, seguros y asequibles'), (246, 1101, 'Seguridad pública'), (247, 1101, 'Reducir zonas marginadas'),
(248, 1102, 'Seguro, asequible, accesible y sostenible'), (249, 1102, 'Accesible en especial a grupos vulnerables'), (250, 1102, 'Seguridad vial'),
(251, 1103, 'Urbanización inclusiva y sostenible'), (252, 1103, 'Planeación urbana'), (253, 1103, 'Asentamientos urbanos'),
(254, 1104, 'Biodiversiadad'), (255, 1104, 'Reservas naturalmnente protegidas'), (256, 1104, 'Patrimonio cultural'), (257, 1104, 'Patrimonio natural'),
(258, 1105, 'Reducir mortalidad por desastres naturales'), (259, 1105, 'Efectos de desastres naturales'), (260, 1105, 'Gestión de desastres naturales'), (261, 1105, 'Prevención de riesgos'),
(262, 1106, 'Reducir impacto ambiental negativo en ciudades'), (263, 1106, 'Residuos sólidos urbanos'), (264, 1106, 'Calidad del aire'), (265, 1106, 'Gestión de la contaminación y residuos'),
(266, 1107, 'Acceso a espacios públicos y zonas verdes'), (267, 1107, 'Inclusión a grupos vulnerables'), (268, 1107, 'Espacios públicos seguros'), (269, 1107, 'Parques'),
(270, 1108, 'Apoyar vínculos económicos, sociales y ambientales'), (271, 1108, 'Vinculación rural-urbana'), (272, 1108, 'Desarrollo y planificación ambiental'), (273, 1108, 'Desarrollo urbano y rural'),
(274, 1109, 'Ciudades inclusivas'), (275, 1109, 'Uso eficiente de los recursos'), (276, 1109, 'Disminución y adaptación al cambio climático'), (277, 1109, 'Resiliencia ante desastres'), (278, 1109, 'Gestión de riesgos'),
(279, 1110, 'Asistencia financiera internacional'), (280, 1110, 'Asistencia técnica'), (281, 1110, 'Materiales locales'), (282, 1110, 'Construcción sostenible y resiliente');

-- ODS Metas - Objetivo 12
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(1201, 12, '12.1'), (1202, 12, '12.2'), (1203, 12, '12.3'), (1204, 12, '12.4'), (1205, 12, '12.5'), (1206, 12, '12.6'), (1207, 12, '12.7'), (1208, 12, '12.8'), (1209, 12, '12.a'), (1210, 12, '12.b'), (1211, 12, '12.c');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(283, 1201, 'Consumo sostenible'), (284, 1201, 'Producción sostenible'), (285, 1201, 'Cooperación internacional'),
(286, 1202, 'Uso eficiente de recursos naturales'), (287, 1202, 'Gestión sostenible'),
(288, 1203, 'Reducir desperdicio y perdida de alimentos'), (289, 1203, 'Industria de alimentos'), (290, 1203, 'Distriibución y producción'), (291, 1203, 'Pérdidas agrícolas'),
(292, 1204, 'Gestión de los productos químicos'), (293, 1204, 'Contaminación de la Atmósfera, agua y suelo'), (294, 1204, 'Efectos de la contaminación en la salud'), (295, 1204, 'Desechos'),
(296, 1205, 'Desechos'), (297, 1205, 'Economía circular'), (298, 1205, 'Reducir la generación de desechos'), (299, 1205, 'Reciclaje'), (300, 1205, 'Reutilización'),
(301, 1206, 'Prácticas sostenibles'), (302, 1206, 'Empresas sostenibles'),
(303, 1207, 'Adquisición pública sostenible'), (304, 1207, 'Contratos sostenibles'),
(305, 1208, 'Educación sostenible'), (306, 1208, 'Naturaleza'), (307, 1208, 'Estilo de vida sostenible'),
(308, 1209, 'Desarrollo científico'), (309, 1209, 'Desarrollo tecnológico'), (310, 1209, 'Producción'), (311, 1209, 'Consumo'),
(312, 1210, 'Seguimiento'), (313, 1210, 'Evaluación'), (314, 1210, 'Producción local'), (315, 1210, 'Cultivo sostenible'), (316, 1210, 'Generación de empleos'),
(317, 1211, 'Racionalizar consumo de combustibles fósiles'), (318, 1211, 'Modificar impuestos'), (319, 1211, 'Eliminación de subsidios'), (320, 1211, 'Impacto ambiental'), (321, 1211, 'Protección de grupos vulnerables');

-- ODS Metas - Objetivo 13
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(1301, 13, '13.1'), (1302, 13, '13.2'), (1303, 13, '13.3'), (1304, 13, '13.a'), (1305, 13, '13.b');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(322, 1301, 'Adaptación al riesgo por clima'), (323, 1301, 'Resiliencia ante desastres naturales'),
(324, 1302, 'Medidas, estrategias y planes para cambio climático'),
(325, 1303, 'Educación y sensibilización medioambiental'), (326, 1303, 'Mitigación y adaptación del cambio climático'), (327, 1303, 'Alerta temprana del cambio climático'),
(328, 1304, 'Mitigación del cambio climático'), (329, 1304, 'Transparencia de su aplicación'), (330, 1304, 'Fondo verde para el clima'),
(331, 1305, 'Planificación y gestión efiicaz ante el cambio climático'), (332, 1305, 'Jovenes, niños, niñas, mujeres y cambio climático'), (333, 1305, 'Comunidades marginalizadas y el cambio climático');

-- ODS Metas - Objetivo 15
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(1501, 15, '15.1'), (1502, 15, '15.2'), (1503, 15, '15.3'), (1504, 15, '15.4'), (1505, 15, '15.5'), (1506, 15, '15.6'), (1507, 15, '15.7'), (1508, 15, '15.8'), (1509, 15, '15.9'), (1510, 15, '15.a'), (1511, 15, '15.b'), (1512, 15, '15.c');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(334, 1501, 'Uso sostenible de los ecosistemas terrestres'), (335, 1501, 'Bosques y montañas'), (336, 1501, 'Conservación del medio ambiente'), (337, 1501, 'Superficie forestal'), (338, 1501, 'Biodiversidad terrestre'),
(339, 1502, 'Gestión forestal'), (340, 1502, 'Fin a la deforestación'), (341, 1502, 'Sostenibilidad de bosques'), (342, 1502, 'Reforestación'), 
(343, 1503, 'Lucha contra la desertificación'), (344, 1503, 'Degradación de suelos'), (345, 1503, 'Sequias'), (346, 1503, 'Inundaciones'),
(347, 1504, 'Conservación de ecsistemas'), (348, 1504, 'Diversidad biológica'), (349, 1504, 'Zonas protegidas'), (350, 1504, 'Reservas territoriales'),
(351, 1505, 'Reducir degradación de hábitats naturales'), (352, 1505, 'Protección de especies amenazadas'), (353, 1505, 'Especies en peligro de extinción'),
(354, 1506, 'Participación justa y equitativa de recursos genéticos'), (355, 1506, 'Acceso adecuado a recursos genéticos'),
(356, 1507, 'Fin a la caza furtiva'), (357, 1507, 'Protección de animales en peligro de extinción'), (358, 1507, 'Tráfico ilegal de flora y fauna silvestres'),
(359, 1508, 'Prevención de especies exóticas invasoras'), (360, 1508, 'Efectos en ecosistemas terrestres y acuáticos'), (361, 1508, 'Erradicar especies prioritarias'), (362, 1508, 'Control de plagas'),
(363, 1509, 'Transversalidad de las políticas de medio ambiente'),
(364, 1510, 'Apoyos y programas para conservación de medio ambiente'), (365, 1510, 'Uso sostenible de la biodiversidad y los ecosistemas'),
(366, 1511, 'Apoyos financieros para gestión forestal'), (367, 1511, 'Conservación y reforestación'),
(368, 1512, 'Lucha contra la caza furtiva y tráficos de especies protegidas'), (369, 1512, 'Promoción de subsitencia sostenible');

-- ODS Metas - Objetivo 16
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(1601, 16, '16.1'), (1602, 16, '16.2'), (1603, 16, '16.3'), (1604, 16, '16.4'), (1605, 16, '16.5'), (1606, 16, '16.6'), (1607, 16, '16.7'), (1608, 16, '16.8'), (1609, 16, '16.9'), (1610, 16, '16.10'), (1611, 16, '16.a'), (1612, 16, '16.b');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(370, 1601, 'Reducir violencia y mortalidad'), (371, 1601, 'Homicidios'), (372, 1601, 'Feminicidios'),
(373, 1602, 'Fin a la explotación, maltrato, trata de personas y tortura'),
(374, 1603, 'Garantizar el estado de derecho'), (375, 1603, 'Garantizar la igualdad'), (376, 1603, 'Cifra negra'), (377, 1603, 'Acceso a la justicia'),
(378, 1604, 'Reducción de tráfico de armas'), (379, 1604, 'Luchar contra la delincuencia organizada'), (380, 1604, 'Recursos de procedencia ilícita'), (381, 1604, 'Recuperción de archivos robados'),
(382, 1605, 'Combate a la corrupción y soborno'), (383, 1605, 'Anticorrupción'),
(384, 1606, 'Instituciones eficaces'), (385, 1606, 'Rendición de cuentas'), (386, 1606, 'Transparencia'), (387, 1606, 'Servicios públicos'),
(388, 1607, 'Deciciones inclusivas'), (389, 1607, 'Legislación'), (390, 1607, 'Representatividad'), (391, 1607, 'Inclusión'), (392, 1607, 'Igualdad de oportunidades'), (393, 1607, 'Participación ciudadana'),
(394, 1608, 'Ampliar y fortalecer participación en gobernanza'),
(395, 1609, 'Acceso a identity jurídica'), (396, 1609, 'Registro de nacimientos'), (397, 1609, 'Registro civil'),
(398, 1610, 'Acceso a la información'), (399, 1610, 'Transparencia'), (400, 1610, 'Carpetas de investigación'), (401, 1610, 'Acuerdos internacionales'),
(402, 1611, 'Fortalecimiento de instituciones'), (403, 1611, 'Cooperación internacional'), (404, 1611, 'Prevención de la violencia'), (405, 1611, 'Combate terrorismo y delincuencia'), (406, 1611, 'Derechos humanos'),
(407, 1612, 'No discriminación'), (408, 1612, 'Desarrollo sostenible');

-- ODS Metas - Objetivo 17
INSERT INTO ods_metas (id_meta, id_objetivo, codigo_meta) VALUES
(1701, 17, '17.1'), (1702, 17, '17.2'), (1703, 17, '17.3'), (1704, 17, '17.4'), (1705, 17, '17.5'), (1706, 17, '17.6'), (1707, 17, '17.7'), (1708, 17, '17.8'), (1709, 17, '17.9'), (1710, 17, '17.10'), (1711, 17, '17.11'), (1712, 17, '17.12'), (1713, 17, '17.13'), (1714, 17, '17.14'), (1715, 17, '17.15'), (1716, 17, '17.16'), (1717, 17, '17.17'), (1718, 17, '17.18'), (1719, 17, '17.19');

INSERT INTO ods_temas (id_tema, id_meta, tema) VALUES
(409, 1701, 'Movilización de recursos'), (410, 1701, 'Recaudación de fiscal'),
(411, 1702, 'Asistencia internacional para el desarrollo'), (412, 1702, 'Asistencia a países en desarrollo'), (413, 1702, 'Donantes del OCDE'),
(414, 1703, 'Movilización de recursos financieros OCDE'), (415, 1703, 'Inversión extranjera'), (416, 1703, 'Cooperación Sur - Sur'), (417, 1703, 'Volumenes de remesas'),
(418, 1704, 'Sostenibilidad de la deuda pública'), (419, 1704, 'Fomento de financiación'), (420, 1704, 'Hacer frente a la deuda externa'),
(421, 1705, 'Promoción de inversiones'), (422, 1705, 'Inversión extranjera directa'),
(423, 1706, 'Norte - Sur y Sur - Sur'), (424, 1706, 'Ciencia, tecnología e innovación'), (425, 1706, 'Intercambio de conocimientos tecnológicos'),
(426, 1707, 'Promoción del desarrollo'), (427, 1707, 'Divulgación y difusión de cieencia'), (428, 1707, 'Tecnologías ecológicamente racionales'), (429, 1707, 'Desarrollo de tecnologías'), (430, 1707, 'Vinvulación tecnológica'), (431, 1707, 'Inversión en ciencia y tecnología'),
(432, 1708, 'Apoyo a la ciencia, tecnología e innovación'), (433, 1708, 'Tecnología de la información'), (434, 1708, 'Ciencia'),
(435, 1709, 'Asistencia internacional'), (436, 1709, 'Implementación de la Agenda 2030'),
(437, 1710, 'Promover comercio exterior'), (438, 1710, 'Importaciones'), (439, 1710, 'Exportaciones'),
(440, 1711, 'Aumento de exportaciones de países en desarrollo'),
(441, 1712, 'Regulación y acceso a los mercados internacionales'), (442, 1712, 'Organización Mundial del Comercio (OMC)'),
(443, 1713, 'Aumentar estabilidad macroeconómica'), (444, 1713, 'Monetaria'), (445, 1713, 'Económica'), (446, 1713, 'Inversión'),
(447, 1714, 'Desarrollo sostenible'), (448, 1714, 'ODS'),
(449, 1715, 'Erradicación de la pobreza'), (450, 1715, 'Desarrollo sostenible'),
(451, 1716, 'Desarrollo sostenible'), (452, 1716, 'Intercambio de conocimientos'), (453, 1716, 'Tecnología'), (454, 1716, 'Recursos financieros'), (455, 1716, 'ODS'),
(456, 1717, 'Fomentar y promover alianzas'), (457, 1717, 'Vinculación Público - Privado - Sociedad Civil'), (458, 1717, 'Desarrollo sostenible'),
(459, 1718, 'Disponibilidad de información'), (460, 1718, 'Información desagregada'),
(461, 1719, 'Aprovechamiento de iniciativas para medición de ingresos'), (462, 1719, 'Desarrollo sostenible'), (463, 1719, 'PIB'), (464, 1719, 'Capacidad estadística'), (465, 1719, 'Indicadores');


-- =========================================
-- SECCIÓN 2: TABLAS DE PROGRAMAS SECTORIALES
-- =========================================

CREATE TABLE programas_sectoriales_informe(
    id INT PRIMARY KEY,
    codigo VARCHAR(50),
    descripcion TEXT
);

CREATE TABLE ejes_informe(
    id INT PRIMARY KEY,
    programa_id INT,
    codigo VARCHAR(50),
    descripcion TEXT,
    FOREIGN KEY (programa_id) REFERENCES programas_sectoriales_informe(id)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE tematicas_informe(
    id INT PRIMARY KEY,
    eje_id INT,
    codigo VARCHAR(50),
    descripcion TEXT,
    FOREIGN KEY (eje_id) REFERENCES ejes_informe(id)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE objetivos_informe(
    id INT PRIMARY KEY,
    tematica_id INT,
    codigo VARCHAR(50),
    descripcion TEXT,
    indicador TEXT,
    FOREIGN KEY (tematica_id) REFERENCES tematicas_informe(id)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE estrategias_informe(
    id INT PRIMARY KEY,
    objetivo_id INT,
    codigo VARCHAR(50),
    descripcion TEXT,
    FOREIGN KEY (objetivo_id) REFERENCES objetivos_informe(id)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE lineas_accion_informe(
    id INT AUTO_INCREMENT PRIMARY KEY,
    estrategia_id INT,
    codigo VARCHAR(50),
    descripcion TEXT,
    responsable VARCHAR(255),
    FOREIGN KEY (estrategia_id) REFERENCES estrategias_informe(id)
    ON DELETE CASCADE ON UPDATE CASCADE
);

-- Datos Programas Sectoriales
INSERT INTO programas_sectoriales_informe VALUES (1, '1.', 'Agua por Amor a Puebla');
INSERT INTO programas_sectoriales_informe VALUES (2, '6.', 'Bienestar Socioambiental');

-- Ejes
INSERT INTO ejes_informe VALUES (1, 1, 'Eje 1', 'Aprovechamiento del Agua');
INSERT INTO ejes_informe VALUES (2, 1, 'Eje 2', 'Sustentabilidad hídrica');
INSERT INTO ejes_informe VALUES (3, 1, 'Eje 3', 'Infraestructura');
INSERT INTO ejes_informe VALUES (4, 1, 'Eje 4', 'Gobernanza Hídrica');
INSERT INTO ejes_informe VALUES (5, 2, 'Eje 1', 'Estado Resiliente');
INSERT INTO ejes_informe VALUES (6, 2, 'Eje 2', 'Desarrollo Sustentable');

-- Temáticas
INSERT INTO tematicas_informe VALUES (1, 1, '1.1', 'Uso Doméstico y Público Urbano');
INSERT INTO tematicas_informe VALUES (2, 1, '1.2', 'Uso En Actividades Económicas');
INSERT INTO tematicas_informe VALUES (3, 2, '2.1', 'Disponibilidad Hídrica');
INSERT INTO tematicas_informe VALUES (4, 3, '3.1', 'Infraestructura Hídrica');
INSERT INTO tematicas_informe VALUES (5, 4, '3.1', 'Gestión institucional y sectorial');
INSERT INTO tematicas_informe VALUES (6, 5, '1.1', 'Cambio Climático');
INSERT INTO tematicas_informe VALUES (7, 5, '1.2', 'Aprovechamiento de los Recursos Naturales');
INSERT INTO tematicas_informe VALUES (8, 6, '2.1', 'Impacto Ambiental');
INSERT INTO tematicas_informe VALUES (9, 6, '2.2', 'Contaminación Ambiental');
INSERT INTO tematicas_informe VALUES (10, 6, '2.3', 'Gestión Territorial');

-- Objetivos
INSERT INTO objetivos_informe VALUES (1, 1, '1.1.1', 'Impulsar la gestión sostenible del agua en el sector público urbano', NULL);
INSERT INTO objetivos_informe VALUES (2, 2, '1.2.1', 'Impulsar el uso eficiente del agua en las actividades económicas', NULL);
INSERT INTO objetivos_informe VALUES (3, 3, '2.1.1', 'Fortalecer la gestión integral de cuencas, subcuencas y microcuencas', NULL);
INSERT INTO objetivos_informe VALUES (4, 3, '2.1.2', 'Rescatar los cuerpos de agua estatales', NULL);
INSERT INTO objetivos_informe VALUES (5, 4, '3.1.3', 'Fortalecer la inversión en proyectos de infraestructura', NULL);
INSERT INTO objetivos_informe VALUES (6, 5, '3.1.1', 'Gestionar los recursos hídricos de manera efectiva y sostenible', NULL);
INSERT INTO objetivos_informe VALUES (7, 6, '1.1.1', 'Adoptar medidas para la mitigación y adaptación al cambio climático', NULL);
INSERT INTO objetivos_informe VALUES (8, 7, '1.2.1', 'Gestionar el uso responsable de los recursos naturales', NULL);
INSERT INTO objetivos_informe VALUES (9, 8, '2.1.1', 'Asegurar el equilibrio entre el crecimiento económico, el bienestar social y la protección ambiental', NULL);
INSERT INTO objetivos_informe VALUES (10, 9, '2.2.1', 'Reducir la contaminación ambiental', NULL);
INSERT INTO objetivos_informe VALUES (11, 10, '2.3.1', 'Fortalecer el ordenamiento estratégico y sostenible del territorio', NULL);

-- Estrategias
INSERT INTO estrategias_informe VALUES (1, 1, '1.1.1.1', 'Conservación y cuidado del agua');
INSERT INTO estrategias_informe VALUES (2, 2, '1.2.1.1', 'Fomento de sistemas agroalimentarios con acceso al uso sostenible del agua');
INSERT INTO estrategias_informe VALUES (3, 3, '2.1.1.3', 'Conservación de ecosistemas prioritarios');
INSERT INTO estrategias_informe VALUES (4, 4, '2.1.2.1', 'Fortalecimiento de la calidad ambiental de los cuerpos de agua');
INSERT INTO estrategias_informe VALUES (5, 5, '3.1.3.1', 'Impulso a la gestión y sepervisión de la infraestructura estratégica alineada al Plan Hídrico');
INSERT INTO estrategias_informe VALUES (6, 6, '3.1.1.1', 'Coordinación insterinstitucional multisectorial y con participación social para mejorar la planeación hídrica');
INSERT INTO estrategias_informe VALUES (7, 6, '3.1.1.2', 'Fortalecimiento de los organismos operadores y autoridades responsables de los servicios hidricos');
INSERT INTO estrategias_informe VALUES (8, 6, '3.1.1.3', 'Desarrollo de la información hidrica');
INSERT INTO estrategias_informe VALUES (9, 6, '3.1.1.4', 'Fortalecimiento de la cultura del Agua');
INSERT INTO estrategias_informe VALUES (10, 7, '1.1.1.1', 'Reducción de las emisiones de gases de efecto invernadero enfocada al alcance de la neutralidad climática que limite el cambio climático');
INSERT INTO estrategias_informe VALUES (11, 7, '1.1.1.2', 'Protección y restauración de bosques con la gestión sostenible de los mismos');
INSERT INTO estrategias_informe VALUES (12, 8, '1.2.1.1', 'Mitigación de los impactos negativos que el cambio del uso de suelo genera en los ecosistemas, especialmente en los terrenos forestales');
INSERT INTO estrategias_informe VALUES (13, 8, '1.2.1.2', 'Conservación de la biodiversidad, protegiendo a las especies en peligro y sus hábitats');
INSERT INTO estrategias_informe VALUES (14, 8, '1.2.1.3', 'Operación de políticas y medidas que fomenten la conservación, protección y aprovechamiento responsable de los recursos naturales');
INSERT INTO estrategias_informe VALUES (15, 8, '1.2.1.4', 'Promoción del bienestar animal en la entidad');
INSERT INTO estrategias_informe VALUES (16, 9, '2.1.1.3', 'Evaluación y reducción del impacto ambiental de las actividades humanas, mediante la atención de la huella ecológica.');
INSERT INTO estrategias_informe VALUES (17, 10, '2.2.1.1', 'Reducción del impacto de los residuos sólidos en el medio ambiente y en la salud pública');
INSERT INTO estrategias_informe VALUES (18, 10, '2.2.1.2', 'Reducción de los efectos negativos en la salud y la calidad de vida de las personas que genera la contaminación visual');
INSERT INTO estrategias_informe VALUES (19, 10, '2.2.1.3', 'Mejora de las regulaciones y políticas que reduzcan la contaminación en todas sus expresiones');
INSERT INTO estrategias_informe VALUES (20, 11, '2.3.1.1', 'Gestión del uso del territorio para lograr un desarrollo sostenible y equilibrado');
INSERT INTO estrategias_informe VALUES (21, 11, '2.3.1.2', 'Promoción de zonas urbanas sostenibles que fomenten el bienestar social y económico, mejorando la calidad de vida de los habitantes y minimizando el impacto ambiental');
INSERT INTO estrategias_informe VALUES (22, 11, '2.3.1.3', 'Identificación, evaluación y mitigación de las amenazas que pueden afectar a la población, con el fin de proteger su vida y su propiedad');

-- Líneas de Acción
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (1, '1.1.1.1.1', 'Promover tecnologías innovadoras para el uso eficiente del agua', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (1, '1.1.1.1.2', 'Fomentar la captación de agua de lluvia para una gestión sostenible del recurso', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (2, '1.2.1.1.1', 'Impulsar la planeación hídrica integral en las unidades de producción', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (2, '1.2.1.1.2', 'Promover la cosecha y almacenamiento de agua', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (3, '2.1.1.3.3', 'Desarrollar acciones para la conservación del ciclo hidrológico', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (4, '2.1.2.1.1', 'Impulsar el saneamiento integral de los cuerpos de agua estatales', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (4, '2.1.2.1.2', 'Coadyuvar en el saneamiento integral del río Atoyac y sus afluentes', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (5, '3.1.3.1.1', 'Alinear la construcción y operación de infraestructura hídrica con los objetivos del Plan Estatal Hídrico', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (5, '3.1.3.1.2', 'Fortalecer los mecanismos de supervisión, operación y mantenimiento de la infraestructura hídrica estratégica', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (6, '3.1.1.1.1', 'Establecer mecanismos formales de coordinación interinstitucional y multisectorial para la planeación y gestión hídrica', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (6, '3.1.1.1.2', 'Impulsar procesos de consulta y participación ciudadana en la planeación hídrica, con enfoque territorial y de inclusión', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (7, '3.1.1.2.1', 'Coadyuvar en el desarrollo de las capacidades técnicas, administrativas y legales de los organismos operadores y las autoridades responsables de los servicios hídricos', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (8, '3.1.1.3.1', 'Gestionar un sistema estatal integrado de información hídrica', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (8, '3.1.1.3.2', 'Fortalecer las capacidades técnicas de análisis, visualización y uso estratégico de datos hídricos para la toma de decisiones', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (9, '3.1.1.4.2', 'Generar recursos educativos sobre la cultura del agua', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (10, '1.1.1.1.1', 'Monitorear la calidad del aire en territorio poblano', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (10, '1.1.1.1.2', 'Fomentar prácticas sostenibles, de prevención de riesgos y adaptación al cambio climático', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (10, '1.1.1.1.3', 'Desarrollar estrategias de adaptación y mitigación ante el cambio climático', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (11, '1.1.1.2.1', 'Fortalecer la atención y prevención de incendios forestales para reducir la pérdida de cobertura forestal', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (11, '1.1.1.2.2', 'Impulsar el establecimiento de especies nativas favoreciendo la restauración de ecosistemas y mejorando la conectividad ecológica en zonas forestales', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (11, '1.1.1.2.3', 'Incrementar la superficie dedicada a la conservación en regiones con alta biodiversidad o riesgo ambiental', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (12, '1.2.1.1.1', 'Aplicar los instrumentos de planeación estatal para la regulación del uso del suelo', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (13, '1.2.1.2.1', 'Fomentar el rescate, la conservación y la preservación del patrimonio natural en el estado', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (14, '1.2.1.3.1', 'Fomentar la participación ciudadana en el cuidado del medio ambiente', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (14, '1.2.1.3.2', 'Promover la educación ambiental en el estado', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (15, '1.2.1.4.1', 'Promover la cultura del bienestar animal en la entidad', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (15, '1.2.1.4.2', 'Vigilar el cumplimiento de la normatividad en materia de bienestar animal', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (16, '2.1.1.3.1', 'Integrar la evaluación de impacto ambiental en los procesos de regularización y consolidación de asentamientos humanos', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (16, '2.1.1.3.2', 'Fortalecer la evaluación ambiental estratégica en proyectos de crecimiento urbano', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (17, '2.2.1.1.1', 'Fomentar el manejo integral de los residuos sólidos', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (17, '2.2.1.1.2', 'Sustanciar y evaluar el manejo integral adecuado de los residuos de manejo especial', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (17, '2.2.1.1.3', 'Coordinar acciones interinstitucionales para el aprovechamiento y la adecuada gestión integral de los residuos sólidos en la entidad', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (18, '2.2.1.2.1', 'Garantizar el cumplimiento de la normativa en materia de contaminación visual', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (19, '2.2.1.3.1', 'Establecer mecanismos y programas que regulen las fuentes emisoras de contaminantes a la atmósfera', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (19, '2.2.1.3.2', 'Garantizar el cumplimiento de la normatividad en materia de medio ambiente y ordenamiento territorial en el estado', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (20, '2.3.1.1.1', 'Impulsar el ordenamiento territorial con enfoque de sostenibilidad ambiental', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (20, '2.3.1.1.2', 'Promover la regularización integral y la consolidación de asentamientos humanos existentes', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (20, '2.3.1.1.3', 'Fortalecer los mecanismos de planeación urbana, participativa y corresponsable', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (20, '2.3.1.1.4', 'Consolidar esquemas de gobernanza territorial interinstitucional', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (20, '2.3.1.1.5', 'Regular el uso del suelo y el crecimiento urbano de los asentamientos humanos en el territorio', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (21, '2.3.1.2.1', 'Impulsar acciones de contención urbana y densificación inteligente', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (21, '2.3.1.2.2', 'Fomentar el desarrollo de infraestructura urbana resiliente y eficiente', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (21, '2.3.1.2.3', 'Establecer mecanismos de monitoreo, evaluación y control del crecimiento urbano', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (21, '2.3.1.2.4', 'Impulsar la formulación y actualización de los instrumentos de planeación de ordenamiento territorial en la entidad', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (22, '2.3.1.3.1', 'Impulsar la formulación de los instrumentos para la gestión integral de riesgos y la resiliencia en los municipios del estado', NULL);
INSERT INTO lineas_accion_informe (estrategia_id, codigo, descripcion, responsable) VALUES (22, '2.3.1.3.2', 'Promover mecanismos que reduzcan las vulnerabilidades ambientales y el riesgo de desastres', NULL);


-- =========================================
-- SECCIÓN 3: TABLAS DE SISTEMAS PED
-- =========================================

CREATE TABLE ejes(
    id INT PRIMARY KEY,
    codigo VARCHAR(50),
    descripcion TEXT
);

CREATE TABLE tematicas(
    id INT PRIMARY KEY,
    eje_id INT,
    codigo VARCHAR(50),
    descripcion TEXT,
    FOREIGN KEY (eje_id) REFERENCES ejes(id)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE objetivos(
    id INT PRIMARY KEY,
    tematica_id INT,
    codigo VARCHAR(50),
    descripcion TEXT,
    indicador TEXT,
    FOREIGN KEY (tematica_id) REFERENCES tematicas(id)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE estrategias(
    id INT PRIMARY KEY,
    objetivo_id INT,
    codigo VARCHAR(50),
    descripcion TEXT,
    FOREIGN KEY (objetivo_id) REFERENCES objetivos(id)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE lineas_accion(
    id INT AUTO_INCREMENT PRIMARY KEY,
    estrategia_id INT,
    codigo VARCHAR(50),
    descripcion TEXT,
    responsable VARCHAR(255),
    FOREIGN KEY (estrategia_id) REFERENCES estrategias(id)
    ON DELETE CASCADE ON UPDATE CASCADE
);

-- Datos PED
INSERT INTO `ejes` VALUES (1,'Eje 4','Desarrollo Urbano y Crecimiento Sostenible');

INSERT INTO `tematicas` VALUES (1,1,'4.1','Medio Ambiente y Desarrollo Urbano');

INSERT INTO `objetivos` VALUES (1,1,'4.1.1','Mejorar el bienestar socioambiental', NULL);

INSERT INTO `estrategias` VALUES 
(1,1,'4.1.1.1','Mitigación y adaptación al cambio climático'),
(2,1,'4.1.1.2','Gestión y uso responsable de los recursos naturales (Desarrollo Sustentable)'),
(3,1,'4.1.1.3','Equilibrio entre el crecimiento económico, el bienestar social y la protección ambiental (Desarrollo Sostenible)'),
(4,1,'4.1.1.4','Reducción de la contaminación'),
(5,1,'4.1.1.5','Gestión estratégica y sostenible del territorio');

INSERT INTO `lineas_accion` VALUES 
(1,1,'4.1.1.1.1','Reducir las emisiones de gases de efecto invernadero y alcanzar la neutralidad climática para limitar el cambio climático.', NULL),
(2,1,'4.1.1.1.2','Detener y revertir la pérdida de bosques, y promover la gestión sostenible de los mismos.', NULL),
(3,2,'4.1.1.2.1','Promover un uso eficiente y consciente del agua para evitar el desperdicio, asegurando su disponibilidad para futuras generaciones.', NULL),
(4,2,'4.1.1.2.2','Mitigar los impactos negativos que el cambio del uso de suelo genera en los ecosistemas, especialmente en los terrenos forestales.', NULL),
(5,2,'4.1.1.2.3','Mantener y aumentar la biodiversidad, protegiendo a las especies en peligro y sus hábitats.', NULL),
(6,2,'4.1.1.2.4','Operar políticas y medidas que fomenten la conservación, protección y aprovechamiento responsable de los recursos naturales.', NULL),
(7,2,'4.1.1.2.5','Promover el bienestar animal en la entidad.', NULL),
(8,3,'4.1.1.3.1','Fortalecer las acciones de descarbonización como la transición a fuentes de energía renovable, la mejora en la eficiencia energética, y la adopción de tecnologías y prácticas sostenibles en diversos sectores.', NULL),
(9,3,'4.1.1.3.2','Preservar la salud y productividad del suelo, minimizando su degradación, asegurando su uso sostenible en el tiempo.', NULL),
(10,3,'4.1.1.3.3','Evaluar y reducir el impacto ambiental de las actividades humanas, mediante la atención de la huella ecológica.', NULL),
(11,3,'4.1.1.3.4','Impulsar la regulación del crecimiento económico inclusivo y sostenible.', NULL),
(12,4,'4.1.1.4.1','Mejorar la calidad del agua, eliminar la contaminación y minimizar la emisión de sustancias peligrosas.', NULL),
(13,4,'4.1.1.4.2','Minimizar el impacto en el medio ambiente y la salud pública de los residuos sólidos.', NULL),
(14,4,'4.1.1.4.3','Minimizar los efectos negativos en la salud y la calidad de vida de las personas que genera la contaminación visual y auditiva.', NULL),
(15,4,'4.1.1.4.4','Mejorar las regulaciones y políticas que reduzcan la contaminación en todas sus expresiones.', NULL),
(16,5,'4.1.1.5.1','Organizar y planificar el uso del territorio para lograr un desarrollo sostenible y equilibrado.', NULL),
(17,5,'4.1.1.5.2','Promover zonas urbanas sostenibles que promuevan el bienestar social y económico, mejorando la calidad de vida de los habitantes y minimizando el impacto ambiental.', NULL),
(18,5,'4.1.1.5.3','Generar servicios y espacios públicos que faciliten la vida cotidiana, promuevan la equidad y el bienestar de la población.', NULL),
(19,5,'4.1.1.5.4','Identificar, evaluar y mitigar las amenazas que pueden afectar a la población, con el fin de proteger su vida y su propiedad.', NULL);


-- =========================================
-- SECCIÓN 4: TABLAS DE SISTEMAS DE INFORMES Y GLOSAS
-- =========================================

-- Primero las tablas sin dependencias externas
CREATE TABLE IF NOT EXISTS `periodos_anuales` (
  `id_periodo_anual` int NOT NULL AUTO_INCREMENT,
  `anio` int NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT 'activo',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_periodo_anual`),
  UNIQUE KEY `uq_periodo_anual` (`anio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS `etapas` (
  `id_etapa` int NOT NULL AUTO_INCREMENT,
  `id_periodo_anual` int NOT NULL,
  `numero_etapa` tinyint NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` enum('abierta','cerrada') DEFAULT 'cerrada',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_etapa`),
  UNIQUE KEY `uq_etapa_anual` (`id_periodo_anual`,`numero_etapa`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS `glosa_gestion` (
  `id_glosa` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin_programada` date NOT NULL,
  `fecha_cierre_real` date DEFAULT NULL,
  `estado` enum('abierta','cerrada') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'abierta',
  PRIMARY KEY (`id_glosa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tablas que dependen de otras tablas del sistema (usuarios, unidades)
-- Nota: Estas tablas asumen que ya existen las tablas usuarios y unidades en la base de datos
CREATE TABLE IF NOT EXISTS `glosas_gobierno` (
  `id_glosa_gobierno` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_unidad` int NOT NULL,
  `id_glosa` int NOT NULL,
  `fecha_corte` date NOT NULL,
  `id_alineacion_ped` int NOT NULL,
  `orden_prioridad` tinyint NOT NULL,
  `tema` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `introduccion` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `accion` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `desarrollo` text COLLATE utf8mb4_general_ci,
  `id_alineacion_programa_derivado` int NOT NULL,
  `id_alineacion_ods` int NOT NULL,
  `estado` enum('borrador','enviado','revisado','aprobado','rechazado','observado') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'borrador',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_glosa_gobierno`),
  KEY `idx_usuario` (`id_usuario`),
  KEY `idx_unidad` (`id_unidad`),
  KEY `idx_glosa` (`id_glosa`),
  KEY `idx_estado` (`estado`),
  KEY `fk_alineacion_ods` (`id_alineacion_ods`),
  CONSTRAINT `fk_alineacion_ods` FOREIGN KEY (`id_alineacion_ods`) REFERENCES `ods_temas` (`id_tema`),
  CONSTRAINT `fk_glosa_gestion` FOREIGN KEY (`id_glosa`) REFERENCES `glosa_gestion` (`id_glosa`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `glosa_archivos` (
  `id_archivo` int NOT NULL AUTO_INCREMENT,
  `id_glosa_gobierno` int NOT NULL,
  `tipo_archivo` enum('mapa','grafico','cuadro','esquema','fotografia','resultados') COLLATE utf8mb4_general_ci NOT NULL,
  `nombre_archivo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre_original` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ruta_archivo` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `extension` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `tamanio_kb` int NOT NULL,
  `mime_type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `orden` tinyint DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` enum('activo','eliminado','rechazado') COLLATE utf8mb4_general_ci DEFAULT 'activo',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_archivo`),
  KEY `idx_glosa` (`id_glosa_gobierno`),
  KEY `idx_tipo` (`tipo_archivo`),
  CONSTRAINT `fk_glosa_archivo_glosa` FOREIGN KEY (`id_glosa_gobierno`) REFERENCES `glosas_gobierno` (`id_glosa_gobierno`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `glosa_comentarios` (
  `id_comentario` int NOT NULL AUTO_INCREMENT,
  `id_glosa_gobierno` int NOT NULL,
  `id_usuario` int NOT NULL,
  `campo_referencia` varchar(100) DEFAULT NULL,
  `comentario` text NOT NULL,
  `tipo` enum('observacion','correccion','aprobacion') DEFAULT 'observacion',
  `estado` enum('pendiente','atendido','descartado') DEFAULT 'pendiente',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_comentario`),
  KEY `idx_glosa` (`id_glosa_gobierno`),
  KEY `idx_usuario` (`id_usuario`),
  KEY `idx_campo` (`campo_referencia`),
  CONSTRAINT `fk_glosa_comentario_glosa` FOREIGN KEY (`id_glosa_gobierno`) REFERENCES `glosas_gobierno` (`id_glosa_gobierno`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS `informes_gobierno` (
  `id_informe` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_unidad` int NOT NULL,
  `id_periodo_anual` int DEFAULT NULL,
  `id_etapa` int DEFAULT NULL,
  `fecha_corte` date NOT NULL,
  `id_alineacion_ped` int NOT NULL,
  `orden_prioridad` tinyint NOT NULL,
  `tema` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `subtema` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion_resultado` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `contexto` text COLLATE utf8mb4_general_ci NOT NULL,
  `accion` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `impacto` text COLLATE utf8mb4_general_ci NOT NULL,
  `territorio` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `beneficiarios` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `inversion` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `desarrollo_resultado` text COLLATE utf8mb4_general_ci NOT NULL,
  `conclusion_tematica` text COLLATE utf8mb4_general_ci NOT NULL,
  `logros_destacados` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_alineacion_programa_derivado` int NOT NULL,
  `id_alineacion_ods` int NOT NULL,
  `estado` enum('borrador','enviado','observado','revisado','aprobado','rechazado') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'enviado',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_informe`),
  KEY `idx_usuario` (`id_usuario`),
  KEY `idx_unidad` (`id_unidad`),
  KEY `idx_estado` (`estado`),
  KEY `idx_fecha_corte` (`fecha_corte`),
  KEY `id_periodo_anual` (`id_periodo_anual`),
  KEY `id_alineacion_ods` (`id_alineacion_ods`),
  CONSTRAINT `informes_gobierno_ibfk_3` FOREIGN KEY (`id_periodo_anual`) REFERENCES `periodos_anuales` (`id_periodo_anual`),
  CONSTRAINT `informes_gobierno_ibfk_4` FOREIGN KEY (`id_alineacion_ods`) REFERENCES `ods_temas` (`id_tema`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `informe_archivos` (
  `id_archivo` int NOT NULL AUTO_INCREMENT,
  `id_informe` int NOT NULL,
  `tipo_archivo` enum('mapa','grafico','cuadro','esquema','fotografia','resultados') COLLATE utf8mb4_general_ci NOT NULL,
  `nombre_archivo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre_original` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ruta_archivo` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `extension` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `tamanio_kb` int NOT NULL,
  `mime_type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `orden` tinyint DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` enum('activo','eliminado','rechazado') COLLATE utf8mb4_general_ci DEFAULT 'activo',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_archivo`),
  KEY `idx_informe` (`id_informe`),
  KEY `idx_tipo` (`tipo_archivo`),
  CONSTRAINT `informe_archivos_ibfk_1` FOREIGN KEY (`id_informe`) REFERENCES `informes_gobierno` (`id_informe`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `informe_comentarios` (
  `id_comentario` int NOT NULL AUTO_INCREMENT,
  `id_informe` int NOT NULL,
  `id_usuario` int NOT NULL,
  `campo_referencia` varchar(100) DEFAULT NULL,
  `comentario` text NOT NULL,
  `tipo` enum('observacion','correccion','aprobacion') DEFAULT 'observacion',
  `estado` enum('pendiente','atendido','descartado') DEFAULT 'pendiente',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_comentario`),
  KEY `idx_informe` (`id_informe`),
  KEY `idx_usuario` (`id_usuario`),
  KEY `idx_campo` (`campo_referencia`),
  CONSTRAINT `informe_comentarios_ibfk_1` FOREIGN KEY (`id_informe`) REFERENCES `informes_gobierno` (`id_informe`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- =========================================
-- MODIFICACIONES A TABLA USUARIOS
-- =========================================

-- Agregar columnas de permisos para informe y glosa
ALTER TABLE `usuarios` 
  ADD COLUMN `informe` TINYINT(1) NULL DEFAULT NULL,
  ADD COLUMN `glosa` TINYINT(1) NULL DEFAULT NULL,
  ADD COLUMN `loadinforme` TINYINT(1) NULL DEFAULT NULL,
  ADD COLUMN `loadglosa` TINYINT(1) NULL DEFAULT NULL;

-- =========================================
-- Reactivar verificaciones de claves foráneas
-- =========================================
SET FOREIGN_KEY_CHECKS = 1;

-- =========================================
-- Confirmar la transacción
-- =========================================
COMMIT;
