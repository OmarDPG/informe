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
                                Informe de Gobierno
                            </h2>
                            <div class="mt-2 h-1 w-24 bg-green-500 mx-auto rounded-full"></div>
                        </div>
                        <!-- Form Container -->
                        <div class="max-w-4xl mx-auto">
                            <?php if (session()->getFlashdata('error')): ?>
                                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                        </svg>
                                        <strong class="font-bold">Error: </strong>
                                        <span class="ml-1"><?= session()->getFlashdata('error') ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (session()->getFlashdata('success')): ?>
                                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        <strong class="font-bold">Éxito: </strong>
                                        <span class="ml-1"><?= session()->getFlashdata('success') ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <form method="POST" class="space-y-6" action="<?php echo base_url(); ?>/Scii/registrarInformeGobierno" enctype="multipart/form-data">
                                <input type="hidden" name="informe_id" id="informe_id" value="<?= esc($informeSeleccionado['id_informe'] ?? '') ?>">
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
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            value="<?= old('fecha_corte', $informeSeleccionado['fecha_corte'] ?? '') ?>"
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
                                                <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                <option value="" disabled <?= empty(old('alineacionPED', $informeSeleccionado['id_alineacion_ped'] ?? '')) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                <?php foreach ($lineas as $l): ?>
                                                    <option value="<?= $l['id'] ?>" <?= (old('alineacionPED', $informeSeleccionado['id_alineacion_ped'] ?? '') == $l['id']) ? 'selected' : '' ?>>
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
                                                <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                <option value="" disabled <?= empty(old('ordenPrioridad', $informeSeleccionado['orden_prioridad'] ?? '')) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                                    <option value="<?= $i ?>"
                                                        <?= (old('ordenPrioridad', $informeSeleccionado['orden_prioridad'] ?? '') == $i) ? 'selected' : '' ?>>
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
                                        Tema
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="Tiene por finalidad organizar y agrupar la información por tema, por lo que varios resultados podrán corresponder al mismo. No deberá contener más de 6 palabras."></i>
                                        <span class="text-gray-500 text-xs">(máximo 100 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <input
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            type="text"
                                            id="tema"
                                            name="tema"
                                            maxlength="100"
                                            required
                                            value="<?= old('tema', $informeSeleccionado['tema'] ?? '') ?>"
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese el tema del informe">
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
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
                                <!-- Subtema -->
                                <div>
                                    <label for="subtema" class="block mb-2 text-sm font-medium text-gray-700">
                                        Subtema
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="Tiene por finalidad organizar y agrupar la información por Subtema, por lo que varios resultados podrán corresponder al mismo. No deberá contener más de 6 palabras."></i>
                                        <span class="text-gray-500 text-xs">(máximo 100 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <input
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            type="text"
                                            id="subtema"
                                            name="subtema"
                                            maxlength="100"
                                            required
                                            value="<?= old('subtema', $informeSeleccionado['subtema'] ?? '') ?>"
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese el subtema del informe">
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
                                            <button
                                                type="button"
                                                class="comment-btn absolute right-3 top-1/2 -translate-y-1/2 text-xl text-gray-400 hover:text-green-600 transition"
                                                data-field="subtema"
                                                data-label="Subtema"
                                                aria-label="Ver comentario correspondiente al campo Subtema">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                            <?php endif; ?>
                                    </div>
                                    <p id="subtema-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                </div>
                                <!-- Descripción del resultado -->
                                <div>
                                    <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-700">
                                        Descripción del resultado
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="Contexto + Acción + Impacto + Territorio + Beneficiarios + Inversión"></i>
                                        <span class="text-gray-500 text-xs">(Contexto + Acción + Impacto + Territorio + Beneficiarios + Inversión)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <input
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            type="text"
                                            id="descripcion"
                                            name="descripcion"
                                            maxlength="100"
                                            required
                                            value="<?= old('descripcion', $informeSeleccionado['descripcion_resultado'] ?? '') ?>"
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese la descripción del informe">
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
                                            <button
                                                type="button"
                                                class="comment-btn absolute right-3 top-1/2 -translate-y-1/2 text-xl text-gray-400 hover:text-green-600 transition"
                                                data-field="descripcion"
                                                data-label="Descripción del resultado"
                                                aria-label="Ver comentario correspondiente al campo Descripción del resultado">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                            <?php endif; ?>
                                    </div>
                                    <p id="descripcion-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                </div>
                                <!-- Contexto -->
                                <div>
                                    <label for="contexto" class="block mb-2 text-sm font-medium text-gray-700">
                                        Contexto
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="Refiere a incluir la descripción general de la acción o su objetivo. No deberá contener más de un párrafo."></i>
                                        <span class="text-gray-500 text-xs">(máximo 500 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <textarea
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            id="contexto"
                                            name="contexto"
                                            maxlength="500"
                                            rows="5"
                                            required
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200 resize-none"
                                            placeholder="Ingrese el contexto del informe"><?= old('contexto', $informeSeleccionado['contexto'] ?? '') ?></textarea>
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
                                            <button
                                                type="button"
                                                class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                data-field="contexto"
                                                data-label="Contexto"
                                                aria-label="Agregar comentario al campo Contexto">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <p id="contexto-count" class="text-xs text-gray-500 mt-1 text-right">0 / 500 caracteres</p>
                                </div>
                                <!-- Acción -->
                                <div>
                                    <label for="accion" class="block mb-2 text-sm font-medium text-gray-700">
                                        Acción
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="Nombre de la acción, convenio, proyecto o programa."></i>
                                        <span class="text-gray-500 text-xs">(máximo 100 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <input
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            type="text"
                                            id="accion"
                                            name="accion"
                                            maxlength="100"
                                            required
                                            value="<?= old('accion', $informeSeleccionado['accion'] ?? '') ?>"
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese la descripción del informe">
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
                                            <button
                                                type="button"
                                                class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                data-field="accion"
                                                data-label="Acción"
                                                aria-label="Agregar comentario al campo Acción">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <p id="accion-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                </div>
                                <!-- Impacto -->
                                <div>
                                    <label for="impacto" class="block mb-2 text-sm font-medium text-gray-700">
                                        Impacto
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="Descripción de las acciones y resultados, detallando el mecanismo de implementación y destacando los beneficios obtenidos para la población, así como el objetivo y el alcance del proyecto."></i>
                                        <span class="text-gray-500 text-xs">(máximo 300 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <textarea
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            id="impacto"
                                            name="impacto"
                                            maxlength="300"
                                            rows="3"
                                            required
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese la descripción del informe"><?= old('impacto', $informeSeleccionado['impacto'] ?? '') ?></textarea>
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
                                            <button
                                                type="button"
                                                class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                data-field="impacto"
                                                data-label="Impacto"
                                                aria-label="Agregar comentario al campo Impacto">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <p id="impacto-count" class="text-xs text-gray-500 mt-1 text-right">0 / 300 caracteres</p>
                                </div>
                                <!-- Territorio -->
                                <div>
                                    <label for="territorio" class="block mb-2 text-sm font-medium text-gray-700">
                                        Territorio
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="Precisar el lugar donde se realizó la obra o acción, señalando la localidad, municipio o el lugar físico del evento para la población, objetivo y alcance."></i>
                                        <span class="text-gray-500 text-xs">(máximo 250 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <textarea
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            id="territorio"
                                            name="territorio"
                                            maxlength="250"
                                            rows="3"
                                            required
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese la descripción del informe"><?= old('territorio', $informeSeleccionado['territorio'] ?? '') ?></textarea>
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
                                            <button
                                                type="button"
                                                class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                data-field="territorio"
                                                data-label="Territorio"
                                                aria-label="Agregar comentario al campo Territorio">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <p id="territorio-count" class="text-xs text-gray-500 mt-1 text-right">0 / 250 caracteres</p>
                                </div>
                                <!-- Beneficiarios -->
                                <div>
                                    <label for="beneficiarios" class="block mb-2 text-sm font-medium text-gray-700">
                                        Beneficiarios
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="Mencionar la población favorecida, así como la atención a las desigualdades que existen en el territorio, encaminadas a todos los sectores de población."></i>
                                        <span class="text-gray-500 text-xs">(máximo 150 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <input
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            type="text"
                                            id="beneficiarios"
                                            name="beneficiarios"
                                            maxlength="150"
                                            required
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese la descripción del informe"
                                            value="<?= old('beneficiarios', $informeSeleccionado['beneficiarios'] ?? '') ?>">
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
                                            <button
                                                type="button"
                                                class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                data-field="beneficiarios"
                                                data-label="Beneficiarios"
                                                aria-label="Agregar comentario al campo Beneficiarios">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <p id="beneficiarios-count" class="text-xs text-gray-500 mt-1 text-right">0 / 150 caracteres</p>
                                </div>
                                <!-- Inversión -->
                                <div>
                                    <label for="inversion" class="block mb-2 text-sm font-medium text-gray-700">
                                        Inversión
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="Presupuesto ejercido para cumplir con las acciones realizadas (señalar si hay coparticipación con otros entes)."></i>
                                        <span class="text-gray-500 text-xs">(máximo 200 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <textarea
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            id="inversion"
                                            name="inversion"
                                            maxlength="200"
                                            rows="3"
                                            required
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese la descripción del informe"><?= old('inversion', $informeSeleccionado['inversion'] ?? '') ?></textarea>
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
                                            <button
                                                type="button"
                                                class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                data-field="inversion"
                                                data-label="Inversión"
                                                aria-label="Agregar comentario al campo Inversión">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <p id="inversion-count" class="text-xs text-gray-500 mt-1 text-right">0 / 200 caracteres</p>
                                </div>
                                <!-- Desarrollo del resultado -->
                                <div>
                                    <label for="desarrollo_resultado" class="block mb-2 text-sm font-medium text-gray-700">
                                    Desarrollo del resultado
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="En este campo se redactará el resultado, cuenta con un máximo de 5 mil caracteres y deberá atender los lineamientos de texto y redacción que se mencionan más adelante."></i>
                                        <span class="text-gray-500 text-xs">(máximo 3500 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <textarea
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            id="desarrollo_resultado"
                                            name="desarrollo_resultado"
                                            maxlength="3500"
                                            required
                                            rows="18"
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese la descripción del informe"><?= old('desarrollo_resultado', $informeSeleccionado['desarrollo_resultado'] ?? '') ?></textarea>
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
                                            <button
                                                type="button"
                                                class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                data-field="desarrollo_resultado"
                                                data-label="Desarrollo del resultado"
                                                aria-label="Agregar comentario al campo Desarrollo del resultado">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <p id="desarrollo_resultado-count" class="text-xs text-gray-500 mt-1 text-right">0 / 3500 caracteres</p>
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
                                                <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                <option value="" disabled <?= empty(old('alineacionProgramasDerivados', $informeSeleccionado['id_alineacion_programa_derivado'] ?? '')) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                <?php if ($datos['id_unidad'] == 1): ?>
                                                    <?php foreach ($lineasAgua as $la): ?>
                                                        <option value="<?= $la['id'] ?>" <?= (old('alineacionProgramasDerivados', $informeSeleccionado['id_alineacion_programa_derivado'] ?? '') == $la['id']) ? 'selected' : '' ?>>
                                                            <?= esc($la['codigo']) ?> — <?= esc($la['descripcion']) ?>
                                                        </option>
                                                    <?php endforeach; ?>

                                                <?php elseif ($datos['id_unidad'] != 1): ?>
                                                    <?php foreach ($lineasSocioambiental as $ls): ?>
                                                        <option value="<?= $ls['id'] ?>" <?= (old('alineacionProgramasDerivados', $informeSeleccionado['id_alineacion_programa_derivado'] ?? '') == $ls['id']) ? 'selected' : '' ?>>
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
                                                <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                <option value="" disabled <?= empty(old('alineacionODS', $informeSeleccionado['id_alineacion_ods'] ?? '')) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                <?php foreach ($odsTemas as $ods): ?>
                                                    <option value="<?= $ods['id_tema'] ?>" <?= (old('alineacionODS', $informeSeleccionado['id_alineacion_ods'] ?? '') == $ods['id_tema']) ? 'selected' : '' ?>>
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
                                                    <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                    type="file"
                                                    id="mapas"
                                                    name="mapas[]"
                                                    multiple
                                                    accept=".xls,.xlsx,.zip"
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
                                                        <p class="text-xs text-gray-500 mt-1">Excel hasta 30MB</p>
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
                                                    <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                    type="file"
                                                    id="graficas"
                                                    name="graficas[]"
                                                    multiple
                                                    accept=".xls,.xlsx,.zip"
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
                                                        <p class="text-xs text-gray-500 mt-1">Excel hasta 30MB</p>
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
                                                    <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                    type="file"
                                                    id="cuadros"
                                                    name="cuadros[]"
                                                    multiple
                                                    accept=".xls,.xlsx,.zip"
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
                                                        <p class="text-xs text-gray-500 mt-1">Excel hasta 30MB</p>
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
                                                    <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                    type="file"
                                                    id="esquemas"
                                                    name="esquemas[]"
                                                    multiple
                                                    accept=".ppt,.pptx,.zip"
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
                                                        <p class="text-xs text-gray-500 mt-1">PowerPoint hasta 30MB</p>
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
                                                    <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
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
                                                        <p class="text-xs text-gray-500 mt-1">ZIP o RAR hasta 30MB</p>
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
                                                    <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
                                                    type="file"
                                                    id="resultados"
                                                    name="resultados[]"
                                                    multiple
                                                    accept=".doc,.docx,.zip"
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
                                                        <p class="text-xs text-gray-500 mt-1">Word hasta 30MB</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- Lista de archivos seleccionados -->
                                            <div id="fileListResultados" class="mt-3 space-y-2 hidden"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Conclusión de la temática -->
                                <div>
                                    <label for="conclusionTematica" class="block mb-2 text-sm font-medium text-gray-700">
                                    Conclusión de la temática
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="Es importante que en esta redacción se destaquen los avances más significativos del año, así como proporcionar recomendaciones futuras en la materia"></i>
                                        <span class="text-gray-500 text-xs">(máximo 1900 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <textarea
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            id="conclusionTematica"
                                            name="conclusionTematica"
                                            maxlength="1900"
                                            rows="5"
                                            required
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese la descripción del informe"><?= old('conclusionTematica', $informeSeleccionado['conclusion_tematica'] ?? '') ?></textarea>
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
                                            <button
                                                type="button"
                                                class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                data-field="conclusionTematica"
                                                data-label="Conclusión de la temática"
                                                aria-label="Agregar comentario al campo Conclusión de la temática">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <p id="conclusionTematica-count" class="text-xs text-gray-500 mt-1 text-right">0 / 1900 caracteres</p>
                                </div>
                                <!-- Logros destacados de la temática -->
                                <div>
                                    <label for="logrosDestacados" class="block mb-2 text-sm font-medium text-gray-700">
                                    Logros destacados de la temática
                                        <i class="fa-solid fa-circle-info text-blue-500 cursor-help ml-1 tooltip-trigger" 
                                           data-tooltip="Finalmente, en esta sección se destacan los logros más relevantes de la temática desarrollada durante los últimos 2 años de Gobierno."></i>
                                        <span class="text-gray-500 text-xs">(máximo 3500 caracteres)</span>
                                    </label>
                                    <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                        <textarea
                                            <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'readonly' : '' ?>
                                            id="logrosDestacados"
                                            name="logrosDestacados"
                                            maxlength="1900"
                                            required
                                            rows="5"
                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                            placeholder="Ingrese la descripción del informe"><?= old('logrosDestacados', $informeSeleccionado['logros_destacados'] ?? '') ?></textarea>
                                        <?php if (!empty($informeSeleccionado['id_informe'])): ?>
                                            <button
                                                type="button"
                                                class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                data-field="logrosDestacados"
                                                data-label="Logros destacados de la temática"
                                                aria-label="Agregar comentario al campo Logros destacados de la temática">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <p id="logrosDestacados-count" class="text-xs text-gray-500 mt-1 text-right">0 / 1900 caracteres</p>
                                </div>
                                <!-- Botones de Acción -->
                                <div class="flex flex-col sm:flex-row gap-3 pt-4 border-t border-gray-200" style="gap: 1em;">
                                    <button
                                        <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
                                        type="submit"
                                        class="flex-1 bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-6 rounded-lg transition duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        <?= !empty($informeSeleccionado['id_informe']) ? 'Actualizar Informe' : 'Registrar Informe' ?>
                                    </button>
                                    <!-- <button
                                        <?= (!empty($informeSeleccionado['estado']) && $informeSeleccionado['estado'] !== 'observado') ? 'disabled' : '' ?>
                                        type="reset"
                                        class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-3 px-6 rounded-lg transition duration-200 shadow-sm hover:shadow-md">
                                        Limpiar Formulario
                                    </button> -->
                                    <button
                                        type="button"
                                        onclick="window.location.href='<?php echo base_url(); ?>/Scii/informe';"
                                        id="nuevoInformeBtn"
                                        class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-3 px-6 rounded-lg transition duration-200 shadow-sm hover:shadow-md">
                                        Nuevo Informe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Sidebar / Aside -->
            <aside id="sidebar" class="">
                <!-- Lista de Informes (ejemplo UI) -->
                <div class="p-4 space-y-3 max-h-96 overflow-y-auto">
                    <p class="text-xs font-semibold text-gray-500 uppercase mb-3">Recientes</p>

                    <?php if (!empty($informes)): ?>
                        <?php foreach ($informes as $inf): ?>
                        <?php
                            switch ($inf['estado']) {
                                case 'borrador':
                                    $estadoClases = 'bg-yellow-100 text-yellow-700';
                                    break;
                                case 'enviado':
                                    $estadoClases = 'bg-blue-100 text-blue-700';
                                    break;
                                case 'observado':
                                    $estadoClases = 'bg-orange-100 text-orange-700';
                                    break;
                                case 'aprobado':
                                    $estadoClases = 'bg-green-100 text-green-700';
                                    break;
                                default:
                                    $estadoClases = 'bg-gray-100 text-gray-700';
                                    break;
                            }
                        ?>

                            <a href="<?= base_url('scii/informe/' . $inf['id_informe']) ?>"
                                class="informe-item block p-3 border border-gray-200 rounded-lg hover:border-green-400 hover:shadow-md transition-all bg-white group">

                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-semibold text-sm text-gray-800 group-hover:text-green-600 transition-colors line-clamp-1">
                                        <?= esc($inf['tema']) ?>
                                    </h4>

                                    <span class="px-2 py-0.5 text-xs rounded-full font-medium <?= $estadoClases ?>">
                                        <?= ucfirst($inf['estado']) ?>
                                    </span>
                                </div>

                                <div class="flex justify-between items-center text-xs text-gray-500">
                                    <span><?= date('d/m/Y', strtotime($inf['created_at'])) ?></span>
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
                            <p class="text-sm text-gray-500 font-medium">No hay informes</p>
                            <p class="text-xs text-gray-400 mt-1">Crea tu primer informe</p>
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
    const comentarioAnteriorContainer = document.getElementById('comentarioAnteriorContainer');
    const comentarioAnterior = document.getElementById('comentarioAnterior');

    let currentField = null;
    let currentButton = null;

    // ID del informe actual
    const idInforme = <?= $informeSeleccionado['id_informe'] ?? 0 ?>;
    
    // Estado del informe actual
    const estadoInforme = '<?= $informeSeleccionado['estado'] ?? '' ?>';
    const puedeEditarComentarios = estadoInforme === 'observado';

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
                
                // Deshabilitar controles si el informe no está en estado observado
                if (!puedeEditarComentarios) {
                    commentText.disabled = true;
                    commentText.placeholder = 'Los comentarios solo pueden editarse cuando el informe está en estado "observado"';
                    commentText.classList.add('bg-gray-100', 'cursor-not-allowed');
                    saveBtn.disabled = true;
                    saveBtn.classList.add('opacity-50', 'cursor-not-allowed');
                } else {
                    commentText.disabled = false;
                    commentText.placeholder = 'Escribe tu comentario aquí...';
                    commentText.classList.remove('bg-gray-100', 'cursor-not-allowed');
                    saveBtn.disabled = false;
                    saveBtn.classList.remove('opacity-50', 'cursor-not-allowed');
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
                const response = await fetch('<?= base_url() ?>/scii/guardarComentario', {
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
            // if (!idInforme) return;
            // const idInforme = document.getElementById('informe_id').value;
            try {
                const response = await fetch("<?= site_url('scii/obtenerComentarios') ?>?id_informe=<?= esc($informeSeleccionado['id_informe'] ?? '') ?>");
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

        // Deshabilitar visualmente los botones de comentarios si no se pueden editar
        if (!puedeEditarComentarios) {
            document.querySelectorAll('.comment-btn').forEach(btn => {
                btn.classList.add('opacity-50', 'cursor-not-allowed');
                btn.title = 'Los comentarios solo pueden editarse cuando el informe está en estado "observado"';
            });
        }

        // Cargar comentarios existentes al iniciar
        cargarComentariosExistentes();
    } else {
        console.error('Modal de comentarios: No se encontraron todos los elementos necesarios');
    }
</script>



<!-- Sistema de Tooltips Dinámicos -->
<div id="custom-tooltip" class="fixed hidden z-[9999] px-3 py-2 text-xs text-white bg-gray-900 rounded-lg shadow-xl max-w-xs transition-opacity duration-200 pointer-events-none">
    <div id="tooltip-content" class="leading-relaxed"></div>
    <div class="tooltip-arrow absolute w-2 h-2 bg-gray-900 transform rotate-45"></div>
</div>

<style>
    .tooltip-trigger {
        position: relative;
        transition: color 0.2s;
    }
    .tooltip-trigger:hover {
        color: #2563eb;
    }
</style>

<script>
// Sistema de Tooltips Dinámico
(function() {
    const tooltip = document.getElementById('custom-tooltip');
    const tooltipContent = document.getElementById('tooltip-content');
    const tooltipArrow = tooltip.querySelector('.tooltip-arrow');
    let currentTrigger = null;
    
    // Función para mostrar tooltip
    function showTooltip(trigger, text) {
        tooltipContent.textContent = text;
        tooltip.classList.remove('hidden');
        currentTrigger = trigger;
        positionTooltip(trigger);
    }
    
    // Función para posicionar el tooltip
    function positionTooltip(trigger) {
        const triggerRect = trigger.getBoundingClientRect();
        const tooltipRect = tooltip.getBoundingClientRect();
        const arrowSize = 8;
        
        // Calcular posición inicial (arriba del elemento)
        let top = triggerRect.top - tooltipRect.height - arrowSize;
        let left = triggerRect.left + (triggerRect.width / 2) - (tooltipRect.width / 2);
        
        // Ajustar si se sale por la izquierda
        if (left < 10) {
            left = 10;
        }
        
        // Ajustar si se sale por la derecha
        if (left + tooltipRect.width > window.innerWidth - 10) {
            left = window.innerWidth - tooltipRect.width - 10;
        }
        
        // Si no hay espacio arriba, mostrar abajo
        if (top < 10) {
            top = triggerRect.bottom + arrowSize;
            tooltipArrow.style.top = '-4px';
            tooltipArrow.style.bottom = 'auto';
        } else {
            tooltipArrow.style.bottom = '-4px';
            tooltipArrow.style.top = 'auto';
        }
        
        // Centrar la flecha respecto al trigger
        const arrowLeft = triggerRect.left + (triggerRect.width / 2) - left - 4;
        tooltipArrow.style.left = Math.max(8, Math.min(arrowLeft, tooltipRect.width - 16)) + 'px';
        
        tooltip.style.top = top + 'px';
        tooltip.style.left = left + 'px';
        tooltip.style.opacity = '1';
    }
    
    // Función para ocultar tooltip
    function hideTooltip() {
        tooltip.style.opacity = '0';
        setTimeout(() => {
            tooltip.classList.add('hidden');
            currentTrigger = null;
        }, 200);
    }
    
    // Event listeners para todos los triggers
    document.addEventListener('mouseenter', function(e) {
        if (e.target.classList.contains('tooltip-trigger')) {
            const tooltipText = e.target.getAttribute('data-tooltip');
            if (tooltipText) {
                showTooltip(e.target, tooltipText);
            }
        }
    }, true);
    
    document.addEventListener('mouseleave', function(e) {
        if (e.target.classList.contains('tooltip-trigger')) {
            hideTooltip();
        }
    }, true);
    
    // Reposicionar tooltip en scroll
    let scrollTimeout;
    window.addEventListener('scroll', function() {
        if (currentTrigger) {
            clearTimeout(scrollTimeout);
            tooltip.style.opacity = '0.5';
            scrollTimeout = setTimeout(() => {
                if (currentTrigger) {
                    positionTooltip(currentTrigger);
                }
            }, 50);
        }
    }, true);
    
    // Reposicionar tooltip en resize
    window.addEventListener('resize', function() {
        if (currentTrigger) {
            positionTooltip(currentTrigger);
        }
    });
})();
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>/assets/js/informe.js"></script>