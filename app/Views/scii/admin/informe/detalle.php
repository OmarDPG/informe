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
                                        <form method="POST" class="space-y-6" action="<?php echo base_url(); ?>/Scii/registrarInformeGobierno" enctype="multipart/form-data">
                                            <input type="hidden" name="informe_id" value="<?= esc($informe_id ?? '') ?>">
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
                                                            <option value="" disabled selected>Seleccione una opción</option>
                                                            <?php foreach ($lineas as $l): ?>
                                                                <option value="<?= $l['id'] ?>">
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
                                                            <option value="" disabled selected>Seleccione una opción</option>
                                                            <?php for ($i = 1; $i <= 10; $i++): ?>
                                                                <option value="<?= $i ?>">
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
                                                <input
                                                    type="text"
                                                    id="tema"
                                                    name="tema"
                                                    maxlength="100"
                                                    required
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                                    placeholder="Ingrese el tema del informe">
                                                <p id="tema-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                            </div>
                                            <!-- Subtema -->
                                            <div>
                                                <label for="subtema" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Subtema <span class="text-gray-500 text-xs">(máximo 100 caracteres)</span>
                                                </label>
                                                <input
                                                    type="text"
                                                    id="subtema"
                                                    name="subtema"
                                                    maxlength="100"
                                                    required
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                                    placeholder="Ingrese el subtema del informe">
                                                <p id="subtema-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                            </div>
                                            <!-- Descripción del resultado -->
                                            <div>
                                                <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Descripción del resultado <span class="text-gray-500 text-xs">(Contexto + Acción + Impacto + Territorio + Beneficiarios + Inversión)</span>
                                                </label>
                                                <input
                                                    type="text"
                                                    id="descripcion"
                                                    name="descripcion"
                                                    maxlength="100"
                                                    required
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                                    placeholder="Ingrese la descripción del informe">
                                                <p id="descripcion-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                            </div>
                                            <!-- Contexto -->
                                            <div>
                                                <label for="contexto" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Contexto <span class="text-gray-500 text-xs">(máximo 500 caracteres)</span>
                                                </label>
                                                <textarea
                                                    id="contexto"
                                                    name="contexto"
                                                    maxlength="500"
                                                    rows="3"
                                                    required
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200 resize-none"
                                                    placeholder="Ingrese el contexto del informe"></textarea>
                                                <p id="contexto-count" class="text-xs text-gray-500 mt-1 text-right">0 / 500 caracteres</p>
                                            </div>
                                            <!-- Acción -->
                                            <div>
                                                <label for="accion" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Acción <span class="text-gray-500 text-xs">(máximo 100 caracteres)</span>
                                                </label>
                                                <input
                                                    type="text"
                                                    id="accion"
                                                    name="accion"
                                                    maxlength="100"
                                                    required
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                                    placeholder="Ingrese la descripción del informe">
                                                <p id="accion-count" class="text-xs text-gray-500 mt-1 text-right">0 / 100 caracteres</p>
                                            </div>
                                            <!-- Impacto -->
                                            <div>
                                                <label for="impacto" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Impacto <span class="text-gray-500 text-xs">(máximo 300 caracteres)</span>
                                                </label>
                                                <textarea
                                                    id="impacto"
                                                    name="impacto"
                                                    maxlength="300"
                                                    rows="3"
                                                    required
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                                    placeholder="Ingrese la descripción del informe"></textarea>
                                                <p id="impacto-count" class="text-xs text-gray-500 mt-1 text-right">0 / 300 caracteres</p>
                                            </div>
                                            <!-- Territorio -->
                                            <div>
                                                <label for="territorio" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Territorio <span class="text-gray-500 text-xs">(máximo 250 caracteres)</span>
                                                </label>
                                                <textarea
                                                    id="territorio"
                                                    name="territorio"
                                                    maxlength="250"
                                                    rows="3"
                                                    required
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                                    placeholder="Ingrese la descripción del informe">
                                    </textarea>
                                                <p id="territorio-count" class="text-xs text-gray-500 mt-1 text-right">0 / 250 caracteres</p>
                                            </div>
                                            <!-- Beneficiarios -->
                                            <div>
                                                <label for="beneficiarios" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Beneficiarios <span class="text-gray-500 text-xs">(máximo 150 caracteres)</span>
                                                </label>
                                                <input
                                                    type="text"
                                                    id="beneficiarios"
                                                    name="beneficiarios"
                                                    maxlength="150"
                                                    required
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                                    placeholder="Ingrese la descripción del informe">
                                                <p id="beneficiarios-count" class="text-xs text-gray-500 mt-1 text-right">0 / 150 caracteres</p>
                                            </div>
                                            <!-- Inversión -->
                                            <div>
                                                <label for="inversion" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Inversión <span class="text-gray-500 text-xs">(máximo 200 caracteres)</span>
                                                </label>
                                                <textarea
                                                    id="inversion"
                                                    name="inversion"
                                                    maxlength="200"
                                                    rows="3"
                                                    required
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                                    placeholder="Ingrese la descripción del informe"></textarea>
                                                <p id="inversion-count" class="text-xs text-gray-500 mt-1 text-right">0 / 200 caracteres</p>
                                            </div>
                                            <!-- Desarrollo del resultado -->
                                            <div>
                                                <label for="desarrollo_resultado" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Desarrollo del resultado <span class="text-gray-500 text-xs">(máximo 3500 caracteres)</span>
                                                </label>
                                                <textarea
                                                    id="desarrollo_resultado"
                                                    name="desarrollo_resultado"
                                                    maxlength="3500"
                                                    required
                                                    rows="6"
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                                    placeholder="Ingrese la descripción del informe"></textarea>
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
                                                            <option value="" disabled selected>Seleccione una opción</option>
                                                            <?php if ($id_unidad['id_unidad'] === 1): ?>
                                                                <?php foreach ($lineasAgua as $la): ?>
                                                                    <option value="<?= $la['id'] ?>">
                                                                        <?= esc($la['codigo']) ?> — <?= esc($la['descripcion']) ?>
                                                                    </option>
                                                                <?php endforeach; ?>

                                                            <?php elseif ($id_unidad['id_unidad'] !== 1): ?>
                                                                <?php foreach ($lineasSocioambiental as $ls): ?>
                                                                    <option value="<?= $ls['id'] ?>">
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
                                                            <option value="" disabled selected>Seleccione una opción</option>
                                                            <?php foreach ($odsTemas as $ods): ?>
                                                                <option value="<?= $ods['id_tema'] ?>">
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
                                            <!-- Conclusión de la temática -->
                                            <div>
                                                <label for="conclusionTematica" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Conclusión de la temática <span class="text-gray-500 text-xs">(máximo 1900 caracteres)</span>
                                                </label>
                                                <textarea
                                                    id="conclusionTematica"
                                                    name="conclusionTematica"
                                                    maxlength="1900"
                                                    rows="5"
                                                    required
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                                    placeholder="Ingrese la descripción del informe"></textarea>
                                                <p id="conclusionTematica-count" class="text-xs text-gray-500 mt-1 text-right">0 / 1900 caracteres</p>
                                            </div>
                                            <!-- Logros destacados de la temática -->
                                            <div>
                                                <label for="logrosDestacados" class="block mb-2 text-sm font-medium text-gray-700">
                                                    Logros destacados de la temática <span class="text-gray-500 text-xs">(máximo 1900 caracteres)</span>
                                                </label>
                                                <textarea
                                                    id="logrosDestacados"
                                                    name="logrosDestacados"
                                                    maxlength="1900"
                                                    required
                                                    rows="5"
                                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 block w-full p-3 transition duration-200"
                                                    placeholder="Ingrese la descripción del informe"></textarea>
                                                <p id="logrosDestacados-count" class="text-xs text-gray-500 mt-1 text-right">0 / 1900 caracteres</p>
                                            </div>
                                            <!-- Botones de Acción -->
                                            <div class="flex flex-col sm:flex-row gap-3 pt-4 border-t border-gray-200" style="gap: 1em;">
                                                <button
                                                    type="submit"
                                                    class="flex-1 bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-6 rounded-lg transition duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                                    Registrar Informe
                                                </button>
                                                <button
                                                    type="reset"
                                                    class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-3 px-6 rounded-lg transition duration-200 shadow-sm hover:shadow-md">
                                                    Limpiar Formulario
                                                </button>
                                                <button
                                                    type="button"
                                                    onclick="window.location.href='<?php echo base_url(); ?>/Scii/informesGobierno';"
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
                        <aside id="sidebar" class="flex1">
                            <!-- Header del Sidebar -->
                            <div class="bg-gradient-to-r from-green-600 to-green-700 px-6 py-4 text-white">
                                <h3 class="text-lg font-bold flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    Mis Informes
                                </h3>
                                <p class="text-sm text-green-50 mt-1">Gestión de reportes</p>
                            </div>

                            <!-- Botón: Nuevo Informe -->
                            <div class="p-4 border-b border-gray-100">
                                <button
                                    type="button"
                                    id="btnNuevoInforme"
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-4 rounded-lg transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 flex items-center justify-center group">
                                    <svg class="w-5 h-5 mr-2 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                    </svg>
                                    Crear Nuevo
                                </button>
                            </div>

                            <!-- Filtros rápidos -->
                            <div class="p-4 border-b border-gray-100">
                                <p class="text-xs font-semibold text-gray-500 uppercase mb-3">Filtrar por estado</p>
                                <div class="space-y-2">
                                    <button class="filter-btn w-full text-left px-3 py-2 text-sm rounded-lg bg-green-50 text-green-700 font-medium hover:bg-green-100 transition-colors">
                                        <span class="flex items-center">
                                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                            Todos los informes
                                        </span>
                                    </button>
                                    <button class="filter-btn w-full text-left px-3 py-2 text-sm rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
                                        <span class="flex items-center">
                                            <span class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></span>
                                            Borradores
                                        </span>
                                    </button>
                                    <button class="filter-btn w-full text-left px-3 py-2 text-sm rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
                                        <span class="flex items-center">
                                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                                            Enviados
                                        </span>
                                    </button>
                                </div>
                            </div>

                            <!-- Lista de Informes (ejemplo UI) -->
                            <div class="p-4 space-y-3 max-h-96 overflow-y-auto">
                                <p class="text-xs font-semibold text-gray-500 uppercase mb-3">Recientes</p>

                                <!-- Item de informe 1 -->
                                <div class="informe-item p-3 border border-gray-200 rounded-lg hover:border-green-400 hover:shadow-md transition-all cursor-pointer bg-white group">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="font-semibold text-sm text-gray-800 group-hover:text-green-600 transition-colors line-clamp-1">
                                            Informe Enero 2026
                                        </h4>
                                        <span class="px-2 py-0.5 text-xs rounded-full bg-yellow-100 text-yellow-700 font-medium">
                                            Borrador
                                        </span>
                                    </div>
                                    <p class="text-xs text-gray-600 mb-2 line-clamp-2">Desarrollo de infraestructura vial...</p>
                                    <div class="flex justify-between items-center text-xs text-gray-500">
                                        <span>20/01/2026</span>
                                        <span class="text-green-600 font-medium opacity-0 group-hover:opacity-100 transition-opacity">Ver →</span>
                                    </div>
                                </div>

                                <!-- Item de informe 2 -->
                                <div class="informe-item p-3 border border-gray-200 rounded-lg hover:border-green-400 hover:shadow-md transition-all cursor-pointer bg-white group">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="font-semibold text-sm text-gray-800 group-hover:text-green-600 transition-colors line-clamp-1">
                                            Programa Social Q4
                                        </h4>
                                        <span class="px-2 py-0.5 text-xs rounded-full bg-blue-100 text-blue-700 font-medium">
                                            Enviado
                                        </span>
                                    </div>
                                    <p class="text-xs text-gray-600 mb-2 line-clamp-2">Beneficiarios del programa de apoyo...</p>
                                    <div class="flex justify-between items-center text-xs text-gray-500">
                                        <span>15/01/2026</span>
                                        <span class="text-green-600 font-medium opacity-0 group-hover:opacity-100 transition-opacity">Ver →</span>
                                    </div>
                                </div>

                                <!-- Item de informe 3 -->
                                <div class="informe-item p-3 border border-gray-200 rounded-lg hover:border-green-400 hover:shadow-md transition-all cursor-pointer bg-white group">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="font-semibold text-sm text-gray-800 group-hover:text-green-600 transition-colors line-clamp-1">
                                            Informe Diciembre 2025
                                        </h4>
                                        <span class="px-2 py-0.5 text-xs rounded-full bg-blue-100 text-blue-700 font-medium">
                                            Enviado
                                        </span>
                                    </div>
                                    <p class="text-xs text-gray-600 mb-2 line-clamp-2">Resumen anual de actividades...</p>
                                    <div class="flex justify-between items-center text-xs text-gray-500">
                                        <span>31/12/2025</span>
                                        <span class="text-green-600 font-medium opacity-0 group-hover:opacity-100 transition-opacity">Ver →</span>
                                    </div>
                                </div>

                                <!-- Estado vacío (oculto por defecto) -->
                                <div id="emptyState" class="hidden text-center py-8 px-4">
                                    <svg class="w-16 h-16 mx-auto text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <p class="text-sm text-gray-500 font-medium">No hay informes</p>
                                    <p class="text-xs text-gray-400 mt-1">Crea tu primer informe</p>
                                </div>
                            </div>
                        </aside>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>