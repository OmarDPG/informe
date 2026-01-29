    <div class="p-8 rounded-lg">
        <section>
            <?php if(isset($errors)){?>
                <div class="p-4 text-sm text-red-800 mb-5 shadow-lg border z-50 rounded-lg bg-gray-50" role="alert">
                    <span class="font-medium">¡Error!</span> 
                    <div class="alert alert-danger">
                        <?php echo $errors->listErrors();?>
                    </div>
                </div>
            <?php }?>
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
                            <stop offset=".34" stop-color="#ffefb2"></stop><stop offset=".485" stop-color="#ffedad"></stop>
                            <stop offset=".652" stop-color="#ffe99f"></stop><stop offset=".828" stop-color="#fee289"></stop>
                            <stop offset="1" stop-color="#fed86b"></stop>
                        </linearGradient>
                        <path fill="url(#Om5yvFr6YrdlC0q2Vet0He)" d="M44.5,11h-23l-1.237,0.824C19.114,12.591,17.763,13,16.381,13H3.5C2.119,13,1,14.119,1,15.5	v22C1,38.881,2.119,40,3.5,40h41c1.381,0,2.5-1.119,2.5-2.5v-24C47,12.119,45.881,11,44.5,11z"></path>
                        <radialGradient id="Om5yvFr6YrdlC0q2Vet0Hf" cx="37.836" cy="49.317" r="53.875" gradientUnits="userSpaceOnUse">
                            <stop offset=".199" stop-color="#fec832"></stop><stop offset=".601" stop-color="#fcd667"></stop>
                            <stop offset=".68" stop-color="#fdda75"></stop><stop offset=".886" stop-color="#fee496"></stop>
                            <stop offset="1" stop-color="#ffe8a2"></stop>
                        </radialGradient>
                        <path fill="url(#Om5yvFr6YrdlC0q2Vet0Hf)" d="M44.5,40h-41C2.119,40,1,38.881,1,37.5v-21C1,15.119,2.119,14,3.5,14h13.256	c1.382,0,2.733-0.409,3.883-1.176L21.875,12H44.5c1.381,0,2.5,1.119,2.5,2.5v23C47,38.881,45.881,40,44.5,40z"></path>
                    </svg>
                    <span class="pl-2 pt-0.5 font-normal"><?php echo $current;?></span>
                </div>
            </div>
                <a href="<?php echo base_url();?>/administrador/inicio" class="w-5 h-5 bg-red-500 rounded-md ml-auto text-white text-lg font-light hover:bg-blue-gray-light hover:cursor-pointer focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </a>
            </header>
            <div class="flex shadow-2xl" style="min-height: 18rem;">
                <div class="sm:w-1/5 w-1/5 overflow-auto bg-gray-100">
                    <div class="py-2 border-b-2">
                        <div class="flex pl-3 place-items-center">
                            <button id="myButton" class="flex place-items-center float-left submit-button pl-2 " >
                                <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" height="1em" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg> 
                                Inicio
                            </button>
                            <script type="text/javascript">
                                document.getElementById("myButton").onclick = function () {
                                    location.href = "../administrador/inicio";
                                };
                            </script>
                        </div>
                    </div>
                    <div class="py-2 pl-2">
                        <div class="flex pl-3 place-items-center">
                            <button id="myButton" class="flex place-items-center float-left submit-button pl-2 " >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-app-indicator" viewBox="0 0 16 16"> <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/> <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/> </svg>
                            Evaluación
                            </button>
                        </div>
                    </div>
                    <div class="mt-2 px-5">
                        <!-- <a href="<?php echo base_url().'/administrador/altaPeriodo';?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-calendar-plus pr-1"></i>
                            Alta de periodo
                        </a>
                        <a href="<?php echo base_url().'/administrador/periodos';?>" class="pl-4 mb-1 flex place-items-center text-emerald-600/100"><i class="fa-solid fa-calendar pr-1"></i>
                            Gestión de periodos
                        </a> -->
                        <a href="<?php echo base_url().'/administrador/altaEvidencia';?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file-circle-plus pr-1"></i>
                            Nueva evidencia
                        </a>
                        <a href="<?php echo base_url().'/administrador/evidencias';?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-file pr-1"></i>
                            Gestión / Evaluación de evidencias
                        </a>
                    </div>
                </div>
                <div class="sm:w-4/5 w-4/5 bg-gray-50">
                    <section class="container mx-auto">
                        <div class="flex flex-col">
                            <div class="overflow-x-auto">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden m-2 ">
                                        <table id="periodos" class="text-sm text-gray-500 whitespace-nowrap min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                        Año
                                                    </th>
                                                    <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                        Periodo
                                                    </th>
                                                    <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                        Fecha de inicio
                                                    </th>
                                                    <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                        Fecha de finalización
                                                    </th>
                                                    <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                        Acciones
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
    <!--     <h1 class="text-2xl mb-4">Welcome to the Dashboard</h1>
    -->    <!-- Add your content here -->
    </main>

  <!-- Navbar -->
  <nav class="fixed bottom-0 w-full z-40">
    <div class="bg-blue-gray text-gray-700  flex px-2 md:px-0 py-2  max-w-full overflow-x-auto">
      <!-- Existing navbar code goes here -->
    </div>
  </nav>
    <script>
        function actUni(id) {           
            if(id!=''){
                $.ajax({
                    url: '<?php echo base_url(); ?>/administrador/disPeriodo/'+id,
                    dataType: 'json',
                    success: function(resultado){
                        if(resultado==0){
                            /* $(tagCodigo).val(''); */
                            console.log('No actualizado');
                        }else{
                            if(resultado.actualizado){
                                let arr='#td'+id;
                                $(arr).html(resultado.nd);
                            }else{
                                $(arr).html('');
                            }
                        }
                    }
                });
            }
        }        
    </script>
  <script>
    $(document).ready( function () {
        $('#periodos').DataTable({
            info: true,
            processing: true,
            serverSide: true,
            ajax: '<?php echo base_url(); ?>/administrador/getPeriodos',
            "language": {
                "decimal": ",",
                "thousands": ".",
                "info": "Mostrando periodos del _START_ al _END_ de un total de _TOTAL_ periodos",
                "infoEmpty": "Mostrando periodos del 0 al 0 de un total de 0 periodos",
                "infoPostFix": "",
                "infoFiltered": "(filtrado de un total de _MAX_ periodos)",
                "loadingRecords": "Cargando...",
                "lengthMenu": "Mostrar _MENU_ periodos",
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
                    "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
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
    } );
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>
 