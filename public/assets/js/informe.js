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

    // === FUNCIONALIDAD DE ITEMS DE INFORME ===
    const informeItems = document.querySelectorAll('.informe-item');

    informeItems.forEach(item => {
        item.addEventListener('click', function () {
            // Remover selección de todos los items
            informeItems.forEach(i => {
                i.classList.remove('border-green-500', 'bg-green-50');
            });

            // Agregar selección al item clickeado
            this.classList.add('border-green-500', 'bg-green-50');

            const titulo = this.querySelector('h4').textContent;
            console.log('Informe seleccionado:', titulo);

            // Aquí puedes cargar los datos del informe en el formulario
            // Por ejemplo: cargarInforme(informeId);
        });
    });

    // === BOTÓN NUEVO INFORME ===
    const btnNuevoInforme = document.getElementById('btnNuevoInforme');
    const form = document.querySelector('form');

    if (btnNuevoInforme && form) {
        btnNuevoInforme.addEventListener('click', function () {
            // Limpiar el formulario
            form.reset();

            // Resetear contadores
            const contadores = ['tema', 'subtema', 'descripcion', 'contexto', 'accion'];
            contadores.forEach(id => {
                const counter = document.getElementById(`${id}-count`);
                if (counter) {
                    const maxLength = counter.textContent.split('/')[1].trim();
                    counter.textContent = `0 / ${maxLength}`;
                    counter.className = 'text-xs text-gray-500 mt-1 text-right';
                }
            });

            // Remover selección de items
            informeItems.forEach(i => {
                i.classList.remove('border-green-500', 'bg-green-50');
            });

            // Scroll al inicio del formulario
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

            console.log('Nuevo informe iniciado');
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

// Contador de caracteres para el campo Subtema
document.addEventListener('DOMContentLoaded', function () {
    const temaInput = document.getElementById('subtema');
    const temaCount = document.getElementById('subtema-count');

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

// Contador de caracteres para el campo Descripción del resultado
document.addEventListener('DOMContentLoaded', function () {
    const temaInput = document.getElementById('descripcion');
    const temaCount = document.getElementById('descripcion-count');

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

// Contador de caracteres para el campo Contexto
document.addEventListener('DOMContentLoaded', function () {
    const temaInput = document.getElementById('contexto');
    const temaCount = document.getElementById('contexto-count');
    if (temaInput && temaCount) {
        temaInput.addEventListener('input', function () {
            const length = this.value.length;
            temaCount.textContent = `${length} / 500 caracteres`;

            // Cambiar color según proximidad al límite
            if (length >= 450) {
                temaCount.classList.add('text-red-500', 'font-medium');
                temaCount.classList.remove('text-gray-500');
            } else if (length >= 375) {
                temaCount.classList.add('text-yellow-600', 'font-medium');
                temaCount.classList.remove('text-gray-500', 'text-red-500');
            } else {
                temaCount.classList.add('text-gray-500');
                temaCount.classList.remove('text-red-500', 'text-yellow-600', 'font-medium');
            }
        });
    }
});

// Contador de caracteres para el campo Acción
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

// Contador de caracteres para el campo Impacto
document.addEventListener('DOMContentLoaded', function () {
    const temaInput = document.getElementById('impacto');
    const temaCount = document.getElementById('impacto-count');
    if (temaInput && temaCount) {
        temaInput.addEventListener('input', function () {
            const length = this.value.length;
            temaCount.textContent = `${length} / 300 caracteres`;

            // Cambiar color según proximidad al límite
            if (length >= 270) {
                temaCount.classList.add('text-red-500', 'font-medium');
                temaCount.classList.remove('text-gray-500');
            } else if (length >= 225) {
                temaCount.classList.add('text-yellow-600', 'font-medium');
                temaCount.classList.remove('text-gray-500', 'text-red-500');
            } else {
                temaCount.classList.add('text-gray-500');
                temaCount.classList.remove('text-red-500', 'text-yellow-600', 'font-medium');
            }
        });
    }
});

// Contador de caracteres para el campo Territorio
document.addEventListener('DOMContentLoaded', function () {
    const temaInput = document.getElementById('territorio');
    const temaCount = document.getElementById('territorio-count');
    if (temaInput && temaCount) {
        temaInput.addEventListener('input', function () {
            const length = this.value.length;
            temaCount.textContent = `${length} / 250 caracteres`;

            // Cambiar color según proximidad al límite
            if (length >= 250) {
                temaCount.classList.add('text-red-500', 'font-medium');
                temaCount.classList.remove('text-gray-500');
            } else if (length >= 225) {
                temaCount.classList.add('text-yellow-600', 'font-medium');
                temaCount.classList.remove('text-gray-500', 'text-red-500');
            } else {
                temaCount.classList.add('text-gray-500');
                temaCount.classList.remove('text-red-500', 'text-yellow-600', 'font-medium');
            }
        });
    }
});

// Contador de caracteres para el campo Beneficiarios
document.addEventListener('DOMContentLoaded', function () {
    const temaInput = document.getElementById('beneficiarios');
    const temaCount = document.getElementById('beneficiarios-count');
    if (temaInput && temaCount) {
        temaInput.addEventListener('input', function () {
            const length = this.value.length;
            temaCount.textContent = `${length} / 150 caracteres`;

            // Cambiar color según proximidad al límite
            if (length >= 150) {
                temaCount.classList.add('text-red-500', 'font-medium');
                temaCount.classList.remove('text-gray-500');
            } else if (length >= 125) {
                temaCount.classList.add('text-yellow-600', 'font-medium');
                temaCount.classList.remove('text-gray-500', 'text-red-500');
            } else {
                temaCount.classList.add('text-gray-500');
                temaCount.classList.remove('text-red-500', 'text-yellow-600', 'font-medium');
            }
        });
    }
});

// Contador de caracteres para el campo Inversión
document.addEventListener('DOMContentLoaded', function () {
    const temaInput = document.getElementById('inversion');
    const temaCount = document.getElementById('inversion-count');
    if (temaInput && temaCount) {
        temaInput.addEventListener('input', function () {
            const length = this.value.length;
            temaCount.textContent = `${length} / 200 caracteres`;

            // Cambiar color según proximidad al límite
            if (length >= 200) {
                temaCount.classList.add('text-red-500', 'font-medium');
                temaCount.classList.remove('text-gray-500');
            } else if (length >= 175) {
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
    const temaInput = document.getElementById('desarrollo_resultado');
    const temaCount = document.getElementById('desarrollo_resultado-count');
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

// Contador de caracteres para el campo Conclusión de la temática
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('conclusionTematica');
    const counter = document.getElementById('conclusionTematica-count');
    if (input && counter) {
        input.addEventListener('input', function () {
            const length = this.value.length;
            counter.textContent = `${length} / 1900 caracteres`;

            // Cambiar color según proximidad al límite
            if (length >= 1710) {
                counter.classList.add('text-red-500', 'font-medium');
                counter.classList.remove('text-gray-500');
            } else if (length >= 1425) {
                counter.classList.add('text-yellow-600', 'font-medium');
                counter.classList.remove('text-gray-500', 'text-red-500');
            } else {
                counter.classList.add('text-gray-500');
                counter.classList.remove('text-red-500', 'text-yellow-600', 'font-medium');
            }
        });
    }
});

// Contador de caracteres para el campo Logros destacados
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('logrosDestacados');
    const counter = document.getElementById('logrosDestacados-count');
    if (input && counter) {
        input.addEventListener('input', function () {
            const length = this.value.length;
            counter.textContent = `${length} / 1900 caracteres`;

            // Cambiar color según proximidad al límite
            if (length >= 1710) {
                counter.classList.add('text-red-500', 'font-medium');
                counter.classList.remove('text-gray-500');
            } else if (length >= 1425) {
                counter.classList.add('text-yellow-600', 'font-medium');
                counter.classList.remove('text-gray-500', 'text-red-500');
            } else {
                counter.classList.add('text-gray-500');
                counter.classList.remove('text-red-500', 'text-yellow-600', 'font-medium');
            }
        });
    }
});