    <div class="p-8 rounded-lg ">
        <section>
            <div id="uploadElem" tabindex="-1" aria-hidden="true" style="display:none;" class="bg-gray-700 bg-opacity-50 fixed flex place-content-center items-center top-0 left-0 right-0 z-50 w-full p-4 overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-2xl">
                        <button onclick="closeBtn();" type="button" name="closeBtn" id="closeBtn" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="authentication-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 py-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900">Agregar archivo</h3>
                            <?= form_open_multipart('administrador/uploadMY/'.$year,array('id' => 'myForm', 'autocomplete' => 'off')) ?>
                                <div>
                                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900">Nombre del archivo</label>
                                    <input type="text" name="nombre" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5" placeholder="Archivo" required>
                                </div>
                                <div>
                                    <label for="seccion" class="block mb-2 text-sm font-medium text-gray-900">Sección</label>
                                    <select id="seccion" name="seccion"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5">
                                        <option selected>Selecciona una sección</option>
                                        <option value="0">Control interno</option>
                                        <option value="1">Administración de Riesgos</option>
                                        <option value="2">COCODI</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="year" class="block mb-2 text-sm font-medium text-gray-900">Año</label>
                                    <select id="year" name="year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5">
                                        <option>Selecciona el año al que pertenece</option>
                                        <?php for($i=2023;$i<=date('Y');$i++){?>
                                            <option value="<?php echo $i?>" <?php echo ($year==$i)?'selected':''?>><?php echo $i?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-900" for="userfile">Cargar archivo</label>
                                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="userfile" name="userfile" type="file" accept="application/pdf">
                                </div>
                                <button type="submit" class="w-full text-white bg-green-500 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-2">Subir</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <header class="flex items-center h-10 px-4 bg-gray-900 text-white rounded-t-lg">
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
                <div class="flex items-center">
                    <button id="button" name="button" value="Seleccionar archivo" class="w-5 h-5 mr-1 bg-emerald-600 rounded-md ml-auto text-white text-lg font-light hover:bg-emerald-gray-light hover:cursor-pointer focus:outline-none" onclick="thisFileUpload();">
                        <svg xmlns="http://www.w3.org/2000/svg" class="rotate-45 h-5 w-5 text-white hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
                <a href="<?php echo base_url();?>/administrador/inicio" class="w-5 h-5 bg-red-500 rounded-md ml-auto text-white text-lg font-light hover:bg-emerald-gray-light hover:cursor-pointer focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </a>
            </header>
            <div class="flex shadow-2xl" style="min-height: 18rem; max-height: 30rem;">
                <div class="sm:w-1/4 w-2/5 overflow-auto bg-gray-100">
                    <div class="py-2 border-b-2">
                        <div class="flex pl-3 place-items-center">
                            <button id="myButton" class="flex place-items-center float-left submit-button pl-2 " >
                                <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" height="1em" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg> 
                                Inicio
                            </button>
                            <script type="text/javascript">
                                document.getElementById("myButton").onclick = function () {
                                    location.href = "<?php echo base_url().'/administrador/inicio'?>";
                                };
                            </script>
                        </div>
                    </div>
                    <div class="py-2 pl-2">
                        <div class="flex pl-3 place-items-center">
                            <button id="myButton" class="flex place-items-center float-left submit-button pl-2 " >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-app-indicator" viewBox="0 0 16 16"> <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/> <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/> </svg>                                Documentos
                            </button>
                        </div>
                    </div>
                    <div class="mt-2 px-5">
                        <a href="<?php echo base_url().'/administrador/normatividad';?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-folder pr-1"></i>
                            Normatividad
                        </a>
                        <a href="<?php echo base_url().'/administrador/herramientas';?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-folder pr-1"></i>
                            Herramientas
                        </a>
                        <a href="<?php echo base_url().'/administrador/material';?>" class="pl-4 mb-1 flex place-items-center"><i class="fa-solid fa-folder pr-1"></i>
                            Material
                        </a>
                        <?php for($i=2023;$i<=date('Y');$i++){?>
                        <div class="mt-2 px-7 hover:bg-white">
                            <a href="<?php echo base_url().'/administrador/material/'.$i;?>" class="pl-4 mb-1 flex place-items-center <?php echo $i==$year?'text-emerald-600/100':''?>"><i class="fa-regular fa-folder pr-1"></i>
                                <?php echo $i;?>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <div class="sm:w-4/5 w-4/5 bg-gray-50">
                    <input type="text" id="ye" name="ye" class="hidden" value="<?php echo $year;?>">
                    <section class="container mx-auto">
                        <div class="flex flex-col" style="max-height: 30rem;">
                            <div class="overflow-x-auto">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden border border-gray-200 ">
                                        <table id="tablaDocs" class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50 sticky top-0">
                                                <th scope="col" class="px-4 py-2 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Nombre del archivo
                                                </th>
                                                <th scope="col" class="px-4 py-2 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Última modificación
                                                </th>
                                                <th scope="col" class="px-4 py-2 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Sección
                                                </th>
                                                <th scope="col" class="px-4 py-2 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Tipo
                                                </th>
                                                <th scope="col" class="px-4 py-2 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Acciones
                                                </th>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <?php foreach($map as $mp){?>
                                                    <tr>
                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap"><i class="fa-solid fa-file"></i> <?php echo (explode('.',explode('_',$mp)[2])[0]);?></td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap"><?php echo date ("d/m/Y H:i:s", filemtime('files/materiales/'.$year.'/'.$mp))?></td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap"><p class="py-2 px-1 text-center shadow-md no-underline rounded-full bg-rose-800 text-white font-sans font-semibold text-sm border-blue focus:outline-none active:shadow-none"><?php echo (explode('_',$mp)[1]==0)?'Control Interno':((explode('_',$mp)[1]==1)?'Administración de Riesgos':'COCODI');?></p></td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap"><?php echo pathinfo('files/materiales/'.$year.'/'.$mp, PATHINFO_EXTENSION);?></td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <div class="flex items-center gap-x-6">
                                                            <button target="_blank" onclick="fileDelete(ye.value,'<?php echo $mp?>')" class="text-gray-500 transition-colors duration-200 hover:text-red-500 focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> </svg>
                                                            </button>
                                                            <a href="<?php echo base_url().'/files/materiales/'.$year.'/'.$mp;?>" download class="text-gray-500 transition-colors duration-200 hover:text-emerald-500 focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16"> <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/> </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php }?>
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
        <div class="bg-emerald-gray text-gray-700  flex px-2 md:px-0 py-2  max-w-full overflow-x-auto">
        <!-- Existing navbar code goes here -->
        </div>
    </nav>
    <!-- Main modal -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $("#myForm" ).on( "submit", function( event ) {
            event.preventDefault();
            closeBtn();
            $.ajax({
                url: '<?php echo base_url();?>/administrador/uploadMY',
                type: 'POST',
                data: new FormData( this ),
                processData: false,
                contentType: false,
                success: function(result){
                    if(result==0){

                    }else{
                        var resultado=JSON.parse(result);
                        if(resultado.error == ''){
                            $("#tablaDocs tbody").empty();
                            $("#tablaDocs tbody").append(resultado.datos);
                        }
                        else{
                            Swal.fire({
                            title: 'Error!',
                            text: 'resultado.error',
                            icon: 'error',
                            confirmButtonText: 'Ok'
                            })
                        }
                    }
                    
                }
            });
        });
    </script>
    <script>
        function fileDelete(year,mp){
            if(mp != null){
                event.preventDefault();
                $.ajax({
                    url: '<?php echo base_url(); ?>/administrador/delMaterial/'+year +'/'+ mp,
                    success: function(result){
                        if(result==0){
                            Swal.fire({
                            title: 'Error!',
                            text: resultado.error,
                            icon: 'error',
                            confirmButtonText: 'Ok'
                            })
                        }else{
                            var resultado=JSON.parse(result);
                            if(resultado.error == ''){
                                $("#tablaDocs tbody").empty();
                                $("#tablaDocs tbody").append(resultado.datos);
                            }else{
                                Swal.fire({
                                    title: 'Error!',
                                    text: resultado.error,
                                    icon: 'error',
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
        function thisFileUpload() {
            document.getElementById("uploadElem").style.display="flex";
        };
        function closeBtn() {
            document.getElementById("uploadElem").style.display="none";
        };
    </script>