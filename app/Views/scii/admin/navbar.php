<nav class="bg-slate-200 flex justify-center items-center p-4">
  <ul class="flex space-x-4">
    <li>
      <div class="group flex relative">
        <a href="<?php echo base_url(); ?>/administrador/inicio" class="text-gray-700 hover:text-emerald-700" onclick="openModal('dashboard-modal')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
          </svg></a>
        <span class="group-hover:opacity-100 transition-opacity bg-gray-800 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 -translate-x-1/2  text-white opacity-0 m-4 mx-auto" style="transform: translateY(-3rem);">Inicio</span>
      </div>
    </li>
    <li>
      <div class="group flex relative">
        <a class="text-gray-700 hover:text-emerald-700" onclick="openModal('reports-modal')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
            <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z" />
          </svg></a>
        <span class="group-hover:opacity-100 transition-opacity bg-gray-800 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 -translate-x-1/2  text-white opacity-0 m-4 mx-auto" style="transform: translateY(-3rem);">Documentos</span>
      </div>
      <div id="reports-modal" class="hidden bg-transparent shadow-2xl fixed inset-0 flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-lg shadow-2xl w-3/4">
          <div class="flex p-4 border-b border-gray-400">
            <i class="fa-solid fa-gavel fa-2x"></i>
            <h1 class="pl-2 text-2xl">Manejo de archivos</h1>
            <button onclick="closeModal('reports-modal')" aria-label="Close" class="ml-auto focus:outline-none hover:bg-white px-2 py-0.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg></button>
          </div>
          <div class="flex-shrink flex-grow p-4">
            <a href="<?php echo base_url(); ?>/administrador/normatividad">
              <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                <span class="pr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                  </svg>
                </span>
                <span class="text-lg">Normatividad</span>
              </div>
            </a>
            <a href="<?php echo base_url(); ?>/administrador/herramientas">
              <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                <span class="pr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                  </svg>
                </span>
                <span class="text-lg">Herramientas del SCII</span>
              </div>
            </a>
            <a href="<?php echo base_url(); ?>/administrador/material">
              <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                <span class="pr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                  </svg>
                </span>
                <span class="text-lg">Material de Consulta</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="group flex relative">
        <a class="text-gray-700 hover:text-emerald-700" onclick="openModal('users-modal')">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
          </svg></a>
        <span class="group-hover:opacity-100 transition-opacity bg-gray-800 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 -translate-x-1/2  text-white opacity-0 m-4 mx-auto" style="transform: translateY(-3rem);">Usuarios</span>
      </div>
      <div id="users-modal" class="hidden bg-transparent shadow-2xl fixed inset-0 flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-lg shadow-2xl w-3/4">
          <div class="flex p-4 border-b border-gray-400">
            <span class="text-gray-700 hover:text-emerald-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
              </svg>
            </span>
            <h1 class="pl-2 text-2xl">Administración de usuarios</h1>
            <button onclick="closeModal('users-modal')" aria-label="Close" class="ml-auto focus:outline-none hover:bg-white px-2 py-0.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg></button>
          </div>
          <div class="flex-shrink flex-grow p-4">
            <a href="<?php echo base_url(); ?>/administrador/altaUsuario">
              <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                <span class="pr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                  </svg>
                </span>
                <span class="text-lg">Alta de usuario</span>
              </div>
            </a>
            <a href="<?php echo base_url(); ?>/administrador/usuarios">
              <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                <span class="pr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                  </svg>
                </span>
                <span class="text-lg">Gestión de usuarios</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="group flex relative">
        <a class="text-gray-700 hover:text-emerald-700" onclick="openModal('usu-modal')">
          <svg class="hover:text-emerald-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" stroke="currentColor" viewBox="0 0 640 512">
            <path d="M336 0C362.5 0 384 21.49 384 48V367.8C345.8 389.2 320 430 320 476.9C320 489.8 323.6 501.8 329.9 512H240V432C240 405.5 218.5 384 192 384C165.5 384 144 405.5 144 432V512H48C21.49 512 0 490.5 0 464V48C0 21.49 21.49 0 48 0H336zM64 272C64 280.8 71.16 288 80 288H112C120.8 288 128 280.8 128 272V240C128 231.2 120.8 224 112 224H80C71.16 224 64 231.2 64 240V272zM176 224C167.2 224 160 231.2 160 240V272C160 280.8 167.2 288 176 288H208C216.8 288 224 280.8 224 272V240C224 231.2 216.8 224 208 224H176zM256 272C256 280.8 263.2 288 272 288H304C312.8 288 320 280.8 320 272V240C320 231.2 312.8 224 304 224H272C263.2 224 256 231.2 256 240V272zM80 96C71.16 96 64 103.2 64 112V144C64 152.8 71.16 160 80 160H112C120.8 160 128 152.8 128 144V112C128 103.2 120.8 96 112 96H80zM160 144C160 152.8 167.2 160 176 160H208C216.8 160 224 152.8 224 144V112C224 103.2 216.8 96 208 96H176C167.2 96 160 103.2 160 112V144zM272 96C263.2 96 256 103.2 256 112V144C256 152.8 263.2 160 272 160H304C312.8 160 320 152.8 320 144V112C320 103.2 312.8 96 304 96H272zM576 272C576 316.2 540.2 352 496 352C451.8 352 416 316.2 416 272C416 227.8 451.8 192 496 192C540.2 192 576 227.8 576 272zM352 477.1C352 425.7 393.7 384 445.1 384H546.9C598.3 384 640 425.7 640 477.1C640 496.4 624.4 512 605.1 512H386.9C367.6 512 352 496.4 352 477.1V477.1z"></path>
          </svg>
        </a>
        <span class="group-hover:opacity-100 transition-opacity bg-gray-800 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 -translate-x-1/2  text-white opacity-0 m-4 mx-auto" style="transform: translateY(-3rem);">Áreas</span>
      </div>
      <div id="usu-modal" class="hidden bg-transparent shadow-2xl fixed inset-0 flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-lg shadow-2xl w-3/4">
          <div class="flex p-4 border-b border-gray-400">
            <span class="text-gray-700 hover:text-emerald-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
              </svg>
            </span>
            <h1 class="pl-2 text-2xl">Gestión de áreas</h1>
            <button onclick="closeModal('usu-modal')" aria-label="Close" class="ml-auto focus:outline-none hover:bg-white px-2 py-0.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg></button>
          </div>
          <div class="flex-shrink flex-grow p-4">
            <a href="<?php echo base_url(); ?>/administrador/altaUnidad">
              <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                <span class="pr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                  </svg>
                </span>
                <span class="text-lg">Alta de Unidades</span>
              </div>
            </a>
            <a href="<?php echo base_url(); ?>/administrador/unidades">
              <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                <span class="pr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                  </svg>
                </span>
                <span class="text-lg">Gestión de unidades</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="group flex relative">
        <a class="text-gray-700 hover:text-emerald-700" onclick="openModal('eval-modal')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
          </svg></a>
        <span class="group-hover:opacity-100 transition-opacity bg-gray-800 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 -translate-x-1/2  text-white opacity-0 m-4 mx-auto" style="transform: translateY(-3rem);">Evaluación</span>
      </div>
      <div id="eval-modal" class="hidden bg-transparent shadow-2xl fixed inset-0 flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-lg shadow-2xl w-3/4">
          <div class="flex p-4 border-b border-gray-400">
            <span class="text-gray-700 hover:text-emerald-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
              </svg>
            </span>
            <h1 class="pl-2 text-2xl">Evaluación de áreas</h1>
            <button onclick="closeModal('eval-modal')" aria-label="Close" class="ml-auto focus:outline-none hover:bg-white px-2 py-0.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg></button>
          </div>
          <div class="flex-shrink flex-grow p-4">
            <!-- <a href="<?php echo base_url(); ?>/administrador/altaPeriodo">
                <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                  <span class="pr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                    </svg>
                  </span>
                  <span class="text-lg">Nuevo periodo de carga</span>
                </div>
              </a>
              <a href="<?php echo base_url(); ?>/administrador/periodos">
                <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                  <span class="pr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                    </svg>
                  </span>
                  <span class="text-lg">Gestión de periodos</span>
                </div>
              </a> -->
            <a href="<?php echo base_url(); ?>/administrador/altaEvidencia">
              <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                <span class="pr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                  </svg>
                </span>
                <span class="text-lg">Registro de nueva evidencia</span>
              </div>
            </a>
            <a href="<?php echo base_url(); ?>/administrador/evidencias">
              <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                <span class="pr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                  </svg>
                </span>
                <span class="text-lg">Gestión y evaluación evidencias</span>
              </div>
            </a>
            <a href="<?php echo base_url(); ?>/administrador/evaluacion">
              <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                <span class="pr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                  </svg>
                </span>
                <span class="text-lg">Evaluacion al desempeño</span>
              </div>
            </a>
            <a href="<?php echo base_url(); ?>/administrador/informe">
              <div class="flex text-xs font-medium text-gray-800 mb-3 pl-1 py-2 lg:hover:bg-blue-gray-light">
                <span class="pr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                  </svg>
                </span>
                <span class="text-lg">Informe de Gobierno y Glosa</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="flex-shrink-0 flex border-slate-500 px-4 left-14 fixed group relative">
        <a href="#" class="flex-shrink-0 group block ">
          <div class="flex items-center">
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
              <div x-show="open" x-transition:enter="transition ease-out duration-100 rigth-32" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="bottom-0 origin-top-right absolute right-0 mt-2 -mr-1 w-48 rounded-md shadow-lg">
                <div class="py-1 rounded-md bg-white shadow-xs relative fixed">
                  <a class="block border-b-4 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150"><?php echo $usuario; ?></a>
                  <a href="<?php echo base_url(); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150">Vista de usuario</a>
                  <a href="<?php echo base_url(); ?>/inicio/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150">Cerrar sesión</a>
                </div>
              </div>
              <div>
                <button @click="open = !open" class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid transition ease-in-out duration-150">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather text-black feather-settings">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </a>
      </div>
    </li>
    <!-- Add more navbar items here -->
  </ul>


</nav>

<script>
  function openModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.classList.remove('hidden');
  }

  function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.classList.add('hidden');
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>