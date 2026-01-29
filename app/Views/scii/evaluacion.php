<!--Container-->
<div class="container w-full mx-auto pt-20">
    <div class="sm:w-11/12 w-11/12 bg-gray-50 mx-auto">
        <section class="pt-2 bg-white">
            <div class="px-4 mx-auto ">
                <div class="w-full mx-auto mt-4  text-center">
                    <div class="relative z-0 w-full my-8" style="height: 100vh; overflow-y:auto">
                        <div class="relative shadow-2xl p-8" style="">
                            <div class="relative  shadow-md sm:rounded-lg h-90 mb-10">
                                <div class="my-12" style="width:90%; margin: 0 auto; display: flex; flex-direction:column;">
                                    <h2 style="display:none;">Evaluación ID: <?= $datos1['id_evaluacion'] ?></h2>
                                    <form id="form-editUs" name="form-editUs" action="<?php echo base_url(); ?>/Scii/registrarRespuestas" method="post" enctype="multipart/form-data">
                                        <div class="grid grid-cols-3 gap-4 -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="nombre_servidor">
                                                    Nombre del servidor
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="nombre_servidor" type="text" placeholder="Nombre del servidor" value="<?= set_value('nombreCompleto', isset($nombreCompleto) ? $nombreCompleto : '') ?>">
                                            </div>
                                            <!-- DISPLAY NONE -->
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="display: none;">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="id_evaluacion">
                                                    ID Evaluacion
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="id_evaluacion" name="id_evaluacion" type="text" placeholder="Nombre del servidor" value="<?= set_value('id_evaluacion', isset($idEvaluacion) ? $idEvaluacion : '') ?>">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="display: none;">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="id_usuario">
                                                    ID Usuario
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="id_usuario" name="id_usuario" type="text" placeholder="Nombre del servidor" value="<?= set_value('id_usuario', isset($id_usuario) ? $id_usuario : '') ?>">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="display: none;">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="id_unidad">
                                                    ID Unidad
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="id_unidad" name="id_unidad" type="text" placeholder="Nombre del servidor" value="<?= set_value('id_unidad', isset($id_unidad) ? $id_unidad : '') ?>">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="display:none ;">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="id_periodo">
                                                    ID Periodo
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="id_periodo" name="id_periodo" type="text" placeholder="Nombre del servidor" value="<?= set_value('id_periodo', isset($idPeriodo) ? $idPeriodo : '') ?>">
                                            </div>



                                            <!-- END DISPLAY NONE -->
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="text-left block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">
                                                    Direcccion
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="direccion" type="text" placeholder="Direccion a la que pertenece" value="<?= set_value('nombreUnidad', isset($nombreUnidad) ? $nombreUnidad : '') ?>">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left" for="cargo">
                                                    Cargo
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cargo" type="text" placeholder="Cargo" value="<?= set_value('nombreCategoria', isset($nombreCategoria) ? $nombreCategoria : '') ?>">
                                            </div>
                                        </div>
                                        <div class="flex flex-col -mx-3 mb-6 my-10">
                                            <h3 class="uppercase text-2xl">cedula de evaluacion al desempeño</h3>
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2 text-xl" for="principales_funciones">
                                                    I.principales funciones y/o actividades que desempeña el servido público (máximo 6)
                                                </label>
                                                <textarea name="principales_funciones" cols="180" rows="5" id="principales_funciones" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones" required></textarea>
                                            </div>
                                        </div>
                                        <hr class="my-8">
                                        <div class="flex flex-col -mx-3 mb-2 my-10">
                                            <h2 class="uppercase text-xl">II. Descripcion y evaluacion de metas</h2>
                                            <h3 class="uppercase">De acuerdo con el apartado I Principales funciones y/o actividades que desempeña, capture las metas de mayor a menor relevancia</h3>
                                            <div class="grid grid-cols-5 mx-4 my-8 place-items-center gap-4">
                                                <h4 class="col-start-1 col-end-2">Los campos con (*) son obligatorios</h4>
                                                <p class="uppercase" style="grid-column-start: 5; grid-column-end: 6;">fecha de cimplimiento <br>antes de <br></p>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_uno">
                                                    Meta 1
                                                </label>
                                                <textarea name="meta_uno" cols="60" rows="3" id="meta_uno" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta" required></textarea>
                                                <input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="fecha_cumplimiento_meta_uno" id="fecha_cumplimiento_meta_uno" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_dos">
                                                    Meta 2
                                                </label>
                                                <textarea name="meta_dos" cols="60" rows="3" id="meta_dos" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta " required></textarea>
                                                <input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="fecha_cumplimiento_meta_dos" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_tres">
                                                    Meta 3
                                                </label>
                                                <textarea name="meta_tres" cols="60" rows="3" id="meta_tres" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta" required></textarea>
                                                <input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="fecha_cumplimiento_meta_tres" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_cuatro">
                                                    Meta 4
                                                </label>
                                                <textarea name="meta_cuatro" cols="60" rows="3" id="meta_cuatro" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta"></textarea>
                                                <input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="fecha_cumplimiento_meta_cuatro">
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_cinco">
                                                    Meta 5
                                                </label>
                                                <textarea name="meta_cinco" cols="60" rows="3" id="meta_cinco" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta    "></textarea>
                                                <input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="fecha_cumplimiento_meta_cinco">
                                            </div>
                                        </div>
                                        <hr class="my-8">
                                        <div class="flex flex-col -mx-3 mb-2 my-10">
                                            <div class="mx-auto" style="">
                                                <h2 class="uppercase text-2xl">III. Evaluacion de criterio de desempeño</h2>
                                                <h3 class="uppercase text-left">A CONTINUACIÓN SE PRESENTAN DIVERSOS FACTORES DE COMPORTAMIENTO QUE INFLUYEN EN EL DESEMPEÑO DEL SERVIDOR PÚBLICO; EVALÚE CADA UNA DE ELLOS CONFORME A LA SIGUIENTE ESCALA: (DE SER NECESARIO AGREGAR EVIDENCIAS)<br>
                                                    (VALOR TOTAL DE EVALUACIÓN DEL SEGMENTO III: 70 %) </h3>
                                            </div>
                                            <div style="width: 50%;" class="mx-auto mt-12 my-8">
                                                <table class="table-fixed text-left border-2" style="width: 100%;">
                                                    <thead class="border-2 p-4">
                                                        <tr class="border-2">
                                                            <th class="border-2">Sobresaliente</th>
                                                            <th class="border-2">Bueno</th>
                                                            <th class="border-2">Regular</th>
                                                            <th class="border-2">Nulo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="border-2">5</td>
                                                            <td class="border-2">3</td>
                                                            <td class="border-2">1</td>
                                                            <td class="border-2">0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="w-full md:w-1/3 grid grid-cols-5 mx-auto mb-4" style="">
                                                <h4 class="border-2">Criterios</h4>
                                                <h4 class="col-start-2 col-span-2 border-2">Descripcion</h4>
                                                <h4 class="border-2">Archivo</h4>
                                                <h4 class="border-2">Calificacion</h4>
                                            </div>
                                            <div>
                                                <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style="">
                                                    <h4 class="uppercase">Productividad <br>y eficiencia</h4>
                                                    <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Realiza sus actividades oportunamente y de manera correcta aprovechando las herramientas y recursos con los que cuenta.</p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="criterio_desempeño_uno">
                                                        Argumento
                                                    </label>
                                                    <textarea name="criterio_desempeño_uno" cols="60" rows="3" id="criterio_desempeño_uno" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta" required></textarea>
                                                    <div>
                                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="ruta_evidencia_uno">
                                                    </div>
                                                    <select name="calificacion_uno" id="calificacion_uno" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                        <option value="">Calificacion</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5">Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3">Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1">Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0">Nulo</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <div>
                                                <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style="">
                                                    <h4 class="uppercase">Trabajo en <br>y equipo</h4>
                                                    <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Ayuda a crear un buen clima de trabajo, comprende la dinámica del funcionamiento grupal y tiene habilidad para tratar las necesidades de otras áreas con la misma dedicación que las de su propia área.</p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="criterio_desempeño_dos">
                                                        Argumento
                                                    </label>
                                                    <textarea name="criterio_desempeño_dos" cols="60" rows="3" id="criterio_desempeño_dos" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta" required></textarea>
                                                    <div>
                                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="ruta_evidencia_dos">
                                                    </div>
                                                    <select name="calificacion_dos" id="calificacion_dos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                        <option value="">Calificacion</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5">Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3">Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1">Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0">Nulo</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <div>
                                                <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style=" ">
                                                    <h4 class="uppercase">Analisis de <br>problemas</h4>
                                                    <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Obtener información relevante e identificar los elementos críticos de las situaciones, sus implicaciones y detalles relevantes para elegir acciones apropiadas.</p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="criterio_desempeño_tres">
                                                        Argumento
                                                    </label>
                                                    <textarea name="criterio_desempeño_tres" cols="60" rows="3" id="criterio_desempeño_tres" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta" required></textarea>
                                                    <div>
                                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="ruta_evidencia_tres">
                                                    </div>
                                                    <select name="calificacion_tres" id="calificacion_tres" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                        <option value="">Calificacion</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5">Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3">Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1">Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0">Nulo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="my-4">

                                            <div>
                                                <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style=" ">
                                                    <h4 class="uppercase">Aportaciones <br>valiosas</h4>
                                                    <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Demuestra compromiso destacado para identificar áreas de oportunidad y proponer mejoras con la finalidad de alcanzar objetivos y metas institucionales.</p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="criterio_desempeño_cuatro">
                                                        Argumento
                                                    </label>
                                                    <textarea name="criterio_desempeño_cuatro" cols="60" rows="3" id="criterio_desempeño_cuatro" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta" required></textarea>
                                                    <div>
                                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="ruta_evidencia_cuatro">
                                                    </div>
                                                    <select name="calificacion_cuatro" id="calificacion_cuatro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                        <option value="">Calificacion</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5">Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3">Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1">Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0">Nulo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="my-4">

                                            <div>
                                                <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style=" ">
                                                    <h4 class="uppercase">Comunicación y <br>confiabilidad</h4>
                                                    <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Muestra respeto hacia sus compañeros, es coherente con su discurso y su forma de actuar, brinda retroalimentación a su equipo de trabajo respecto de alguna actividad o instrucción determinada. </p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="criterio_desempeño_cinco">
                                                        Argumento
                                                    </label>
                                                    <textarea name="criterio_desempeño_cinco" cols="60" rows="3" id="criterio_desempeño_cinco" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta" required></textarea>
                                                    <div>
                                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="ruta_evidencia_cinco">
                                                    </div>
                                                    <select name="calificacion_cinco" id="calificacion_cinco" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                        <option value="">Calificacion</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5">Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3">Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1">Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0">Nulo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="my-4">

                                            <div>
                                                <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style=" ">
                                                    <h4 class="uppercase">Trabajos <br>extras</h4>
                                                    <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Muestra disposición y buen ánimo para desahogar proyectos y tareas, realiza jornadas de trabajo extraordinario (horario de salida extemporáneo) para culminar o vigilar el correcto funcionamiento de su adscripción y realiza aportaciones eficientes a su trabajo.</p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="criterio_desempeño_seis">
                                                        Argumento
                                                    </label>
                                                    <textarea name="criterio_desempeño_seis" cols="60" rows="3" id="criterio_desempeño_seis" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta" required></textarea>
                                                    <div>
                                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="ruta_evidencia_seis">
                                                    </div>
                                                    <select name="calificacion_seis" id="calificacion_seis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                        <option value="">Calificacion</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5">Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3">Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1">Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0">Nulo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="my-4">

                                            <div>
                                                <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style=" ">
                                                    <h4 class="uppercase">Trabajo bajo <br>presion</h4>
                                                    <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Alcanza los objetivos previstos en situaciones de presión de tiempo, inconvenientes, desacuerdos, oposición o diversidad; mantiene un desempeño alto en situaciones de mucha exigencia. </p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="criterio_desempeño_siete">
                                                        Argumento
                                                    </label>
                                                    <textarea name="criterio_desempeño_siete" cols="60" rows="3" id="criterio_desempeño_siete" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta" required></textarea>
                                                    <div>
                                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="ruta_evidencia_siete">
                                                    </div>
                                                    <select name="calificacion_siete" id="calificacion_siete" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                        <option value="">Calificacion</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5">Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3">Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1">Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0">Nulo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="my-4">

                                            <div>
                                                <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style=" ">
                                                    <h4 class="uppercase">Desarrollo de<br>competencias <br>adicionales <br>(capacitacion)</h4>
                                                    <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Muestra interés por el aprendizaje y la actualización. Busca oportunidades de crecimiento personal y profesional a través de capacitación o cualquier otro medio.</p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="criterio_desempeño_ocho">
                                                        Argumento
                                                    </label>
                                                    <textarea name="criterio_desempeño_ocho" cols="60" rows="3" id="criterio_desempeño_ocho" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta" required></textarea>
                                                    <div>
                                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="ruta_evidencia_ocho">
                                                    </div>
                                                    <select name="calificacion_ocho" id="calificacion_ocho" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                        <option value="">Calificacion</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5">Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3">Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1">Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0">Nulo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="my-4">

                                            <div class="mx-auto my-8 grid-cols-3" style="display:grid; grid-template-columns:repeat(3, 1fr); gap:1em; place-items:center;">
                                                <div>
                                                    <h3 class="uppercase">Total del segmento III</h3>
                                                </div>
                                                <div>
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="total_segmento_tres">Total %</label>
                                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="total_segmento_tres" id="total_segmento_tres" readonly>
                                                </div>
                                                <div>
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="puntuaje_segmento_tres">Puntuaje obtenido</label>
                                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="puntuaje_segmento_tres" id="puntuaje_segmento_tres" readonly>
                                                </div>
                                            </div>

                                        </div>
                                        <hr class="my-8">
                                        <div style="width:90%;" class="mx-auto">
                                            <div class="flex flex-col justify-center my-8">
                                                <h3 class="uppercase text-center text-lg font-bold">IV. Criterios de valor agregado</h3>
                                                <p class="text-center">INDIQUE EN LA COLUMNA LOS PUNTOS QUE OTORGA DE 1 -10 EN CADA PONDERACIÓN. (VALOR TOTAL DE EVALUACIÓN DEL SEGMENTO: 30%) </p>
                                            </div>
                                            <div class="grid grid-cols-2 my-8 gap-4">
                                                <div class="grid grid-rows-3 mb-4">
                                                    <div class="grid grid-cols-3 p-4 uppercase border-2">
                                                        <div>
                                                            <p>Dimensiones</p>
                                                        </div>
                                                        <div>
                                                            <p>Indicador de Gestion</p>
                                                        </div>
                                                        <div>
                                                            <p>Puntos</p>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-3 p-4 border-b-2 border-r-2 border-l-2" style="border-right-width:2px">
                                                        <div class="place-content-center" style="border-right-width:2px">
                                                            <p class="uppercase">Valores</p>
                                                        </div>
                                                        <div class="grid grid-rows-5 place-items-center" style="border-right-width:2px">
                                                            <div>
                                                                <p>Honestidad</p>
                                                            </div>
                                                            <div>
                                                                <p>Responsabilidad</p>
                                                            </div>
                                                            <div>
                                                                <p>Respeto</p>
                                                            </div>
                                                            <div>
                                                                <p>Actitud de Servicio</p>
                                                            </div>
                                                            <div>
                                                                <p>Iniciativa</p>
                                                            </div>
                                                        </div>
                                                        <div class="justify-center items-center grid grid-rows-5">
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <select name="valor_agregado_uno" id="valor_agregado_uno" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10">10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9">9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8">8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7">7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6">6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5">5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4">4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3">3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2">2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1">1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0">0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <select name="valor_agregado_dos" id="valor_agregado_dos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10">10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9">9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8">8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7">7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6">6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5">5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4">4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3">3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2">2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1">1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0">0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <select name="valor_agregado_tres" id="valor_agregado_tres" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10">10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9">9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8">8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7">7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6">6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5">5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4">4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3">3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2">2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1">1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0">0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <select name="valor_agregado_cuatro" id="valor_agregado_cuatro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10">10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9">9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8">8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7">7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6">6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5">5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4">4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3">3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2">2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1">1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0">0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <select name="valor_agregado_cinco" id="valor_agregado_cinco" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10">10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9">9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8">8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7">7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6">6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5">5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4">4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3">3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2">2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1">1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0">0</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid grid-rows-3 mb-4">
                                                    <div class="grid grid-cols-3 p-4 uppercase border-2">
                                                        <div>
                                                            <p>Dimensiones</p>
                                                        </div>
                                                        <div>
                                                            <p>Indicador de Gestion</p>
                                                        </div>
                                                        <div>
                                                            <p>Puntos</p>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-3 p-4 border-b-2 border-r-2 border-l-2" style="border-right-width:2px">
                                                        <div class="place-content-center" style="border-right-width:2px">
                                                            <p class="uppercase">Valores</p>
                                                        </div>
                                                        <div class="grid grid-rows-5 place-items-center" style="border-right-width:2px">
                                                            <div>
                                                                <p>Lealtas</p>
                                                            </div>
                                                            <div>
                                                                <p>Disciplina</p>
                                                            </div>
                                                            <div>
                                                                <p>Profesionalidad</p>
                                                            </div>
                                                            <div>
                                                                <p>Igualdad y No Discriminación</p>
                                                            </div>
                                                            <div>
                                                                <p>Equidad de Genero</p>
                                                            </div>
                                                        </div>
                                                        <div class="justify-center items-center grid grid-rows-5">
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <select name="valor_agregado_seis" id="valor_agregado_seis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10">10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9">9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8">8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7">7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6">6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5">5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4">4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3">3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2">2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1">1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0">0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <select name="valor_agregado_siete" id="valor_agregado_siete" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10">10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9">9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8">8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7">7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6">6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5">5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4">4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3">3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2">2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1">1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0">0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <select name="valor_agregado_ocho" id="valor_agregado_ocho" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10">10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9">9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8">8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7">7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6">6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5">5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4">4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3">3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2">2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1">1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0">0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <select name="valor_agregado_nueve" id="valor_agregado_nueve" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10">10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9">9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8">8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7">7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6">6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5">5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4">4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3">3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2">2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1">1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0">0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <select name="valor_agregado_diez" id="valor_agregado_diez" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10">10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9">9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8">8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7">7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6">6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5">5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4">4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3">3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2">2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1">1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0">0</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-8">
                                        <div class="mx-auto my-8 grid-cols-3" style="display:grid; grid-template-columns:repeat(3, 1fr); gap:1em; place-items:center;">
                                            <div>
                                                <h3 class="uppercase">Total del segmento IV</h3>
                                            </div>
                                            <div>
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="total_segmento_cuatro">Total %</label>
                                                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="total_segmento_cuatro" id="total_segmento_cuatro" readonly>
                                            </div>
                                            <div>
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="puntuaje_segmento_cuatro">Puntuaje obtenido</label>
                                                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="puntuaje_segmento_cuatro" id="puntuaje_segmento_cuatro" readonly>
                                            </div>
                                        </div>
                                        <hr class="my-8">
                                        <div style="width:90%;" class="mx-auto">
                                            <div class="flex flex-col justify-center my-8">
                                                <h3 class="uppercase text-center text-lg font-bold">Resumen de calificaciones</h3>
                                            </div>
                                            <div class="grid grid-cols-2 gap-4 border-2 p-3" style="width: 50%; margin: 0 auto;">
                                                <div class="grid grid-rows-3 gap-2 place-items-center" style="border-right-width:2px;">
                                                    <div class="text-left">
                                                        <p>Puntaje Total del Segmento III</p>
                                                    </div>
                                                    <div class="text-left">
                                                        <p>Puntaje Total del Segmento IV</p>
                                                    </div>
                                                    <div class="text-left">
                                                        <p>Calificacion Global</p>
                                                    </div>
                                                </div>
                                                <div class="grid grid-rows-3 gap-2">
                                                    <div class="p-4 flex flex-row justify-center items-center">
                                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="final_segmento_tres" name="final_segmento_tres" step="0.0000001">
                                                    </div>
                                                    <div class="p-4 flex flex-row justify-center items-center">
                                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="final_segmento_cuatro" name="final_segmento_cuatro" step="0.0000001">
                                                    </div>
                                                    <div class="p-4 flex flex-row justify-center items-center">
                                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="total_global" name="total_global" step="0.0000001">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-8">
                                        <div style="" class="mx-auto">
                                            <div class="flex flex-col justify-center my-8">
                                                <h3 class="uppercase text-center text-lg font-bold">V. Comentarios del Evaluado</h3>
                                            </div>
                                            <div class="p-4 flex flex-row justify-center items-center">
                                                <textarea name="comentarios_evaluado" cols="180" rows="5" id="comentarios_evaluado" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones" required></textarea>
                                            </div>
                                        </div>
                                        <hr class="my-8">

                                        <hr class="my-8">
                                        <div class="mt-10">
                                            <button type="submit" class="text-white bg-red-700 hover:bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                                                <i class="fa-solid fa-save mr-2"></i> Guardar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
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
<!-- <script>
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
        const resultadoDosF = document.getElementById('final_segmento_tres');

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
            resultadoDosF.value = totalUno;
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
    const resultadoDosF = document.getElementById('final_segmento_cuatro');
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
        if (resultadoDosF) resultadoDosF.value = totalUno;
        if (totalCuatroUno) totalCuatroUno.value = t1;
        if (totalCuatroDos) totalCuatroDos.value = t2;
    }
});

</script>
<script>
    // Tercer script: sumar los valores de final_segmento_tres y final_segmento_cuatro
    function sumarValores() {
        var valor1 = parseFloat(document.getElementById('final_segmento_tres').value) || 0;
        var valor2 = parseFloat(document.getElementById('final_segmento_cuatro').value) || 0;
        var suma = valor1 + valor2;
        document.getElementById('total_global').value = suma;
        console.log("Suma Total: ", suma);
    }
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('final_segmento_tres').addEventListener('input', sumarValores);
        document.getElementById('final_segmento_cuatro').addEventListener('input', sumarValores);
    });
</script> -->
<script>
    // Primer script: calcular el total para final_segmento_tres
    document.addEventListener('DOMContentLoaded', (event) => {
        const inputs = [
            document.getElementById('calificacion_uno'),
            document.getElementById('calificacion_dos'),
            document.getElementById('calificacion_tres'),
            document.getElementById('calificacion_cuatro'),
            document.getElementById('calificacion_cinco'),
            document.getElementById('calificacion_seis'),
            document.getElementById('calificacion_siete'),
            document.getElementById('calificacion_ocho')
        ];
        const resultadoUno = document.getElementById('total_segmento_tres');
        const resultadoDos = document.getElementById('puntuaje_segmento_tres');
        const resultadoDosF = document.getElementById('final_segmento_tres');

        inputs.forEach(input => {
            input.addEventListener('change', calcularResultado);
        });

        function calcularResultado() {
            let totalUno = 0,
                totalDos = 0;
            inputs.forEach(input => {
                const option = input.options[input.selectedIndex];
                const valorUno = parseFloat(option.getAttribute('data-valor-uno')) || 0;
                const valorDos = parseFloat(option.getAttribute('data-valor-dos')) || 0;
                totalUno += valorUno;
                totalDos += valorDos;
            });
            resultadoUno.value = totalUno;
            resultadoDos.value = totalDos;
            resultadoDosF.value = totalUno;
            sumarValores(); // Actualizar total_global
        }
    });
</script>

<script>
    // Segundo script: calcular el total para final_segmento_cuatro
    document.addEventListener('DOMContentLoaded', (event) => {
        const selects = [
            document.getElementById('valor_agregado_uno'),
            document.getElementById('valor_agregado_dos'),
            document.getElementById('valor_agregado_tres'),
            document.getElementById('valor_agregado_cuatro'),
            document.getElementById('valor_agregado_cinco'),
            document.getElementById('valor_agregado_seis'),
            document.getElementById('valor_agregado_siete'),
            document.getElementById('valor_agregado_ocho'),
            document.getElementById('valor_agregado_nueve'),
            document.getElementById('valor_agregado_diez')
        ];
        const resultadoUno = document.getElementById('total_segmento_cuatro');
        const resultadoDos = document.getElementById('puntuaje_segmento_cuatro');
        const resultadoDosF = document.getElementById('final_segmento_cuatro');

        selects.forEach(select => {
            select.addEventListener('change', calcularResultado1);
        });

        function calcularResultado1() {
            let totalUno = 0,
                totalDos = 0;
            selects.forEach(select => {
                const option = select.options[select.selectedIndex];
                const valorUno = parseFloat(option.getAttribute('data-valor-uno')) || 0;
                const valorDos = parseFloat(option.getAttribute('data-valor-dos')) || 0;
                totalUno += valorUno;
                totalDos += valorDos;
            });
            resultadoUno.value = totalUno;
            resultadoDos.value = totalDos;
            resultadoDosF.value = totalUno;
            sumarValores(); // Actualizar total_global
        }
    });
</script>

<script>
    // Tercer script: sumar los valores de final_segmento_tres y final_segmento_cuatro
    function sumarValores() {
        var valor1 = parseFloat(document.getElementById('final_segmento_tres').value) || 0;
        var valor2 = parseFloat(document.getElementById('final_segmento_cuatro').value) || 0;
        var suma = valor1 + valor2;
        document.getElementById('total_global').value = suma;
    }
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('final_segmento_tres').addEventListener('input', sumarValores);
        document.getElementById('final_segmento_cuatro').addEventListener('input', sumarValores);
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>