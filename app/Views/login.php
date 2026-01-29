<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/assets/icon.png" />
    <title>ACCESO-SMADSOT</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/output.css">    <!--Replace with your tailwind.css once created-->
    <style>
      .rose-800 {
        --tw-text-opacity: 1;
        color: #a8123d;
      }
      .from-rose-800{
        --tw-gradient-from: #a8123d;
        --tw-gradient-to: rgb(168 18 61 / 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
      } 
      .to-trueGray-500{
        --tw-gradient-to: #6b6b6b;
      }
    </style>
  </head>

  <body>
    <div class="bg-white dark:bg-gray-900">
      <div class="flex justify-center h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(<?php echo base_url().'/originales/'.rand(1,192).'.jpg'?>)">
          <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
            <div>
                <h2 class="text-4xl font-bold text-white">Sistema de Control Interno Institucional</h2>
                
                <p class="max-w-xl mt-3 text-gray-300">El control interno tiene como objetivo proporcionar una seguridad razonable en el logro de objetivos y metas de la Institución respecto a la operación de los programas y proyectos, a la confiabilidad, veracidad y oportunidad de la información financiera, presupuestaria y de operación, el cumplimiento del marco legal, reglamentario, normativo y administrativo, la salvaguarda de los recursos públicos y la prevención de los actos de corrupción.</p>
            </div>
          </div>
        </div>
        <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
            <div class="flex-1 ">
              <div class="grid place-items-center">
                <div class="text-center">
                <img src="<?php echo base_url();?>/assets/desarrolloSustentableVino.png" alt="">
                </div>      
                <p class="mt-3 text-gray-500 dark:text-gray-300">Ingresa con tu usuario y contraseña</p>
              
              </div>
              
              <div class="mt-8">
                <form method="post" id="form-regis" name="form-regis" action="<?php echo base_url('inicio/valida') ?>" autocomplete="off">
                  <label for="usuario" class="mb-2 ml-1 font-bold text-xs text-slate-700">Usuario</label>
                  <div class="mb-4">
                    <input type="text" id="usuario" name="usuario" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Ususario" aria-label="Ususario" aria-describedby="Ususario-addon" required/>
                  </div>
                  <label for="password" class="mb-2 ml-1 font-bold text-xs text-slate-700">Contraseña</label>
                  <div class="mb-4">
                    <input type="password" id="password" name="password" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Contraseña" aria-label="Password" aria-describedby="password-addon" required/>
                  </div>
                  <div class="mb-4">
                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700 text-red-600"><?php if(isset($validation)){?>
                      
                      <div class="alert alert-danger">
                          <?php echo $validation->listErrors();?>
                      </div>                
                      <?php } ?>
                      <?php if(isset($error)){?>
                      <div class="alert alert-danger">
                          <?php echo $error;?>
                      </div>                
                      <?php } ?></label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-rose-800 to-trueGray-500 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Ingresar</button>
                  </div>
                </form>
              </div>
              <div class="text-center mt-10">
              <p class="mb-0 text-slate-400">
                Copyright ©
              <script> document.write(new Date().getFullYear());</script> Secretaría de Medio Ambiente, Desarrollo Sustentable y Ordenamiento Territorial.
            </p></div>
            </div>
        </div>
      </div>
    </div>
  </body><!-- main script file  -->
</html>
