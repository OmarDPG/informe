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

                                    <form action="<?php echo base_url(); ?>/Scii/registrarRespuestasEvaluador" method="post" enctype="multipart/form-data">
                                        <div class="grid grid-cols-4 gap-4 -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="nombre_servidor">
                                                    Nombre del servidor
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="nombre_servidor" type="text" placeholder="Nombre del servidor" value="<?= set_value('nombreCompleto', isset($nombreCompleto) ? $nombreCompleto : '') ?>">
                                            </div>
                                            <!-- DISPLAY NONE -->
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="display:none;">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="id_evaluacion">
                                                    ID Evaluación
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="id_evaluacion" name="id_evaluacion" type="text" placeholder="Nombre del servidor" value="<?= set_value('id_evaluacion', isset($idEvaluacion) ? $idEvaluacion : '') ?>">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="display:none;">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="id_evaluacion">
                                                    ID Respuesta
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="id_respuesta" name="id_respuesta" type="text" placeholder="Nombre del servidor" value="<?= set_value('id_respuesta', isset($respuestas) ? $respuestas['id_respuesta'] : '') ?>">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="expediente">
                                                    Expediente
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="expediente" name="expediente" type="text" placeholder="Nombre del servidor" value="<?= set_value('expediente', isset($expediente) ? $expediente : '') ?>">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="display:none">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="id_usuario">
                                                    ID Usuario
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="id_usuario" name="id_usuario" type="text" placeholder="Nombre del servidor" value="<?= set_value('id_usuario', isset($respuestas) ? $respuestas['id_usuario'] : '') ?>">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="display:none;">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="id_unidad">
                                                    ID Unidad
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="id_unidad" name="id_unidad" type="text" placeholder="Nombre del servidor" value="<?= set_value('id_unidad', isset($id_unidad) ? $id_unidad : '') ?>">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="display:none;">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-left " for="id_periodo">
                                                    ID Periodo
                                                </label>
                                                <input readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="id_periodo" name="id_periodo" type="text" placeholder="Nombre del servidor" value="<?= set_value('id_periodo', isset($idPeriodo) ? $idPeriodo : '') ?>">
                                            </div>



                                            <!-- END DISPLAY NONE -->
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="text-left block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="direccion">
                                                    Dirección
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
                                            <h3 class="uppercase text-2xl">Cédula de evaluacion al desempeño</h3>
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2 text-xl" for="principales_funciones">
                                                    I.principales funciones y/o actividades que desempeña el servido público (máximo 6)
                                                </label>
                                                <textarea readonly name="principales_funciones" cols="180" rows="5" id="principales_funciones"
                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Escribe tus acciones"><?= set_value('principales_funciones', isset($respuestas) ? $respuestas['principales_funciones'] : '') ?></textarea>
                                                <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2 text-sm my-8" for="principales_funciones">
                                                    Comentarios por parte del evaluador
                                                </label>
                                                <textarea name="comentarios_funciones" cols="180" rows="5" id="comentarios_funciones"
                                                    class="my-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Comentarios por parte del evaluador"  <?= isset($respuestas['comentarios_evaluador_uno']) ? 'readonly' : '' ?>><?= set_value('comentarios_funciones', isset($respuestas) ? $respuestas['comentarios_funciones'] : '') ?></textarea>
                                            </div>
                                        </div>
                                        <hr class="my-8">
                                        <div class="flex flex-col -mx-3 mb-2 my-10">
                                            <h2 class="uppercase text-xl">II. Descripción y evaluacion de metas</h2>
                                            <h3 class="uppercase">De acuerdo con el apartado I Principales funciones y/o actividades que desempeña, capture las metas de mayor a menor relevancia</h3>
                                            <div class="grid grid-cols-5 mx-4 my-8 place-items-center gap-4">
                                                <h4 class="col-start-1 col-end-2">Los campos con (*) son obligatorios</h4>
                                                <p class="uppercase" style="grid-column-start: 5; grid-column-end: 6;">fecha de cumplimiento <br>antes de <br></p>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_uno">
                                                    Meta 1
                                                </label>
                                                <textarea readonly name="meta_uno" cols="60" rows="3" id="meta_uno" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta"><?= set_value('nombreCategoria', isset($respuestas) ? $respuestas['meta_uno'] : '') ?></textarea>

                                                <input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="fecha_cumplimiento_meta_uno" id="fecha_cumplimiento_meta_uno" value="<?= set_value('fecha_cumplimiento_meta_uno', isset($respuestas) ? $respuestas['fecha_cumplimiento_meta_uno'] : '') ?>" readonly>
                                            </div>

                                            <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_dos">
                                                    Meta 2
                                                </label>
                                                <textarea readonly name="meta_dos" cols="60" rows="3" id="meta_dos" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta"><?= set_value('nombreCategoria', isset($respuestas) ? $respuestas['meta_dos'] : '') ?></textarea>

                                                <input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="fecha_cumplimiento_meta_dos" id="fecha_cumplimiento_meta_dos" value="<?= set_value('fecha_cumplimiento_meta_dos', isset($respuestas) ? $respuestas['fecha_cumplimiento_meta_dos'] : '') ?>" readonly>
                                            </div>

                                            <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_tres">
                                                    Meta 3
                                                </label>
                                                <textarea readonly name="meta_tres" cols="60" rows="3" id="meta_tres" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta"><?= set_value('nombreCategoria', isset($respuestas) ? $respuestas['meta_tres'] : '') ?></textarea>

                                                <input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="fecha_cumplimiento_meta_tres" id="fecha_cumplimiento_meta_tres" value="<?= set_value('fecha_cumplimiento_meta_tres', isset($respuestas) ? $respuestas['fecha_cumplimiento_meta_tres'] : '') ?>" readonly>
                                            </div>

                                            <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_cuatro">
                                                    Meta 4
                                                </label>
                                                <textarea readonly name="meta_cuatro" cols="60" rows="3" id="meta_cuatro" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta"><?= set_value('nombreCategoria', isset($respuestas) ? $respuestas['meta_cuatro'] : '') ?></textarea>

                                                <input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="fecha_cumplimiento_meta_cuatro" id="fecha_cumplimiento_meta_cuatro" value="<?= set_value('fecha_cumplimiento_meta_cuatro', isset($respuestas) ? $respuestas['fecha_cumplimiento_meta_cuatro'] : '') ?>" readonly>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="meta_cinco">
                                                    Meta 5
                                                </label>
                                                <textarea readonly name="meta_cinco" cols="60" rows="3" id="meta_cinco" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-3" placeholder="Escribe tu meta"><?= set_value('nombreCategoria', isset($respuestas) ? $respuestas['meta_cinco'] : '') ?></textarea>

                                                <input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="fecha_cumplimiento_meta_cinco" id="fecha_cumplimiento_meta_cinco" value="<?= set_value('fecha_cumplimiento_meta_cinco', isset($respuestas) ? $respuestas['fecha_cumplimiento_meta_cinco'] : '') ?>" readonly>
                                            </div>
                                        </div>
                                        <hr class="my-8">
                                        <div class="flex flex-col -mx-3 mb-2 my-10">
                                            <div class="mx-auto" style="">
                                                <h2 class="uppercase text-2xl">III. Evaluación de criterio de desempeño</h2>
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
                                                <h4 class="col-start-2 col-span-2 border-2">Descripción</h4>
                                                <h4 class="border-2">Archivo</h4>
                                                <h4 class="border-2">Calificación</h4>
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
                                                    <textarea readonly name="criterio_desempeño_uno" cols="60" rows="3" id="criterio_desempeño_uno" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta"><?= set_value('criterio_desempeño_uno', isset($respuestas) ? $respuestas['criterio_desempeño_uno'] : '') ?></textarea>
                                                    <?php
                                                    $ruta_evidencia_uno = isset($respuestas['ruta_evidencia_uno']) ? $respuestas['ruta_evidencia_uno'] : '';
                                                    ?>
                                                    <div>
                                                        <?php if ($ruta_evidencia_uno): ?>
                                                            <a href="<?= $respuestas['ruta_evidencia_uno'] ?>" target="_blank" class="text-blue-500 hover:underline mt-2 block">Ver archivo actual</a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php
                                                    // Supongamos que $calificacion_uno es el valor que viene desde la base de datos.
                                                    $calificacion_uno = isset($respuestas['calificacion_uno']) ? $respuestas['calificacion_uno'] : '';
                                                    ?>
                                                    <select name="calificacion_uno_evaluador" id="calificacion_uno_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                        <option value="">Calificación</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5" <?= $calificacion_uno == '5' ? 'selected' : '' ?>>Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3" <?= $calificacion_uno == '3' ? 'selected' : '' ?>>Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1" <?= $calificacion_uno == '1' ? 'selected' : '' ?>>Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0" <?= $calificacion_uno == '0' ? 'selected' : '' ?>>Nulo</option>
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
                                                    <textarea name="criterio_desempeño_dos" cols="60" rows="3" id="criterio_desempeño_dos" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta"><?= set_value('criterio_desempeño_dos', isset($respuestas) ? $respuestas['criterio_desempeño_dos'] : '') ?></textarea>
                                                    <?php
                                                    $ruta_evidencia_dos = isset($respuestas['ruta_evidencia_dos']) ? $respuestas['ruta_evidencia_dos'] : '';
                                                    ?>
                                                    <div>
                                                        <?php if ($ruta_evidencia_dos): ?>
                                                            <a href="<?= $respuestas['ruta_evidencia_dos'] ?>" target="_blank" class="text-blue-500 hover:underline mt-2 block">Ver archivo actual</a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php
                                                    // Supongamos que $calificacion_dos es el valor que viene desde la base de datos.
                                                    $calificacion_dos = isset($respuestas['calificacion_dos']) ? $respuestas['calificacion_dos'] : '';
                                                    ?>
                                                    <select name="calificacion_dos_evaluador" id="calificacion_dos_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                        <option value="">Calificación</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5" <?= $calificacion_dos == '5' ? 'selected' : '' ?>>Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3" <?= $calificacion_dos == '3' ? 'selected' : '' ?>>Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1" <?= $calificacion_dos == '1' ? 'selected' : '' ?>>Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0" <?= $calificacion_dos == '0' ? 'selected' : '' ?>>Nulo</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <div>
                                                <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style=" ">
                                                    <h4 class="uppercase">Análisis de <br>problemas</h4>
                                                    <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Obtener información relevante e identificar los elementos críticos de las situaciones, sus implicaciones y detalles relevantes para elegir acciones apropiadas.</p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="criterio_desempeño_tres">
                                                        Argumento
                                                    </label>
                                                    <textarea name="criterio_desempeño_tres" cols="60" rows="3" id="criterio_desempeño_tres" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta"><?= set_value('criterio_desempeño_tres', isset($respuestas) ? $respuestas['criterio_desempeño_tres'] : '') ?></textarea>
                                                    <?php
                                                    $ruta_evidencia_tres = isset($respuestas['ruta_evidencia_tres']) ? $respuestas['ruta_evidencia_tres'] : '';
                                                    ?>
                                                    <div>
                                                        <?php if ($ruta_evidencia_tres): ?>
                                                            <a href="<?= $respuestas['ruta_evidencia_tres'] ?>" target="_blank" class="text-blue-500 hover:underline mt-2 block">Ver archivo actual</a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php
                                                    // Supongamos que $calificacion_tres es el valor que viene desde la base de datos.
                                                    $calificacion_tres = isset($respuestas['calificacion_tres']) ? $respuestas['calificacion_tres'] : '';
                                                    ?>
                                                    <select name="calificacion_tres_evaluador" id="calificacion_tres_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                        <option value="">Calificación</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5" <?= $calificacion_tres == '5' ? 'selected' : '' ?>>Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3" <?= $calificacion_tres == '3' ? 'selected' : '' ?>>Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1" <?= $calificacion_tres == '1' ? 'selected' : '' ?>>Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0" <?= $calificacion_tres == '0' ? 'selected' : '' ?>>Nulo</option>
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
                                                    <textarea name="criterio_desempeño_cuatro" cols="60" rows="3" id="criterio_desempeño_cuatro" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta"><?= set_value('criterio_desempeño_cuatro', isset($respuestas) ? $respuestas['criterio_desempeño_cuatro'] : '') ?></textarea>
                                                    <?php
                                                    $ruta_evidencia_cuatro = isset($respuestas['ruta_evidencia_cuatro']) ? $respuestas['ruta_evidencia_cuatro'] : '';
                                                    ?>
                                                    <div>
                                                        <?php if ($ruta_evidencia_cuatro): ?>
                                                            <a href="<?= $respuestas['ruta_evidencia_cuatro'] ?>" target="_blank" class="text-blue-500 hover:underline mt-2 block">Ver archivo actual</a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php
                                                    // Supongamos que $calificacion_cuatro es el valor que viene desde la base de datos.
                                                    $calificacion_cuatro = isset($respuestas['calificacion_cuatro']) ? $respuestas['calificacion_cuatro'] : '';
                                                    ?>
                                                    <select name="calificacion_cuatro_evaluador" id="calificacion_cuatro_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                        <option value="">Calificación</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5" <?= $calificacion_cuatro == '5' ? 'selected' : '' ?>>Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3" <?= $calificacion_cuatro == '3' ? 'selected' : '' ?>>Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1" <?= $calificacion_cuatro == '1' ? 'selected' : '' ?>>Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0" <?= $calificacion_cuatro == '0' ? 'selected' : '' ?>>Nulo</option>
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
                                                    <textarea name="criterio_desempeño_cinco" cols="60" rows="3" id="criterio_desempeño_cinco" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta"><?= set_value('criterio_desempeño_cinco', isset($respuestas) ? $respuestas['criterio_desempeño_cinco'] : '') ?></textarea>
                                                    <?php
                                                    $ruta_evidencia_cinco = isset($respuestas['ruta_evidencia_cinco']) ? $respuestas['ruta_evidencia_cinco'] : '';
                                                    ?>
                                                    <div>
                                                        <?php if ($ruta_evidencia_cinco): ?>
                                                            <a href="<?= $respuestas['ruta_evidencia_cinco'] ?>" target="_blank" class="text-blue-500 hover:underline mt-2 block">Ver archivo actual</a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php
                                                    // Supongamos que $calificacion_cinco es el valor que viene desde la base de datos.
                                                    $calificacion_cinco = isset($respuestas['calificacion_cinco']) ? $respuestas['calificacion_cinco'] : '';
                                                    ?>
                                                    <select name="calificacion_cinco_evaluador" id="calificacion_cinco_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                        <option value="">Calificación</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5" <?= $calificacion_cinco == '5' ? 'selected' : '' ?>>Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3" <?= $calificacion_cinco == '3' ? 'selected' : '' ?>>Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1" <?= $calificacion_cinco == '1' ? 'selected' : '' ?>>Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0" <?= $calificacion_cinco == '0' ? 'selected' : '' ?>>Nulo</option>
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
                                                    <textarea name="criterio_desempeño_seis" cols="60" rows="3" id="criterio_desempeño_seis" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta"><?= set_value('criterio_desempeño_seis', isset($respuestas) ? $respuestas['criterio_desempeño_seis'] : '') ?></textarea>
                                                    <?php
                                                    $ruta_evidencia_seis = isset($respuestas['ruta_evidencia_seis']) ? $respuestas['ruta_evidencia_seis'] : '';
                                                    ?>
                                                    <div>
                                                        <?php if ($ruta_evidencia_seis): ?>
                                                            <a href="<?= $respuestas['ruta_evidencia_seis'] ?>" target="_blank" class="text-blue-500 hover:underline mt-2 block">Ver archivo actual</a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php
                                                    // Supongamos que $calificacion_seis es el valor que viene desde la base de datos.
                                                    $calificacion_seis = isset($respuestas['calificacion_seis']) ? $respuestas['calificacion_seis'] : '';
                                                    ?>
                                                    <select name="calificacion_seis_evaluador" id="calificacion_seis_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                        <option value="">Calificación</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5" <?= $calificacion_seis == '5' ? 'selected' : '' ?>>Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3" <?= $calificacion_seis == '3' ? 'selected' : '' ?>>Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1" <?= $calificacion_seis == '1' ? 'selected' : '' ?>>Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0" <?= $calificacion_seis == '0' ? 'selected' : '' ?>>Nulo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="my-4">

                                            <div>
                                                <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style=" ">
                                                    <h4 class="uppercase">Trabajo bajo <br>presión</h4>
                                                    <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Alcanza los objetivos previstos en situaciones de presión de tiempo, inconvenientes, desacuerdos, oposición o diversidad; mantiene un desempeño alto en situaciones de mucha exigencia. </p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="criterio_desempeño_siete">
                                                        Argumento
                                                    </label>
                                                    <textarea name="criterio_desempeño_siete" cols="60" rows="3" id="criterio_desempeño_siete" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta"><?= set_value('criterio_desempeño_siete', isset($respuestas) ? $respuestas['criterio_desempeño_siete'] : '') ?></textarea>
                                                    <?php
                                                    $ruta_evidencia_siete = isset($respuestas['ruta_evidencia_siete']) ? $respuestas['ruta_evidencia_siete'] : '';
                                                    ?>
                                                    <div>
                                                        <?php if ($ruta_evidencia_siete): ?>
                                                            <a href="<?= $respuestas['ruta_evidencia_siete'] ?>" target="_blank" class="text-blue-500 hover:underline mt-2 block">Ver archivo actual</a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php
                                                    // Supongamos que $calificacion_siete es el valor que viene desde la base de datos.
                                                    $calificacion_siete = isset($respuestas['calificacion_siete']) ? $respuestas['calificacion_siete'] : '';
                                                    ?>
                                                    <select name="calificacion_siete_evaluador" id="calificacion_siete_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                        <option value="">Calificación</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5" <?= $calificacion_siete == '5' ? 'selected' : '' ?>>Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3" <?= $calificacion_siete == '3' ? 'selected' : '' ?>>Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1" <?= $calificacion_siete == '1' ? 'selected' : '' ?>>Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0" <?= $calificacion_siete == '0' ? 'selected' : '' ?>>Nulo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="my-4">

                                            <div>
                                                <div class="grid grid-cols-5 mx-auto border-2 place-items-center mb-8" style=" ">
                                                    <h4 class="uppercase">Desarrollo de<br>competencias <br>adicionales <br>(capacitación)</h4>
                                                    <p class="col-start-2 text-left" style="grid-column: span 4 / span 4;">Muestra interés por el aprendizaje y la actualización. Busca oportunidades de crecimiento personal y profesional a través de capacitación o cualquier otro medio.</p>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 grid grid-cols-5 gap-4 place-items-center mb-4 mx-auto" style="">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="criterio_desempeño_ocho">
                                                        Argumento
                                                    </label>
                                                    <textarea name="criterio_desempeño_ocho" cols="60" rows="3" id="criterio_desempeño_ocho" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 col-start-2 col-span-2" placeholder="Escribe tu meta"><?= set_value('criterio_desempeño_ocho', isset($respuestas) ? $respuestas['criterio_desempeño_ocho'] : '') ?></textarea>
                                                    <?php
                                                    $ruta_evidencia_ocho = isset($respuestas['ruta_evidencia_ocho']) ? $respuestas['ruta_evidencia_ocho'] : '';
                                                    ?>
                                                    <div>
                                                        <?php if ($ruta_evidencia_ocho): ?>
                                                            <a href="<?= $respuestas['ruta_evidencia_ocho'] ?>" target="_blank" class="text-blue-500 hover:underline mt-2 block">Ver archivo actual</a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php
                                                    // Supongamos que $calificacion_ocho es el valor que viene desde la base de datos.
                                                    $calificacion_ocho = isset($respuestas['calificacion_ocho']) ? $respuestas['calificacion_ocho'] : '';
                                                    ?>
                                                    <select name="calificacion_ocho_evaluador" id="calificacion_ocho_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                        <option value="">Calificación</option>
                                                        <option value="5" data-valor-uno="8.75" data-valor-dos="5" <?= $calificacion_ocho == '5' ? 'selected' : '' ?>>Sobresaliente</option>
                                                        <option value="3" data-valor-uno="5.25" data-valor-dos="3" <?= $calificacion_ocho == '3' ? 'selected' : '' ?>>Bueno</option>
                                                        <option value="1" data-valor-uno="1.75" data-valor-dos="1" <?= $calificacion_ocho == '1' ? 'selected' : '' ?>>Regular</option>
                                                        <option value="0" data-valor-uno="0" data-valor-dos="0" <?= $calificacion_ocho == '0' ? 'selected' : '' ?>>Nulo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="my-4">

                                            <div class="mx-auto my-8 grid-cols-3" style="display:grid; grid-template-columns:repeat(3, 1fr); gap:1em; place-items:center;">
                                                <div>
                                                    <h3 class="uppercase">Total del segmento III</h3>
                                                </div>
                                                <div>
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="total_segmento_tres_evaluador">Total %</label>
                                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="total_segmento_tres_evaluador" id="total_segmento_tres_evaluador" value="<?= set_value('total_segmento_tres', isset($respuestas) ? $respuestas['total_segmento_tres'] : '') ?>" readonly>
                                                </div>
                                                <div>
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="puntuaje_segmento_tres_evaluador">Puntuaje obtenido</label>
                                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="puntuaje_segmento_tres_evaluador" id="puntuaje_segmento_tres_evaluador" value="<?= set_value('puntuaje_segmento_tres', isset($respuestas) ? $respuestas['puntuaje_segmento_tres'] : '') ?>" readonly>
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
                                                            <p>Indicador de Gestión</p>
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
                                                                <?php
                                                                // Supongamos que $valor_agregado_uno es el valor que viene desde la base de datos.
                                                                $valor_agregado_uno = isset($respuestas['valor_agregado_uno']) ? $respuestas['valor_agregado_uno'] : '';
                                                                ?>
                                                                <select name="valor_agregado_uno_evaluador" id="valor_agregado_uno_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10" <?= $valor_agregado_uno == '10' ? 'selected' : '' ?>>10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9" <?= $valor_agregado_uno == '9' ? 'selected' : '' ?>>9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8" <?= $valor_agregado_uno == '8' ? 'selected' : '' ?>>8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7" <?= $valor_agregado_uno == '7' ? 'selected' : '' ?>>7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6" <?= $valor_agregado_uno == '6' ? 'selected' : '' ?>>6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5" <?= $valor_agregado_uno == '5' ? 'selected' : '' ?>>5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4" <?= $valor_agregado_uno == '4' ? 'selected' : '' ?>>4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3" <?= $valor_agregado_uno == '3' ? 'selected' : '' ?>>3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2" <?= $valor_agregado_uno == '2' ? 'selected' : '' ?>>2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1" <?= $valor_agregado_uno == '1' ? 'selected' : '' ?>>1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0" <?= $valor_agregado_uno == '0' ? 'selected' : '' ?>>0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <?php
                                                                // Supongamos que $valor_agregado_uno es el valor que viene desde la base de datos.
                                                                $valor_agregado_dos = isset($respuestas['valor_agregado_dos']) ? $respuestas['valor_agregado_dos'] : '';
                                                                ?>
                                                                <select name="valor_agregado_dos_evaluador" id="valor_agregado_dos_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10" <?= $valor_agregado_dos == '10' ? 'selected' : '' ?>>10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9" <?= $valor_agregado_dos == '9' ? 'selected' : '' ?>>9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8" <?= $valor_agregado_dos == '8' ? 'selected' : '' ?>>8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7" <?= $valor_agregado_dos == '7' ? 'selected' : '' ?>>7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6" <?= $valor_agregado_dos == '6' ? 'selected' : '' ?>>6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5" <?= $valor_agregado_dos == '5' ? 'selected' : '' ?>>5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4" <?= $valor_agregado_dos == '4' ? 'selected' : '' ?>>4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3" <?= $valor_agregado_dos == '3' ? 'selected' : '' ?>>3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2" <?= $valor_agregado_dos == '2' ? 'selected' : '' ?>>2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1" <?= $valor_agregado_dos == '1' ? 'selected' : '' ?>>1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0" <?= $valor_agregado_dos == '0' ? 'selected' : '' ?>>0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <?php
                                                                // Supongamos que $valor_agregado_uno es el valor que viene desde la base de datos.
                                                                $valor_agregado_tres = isset($respuestas['valor_agregado_tres']) ? $respuestas['valor_agregado_tres'] : '';
                                                                ?>
                                                                <select name="valor_agregado_tres_evaluador" id="valor_agregado_tres_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10" <?= $valor_agregado_tres == '10' ? 'selected' : '' ?>>10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9" <?= $valor_agregado_tres == '9' ? 'selected' : '' ?>>9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8" <?= $valor_agregado_tres == '8' ? 'selected' : '' ?>>8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7" <?= $valor_agregado_tres == '7' ? 'selected' : '' ?>>7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6" <?= $valor_agregado_tres == '6' ? 'selected' : '' ?>>6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5" <?= $valor_agregado_tres == '5' ? 'selected' : '' ?>>5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4" <?= $valor_agregado_tres == '4' ? 'selected' : '' ?>>4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3" <?= $valor_agregado_tres == '3' ? 'selected' : '' ?>>3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2" <?= $valor_agregado_tres == '2' ? 'selected' : '' ?>>2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1" <?= $valor_agregado_tres == '1' ? 'selected' : '' ?>>1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0" <?= $valor_agregado_tres == '0' ? 'selected' : '' ?>>0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <?php
                                                                // Supongamos que $valor_agregado_uno es el valor que viene desde la base de datos.
                                                                $valor_agregado_cuatro = isset($respuestas['valor_agregado_cuatro']) ? $respuestas['valor_agregado_cuatro'] : '';
                                                                ?>
                                                                <select name="valor_agregado_cuatro_evaluador" id="valor_agregado_cuatro_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10" <?= $valor_agregado_cuatro == '10' ? 'selected' : '' ?>>10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9" <?= $valor_agregado_cuatro == '9' ? 'selected' : '' ?>>9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8" <?= $valor_agregado_cuatro == '8' ? 'selected' : '' ?>>8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7" <?= $valor_agregado_cuatro == '7' ? 'selected' : '' ?>>7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6" <?= $valor_agregado_cuatro == '6' ? 'selected' : '' ?>>6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5" <?= $valor_agregado_cuatro == '5' ? 'selected' : '' ?>>5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4" <?= $valor_agregado_cuatro == '4' ? 'selected' : '' ?>>4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3" <?= $valor_agregado_cuatro == '3' ? 'selected' : '' ?>>3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2" <?= $valor_agregado_cuatro == '2' ? 'selected' : '' ?>>2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1" <?= $valor_agregado_cuatro == '1' ? 'selected' : '' ?>>1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0" <?= $valor_agregado_cuatro == '0' ? 'selected' : '' ?>>0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <?php
                                                                // Supongamos que $valor_agregado_uno es el valor que viene desde la base de datos.
                                                                $valor_agregado_cinco = isset($respuestas['valor_agregado_cinco']) ? $respuestas['valor_agregado_cinco'] : '';
                                                                ?>
                                                                <select name="valor_agregado_cinco_evaluador" id="valor_agregado_cinco_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10" <?= $valor_agregado_cinco == '10' ? 'selected' : '' ?>>10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9" <?= $valor_agregado_cinco == '9' ? 'selected' : '' ?>>9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8" <?= $valor_agregado_cinco == '8' ? 'selected' : '' ?>>8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7" <?= $valor_agregado_cinco == '7' ? 'selected' : '' ?>>7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6" <?= $valor_agregado_cinco == '6' ? 'selected' : '' ?>>6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5" <?= $valor_agregado_cinco == '5' ? 'selected' : '' ?>>5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4" <?= $valor_agregado_cinco == '4' ? 'selected' : '' ?>>4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3" <?= $valor_agregado_cinco == '3' ? 'selected' : '' ?>>3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2" <?= $valor_agregado_cinco == '2' ? 'selected' : '' ?>>2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1" <?= $valor_agregado_cinco == '1' ? 'selected' : '' ?>>1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0" <?= $valor_agregado_cinco == '0' ? 'selected' : '' ?>>0</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="grid grid-cols-3 border-b-2 border-l-2 border-r-2 justify-center items-center" style="border-right-width:2px">
                                                        <div>
                                                            <p></p>
                                                        </div>
                                                        <div style="border-right-width:2px; border-left-width:2px">
                                                            <p class="uppercase">Suma</p>
                                                        </div>
                                                        <div class="p-4 grid justify-center items-center gap-1">
                                                            <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="total_uno_evaluador" id="total_uno_evaluador" value="<?= set_value('total_uno', isset($respuestas) ? $respuestas['total_uno'] : '') ?>" readonly>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="grid grid-rows-3 mb-4">
                                                    <div class="grid grid-cols-3 p-4 uppercase border-2">
                                                        <div>
                                                            <p>Dimensiones</p>
                                                        </div>
                                                        <div>
                                                            <p>Indicador de Gestión</p>
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
                                                                <p>Lealtad</p>
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
                                                                <?php
                                                                // Supongamos que $valor_agregado_uno es el valor que viene desde la base de datos.
                                                                $valor_agregado_seis = isset($respuestas['valor_agregado_seis']) ? $respuestas['valor_agregado_seis'] : '';
                                                                ?>
                                                                <select name="valor_agregado_seis_evaluador" id="valor_agregado_seis_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10" <?= $valor_agregado_seis == '10' ? 'selected' : '' ?>>10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9" <?= $valor_agregado_seis == '9' ? 'selected' : '' ?>>9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8" <?= $valor_agregado_seis == '8' ? 'selected' : '' ?>>8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7" <?= $valor_agregado_seis == '7' ? 'selected' : '' ?>>7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6" <?= $valor_agregado_seis == '6' ? 'selected' : '' ?>>6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5" <?= $valor_agregado_seis == '5' ? 'selected' : '' ?>>5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4" <?= $valor_agregado_seis == '4' ? 'selected' : '' ?>>4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3" <?= $valor_agregado_seis == '3' ? 'selected' : '' ?>>3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2" <?= $valor_agregado_seis == '2' ? 'selected' : '' ?>>2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1" <?= $valor_agregado_seis == '1' ? 'selected' : '' ?>>1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0" <?= $valor_agregado_seis == '0' ? 'selected' : '' ?>>0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <?php
                                                                // Supongamos que $valor_agregado_uno es el valor que viene desde la base de datos.
                                                                $valor_agregado_siete = isset($respuestas['valor_agregado_siete']) ? $respuestas['valor_agregado_siete'] : '';
                                                                ?>
                                                                <select name="valor_agregado_siete_evaluador" id="valor_agregado_siete_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10" <?= $valor_agregado_siete == '10' ? 'selected' : '' ?>>10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9" <?= $valor_agregado_siete == '9' ? 'selected' : '' ?>>9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8" <?= $valor_agregado_siete == '8' ? 'selected' : '' ?>>8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7" <?= $valor_agregado_siete == '7' ? 'selected' : '' ?>>7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6" <?= $valor_agregado_siete == '6' ? 'selected' : '' ?>>6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5" <?= $valor_agregado_siete == '5' ? 'selected' : '' ?>>5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4" <?= $valor_agregado_siete == '4' ? 'selected' : '' ?>>4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3" <?= $valor_agregado_siete == '3' ? 'selected' : '' ?>>3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2" <?= $valor_agregado_siete == '2' ? 'selected' : '' ?>>2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1" <?= $valor_agregado_siete == '1' ? 'selected' : '' ?>>1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0" <?= $valor_agregado_siete == '0' ? 'selected' : '' ?>>0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <?php
                                                                // Supongamos que $valor_agregado_uno es el valor que viene desde la base de datos.
                                                                $valor_agregado_ocho = isset($respuestas['valor_agregado_ocho']) ? $respuestas['valor_agregado_ocho'] : '';
                                                                ?>
                                                                <select name="valor_agregado_ocho_evaluador" id="valor_agregado_ocho_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10" <?= $valor_agregado_ocho == '10' ? 'selected' : '' ?>>10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9" <?= $valor_agregado_ocho == '9' ? 'selected' : '' ?>>9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8" <?= $valor_agregado_ocho == '8' ? 'selected' : '' ?>>8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7" <?= $valor_agregado_ocho == '7' ? 'selected' : '' ?>>7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6" <?= $valor_agregado_ocho == '6' ? 'selected' : '' ?>>6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5" <?= $valor_agregado_ocho == '5' ? 'selected' : '' ?>>5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4" <?= $valor_agregado_ocho == '4' ? 'selected' : '' ?>>4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3" <?= $valor_agregado_ocho == '3' ? 'selected' : '' ?>>3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2" <?= $valor_agregado_ocho == '2' ? 'selected' : '' ?>>2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1" <?= $valor_agregado_ocho == '1' ? 'selected' : '' ?>>1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0" <?= $valor_agregado_ocho == '0' ? 'selected' : '' ?>>0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <?php
                                                                // Supongamos que $valor_agregado_uno es el valor que viene desde la base de datos.
                                                                $valor_agregado_nueve = isset($respuestas['valor_agregado_nueve']) ? $respuestas['valor_agregado_nueve'] : '';
                                                                ?>
                                                                <select name="valor_agregado_nueve_evaluador" id="valor_agregado_nueve_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10" <?= $valor_agregado_nueve == '10' ? 'selected' : '' ?>>10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9" <?= $valor_agregado_nueve == '9' ? 'selected' : '' ?>>9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8" <?= $valor_agregado_nueve == '8' ? 'selected' : '' ?>>8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7" <?= $valor_agregado_nueve == '7' ? 'selected' : '' ?>>7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6" <?= $valor_agregado_nueve == '6' ? 'selected' : '' ?>>6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5" <?= $valor_agregado_nueve == '5' ? 'selected' : '' ?>>5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4" <?= $valor_agregado_nueve == '4' ? 'selected' : '' ?>>4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3" <?= $valor_agregado_nueve == '3' ? 'selected' : '' ?>>3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2" <?= $valor_agregado_nueve == '2' ? 'selected' : '' ?>>2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1" <?= $valor_agregado_nueve == '1' ? 'selected' : '' ?>>1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0" <?= $valor_agregado_nueve == '0' ? 'selected' : '' ?>>0</option>
                                                                </select>
                                                            </div>
                                                            <div class="p-4 flex flex-row justify-center items-center gap-1">
                                                                <?php
                                                                // Supongamos que $valor_agregado_uno es el valor que viene desde la base de datos.
                                                                $valor_agregado_diez = isset($respuestas['valor_agregado_diez']) ? $respuestas['valor_agregado_diez'] : '';
                                                                ?>
                                                                <select name="valor_agregado_diez_evaluador" id="valor_agregado_diez_evaluador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                    <option value="">Selecciona una calificacion</option>
                                                                    <option data-valor-uno="3" data-valor-dos="10" <?= $valor_agregado_diez == '10' ? 'selected' : '' ?>>10</option>
                                                                    <option data-valor-uno="2.7" data-valor-dos="9" <?= $valor_agregado_diez == '9' ? 'selected' : '' ?>>9</option>
                                                                    <option data-valor-uno="2.4" data-valor-dos="8" <?= $valor_agregado_diez == '8' ? 'selected' : '' ?>>8</option>
                                                                    <option data-valor-uno="2" data-valor-dos="7" <?= $valor_agregado_diez == '7' ? 'selected' : '' ?>>7</option>
                                                                    <option data-valor-uno="1.8" data-valor-dos="6" <?= $valor_agregado_diez == '6' ? 'selected' : '' ?>>6</option>
                                                                    <option data-valor-uno="1.5" data-valor-dos="5" <?= $valor_agregado_diez == '5' ? 'selected' : '' ?>>5</option>
                                                                    <option data-valor-uno="1.2" data-valor-dos="4" <?= $valor_agregado_diez == '4' ? 'selected' : '' ?>>4</option>
                                                                    <option data-valor-uno="0.9" data-valor-dos="3" <?= $valor_agregado_diez == '3' ? 'selected' : '' ?>>3</option>
                                                                    <option data-valor-uno="0.6" data-valor-dos="2" <?= $valor_agregado_diez == '2' ? 'selected' : '' ?>>2</option>
                                                                    <option data-valor-uno="0.3" data-valor-dos="1" <?= $valor_agregado_diez == '1' ? 'selected' : '' ?>>1</option>
                                                                    <option data-valor-uno="0" data-valor-dos="0" <?= $valor_agregado_diez == '0' ? 'selected' : '' ?>>0</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="grid grid-cols-3 border-b-2 border-l-2 border-r-2 justify-center items-center" style="border-right-width:2px">
                                                        <div>
                                                            <p></p>
                                                        </div>
                                                        <div style="border-right-width:2px; border-left-width:2px">
                                                            <p class="uppercase">Suma</p>
                                                        </div>
                                                        <div class="p-4 grid justify-center items-center gap-1">
                                                            <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="total_dos_evaluador" id="total_dos_evaluador" value="<?= set_value('total_dos', isset($respuestas) ? $respuestas['total_dos'] : '') ?>" readonly>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-8">
                                        <div class="mx-auto my-8 grid-cols-3" style="display:grid; grid-template-columns:repeat(3, 1fr); gap:1em; place-items:center;">
                                            <div>
                                                <h3 class="uppercase">Total del segmento IV</h3>
                                            </div>
                                            <div>
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="total_segmento_cuatro_evaluador">Total %</label>
                                                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="total_segmento_cuatro_evaluador" id="total_segmento_cuatro_evaluador" value="<?= set_value('total_segmento_cuatro', isset($respuestas) ? $respuestas['total_segmento_cuatro'] : '') ?>" readonly>
                                            </div>
                                            <div>
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="puntuaje_segmento_cuatro_evaluador">Puntuaje obtenido</label>
                                                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="puntuaje_segmento_cuatro_evaluador" id="puntuaje_segmento_cuatro_evaluador" value="<?= set_value('puntuaje_segmento_cuatro', isset($respuestas) ? $respuestas['puntuaje_segmento_cuatro'] : '') ?>" readonly>
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
                                                        <p>Calificación Global</p>
                                                    </div>
                                                </div>
                                                <div class="grid grid-rows-3 gap-2">
                                                    <div class="p-4 flex flex-row justify-center items-center">
                                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="final_segmento_tres_evaluador" name="final_segmento_tres_evaluador" value="<?= set_value('total_segmento_tres', isset($respuestas) ? $respuestas['total_segmento_tres'] : '') ?>" readonly>
                                                    </div>
                                                    <div class="p-4 flex flex-row justify-center items-center">
                                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="final_segmento_cuatro_evaluador" name="final_segmento_cuatro_evaluador" value="<?= set_value('total_segmento_cuatro', isset($respuestas) ? $respuestas['total_segmento_cuatro'] : '') ?>" readonly>
                                                    </div>
                                                    <div class="p-4 flex flex-row justify-center items-center">
                                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="total_global_evaluador" name="total_global_evaluador" value="<?= set_value('total_global', isset($respuestas) ? $respuestas['total_global'] : '') ?>" readonly>
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
                                                <textarea name="comentarios_evaluado" cols="180" rows="5" id="comentarios_evaluado" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones"><?= set_value('comentarios_evaluado', isset($respuestas) ? $respuestas['comentarios_evaluado'] : '') ?></textarea>
                                            </div>
                                        </div>
                                        <hr class="my-8">
                                        <div style="" class="mx-auto">
                                            <div class="flex flex-col justify-center my-8">
                                                <h3 class="uppercase text-center text-lg font-bold">VI. Comentarios del Evaluador</h3>
                                            </div>
                                            <div class="p-4 flex flex-col justify-center items-center gap-4">
                                                <div class="p-4 border-2 rounded-md">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="comentarios_evaluador_uno">SI EL SERVIDOR PÚBLICO HA SIDO CAPACITADO, DESCRIBA BREVEMENTE CUÁL HA SIDO EL IMPACTO DE LAS ACCIONES DE CAPACITACIÓN EN LOS PROCESOS COTIDIANOS DE SUS LABORES </label>
                                                    <textarea name="comentarios_evaluador_uno" cols="180" rows="5" id="comentarios_evaluador_uno" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones" <?= isset($respuestas['comentarios_evaluador_uno']) ? 'readonly' : '' ?>><?= set_value('comentarios_evaluador_uno', isset($respuestas['comentarios_evaluador_uno']) ? $respuestas['comentarios_evaluador_uno'] : '') ?></textarea>
                                                </div>
                                                <div class="p-4 border-2 rounded-md">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="comentarios_evaluador_dos">DESCRIBA BREVEMENTE LAS APORTACIONES QUE EL SERVIDOR PÚBLICO HA REALIZADO PARA MEJORAR SUS PROCESOS DE TRABAJO </label>
                                                    <textarea name="comentarios_evaluador_dos" cols="180" rows="5" id="comentarios_evaluador_dos" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones" <?= isset($respuestas['comentarios_evaluador_dos']) ? 'readonly' : '' ?>><?= set_value('comentarios_evaluador_dos', isset($respuestas['comentarios_evaluador_dos']) ? $respuestas['comentarios_evaluador_dos'] : '') ?></textarea>
                                                </div>
                                                <div class="p-4 border-2 rounded-md">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="comentarios_evaluador_tres">RESPECTO A LA EVALUACIÓN DEL SERVIDOR PÚBLICO OBTENIDA EN EL SEMESTRE ANTERIOR, DESCRIBA BREVEMENTE SI SE OBSERVARON MODIFICACIONES POSITIVAS O NEGATIVAS RESPECTO A SU TRABAJO </label>
                                                    <textarea name="comentarios_evaluador_tres" cols="180" rows="5" id="comentarios_evaluador_tres" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones" <?= isset($respuestas['comentarios_evaluador_tres']) ? 'readonly' : '' ?>><?= set_value('comentarios_evaluador_tres', isset($respuestas['comentarios_evaluador_tres']) ? $respuestas['comentarios_evaluador_tres'] : '') ?></textarea>
                                                </div>
                                                <div class="p-4 border-2 rounded-md">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="comentarios_evaluador_cuatro">MENCIONE NECESIDADES DE CAPACITACIÓN QUE USTED CONSIDERE ÚTILES PARA QUE EL TRABAJADOR INCREMENTE SU EFICIENCIA LABORAL </label>
                                                    <textarea name="comentarios_evaluador_cuatro" cols="180" rows="5" id="comentarios_evaluador_cuatro" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tus acciones" <?= isset($respuestas['comentarios_evaluador_cuatro']) ? 'readonly' : '' ?>><?= set_value('comentarios_evaluador_cuatro', isset($respuestas['comentarios_evaluador_cuatro']) ? $respuestas['comentarios_evaluador_cuatro'] : '') ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="my-8">
                                        <div class="mt-10">
                                            <button class="text-white bg-rose-800 hover:bg-rose-700/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                                                <i class="fa-solid fa-save mr-2"></i> Guardar
                                            </button>
                                        </div>
                                        <!-- <button class="text-white bg-rose-800 hover:bg-rose-700/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2" type="submit"><i class="fa-solid fa-save mr-2"></i> GuardarEnviar</button> -->
                                    </form>
                                </div>
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
    // Primer script: calcular el total para final_segmento_tres
    document.addEventListener('DOMContentLoaded', (event) => {
        const inputs = [
            document.getElementById('calificacion_uno_evaluador'),
            document.getElementById('calificacion_dos_evaluador'),
            document.getElementById('calificacion_tres_evaluador'),
            document.getElementById('calificacion_cuatro_evaluador'),
            document.getElementById('calificacion_cinco_evaluador'),
            document.getElementById('calificacion_seis_evaluador'),
            document.getElementById('calificacion_siete_evaluador'),
            document.getElementById('calificacion_ocho_evaluador')
        ];
        const resultadoUno = document.getElementById('total_segmento_tres_evaluador');
        const resultadoDos = document.getElementById('puntuaje_segmento_tres_evaluador');
        const resultadoDosF = document.getElementById('final_segmento_tres_evaluador');

        inputs.forEach(input => {
            input.addEventListener('change', calcularResultado);
        });

        function calcularResultado() {
            let totalUno = 0, totalDos = 0;
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
            sumarValores();  // Actualizar total_global
        }
    });
</script>

<script>
    // Segundo script: calcular el total para final_segmento_cuatro
    document.addEventListener('DOMContentLoaded', (event) => {
        const selects = [
            document.getElementById('valor_agregado_uno_evaluador'),
            document.getElementById('valor_agregado_dos_evaluador'),
            document.getElementById('valor_agregado_tres_evaluador'),
            document.getElementById('valor_agregado_cuatro_evaluador'),
            document.getElementById('valor_agregado_cinco_evaluador'),
            document.getElementById('valor_agregado_seis_evaluador'),
            document.getElementById('valor_agregado_siete_evaluador'),
            document.getElementById('valor_agregado_ocho_evaluador'),
            document.getElementById('valor_agregado_nueve_evaluador'),
            document.getElementById('valor_agregado_diez_evaluador')
        ];
        const resultadoUno = document.getElementById('total_segmento_cuatro_evaluador');
        const resultadoDos = document.getElementById('puntuaje_segmento_cuatro_evaluador');
        const resultadoDosF = document.getElementById('final_segmento_cuatro_evaluador');

        selects.forEach(select => {
            select.addEventListener('change', calcularResultado1);
        });

        function calcularResultado1() {
            let totalUno = 0, totalDos = 0;
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
            sumarValores();  // Actualizar total_global
        }
    });
</script>

<script>
    // Tercer script: sumar los valores de final_segmento_tres y final_segmento_cuatro
    function sumarValores() {
        var valor1 = parseFloat(document.getElementById('final_segmento_tres_evaluador').value) || 0;
        var valor2 = parseFloat(document.getElementById('final_segmento_cuatro_evaluador').value) || 0;
        var suma = valor1 + valor2;
        document.getElementById('total_global_evaluador').value = suma;
    }
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('final_segmento_tres_evaluador').addEventListener('input', sumarValores);
        document.getElementById('final_segmento_cuatro_evaluador').addEventListener('input', sumarValores);
    });
</script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>