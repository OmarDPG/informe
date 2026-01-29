<?php $session = session(); ?>
<!--Container-->
<div class="container w-full mx-auto pt-20 mb-auto">
    <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
        <!--Console Content-->
        <div class="flex flex-row flex-wrap flex-grow mt-2">
            <div class="w-full p-3">
                <?php if (session()->getFlashdata('mensaje')): ?>
                    <div
                        id="flash-message"
                        class="mb-4 rounded-lg border border-red-300 bg-red-100 px-4 py-3 text-red-800 transition-all duration-500 ease-in-out">
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
                <div class="">
                    <div class="border-b p-3">
                        <h5 class="font-bold uppercase text-gray-800 text-xl">Bienvenido al Sistema de Control Interno Institucional</h5>
                    </div>
                    <div class="p-5 text-md font-normal">
                        <p>El Sistema de Control Interno Institucional (SCII) es implementado para promover el logro de objetivos institucionales, minimizar los riesgos, reducir los actos de corrupción, integrar las Tecnologías de Información a los procesos institucionales, respaldar la integridad y el comportamiento ético de las servidoras y servidores públicos, así como consolidar los procesos de rendición de cuentas y de transparencia.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Divider-->
        <hr class="border-b-2 border-gray-400 my-8 mx-4">

        <div class="flex flex-wrap">
            <div class="grid text-center self-center <?php echo ($session->admGen != 1) ? 'md:w-1/2 xl:w-1/2 p-3' : 'md:w-1/2 xl:w-1/3 p-3'; ?>">
                <a href="<?php echo base_url(); ?>/scii/normatividad/" class="grid place-content-center relative flex overflow-hidden font-medium text-gray-800 bg-white border rounded-lg shadow-inner group">
                    <span class="absolute text-4xl top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl inset-0 w-full h-full duration-300 delay-300 bg-emerald-800 opacity-0 group-hover:opacity-100"></span>
                    <span class="text-4xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease"><i class="fas group-hover:text-white duration-300 delay-200 fa-gavel fa-fw text-emerald-800"></i></span>
                    <span class="text-2xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease">Normatividad</span>
                </a>
            </div>
            <div class="grid text-center self-center <?php echo ($session->admGen != 1) ? 'md:w-1/2 xl:w-1/2 p-3' : 'md:w-1/2 xl:w-1/3 p-3'; ?>">
                <a href="<?php echo base_url(); ?>/scii/cronograma/" class="grid place-content-center relative flex overflow-hidden font-medium text-gray-800 bg-white border rounded-lg shadow-inner group">
                    <span class="absolute text-4xl top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl inset-0 w-full h-full duration-300 delay-300 bg-emerald-800 opacity-0 group-hover:opacity-100"></span>
                    <span class="text-4xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease"><i class="fas group-hover:text-white duration-300 delay-200 fa-clock fa-fw text-emerald-800"></i></span>
                    <span class="text-2xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease">Cronograma</span>
                </a>
            </div>
            <div class="grid text-center self-center <?php echo ($session->admGen != 1) ? 'md:w-1/2 xl:w-1/2 p-3' : 'md:w-1/2 xl:w-1/3 p-3'; ?>">
                <a href="<?php echo base_url(); ?>/scii/herramientas/" class="grid place-content-center relative flex overflow-hidden font-medium text-gray-800 bg-white border rounded-lg shadow-inner group">
                    <span class="absolute text-4xl top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl inset-0 w-full h-full duration-300 delay-300 bg-emerald-800 opacity-0 group-hover:opacity-100"></span>
                    <span class="text-4xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease"><i class="fas group-hover:text-white duration-300 delay-200 fa-gears fa-fw text-emerald-800"></i></span>
                    <span class="text-2xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease">Herramientas del SCII</span>
                </a>
            </div>
            <div class="grid text-center self-center md:w-1/2 xl:w-1/2 p-3">
                <a href="<?php echo base_url(); ?>/scii/material/" class="grid place-content-center relative flex overflow-hidden font-medium text-gray-800 bg-white border rounded-lg shadow-inner group">
                    <span class="absolute text-4xl top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl inset-0 w-full h-full duration-300 delay-300 bg-emerald-800 opacity-0 group-hover:opacity-100"></span>
                    <span class="text-4xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease"><i class="fas group-hover:text-white duration-300 delay-200 fa-magnifying-glass fa-fw text-emerald-800"></i></span>
                    <span class="text-2xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease">Material de Consulta</span>
                </a>
            </div>
            <?php if ($session->admGen == 1) { ?>
                <div class="grid text-center self-center md:w-1/2 xl:w-1/2 p-3">
                    <a href="<?php echo base_url(); ?>/scii/cumplimiento/" class="grid place-content-center relative flex overflow-hidden font-medium text-gray-800 bg-white border rounded-lg shadow-inner group">
                        <span class="absolute text-4xl top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-emerald-800 group-hover:w-full ease"></span>
                        <span class="absolute text-4xl bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-emerald-800 group-hover:w-full ease"></span>
                        <span class="absolute text-4xl top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                        <span class="absolute text-4xl bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                        <span class="absolute text-4xl inset-0 w-full h-full duration-300 delay-300 bg-emerald-800 opacity-0 group-hover:opacity-100"></span>
                        <span class="text-4xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease"><i class="fas group-hover:text-white duration-300 delay-200 fa-chart-pie fa-fw text-emerald-800"></i></span>
                        <span class="text-2xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease">Cumplimiento Institucional</span>
                    </a>
                </div>
            <?php } ?>
        </div>
        <?php if ($datos['evaluacion'] == 1) { ?>
            <div class="grid text-center self-center md:w-1/1 xl:w-1/1 p-3">
                <a href="<?php echo base_url(); ?>/scii/nuevaEvaluacion/" class="grid place-content-center relative flex overflow-hidden font-medium text-gray-800 bg-white border rounded-lg shadow-inner group">
                    <span class="absolute text-4xl top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl inset-0 w-full h-full duration-300 delay-300 bg-emerald-800 opacity-0 group-hover:opacity-100"></span>
                    <span class="text-4xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease"><i class="fas group-hover:text-white duration-300 delay-200 fa-list fa-fw text-emerald-800"></i></span>
                    <span class="text-2xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease">Evaluacion al Desempeño</span>
                </a>
            </div>
        <?php } ?>
        <?php if ($datos['ver_evaluacion'] == 1) { ?>
            <div class="grid text-center self-center md:w-1/1 xl:w-1/1 p-3">
                <a href="<?php echo base_url(); ?>/scii/verEvaluacion/" class="grid place-content-center relative flex overflow-hidden font-medium text-gray-800 bg-white border rounded-lg shadow-inner group">
                    <span class="absolute text-4xl top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl inset-0 w-full h-full duration-300 delay-300 bg-emerald-800 opacity-0 group-hover:opacity-100"></span>
                    <span class="text-4xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease"><i class="fas group-hover:text-white duration-300 delay-200 fa-list fa-fw text-emerald-800"></i></span>
                    <span class="text-2xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease">Evaluaciones</span>
                </a>
            </div>
        <?php } ?>
        <?php if ($datos['informe'] == 1) { ?>
            <div class="grid text-center self-center md:w-1/1 xl:w-1/1 p-3">
                <a href="<?php echo base_url(); ?>/scii/informe/" class="grid place-content-center relative flex overflow-hidden font-medium text-gray-800 bg-white border rounded-lg shadow-inner group">
                    <span class="absolute text-4xl top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl inset-0 w-full h-full duration-300 delay-300 bg-emerald-800 opacity-0 group-hover:opacity-100"></span>
                    <span class="text-4xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease"><i class="fas group-hover:text-white duration-300 delay-200 fa-list fa-fw text-emerald-800"></i></span>
                    <span class="text-2xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease">Informe de GOBIERNO</span>
                </a>
            </div>
        <?php } ?>
        <?php if ($datos['glosa'] == 1) { ?>
            <div class="grid text-center self-center md:w-1/1 xl:w-1/1 p-3">
                <a href="<?php echo base_url(); ?>/scii/glosa/" class="grid place-content-center relative flex overflow-hidden font-medium text-gray-800 bg-white border rounded-lg shadow-inner group">
                    <span class="absolute text-4xl top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-emerald-800 group-hover:w-full ease"></span>
                    <span class="absolute text-4xl top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-emerald-800 group-hover:h-full ease"></span>
                    <span class="absolute text-4xl inset-0 w-full h-full duration-300 delay-300 bg-emerald-800 opacity-0 group-hover:opacity-100"></span>
                    <span class="text-4xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease"><i class="fas group-hover:text-white duration-300 delay-200 fa-list fa-fw text-emerald-800"></i></span>
                    <span class="text-2xl h-full p-2 relative transition-colors duration-300 delay-200 group-hover:text-white ease">Glosa del Informe de Gobierno 2025</span>
                </a>
            </div>
        <?php } ?>
        <!--/ Console Content-->
    </div>
</div>
<!--/container-->