<div class="p-8 rounded-lg">
    <section>
        <!-- Image loader -->
        <div id='loader' class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center z-50" style='display: none;'>
            <i class="fa-solid text-rose-900 fa-spinner fa-spin-pulse text-9xl"></i>
        </div>

        <?php if (isset($errors)) { ?>
            <div class="p-4 text-sm text-red-800 mb-5 shadow-lg border z-50 rounded-lg bg-gray-50" role="alert">
                <span class="font-medium">¡Error!</span>
                <div class="alert alert-danger">
                    <?php echo $errors->listErrors(); ?>
                </div>
            </div>
        <?php } ?>

        <?php if (session()->getFlashdata('mensaje')): ?>
            <div id="flash-message" class="mb-4 rounded-lg border border-green-300 bg-green-100 px-4 py-3 text-green-800 transition-all duration-500 ease-in-out">
                <?= esc(session()->getFlashdata('mensaje')) ?>
            </div>
            <script>
                setTimeout(() => {
                    const msg = document.getElementById('flash-message');
                    if (msg) {
                        msg.classList.add('opacity-0');
                        msg.classList.add('translate-y-2');
                        setTimeout(() => msg.remove(), 500);
                    }
                }, 2000);
            </script>
        <?php endif; ?>

        <header class="flex items-center h-10 px-4 bg-gray-900 text-white rounded-t-lg">
            <div>
                <div class="flex pl-3 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="h-4 w-4 mt-0.5">
                        <linearGradient id="Om5yvFr6YrdlC0q2Vet0Ha" x1="-7.018" x2="39.387" y1="9.308" y2="33.533" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fac017"></stop>
                            <stop offset=".909" stop-color="#e1ab2d"></stop>
                        </linearGradient>
                        <path fill="url(#Om5yvFr6YrdlC0q2Vet0Ha)" d="M44.5,41h-41C2.119,41,1,39.881,1,38.5v-31C1,6.119,2.119,5,3.5,5h11.597	c1.519,0,2.955,0.69,3.904,1.877L21.5,10h23c1.381,0,2.5,1.119,2.5,2.5v26C47,39.881,45.881,41,44.5,41z"></path>
                        <linearGradient id="Om5yvFr6YrdlC0q2Vet0Hb" x1="5.851" x2="18.601" y1="9.254" y2="27.39" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fbfef3"></stop>
                            <stop offset=".909" stop-color="#e2e4e3"></stop>
                        </linearGradient>
                        <path fill="url(#Om5yvFr6YrdlC0q2Vet0Hb)" d="M2,25h20V11H4c-1.105,0-2-0.895-2-2V25z"></path>
                        <linearGradient id="Om5yvFr6YrdlC0q2Vet0Hc" x1="2" x2="22" y1="19" y2="19" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fbfef3"></stop>
                            <stop offset=".909" stop-color="#e2e4e3"></stop>
                        </linearGradient>
                        <path fill="url(#Om5yvFr6YrdlC0q2Vet0Hc)" d="M2,26h20V12H4c-1.105,0-2,0.895-2,2V26z"></path>
                        <linearGradient id="Om5yvFr6YrdlC0q2Vet0Hd" x1="16.865" x2="44.965" y1="39.287" y2="39.792" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#e3a917"></stop>
                            <stop offset=".464" stop-color="#d79c1e"></stop>
                        </linearGradient>
                        <path fill="url(#Om5yvFr6YrdlC0q2Vet0Hd)" d="M1,37.875V38.5C1,39.881,2.119,41,3.5,41h41c1.381,0,2.5-1.119,2.5-2.5v-0.625H1z"></path>
                        <linearGradient id="Om5yvFr6YrdlC0q2Vet0He" x1="-4.879" x2="35.968" y1="12.764" y2="30.778" gradientUnits="userSpaceOnUse">
                            <stop offset=".34" stop-color="#ffefb2"></stop>
                            <stop offset=".485" stop-color="#ffedad"></stop>
                            <stop offset=".652" stop-color="#ffe99f"></stop>
                            <stop offset=".828" stop-color="#fee289"></stop>
                            <stop offset="1" stop-color="#fed86b"></stop>
                        </linearGradient>
                        <path fill="url(#Om5yvFr6YrdlC0q2Vet0He)" d="M44.5,11h-23l-1.237,0.824C19.114,12.591,17.763,13,16.381,13H3.5C2.119,13,1,14.119,1,15.5	v22C1,38.881,2.119,40,3.5,40h41c1.381,0,2.5-1.119,2.5-2.5v-24C47,12.119,45.881,11,44.5,11z"></path>
                        <radialGradient id="Om5yvFr6YrdlC0q2Vet0Hf" cx="37.836" cy="49.317" r="53.875" gradientUnits="userSpaceOnUse">
                            <stop offset=".199" stop-color="#fec832"></stop>
                            <stop offset=".601" stop-color="#fcd667"></stop>
                            <stop offset=".68" stop-color="#fdda75"></stop>
                            <stop offset=".886" stop-color="#fee496"></stop>
                            <stop offset="1" stop-color="#ffe8a2"></stop>
                        </radialGradient>
                        <path fill="url(#Om5yvFr6YrdlC0q2Vet0Hf)" d="M44.5,40h-41C2.119,40,1,38.881,1,37.5v-21C1,15.119,2.119,14,3.5,14h13.256	c1.382,0,2.733-0.409,3.883-1.176L21.875,12H44.5c1.381,0,2.5,1.119,2.5,2.5v23C47,38.881,45.881,40,44.5,40z"></path>
                    </svg>
                    <span class="pl-2 pt-0.5 font-normal"><?php echo $current ?? 'Evidencia / Informes de Gobierno'; ?></span>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>/administrador/inicio" class="w-5 h-5 bg-red-500 rounded-md ml-auto text-white text-lg font-light hover:bg-blue-gray-light hover:cursor-pointer focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </a>
        </header>

        <div class="flex shadow-2xl" style="min-height: 18rem;">
            <!-- Sidebar -->
            <div class="sm:w-1/5 w-1/5 overflow-auto bg-gray-100">
                <div class="py-2 border-b-2">
                    <div class="flex pl-3 place-items-center">
                        <button id="myButton" class="flex place-items-center float-left submit-button pl-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" height="1em" viewBox="0 0 576 512">
                                <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                            </svg>
                            Inicio
                        </button>
                        <script type="text/javascript">
                            document.getElementById("myButton").onclick = function() {
                                location.href = "<?php echo base_url(); ?>/administrador/inicio";
                            };
                        </script>
                    </div>
                </div>
                <div class="py-2 pl-2">
                    <div class="flex pl-3 place-items-center">
                        <button class="flex place-items-center float-left submit-button pl-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-app-indicator" viewBox="0 0 16 16">
                                <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>
                            Evaluación
                        </button>
                    </div>
                </div>
                <div class="mt-2 px-5 border-b-2">
                    <a href="<?php echo base_url() . '/administrador/altaEvidencia'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file-circle-plus pr-1"></i>
                        Nueva evidencia
                    </a>
                    <a href="<?php echo base_url() . '/administrador/evidencias'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file pr-1"></i>
                        Gestión / Evaluación de evidencias
                    </a>
                    <a href="<?php echo base_url() . '/administrador/evaluacion'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file pr-1"></i>
                        Gestión / Evaluación al desempeño
                    </a>
                    <a href="<?php echo base_url() . '/administrador/informe'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file pr-1"></i>
                        Gestión / Informe de GOBIERNO
                    </a>
                    <a href="<?php echo base_url() . '/administrador/glosa'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file pr-1"></i>
                        Gestión / Glosa del Informe de Gobierno 2025
                    </a>
                </div>
                <div class="my-2 px-5">
                    <table class="table table-bordered sizeFontTable">
                        <tbody>
                            <tr>
                                <td tabindex="42" class="pt-4 align-middle text-center pr-2">
                                    <i class="fa-solid fa-paper-plane text-2xl text-rose-900"></i>
                                </td>
                                <td class="pt-4" tabindex="43"><a href="<?php echo base_url() . '/administrador/informes'; ?>" class="pl-4 mb-1 flex place-items-center text-emerald-600/100">
                                        Dashboard de Unidades</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Contenido Principal: Dashboard de Unidades -->
            <div class="w-full sm:w-4/5 mx-auto bg-white shadow-lg overflow-y-auto" style="max-height: calc(100vh - 200px);">
                <section class="container mx-auto px-6 py-6">
                    <!-- Header del Dashboard -->
                    <div class="mb-8 text-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">
                            <i class="fa-solid fa-building mr-2 text-emerald-600"></i>
                            Dashboard de Unidades Administrativas
                        </h2>
                        <p class="text-gray-600">Pase el cursor sobre cada unidad para ver los informes registrados</p>
                        <div class="mt-4 flex justify-center gap-4 text-sm">
                            <div class="flex items-center">
                                <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                                <span>Con informes</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-3 h-3 bg-gray-400 rounded-full mr-2"></span>
                                <span>Sin informes</span>
                            </div>
                        </div>
                    </div>

                    <!-- Filtros -->
                    <div class="mb-6 flex flex-wrap gap-4 justify-between items-center bg-gray-50 p-4 rounded-lg">
                        <div class="flex gap-4 flex-wrap">
                            <div class="flex items-center gap-2">
                                <label for="filterYear" class="text-sm font-medium text-gray-700">Año:</label>
                                <select id="filterYear" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 p-2">
                                    <option value="">Todos</option>
                                    <?php
                                    $currentYear = date('Y');
                                    for ($y = $currentYear; $y >= $currentYear - 3; $y--) {
                                        echo "<option value=\"$y\"" . ($y == $currentYear ? ' selected' : '') . ">$y</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="flex items-center gap-2">
                                <label for="filterEtapa" class="text-sm font-medium text-gray-700">Etapa:</label>
                                <select id="filterEtapa" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 p-2">
                                    <option value="">Todas</option>
                                    <option value="1">Etapa 1</option>
                                    <option value="2">Etapa 2</option>
                                    <option value="3">Etapa 3</option>
                                    <option value="4">Etapa 4</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <input type="text" id="searchUnidad" placeholder="Buscar unidad..." class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 p-2">
                        </div>
                    </div>

                    <!-- Grid de Unidades -->
                    <div id="unidadesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Las unidades se cargarán dinámicamente aquí -->
                    </div>

                    <!-- Loading State -->
                    <div id="loadingState" class="flex justify-center items-center py-20">
                        <i class="fa-solid fa-spinner fa-spin text-4xl text-emerald-600"></i>
                        <span class="ml-3 text-gray-600">Cargando unidades...</span>
                    </div>

                    <!-- Empty State -->
                    <div id="emptyState" class="hidden text-center py-20">
                        <i class="fa-solid fa-folder-open text-6xl text-gray-300 mb-4"></i>
                        <p class="text-gray-500 text-lg">No se encontraron unidades</p>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>

<!-- Modal para ver detalles del informe -->
<div id="informeModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b px-6 py-4 flex justify-between items-center">
            <h3 class="text-xl font-bold text-gray-800">
                <i class="fa-solid fa-file-lines mr-2 text-emerald-600"></i>
                Detalles del Informe
            </h3>
            <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition">
                <i class="fa-solid fa-times text-2xl"></i>
            </button>
        </div>
        <div id="modalContent" class="p-6">
            <!-- El contenido se cargará dinámicamente -->
        </div>
    </div>
</div>

<style>
    .unidad-card {
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid transparent;
    }

    .unidad-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border-color: #10b981;
    }

    .unidad-card .informes-list {
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .unidad-card:hover .informes-list {
        max-height: 400px;
        opacity: 1;
    }

    .badge-status {
        display: inline-flex;
        align-items: center;
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .badge-completado {
        background-color: #d1fae5;
        color: #065f46;
    }

    .badge-pendiente {
        background-color: #fef3c7;
        color: #92400e;
    }

    .badge-revision {
        background-color: #dbeafe;
        color: #1e40af;
    }
</style>

<script>
    // Datos de unidades (en producción, estos vendrían del backend)
    let unidadesData = [];
    let informesData = [];

    // Cargar datos al iniciar la página
    document.addEventListener('DOMContentLoaded', function() {
        loadUnidadesData();

        // Event listeners para filtros
        document.getElementById('filterYear').addEventListener('change', filterUnidades);
        document.getElementById('filterEtapa').addEventListener('change', filterUnidades);
        document.getElementById('searchUnidad').addEventListener('input', filterUnidades);
    });

    // Función para cargar las unidades desde el backend
    async function loadUnidadesData() {
        try {
            // Simular carga de datos (reemplazar con AJAX real)
            const response = await fetch('<?php echo base_url(); ?>/administrador/getUnidadesConInformes');
            const data = await response.json();

            unidadesData = data.unidades || [];
            informesData = data.informes || [];

            renderUnidades(unidadesData);
        } catch (error) {
            console.error('Error al cargar unidades:', error);
            // Datos de ejemplo para desarrollo
            loadMockData();
        }
    }

    // Renderizar las tarjetas de unidades
    function renderUnidades(unidades) {
        const grid = document.getElementById('unidadesGrid');
        const loading = document.getElementById('loadingState');
        const empty = document.getElementById('emptyState');

        loading.classList.add('hidden');

        if (unidades.length === 0) {
            grid.classList.add('hidden');
            empty.classList.remove('hidden');
            return;
        }

        grid.classList.remove('hidden');
        empty.classList.add('hidden');

        grid.innerHTML = unidades.map(unidad => {
            const informes = informesData.filter(inf => inf.id_unidad === unidad.id_unidad);
            const hasInformes = informes.length > 0;
            const statusColor = hasInformes ? 'bg-green-50 border-green-200' : 'bg-gray-50 border-gray-200';
            const statusIcon = hasInformes ? 'fa-check-circle text-green-500' : 'fa-circle text-gray-400';

            return `
            <div class="unidad-card ${statusColor} rounded-lg border-2 p-5 hover:shadow-xl">
                <div class="flex items-start justify-between mb-3">
                    <div class="flex-1">
                        <div class="flex items-center mb-2">
                            <i class="fa-solid ${statusIcon} mr-2"></i>
                            <span class="text-xs font-semibold text-gray-600 uppercase tracking-wide">${unidad.determinante}</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 leading-tight">
                            ${unidad.descripcion}
                        </h3>
                    </div>
                </div>

                <div class="flex items-center justify-between py-3 border-t border-gray-200 mt-3">
                    <div class="flex items-center">
                        <i class="fa-solid fa-file-alt text-emerald-600 mr-2"></i>
                        <span class="text-sm font-semibold text-gray-700">
                            ${informes.length} ${informes.length === 1 ? 'Informe' : 'Informes'}
                        </span>
                    </div>
                    ${hasInformes ? `
                        <button onclick="verDetalleUnidad(${unidad.id_unidad})"
                                class="text-emerald-600 hover:text-emerald-800 text-sm font-medium">
                            Ver detalles →
                        </button>
                    ` : ''}
                </div>

                ${hasInformes ? `
                    <div class="informes-list mt-4 pt-4 border-t border-gray-200" style="overflow-y: auto;">
                        <h4 class="text-sm font-semibold text-gray-700 mb-3">
                            <i class="fa-solid fa-list-ul mr-2"></i>Informes Registrados:
                        </h4>
                        <div class="space-y-2 max-h-64 overflow-y-auto">
                            ${informes.map(informe => `
                                <a href="<?php echo base_url() . '/administrador/detalle/${informe.id_informe}'; ?>"
                                   class="block bg-white rounded-lg p-3 shadow-sm hover:shadow-md transition hover:bg-gray-50">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 mb-1">
                                                <span class="text-sm font-semibold text-gray-700">
                                                    ${informe.anio} - Etapa ${informe.tema}
                                                </span>
                                                <span class="badge-status badge-${informe.estado}" style="text-transform: capitalize;">
                                                    ${getEstadoLabel(informe.estado)}
                                                </span>
                                            </div>
                                            ${informe.fecha ? `
                                                <p class="text-xs text-gray-500">
                                                    <i class="fa-solid fa-calendar mr-1"></i>
                                                    ${formatDate(informe.fecha)}
                                                </p>
                                            ` : ''}
                                        </div>
                                        <i class="fa-solid fa-chevron-right text-gray-400"></i>
                                    </div>
                                </a>
                            `).join('')}
                        </div>
                    </div>
                ` : `
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <p class="text-sm text-gray-500 text-center italic">
                            <i class="fa-solid fa-info-circle mr-1"></i>
                            Sin informes registrados
                        </p>
                    </div>
                `}
            </div>
        `;
        }).join('');
    }

    // Filtrar unidades
    function filterUnidades() {
        const year = document.getElementById('filterYear').value;
        const etapa = document.getElementById('filterEtapa').value;
        const search = document.getElementById('searchUnidad').value.toLowerCase();

        let filtered = unidadesData;

        // Filtrar por búsqueda de texto
        if (search) {
            filtered = filtered.filter(u =>
                u.descripcion.toLowerCase().includes(search) ||
                u.determinante.toLowerCase().includes(search)
            );
        }

        // Filtrar por año y etapa
        if (year || etapa) {
            filtered = filtered.filter(unidad => {
                const informes = informesData.filter(inf => {
                    let match = inf.id_unidad === unidad.id_unidad;
                    if (year) match = match && inf.anio == year;
                    if (etapa) match = match && inf.etapa == etapa;
                    return match;
                });
                return informes.length > 0;
            });
        }

        renderUnidades(filtered);
    }

    // Ver detalle de una unidad
    function verDetalleUnidad(idUnidad) {
        const unidad = unidadesData.find(u => u.id_unidad === idUnidad);
        const informes = informesData.filter(inf => inf.id_unidad === idUnidad);

        const content = `
        <div class="mb-6">
            <h4 class="text-2xl font-bold text-gray-800 mb-2">${unidad.descripcion}</h4>
            <p class="text-gray-600">Determinante: <span class="font-semibold">${unidad.determinante}</span></p>
        </div>

        <div class="mb-6">
            <h5 class="text-lg font-semibold text-gray-800 mb-4">Resumen de Informes</h5>
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-green-50 rounded-lg p-4 text-center">
                    <p class="text-3xl font-bold text-green-600">${informes.filter(i => i.estado === 'completado').length}</p>
                    <p class="text-sm text-gray-600 mt-1">Completados</p>
                </div>
                <div class="bg-yellow-50 rounded-lg p-4 text-center">
                    <p class="text-3xl font-bold text-yellow-600">${informes.filter(i => i.estado === 'pendiente').length}</p>
                    <p class="text-sm text-gray-600 mt-1">Pendientes</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-4 text-center">
                    <p class="text-3xl font-bold text-blue-600">${informes.filter(i => i.estado === 'revision').length}</p>
                    <p class="text-sm text-gray-600 mt-1">En Revisión</p>
                </div>
            </div>
        </div>

        <div>
            <h5 class="text-lg font-semibold text-gray-800 mb-4">Historial de Informes</h5>
            <div class="space-y-3">
                ${informes.map(informe => `
                    <div class="border rounded-lg p-4 hover:bg-gray-50 transition">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="text-lg font-semibold text-gray-800">
                                        ${informe.anio} - Etapa ${informe.etapa}
                                    </span>
                                    <span class="badge-status badge-${informe.estado}">
                                        ${getEstadoLabel(informe.estado)}
                                    </span>
                                </div>
                                ${informe.fecha ? `
                                    <p class="text-sm text-gray-600">
                                        <i class="fa-solid fa-calendar mr-2"></i>
                                        Fecha: ${formatDate(informe.fecha)}
                                    </p>
                                ` : '<p class="text-sm text-gray-500 italic">Sin fecha de entrega</p>'}
                            </div>
                            <button onclick="descargarInforme(${idUnidad}, ${informe.anio}, ${informe.etapa})"
                                    class="ml-4 text-emerald-600 hover:text-emerald-800">
                                <i class="fa-solid fa-download text-xl"></i>
                            </button>
                        </div>
                    </div>
                `).join('')}
            </div>
        </div>
    `;

        document.getElementById('modalContent').innerHTML = content;
        document.getElementById('informeModal').classList.remove('hidden');
    }

    // Descargar informe
    function descargarInforme(idUnidad, anio, etapa) {
        // Implementar la lógica de descarga real
        window.location.href = `<?php echo base_url(); ?>/administrador/informe/descargar/${idUnidad}/${anio}/${etapa}`;
    }

    // Cerrar modal
    function closeModal() {
        document.getElementById('informeModal').classList.add('hidden');
    }

    // Funciones auxiliares
    function getEstadoLabel(estado) {
        const labels = {
            'completado': 'Completado',
            'pendiente': 'Pendiente',
            'revision': 'En Revisión'
        };
        return labels[estado] || estado;
    }

    function formatDate(dateString) {
        if (!dateString) return 'N/A';
        const date = new Date(dateString);
        return date.toLocaleDateString('es-MX', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
    }

    // Cerrar modal al hacer clic fuera
    document.getElementById('informeModal')?.addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>