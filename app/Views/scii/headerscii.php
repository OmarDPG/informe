<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Control Interno Institucional</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/icon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/output.css"> <!--Replace with your tailwind.css once created-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/informe.css">
    <script src="https://kit.fontawesome.com/b2b67f6bfe.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.13/lottie.min.js"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>/assets/js/informe.js"></script> -->


</head>
<style>
    ::-webkit-scrollbar {
        width: 15px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #047857;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #047857;
    }
</style>

<body class="select-none font-sans leading-normal tracking-normal flex flex-col min-h-screen">

    <nav id="header" class="shadow-lg bg-[#EBE7E0] fixed w-full z-10 top-0 shadow ">
        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
            <div class="w-1/2 pl-2 md:pl-0 mb-3">
                <a class="text-gray-900 flex place-items-center text-base xl:text-xl no-underline hover:no-underline font-bold" href="<?php echo base_url(); ?>/scii/inicio/">
                    <img src="<?php echo base_url(); ?>/assets/icon.png" class="w-10 h-50 mr-1" alt="icon"> Sistema de Control Interno Institucional
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">
                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <i class="fa-solid fa-lg fa-user text-emerald-700 pr-3"></i></i><span class="hidden md:inline-block">Hola, <?php echo $nombre_s; ?></span>
                            <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="<?php echo base_url(); ?>/scii/usuario" class="px-4 py-2 block text-gray-900 hover:bg-emerald-900 hover:text-white no-underline hover:no-underline">Mi cuenta</a></li>
                                <?php if ($session->adm == 1) { ?><li><a href="<?php echo base_url(); ?>/administrador/inicio" class="px-4 py-2 block text-gray-900 hover:bg-emerald-900 hover:text-white no-underline hover:no-underline">Vista de administrador</a></li><?php } ?>

                                <!-- <li><a href="<?php echo base_url(); ?>/scii/notUsuario" class="px-4 py-2 block text-gray-900 hover:bg-emerald-900 hover:text-white no-underline hover:no-underline">Notificaciones</a></li> -->

                                <li>
                                    <hr class="border-t mx-2 border-emerald-900 hover:text-white">
                                </li>
                                <li><a href="<?php echo base_url(); ?>/inicio/logout" class="px-4 py-2 block text-gray-900 hover:bg-emerald-900 hover:text-white no-underline hover:no-underline">Salir</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-700 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Inicio</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 z-20" id="nav-content">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="my-2 md:my-0 bg-[#e1dbd1] mr-1 rounded-t-lg">
                        <a href="<?php echo base_url(); ?>/scii/inicio/" class="block py-1 md:py-3 pl-1 align-middle text-gray-700 no-underline hover:text-emerald-900 border-b-2 <?php echo ($current == "Inicio") ? 'border-emerald-900 bg-emerald-900 rounded-t-lg border-gray-500' : 'border-emerald-900'; ?> hover:border-emerald-500">
                            <i class="fas ml-3 fa-home fa-fw mr-3 <?php echo ($current == "Inicio") ? 'text-white' : ''; ?>"></i><span class="pb-1 md:pb-0 text-sm mr-3 <?php echo ($current == "Inicio") ? 'text-white' : ''; ?>">Inicio</span>
                        </a>
                    </li>
                    <li class="my-2 md:my-0 bg-[#e1dbd1] mr-1 rounded-t-lg">
                        <a href="<?php echo base_url(); ?>/scii/normatividad/" class="block py-1 md:py-3 pl-1 align-middle text-gray-700 no-underline hover:text-emerald-900 border-b-2 <?php echo ($current == "Normatividad") ? 'border-emerald-900  bg-emerald-900  rounded-t-lg border-gray-500' : 'border-emerald-900'; ?> hover:border-emerald-500">
                            <i class="fas ml-3 fa-gavel fa-fw mr-3 <?php echo ($current == "Normatividad") ? 'text-white' : ''; ?>"></i><span class="pb-1 md:pb-0 text-sm mr-3 <?php echo ($current == "Normatividad") ? 'text-white' : ''; ?>">Normatividad</span>
                        </a>
                    </li>
                    <li class="my-2 md:my-0 bg-[#e1dbd1] mr-1 rounded-t-lg">
                        <a href="<?php echo base_url(); ?>/scii/cronograma/" class="block py-1 md:py-3 pl-1 align-middle text-gray-700 no-underline hover:text-emerald-900 border-b-2 <?php echo ($current == "Cronograma") ? 'border-emerald-900  bg-emerald-900  rounded-t-lg border-gray-500' : 'border-emerald-900'; ?> hover:border-emerald-500">
                            <i class="fas ml-3 fa-clock fa-fw mr-3 <?php echo ($current == "Cronograma") ? 'text-white' : ''; ?>"></i><span class="pb-1 md:pb-0 text-sm mr-3 <?php echo ($current == "Cronograma") ? 'text-white' : ''; ?>">Cronograma</span>
                        </a>
                    </li>
                    <li class="my-2 md:my-0 bg-[#e1dbd1] mr-1 rounded-t-lg">
                        <a href="<?php echo base_url(); ?>/scii/herramientas/" class="block py-1 md:py-3 pl-1 align-middle text-gray-700 no-underline hover:text-emerald-900 border-b-2 <?php echo ($current == "Herramientas") ? 'border-emerald-900 bg-emerald-900 rounded-t-lg border-gray-500' : 'border-emerald-900'; ?> hover:border-emerald-500">
                            <i class="fas ml-3 fa-solid fa-gears fa-fw mr-3 <?php echo ($current == "Herramientas") ? 'text-white' : ''; ?>"></i><span class="pb-1 md:pb-0 text-sm mr-3 <?php echo ($current == "Herramientas") ? 'text-white' : ''; ?>">Herramientas del SCII</span>
                        </a>
                    </li>
                    <li class="my-2 md:my-0 bg-[#e1dbd1] mr-1 rounded-t-lg">
                        <a href="<?php echo base_url(); ?>/scii/material/" class="block py-1 md:py-3 pl-1 align-middle text-gray-700 no-underline hover:text-emerald-900 border-b-2 <?php echo ($current == "Material") ? 'border-emerald-900 bg-emerald-900 rounded-t-lg border-gray-500' : 'border-emerald-900'; ?> hover:border-emerald-500">
                            <i class="fas ml-3 fa-solid fa-magnifying-glass fa-fw mr-3 <?php echo ($current == "Material") ? 'text-white' : ''; ?>"></i><span class="pb-1 md:pb-0 text-sm mr-3 <?php echo ($current == "Material") ? 'text-white' : ''; ?>">Material de Consulta</span>
                        </a>
                    </li>
                    <?php if ($session->admGen == 1) { ?><li class="my-2 md:my-0 bg-[#e1dbd1] mr-1 rounded-t-lg">
                            <a href="<?php echo base_url(); ?>/scii/cumplimiento/" class="block py-1 md:py-3 pl-1 align-middle text-gray-700 no-underline hover:text-emerald-900 border-b-2 <?php echo ($current == "Cumplimiento") ? 'border-emerald-900 bg-emerald-900 rounded-t-lg border-gray-500' : 'border-emerald-900'; ?> hover:border-emerald-500">
                                <i class="fas ml-3 fa-solid fa-chart-pie fa-fw mr-3 <?php echo ($current == "Cumplimiento") ? 'text-white' : ''; ?>"></i><span class="pb-1 md:pb-0 text-sm mr-3 <?php echo ($current == "Cumplimiento") ? 'text-white' : ''; ?>">Cumplimiento Institucional</span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($datos['evaluacion'] == 1) { ?><li class="my-2 md:my-0 bg-[#e1dbd1] mr-1 rounded-t-lg">
                            <a href="<?php echo base_url(); ?>/scii/nuevaEvaluacion/" class="block py-1 md:py-3 pl-1 align-middle text-gray-700 no-underline hover:text-emerald-900 border-b-2 <?php echo ($current == "Evaluacion") ? 'border-emerald-900 bg-emerald-900 rounded-t-lg border-gray-500' : 'border-emerald-900'; ?> hover:border-emerald-500">
                                <i class="fas ml-3 fa-solid fa-list fa-fw mr-3 <?php echo ($current == "Evaluacion") ? 'text-white' : ''; ?>"></i><span class="pb-1 md:pb-0 text-sm mr-3 <?php echo ($current == "Evaluacion") ? 'text-white' : ''; ?>">Evaluacion al desempeño</span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($datos['ver_evaluacion'] == 1) { ?><li class="my-2 md:my-0 bg-[#e1dbd1] mr-1 rounded-t-lg">
                            <a href="<?php echo base_url(); ?>/scii/verEvaluacion/" class="block py-1 md:py-3 pl-1 align-middle text-gray-700 no-underline hover:text-emerald-900 border-b-2 <?php echo ($current == "Evaluaciones") ? 'border-emerald-900 bg-emerald-900 rounded-t-lg border-gray-500' : 'border-emerald-900'; ?> hover:border-emerald-500">
                                <i class="fas ml-3 fa-solid fa-list fa-fw mr-3 <?php echo ($current == "Evaluaciones") ? 'text-white' : ''; ?>"></i><span class="pb-1 md:pb-0 text-sm mr-3 <?php echo ($current == "Evaluaciones") ? 'text-white' : ''; ?>">Evaluaciones</span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($datos['informe'] == 1) { ?><li class="my-2 md:my-0 bg-[#e1dbd1] mr-1 rounded-t-lg">
                            <a href="<?php echo base_url(); ?>/scii/informe/" class="block py-1 md:py-3 pl-1 align-middle text-gray-700 no-underline hover:text-emerald-900 border-b-2 <?php echo ($current == "Informe") ? 'border-emerald-900 bg-emerald-900 rounded-t-lg border-gray-500' : 'border-emerald-900'; ?> hover:border-emerald-500">
                                <i class="fas ml-3 fa-solid fa-list fa-fw mr-3 <?php echo ($current == "Informe") ? 'text-white' : ''; ?>"></i><span class="pb-1 md:pb-0 text-sm mr-3 <?php echo ($current == "Informe") ? 'text-white' : ''; ?>">Informe de GOBIERNO <?php echo date('Y'); ?></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($datos['glosa'] == 1) { ?><li class="my-2 md:my-0 bg-[#e1dbd1] mr-1 rounded-t-lg">
                            <a href="<?php echo base_url(); ?>/scii/glosa/" class="block py-1 md:py-3 pl-1 align-middle text-gray-700 no-underline hover:text-emerald-900 border-b-2 <?php echo ($current == "Glosa") ? 'border-emerald-900 bg-emerald-900 rounded-t-lg border-gray-500' : 'border-emerald-900'; ?> hover:border-emerald-500">
                                <i class="fas ml-3 fa-solid fa-list fa-fw mr-3 <?php echo ($current == "Glosa") ? 'text-white' : ''; ?>"></i><span class="pb-1 md:pb-0 text-sm mr-3 <?php echo ($current == "Glosa") ? 'text-white' : ''; ?>">Glosa del Informe de Gobierno <?php echo date('Y'); ?> </span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav> -->