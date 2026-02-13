
    // Función para actualizar los contadores de caracteres
    function setupCharacterCounter(inputId, counterId, maxLength) {
        const input = document.getElementById(inputId);
        const counter = document.getElementById(counterId);

        if (input && counter) {
            input.addEventListener('input', function() {
                const currentLength = this.value.length;
                counter.textContent = `${currentLength} / ${maxLength} caracteres`;

                // Cambiar color si se acerca al límite
                if (currentLength > maxLength * 0.9) {
                    counter.classList.add('text-red-500');
                    counter.classList.remove('text-gray-500');
                } else {
                    counter.classList.add('text-gray-500');
                    counter.classList.remove('text-red-500');
                }
            });
        }
    }

    // Configurar todos los contadores
    document.addEventListener('DOMContentLoaded', function() {
        setupCharacterCounter('tema', 'tema-count', 100);
        setupCharacterCounter('subtema', 'subtema-count', 100);
        setupCharacterCounter('descripcion', 'descripcion-count', 100);
        setupCharacterCounter('contexto', 'contexto-count', 500);
        setupCharacterCounter('accion', 'accion-count', 100);
        setupCharacterCounter('impacto', 'impacto-count', 300);
        setupCharacterCounter('territorio', 'territorio-count', 250);
        setupCharacterCounter('beneficiarios', 'beneficiarios-count', 150);
        setupCharacterCounter('inversion', 'inversion-count', 200);
        setupCharacterCounter('desarrollo_resultado', 'desarrollo_resultado-count', 3500);
        setupCharacterCounter('conclusionTematica', 'conclusionTematica-count', 1900);
        setupCharacterCounter('logrosDestacados', 'logrosDestacados-count', 1900);

        // Actualizar contadores iniciales para valores pre-cargados
        const fieldsToUpdate = [
            'tema', 'subtema', 'descripcion', 'contexto', 'accion',
            'impacto', 'territorio', 'beneficiarios', 'inversion',
            'desarrollo_resultado', 'conclusionTematica', 'logrosDestacados'
        ];

        fieldsToUpdate.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (field && field.value) {
                const event = new Event('input');
                field.dispatchEvent(event);
            }
        });
    });

    // Función para mostrar los archivos seleccionados
    function updateFileNames(input) {
        const inputId = input.id;
        const fileListId = 'fileList' + inputId.charAt(0).toUpperCase() + inputId.slice(1);
        const fileList = document.getElementById(fileListId);

        if (!fileList) return;

        fileList.innerHTML = '';

        if (input.files.length > 0) {
            fileList.classList.remove('hidden');

            Array.from(input.files).forEach((file, index) => {
                const fileItem = document.createElement('div');
                fileItem.className = 'flex items-center justify-between p-2 bg-gray-50 rounded text-xs';
                fileItem.innerHTML = `
                    <span class="truncate flex-1 text-gray-700">
                        <i class="fa-solid fa-file mr-1 text-green-600"></i>
                        ${file.name}
                    </span>
                    <span class="text-gray-500 ml-2">${(file.size / 1024).toFixed(1)} KB</span>
                `;
                fileList.appendChild(fileItem);
            });
        } else {
            fileList.classList.add('hidden');
        }
    }

    // Variables globales para el modal
    let archivoActual = {
        url: '',
        nombre: ''
    };

    // Función para ver archivo en modal
    function verArchivo(ruta, nombre) {
        const modal = document.getElementById('modalArchivo');
        const titulo = document.getElementById('modalTitulo');
        const contenido = document.getElementById('modalContenido');

        // Normalizar la ruta reemplazando backslashes por forward slashes
        const rutaNormalizada = ruta.replace(/\\/g, '/');
        archivoActual = {
            url: '<?= base_url() ?>/' + rutaNormalizada,
            nombre: nombre
        };

        titulo.textContent = nombre;
        modal.classList.remove('hidden');

        const extension = nombre.split('.').pop().toLowerCase();

        // Determinar el tipo de visualización según la extensión
        if (['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'].includes(extension)) {
            contenido.innerHTML = `<img src="${archivoActual.url}" alt="${nombre}" class="max-w-full h-auto rounded-lg shadow-lg">`;
        } else if (extension === 'pdf') {
            contenido.innerHTML = `<iframe src="${archivoActual.url}" class="w-full h-96 border-0 rounded-lg"></iframe>`;
        } else if (['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'].includes(extension)) {
            contenido.innerHTML = `
                <div class="text-center py-8">
                    <i class="fa-solid fa-file-${extension.includes('doc') ? 'word' : extension.includes('xls') ? 'excel' : 'powerpoint'} text-6xl text-blue-500 mb-4"></i>
                    <p class="text-gray-700 font-medium mb-2">${nombre}</p>
                    <p class="text-gray-500 text-sm mb-4">Este tipo de archivo no se puede previsualizar en el navegador</p>
                    <button onclick="descargarArchivoModal()" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
                        <i class="fa-solid fa-download mr-2"></i>Descargar archivo
                    </button>
                </div>`;
        } else if (['zip', 'rar', '7z'].includes(extension)) {
            contenido.innerHTML = `
                <div class="text-center py-8">
                    <i class="fa-solid fa-file-zipper text-6xl text-yellow-500 mb-4"></i>
                    <p class="text-gray-700 font-medium mb-2">${nombre}</p>
                    <p class="text-gray-500 text-sm mb-4">Archivo comprimido</p>
                    <button onclick="descargarArchivoModal()" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
                        <i class="fa-solid fa-download mr-2"></i>Descargar archivo
                    </button>
                </div>`;
        } else {
            contenido.innerHTML = `
                <div class="text-center py-8">
                    <i class="fa-solid fa-file text-6xl text-gray-400 mb-4"></i>
                    <p class="text-gray-700 font-medium mb-2">${nombre}</p>
                    <p class="text-gray-500 text-sm mb-4">No se puede previsualizar este tipo de archivo</p>
                    <button onclick="descargarArchivoModal()" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
                        <i class="fa-solid fa-download mr-2"></i>Descargar archivo
                    </button>
                </div>`;
        }
    }

    // Función para cerrar el modal
    function cerrarModal() {
        const modal = document.getElementById('modalArchivo');
        modal.classList.add('hidden');
        archivoActual = {
            url: '',
            nombre: ''
        };
    }

    // Cerrar modal al hacer clic fuera de él
    document.getElementById('modalArchivo').addEventListener('click', function(e) {
        if (e.target === this) {
            cerrarModal();
        }
    });

    // Función para descargar archivo desde el modal
    function descargarArchivoModal() {
        if (archivoActual.url) {
            descargarArchivo(archivoActual.url, archivoActual.nombre);
        }
    }

    // Función para descargar un archivo individual
    function descargarArchivo(url, nombre) {
        const link = document.createElement('a');
        link.href = url;
        link.download = nombre;
        link.target = '_blank';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }

    // Función para descargar todos los archivos
    function descargarTodosArchivos() {
        const archivos = <?= json_encode($archivos ?? [], JSON_UNESCAPED_SLASHES) ?>;

        if (archivos.length === 0) {
            alert('No hay archivos para descargar');
            return;
        }

        // Mostrar confirmación
        if (confirm(`¿Desea descargar todos los archivos (${archivos.length} archivos)?`)) {
            // Descargar cada archivo con un pequeño delay para evitar bloqueos del navegador
            archivos.forEach((archivo, index) => {
                setTimeout(() => {
                    // Normalizar la ruta
                    const ruta = archivo.ruta_archivo.replace(/\\/g, '/');
                    const url = '<?= base_url() ?>/' + ruta;
                    descargarArchivo(url, archivo.nombre_archivo);
                }, index * 300); // 300ms de delay entre cada descarga
            });
        }
    }

    // Funcionalidad del botón "Nuevo Informe" en el sidebar
    document.addEventListener('DOMContentLoaded', function() {
        const btnNuevoInforme = document.getElementById('btnNuevoInforme');
        if (btnNuevoInforme) {
            btnNuevoInforme.addEventListener('click', function() {
                window.location.href = '<?php echo base_url(); ?>/Scii/informesGobierno';
            });
        }
    });

    // Mostrar loader durante el envío del formulario
    document.querySelector('form').addEventListener('submit', function() {
        document.getElementById('loader').style.display = 'flex';
    });

    // Validación adicional antes del envío
    document.querySelector('form').addEventListener('submit', function(e) {
        const requiredFields = [
            'alineacionPED',
            'ordenPrioridad',
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
            'alineacionProgramasDerivados',
            'alineacionODS',
            'conclusionTematica',
            'logrosDestacados'
        ];

        let isValid = true;
        const emptyFields = [];

        requiredFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (field && !field.value.trim()) {
                isValid = false;
                emptyFields.push(field.previousElementSibling.textContent.trim());
                field.classList.add('border-red-500');
            } else if (field) {
                field.classList.remove('border-red-500');
            }
        });

        if (!isValid) {
            e.preventDefault();
            document.getElementById('loader').style.display = 'none';
            alert('Por favor complete todos los campos requeridos:\n\n' + emptyFields.join('\n'));
        }
    });

    // ===== MODAL DE COMENTARIOS =====
    // Esperar a que el DOM esté completamente cargado
    const modal = document.getElementById('commentModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalFieldLabel = document.getElementById('modalFieldLabel');
    const commentText = document.getElementById('commentText');
    const saveBtn = document.getElementById('saveComment');
    const cancelBtn = document.getElementById('cancelComment');

    let currentField = null;
    let currentButton = null;

    // ID del informe actual
    const idInforme = <?= $informe_id ?? 0 ?>;

    // Almacén temporal de comentarios cargados
    const comments = {};

    // Verificar que los elementos existan antes de agregar event listeners
    if (modal && modalTitle && modalFieldLabel && commentText && saveBtn && cancelBtn) {
        document.querySelectorAll('.comment-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                currentField = btn.dataset.field;
                currentButton = btn;

                modalTitle.textContent = 'Comentario';
                modalFieldLabel.textContent = `Campo: ${btn.dataset.label}`;
                commentText.value = comments[currentField] || '';

                openModal();
            });
        });

        saveBtn.addEventListener('click', async () => {
            if (!currentField) return;

            const comentario = commentText.value.trim();
            
            // Deshabilitar botón mientras se guarda
            saveBtn.disabled = true;
            saveBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Guardando...';

            try {
                // Enviar al servidor
                const response = await fetch('<?= base_url() ?>/administrador/guardarComentario', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        'id_informe': idInforme,
                        'campo_referencia': currentField,
                        'comentario': comentario,
                        'tipo': 'revision'
                    })
                });

                const data = await response.json();

                if (data.success) {
                    // Actualizar almacén local
                    comments[currentField] = comentario;
                    
                    // Actualizar indicador visual
                    toggleIndicador(currentButton, comentario);
                    
                    // Mostrar mensaje de éxito
                    mostrarMensaje(data.message, 'success');
                    
                    closeModal();
                } else {
                    mostrarMensaje(data.message || 'Error al guardar el comentario', 'error');
                }
            } catch (error) {
                console.error('Error:', error);
                mostrarMensaje('Error de conexión al guardar el comentario', 'error');
            } finally {
                // Restaurar botón
                saveBtn.disabled = false;
                saveBtn.textContent = 'Guardar';
            }
        });

        cancelBtn.addEventListener('click', closeModal);

        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });

        function openModal() {
            if (modal) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                if (commentText) commentText.focus();
            }
        }

        function closeModal() {
            if (modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                if (currentButton) currentButton.focus();
                currentField = null;
            }
        }

        function toggleIndicador(button, text) {
            if (!button) return;
            const indicator = button.querySelector('.comment-indicator');
            if (indicator) {
                if (text && text.length > 0) {
                    indicator.classList.remove('hidden');
                } else {
                    indicator.classList.add('hidden');
                }
            }
        }

        // Función para cargar comentarios existentes
        async function cargarComentariosExistentes() {
            if (!idInforme) return;

            try {
                const response = await fetch(`<?= base_url() ?>/administrador/obtenerComentarios?id_informe=${idInforme}`);
                const data = await response.json();

                if (data.success && data.comentarios) {
                    // Procesar comentarios y actualizar indicadores
                    data.comentarios.forEach(comentario => {
                        comments[comentario.campo_referencia] = comentario.comentario;
                        
                        // Buscar el botón correspondiente y actualizar indicador
                        const btn = document.querySelector(`.comment-btn[data-field="${comentario.campo_referencia}"]`);
                        if (btn) {
                            toggleIndicador(btn, comentario.comentario);
                        }
                    });
                }
            } catch (error) {
                console.error('Error al cargar comentarios:', error);
            }
        }

        // Función para mostrar mensajes
        function mostrarMensaje(mensaje, tipo = 'success') {
            const alertDiv = document.createElement('div');
            alertDiv.className = `fixed top-4 right-4 z-50 px-6 py-3 rounded-lg shadow-lg transition-all duration-300 ${
                tipo === 'success' ? 'bg-green-100 border border-green-300 text-green-800' : 'bg-red-100 border border-red-300 text-red-800'
            }`;
            alertDiv.innerHTML = `
                <div class="flex items-center">
                    <i class="fa-solid ${tipo === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'} mr-2"></i>
                    <span>${mensaje}</span>
                </div>
            `;
            
            document.body.appendChild(alertDiv);
            
            setTimeout(() => {
                alertDiv.style.opacity = '0';
                setTimeout(() => alertDiv.remove(), 300);
            }, 3000);
        }

        // Cargar comentarios existentes al iniciar
        cargarComentariosExistentes();
    } else {
        console.error('Modal de comentarios: No se encontraron todos los elementos necesarios');
    }
