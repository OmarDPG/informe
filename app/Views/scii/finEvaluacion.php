<?php $session = session(); ?>
<!--Container-->
<div class="container w-full mx-auto pt-20 mb-auto">
    <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
        <!--Console Content-->
        <div class="flex flex-row flex-wrap flex-grow mt-2">
            <div class="w-full p-3">
                <div class="">
                    <div class="border-b p-3">
                        <h5 class="font-bold uppercase text-gray-800 text-xl">Evaluación Finalizada</h5>
                    </div>
                    <div class="p-5 text-md font-normal">
                        <p>Estimado/a <strong><?php echo $session->get('nombre_s') . ' ' . $session->get('apellido_p') . ' ' . $session->get('apellido_m'); ?></strong>,</p>
                        <p>Has completado exitosamente la evaluación. Agradecemos tu participación y el tiempo dedicado a este proceso.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Divider-->
        <hr class="border-b-2 border-gray-400 my-8 mx-4">

        <div class="flex flex-wrap">
            <div class="w-full p-3">
                <div class="bg-white border rounded shadow p-5">
                    <h3 class="text-2xl text-gray-800 font-bold mb-5">¡Gracias por completar la evaluación!</h3>
                    <p class="text-gray-700 mb-5">Has finalizado correctamente la evaluación. Tus respuestas han sido registradas con éxito.</p>
                    <a href="<?php echo base_url('/inicio'); ?>" class="border-emerald-900 bg-emerald-900 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded">Regresar al Inicio</a>
                </div>
            </div>
        </div>
        <!--/ Console Content-->
    </div>
</div>
<!--/container-->