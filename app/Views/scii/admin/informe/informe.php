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
        <?php if (session()->getFlashdata('mensaje')): ?>
            <div
                id="flash-message"
                class="mb-4 rounded-lg border border-green-300 bg-green-100 px-4 py-3 text-green-800 transition-all duration-500 ease-in-out">
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
                }, 2000); // ⏱️ 2 segundos
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
                    <a href="<?php echo base_url() . '/administrador/altaEvidencia'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file-circle-plus pr-1"></i>
                        Nueva evidencia
                    </a>
                    <a href="<?php echo base_url() . '/administrador/evidencias'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file pr-1"></i>
                        Gestión / Evaluación de evidencias
                    </a>
                    <a href="<?php echo base_url() . '/administrador/evaluacion'; ?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file pr-1"></i>
                        Gestión / Evaluación al desempeño
                    </a>
                    <a href="<?php echo base_url() . '/administrador/informe'; ?>" class="pl-4 mb-1 flex place-items-center text-emerald-600/100"><i class="fa-solid fa-file pr-1"></i>
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
                                <td class="pt-4" tabindex="43"><a href="<?php echo base_url() . '/administrador/informes'; ?>" class="pl-4 mb-1 flex place-items-center">
                                        Dashboard de Unidades</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-full sm:w-4/5 mx-auto bg-white shadow-lg">
                <section class="container mx-auto px-6 py-6">
                    <form action="<?= base_url('administrador/solicitarInforme') ?>"
                        method="post"
                        class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                        <!-- Año -->
                        <div class="flex flex-col gap-2">
                            <label for="anio" class="text-sm font-semibold text-gray-700">
                                Año de evaluación
                            </label>
                            <select name="anio" id="anio"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                               focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 
                               block w-full p-2.5 transition"
                                required>
                                <option value="">Selecciona un año</option>
                                <?php
                                $currentYear = date('Y');
                                for ($y = $currentYear; $y >= $currentYear - 2; $y--) {
                                    echo "<option value=\"$y\">$y</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- Etapa -->
                        <div class="flex flex-col gap-2">
                            <label for="etapa" class="text-sm font-semibold text-gray-700">
                                Etapa
                            </label>
                            <select name="etapa" id="etapa"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                               focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 
                               block w-full p-2.5 transition"
                                required>
                                <option value="">Selecciona una etapa</option>
                                <option value="1">Etapa 1</option>
                                <option value="2">Etapa 2</option>
                                <option value="3">Etapa 3</option>
                                <option value="4">Etapa 4</option>
                            </select>
                        </div>

                        <!-- Solicitar -->
                        <div class="flex flex-col justify-between bg-gray-50 border rounded-lg p-4">
                            <p class="text-sm text-gray-700 leading-snug">
                                Solicitar a todos los usuarios el
                                <span class="font-semibold text-emerald-700">
                                    Informe de GOBIERNO
                                </span>
                            </p>
                            <button style="background-color: green;"
                                type="submit"
                                class="mt-4 w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-lg px-4 py-2 text-sm sm:px-6 sm:py-2.5 sm:text-base font-semibold text-white bg-emerald-800/90 hover:bg-emerald-900 active:bg-emerald-950 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:ring-offset-2 transition-all duration-200 ease-in-out shadow-md hover:shadow-lg">
                                Abrir Etapa
                            </button>

                        </div>

                        <!-- Finalizar -->
                        <div class="flex items-center justify-left">
                            <a href="<?= base_url('Administrador/finalizarEtapa') ?>"
                                class="inline-flex items-center justify-center gap-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-3 transition shadow">
                                Finalizar Etapa
                            </a>
                        </div>

                    </form>
                </section>
            </div>

        </div>
    </section>
</div>
<main class="flex-1 p-4">

</main>

<!-- Navbar -->
<nav class="fixed bottom-0 w-full z-40">
    <div class="bg-blue-gray text-gray-700  flex px-2 md:px-0 py-2  max-w-full overflow-x-auto">
        <!-- Existing navbar code goes here -->
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>