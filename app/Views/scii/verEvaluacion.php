<!--Container-->
<div class="container w-full mx-auto pt-20">
    <div class="sm:w-11/12 w-11/12 bg-gray-50 mx-auto">
        <section class="pt-2 bg-white">
            <div class="px-4 mx-auto ">
                <div class="w-full mx-auto mt-4  text-center">
                    <div class="relative z-0 w-full my-8" style="height: 100vh; overflow-y:auto">
                        <div class="relative shadow-2xl p-8" style="">
                            <div class="relative  shadow-md sm:rounded-lg h-90 mb-10">


                                <table id="" class="text-sm text-gray-500 whitespace-nowrap min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                Usuario/# Expediente
                                            </th>
                                            <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                Nombre del servidor
                                            </th>
                                            <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                Apellido Paterno
                                            </th>
                                            <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                Apellido Materno
                                            </th>
                                            <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                Estado de la Evaluacion
                                            </th>
                                            <th scope="col" class="px-4 py-2 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">
                                                Ver evaluacion
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <?php if (isset($resultados) && !empty($resultados)): ?>
                                            <?php foreach ($resultados as $fila): ?>
                                                <tr class="">
                                                    <td class="p-6"><?php echo $fila->usuario; ?></td>
                                                    <td><?php echo $fila->nombre_s; ?></td>
                                                    <td><?php echo $fila->apellido_p; ?></td>
                                                    <td><?php echo $fila->apellido_m; ?></td>

                                                    <!-- Muestra el estado de la evaluación -->
                                                    <td>
                                                        <?php if ($fila->id_respuesta && $fila->con_evaluador  == 2): ?>
                                                            <span class="text-white p-2 bg-green-500 rounded">Evaluación terminada</span>
                                                        <?php elseif ($fila->registro_realizado === null): ?>
                                                            <span class="text-white rounded p-2 bg-red-600">Registro pendiente</span>
                                                        <?php elseif ($fila->con_evaluador  == 1): ?> <!-- Nuevo estado basado en la columna correspondiente -->
                                                            <span class="text-white p-2 bg-yellow-400 rounded">Evaluación del Evaluador</span>
                                                        <?php else: ?>
                                                            <span class="text-white rounded p-2" style="--tw-bg-opacity: 1; background-color: rgb(234 88 12 / var(--tw-bg-opacity));">Evaluación en proceso</span>
                                                        <?php endif; ?>
                                                    </td>

                                                    <!-- Link para respuestas, solo visible para 'Evaluación del Evaluador' -->
                                                    <td class="descargar">
                                                        <?php if ($fila->con_evaluador  == 1): ?>
                                                            <a href="<?php echo base_url() . '/scii/respuestas/' . $fila->id_respuesta; ?>">
                                                                <i class="fa-solid fa-list"></i> Evaluar
                                                            </a>
                                                        <?php elseif ($fila->con_evaluador  == 2):?>
                                                            <span class="text-gray-500">Evaluacion en terminada</span>
                                                        <?php elseif ($fila->con_evaluador  === null):?>
                                                            <span class="text-gray-500">Sin Evaluacion</span>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <tr>
                                                <td colspan="7" class="text-center">Sin evaluaciones pendientes</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>



                                </table>
                            </div>
                            <!-- <img src="https://cdn.devdojo.com/images/march2021/green-dashboard.jpg"> -->
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <!-- <button onclick="saveState()" class="text-white bg-rose-800 hover:bg-rose-700/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                        <i class="fa-solid fa-save mr-2"></i> Guardar
                    </button>
                </div> -->
                </div>
        </section>
    </div>
</div>
<!--/container-->

<script>
    $(document).ready(function() {
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
        $(".PTCI_length").css("padding", "");

    });
    $(document).ready(function() {
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
    $(document).ready(function() {
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
    document.addEventListener('DOMContentLoaded', (event) => {
        const inputUno = document.getElementById('calificacion_uno');
        const inputDos = document.getElementById('calificacion_dos');
        const inputTres = document.getElementById('calificacion_tres');
        const inputCuatro = document.getElementById('calificacion_cuatro');
        const inputCinco = document.getElementById('calificacion_cinco');
        const inputSeis = document.getElementById('calificacion_seis');
        const inputSiete = document.getElementById('calificacion_siete');
        const inputOcho = document.getElementById('calificacion_ocho');

        const resultadoUno = document.getElementById('total_segmento_tres');
        const resultadoDos = document.getElementById('puntuaje_segmento_tres');

        const selects = [inputUno, inputDos, inputTres, inputCuatro, inputCinco, inputSeis, inputSiete, inputOcho];
        selects.forEach(select => {
            select.addEventListener('change', calcularResultado);
        });

        function calcularResultado() {
            let totalUno = 0;
            let totalDos = 0;

            [inputUno, inputDos, inputTres, inputCuatro, inputCinco, inputSeis, inputSiete, inputOcho].forEach(select => {
                const selectedOption = select.options[select.selectedIndex];
                if (selectedOption) {
                    const valorUno = parseFloat(selectedOption.getAttribute('data-valor-uno')) || 0;
                    const valorDos = parseFloat(selectedOption.getAttribute('data-valor-dos')) || 0;

                    totalUno += valorUno;
                    totalDos += valorDos;
                }
            });
            resultadoUno.value = totalUno;
            resultadoDos.value = totalDos;
        }
        [inputUno, inputDos, inputTres, inputCuatro, inputCinco, inputSeis, inputSiete, inputOcho].forEach(select => {
            select.addEventListener('change', calcularResultado);
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const selectUno = document.getElementById('valor_agregado_uno');
        const selectDos = document.getElementById('valor_agregado_dos');
        const selectTres = document.getElementById('valor_agregado_tres');
        const selectCuatro = document.getElementById('valor_agregado_cuatro');
        const selectCinco = document.getElementById('valor_agregado_cinco');
        const selectSeis = document.getElementById('valor_agregado_seis');
        const selectSiete = document.getElementById('valor_agregado_siete');
        const selectOcho = document.getElementById('valor_agregado_ocho');
        const selectNueve = document.getElementById('valor_agregado_nueve');
        const selectDiez = document.getElementById('valor_agregado_diez');

        const resultadoUno = document.getElementById('total_segmento_cuatro');
        const resultadoDos = document.getElementById('puntuaje_segmento_cuatro');
        const totalCuatroUno = document.getElementById('total_uno');
        const totalCuatroDos = document.getElementById('total_dos');

        const selects = [selectUno, selectDos, selectTres, selectCuatro, selectCinco, selectSeis, selectSiete, selectOcho, selectNueve, selectDiez];

        selects.forEach(select => {
            select.addEventListener('change', calcularResultado1);
        });

        function calcularResultado1() {
            let totalUno = 0;
            let totalDos = 0;

            let t1 = 0;
            let t2 = 0;

            selects.forEach((select, index) => {
                const selectedOption = select.options[select.selectedIndex];
                if (selectedOption) {
                    const valorUno = parseFloat(selectedOption.getAttribute('data-valor-uno')) || 0;
                    const valorDos = parseFloat(selectedOption.getAttribute('data-valor-dos')) || 0;

                    totalUno += valorUno;
                    totalDos += valorDos;

                    if (index < 5) {
                        t1 += valorDos;
                    } else {
                        t2 += valorDos;
                    }
                }
            });

            if (resultadoUno) resultadoUno.value = totalUno;
            if (resultadoDos) resultadoDos.value = totalDos;
            if (totalCuatroUno) totalCuatroUno.value = t1;
            if (totalCuatroDos) totalCuatroDos.value = t2;
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>