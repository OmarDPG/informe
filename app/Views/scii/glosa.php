<!--Container-->
<div class="container w-full mx-auto pt-20 pb-10">
    <div class="w-11/12 mx-auto">
        <!-- Layout con Sidebar -->
        <div class="flex flex-col lg:flex-row gap-6">

            <!-- Contenido Principal: Formulario -->
            <div class="lg:w-40 w-full bg-white rounded-lg shadow-lg overflow-hidden">
                <section class="bg-white rounded-lg shadow-lg">
                    <div class="px-4 sm:px-8 py-8" id="formContainer">
                        <!-- Header -->
                        <div class="mb-8 text-center">
                            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 uppercase tracking-wide">
                                Glosa del Informe de Gobierno
                            </h2>
                            <div class="mt-2 h-1 w-24 bg-green-500 mx-auto rounded-full"></div>
                        </div>
                        <!-- Form Container -->
                        <div class="max-w-4xl mx-auto">
                            <form method="POST" class="space-y-6" action="<?php echo base_url(); ?>/Scii/registrarGlosaGobierno" enctype="multipart/form-data">
                                <input type="hidden" name="glosa_id" id="glosa_id" value="<?= esc($glosaSeleccionado['id_glosa_gobierno'] ?? '') ?>">
                                <!-- Unidad Administrativa y Fecha de Corte -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="unidad_administrativa" class="block mb-2 text-sm font-medium text-gray-700">
                                            Unidad Administrativa
                                        </label>
                                        <input
                                            
                                            value="<?= esc($datos['nombre_unidad'] ?? '') ?>"
                                            readonly
                                            type="text"
                                            id="unidad_administrativa"
                                            name="unidad_administrativa"
                                            required
                                            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 cursor-not-allowed transition duration-200">
                                    </div>
                                    <div>
                                        <label for="fecha_corte" class="block mb-2 text-sm font-medium text-gray-700">
                                            Fecha de Corte
                                        </label>
                                        <input
                                            <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            value="<?= esc($glosaSeleccionada['fecha_corte'] ?? (date('Y') . '-12-31')) ?>"
                                            type="date"
                                            id="fecha_corte"
                                            name="fecha_corte"
                                            required
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200">
                                    </div>
                                </div>

                                <!-- Alineación con el PED y Orden de Prioridad -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Alineación con el PED -->
                                    <div>
                                        <label for="alineacionPED" class="block mb-2 text-sm font-medium text-gray-700">
                                            Alineación con el PED
                                        </label>
                                        <div class="relative">
                                            <select
                                                name="alineacionPED"
                                                id="alineacionPED"
                                                required
                                                <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                <option value="" disabled <?= empty($glosaSeleccionada['id_alineacion_ped']) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                <?php foreach ($lineas as $l): ?>
                                                    <option value="<?= $l['id'] ?>" <?= (isset($glosaSeleccionada['id_alineacion_ped']) && $glosaSeleccionada['id_alineacion_ped'] == $l['id']) ? 'selected' : '' ?>>
                                                        <?= esc($l['codigo']) ?> —
                                                        <?= esc($l['descripcion']) ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-400">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Orden de Prioridad -->
                                    <div>
                                        <label for="ordenPrioridad" class="block mb-2 text-sm font-medium text-gray-700">
                                            Orden de Prioridad
                                        </label>
                                        <div class="relative">
                                            <select
                                                name="ordenPrioridad"
                                                id="ordenPrioridad"
                                                required
                                                <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                <option value="" disabled <?= empty($glosaSeleccionada['orden_prioridad']) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                                    <option value="<?= $i ?>"
                                                        <?= (isset($glosaSeleccionada['orden_prioridad']) && (int)$glosaSeleccionada['orden_prioridad'] === $i) ? 'selected' : '' ?>>
                                                        <?= $i ?>
                                                    </option>
                                                <?php endfor; ?>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-400">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tema -->
                                <div>
                                    <label for="tema" class="block mb-2 text-sm font-medium text-gray-700">
                                        Tema <span class="text-gray-500 text-xs">(máximo 100 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <input
                                            <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            type="text"
                                            id="tema"
                                            name="tema"
                                            maxlength="100"
                                            required
                                            value="<?= esc($glosaSeleccionada['tema'] ?? '') ?>"
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese el tema de la glosa">
                                        <?php if (!empty($glosaSeleccionada['id_glosa_gobierno'])): ?>
                                        <button
                                            type="button"
                                            class="comment-btn absolute right-3 top-1/2 -translate-y-1/2 text-xl text-gray-400 hover:text-green-600 transition"
                                            data-field="tema"
                                            data-label="Tema"
                                            aria-label="Ver comentario correspondiente al campo Tema">
                                            <i class="fa-solid fa-eye"></i>
                                            <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                        </button>
                                        <?php endif; ?>
                                    </div>
                                    <p id="tema-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                </div>
                                <!-- Introducción al tema -->
                                <div>
                                    <label for="introduccion" class="block mb-2 text-sm font-medium text-gray-700">
                                        Introducción al tema <span class="text-gray-500 text-xs">(máximo 100 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <input
                                            <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            type="text"
                                            id="introduccion"
                                            name="introduccion"
                                            maxlength="100"
                                            required
                                            value="<?= esc($glosaSeleccionada['introduccion'] ?? '') ?>"
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese la introducción al tema">
                                        <?php if (!empty($glosaSeleccionada['id_glosa_gobierno'])): ?>
                                        <button
                                            type="button"
                                            class="comment-btn absolute right-3 top-1/2 -translate-y-1/2 text-xl text-gray-400 hover:text-green-600 transition"
                                            data-field="introduccion"
                                            data-label="Introducción"
                                            aria-label="Ver comentario correspondiente al campo Introduccion">
                                            <i class="fa-solid fa-eye"></i>
                                            <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                        <?php endif; ?>
                                    </div>
                                    <p id="introduccion-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                </div>
                                <!-- Acción -->
                                <div>
                                    <label for="accion" class="block mb-2 text-sm font-medium text-gray-700">
                                        Acción <span class="text-gray-500 text-xs">(máximo 100 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <input
                                            <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            type="text"
                                            id="accion"
                                            name="accion"
                                            maxlength="100"
                                            required
                                            value="<?= esc($glosaSeleccionada['accion'] ?? '') ?>"
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese la acción">
                                        <?php if (!empty($glosaSeleccionada['id_glosa_gobierno'])): ?>
                                        <button
                                            type="button"
                                            class="comment-btn absolute right-3 top-1/2 -translate-y-1/2 text-xl text-gray-400 hover:text-green-600 transition"
                                            data-field="accion"
                                            data-label="Acción"
                                            aria-label="Ver comentario correspondiente al campo Acción">
                                            <i class="fa-solid fa-eye"></i>
                                            <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                        <?php endif; ?>
                                    </div>
                                    <p id="accion-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                </div>
                                <!-- Desarrollo del resultado -->
                                <div>
                                    <label for="desarrollo" class="block mb-2 text-sm font-medium text-gray-700">
                                        Desarrollo del resultado <span class="text-gray-500 text-xs">(máximo 3500 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <textarea
                                            <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            id="desarrollo"
                                            name="desarrollo"
                                            maxlength="3500"
                                            required
                                            rows="18"
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese el desarrollo del resultado"><?= esc($glosaSeleccionada['desarrollo'] ?? '') ?></textarea>
                                        <?php if (!empty($glosaSeleccionada['id_glosa_gobierno'])): ?>
                                        <button
                                            type="button"
                                            class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                            data-field="desarrollo"
                                            data-label="Desarrollo del resultado"
                                            aria-label="Agregar comentario al campo Desarrollo del resultado">
                                            <i class="fa-solid fa-eye"></i>
                                            <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                        </button>
                                        <?php endif; ?>
                                    </div>
                                    <p id="desarrollo-count" class="text-xs text-gray-500 mt-1 text-right">0 / 3500 caracteres</p>
                                </div>
                                <!-- Programas derivados, ODS -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="alineacionProgramasDerivados" class="block mb-2 text-sm font-medium text-gray-700">
                                            Alineación con los programas derivados
                                        </label>
                                        <div class="relative">
                                            <select
                                                name="alineacionProgramasDerivados"
                                                id="alineacionProgramasDerivados"
                                                required
                                                <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                <option value="" disabled <?= empty($glosaSeleccionada['id_alineacion_programa_derivado']) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                <?php if ($datos['id_unidad'] == 1): ?>
                                                    <?php foreach ($lineasAgua as $la): ?>
                                                        <option value="<?= $la['id'] ?>" <?= (isset($glosaSeleccionada['id_alineacion_programa_derivado']) && $glosaSeleccionada['id_alineacion_programa_derivado'] == $la['id']) ? 'selected' : '' ?>>
                                                            <?= esc($la['codigo']) ?> — <?= esc($la['descripcion']) ?>
                                                        </option>
                                                    <?php endforeach; ?>

                                                <?php elseif ($datos['id_unidad'] != 1): ?>
                                                    <?php foreach ($lineasSocioambiental as $ls): ?>
                                                            <option value="<?= $ls['id'] ?>" <?= (isset($glosaSeleccionada['id_alineacion_programa_derivado']) && $glosaSeleccionada['id_alineacion_programa_derivado'] == $ls['id']) ? 'selected' : '' ?>>
                                                            <?= esc($ls['codigo']) ?> — <?= esc($ls['descripcion']) ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-400">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Alineación con los ODS -->
                                    <div>
                                        <label for="alineacionODS" class="block mb-2 text-sm font-medium text-gray-700">
                                            Alineación con los ODS
                                        </label>
                                        <div class="relative">
                                            <select
                                                name="alineacionODS"
                                                id="alineacionODS"
                                                required
                                                <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                <option value="" disabled <?= empty($glosaSeleccionada['id_alineacion_ods']) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                <?php foreach ($odsTemas as $ods): ?>
                                                    <option value="<?= $ods['id_tema'] ?>" <?= (isset($glosaSeleccionada['id_alineacion_ods']) && $glosaSeleccionada['id_alineacion_ods'] == $ods['id_tema']) ? 'selected' : '' ?>>
                                                        <?= $ods['codigo_meta'] ?> -
                                                        <?= $ods['tema'] ?>
                                                        (ODS <?= $ods['id_objetivo'] ?>: <?= $ods['objetivo'] ?>)
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-400">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Archivos complementarios -->
                                <div style="border: solid 1px #d1d5db; border-radius: 10px; padding: 10px;">
                                    <label for="alineacionODS" class="block mb-2 text-sm font-medium text-gray-700">
                                        Archivos complementarios:
                                    </label>

                                    <!-- Archivos Adjuntos -->
                                    <div class="grid grid-cols-6" style="gap:10px;" id="inputsFiles">
                                        <div>
                                            <label for="mapas" class="block mb-2 text-sm font-medium text-gray-700" style="text-align: center;">
                                                Mapas <span class="text-gray-500 text-xs">(Excel)</span>
                                            </label>
                                            <div class="relative">
                                                <input
                                                    <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                    type="file"
                                                    id="mapas"
                                                    name="mapas[]"
                                                    multiple
                                                    accept=".xls,.xlsx"
                                                    class="hidden"
                                                    onchange="updateFileNames(this)">
                                                <label
                                                    for="mapas"
                                                    class="flex items-center justify-center w-full px-4 py-3 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition duration-200 focus-within:ring-2 focus-within:ring-green-500 focus-within:border-green-500">
                                                    <div class="text-center">
                                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <div class="mt-2 flex text-sm text-gray-600">
                                                            <span class="relative font-medium text-green-600 hover:text-green-500">
                                                                Seleccionar archivos
                                                            </span>
                                                        </div>
                                                        <p class="text-xs text-gray-500 mt-1">Excel hasta 10MB</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- Lista de archivos seleccionados -->
                                            <div id="fileListMapas" class="mt-3 space-y-2 hidden"></div>
                                        </div>
                                        <div>
                                            <label for="graficas" class="block mb-2 text-sm font-medium text-gray-700" style="text-align: center;">
                                                Graficas <span class="text-gray-500 text-xs">(Excel)</span>
                                            </label>
                                            <div class="relative">
                                                <input
                                                    <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                    type="file"
                                                    id="graficas"
                                                    name="graficas[]"
                                                    multiple
                                                    accept=".xls,.xlsx"
                                                    class="hidden"
                                                    onchange="updateFileNames(this)">
                                                <label
                                                    for="graficas"
                                                    class="flex items-center justify-center w-full px-4 py-3 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition duration-200 focus-within:ring-2 focus-within:ring-green-500 focus-within:border-green-500">
                                                    <div class="text-center">
                                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <div class="mt-2 flex text-sm text-gray-600">
                                                            <span class="relative font-medium text-green-600 hover:text-green-500">
                                                                Seleccionar archivos
                                                            </span>
                                                        </div>
                                                        <p class="text-xs text-gray-500 mt-1">Excel hasta 10MB</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- Lista de archivos seleccionados -->
                                            <div id="fileListGraficas" class="mt-3 space-y-2 hidden"></div>
                                        </div>
                                        <div>
                                            <label for="cuadros" class="block mb-2 text-sm font-medium text-gray-700" style="text-align: center;">
                                                Cuadros <span class="text-gray-500 text-xs">(Excel)</span>
                                            </label>
                                            <div class="relative">
                                                <input
                                                    <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                    type="file"
                                                    id="cuadros"
                                                    name="cuadros[]"
                                                    multiple
                                                    accept=".xls,.xlsx"
                                                    class="hidden"
                                                    onchange="updateFileNames(this)">
                                                <label
                                                    for="cuadros"
                                                    class="flex items-center justify-center w-full px-4 py-3 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition duration-200 focus-within:ring-2 focus-within:ring-green-500 focus-within:border-green-500">
                                                    <div class="text-center">
                                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <div class="mt-2 flex text-sm text-gray-600">
                                                            <span class="relative font-medium text-green-600 hover:text-green-500">
                                                                Seleccionar archivos
                                                            </span>
                                                        </div>
                                                        <p class="text-xs text-gray-500 mt-1">Excel hasta 10MB</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- Lista de archivos seleccionados -->
                                            <div id="fileListCuadros" class="mt-3 space-y-2 hidden"></div>
                                        </div>
                                        <div>
                                            <label for="esquemas" class="block mb-2 text-sm font-medium text-gray-700" style="text-align: center;">
                                                Esquemas <span class="text-gray-500 text-xs">(PowerPoint)</span>
                                            </label>
                                            <div class="relative">
                                                <input
                                                    <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                    type="file"
                                                    id="esquemas"
                                                    name="esquemas[]"
                                                    multiple
                                                    accept=".ppt,.pptx"
                                                    class="hidden"
                                                    onchange="updateFileNames(this)">
                                                <label
                                                    for="esquemas"
                                                    class="flex items-center justify-center w-full px-4 py-3 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition duration-200 focus-within:ring-2 focus-within:ring-green-500 focus-within:border-green-500">
                                                    <div class="text-center">
                                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <div class="mt-2 flex text-sm text-gray-600">
                                                            <span class="relative font-medium text-green-600 hover:text-green-500">
                                                                Seleccionar archivos
                                                            </span>
                                                        </div>
                                                        <p class="text-xs text-gray-500 mt-1">PowerPoint hasta 10MB</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- Lista de archivos seleccionados -->
                                            <div id="fileListEsquemas" class="mt-3 space-y-2 hidden"></div>
                                        </div>
                                        <div>
                                            <label for="fotografias" class="block mb-2 text-sm font-medium text-gray-700" style="text-align: center;">
                                                Fotografias <span class="text-gray-500 text-xs">(ZIP, RAR)</span>
                                            </label>
                                            <div class="relative">
                                                <input
                                                    <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                    type="file"
                                                    id="fotografias"
                                                    name="fotografias[]"
                                                    multiple
                                                    accept=".zip,.rar"
                                                    class="hidden"
                                                    onchange="updateFileNames(this)">
                                                <label
                                                    for="fotografias"
                                                    class="flex items-center justify-center w-full px-4 py-3 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition duration-200 focus-within:ring-2 focus-within:ring-green-500 focus-within:border-green-500">
                                                    <div class="text-center">
                                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <div class="mt-2 flex text-sm text-gray-600">
                                                            <span class="relative font-medium text-green-600 hover:text-green-500">
                                                                Seleccionar archivos
                                                            </span>
                                                        </div>
                                                        <p class="text-xs text-gray-500 mt-1">ZIP o RAR hasta 10MB</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- Lista de archivos seleccionados -->
                                            <div id="fileListFotografias" class="mt-3 space-y-2 hidden"></div>
                                        </div>
                                        <div>
                                            <label for="resultados" class="block mb-2 text-sm font-medium text-gray-700" style="text-align: center;">
                                                Resultados <span class="text-gray-500 text-xs">(Word)</span>
                                            </label>
                                            <div class="relative">
                                                <input
                                                    <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                    type="file"
                                                    id="resultados"
                                                    name="resultados[]"
                                                    multiple
                                                    accept=".doc,.docx"
                                                    class="hidden"
                                                    onchange="updateFileNames(this)">
                                                <label
                                                    for="resultados"
                                                    class="flex items-center justify-center w-full px-4 py-3 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition duration-200 focus-within:ring-2 focus-within:ring-green-500 focus-within:border-green-500">
                                                    <div class="text-center">
                                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <div class="mt-2 flex text-sm text-gray-600">
                                                            <span class="relative font-medium text-green-600 hover:text-green-500">
                                                                Seleccionar archivos
                                                            </span>
                                                        </div>
                                                        <p class="text-xs text-gray-500 mt-1">Word hasta 10MB</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- Lista de archivos seleccionados -->
                                            <div id="fileListResultados" class="mt-3 space-y-2 hidden"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Botones de Acción -->
                                <div class="flex flex-col sm:flex-row gap-3 pt-4 border-t border-gray-200" style="gap: 1em;">
                                    <button
                                        <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                        type="submit"
                                        class="flex-1 bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-6 rounded-lg transition duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        <?= !empty($glosaSeleccionado['id_glosa_gobierno']) ? 'Actualizar Glosa' : 'Registrar Glosa' ?>
                                    </button>
                                    <button
                                        <?= (!empty($glosaSeleccionada['estado']) && $glosaSeleccionada['estado'] !== 'observado') ? 'disabled' : '' ?>
                                        type="reset"
                                        class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-3 px-6 rounded-lg transition duration-200 shadow-sm hover:shadow-md">
                                        Limpiar Formulario
                                    </button>
                                    <button
                                        type="button"
                                        onclick="window.location.href='<?php echo base_url(); ?>/scii/glosa';"
                                        id="nuevaGlosaBtn"
                                        class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-3 px-6 rounded-lg transition duration-200 shadow-sm hover:shadow-md">
                                        Nueva Glosa
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Sidebar / Aside -->
            <aside id="sidebar" class="">
                <!-- Lista de Glosas (ejemplo UI) -->
                <div class="p-4 space-y-3 max-h-96 overflow-y-auto">
                    <p class="text-xs font-semibold text-gray-500 uppercase mb-3">Recientes</p>

                    <?php if (!empty($glosas)): ?>
                        <?php foreach ($glosas as $glo): ?>

                            <?php
                            $estadoClases = match ($glo['estado']) {
                                'borrador' => 'bg-yellow-100 text-yellow-700',
                                'enviado'  => 'bg-blue-100 text-blue-700',
                                'aprobado' => 'bg-green-100 text-green-700',
                                default    => 'bg-gray-100 text-gray-700',
                            };
                            ?>

                            <a href="<?= base_url('scii/glosa/' . $glo['id_glosa_gobierno']) ?>"
                                class="glosa-item block p-3 border border-gray-200 rounded-lg hover:border-green-400 hover:shadow-md transition-all bg-white group">

                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-semibold text-sm text-gray-800 group-hover:text-green-600 transition-colors line-clamp-1">
                                        <?= esc($glo['tema']) ?>
                                    </h4>

                                    <span class="px-2 py-0.5 text-xs rounded-full font-medium <?= $estadoClases ?>">
                                        <?= ucfirst($glo['estado']) ?>
                                    </span>
                                </div>

                                <div class="flex justify-between items-center text-xs text-gray-500">
                                    <span><?= date('d/m/Y', strtotime($glo['created_at'])) ?></span>
                                    <span class="text-green-600 font-medium opacity-0 group-hover:opacity-100 transition-opacity">
                                        Ver →
                                    </span>
                                </div>
                            </a>

                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Estado vacío -->
                        <div class="text-center py-8 px-4">
                            <svg class="w-16 h-16 mx-auto text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <p class="text-sm text-gray-500 font-medium">No hay glosas</p>
                            <p class="text-xs text-gray-400 mt-1">Crea tu primer glosa</p>
                        </div>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
    </div>
</div>
<div
    id="commentModal"
    class="hidden fixed inset-0 bg-black/40 z-50 flex items-center justify-center"
    role="dialog"
    aria-modal="true"
    aria-labelledby="modalTitle">
    <div class="bg-white w-full max-w-md rounded-lg shadow-lg p-5 transform transition-all">
        <h3 id="modalTitle" class="text-lg font-semibold mb-2">
            Comentario
        </h3>

        <p class="text-sm text-gray-600 mb-3" id="modalFieldLabel"></p>

        <div id="comentarioAnteriorContainer" class="mb-3 hidden">
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Observación:
            </label>
            <div id="comentarioAnterior"
                class="bg-gray-100 border border-gray-200 p-3 rounded text-sm text-gray-800">
            </div>
        </div>

        <textarea
            id="commentText"
            rows="4"
            class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
            placeholder="Escribe tu comentario aquí..."></textarea>

        <div class="flex justify-end gap-2 mt-4">
            <button
                type="button"
                class="px-4 py-2 text-sm text-gray-600 hover:text-gray-800"
                id="cancelComment">
                Cancelar
            </button>

            <button
                type="button"
                class="px-4 py-2 text-sm bg-green-600 text-white rounded-md hover:bg-green-700"
                id="saveComment">
                Guardar
            </button>
        </div>
    </div>
</div>
<!--/container-->

<script>
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
        setupCharacterCounter('introduccion', 'introduccion-count', 100);
        setupCharacterCounter('accion', 'accion-count', 100);
        setupCharacterCounter('desarrollo', 'desarrollo-count', 3500);
        
        // Actualizar contadores iniciales para valores pre-cargados
        const fieldsToUpdate = [
            'tema', 'introduccion', 'accion', 'desarrollo'
        ];

        fieldsToUpdate.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (field && field.value) {
                const event = new Event('input');
                field.dispatchEvent(event);
            }
        });
    });

    // // Función para mostrar los archivos seleccionados
    // function updateFileNames(input) {
    //     const inputId = input.id;
    //     const fileListId = 'fileList' + inputId.charAt(0).toUpperCase() + inputId.slice(1);
    //     const fileList = document.getElementById(fileListId);

    //     if (!fileList) return;

    //     fileList.innerHTML = '';

    //     if (input.files.length > 0) {
    //         fileList.classList.remove('hidden');

    //         Array.from(input.files).forEach((file, index) => {
    //             const fileItem = document.createElement('div');
    //             fileItem.className = 'flex items-center justify-between p-2 bg-gray-50 rounded text-xs';
    //             fileItem.innerHTML = `
    //                 <span class="truncate flex-1 text-gray-700">
    //                     <i class="fa-solid fa-file mr-1 text-green-600"></i>
    //                     ${file.name}
    //                 </span>
    //                 <span class="text-gray-500 ml-2">${(file.size / 1024).toFixed(1)} KB</span>
    //             `;
    //             fileList.appendChild(fileItem);
    //         });
    //     } else {
    //         fileList.classList.add('hidden');
    //     }
    // }

    // // Variables globales para el modal
    // let archivoActual = {
    //     url: '',
    //     nombre: ''
    // };

    // // Función para ver archivo en modal
    // function verArchivo(ruta, nombre) {
    //     const modal = document.getElementById('modalArchivo');
    //     const titulo = document.getElementById('modalTitulo');
    //     const contenido = document.getElementById('modalContenido');

    //     // Normalizar la ruta reemplazando backslashes por forward slashes
    //     const rutaNormalizada = ruta.replace(/\\/g, '/');
    //     archivoActual = {
    //         url: '<?= base_url() ?>/' + rutaNormalizada,
    //         nombre: nombre
    //     };

    //     titulo.textContent = nombre;
    //     modal.classList.remove('hidden');

    //     const extension = nombre.split('.').pop().toLowerCase();

    //     // Determinar el tipo de visualización según la extensión
    //     if (['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'].includes(extension)) {
    //         contenido.innerHTML = `<img src="${archivoActual.url}" alt="${nombre}" class="max-w-full h-auto rounded-lg shadow-lg">`;
    //     } else if (extension === 'pdf') {
    //         contenido.innerHTML = `<iframe src="${archivoActual.url}" class="w-full h-96 border-0 rounded-lg"></iframe>`;
    //     } else if (['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'].includes(extension)) {
    //         contenido.innerHTML = `
    //             <div class="text-center py-8">
    //                 <i class="fa-solid fa-file-${extension.includes('doc') ? 'word' : extension.includes('xls') ? 'excel' : 'powerpoint'} text-6xl text-blue-500 mb-4"></i>
    //                 <p class="text-gray-700 font-medium mb-2">${nombre}</p>
    //                 <p class="text-gray-500 text-sm mb-4">Este tipo de archivo no se puede previsualizar en el navegador</p>
    //                 <button onclick="descargarArchivoModal()" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
    //                     <i class="fa-solid fa-download mr-2"></i>Descargar archivo
    //                 </button>
    //             </div>`;
    //     } else if (['zip', 'rar', '7z'].includes(extension)) {
    //         contenido.innerHTML = `
    //             <div class="text-center py-8">
    //                 <i class="fa-solid fa-file-zipper text-6xl text-yellow-500 mb-4"></i>
    //                 <p class="text-gray-700 font-medium mb-2">${nombre}</p>
    //                 <p class="text-gray-500 text-sm mb-4">Archivo comprimido</p>
    //                 <button onclick="descargarArchivoModal()" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
    //                     <i class="fa-solid fa-download mr-2"></i>Descargar archivo
    //                 </button>
    //             </div>`;
    //     } else {
    //         contenido.innerHTML = `
    //             <div class="text-center py-8">
    //                 <i class="fa-solid fa-file text-6xl text-gray-400 mb-4"></i>
    //                 <p class="text-gray-700 font-medium mb-2">${nombre}</p>
    //                 <p class="text-gray-500 text-sm mb-4">No se puede previsualizar este tipo de archivo</p>
    //                 <button onclick="descargarArchivoModal()" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
    //                     <i class="fa-solid fa-download mr-2"></i>Descargar archivo
    //                 </button>
    //             </div>`;
    //     }
    // }

    // // Función para cerrar el modal
    // function cerrarModal() {
    //     const modal = document.getElementById('modalArchivo');
    //     modal.classList.add('hidden');
    //     archivoActual = {
    //         url: '',
    //         nombre: ''
    //     };
    // }

    // // Cerrar modal al hacer clic fuera de él
    // document.getElementById('modalArchivo').addEventListener('click', function(e) {
    //     if (e.target === this) {
    //         cerrarModal();
    //     }
    // });

    // // Función para descargar archivo desde el modal
    // function descargarArchivoModal() {
    //     if (archivoActual.url) {
    //         descargarArchivo(archivoActual.url, archivoActual.nombre);
    //     }
    // }

    // // Función para descargar un archivo individual
    // function descargarArchivo(url, nombre) {
    //     const link = document.createElement('a');
    //     link.href = url;
    //     link.download = nombre;
    //     link.target = '_blank';
    //     document.body.appendChild(link);
    //     link.click();
    //     document.body.removeChild(link);
    // }

    // // Función para descargar todos los archivos
    // function descargarTodosArchivos() {
    //     const archivos = <?= json_encode($archivos ?? [], JSON_UNESCAPED_SLASHES) ?>;

    //     if (archivos.length === 0) {
    //         alert('No hay archivos para descargar');
    //         return;
    //     }

    //     // Mostrar confirmación
    //     if (confirm(`¿Desea descargar todos los archivos (${archivos.length} archivos)?`)) {
    //         // Descargar cada archivo con un pequeño delay para evitar bloqueos del navegador
    //         archivos.forEach((archivo, index) => {
    //             setTimeout(() => {
    //                 // Normalizar la ruta
    //                 const ruta = archivo.ruta_archivo.replace(/\\/g, '/');
    //                 const url = '<?= base_url() ?>/' + ruta;
    //                 descargarArchivo(url, archivo.nombre_archivo);
    //             }, index * 300); // 300ms de delay entre cada descarga
    //         });
    //     }
    // }

    // Funcionalidad del botón "Nueva Glosa" en el sidebar
    document.addEventListener('DOMContentLoaded', function() {
        const btnNuevaGlosa = document.getElementById('btnNuevaGlosa');
        if (btnNuevaGlosa) {
            btnNuevaGlosa.addEventListener('click', function() {
                window.location.href = '<?php echo base_url(); ?>/Scii/glosasGobierno';
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
            'introduccion',
            'accion',
            'desarrollo',
            'alineacionProgramasDerivados',
            'alineacionODS',            
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
    const comentarioAnteriorContainer = document.getElementById('comentarioAnteriorContainer');
    const comentarioAnterior = document.getElementById('comentarioAnterior');

    let currentField = null;
    let currentButton = null;

    // ID de la glosa actual
    const idGlosa = <?= $glosaSeleccionada['id_glosa_gobierno'] ?? 0 ?>;

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
                const comentario = comments[currentField] || '';
                if (comentario) {
                    comentarioAnteriorContainer.classList.remove('hidden');
                    comentarioAnterior.textContent = comentario;

                    commentText.value = '';
                } else {
                    comentarioAnteriorContainer.classList.add('hidden');
                    commentText.value = '';
                }

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
                const response = await fetch('<?= base_url() ?>/scii/guardarComentarioGlosa', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        'id_glosa_gobierno': idGlosa,
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
            // if (!idInforme) return;
            // const idInforme = document.getElementById('informe_id').value;
            try {
                const response = await fetch("<?= site_url('scii/obtenerComentariosGlosa') ?>?id_glosa_gobierno=<?= esc($glosaSeleccionada['id_glosa_gobierno'] ?? '') ?>");
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
</script>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>/assets/js/glosa.js"></script>