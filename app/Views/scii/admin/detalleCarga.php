        <style>
            i.icon-sorts {
                display: none;
            }

            th {
                pointer-events: none;
            }
        </style>
        <div class="p-8 rounded-lg">
            <section>
                <!-- Image loader -->
                <div id='loader' class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center z-50" style='display: none;'>
                    <i class="fa-solid text-rose-900 fa-spinner fa-spin-pulse text-9xl"></i>
                </div>
                <!-- Image loader -->
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
                    <div class="sm:w-1/5 w-1/5 overflow-auto bg-gray-100">
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
                                    Evaluación
                                </button>
                            </div>
                        </div>
                        <div class="mt-2 px-5 border-b-2">
                            <!-- <a href="<?php echo base_url() . '/administrador/altaPeriodo'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-calendar-plus pr-1"></i>
                            Alta de periodo
                        </a>
                        <a href="<?php echo base_url() . '/administrador/periodos'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-calendar pr-1"></i>
                            Gestión de periodos
                        </a> -->
                            <a href="<?php echo base_url() . '/administrador/altaEvidencia'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file-circle-plus pr-1"></i>
                                Nueva evidencia
                            </a>
                            <a href="<?php echo base_url() . '/administrador/evidencias'; ?>" class="pl-4 mb-1 flex place-items-center text-emerald-600/100"><i class="fa-solid fa-file pr-1"></i>
                                Gestión / Evaluación de evidencias
                            </a>
                            <a href="<?php echo base_url() . '/administrador/evaluacion'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file pr-1"></i>
                                Gestión / Evaluación al desempeño
                            </a>
                            <a href="<?php echo base_url() . '/administrador/informe'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file pr-1"></i>
                                Gestión / Informe de GOBIERNO <?php echo date('Y'); ?>
                            </a>
                            <a href="<?php echo base_url() . '/administrador/glosa'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file pr-1"></i>
                                Gestión / Glosa del Informe de Gobierno <?php echo date('Y'); ?>
                            </a>
                        </div>
                        <div class="my-2 px-5">
                            <table class="table table-bordered sizeFontTable" data-ordering="false">
                                <tbody>
                                    <tr>
                                        <td tabindex="42" class="pt-4 align-middle text-center pr-2">
                                            <i class="fa-solid fa-paper-plane text-2xl text-rose-900"></i>
                                        </td>
                                        <td class="pt-4" tabindex="43">Actividad solicitada</td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4 align-middle text-center pr-2" tabindex="44">
                                            <i class="fa-regular fa-hourglass-half fa-spin text-2xl text-blue-500"></i>
                                        </td>
                                        <td class="pt-4" tabindex="45">
                                            Actividad en espera de evaluación
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4 align-middle text-center pr-2" tabindex="46">
                                            <i class="fa-solid fa-thumbs-up text-2xl text-green-600"></i>
                                        </td>
                                        <td class="pt-4" tabindex="47">Actividad entregada</td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4 align-middle text-center pr-2" tabindex="48">
                                            <i class="fa-solid fa-triangle-exclamation text-2xl text-yellow-300"></i>
                                        </td>
                                        <td class="pt-4" tabindex="49">Actividad con comentario</td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4 align-middle text-center pr-2" tabindex="48">
                                            <i class="fa-solid fa-flag-checkered text-2xl text-[#c19e74]"></i>
                                        </td>
                                        <td class="pt-4" tabindex="50">Actividad completada</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="sm:w-4/5 w-4/5 bg-gray-50">
                        <section class="pt-2 bg-white">
                            <div class="px-4 mx-auto ">
                                <div class="w-full mx-auto mt-4  text-center ">
                                    <div class="relative z-0 w-full ">
                                        <div class="relative shadow-2xl">
                                            <div class="relative  shadow-md sm:rounded-lg">
                                                <table class="w-full text-md text-left text-gray-500">
                                                    <thead class="text-md text-gray-700 uppercase bg-gray-300">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">Nombre</th>
                                                            <th scope="col" class="px-6 py-3">Descripción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="group border-b">
                                                            <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900">Tema</td>
                                                            <td class="px-6 py-4 group-hover:bg-gray-100"><?php
                                                                                                            echo ($cargas['t_carga'] == 0) ? 'PTCI' : ($cargas['t_carga'] == 1 ? 'PTAR' : 'Carpeta Electrónica');
                                                                                                            ?></td>
                                                        </tr>
                                                        <tr class="group border-b">
                                                            <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900">Unidad administrativa</td>
                                                            <td class="px-6 py-4 group-hover:bg-gray-100">
                                                                <?php foreach ($unidades as $unidad) {
                                                                    if ($unidad['id_unidad'] == $cargas['id_unidad'])
                                                                        echo $unidad['descripcion'];
                                                                }
                                                                ?></td>
                                                        </tr>
                                                        <tr class="group border-b">
                                                            <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900"><?php echo ($cargas['t_carga'] == 0) ? 'Acción de mejora' : (($cargas['t_carga'] == 1) ? 'Factores de riesgo' : 'Punto del Orden del Día') ?></td>
                                                            <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo $cargas['accion_factor']; ?></td>
                                                        </tr>
                                                        <?php if ($cargas['t_carga'] == 1) { ?>
                                                            <tr class="group border-b">
                                                                <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900">Fecha de inicio</td>
                                                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo date('d-m-Y', strtotime($cargas['fecha_inicio'])); ?></td>
                                                            </tr>
                                                            <tr class="group border-b">
                                                                <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900">Fecha de término</td>
                                                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo date('d-m-Y', strtotime($cargas['fecha_termino'])); ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr class="group border-b">
                                                            <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900"><?php echo ($cargas['t_carga'] <= 1) ? 'Medio de verificación' : 'Requerimiento' ?></td>
                                                            <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo $cargas['medio_verificacion']; ?></td>
                                                        </tr>
                                                        <?php if ($cargas['t_carga'] >= 1 && $cargas['t_carga'] <= 2) { ?>
                                                            <tr class="group border-b">
                                                                <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900"><?php echo ($cargas['t_carga'] == 1) ? 'Descripción de la acción de control' : 'Descripción del requerimiento' ?></td>
                                                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo $cargas['descripcion']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr class="group border-b">
                                                            <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900">Estado</td>
                                                            <td class="px-6 py-4 group-hover:bg-gray-100"><?php
                                                                                                            switch ($cargas['estado']) {
                                                                                                                case '0':
                                                                                                                    echo '<i class="fa-solid fa-paper-plane text-xl text-rose-900"></i>';
                                                                                                                    break;
                                                                                                                case '1':
                                                                                                                    echo '<i class="fa-regular fa-hourglass-half fa-spin text-xl text-blue-500"></i>';
                                                                                                                    break;
                                                                                                                case '2':
                                                                                                                    echo '<i class="fa-solid fa-thumbs-up text-2xl text-green-600"></i>';
                                                                                                                    break;
                                                                                                                case '3':
                                                                                                                    echo '<i class="fa-solid fa-triangle-exclamation text-2xl text-yellow-300"></i>';
                                                                                                                    break;
                                                                                                                case '4':
                                                                                                                    echo '<i class="fa-solid fa-flag-checkered text-2xl text-[#c19e74]"></i>';
                                                                                                                    break;
                                                                                                                default:
                                                                                                                    echo $value;
                                                                                                            }
                                                                                                            ?></td>
                                                        </tr>
                                                        <tr class="group border-b">
                                                            <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900">Situación de actividad</td>
                                                            <td class="px-6 py-4 group-hover:bg-gray-100">
                                                                <p class="py-2 px-4 shadow-md no-underline rounded-full bg-<?php echo ($cargas['activo'] == 1) ? 'green' : 'yellow'; ?>-400 text-white font-sans font-semibold text-sm border-<?php echo ($cargas['activo'] == 1) ? 'green' : 'yellow'; ?>-400 btn-primary hover:text-white hover:bg-<?php echo ($cargas['activo'] == 1) ? 'green' : 'yellow'; ?>-300 focus:outline-none active:shadow-none mr-2"><?php echo ($cargas['activo'] == 1) ? 'Actividad activa' : 'Actividad inhabilitada'; ?></p>
                                                            </td>
                                                        </tr>
                                                        <?php if ($cargas['estado'] >= 1 && $cargas['estado'] <= 3) { ?>
                                                            <tr class="group border-b">
                                                                <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900">Observación</td>
                                                                <td class="px-6 py-4 group-hover:bg-gray-100"><textarea id="observ" name="observ" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="En caso de requerir, escribe alguna observación..."><?php echo ($cargas['observacion'] == null) ? '' : $cargas['observacion']; ?></textarea></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <?php if ($cargas['estado'] == 4) { ?>
                                                            <tr class="group border-b">
                                                                <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900">Observación</td>
                                                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo ($cargas['observacion'] == null) ? 'N/A' : $cargas['observacion']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <?php if ($cargas['estado'] >= 1) { ?>
                                                            <tr class="group border-b">
                                                                <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900">Justificación</td>
                                                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo ($cargas['justificacion'] == null) ? 'N/A' : $cargas['justificacion']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <?php if ($cargas['estado'] >= 1) { ?>
                                                            <tr class="group border-b">
                                                                <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900">Evaluación</td>
                                                                <td class="px-6 py-4 group-hover:bg-gray-100">
                                                                    <select id="unidades" name="unidades" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                        <option selected value="">Seleccione la opción que más se adecue</option>
                                                                        <option value="0">Información entregada a la fecha de corte requerida</option>
                                                                        <option value="1">La unidad administrativa cuenta con observaciones o no ha llegado a atender las observaciones</option>
                                                                        <?php if ($cargas['t_carga'] != 2) { ?><option value="2">La actividad se ha cumplido al 100%</option><?php } ?>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr class="group border-b">
                                                            <td class="px-6 py-4 group-hover:bg-rose-200 bg-rose-800 text-white group-hover:text-yellow-900"><?php echo ($cargas['estado'] == 1 || $cargas['estado'] == 3) ? 'Información cargada' : 'Cargar información' ?>
                                                                <script>
                                                                    function thisFileUpload() {
                                                                        document.getElementById("userfile").click();
                                                                    };

                                                                    function change() {
                                                                        document.getElementById("submit").click();
                                                                    }
                                                                </script>
                                                                <form action="<?php echo base_url() . '/administrador/uploadC' ?>" id="myForm" class="hidden" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                                    <input type="file" name="userfile" id="userfile" onchange="change()" class="hidden" accept="application/*">
                                                                    <input type="hidden" value="<?php echo $cargas['id_carga']; ?>" id="id_carga" name="id_carga" />
                                                                    <input type="submit" id="submit" value="Go">
                                                                </form>
                                                                <button id="button" name="button" value="Seleccionar archivo" class="w-5 h-5 mr-1 bg-rose-800 rounded-md ml-auto text-rose-800 text-lg font-light hover:bg-blue-gray-light hover:cursor-pointer focus:outline-none" onclick="thisFileUpload();">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-45 h-5 w-5 text-white hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                                    </svg>
                                                                </button>
                                                            </td>
                                                            <td class="group-hover:bg-gray-100">
                                                                <table class="w-full" id="tablaDocs">
                                                                    <thead class="text-md text-white bg-gray-400">
                                                                        <tr>
                                                                            <th class="px-2"> Nombre </th>
                                                                            <th class="px-2"> Opciones </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $i = 1;
                                                                        foreach ($map as $mp) { ?>
                                                                            <tr>
                                                                                <td class="px-2" data-tooltip-target="tooltip-default<?php echo $i; ?>">
                                                                                    <div id="tooltip-default<?php echo $i; ?>" role="tooltip" class="break-all absolute z-50 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity w-auto duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                                                                        <?php echo $mp; ?>
                                                                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                                                                    </div>
                                                                                    <?php echo substr($mp, 0, 30);
                                                                                    $i++; ?>
                                                                                </td>
                                                                                <td class="items-center inline-flex	gap-x-6">
                                                                                    <button target="_blank" onclick="fileDelete('<?php echo $mp ?>')" class="text-gray-500 transition-colors duration-200 hover:text-red-500 focus:outline-none">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                                                        </svg>
                                                                                    </button>
                                                                                    <a href="<?php echo base_url() . '/files/cumplimiento/' . $cargas['id_carga'] . '/' . $mp; ?>" download class="text-gray-500 transition-colors duration-200 hover:text-emerald-500 focus:outline-none">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                                        </svg>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- <img src="https://cdn.devdojo.com/images/march2021/green-dashboard.jpg"> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-10">
                                    <button onclick="window.location.href='<?php echo base_url() . '/administrador/evidencias/' ?>'" class="text-white bg-rose-800 hover:bg-rose-700/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                                        <i class="fa-solid fa-arrow-left mr-2"></i> Regresar
                                    </button>
                                    <button onclick="window.location.href='<?php echo base_url() . '/administrador/altaEvidencia/' . $cargas['id_carga']; ?>'" class="text-white bg-rose-800 hover:bg-rose-700/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                                        <i class="fa-solid fa-pencil mr-2"></i> Modificar
                                    </button>
                                    <button onclick="window.location.href='<?php echo base_url() . '/administrador/delEvidencia/' . $cargas['id_carga']; ?>'" class="text-white bg-rose-800 hover:bg-rose-700/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                                        <i class="fa-solid fa-<?php echo ($cargas['activo'] == 1) ? 'xmark' : 'check' ?> mr-2"></i><?php echo ($cargas['activo'] == 1) ? 'Deshabilitar' : 'Restablecer' ?>
                                    </button>
                                    <?php if ($cargas['estado'] >= 1) { ?>
                                        <button onclick="saveState()" class="text-white bg-rose-800 hover:bg-rose-700/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                                            <i class="fa-solid fa-save mr-2"></i> Guardar
                                        </button>
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        <main class="flex-1 p-4">
            <!--     <h1 class="text-2xl mb-4">Welcome to the Dashboard</h1>
    --> <!-- Add your content here -->
        </main>

        <!-- Navbar -->
        <nav class="fixed bottom-0 w-full z-40">
            <div class="bg-blue-gray text-gray-700  flex px-2 md:px-0 py-2  max-w-full overflow-x-auto">
                <!-- Existing navbar code goes here -->
            </div>
        </nav>
        <script>
            function genTable(year, unidades, t_carga) {
                $("#evidencias").dataTable().fnDestroy();
                $('#evidencias').DataTable({
                    info: true,
                    processing: true,
                    serverSide: true,
                    ajax: '<?php echo base_url(); ?>/administrador/getEvidencias/' + year + '/' + unidades + '/' + t_carga,
                    "language": {
                        "decimal": ",",
                        "thousands": ".",
                        "info": "Mostrando evidencias del _START_ al _END_ de un total de _TOTAL_ evidencias",
                        "infoEmpty": "Mostrando evidencias del 0 al 0 de un total de 0 evidencias",
                        "infoPostFix": "",
                        "infoFiltered": "(filtrado de un total de _MAX_ evidencias)",
                        "loadingRecords": "Cargando...",
                        "lengthMenu": "Mostrar _MENU_ evidencias",
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
                    }
                });
            }

            function actUni(id) {
                if (id != '') {
                    $.ajax({
                        url: '<?php echo base_url(); ?>/administrador/disPeriodo/' + id,
                        dataType: 'json',
                        success: function(resultado) {
                            if (resultado == 0) {
                                /* $(tagCodigo).val(''); */
                                console.log('No actualizado');
                            } else {
                                if (resultado.actualizado) {
                                    let arr = '#td' + id;
                                    $(arr).html(resultado.nd);
                                } else {
                                    $(arr).html('');
                                }
                            }
                        }
                    });
                }
            }

            function saveState() {
                if ($(unidades).val()) {
                    let formData = {
                        id: $("#id_carga").val(),
                        observacion: $("#observ").val(),
                        unidades: $("#unidades").val(),
                    };
                    $("#loader").show();
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>/administrador/saveState',
                        data: formData,
                        dataType: "json",
                        encode: true,
                    }).done(function(data) {
                        $("#loader").hide();
                        if (data.success == true) {
                            location.reload();
                        } else {
                            const propertyValues = Object.values(data.errors);
                            Swal.fire({
                                title: 'Error!',
                                text: propertyValues.join("\n"),
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            })
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Selecciona una opción para realizar la evaluación',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    })
                }
            }

            function fileDelete(mp) {
                id = $("#id_carga").val();
                if (mp != null && id != '') {
                    event.preventDefault();
                    $.ajax({
                        url: '<?php echo base_url(); ?>/administrador/delCarga/' + id + '/' + mp,
                        success: function(result) {
                            if (result == 0) {
                                console.log("Resultado = 0");
                            } else {
                                var resultado = JSON.parse(result);
                                if (resultado.error == '') {
                                    $("#tablaDocs tbody").empty();
                                    $("#tablaDocs tbody").append(resultado.datos);
                                } else {
                                    Swal.fire({
                                        title: 'Error!',
                                        text: resultado.error,
                                        icon: 'warning',
                                        confirmButtonText: 'Ok'
                                    })
                                }
                            }
                        }
                    });
                }
            }
        </script>
        <script>
            $(document).ready(function() {
                $('#evidencias').DataTable({
                    info: true,
                    processing: true,
                    serverSide: true,
                    ajax: '<?php echo base_url(); ?>/administrador/getEvidencias',
                    "language": {
                        "decimal": ",",
                        "thousands": ".",
                        "info": "Mostrando evidencias del _START_ al _END_ de un total de _TOTAL_ evidencias",
                        "infoEmpty": "Mostrando evidencias del 0 al 0 de un total de 0 evidencias",
                        "infoPostFix": "",
                        "infoFiltered": "(filtrado de un total de _MAX_ evidencias)",
                        "loadingRecords": "Cargando...",
                        "lengthMenu": "Mostrar _MENU_ evidencias",
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
                    }
                });
            });
        </script>
        <script>
            $("#myForm").on("submit", function(event) {
                event.preventDefault();
                $("#loader").show();
                id = $("#id_carga").val();
                $.ajax({
                    url: '<?php echo base_url(); ?>/administrador/uploadC/' + id,
                    type: 'POST',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        if (result == 0) {
                            console.log("resultado=0");
                        } else {
                            var resultado = JSON.parse(result);
                            if (resultado.error == '') {
                                $("#loader").hide();
                                $("#tablaDocs tbody").empty();
                                $("#tablaDocs tbody").append(resultado.datos);
                            } else {
                                $("#loader").hide();
                                Swal.fire({
                                    title: 'Error!',
                                    text: resultado.error,
                                    icon: 'warning',
                                    confirmButtonText: 'Ok'
                                })
                            }
                        }
                    }
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>