    <style>
      i.icon-sorts {display: none;}
      th { pointer-events: none;}
    </style>
    <!--Container-->
    <div class="container w-full mx-auto pt-20">
      <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
        <!--Console Content-->
        <div class="flex flex-row flex-wrap flex-grow mt-2">
          <div class="w-full p-3">
              <div class="">
                <div class="border-b p-3">
                  <h5 class="font-bold uppercase text-gray-600">Cumplimiento Institucional</h5>
                </div>
                <!-- Image loader -->
                <div id='loader' class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center z-50" style='display: none;'>
                    <i class="fa-solid text-rose-900 fa-spinner fa-spin-pulse text-9xl"></i>
                </div>
                <!-- Image loader -->
                <div class="p-5">
                  <ul>En este apartado las Unidades Administrativas deberán cargar la evidencia de cumplimiento a las actividades comprometidas en los Programas de Trabajo de Control Interno y de Administración de Riesgos, de acuerdo a los medios de verificación y fechas de término establecidas, así como la demás información necesaria para el desahogo de las Sesiones Ordinarias del Comité.</ul>
                </div>
                <div>
                  <div class="row">
                    <div class="col-12">
                      <table class="table table-bordered sizeFontTable">
                        <thead class="thead-light">
                          <tr>
                            <th style="text-align: center; width: 18%; padding-top: 5px; padding-bottom: 5px;" tabindex="40">Estatus registro</th>
                            <th style="text-align: center; width: 82%; padding-top: 5px; padding-bottom: 5px;" tabindex="41">Descripción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td tabindex="42" class="pt-4 align-middle text-center">
                              <i class="fa-solid fa-paper-plane text-2xl text-rose-900"></i>
                            </td>
                            <td class="pt-4" tabindex="43">Actividad con información preliminar. Es necesario completar el registro o concluirlo a través del botón <strong><span class="colorNumeralRen">“Concluir registro”</span></strong>.</td>
                          </tr>
                          <tr>
                            <td class="pt-4 align-middle text-center" tabindex="44">
                              <i class="fa-regular fa-hourglass-half fa-spin text-2xl text-blue-500"></i>
                            </td>
                            <td class="pt-4" tabindex="45">
                              Información enviada, por lo que no puede ser modificada.<br>
                              En este estatus, el administrador revisará la información aportada en cuanto a su congruencia. En caso de que resulten sugerencias, se mostrará el mensaje <strong>“Observaciones”</strong>.
                            </td>
                          </tr>
                          <tr>
                            <td class="pt-4 align-middle text-center" tabindex="46">
                              <i class="fa-solid fa-thumbs-up text-2xl text-green-600"></i>
                            </td>
                            <td class="pt-4" tabindex="47">La información ha sido entregada correctamente.</td>
                          </tr>
                          <tr>
                            <td class="pt-4 align-middle text-center" tabindex="48">
                              <i class="fa-solid fa-triangle-exclamation text-2xl text-yellow-300"></i>
                            </td>
                            <td class="pt-4" tabindex="49">La información tiene observaciones, por lo que deberán de ser atendidas para nuevamente entrar en proceso de atención.</td>
                          </tr>
                          <tr>
                            <td class="pt-4 align-middle text-center" tabindex="46">
                              <i class="fa-solid fa-flag-checkered text-2xl text-[#c19e74]"></i>
                            </td>
                            <td class="pt-4" tabindex="50">La actividad se ha completado.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-lg-4 col">&nbsp;</div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <hr class="border-b-2 border-gray-400 my-8 mx-4">
        <div class="flex flex-row flex-wrap flex-grow mt-2">
          <div class="w-full p-3">
            <div class="">
              <section class="pt-4 bg-white">
                <div class="px-4 mx-auto max-w-7xl">
                  <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
                    <h1 class="mb-8 text-xl font-bold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
                      <span>DETALLE</span> 
                      <span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-rose-800 to-purple-500 lg:inline">DE LA ACTIVIDAD</span>
                    </h1>
                    <p class="px-0 mb-8 text-md text-gray-600 md:text-md lg:px-24">
                    Proporcione las características básicas de la actividad a través del siguiente cuestionario. Si cuenta con información precargada, puede editarla desde el campo que corresponda.
                    Para finalizar el cuestionario, utilice el botón correspondiente que se ubica en la parte inferior del mismo.
                    </p>
                  </div>
                  <div class="w-full mx-auto mt-10 text-center ">
                    <div class="relative z-0 w-full ">
                      <div class="relative shadow-2xl">
                        <div class="flex items-center flex-none px-4 bg-emerald-700 rounded-b-none sm:h-auto md:h-11 rounded-xl">
                          <div class="flex space-x-1.5 items-center	p-3">
                            <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                            <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                            <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                          </div>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" >
                          <table class="w-full text-md text-left text-gray-500">
                            <thead class="text-md text-gray-700 uppercase bg-gray-300">
                              <tr>
                                <th scope="col" class="px-6 py-3">Nombre</th>
                                <th scope="col" class="px-6 py-3">Descripción</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="group border-b">
                                <td class="px-6 py-4 group-hover:bg-yellow-100 bg-yellow-50 text-yellow-900"><?php echo ($cargas['t_carga']==0)?'Acción de mejora':(($cargas['t_carga']==1)?'Factores de riesgo':'Punto del Orden del Día')?></td>
                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo $cargas['accion_factor'];?></td>
                              </tr>
                              <?php if($cargas['t_carga']<=1){?>
                              <tr class="group border-b">
                                <td class="px-6 py-4 group-hover:bg-yellow-100 bg-yellow-50 text-yellow-900">Fecha de inicio</td>
                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo date('d-m-Y',strtotime($cargas['fecha_inicio']));?></td>
                              </tr>
                              <tr class="group border-b">
                                <td class="px-6 py-4 group-hover:bg-yellow-100 bg-yellow-50 text-yellow-900">Fecha de término</td>
                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo date('d-m-Y',strtotime($cargas['fecha_termino']));?></td>
                              </tr>
                              <?php }?>
                              <tr class="group border-b">
                                <td class="px-6 py-4 group-hover:bg-yellow-100 bg-yellow-50 text-yellow-900"><?php echo ($cargas['t_carga']<=1)?'Medio de verificación':'Requerimiento'?></td>
                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo $cargas['medio_verificacion'];?></td>
                              </tr>
                              <?php if($cargas['t_carga']>=1 && $cargas['t_carga']<=2){?>
                              <tr class="group border-b">
                                <td class="px-6 py-4 group-hover:bg-yellow-100 bg-yellow-50 text-yellow-900"><?php echo ($cargas['t_carga']==1)?'Descripción de la acción de control':'Descripción del requerimiento'?></td>
                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo $cargas['descripcion'];?></td>
                              </tr>
                              <?php }?>
                              <tr class="group border-b">
                                <td class="px-6 py-4 group-hover:bg-yellow-100 bg-yellow-50 text-yellow-900">Estado</td>
                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php 
                                  switch($cargas['estado']){
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
                                <td class="px-6 py-4 group-hover:bg-yellow-100 bg-yellow-50 text-yellow-900">Observación</td>
                                <td class="px-6 py-4 group-hover:bg-gray-100"><?php echo ($cargas['observacion']==null)?'N/A':$cargas['observacion'];?></td>
                              </tr>
                              <tr class="group border-b">
                                <td class="px-6 py-4 group-hover:bg-yellow-100 bg-yellow-50 text-yellow-900">Justificación</td>
                                <td class="px-6 py-4 group-hover:bg-gray-100">
                                  <?php if($cargas['estado']<4){?>
                                    <textarea <?php echo ($cargas['estado']==1 || $cargas['estado']==2)?'readonly':''?> id="justif" name="justif" rows="4" class="block p-2.5 w-full text-sm text-gray-900 <?php echo ($cargas['estado']==1 || $cargas['estado']==2)?'bg-gray-100':''?> rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="En caso de requerir, escribe alguna justificación..."><?php echo $cargas['justificacion'];?></textarea>
                                  <?php }else{?>
                                    <?php echo ($cargas['justificacion']==null)?'N/A':$cargas['justificacion'];?>
                                    <?php }?>
                                </td>
                              </tr>
                              <tr class="group border-b">
                                <td class="px-6 py-4 group-hover:bg-yellow-100 bg-yellow-50 text-yellow-900"><?php echo ($cargas['estado']==1 || $cargas['estado']>=3)?'Información cargada':'Cargar información'?>
                                <?php if($cargas['estado']==0 || $cargas['estado']==3){?>
                                <script>
                                  function thisFileUpload() {
                                    document.getElementById("userfile").click();
                                  };
                                  function change(){
                                    document.getElementById("submit").click();
                                  }
                                </script>
                                <form action="<?php echo base_url().'/scii/upload'?>" id="myForm" class="hidden" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                  <input type="file" name="userfile" id="userfile" onchange="change()" class="hidden" accept="application/pdf,application/msword,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" >
                                  <input type="hidden" value="<?php echo $cargas['id_carga'];?>" id="id_carga" name="id_carga"/>
                                  <input type="submit" id="submit" value="Go">
                                </form>
                                <button id="button" name="button" value="Seleccionar archivo" class="w-5 h-5 mr-1 bg-rose-800 rounded-md ml-auto text-white text-lg font-light hover:bg-blue-gray-light hover:cursor-pointer focus:outline-none" onclick="thisFileUpload();">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="rotate-45 h-5 w-5 text-white hover:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                                <?php }?>
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
                                    $i=1;
                                    foreach($map as $mp){?>
                                    <tr>
                                      <td class="px-2" data-tooltip-target="tooltip-default<?php echo $i;?>">
                                        <div id="tooltip-default<?php echo $i;?>" role="tooltip" class="break-all absolute z-50 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity w-auto duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                          <?php echo $mp;?>
                                          <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <?php echo substr($mp, 0, 30);
                                        $i++;?>
                                      </td>
                                      <td class="items-center inline-flex	gap-x-6">
                                        <?php if($cargas['estado']==0 || $cargas['estado']==3){?>
                                          <button target="_blank" onclick="fileDelete('<?php echo $mp?>')" class="text-gray-500 transition-colors duration-200 hover:text-red-500 focus:outline-none">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> </svg>
                                          </button>
                                        <?php }?>
                                        <a href="<?php echo base_url().'/files/cumplimiento/'.$cargas['id_carga'].'/'.$mp;?>" download class="text-gray-500 transition-colors duration-200 hover:text-emerald-500 focus:outline-none">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16"> <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/> </svg>
                                          </a>
                                      </td>
                                    </tr>
                                    <?php }?>
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
                    <a onclick="window.location.href='<?php echo base_url().'/scii/cumplimiento/'?>'" class="text-white bg-rose-800 hover:bg-rose-700/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                      <i class="fa-solid fa-arrow-left mr-2"></i>  Regresar
                    </a><?php if($cargas['estado']==0 || $cargas['estado']==3){?>
                    <button onclick="saveState()" class="text-white bg-rose-800 hover:bg-rose-700/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                      <i class="fa-solid fa-save mr-2"></i><?php echo ($cargas['estado']==0)?'Concluir registro':'Guardar cambios'?>
                    </button>
                    <?php }?>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
      $("#myForm" ).on( "submit", function( event ) {
        event.preventDefault();
        $("#loader").show();
        id=$("#id_carga").val();
        $.ajax({
          url: '<?php echo base_url();?>/scii/upload/'+id,
          type: 'POST',
          data: new FormData( this ),
          processData: false,
          contentType: false,
          success: function(result){
            if(result==0){
            }else{
              var resultado=JSON.parse(result);
              if(resultado.error == ''){
                $("#loader").hide();
                $("#tablaDocs tbody").empty();
                $("#tablaDocs tbody").append(resultado.datos);
              }
              else{
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
    <script>
      function fileDelete(mp){
        id=$("#id_carga").val();
        if(mp != null && id != ''){
          event.preventDefault();
          $.ajax({
            url: '<?php echo base_url(); ?>/scii/delCumplimiento/'+id+'/'+mp,
            success: function(result){
              if(result==0){
                console.log("Resultado = 0");
              }else{
                var resultado=JSON.parse(result);
                if(resultado.error == ''){
                  $("#tablaDocs tbody").empty();
                  $("#tablaDocs tbody").append(resultado.datos);
                }else{
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
      function saveState(){
        let formData={
          id: $("#id_carga").val(),
          justificacion:$("#justif").val()
        };
        $("#loader").show();
        $.ajax({
          type: "POST",
          url: '<?php echo base_url(); ?>/scii/saveState',
          data: formData,
          dataType: "json",
          encode: true,
        }).done(function (data) {
          console.log(data);
          $("#loader").hide();
          location.reload();
        });
      }
    </script>