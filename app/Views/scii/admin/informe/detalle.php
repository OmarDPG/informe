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
                    <!-- <div class="lg:flex-row gap-6" style="display: grid; grid-template-columns: 75% 25%;"> -->
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
                                        <form method="POST" class="space-y-6" action="<?php echo base_url(); ?>/Scii/registrarComentarios/<?= esc($informe_id ?? '') ?>" enctype="multipart/form-data">
                                            <input type="hidden" name="informe_id" value="<?= esc($informe_id ?? '') ?>">
                                            <!-- Unidad Administrativa y Fecha de Corte -->
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label for="unidad_administrativa" class="block mb-2 text-sm font-medium text-gray-700">
                                                        Unidad Administrativa
                                                    </label>
                                                    <input
                                                        value="<?= esc($unidad['descripcion'] ?? '') ?>"
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
                                                        value="<?= esc($informe['fecha_corte'] ?? '') ?>"
                                                        readonly
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
                                                            class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                            <option value="" disabled <?= empty($informe['id_alineacion_ped']) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                            <?php foreach ($lineas as $l): ?>
                                                                <option value="<?= $l['id'] ?>" <?= (isset($informe['id_alineacion_ped']) && $informe['id_alineacion_ped'] == $l['id']) ? 'selected' : '' ?>>
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
                                                            class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                            <option value="" disabled <?= empty($informe['orden_prioridad']) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                            <?php for ($i = 1; $i <= 10; $i++): ?>
                                                                <option value="<?= $i ?>"
                                                                    <?= (isset($informe['orden_prioridad']) && (int)$informe['orden_prioridad'] === $i) ? 'selected' : '' ?>>
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
                                                        type="text"
                                                        id="tema"
                                                        name="tema"
                                                        maxlength="100"
                                                        required
                                                        value="<?= esc($informe['tema'] ?? '') ?>"
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200"
                                                        placeholder="Ingrese el tema del informe">
                                                    <button
                                                        type="button"
                                                        class="comment-btn absolute right-3 top-1/2 -translate-y-1/2 text-xl text-gray-400 hover:text-green-600 transition"
                                                        data-field="tema"
                                                        data-label="Tema"
                                                        aria-label="Agregar comentario al campo Tema">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                        <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                    </button>
                                                </div>
                                                <p id="tema-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                            </div>
                                            <!-- Subtema -->
                                            <div>
                                                <label for="subtema" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Subtema <span class="text-gray-500 text-xs">(máximo 100 caracteres)</span>
                                                </label>
                                                <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                                    <input
                                                        type="text"
                                                        id="subtema"
                                                        name="subtema"
                                                        maxlength="100"
                                                        required
                                                        value="<?= esc($informe['subtema'] ?? '') ?>"
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200"
                                                        placeholder="Ingrese el subtema del informe">
                                                    <button
                                                        type="button"
                                                        class="comment-btn absolute right-3 top-1/2 -translate-y-1/2 text-xl text-gray-400 hover:text-green-600 transition"
                                                        data-field="subtema"
                                                        data-label="Subtema"
                                                        aria-label="Agregar comentario al campo Subtema">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                        <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                    </button>
                                                </div>
                                                <p id="subtema-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                            </div>
                                            <!-- Descripción del resultado -->
                                            <div>
                                                <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Descripción del resultado <span class="text-gray-500 text-xs">(Contexto + Acción + Impacto + Territorio + Beneficiarios + Inversión)</span>
                                                </label>
                                                <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                                    <input
                                                        type="text"
                                                        id="descripcion"
                                                        name="descripcion"
                                                        maxlength="100"
                                                        required
                                                        value="<?= esc($informe['descripcion_resultado'] ?? '') ?>"
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200"
                                                        placeholder="Ingrese la descripción del informe">
                                                    <button
                                                        type="button"
                                                        class="comment-btn absolute right-3 top-1/2 -translate-y-1/2 text-xl text-gray-400 hover:text-green-600 transition"
                                                        data-field="descripcion"
                                                        data-label="Descripción del resultado"
                                                        aria-label="Agregar comentario al campo Descripción">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                        <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                    </button>
                                                </div>
                                                <p id="descripcion-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                            </div>
                                            <!-- Contexto -->
                                            <div>
                                                <label for="contexto" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Contexto <span class="text-gray-500 text-xs">(máximo 500 caracteres)</span>
                                                </label>
                                                <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                                    <textarea
                                                        id="contexto"
                                                        name="contexto"
                                                        maxlength="500"
                                                        rows="6"
                                                        required
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200 resize-none"
                                                        placeholder="Ingrese el contexto del informe"><?= esc($informe['contexto'] ?? '') ?></textarea>
                                                    <button
                                                        type="button"
                                                        class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                        data-field="contexto"
                                                        data-label="Contexto"
                                                        aria-label="Agregar comentario al campo Contexto">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                        <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                    </button>
                                                </div>
                                                <p id="contexto-count" class="text-xs text-gray-500 mt-1 text-right">0 / 500 caracteres</p>
                                            </div>
                                            <!-- Acción -->
                                            <div>
                                                <label for="accion" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Acción <span class="text-gray-500 text-xs">(máximo 100 caracteres)</span>
                                                </label>
                                                <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                                    <input
                                                        type="text"
                                                        id="accion"
                                                        name="accion"
                                                        maxlength="100"
                                                        required
                                                        value="<?= esc($informe['accion'] ?? '') ?>"
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200"
                                                        placeholder="Ingrese la acción">
                                                    <button
                                                        type="button"
                                                        class="comment-btn absolute right-3 top-1/2 -translate-y-1/2 text-xl text-gray-400 hover:text-green-600 transition"
                                                        data-field="accion"
                                                        data-label="Acción"
                                                        aria-label="Agregar comentario al campo Acción">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                        <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                    </button>
                                                </div>
                                                <p id="accion-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                            </div>
                                            <!-- Impacto -->
                                            <div>
                                                <label for="impacto" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Impacto <span class="text-gray-500 text-xs">(máximo 300 caracteres)</span>
                                                </label>
                                                <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                                    <textarea
                                                        id="impacto"
                                                        name="impacto"
                                                        maxlength="300"
                                                        rows="3"
                                                        required
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200 resize-none"
                                                        placeholder="Ingrese el impacto"><?= esc($informe['impacto'] ?? '') ?></textarea>
                                                    <button
                                                        type="button"
                                                        class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                        data-field="impacto"
                                                        data-label="Impacto"
                                                        aria-label="Agregar comentario al campo Impacto">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                        <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                    </button>
                                                </div>
                                                <p id="impacto-count" class="text-xs text-gray-500 mt-1 text-right">0 / 300 caracteres</p>
                                            </div>
                                            <!-- Territorio -->
                                            <div>
                                                <label for="territorio" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Territorio <span class="text-gray-500 text-xs">(máximo 250 caracteres)</span>
                                                </label>
                                                <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                                    <textarea
                                                        id="territorio"
                                                        name="territorio"
                                                        maxlength="250"
                                                        rows="3"
                                                        required
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200 resize-none"
                                                        placeholder="Ingrese el territorio"><?= esc($informe['territorio'] ?? '') ?></textarea>
                                                    <button
                                                        type="button"
                                                        class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                        data-field="territorio"
                                                        data-label="Territorio"
                                                        aria-label="Agregar comentario al campo Territorio">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                        <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                    </button>
                                                </div>
                                                <p id="territorio-count" class="text-xs text-gray-500 mt-1 text-right">0 / 250 caracteres</p>
                                            </div>
                                            <!-- Beneficiarios -->
                                            <div>
                                                <label for="beneficiarios" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Beneficiarios <span class="text-gray-500 text-xs">(máximo 150 caracteres)</span>
                                                </label>
                                                <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                                    <div>
                                                        <input
                                                            type="text"
                                                            id="beneficiarios"
                                                            name="beneficiarios"
                                                            maxlength="150"
                                                            required
                                                            value="<?= esc($informe['beneficiarios'] ?? '') ?>"
                                                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200"
                                                            placeholder="Ingrese los beneficiarios">
                                                    </div>
                                                    <div>
                                                        <button
                                                            type="button"
                                                            class="comment-btn absolute right-3 top-1/2 -translate-y-1/2 text-xl text-gray-400 hover:text-green-600 transition"
                                                            data-field="beneficiarios"
                                                            data-label="Beneficiarios"
                                                            aria-label="Agregar comentario al campo Beneficiarios">
                                                            <i class="fa-solid fa-comment-dots"></i>
                                                            <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <p id="beneficiarios-count" class="text-xs text-gray-500 mt-1 text-right">0 / 150 caracteres</p>
                                            </div>
                                            <!-- Inversión -->
                                            <div>
                                                <label for="inversion" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Inversión <span class="text-gray-500 text-xs">(máximo 200 caracteres)</span>
                                                </label>
                                                <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                                    <textarea
                                                        id="inversion"
                                                        name="inversion"
                                                        maxlength="200"
                                                        rows="3"
                                                        required
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200 resize-none"
                                                        placeholder="Ingrese la inversión"><?= esc($informe['inversion'] ?? '') ?></textarea>
                                                    <button
                                                        type="button"
                                                        class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                        data-field="inversion"
                                                        data-label="Inversión"
                                                        aria-label="Agregar comentario al campo Inversión">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                        <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                    </button>
                                                </div>
                                                <p id="inversion-count" class="text-xs text-gray-500 mt-1 text-right">0 / 200 caracteres</p>
                                            </div>
                                            <!-- Desarrollo del resultado -->
                                            <div>
                                                <label for="desarrollo_resultado" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Desarrollo del resultado <span class="text-gray-500 text-xs">(máximo 3500 caracteres)</span>
                                                </label>
                                                <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                                    <textarea
                                                        id="desarrollo_resultado"
                                                        name="desarrollo_resultado"
                                                        maxlength="3500"
                                                        required
                                                        rows="15"
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200 resize-none"
                                                        placeholder="Ingrese el desarrollo del resultado"><?= esc($informe['desarrollo_resultado'] ?? '') ?></textarea>
                                                    <button
                                                        type="button"
                                                        class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                        data-field="desarrollo_resultado"
                                                        data-label="Desarrollo del resultado"
                                                        aria-label="Agregar comentario al campo Desarrollo del resultado">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                        <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                    </button>
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
                                                            class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                            <option value="" disabled <?= empty($informe['id_alineacion_programa_derivado']) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                            <?php if ($unidad['id_unidad'] === 1): ?>
                                                                <?php foreach ($lineasAgua as $la): ?>
                                                                    <option value="<?= $la['id'] ?>" <?= (isset($informe['id_alineacion_programa_derivado']) && $informe['id_alineacion_programa_derivado'] == $la['id']) ? 'selected' : '' ?>>
                                                                        <?= esc($la['codigo']) ?> — <?= esc($la['descripcion']) ?>
                                                                    </option>
                                                                <?php endforeach; ?>

                                                            <?php elseif ($unidad['id_unidad'] !== 1): ?>
                                                                <?php foreach ($lineasSocioambiental as $ls): ?>
                                                                    <option value="<?= $ls['id'] ?>" <?= (isset($informe['id_alineacion_programa_derivado']) && $informe['id_alineacion_programa_derivado'] == $ls['id']) ? 'selected' : '' ?>>
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
                                                            class="block w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-3 pr-10 text-sm text-gray-900 shadow-sm focus:border-green-500 focus:ring-2 focus:ring-green-500 focus:outline-none transition duration-200">
                                                            <option value="" disabled <?= empty($informe['id_alineacion_ods']) ? 'selected' : '' ?>>Seleccione una opción</option>
                                                            <?php foreach ($odsTemas as $ods): ?>
                                                                <option value="<?= $ods['id_tema'] ?>" <?= (isset($informe['id_alineacion_ods']) && $informe['id_alineacion_ods'] == $ods['id_tema']) ? 'selected' : '' ?>>
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

                                            <div style="border: solid 1px #d1d5db; border-radius: 10px; padding: 10px;">
                                                <div class="flex justify-between items-center mb-4">
                                                    <label class="block text-sm font-medium text-gray-700">
                                                        Archivos complementarios del informe
                                                    </label>
                                                    <?php if (!empty($archivos)): ?>
                                                        <button
                                                            type="button"
                                                            onclick="descargarTodosArchivos()"
                                                            class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition duration-200 shadow-sm hover:shadow-md">
                                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                            </svg>
                                                            Descargar Todos
                                                        </button>
                                                    <?php endif; ?>
                                                </div>

                                                <!-- Archivos Adjuntos -->
                                                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6" style="gap:10px;" id="archivosAdjuntos">
                                                    <?php
                                                    $tiposArchivos = [
                                                        'mapa' => ['label' => 'Mapas', 'icon' => 'fa-file-excel', 'color' => 'text-green-600'],
                                                        'grafico' => ['label' => 'Gráficas', 'icon' => 'fa-chart-line', 'color' => 'text-blue-600'],
                                                        'cuadro' => ['label' => 'Cuadros', 'icon' => 'fa-table', 'color' => 'text-purple-600'],
                                                        'esquema' => ['label' => 'Esquemas', 'icon' => 'fa-diagram-project', 'color' => 'text-orange-600'],
                                                        'fotografia' => ['label' => 'Fotografías', 'icon' => 'fa-file-zipper', 'color' => 'text-yellow-600'],
                                                        'resultados' => ['label' => 'Resultados', 'icon' => 'fa-file-word', 'color' => 'text-blue-800']
                                                    ];

                                                    foreach ($tiposArchivos as $tipo => $config):
                                                        $archivosDelTipo = array_filter($archivos ?? [], function ($archivo) use ($tipo) {
                                                            return $archivo['tipo_archivo'] === $tipo;
                                                        });
                                                    ?>
                                                        <div class="border rounded-lg p-3 bg-gray-50">
                                                            <h4 class="text-sm font-semibold text-gray-700 mb-2 text-center">
                                                                <?= $config['label'] ?>
                                                            </h4>
                                                            <?php if (empty($archivosDelTipo)): ?>
                                                                <div class="text-center py-4">
                                                                    <i class="fa-solid <?= $config['icon'] ?> text-3xl text-gray-300 mb-2"></i>
                                                                    <p class="text-xs text-gray-400">Sin archivos</p>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="space-y-1 max-h-40 overflow-y-auto">
                                                                    <?php foreach ($archivosDelTipo as $archivo): ?>
                                                                        <div class="flex items-center justify-between p-2 bg-white rounded hover:bg-gray-100 transition cursor-pointer group"
                                                                            onclick="verArchivo('<?= esc($archivo['ruta_archivo']) ?>', '<?= esc($archivo['nombre_archivo']) ?>')">
                                                                            <div class="flex items-center min-w-0 flex-1">
                                                                                <i class="fa-solid <?= $config['icon'] ?> <?= $config['color'] ?> mr-2 flex-shrink-0"></i>
                                                                                <span class="text-xs text-gray-700 truncate" title="<?= esc($archivo['nombre_archivo']) ?>">
                                                                                    <?= esc($archivo['nombre_archivo']) ?>
                                                                                </span>
                                                                            </div>
                                                                            <button type="button"
                                                                                onclick="event.stopPropagation(); descargarArchivo('<?= base_url() . '/' . esc($archivo['ruta_archivo']) ?>', '<?= esc($archivo['nombre_archivo']) ?>')"
                                                                                class="ml-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                                <i class="fa-solid fa-download text-gray-400 hover:text-blue-600 text-sm"></i>
                                                                            </button>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <!-- Conclusión de la temática -->
                                            <div>
                                                <label for="conclusionTematica" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Conclusión de la temática <span class="text-gray-500 text-xs">(máximo 1900 caracteres)</span>
                                                </label>
                                                <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                                    <textarea
                                                        id="conclusionTematica"
                                                        name="conclusionTematica"
                                                        maxlength="1900"
                                                        rows="10"
                                                        required
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200 resize-none"
                                                        placeholder="Ingrese la conclusión de la temática"><?= esc($informe['conclusion_tematica'] ?? '') ?></textarea>
                                                    <button
                                                        type="button"
                                                        class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                        data-field="conclusionTematica"
                                                        data-label="Conclusión de la temática"
                                                        aria-label="Agregar comentario al campo Conclusión">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                        <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                    </button>
                                                </div>
                                                <p id="conclusionTematica-count" class="text-xs text-gray-500 mt-1 text-right">0 / 1900 caracteres</p>
                                            </div>
                                            <!-- Logros destacados de la temática -->
                                            <div>
                                                <label for="logrosDestacados" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Logros destacados de la temática <span class="text-gray-500 text-xs">(máximo 1900 caracteres)</span>
                                                </label>
                                                <div class="relative" style="display:grid; grid-template-columns: 95% 5%; gap: 0.5rem;">
                                                    <textarea
                                                        id="logrosDestacados"
                                                        name="logrosDestacados"
                                                        maxlength="1900"
                                                        required
                                                        rows="10"
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 pr-12 transition duration-200 resize-none"
                                                        placeholder="Ingrese los logros destacados"><?= esc($informe['logros_destacados'] ?? '') ?></textarea>
                                                    <button
                                                        type="button"
                                                        class="comment-btn absolute right-3 top-3 text-xl text-gray-400 hover:text-green-600 transition"
                                                        data-field="logrosDestacados"
                                                        data-label="Logros destacados"
                                                        aria-label="Agregar comentario al campo Logros destacados">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                        <span class="comment-indicator hidden absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                                    </button>
                                                </div>
                                                <p id="logrosDestacados-count" class="text-xs text-gray-500 mt-1 text-right">0 / 1900 caracteres</p>
                                            </div>
                                            <!-- Botones de Acción -->
                                            <div class="flex flex-col sm:flex-row gap-3 pt-4 border-t border-gray-200" style="gap: 1em;">
                                                <button
                                                    type="submit"
                                                    class="flex-1 bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-6 rounded-lg transition duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                                    Registrar Comentarios
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

                                <?php if (!empty($informesUnidad)): ?>
                                    <?php foreach ($informesUnidad as $inf): ?>

                                        <?php
                                        $estadoClases = match ($inf['estado']) {
                                            'borrador' => 'bg-yellow-100 text-yellow-700',
                                            'enviado'  => 'bg-blue-100 text-blue-700',
                                            'aprobado' => 'bg-green-100 text-green-700',
                                            default    => 'bg-gray-100 text-gray-700',
                                        };
                                        ?>

                                        <a href="<?= base_url('administrador/detalle/' . $inf['id_informe']) ?>"
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
                </section>
            </div>
        </div>
    </section>
</div>

<!-- Modal para visualizar archivos -->
<div id="modalArchivo" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-2xl max-w-4xl w-full max-h-[90vh] flex flex-col">
        <!-- Header del Modal -->
        <div class="flex items-center justify-between p-4 border-b border-gray-200">
            <h3 id="modalTitulo" class="text-lg font-semibold text-gray-800 truncate flex-1"></h3>
            <button onclick="cerrarModal()" class="text-gray-400 hover:text-gray-600 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Contenido del Modal -->
        <div class="flex-1 overflow-auto p-6">
            <div id="modalContenido" class="flex items-center justify-center min-h-full">
                <p class="text-gray-500">Cargando...</p>
            </div>
        </div>

        <!-- Footer del Modal -->
        <div class="flex items-center justify-end gap-3 p-4 border-t border-gray-200">
            <button
                id="btnDescargar"
                onclick="descargarArchivoModal()"
                class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                Descargar
            </button>
            <button
                onclick="cerrarModal()"
                class="px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg transition">
                Cerrar
            </button>
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

    // Almacén temporal (luego va a backend)
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

        saveBtn.addEventListener('click', () => {
            if (!currentField) return;

            comments[currentField] = commentText.value.trim();

            toggleIndicator(currentButton, commentText.value);
            closeModal();
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

        function toggleIndicator(button, text) {
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
    } else {
        console.error('Modal de comentarios: No se encontraron todos los elementos necesarios');
    }
</script>