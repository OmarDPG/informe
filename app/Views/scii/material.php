  <!--Container-->
    <div class="container w-full mx-auto pt-20">
      <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
        <!--Console Content-->
        <div class="flex flex-row flex-wrap flex-grow mt-2">
          <div class="w-full p-3">
              <div class="">
                <div class="border-b p-3">
                  <h5 class="font-bold uppercase text-gray-600">Material de Consulta</h5>
                </div>
                <div class="p-5">
                  <ul>Aquí podrás consultar los videos y presentaciones del control interno institucional, los documentos entregados por el Comité de Control y Desempeño Institucional, así como los asuntos tratados en las Sesiones Ordinarias. Además, podrás consultar cómo se encuentra integrado el Comité.</ul>
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
                      <button class="inline-block p-4 border-b-2 rounded-t-lg aria-selected:text-rose-900 aria-selected:border-rose-900" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Control Interno</button>
                  </li>
                  <li class="mr-2" role="presentation">
                      <button class="inline-block p-4 border-b-2 rounded-t-lg aria-selected:text-rose-900 aria-selected:border-rose-900" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Administración de Riesgos</button>
                  </li>
                  <li class="mr-2" role="presentation">
                      <button class="inline-block p-4 border-b-2 rounded-t-lg aria-selected:text-rose-900 aria-selected:border-rose-900" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">COCODI</button>
                  </li>
                </ul>
              </div>
              <div id="myTabContent" class="content-center grid">
                <div class="hidden p-4 grid grid-cols-1 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="flex place-content-center place-items-center grid grid-cols-1 lg:grid-cols-2">
                    <div class="flex justify-center items-center mb-4">
                      <div class="flex justify-center">
                        <video class="w-full" controls>
                          <source src="<?php echo base_url().'/files/materiales/0/0.mp4';?>" type="video/mp4">
                          Your browser does not support the video tag.
                        </video>
                      </div>
                    </div> 
                    <div class="flex justify-center items-center p-4 grid grid-cols-1 max-w-screen-md min-w-screen-md rounded-lg">
                      <div class="flex justify-center items-center">
                        <div class="p-5 rounded-lg">
                          <div class="grid grid-cols-1 gap-4">
                            <?php $i=1;?>
                            <?php
                              $files = glob('files/materiales/'.$i.'/*');
                              $det=isset($files[0])?(pathinfo($files[0], PATHINFO_EXTENSION)):'file';
                            ?> 
                            <a target="_blank" href="<?php echo base_url().'/files/materiales/1/1.'.$det?>" class="z-30 relative inline-block flex flex-row items-center bg-emerald-600 hover:bg-emerald-800 text-white rounded-full p-3 group">
                              <i class="inline-flex p-3 items-center justify-center w-10 h-10 mr-2 text-emerald-100 transition-colors duration-150 bg-emerald-700 rounded-full focus:shadow-outline group-hover:bg-emerald-800 fa-solid fa-person-chalkboard "></i>
                              <span class="mt-2 font-medium text-left">¿Qué es el Control interno?</span>
                            </a>
                            <?php 
                              $i++;
                              $files = glob('files/materiales/'.$i.'/*');
                              $det=isset($files[0])?(pathinfo($files[0], PATHINFO_EXTENSION)):'file';
                            ?>
                            <a target="_blank" href="<?php echo base_url().'/files/materiales/2/2.'.$det?>" class="flex flex-row items-center bg-emerald-600 hover:bg-emerald-800 text-white rounded-full p-3 group">
                              <i class="inline-flex p-3 items-center justify-center w-10 h-10 mr-2 text-emerald-100 transition-colors duration-150 bg-emerald-700 rounded-full focus:shadow-outline group-hover:bg-emerald-800 fa-solid fa-person-chalkboard "></i>
                              <span class="mt-2 font-medium text-left">Normas Generales, Principios y Elementos de Control Interno</span>
                            </a>
                            <?php 
                              $i++;
                              $files = glob('files/materiales/'.$i.'/*');
                              $det=isset($files[0])?(pathinfo($files[0], PATHINFO_EXTENSION)):'file';
                            ?>
                            <a target="_blank" href="<?php echo base_url().'/files/materiales/3/3.'.$det?>" class="flex flex-row items-center bg-emerald-600 hover:bg-emerald-800 text-white rounded-full p-3 group">
                              <i class="inline-flex p-3 items-center justify-center w-10 h-10 mr-2 text-emerald-100 transition-colors duration-150 bg-emerald-700 rounded-full focus:shadow-outline group-hover:bg-emerald-800 fa-solid fa-person-chalkboard "></i>
                              <span class="mt-2 font-medium text-left">Sistema de Evaluación de Control Interno</span>
                            </a>
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div>
                  <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#ci" role="tablist">
                      <?php for($i=2023;$i<=date('Y');$i++){?>
                      <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg aria-selected:text-rose-900 aria-selected:border-rose-900" id="<?php echo 'year'.$i?>-tab" data-tabs-target="#<?php echo 'year'.$i?>" type="button" role="tab" aria-controls="<?php echo 'year'.$i?>" aria-selected="false"><?php echo $i?></button>
                      </li><?php }?>
                    </ul>
                  </div>
                  <div id="ci">
                    <?php for($i=2023;$i<=date('Y');$i++){?>
                      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="<?php echo 'year'.$i?>" role="tabpanel" aria-labelledby="<?php echo 'year'.$i?>-tab">
                      <div class="flex flex-col container  mx-auto w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg shadow">            
                        <ul class="flex flex-col divide-y w-full">
                          <?php 
                            $dir='files/materiales/'.$i;
                            $map = directory_map($dir);
                            foreach($map as $mp){
                              if((explode('_',$mp)[1]==0)){
                              ?>
                              <li class="flex flex-row">
                                <div class="select-none hover:bg-gray-50 flex flex-1 items-center p-4">
                                  <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
                                    <button type="submit" class="w-10 text-center flex justify-center cursor-pointer" onclick="window.open('<?php echo base_url().'/files/materiales/'.$i.'/'.$mp;?>')" download>
                                      <svg class="w-10 h-10 mr-2 mx-auto object-cover rounded-full" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg>
                                    </button>
                                  </div>
                                  <div class="flex-1 pl-1">
                                    <div class="font-medium dark:text-white"><?php echo (explode('.',explode('_',$mp)[2])[0]);?></div>
                                    <div class="text-gray-600 dark:text-gray-200 text-sm"><?php echo strtoupper(pathinfo('files/materiales/'.$i.'/'.$mp, PATHINFO_EXTENSION));?></div>
                                  </div>
                                  <div class="flex flex-row justify-center">
                                    <button type="submit" class="w-10 text-center flex justify-center cursor-pointer" onclick="window.open('<?php echo base_url().'/files/materiales/'.$i.'/'.$mp;?>')" download>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16"> <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/> </svg>
                                    </button>
                                  </div>
                                </div>
                              </li>
                            <?php } }
                          ?>
                        </ul>
                      </div>
                      </div> 
                    <?php }?>
                  </div>
                </div>
                <div class="hidden p-4 grid grid-cols-1 rounded-lg " id="dashboard" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                      <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent1" role="tablist">
                        <?php for($i=2023;$i<=date('Y');$i++){?>
                        <li class="mr-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg aria-selected:text-rose-900 aria-selected:border-rose-900" id="<?php echo 'yearadm'.$i?>-tab" data-tabs-target="#<?php echo 'yearadm'.$i?>" type="button" role="tab" aria-controls="<?php echo 'year'.$i?>" aria-selected="false"><?php echo $i?></button>
                        </li><?php }?>
                      </ul>
                  </div>
                  <div id="myTabContent1">
                    <?php for($i=2023;$i<=date('Y');$i++){?>
                      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="<?php echo 'yearadm'.$i?>" role="tabpanel" aria-labelledby="<?php echo 'yearadm'.$i?>-tab">
                      <div class="flex flex-col container  mx-auto w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg shadow">            
                        <ul class="flex flex-col divide-y w-full">
                          <?php 
                            $dir='files/materiales/'.$i;
                            $map = directory_map($dir);
                            foreach($map as $mp){
                              if((explode('_',$mp)[1]==1)){
                              ?>
                              <li class="flex flex-row">
                                <div class="select-none hover:bg-gray-50 flex flex-1 items-center p-4">
                                  <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
                                  <button type="submit" class="w-10 text-center flex justify-center cursor-pointer" onclick="window.open('<?php echo base_url().'/files/materiales/'.$i.'/'.$mp;?>')" download>
                                      <svg class="w-10 h-10 mr-2 mx-auto object-cover rounded-full" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg>
                              </button>
                                  </div>
                                  <div class="flex-1 pl-1">
                                    <div class="font-medium dark:text-white"><?php echo (explode('.',explode('_',$mp)[2])[0]);?></div>
                                    <div class="text-gray-600 dark:text-gray-200 text-sm"><?php echo strtoupper(pathinfo('files/materiales/'.$i.'/'.$mp, PATHINFO_EXTENSION));?></div>
                                  </div>
                                  <div class="flex flex-row justify-center">
                                    <button type="submit" class="w-10 text-center flex justify-center cursor-pointer" onclick="window.open('<?php echo base_url().'/files/materiales/'.$i.'/'.$mp;?>')" download>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16"> <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/> </svg>
                                    </button>
                                  </div>
                                </div>
                              </li>
                            <?php } }
                          ?>
                        </ul>
                      </div>
                      </div> 
                    <?php }?>
                  </div>
                </div>
                <div class="hidden p-4 grid grid-cols-1 rounded-lg" id="settings" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="flex place-content-center">
                    <div class="flex justify-center items-center p-4 grid grid-cols-1 max-w-screen-md min-w-screen-md rounded-lg ">
                      <div class="flex justify-center items-center m-4">
                        <?php 
                        $dir='files/materiales/4';
                        $map = directory_map($dir);
                        ?>
                        <img src="<?php echo isset($map[0])?(base_url().'./files/materiales/4/'.$map[0]):''?>" alt="Organigrama">
                      </div>
                    </div>
                  </div>
                  <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#cocodi" role="tablist">
                    <?php for($i=2023;$i<=date('Y');$i++){?>
                        <li class="mr-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg aria-selected:text-rose-900 aria-selected:border-rose-900" id="<?php echo 'yearcoco'.$i?>-tab" data-tabs-target="#<?php echo 'yearcoco'.$i?>" type="button" role="tab" aria-controls="<?php echo 'year'.$i?>" aria-selected="false"><?php echo $i?></button>
                        </li><?php }?>
                    </ul>
                  </div>
                  <div id="cocodi">
                    <?php for($i=2023;$i<=date('Y');$i++){?>
                      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="<?php echo 'yearcoco'.$i?>" role="tabpanel" aria-labelledby="<?php echo 'yearcoco'.$i?>-tab">
                      <div class="flex flex-col container  mx-auto w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg shadow">            
                        <ul class="flex flex-col divide-y w-full">
                          <?php 
                            $dir='files/materiales/'.$i;
                            $map = directory_map($dir);
                            foreach($map as $mp){
                              if((explode('_',$mp)[1]==2)){
                              ?>
                              <li class="flex flex-row">
                                <div class="select-none hover:bg-gray-50 flex flex-1 items-center p-4">
                                  <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
                                  <button type="submit" class="w-10 text-center flex justify-center cursor-pointer" onclick="window.open('<?php echo base_url().'/files/materiales/'.$i.'/'.$mp;?>')" download>
                                      <svg class="w-10 h-10 mr-2 mx-auto object-cover rounded-full" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg>
                              </button>
                                  </div>
                                  <div class="flex-1 pl-1">
                                    <div class="font-medium dark:text-white"><?php echo (explode('.',explode('_',$mp)[2])[0]);?></div>
                                    <div class="text-gray-600 dark:text-gray-200 text-sm"><?php echo strtoupper(pathinfo('files/materiales/'.$i.'/'.$mp, PATHINFO_EXTENSION));?></div>
                                  </div>
                                  <div class="flex flex-row justify-center">
                                    <button type="submit" class="w-10 text-center flex justify-center cursor-pointer" onclick="window.open('<?php echo base_url().'/files/materiales/'.$i.'/'.$mp;?>')" download>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16"> <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/> </svg>
                                    </button>
                                  </div>
                                </div>
                              </li>
                          <?php } }
                          ?>
                        </ul>
                      </div>
                      </div> 
                    <?php }?>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/container-->

    