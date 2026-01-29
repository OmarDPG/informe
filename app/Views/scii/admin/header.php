<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - SCII</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/icon.png" />
    <script src="https://kit.fontawesome.com/b2b67f6bfe.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/output.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery.dataTables.min.css">
    <script src="<?php echo base_url(); ?>/assets/js/carga.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>


    <!-- datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <style>
        body {
            background-image: url("<?php echo base_url() . '/originales/' . rand(1, 192) . '.jpg' ?>");
            background-color: #cccccc;
            /* Used if the image is unavailable */
            height: 500px;
            /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */
        }

        tr:hover {
            background-color: #EFEFEF !important;
        }

        table.dataTable tbody tr.selected {
            color: white;
            background-color: #EFEFEF;
            /* Not working */
        }

        ::-webkit-scrollbar {
            width: 20px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: green;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: green;
        }

        .limited-cell {
            max-width: 300px; /* Ajusta el ancho máximo según tus necesidades */
            white-space: nowrap; /* Evita saltos de línea */
            overflow: hidden; /* Oculta el texto que sobrepasa el ancho */
            text-overflow: ellipsis; /* Muestra los puntos suspensivos (...) si el texto es muy largo */
        }
    </style>
</head>

<body class="flex flex-col h-screen">
    <!-- Main Content -->
    <header class="flex text-white text-bold py-5 z-40 w-full">

    </header>