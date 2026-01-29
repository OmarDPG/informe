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
                                <td class="pt-4" tabindex="43"><a href="<?php echo base_url() . '/administrador/editarEvaluacion'; ?>" class="pl-4 mb-1 flex place-items-center">
                                        Editar evaluacion</a></td>
                            </tr>
                            <tr>
                                <td tabindex="42" class="pt-4 align-middle text-center pr-2">
                                    <i class="fa-solid fa-paper-plane text-2xl text-rose-900"></i>
                                </td>
                                <td class="pt-4" tabindex="43"><a href="<?php echo base_url() . '/administrador/historiaEvaluacion'; ?>" class="pl-4 mb-1 flex place-items-center">
                                        Historial de Evaluaciones</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="sm:w-4/5 w-4/5 bg-gray-50">
                <section class="pt-2 bg-white">
                    <div class="px-4 mx-auto ">
                        <div class="w-full mx-auto mt-4  text-center">
                            <div class="relative z-0 w-full" style="height: 100vh; overflow-y:auto">
                                <div class="relative shadow-2xl">
                                    <div class="relative  shadow-md sm:rounded-lg h-90 overflow-y-auto mb-10">
                                        <form class="w-full flex flex-col">
                                            <div class="grid grid-cols-3 gap-4 -mx-3 mb-6">
                                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="grid-first-name">
                                                        Nombre del servidor
                                                    </label>
                                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Nombre del servidor">
                                                </div>
                                                <div class="w-full md:w-1/2 px-3">
                                                    <label class="text-left block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                                        Direcccion
                                                    </label>
                                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Direccion a la que pertenece">
                                                </div>
                                                <div class="w-full md:w-1/2 px-3">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left" for="grid-last-name">
                                                        Cargo
                                                    </label>
                                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Cargo">
                                                </div>
                                            </div>
                                            <div class="flex flex-col -mx-3 mb-6 my-10">
                                                <h3 class="uppercase text-2xl">cedula de evaluacion al desempeño</h3>
                                                <div class="w-full px-3">
                                                    <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2 text-xl" for="grid-password">
                                                        I.principales funciones y/o actividades que desempeña el servido público (máximo 6)
                                                    </label>
                                                    <textarea name="" cols="180" rows="5" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones"></textarea>
                                                </div>
                                            </div>
                                            <hr class="my-8">
                                            <div class="flex flex-col -mx-3 mb-2 my-10">
                                                <h2 class="uppercase text-xl">II. Descripcion y evaluacion de metas</h2>
                                                <h3 class="uppercase">De acuerdo con el apartado I Principales funciones y/o actividades que desempeña, capture las metas de mayor a menor relevancia</h3>
                                                <div class="grid grid-cols-5 mx-4 my-8 place-items-center gap-4">
                                                    <h4 class="col-start-1 col-end-2">Los campos con (*) son obligatorios</h4>
                                                    <p class="uppercase" style="grid-column-start: 5; grid-column-end: 6;">fecha de cimplimiento <br>antes de <br></p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                        Meta 1
                                                    </label>
                                                    <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta    "></textarea>
                                                    <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                        Meta 2
                                                    </label>
                                                    <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta    "></textarea>
                                                    <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                        Meta 3
                                                    </label>
                                                    <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta    "></textarea>
                                                    <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                        Meta 4
                                                    </label>
                                                    <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta    "></textarea>
                                                    <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                        Meta 5
                                                    </label>
                                                    <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta    "></textarea>
                                                    <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                                </div>
                                            </div>
                                            <hr class="my-8">
                                            <div class="flex flex-col -mx-3 mb-2 my-10">
                                                <div class="mx-auto" style="width: 90%;">
                                                    <h2 class="uppercase text-2xl">III. Evaluacion de criterio de desempeño</h2>
                                                    <h3 class="uppercase text-left">A CONTINUACIÓN SE PRESENTAN DIVERSOS FACTORES DE COMPORTAMIENTO QUE INFLUYEN EN EL DESEMPEÑO DEL SERVIDOR PÚBLICO; EVALÚE CADA UNA DE ELLOS CONFORME A LA SIGUIENTE ESCALA: (DE SER NECESARIO AGREGAR EVIDENCIAS)<br>
                                                        (VALOR TOTAL DE EVALUACIÓN DEL SEGMENTO III: 70 %) </h3>
                                                </div>
                                                <div style="width: 50%;" class="mx-auto mt-12 my-8">
                                                    <table class="table-fixed text-left border-2" style="width: 100%;">
                                                        <thead class="border-2 p-4">
                                                            <tr class="border-2">
                                                                <th class="border-2">Sobresaliente</th>
                                                                <th class="border-2">Bueno</th>
                                                                <th class="border-2">Regular</th>
                                                                <th class="border-2">Nulo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="border-2">5</td>
                                                                <td class="border-2">3</td>
                                                                <td class="border-2">1</td>
                                                                <td class="border-2">0</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="grid grid-cols-5 mx-auto mb-4" style="width: 90%; ">
                                                    <h4 class="border-2">Criterios</h4>
                                                    <h4 class="col-start-2 col-span-2 border-2">Descripcion</h4>
                                                    <h4 class="border-2">Archivo</h4>
                                                    <h4 class="border-2">Calificacion</h4>
                                                </div>
                                                <div>
                                                    <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style="width: 90%; ">
                                                        <h4 class="uppercase">Productividad <br>y eficiencia</h4>
                                                        <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Realiza sus actividades oportunamente y de manera correcta aprovechando las herramientas y recursos con los que
                                                            cuenta.</p>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="width: 90%;">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                            Argumento
                                                        </label>
                                                        <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta    "></textarea>
                                                        <div>

                                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                                        </div>
                                                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Calificacion">
                                                    </div>
                                                </div>

                                                <hr class="my-4">

                                                <div>
                                                    <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style="width: 90%; ">
                                                        <h4 class="uppercase">Trabajo en <br>y equipo</h4>
                                                        <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Ayuda a crear un buen clima de trabajo, comprende la dinámica del funcionamiento grupal y tiene habilidad para tratar las necesidades de otras áreas con la misma dedicación que las de su propia área.</p>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="width: 90%;">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                            Argumento
                                                        </label>
                                                        <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta    "></textarea>
                                                        <div>

                                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                                        </div>
                                                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Calificacion">
                                                    </div>
                                                </div>

                                                <hr class="my-4">

                                                <div>
                                                    <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style="width: 90%; ">
                                                        <h4 class="uppercase">Analisis de <br>problemas</h4>
                                                        <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Obtener información relevante e identificar los elementos críticos de las situaciones, sus implicaciones y detalles relevantes para elegir acciones apropiadas.</p>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="width: 90%;">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                            Argumento
                                                        </label>
                                                        <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta    "></textarea>
                                                        <div>

                                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                                        </div>
                                                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Calificacion">
                                                    </div>
                                                </div>
                                                <hr class="my-4">

                                                <div>
                                                    <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style="width: 90%; ">
                                                        <h4 class="uppercase">Aportaciones <br>valiosas</h4>
                                                        <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Demuestra compromiso destacado para identificar áreas de oportunidad y proponer mejoras con la finalidad de alcanzar objetivos y metas institucionales.</p>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="width: 90%;">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                            Argumento
                                                        </label>
                                                        <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta    "></textarea>
                                                        <div>

                                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                                        </div>
                                                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Calificacion">
                                                    </div>
                                                </div>
                                                <hr class="my-4">

                                                <div>
                                                    <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style="width: 90%; ">
                                                        <h4 class="uppercase">Comunicación y <br>confiabilidad</h4>
                                                        <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Muestra respeto hacia sus compañeros, es coherente con su discurso y su forma de actuar, brinda retroalimentación a su equipo de trabajo respecto de alguna actividad o instrucción determinada. </p>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="width: 90%;">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                            Argumento
                                                        </label>
                                                        <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta    "></textarea>
                                                        <div>

                                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                                        </div>
                                                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Calificacion">
                                                    </div>
                                                </div>
                                                <hr class="my-4">

                                                <div>
                                                    <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style="width: 90%; ">
                                                        <h4 class="uppercase">Trabajos <br>extras</h4>
                                                        <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Muestra disposición y buen ánimo para desahogar proyectos y tareas, realiza jornadas de trabajo extraordinario (horario de salida extemporáneo) para culminar o vigilar el correcto funcionamiento de su adscripción y realiza aportaciones eficientes a su trabajo.</p>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="width: 90%;">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                            Argumento
                                                        </label>
                                                        <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta    "></textarea>
                                                        <div>

                                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                                        </div>
                                                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Calificacion">
                                                    </div>
                                                </div>
                                                <hr class="my-4">

                                                <div>
                                                    <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style="width: 90%; ">
                                                        <h4 class="uppercase">Trabajo bajo <br>presion</h4>
                                                        <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Alcanza los objetivos previstos en situaciones de presión de tiempo, inconvenientes, desacuerdos, oposición o diversidad; mantiene un desempeño alto en situaciones de mucha exigencia. </p>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="width: 90%;">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                            Argumento
                                                        </label>
                                                        <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta    "></textarea>
                                                        <div>

                                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                                        </div>
                                                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Calificacion">
                                                    </div>
                                                </div>
                                                <hr class="my-4">

                                                <div>
                                                    <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style="width: 90%; ">
                                                        <h4 class="uppercase">Desarrollo de<br>competencias <br>adicionales <br>(capacitacion)</h4>
                                                        <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Muestra interés por el aprendizaje y la actualización. Busca oportunidades de crecimiento personal y profesional a través de capacitación o cualquier otro medio.</p>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="width: 90%;">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                            Argumento
                                                        </label>
                                                        <textarea name="" cols="60" rows="3" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta    "></textarea>
                                                        <div>

                                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                                        </div>
                                                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Calificacion">
                                                    </div>
                                                </div>
                                                <hr class="my-4">

                                                <div class="mx-auto my-8 grid-cols-3" style="width:90%; display:grid; grid-template-columns:repeat(3, 1fr); gap:1em; place-items:center;">
                                                    <div>
                                                        <h3 class="uppercase">Total del segmento III</h3>
                                                    </div>
                                                    <div>
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">Total %</label>
                                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    </div>
                                                    <div>
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">Puntuaje obtenido</label>
                                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    </div>
                                                </div>

                                            </div>
                                            <hr class="my-8">
                                            <div style="width:90%;" class="mx-auto">
                                                <div class="flex flex-col justify-center my-8">
                                                    <h3 class="uppercase text-center text-lg font-bold">IV. Criterios de valor agregado</h3>
                                                    <p class="text-center">INDIQUE EN LA COLUMNA LOS PUNTOS QUE OTORGA DE 1 -10 EN CADA PONDERACIÓN. (VALOR TOTAL DE EVALUACIÓN DEL SEGMENTO: 30%) </p>
                                                </div>
                                                <div class="grid grid-cols-2 my-8 gap-4">
                                                    <div class="grid grid-rows-3 mb-4">
                                                        <div class="grid grid-cols-3 p-4 uppercase border-2">
                                                            <div>
                                                                <p>Dimensiones</p>
                                                            </div>
                                                            <div>
                                                                <p>Indicador de Gestion</p>
                                                            </div>
                                                            <div>
                                                                <p>Puntos</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-3 p-4 border-b-2 border-r-2 border-l-2" style="border-right-width:2px">
                                                            <div class="place-content-center" style="border-right-width:2px">
                                                                <p class="uppercase">Valores</p>
                                                            </div>
                                                            <div class="grid grid-rows-5 place-items-center" style="border-right-width:2px">
                                                                <div>
                                                                    <p>Honestidad</p>
                                                                </div>
                                                                <div>
                                                                    <p>Responsabilidad</p>
                                                                </div>
                                                                <div>
                                                                    <p>Respeto</p>
                                                                </div>
                                                                <div>
                                                                    <p>Actitud de Servicio</p>
                                                                </div>
                                                                <div>
                                                                    <p>Iniciativa</p>
                                                                </div>
                                                            </div>
                                                            <div class="justify-center items-center grid grid-rows-5">
                                                                <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                    <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                </div>
                                                                <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                    <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                </div>
                                                                <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                    <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                </div>
                                                                <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                    <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                </div>
                                                                <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                    <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-3 border-b-2 border-l-2 border-r-2 justify-center items-center" style="border-right-width:2px">
                                                            <div>
                                                                <p></p>
                                                            </div>
                                                            <div style="border-right-width:2px; border-left-width:2px">
                                                                <p class="uppercase">Suma</p>
                                                            </div>
                                                            <div class="p-4 grid justify-center items-center gap-1">
                                                                <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-rows-3 mb-4">
                                                        <div class="grid grid-cols-3 p-4 uppercase border-2">
                                                            <div>
                                                                <p>Dimensiones</p>
                                                            </div>
                                                            <div>
                                                                <p>Indicador de Gestion</p>
                                                            </div>
                                                            <div>
                                                                <p>Puntos</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-3 p-4 border-b-2 border-r-2 border-l-2" style="border-right-width:2px">
                                                            <div class="place-content-center" style="border-right-width:2px">
                                                                <p class="uppercase">Valores</p>
                                                            </div>
                                                            <div class="grid grid-rows-5 place-items-center" style="border-right-width:2px">
                                                                <div>
                                                                    <p>Lealtas</p>
                                                                </div>
                                                                <div>
                                                                    <p>Disciplina</p>
                                                                </div>
                                                                <div>
                                                                    <p>Profesionalidad</p>
                                                                </div>
                                                                <div>
                                                                    <p>Igualdad y No Discriminación</p>
                                                                </div>
                                                                <div>
                                                                    <p>Equidad de Genero</p>
                                                                </div>
                                                            </div>
                                                            <div class="justify-center items-center grid grid-rows-5">
                                                                <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                    <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                </div>
                                                                <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                    <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                </div>
                                                                <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                    <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                </div>
                                                                <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                    <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                </div>
                                                                <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                    <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-3 border-b-2 border-l-2 border-r-2 justify-center items-center" style="border-right-width:2px">
                                                            <div>
                                                                <p></p>
                                                            </div>
                                                            <div style="border-right-width:2px; border-left-width:2px">
                                                                <p class="uppercase">Suma</p>
                                                            </div>
                                                            <div class="p-4 grid justify-center items-center gap-1">
                                                                <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <hr class="my-8">
                                            <div style="width:90%;" class="mx-auto">
                                                <div class="flex flex-col justify-center my-8">
                                                    <h3 class="uppercase text-center text-lg font-bold">Resumen de calificaciones</h3>
                                                </div>
                                                <div class="grid grid-cols-2 gap-4 border-2 p-3" style="width: 50%; margin: 0 auto;">
                                                    <div class="grid grid-rows-3 gap-2 place-items-center" style="border-right-width:2px;">
                                                        <div class="text-left">
                                                            <p>Puntaje Total del Segmento III</p>
                                                        </div>
                                                        <div class="text-left">
                                                            <p>Puntaje Total del Segmento IV</p>
                                                        </div>
                                                        <div class="text-left">
                                                            <p>Calificacion Global</p>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-rows-3 gap-2">
                                                        <div class="p-4 flex flex-row justify-center items-center">
                                                            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>
                                                        <div class="p-4 flex flex-row justify-center items-center">
                                                            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>
                                                        <div class="p-4 flex flex-row justify-center items-center">
                                                            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-8">
                                            <div style="width:90%;" class="mx-auto">
                                                <div class="flex flex-col justify-center my-8">
                                                    <h3 class="uppercase text-center text-lg font-bold">V. Comentarios del Evaluado</h3>
                                                </div>
                                                <div class="p-4 flex flex-row justify-center items-center">
                                                    <textarea name="" cols="180" rows="5" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones"></textarea>
                                                </div>
                                            </div>
                                            <hr class="my-8">
                                            <div style="width:90%;" class="mx-auto">
                                                <div class="flex flex-col justify-center my-8">
                                                    <h3 class="uppercase text-center text-lg font-bold">VI. Comentarios del Evaluador</h3>
                                                </div>
                                                <div class="p-4 flex flex-col justify-center items-center gap-4">
                                                    <div class="p-4 border-2 rounded-md">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">SI EL SERVICOR PÚBLICO HA SIDO CAPACITADO, DESCRIBA BREVEMENTE CUÁL HA SIDO EL IMPACTO DE LAS ACCIONES DE CAPACITACIÓN EN LOS PROCESOS COTIDIANOS DE SUS LABORES </label>
                                                        <textarea name="" cols="180" rows="5" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones"></textarea>
                                                    </div>
                                                    <div class="p-4 border-2 rounded-md">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">DESCRIBA BREVEMENTE LAS APORTACIONES QUE EL SERVIDOR PÚBLICO HA REALIZADO PARA MEJORAR SUS PROCESOS DE TRABAJO </label>
                                                        <textarea name="" cols="180" rows="5" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones"></textarea>
                                                    </div>
                                                    <div class="p-4 border-2 rounded-md">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">RESPECTO A LA EVALUACIÓN DEL SERVIDOR PÚBLICO OBTENIDA EN EL SEMESTRE ANTERIOR, DESCRIBA BREVEMENTE SI SE OBSERVARON MODIFICACIONES POSITIVAS O NEGATIVAS RESPECTO A SU TRABAJO </label>
                                                        <textarea name="" cols="180" rows="5" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones"></textarea>
                                                    </div>
                                                    <div class="p-4 border-2 rounded-md">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">MENCIONE NECESIDADES DE CAPACITACIÓN QUE USTED CONSIDERE ÚTILES PARA QUE EL TRABAJADOR INCREMENTE SU EFICIENCIA LABORAL </label>
                                                        <textarea name="" cols="180" rows="5" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="my-8">
                                        </form>
                                    </div>
                                    <!-- <img src="https://cdn.devdojo.com/images/march2021/green-dashboard.jpg"> -->
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <button onclick="saveState()" class="text-white bg-rose-800 hover:bg-rose-700/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                                <i class="fa-solid fa-save mr-2"></i> Guardar
                            </button>
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