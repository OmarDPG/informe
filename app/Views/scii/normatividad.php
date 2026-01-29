
                        

    <!--Container-->
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

            <!--Console Content-->
            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full p-3">
                    <div class="">
                        <div class="border-b p-3">
                            <h5 class="font-bold uppercase text-gray-600">Normatividad</h5>
                        </div>
                        <div class="p-5">
                            <p>En este apartado podrás consultar el Acuerdo que emite las disposiciones para el establecimiento, supervisión, evaluación, actualización y mejora continua del Sistema de Control Interno Institucional.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--Divider-->
            <hr class="border-b-2 border-gray-400 my-8 mx-4">
            <div class="flex flex-row flex-wrap flex-grow mt-2">
                <section class="pdfslider slider">
                    <?php $i=1;
                    foreach ($map as $mp){?>
                    <div class="docdiv">
                        <div>
                        <iframe width="100%" height="600px" src="<?php echo base_url().'/files/normatividad/'.$mp;?>#page=1&view=FitH,top" type="application/pdf" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <?php }?>
                </section>
            </div>
        </div>
    </div>
    <script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js'></script>
    <script  src="<?php echo base_url();?>/script.js"></script>