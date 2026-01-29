<div class="p-8 rounded-lg">
    <section>
        <?php if (isset($errors)) { ?>
            <div class="p-4 text-sm text-red-800 mb-5 shadow-lg border z-50 rounded-lg bg-gray-50" role="alert">
                <span class="font-medium">¡Error!</span>
                <div class="alert alert-danger">
                    <?php echo $errors->listErrors(); ?>
                </div>
            </div>
        <?php } ?>
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
                        <path fill="url(#Om5yvFr6YrdlC0q2Vet0Hb)" d="M2,25h20V11H4c-1.105,0-2,0.895-2,2V25z"></path>
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
                    <span class="pl-2 pt-0.5 font-normal"><?php echo $current; ?></span>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>/administrador/inicio" class="w-5 h-5 bg-red-500 rounded-md ml-auto text-white text-lg font-light hover:bg-blue-gray-light hover:cursor-pointer focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </a>
        </header>
        <div class="flex shadow-2xl" style="min-height: 18rem;">
            <div class="sm:w-1/5 w-2/5 overflow-auto bg-gray-100">
                <div class="py-2 border-b-2">
                    <div class="flex pl-3 place-items-center">
                        <button id="myButton" class="flex place-items-center float-left submit-button pl-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" height="1em" viewBox="0 0 576 512">
                                <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                            </svg>
                            Inicio
                        </button>
                        <script type="text/javascript">
                            document.getElementById("myButton").onclick = function() {
                                location.href = "../administrador/inicio";
                            };
                        </script>
                    </div>
                </div>
                <div class="py-2 pl-2">
                    <div class="flex pl-3 place-items-center">
                        <button id="myButton" class="flex place-items-center float-left submit-button pl-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-app-indicator" viewBox="0 0 16 16">
                                <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>
                            Evaluaciones
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
                    <a href="<?php echo base_url() . '/administrador/evaluacion'; ?>" class="pl-4 mb-1 flex place-items-center text-emerald-600/100"><i class="fa-solid fa-file pr-1"></i>
                        Gestión / Evaluación al desempeño
                    </a>
                </div>
                <div class="my-2 px-5">
                    <table class="table table-bordered sizeFontTable">
                        <tbody>
                            <tr>
                                <td tabindex="42" class="pt-4 align-middle text-center pr-2">
                                    <i class="fa-solid fa-paper-plane text-2xl text-rose-900"></i>
                                </td>
                                <td class="pt-4" tabindex="43"><a href="<?php echo base_url() . '/administrador/historiaEvaluacion'; ?>" class="pl-4 mb-1 flex place-items-center">
                                        Registro de Evaluaciones</a></td>
                            </tr>
                            <tr>
                                <td tabindex="42" class="pt-4 align-middle text-center pr-2">
                                    <i class="fa-solid fa-paper-plane text-2xl text-rose-900"></i>
                                </td>
                                <td class="pt-4" tabindex="43"><a href="<?php echo base_url() . '/administrador/registroRespuestas'; ?>" class="pl-4 mb-1 flex place-items-center">
                                        Registro de Respuestas</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="sm:w-4/5 w-3/5 bg-gray-50">
                <section class="container mx-auto">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden m-2 ">
                                    <div class="m-4 flex flex-row gap-8 items-center">
                                        <a href="<?= base_url('Administrador/exportarExcelRespuestas') ?>" class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-emerald-600 dark:hover:bg-emerald-700 focus:outline-none dark:focus:ring-emerald-800">Exportar a Excel</a>
                                        <p>Registro de Respuestas</p>
                                        <div id="mensaje"></div>
                                    </div>
                                    <table id="respuestas" class="text-sm text-gray-500 whitespace-nowrap min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Usuario/# Expediente
                                                </th>
                                                <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Nombre
                                                </th>
                                                <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Apeliido Paterno
                                                </th>
                                                <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Apellido Materno
                                                </th>
                                                <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Direccion
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Principales Funciones
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Comentarios de Funciones por parte del evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Meta Uno
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Fecha de cumplimineto de la meta
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Meta Dos
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Fecha de cumplimineto de la meta
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Meta Tres
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Fecha de cumplimineto de la meta
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Meta Cuatro
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Fecha de cumplimineto de la meta
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Meta Cinco
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Fecha de cumplimineto de la meta
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Productividad y eficiencia
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Archivo
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion del Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Trabajo en equipo
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Archivo
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion del Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Analisis de problemas
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Archivo
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion del Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Aportaciones Valiosas
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Archivo
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion del Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Comunicacion y Confiabilidad
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Archivo
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion del Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Trabajos Extras
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Archivo
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion del Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Trabajos bajo presion
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Archivo
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion del Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Desarrollo de Competencias Adicionales (CAPACITACIONES)
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Archivo
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion del Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Total Segmento Tres
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Puntaje Segemento Tres
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Total Segmento Tres Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Puntaje Segemento Tres Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Honestidad
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Responsabilidad
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Respeto
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Actitud de Servicio
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Iniciativa
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Lealtad
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Disciplina
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Profesionalidad
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Igualdad y No Discriminación
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Equidad de Genero
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Total del segmento IV
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Puntaje Segmento IV
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Total del segmento IV Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Puntaje Segmento IV Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion Global
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Calificacion Global Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Cometarios del Evaluado
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Cometarios del Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Cometarios del Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Cometarios del Evaluador
                                                </th>
                                                <th class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Cometarios del Evaluador
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>
<main class="flex-1 p-4">

</main>


<nav class="fixed bottom-0 w-full z-40">
    <div class="bg-blue-gray text-gray-700  flex px-2 md:px-0 py-2  max-w-full overflow-x-auto">

    </div>
</nav>
<script>
    $(document).ready(function() {
        $('#respuestas').DataTable({
            info: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: '<?php echo base_url(); ?>/administrador/obtenerRespuestasAjax',
                type: 'POST',
                dataSrc: function(json) {
                    if (json.error) {
                        $('#mensaje').html('<div class="alert alert-warning">' + json.error + '</div>');
                        return [];
                    } else {
                        return json.data;
                    }
                },
                error: function(xhr, error, code) {
                    $('#mensaje').html('<div class="alert alert-danger">No se encontraron datos.</div>');
                }
            },
            columns: [{
                    data: 'usuario'
                },
                {
                    data: 'nombre_s'
                },
                {
                    data: 'apellido_p'
                },
                {
                    data: 'apellido_m'
                },
                {
                    data: 'nombreUnidad'
                },
                {
                    data: 'principales_funciones'
                },
                {
                    data: 'comentarios_funciones'
                },
                {
                    data: 'meta_uno'
                },
                {
                    data: 'fecha_cumplimiento_meta_uno'
                },
                {
                    data: 'meta_dos'
                },
                {
                    data: 'fecha_cumplimiento_meta_dos'
                },
                {
                    data: 'meta_tres'
                },
                {
                    data: 'fecha_cumplimiento_meta_tres'
                },
                {
                    data: 'meta_cuatro'
                },
                {
                    data: 'fecha_cumplimiento_meta_cuatro'
                },
                {
                    data: 'meta_cinco'
                },
                {
                    data: 'fecha_cumplimiento_meta_cinco'
                },

                {
                    data: 'criterio_desempeño_uno'
                },
                {
                    data: 'ruta_evidencia_uno'
                },
                {
                    data: 'calificacion_uno'
                },
                {
                    data: 'calificacion_uno_evaluador'
                },

                {
                    data: 'criterio_desempeño_dos'
                },
                {
                    data: 'ruta_evidencia_dos'
                },
                {
                    data: 'calificacion_dos'
                },
                {
                    data: 'calificacion_dos_evaluador'
                },

                {
                    data: 'criterio_desempeño_tres'
                },
                {
                    data: 'ruta_evidencia_tres'
                },
                {
                    data: 'calificacion_tres'
                },
                {
                    data: 'calificacion_tres_evaluador'
                },

                {
                    data: 'criterio_desempeño_cuatro'
                },
                {
                    data: 'ruta_evidencia_cuatro'
                },
                {
                    data: 'calificacion_cuatro'
                },
                {
                    data: 'calificacion_cuatro_evaluador'
                },

                {
                    data: 'criterio_desempeño_cinco'
                },
                {
                    data: 'ruta_evidencia_cinco'
                },
                {
                    data: 'calificacion_cinco'
                },
                {
                    data: 'calificacion_cinco_evaluador'
                },

                {
                    data: 'criterio_desempeño_seis'
                },
                {
                    data: 'ruta_evidencia_seis'
                },
                {
                    data: 'calificacion_seis'
                },
                {
                    data: 'calificacion_seis_evaluador'
                },

                {
                    data: 'criterio_desempeño_siete'
                },
                {
                    data: 'ruta_evidencia_siete'
                },
                {
                    data: 'calificacion_siete'
                },
                {
                    data: 'calificacion_siete_evaluador'
                },

                {
                    data: 'criterio_desempeño_ocho'
                },
                {
                    data: 'ruta_evidencia_ocho'
                },
                {
                    data: 'calificacion_ocho'
                },
                {
                    data: 'calificacion_ocho_evaluador'
                },

                {
                    data: 'total_segmento_tres'
                },
                {
                    data: 'puntuaje_segmento_tres'
                },
                {
                    data: 'total_segmento_tres_evaluador'
                },
                {
                    data: 'puntuaje_segmento_tres_evaluador'
                },

                {
                    data: 'valor_agregado_uno'
                },
                {
                    data: 'valor_agregado_uno_evaluador'
                },

                {
                    data: 'valor_agregado_dos'
                },
                {
                    data: 'valor_agregado_dos_evaluador'
                },

                {
                    data: 'valor_agregado_tres'
                },
                {
                    data: 'valor_agregado_tres_evaluador'
                },

                {
                    data: 'valor_agregado_cuatro'
                },
                {
                    data: 'valor_agregado_cuatro_evaluador'
                },

                {
                    data: 'valor_agregado_cinco'
                },
                {
                    data: 'valor_agregado_cinco_evaluador'
                },

                {
                    data: 'valor_agregado_seis'
                },
                {
                    data: 'valor_agregado_seis_evaluador'
                },

                {
                    data: 'valor_agregado_siete'
                },
                {
                    data: 'valor_agregado_siete_evaluador'
                },

                {
                    data: 'valor_agregado_ocho'
                },
                {
                    data: 'valor_agregado_ocho_evaluador'
                },

                {
                    data: 'valor_agregado_nueve'
                },
                {
                    data: 'valor_agregado_nueve_evaluador'
                },

                {
                    data: 'valor_agregado_diez'
                },
                {
                    data: 'valor_agregado_diez_evaluador'
                },

                {
                    data: 'total_segmento_cuatro'
                },
                {
                    data: 'puntuaje_segmento_cuatro'
                },

                {
                    data: 'total_segmento_cuatro_evaluador'
                },
                {
                    data: 'puntuaje_segmento_cuatro_evaluador'
                },

                {
                    data: 'total_global'
                },
                {
                    data: 'total_global_evaluador'
                },

                {
                    data: 'comentarios_evaluado'
                },
                {
                    data: 'comentarios_evaluador_uno'
                },
                {
                    data: 'comentarios_evaluador_dos'
                },
                {
                    data: 'comentarios_evaluador_tres'
                },
                {
                    data: 'comentarios_evaluador_cuatro'
                },
            ],
            columnDefs: [{
                targets: [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
                    21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36,
                    37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52,
                    53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68,
                    69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83
                ],
                className: 'limited-cell',
                width: '300px'
            }],
            "language": {
                "decimal": ",",
                "thousands": ".",
                "info": "Mostrando usuarios del _START_ al _END_ de un total de _TOTAL_ usuarios",
                "infoEmpty": "Mostrando usuarios del 0 al 0 de un total de 0 usuarios",
                "infoPostFix": "",
                "infoFiltered": "(filtrado de un total de _MAX_ usuarios)",
                "loadingRecords": "Cargando...",
                "lengthMenu": "Mostrar _MENU_ usuarios",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "processing": "Procesando...",
                "search": "Buscar:",
                "searchPlaceholder": "Término de búsqueda",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                //only works for built-in buttons, not for custom buttons
                "buttons": {
                    "create": "Nuevo",
                    "edit": "Cambiar",
                    "remove": "Borrar",
                    "copy": "Copiar",
                    "csv": "fichero CSV",
                    "excel": "tabla Excel",
                    "pdf": "documento PDF",
                    "print": "Imprimir",
                    "colvis": "Visibilidad columnas",
                    "collection": "Colección",
                    "upload": "Seleccione fichero...."
                },
                "select": {
                    "rows": {
                        _: '%d filas seleccionadas',
                        0: 'clic fila para seleccionar',
                        1: 'una fila seleccionada'
                    }
                }
            },
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>