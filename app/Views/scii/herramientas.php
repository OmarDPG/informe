
<?php $i=1;?>
    <!--Container-->
    <div class="container w-full mx-auto pt-20">
      <div class="w-full px-4 md:px-0 md:mt-10 mb-16 text-gray-1000 leading-normal">
        <!--Console Content-->
        <div class="flex flex-row flex-wrap flex-grow mt-2">
          <div class="w-full p-3">
              <div class="">
                <div class="border-b p-3">
                  <h5 class="font-bold uppercase text-gray-600">Herramientas del SCII</h5>
                </div>
                <div class="p-5">
                  <ul>Aquí puedes consultar, descargar y revisar las plantillas que se utilizan para las entregas del Comité de Control y Desempeño Institucional, respecto a los Programas de Trabajo, entre otros.</ul>
                </div>
              </div>
          </div>
        </div>
        <hr class="border-b-2 border-gray-400 my-10 mx-4">
        <div class="flex flex-row flex-wrap flex-grow mt-2">
          <div class="flex w-full">
            <div class="hidden w-full md:grid md:w-1/3 p-3">
              <div id="lottie"></div>
              <script>
                bodymovin.loadAnimation({
                  container: document.getElementById("lottie"),
                  path: '<?php echo base_url();?>/assets/lotties/desk.json'
                })
              </script>
            </div>
            <div class="md:w-2/3 w-full p-3 self-center"> 
              <div class="grid grid-cols-1 gap-4">
                <?php 
                  $files = glob('files/herramientas/'.$i.'/*');
                  $det=isset($files[0])?(pathinfo($files[0], PATHINFO_EXTENSION)):'file';
                ?>
                <a target="_blank" href="<?php echo base_url().'/files/herramientas/'.$i.'/'.$i.'.'.$det?>" class="group flex flex-row items-center relative h-full w-full overflow-hidden rounded-lg bg-white text-lg border rounded-full p-3">
                  <div class="absolute inset-0 w-3 bg-emerald-700 transition-all duration-[400ms] ease-out group-hover:w-full"></div>
                  <i class="relative inline-flex items-center p-3 justify-center w-10 h-10 mr-2 text-emerald-700 group-hover:text-white transition-colors duration-150 bg-emerald-100 group-hover:bg-emerald-700 rounded-full focus:shadow-outline fa-solid fa-flag"></i>
                  <span class="relative text-black mt-2 font-medium text-left group-hover:text-white">Programa de Trabajo de Control Interno</span>
                </a><?php $i++;?>
                <?php 
                  $files = glob('files/herramientas/'.$i.'/*');
                  $det=isset($files[0])?(pathinfo($files[0], PATHINFO_EXTENSION)):'file';
                ?>
                <a target="_blank" href="<?php echo base_url().'/files/herramientas/'.$i.'/'.$i.'.'.$det?>" class="group flex flex-row items-center relative h-full w-full overflow-hidden rounded-lg bg-white text-lg border rounded-full p-3">
                  <div class="absolute inset-0 w-3 bg-[#f4a53e] transition-all duration-[400ms] ease-out group-hover:w-full"></div>
                  <i class="relative inline-flex items-center p-3 justify-center w-10 h-10 mr-2 text-yellow-700 group-hover:text-white transition-colors duration-150 bg-yellow-100 group-hover:bg-[#f4a53e] rounded-full focus:shadow-outline fa-solid fa-laptop-file"></i>
                  <span class="relative text-black mt-2 font-medium text-left group-hover:text-white">Programa de Trabajo de Adiministración de Riesgos</span>
                </a><?php $i++;?>
                <?php 
                  $files = glob('files/herramientas/'.$i.'/*');
                  $det=isset($files[0])?(pathinfo($files[0], PATHINFO_EXTENSION)):'file';
                ?>
                <a target="_blank" href="<?php echo base_url().'/files/herramientas/'.$i.'/'.$i.'.'.$det?>" class="group flex flex-row items-center relative h-full w-full overflow-hidden rounded-lg bg-white text-lg border rounded-full p-3">
                  <div class="absolute inset-0 w-3 bg-[#f4a53e] transition-all duration-[400ms] ease-out group-hover:w-full"></div>
                  <i class="relative inline-flex items-center p-3 justify-center w-10 h-10 mr-2 text-yellow-700 group-hover:text-white transition-colors duration-150 bg-yellow-100 group-hover:bg-[#f4a53e] rounded-full focus:shadow-outline fa-solid fa-table"></i>
                  <span class="relative text-black mt-2 font-medium text-left group-hover:text-white">Matriz y Mapa de Riesgos</span>
                </a><?php $i++;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/container-->

    