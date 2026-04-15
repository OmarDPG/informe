// Función para eliminar archivos existentes
function eliminarArchivoExistente(idArchivo, botonElemento) {
    if (!confirm('¿Está seguro de que desea eliminar este archivo? Esta acción no se puede deshacer.')) {
        return;
    }

    // Deshabilitar el botón mientras se procesa
    const botonOriginal = botonElemento.innerHTML;
    botonElemento.disabled = true;
    botonElemento.innerHTML = '<svg class="animate-spin h-4 w-4" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';

    // Construir la URL correctamente usando BASE_URL
    const baseUrl = typeof BASE_URL !== 'undefined' ? BASE_URL : '';
    const url = `${baseUrl}/scii/eliminarArchivoGlosa/${idArchivo}`;

    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => {
        const contentType = response.headers.get('content-type');
        if (!contentType || !contentType.includes('application/json')) {
            throw new Error('La respuesta del servidor no es JSON válido');
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            // Encontrar el contenedor del archivo y eliminarlo con animación
            const archivoElemento = botonElemento.closest('.flex.items-center.justify-between');
            if (archivoElemento) {
                archivoElemento.style.transition = 'opacity 0.3s ease-out';
                archivoElemento.style.opacity = '0';
                setTimeout(() => {
                    archivoElemento.remove();
                }, 300);
            }

            // Mostrar mensaje de éxito
            alert(data.message || 'Archivo eliminado correctamente');
        } else {
            throw new Error(data.message || 'Error al eliminar el archivo');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error al eliminar el archivo: ' + error.message);
        // Restaurar el botón
        botonElemento.disabled = false;
        botonElemento.innerHTML = botonOriginal;
    });
}

// Función para obtener el contenedor de lista según el input
function getFileListForInput(input) {
    if (!input || !input.id) {
        return null;
    }

    const suffix = input.id.charAt(0).toUpperCase() + input.id.slice(1);
    return document.getElementById(`fileList${suffix}`);
}

// Función para actualizar la lista de archivos seleccionados
function updateFileNames(input) {
    const fileList = getFileListForInput(input);
    if (!fileList) {
        return;
    }

    const files = Array.from(input.files);

    if (files.length === 0) {
        fileList.classList.add('hidden');
        fileList.innerHTML = '';
        return;
    }

    fileList.classList.remove('hidden');
    fileList.innerHTML = '';

    files.forEach((file, index) => {
        const fileSize = (file.size / 1024 / 1024).toFixed(2); // Convertir a MB
        const fileExtension = file.name.split('.').pop().toUpperCase();

        const fileItem = document.createElement('div');
        fileItem.className = 'file-item flex items-center justify-between rounded-lg border border-gray-200 bg-white px-3 py-2';
        fileItem.innerHTML = `
                <div class="flex items-center space-x-3 flex-1">
                    <div class="flex-shrink-0">
                        <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate">${file.name}</p>
                        <p class="text-xs text-gray-500">${fileExtension} - ${fileSize} MB</p>
                    </div>
                </div>
                <button type="button" class="file-item-remove ml-3 text-gray-400 hover:text-red-500" onclick="removeFile('${input.id}', ${index})" title="Eliminar archivo">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            `;
        fileList.appendChild(fileItem);
    });
}

// Función para eliminar un archivo de la lista
function removeFile(inputId, index) {
    const input = document.getElementById(inputId);
    if (!input || !input.files) {
        return;
    }

    const dt = new DataTransfer();
    const files = Array.from(input.files);

    files.forEach((file, i) => {
        if (i !== index) {
            dt.items.add(file);
        }
    });

    input.files = dt.files;
    updateFileNames(input);
}

// Drag and drop functionality para inputs dentro de #inputsFiles
document.addEventListener('DOMContentLoaded', function () {
    const inputsContainer = document.getElementById('inputsFiles');
    if (!inputsContainer) {
        return;
    }

    const fileInputs = inputsContainer.querySelectorAll('input[type="file"]');

    fileInputs.forEach(input => {
        const dropZone = document.querySelector(`label[for="${input.id}"]`);
        if (!dropZone) {
            return;
        }

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, () => {
                dropZone.classList.add('border-green-500', 'bg-green-50');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, () => {
                dropZone.classList.remove('border-green-500', 'bg-green-50');
            }, false);
        });

        dropZone.addEventListener('drop', function (e) {
            const dt = e.dataTransfer;
            input.files = dt.files;
            updateFileNames(input);
        }, false);
    });
});
// Funcionalidad del sidebar
document.addEventListener('DOMContentLoaded', function () {

    // === FUNCIONALIDAD DE FILTROS ===
    const filterBtns = document.querySelectorAll('.filter-btn');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            // Remover clase active de todos los botones
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-green-50', 'text-green-700', 'font-medium');
                b.classList.add('text-gray-600');
            });

            // Agregar clase active al botón clickeado
            this.classList.add('active', 'bg-green-50', 'text-green-700', 'font-medium');
            this.classList.remove('text-gray-600');

            console.log('Filtro aplicado:', this.textContent.trim());
        });
    });

    // === FUNCIONALIDAD DE ITEMS DE Glosa ===
    const glosaItems = document.querySelectorAll('.glosa-item');

    glosaItems.forEach(item => {
        item.addEventListener('click', function () {
            // Remover selección de todos los items
            glosaItems.forEach(i => {
                i.classList.remove('border-green-500', 'bg-green-50');
            });
            // Agregar selección al item clickeado
            this.classList.add('border-green-500', 'bg-green-50');

            const titulo = this.querySelector('h4').textContent;
            console.log('Glosa seleccionado:', titulo);
        });
    });

    // === BOTÓN NUEVO Glosa ===
    const btnNuevoGlosa = document.getElementById('btnNuevoGlosa');
    const form = document.querySelector('form');

    if (btnNuevoGlosa && form) {
        btnNuevoGlosa.addEventListener('click', function () {
            // Limpiar el formulario
            form.reset();

            // Resetear contadores
            const contadores = ['tema', 'introduccion', 'accion', 'desarrollo'];
            contadores.forEach(id => {
                const counter = document.getElementById(`${id}-count`);
                if (counter) {
                    const maxLength = counter.textContent.split('/')[1].trim();
                    counter.textContent = `0 / ${maxLength}`;
                    counter.className = 'text-xs text-gray-500 mt-1 text-right';
                }
            });
            // Remover selección de items
            glosaItems.forEach(i => {
                i.classList.remove('border-green-500', 'bg-green-50');
            });
            // Scroll al inicio del formulario
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            console.log('Nuevo glosa iniciado');
        });
    }
});
// Contador de caracteres para el campo Tema
document.addEventListener('DOMContentLoaded', function () {
    const temaInput = document.getElementById('tema');
    const temaCount = document.getElementById('tema-count');

    if (temaInput && temaCount) {
        temaInput.addEventListener('input', function () {
            const length = this.value.length;
            temaCount.textContent = `${length} / 100 caracteres`;

            // Cambiar color según proximidad al límite
            if (length >= 90) {
                temaCount.classList.add('text-red-500', 'font-medium');
                temaCount.classList.remove('text-gray-500');
            } else if (length >= 75) {
                temaCount.classList.add('text-yellow-600', 'font-medium');
                temaCount.classList.remove('text-gray-500', 'text-red-500');
            } else {
                temaCount.classList.add('text-gray-500');
                temaCount.classList.remove('text-red-500', 'text-yellow-600', 'font-medium');
            }
        });
    }
});

// Contador de caracteres para el campo Introduccion
document.addEventListener('DOMContentLoaded', function () {
    const temaInput = document.getElementById('introduccion');
    const temaCount = document.getElementById('introduccion-count');

    if (temaInput && temaCount) {
        temaInput.addEventListener('input', function () {
            const length = this.value.length;
            temaCount.textContent = `${length} / 100 caracteres`;

            // Cambiar color según proximidad al límite
            if (length >= 90) {
                temaCount.classList.add('text-red-500', 'font-medium');
                temaCount.classList.remove('text-gray-500');
            } else if (length >= 75) {
                temaCount.classList.add('text-yellow-600', 'font-medium');
                temaCount.classList.remove('text-gray-500', 'text-red-500');
            } else {
                temaCount.classList.add('text-gray-500');
                temaCount.classList.remove('text-red-500', 'text-yellow-600', 'font-medium');
            }
        });
    }
});

// Contador de caracteres para el campo Accion
document.addEventListener('DOMContentLoaded', function () {
    const temaInput = document.getElementById('accion');
    const temaCount = document.getElementById('accion-count');

    if (temaInput && temaCount) {
        temaInput.addEventListener('input', function () {
            const length = this.value.length;
            temaCount.textContent = `${length} / 100 caracteres`;

            // Cambiar color según proximidad al límite
            if (length >= 90) {
                temaCount.classList.add('text-red-500', 'font-medium');
                temaCount.classList.remove('text-gray-500');
            } else if (length >= 75) {
                temaCount.classList.add('text-yellow-600', 'font-medium');
                temaCount.classList.remove('text-gray-500', 'text-red-500');
            } else {
                temaCount.classList.add('text-gray-500');
                temaCount.classList.remove('text-red-500', 'text-yellow-600', 'font-medium');
            }
        });
    }
});

// Contador de caracteres para el campo Desarrollo del resultado
document.addEventListener('DOMContentLoaded', function () {
    const temaInput = document.getElementById('desarrollo');
    const temaCount = document.getElementById('desarrollo-count');
    if (temaInput && temaCount) {
        temaInput.addEventListener('input', function () {
            const length = this.value.length;
            temaCount.textContent = `${length} / 3500 caracteres`;

            // Cambiar color según proximidad al límite
            if (length >= 3500) {
                temaCount.classList.add('text-red-500', 'font-medium');
                temaCount.classList.remove('text-gray-500');
            } else if (length >= 3250) {
                temaCount.classList.add('text-yellow-600', 'font-medium');
                temaCount.classList.remove('text-gray-500', 'text-red-500');
            } else {
                temaCount.classList.add('text-gray-500');
                temaCount.classList.remove('text-red-500', 'text-yellow-600', 'font-medium');
            }
        });
    }
});


// Prevenir múltiples clics en el botón de envío del formulario
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form[action*="registrarGlosaGobierno"]');
    
    if (form) {
        let isSubmitting = false;
        
        form.addEventListener('submit', function (e) {
            // Si ya se está enviando, prevenir el envío
            if (isSubmitting) {
                e.preventDefault();
                return false;
            }
            isSubmitting = true;
            // Obtener el botón de submit
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                // Guardar el texto original del botón
                const originalText = submitBtn.innerHTML;
                
                // Deshabilitar el botón
                submitBtn.disabled = true;
                
                submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                submitBtn.classList.remove('hover:bg-green-700', 'hover:shadow-lg', 'hover:-translate-y-0.5');
                submitBtn.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Enviando...
                `;
                
                setTimeout(function() {
                    const invalidFields = form.querySelectorAll(':invalid');
                    if (invalidFields.length > 0) {
                        isSubmitting = false;
                        submitBtn.disabled = false;
                        submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                        submitBtn.classList.add('hover:bg-green-700', 'hover:shadow-lg', 'hover:-translate-y-0.5');
                        submitBtn.innerHTML = originalText;
                    }
                }, 100);
            }
        });
    }
});