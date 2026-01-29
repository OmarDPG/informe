  <!--Container-->
    <div class="container w-full mx-auto pt-20">
      <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
        <!--Console Content-->
        <div class="flex flex-row flex-wrap flex-grow mt-2">
          <div class="w-full ">
              <div class="">
                <div class="border-b p-3">
                  <h5 class="font-bold uppercase text-gray-600">Datos del usuario</h5>
                </div>
                <div class="pl-5">
                  <ul>En esta sección podrás visualizar y modificar tus datos.</ul>
                </div>
              </div>
              <?php if(isset($errors)){?>
                <div class="p-4 text-sm text-red-800 mb-5 shadow-lg border z-50 rounded-lg bg-gray-50" role="alert">
                  <span class="font-medium">¡Error!</span> <div class="alert alert-danger">
                    <?php echo $errors->listErrors();?>
                  </div>
              </div>
              <?php }?>
          </div>
        </div>
        <hr class="border-b-2 border-gray-400 my-8 mx-4">
        <div class="flex flex-row flex-wrap flex-grow mt-2">
          <div class="w-full p-3">
            <div class="">
              <form action="<?php echo isset($session)?base_url('/scii/actualizarUsuario'):''?>" method="post" accept-charset="utf-8" autocomplete="off">
                <div class="grid md:grid-cols-2 md:gap-6">
                  <div class="relative z-0 w-full mb-6 group">
                    <span class="text-sm font-medium text-gray-900"> Usuario/# Expediente: <span class="ml-3 text-sm font-medium text-rose-900"> <?php echo $session->usuario;?></span></span>
                  </div>
                  <div class="relative z-0 w-full mb-6 group">
                      <label class="relative inline-flex items-center">
                          <span class="text-sm font-medium text-gray-900"> Permisos: <span class="ml-3 text-sm font-medium text-rose-900"> <?php echo $session->admGen==1?'Carga de archivos':'Generales';?></span></span>
                      </label>
                  </div>
                </div>
                <div class="grid md:gap-6">
                  <div class="relative z-0 w-full mb-6 group">
                      <?php foreach($unidades as $unidad){
                        if($unidad['id_unidad']==$session->id_unidad){?>
                        <label class="relative inline-flex items-center">
                        <span class="text-sm font-medium text-gray-900"> Dirección a la que pertenece: <span class="ml-3 text-sm font-medium text-rose-900"> <?php echo $unidad['descripcion'];?></span></span>
                        </label>
                      <?php } }?>
                  </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6 mt-3">
                  <div class="relative z-0 w-full mb-6 group">
                      <input type="text" name="nombre_s" id="nombre_s" value="<?php echo isset($session->nombre_s)?$session->nombre_s:'';?>" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                      <label for="nombre_s" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre(s)</label>
                  </div>
                  <div class="relative z-0 w-full mb-6 group">
                      <input type="text" name="apellido_p" id="apellido_p" value="<?php echo isset($session->apellido_p)?$session->apellido_p:'';?>" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                      <label for="apellido_p" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellido paterno</label>
                  </div>
                  <div class="relative z-0 w-full mb-6 group">
                      <input type="text" name="apellido_m" id="apellido_m" value="<?php echo isset($session->apellido_m)?$session->apellido_m:'';?>" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                      <label for="apellido_m" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellido materno</label>
                  </div>
                  <div class="relative z-0 w-full mb-6 group">
                    <input type="password" name="password" id="password" value="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " <?php echo isset($session)?'':'required'?> />
                    <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contraseña</label>
                  </div>
                </div>
                <button type="submit" class="mt-10 text-white bg-green-800 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Guardar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/container-->

    