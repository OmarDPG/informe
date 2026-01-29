

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
                              <i class="fa-regular fa-hourglass-half text-2xl text-blue-500"></i>  <!--fa-spin-->
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
              <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                  <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg aria-selected:text-rose-900 aria-selected:border-rose-900" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">PTCI</button>
                  </li>
                  <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg aria-selected:text-rose-900 aria-selected:border-rose-900" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">PTAR</button>
                  </li>
                  <?php if($cargasCE){?>
                  <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg aria-selected:text-rose-900 aria-selected:border-rose-900" id="conversation-tab" data-tabs-target="#conversation" type="button" role="tab" aria-controls="conversation" aria-selected="false">Carpeta electrónica</button>
                  </li>
                  <?php }?>
                </ul>
              </div>
              <div id="myTabContent" class="content-center grid place-items-center">
                <div class="hidden w-full rounded-lg border border-emerald-900" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <section>
                    <header class="bg-emerald-700	space-y-4 p-2 sm:px-8 sm:py-6 lg:p-2 xl:px-8 xl:py-6">
                      <div class="flex items-center justify-between">
                        <h2 class="font-semibold text-white">Actividades de PTCI</h2>
                      </div>
                    </header>
                    <div class="bg-slate-50 grid grid-cols-1 gap-4 text-sm leading-6">
                      <div class="overflow-hidden m-2" style="overflow-x:auto;">
                        <table id="PTCI" class="text-sm text-gray-500 whitespace-nowrap min-w-full divide-y divide-gray-200">
                          <thead class="bg-gray-50">
                            <tr>
                              <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                Acción de mejora
                              </th>
                              <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                Medio de verificación
                              </th>
                              <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                Estatus
                              </th>
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                              
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="hidden w-full rounded-lg border border-emerald-900" id="dashboard" role="tabpanel" aria-labelledby="profile-tab">
                  <section>
                    <header class="bg-emerald-700	space-y-4 p-2 sm:px-8 sm:py-6 lg:p-2 xl:px-8 xl:py-6">
                      <div class="flex items-center justify-between">
                        <h2 class="font-semibold text-white">Actividades de PTAR</h2>
                      </div>
                    </header>
                    <div class="bg-slate-50 grid grid-cols-1 gap-4 text-sm leading-6">
                      <div class="overflow-hidden m-2" style="overflow-x:auto;">
                        <table id="PTAR" class="text-sm text-gray-500 whitespace-nowrap min-w-full divide-y divide-gray-200">
                          <thead class="bg-gray-50">
                            <tr>
                              <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                Factores de riesgo
                              </th>
                              <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                Descripción de la acción de control
                              </th>
                              <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                Medio de verificación
                              </th>
                              <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                Estatus
                              </th>
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                              
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </section>
                </div>
                <?php if($cargasCE){?>
                <div class="hidden w-full rounded-lg border border-emerald-900" id="conversation" role="tabpanel" aria-labelledby="conversation-tab">
                  <section>
                    <header class="bg-emerald-700	space-y-4 p-2 sm:px-8 sm:py-6 lg:p-2 xl:px-8 xl:py-6">
                      <div class="flex items-center justify-between">
                        <h2 class="font-semibold text-white">Actividades de Carpeta Electrónica</h2>
                      </div>
                    </header>
                    <div class="bg-slate-50 grid grid-cols-1 gap-4 text-sm leading-6">
                      <div class="overflow-hidden m-2 " style="overflow-x:auto;">
                        <table id="CE" class="text-sm text-gray-500 whitespace-nowrap min-w-full divide-y divide-gray-200">
                          <thead class="bg-gray-50">
                            <tr>
                              <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                Punto del orden del día
                              </th>
                              <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                Requerimiento
                              </th>
                              <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                Estado
                              </th>
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                              
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </section>
                </div>
                <?php } ?>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/container-->

    <script>
    $(document).ready( function () {
        $('#PTCI').DataTable({
            info: true,
            processing: true,
            serverSide: true,
            ajax: '<?php echo base_url(); ?>/scii/getPTCI',
            "language": {
                "decimal": ",",
                "thousands": ".",
                "info": "Mostrando actividades del _START_ al _END_ de un total de _TOTAL_ actividades",
                "infoEmpty": "Mostrando actividades del 0 al 0 de un total de 0 actividades",
                "infoPostFix": "",
                "infoFiltered": "(filtrado de un total de _MAX_ actividades)",
                "loadingRecords": "Cargando...",
                "lengthMenu": "Mostrar _MENU_ actividades",
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
        $(".PTCI_length").css("padding","");

    } );
    $(document).ready( function () {
        $('#PTAR').DataTable({
            info: true,
            processing: true,
            serverSide: true,
            ajax: '<?php echo base_url(); ?>/scii/getPTAR',
            "language": {
                "decimal": ",",
                "thousands": ".",
                "info": "Mostrando actividades del _START_ al _END_ de un total de _TOTAL_ actividades",
                "infoEmpty": "Mostrando actividades del 0 al 0 de un total de 0 actividades",
                "infoPostFix": "",
                "infoFiltered": "(filtrado de un total de _MAX_ actividades)",
                "loadingRecords": "Cargando...",
                "lengthMenu": "Mostrar _MENU_ actividades",
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
    $(document).ready( function () {
        $('#CE').DataTable({
            info: true,
            processing: true,
            serverSide: true,
            ajax: '<?php echo base_url(); ?>/scii/getCE',
            "language": {
                "decimal": ",",
                "thousands": ".",
                "info": "Mostrando actividades del _START_ al _END_ de un total de _TOTAL_ actividades",
                "infoEmpty": "Mostrando actividades del 0 al 0 de un total de 0 actividades",
                "infoPostFix": "",
                "infoFiltered": "(filtrado de un total de _MAX_ actividades)",
                "loadingRecords": "Cargando...",
                "lengthMenu": "Mostrar _MENU_ actividades",
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
 
