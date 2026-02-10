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
    let archivoActual = { url: '', nombre: '' };

    // Función para ver archivo en modal
    function verArchivo(ruta, nombre) {
        const modal = document.getElementById('modalArchivo');
        const titulo = document.getElementById('modalTitulo');
        const contenido = document.getElementById('modalContenido');
        
        archivoActual = { url: '<?= base_url() ?>/' + ruta, nombre: nombre };
        
        titulo.textContent = nombre;
        modal.style.display = 'flex';
        
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
        modal.style.display = 'none';
        archivoActual = { url: '', nombre: '' };
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
        const archivos = <?= json_encode($archivos ?? []) ?>;
        
        if (archivos.length === 0) {
            alert('No hay archivos para descargar');
            return;
        }

        // Mostrar confirmación
        if (confirm(`¿Desea descargar todos los archivos (${archivos.length} archivos)?`)) {
            // Descargar cada archivo con un pequeño delay para evitar bloqueos del navegador
            archivos.forEach((archivo, index) => {
                setTimeout(() => {
                    const url = '<?= base_url() ?>/' + archivo.ruta_archivo;
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