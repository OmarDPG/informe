<?php

namespace App\Controllers;

use App\Libraries\DataTable;
use CodeIgniter\Files\File;
use App\Models\UsuariosModel;
use App\Models\EvaluacionesModel;
use App\Models\PartesModel;
use App\Models\PreguntasModel;
use App\Models\RespuestasModel;
use App\Models\PeriodosModel;
use App\Models\CategoriasModel;
use App\Models\UnidadesModel;
use App\Models\CargasModel;
use App\Models\InformeModel;
use App\Models\GlosaModel;
use App\Models\PeriodosAnualesModel;
use App\Models\EtapasModel;

use App\Models\EjesModel;
use App\Models\EstrategiasModel;
use App\Models\LineasAccionModel;
use App\Models\ObjetivosModel;
use App\Models\TematicasModel;

use App\Models\ProgramaSectorialAguaModel;
use App\Models\EjesAguaModel;
use App\Models\EstrategiasAguaModel;
use App\Models\LineasAccionAguaModel;
use App\Models\ObjetivosAguaModel;
use App\Models\TematicasAguaModel;

use App\Models\ProgramaSectorialSocioambientalModel;
use App\Models\EjesSocioambientalModel;
use App\Models\EstrategiasSocioambientalModel;
use App\Models\LineasAccionSocioambientalModel;
use App\Models\ObjetivosSocioambientalModel;
use App\Models\TematicasSocioambientalModel;

use App\Models\OdsMetasModel;
use App\Models\OdsObjetivosModel;
use App\Models\OdsTemasModel;





class Scii extends BaseController
{
    protected $usuarios, $logs, $session, $reglasUsuarioEdi, $cargas, 
                $informe, $unidades, $evaluaciones, $partes, $preguntas, 
                $respuestas, $categorias, $periodo, $glosa, $periodosAnuales, $etapas, 
                $ejes, $estrategias, $lineasAccion, $objetivos, $tematicas,
                $programaSectorialSocioambiental, $ejesSocioambiental, $estrategiasSocioambiental, $lineasAccionSocioambiental, $objetivosSocioambiental, $tematicasSocioambiental,
                $programaSectorialAgua, $ejesAgua, $estrategiasAgua, $lineasAccionAgua, $objetivosAgua, $tematicasAgua,
                $odsMetas, $odsObjetivos, $odsTemas;
    public function __construct()
    {
        $this->usuarios = new UsuariosModel();
        $this->unidades = new UnidadesModel();
        $this->cargas = new CargasModel();
        $this->evaluaciones = new EvaluacionesModel();
        $this->partes = new PartesModel();
        $this->preguntas = new PreguntasModel();
        $this->respuestas = new RespuestasModel();
        $this->categorias = new CategoriasModel();
        $this->periodo = new PeriodosModel();
        $this->informe = new InformeModel();
        $this->glosa = new GlosaModel();
        $this->periodosAnuales = new PeriodosAnualesModel();
        $this->etapas = new EtapasModel();
        $this->ejes = new EjesModel();
        $this->estrategias = new EstrategiasModel();
        $this->lineasAccion = new LineasAccionModel();
        $this->objetivos = new ObjetivosModel();
        $this->tematicas = new TematicasModel();
        $this->ejesAgua = new EjesAguaModel();
        $this->estrategiasAgua = new EstrategiasAguaModel();
        $this->lineasAccionAgua = new LineasAccionAguaModel();
        $this->objetivosAgua = new ObjetivosAguaModel();
        $this->tematicasAgua = new TematicasAguaModel();
        $this->programaSectorialAgua = new ProgramaSectorialAguaModel();
        $this->ejesSocioambiental = new EjesSocioambientalModel();
        $this->estrategiasSocioambiental = new EstrategiasSocioambientalModel();
        $this->lineasAccionSocioambiental = new LineasAccionSocioambientalModel();
        $this->objetivosSocioambiental = new ObjetivosSocioambientalModel();
        $this->tematicasSocioambiental = new TematicasSocioambientalModel();
        $this->programaSectorialSocioambiental = new ProgramaSectorialSocioambientalModel();
        $this->odsMetas = new OdsMetasModel();
        $this->odsObjetivos = new OdsObjetivosModel();
        $this->odsTemas = new OdsTemasModel();


        helper(['form']);
        helper('filesystem');
        $this->session = session();
        $this->reglasUsuarioEdi = [
            'nombre_s' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo nombre(s) es obligatorio.'
                ]
            ],
            'apellido_p' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo apellido paterno es obligatorio.'
                ]
            ],
            'apellido_m' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo apellido materno es obligatorio.'
                ]
            ]
        ];
    }
    public function inicio()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $id_usuario = $this->session->id_usuario;
        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $current = 'Inicio';
        $datos = ['nombre_s' => $this->session->nombre_s, 'current' => $current, 'datos' => $datos];
        echo view('scii/headerscii', $datos);
        echo view('scii/inicioscii');
        echo view('scii/footerscii');
    }
    public function normatividad()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $id_usuario = $this->session->id_usuario;
        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $current = "Normatividad";
        $dir = 'files/normatividad/';
        $map = directory_map($dir);
        $datos = ['nombre_s' => $this->session->nombre_s, 'current' => $current, 'map' => $map, 'datos' => $datos];
        echo view('scii/headerscii', $datos);
        echo view('scii/normatividad');
        echo view('scii/footerscii');
    }
    public function cronograma()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $id_usuario = $this->session->id_usuario;
        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $current = "Cronograma";
        $datos = ['nombre_s' => $this->session->nombre_s, 'current' => $current, 'datos' => $datos];
        echo view('scii/headerscii', $datos);
        echo view('scii/cronograma');
        echo view('scii/footerscii');
    }
    public function herramientas()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $id_usuario = $this->session->id_usuario;
        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $current = "Herramientas";
        $datos = ['nombre_s' => $this->session->nombre_s, 'current' => $current, 'datos' => $datos];
        echo view('scii/headerscii', $datos);
        echo view('scii/herramientas');
        echo view('scii/footerscii');
    }
    public function material()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $id_usuario = $this->session->id_usuario;
        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $current = "Material";
        $datos = ['nombre_s' => $this->session->nombre_s, 'current' => $current, 'datos' => $datos];
        echo view('scii/headerscii', $datos);
        echo view('scii/material');
        echo view('scii/footerscii');
    }
    public function cumplimiento($id = null)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->admGen) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $id_usuario = $this->session->id_usuario;
        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $current = "Cumplimiento";
        if ($id == null) {
            $cargasPTCI = $this->cargas->where(['id_unidad' => $this->session->id_unidad, 'activo' => 1, 't_carga' => 0])->find();
            $cargasPTAR = $this->cargas->where(['id_unidad' => $this->session->id_unidad, 'activo' => 1, 't_carga' => 1])->find();
            $cargasCE = $this->cargas->where(['id_unidad' => $this->session->id_unidad, 'activo' => 1, 't_carga' => 2])->find();
            $datos = ['nombre_s' => $this->session->nombre_s, 'current' => $current, 'cargasPTCI' => $cargasPTCI, 'cargasPTAR' => $cargasPTAR, 'cargasCE' => $cargasCE, 'datos' => $datos];
            echo view('scii/headerscii', $datos);
            echo view('scii/cumplimiento');
            echo view('scii/footerscii');
        } else {
            $cargas = $this->cargas->where(['id_carga' => $id])->first();
            if ($cargas['id_unidad'] == $this->session->id_unidad) {
                $dir = 'files/cumplimiento/' . $id . '/';
                $map = directory_map($dir);
                $datos = ['nombre_s' => $this->session->nombre_s, 'current' => $current, 'cargas' => $cargas, 'map' => $map, 'datos' => $datos];
                echo view('scii/headerscii', $datos);
                echo view('scii/cumplimientoDetalle');
                echo view('scii/footerscii');
            } else {
                return redirect()->to(base_url() . '/scii/cumplimiento');
            }
        }
    }
    public function usuario()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $current = "Datos de usuario";
        $unidades = $this->unidades->where('activo', 1)->find();
        $id_usuario = $this->session->id_usuario;
        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();

        $datos = ['nombre_s' => $this->session->nombre_s, 'unidades' => $unidades, 'current' => $current, 'session' => $this->session, 'datos' => $datos];
        echo view('scii/headerscii', $datos);
        echo view('scii/usuario');
        echo view('scii/footerscii');
    }
    public function actualizarUsuario()
    {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ($this->request->getMethod() == "post" && $this->validate($this->reglasUsuarioEdi)) {
            $hash = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
            print_r($this->session->id_usuario);
            if ($this->usuarios->update($this->session->id_usuario, [
                'nombre_s' => test_input($this->request->getPost('nombre_s')),
                'apellido_p' => test_input($this->request->getPost('apellido_p')),
                'apellido_m' => test_input($this->request->getPost('apellido_m')),
            ]))
                if ($this->request->getPost('password')) {
                    $this->usuarios->update($this->session->id_usuario, [
                        'password' => $hash,
                    ]);
                }
            $datosusuario = $this->usuarios->where('id_usuario', $this->session->id_usuario)->first();
            $datosSesion = [
                'usuario' => $datosusuario['usuario'],
                'id_usuario' => $datosusuario['id_usuario'],
                'id_unidad' => $datosusuario['id_unidad'],
                'nombre_s' => $datosusuario['nombre_s'],
                'apellido_p' => $datosusuario['apellido_p'],
                'apellido_m' => $datosusuario['apellido_m'],
                'admGen' => $datosusuario['admGen'],
                'adm' => $datosusuario['adm'],
            ];
            $session = session();
            $session->set($datosSesion);

            return redirect()->to(base_url() . '/scii/usuario');
        } else {
            $current = "Datos de usuario";
            $unidades = $this->unidades->where('activo', 1)->find();
            $datos = ['nombre_s' => $this->session->nombre_s, 'unidades' => $unidades, 'errors' => $this->validator, 'current' => $current, 'session' => $this->session];
            echo view('scii/headerscii', $datos);
            echo view('scii/usuario');
            echo view('scii/footerscii');
        }
    }
    public function getPTCI()
    {
        $dataTable = new DataTable();
        $where = "id_unidad=" . $this->session->id_unidad . " and activo=1 and t_carga=0";
        // process($modelClass, $columns, $where = [])
        $response = $dataTable->process('CargasModel', [
            [
                'name' => 'accion_factor',
                'formatter' => 'accion_link'
            ],
            [
                'name' => 'medio_verificacion',
            ],
            [
                'name' => 'estado',
                'formatter' => 'status'
            ],
            [
                'name' => 'id_carga'
            ],
        ], $where);
        /* return $this->setResponseFormat('json')->respond($response); */
        return json_encode($response);
    }
    public function getPTAR()
    {
        $dataTable = new DataTable();
        $where = "id_unidad=" . $this->session->id_unidad . " and activo=1 and t_carga=1";
        // process($modelClass, $columns, $where = [])
        $response = $dataTable->process('CargasModel', [
            [
                'name' => 'accion_factor',
                'formatter' => 'accion_link'
            ],
            [
                'name' => 'descripcion'
            ],
            [
                'name' => 'medio_verificacion',
            ],
            [
                'name' => 'estado',
                'formatter' => 'status'
            ],
            [
                'name' => 'id_carga',
                'formatter' => 'opcionesCarga'
            ],
        ], $where);
        /* return $this->setResponseFormat('json')->respond($response); */
        return json_encode($response);
    }
    public function getCE()
    {
        $dataTable = new DataTable();
        $where = "id_unidad=" . $this->session->id_unidad . " and activo=1 and t_carga=2";
        // process($modelClass, $columns, $where = [])
        $response = $dataTable->process('CargasModel', [
            [
                'name' => 'accion_factor',
                'formatter' => 'accion_link'
            ],
            [
                'name' => 'medio_verificacion'
            ],
            [
                'name' => 'estado',
                'formatter' => 'status'
            ],
            [
                'name' => 'id_carga',
                'formatter' => 'opcionesCarga'
            ],
        ], $where);
        /* return $this->setResponseFormat('json')->respond($response); */
        return json_encode($response);
    }
    public function upload($i)
    {
        $validationRule = [
            'userfile' => [
                'label' => 'File',
                'rules' => [
                    'ext_in[userfile,pdf,doc,docx,xls,xlsx]',
                    'mime_in[userfile,application/pdf,application/msword,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet]',
                ],
            ],
        ];
        $error = '';

        $img = $this->request->getFile('userfile');
        if (!$this->validate($validationRule)) {
            $res['error'] = $this->validator->getErrors();
            return json_encode($res);
        }
        if (!$img->hasMoved()) {
            //$filepath = WRITEPATH . 'uploads/' . $img->store();
            $filepath = base_url() . 'uploads/' . $img->store('../../public/files/cumplimiento/' . $i . '/', $img->getName());
            $data = ['uploaded_fileinfo' => new File($filepath)];
            $files = glob('files/cumplimiento/' . $i . '/*'); // get all file names
            foreach ($files as $file) { // iterate files
                if (is_file($file) && pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                    unlink($file); // delete file
                }
            }
            //return redirect()->to(base_url().'/administrador/normatividad');

            $res['datos'] = $this->cargaDocs($i);
            $res['error'] = $error;
            return json_encode($res);
        }

        $res['error'] = 'Documento movido';
        return json_encode($res);
    }
    public function cargaDocs($id)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $dir = 'files/cumplimiento/' . $id . '/';
        $map = directory_map($dir);
        $fila = '';
        $i = 1;
        foreach ($map as $mp) {
            $fila .= '<tr>';
            $fila .= '<td class="px-2" data-tooltip-target="tooltip-default' . $i . '">';
            $fila .= '<div id="tooltip-default' . $i . '" role="tooltip" class="break-all absolute z-50 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity w-auto duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">';
            $fila .= $mp;
            $fila .= '<div class="tooltip-arrow" data-popper-arrow></div>';
            $fila .= '</div>';
            $fila .= substr($mp, 0, 30);
            $i++;
            $fila .= '</td>';
            $fila .= '<td class="items-center inline-flex	gap-x-6">';
            $fila .= "<button target='_blank' onclick='fileDelete(" . '"' . $mp . '"' . ")' class=2text-gray-500 transition-colors duration-200 hover:text-red-500 focus:outline-none'>";
            $fila .= '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>';
            $fila .= '</svg>';
            $fila .= '</button>';
            $fila .= '<a href="' . base_url() . '/files/cumplimiento/' . $id . '/' . $mp . '" download class="text-gray-500 transition-colors duration-200 hover:text-emerald-500 focus:outline-none">';
            $fila .= '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16"> <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/> </svg>';
            $fila .= '</a>';
            $fila .= '</td>';
            $fila .= '</tr>';
        }
        return $fila;
    }
    public function delCumplimiento($id, $file)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $carga = $this->cargas->where('id_carga', $id)->first();
        $error = '';
        if ($carga['id_unidad'] != $this->session->id_unidad) {
            $res['error'] = 'No tiene permisos para eliminar este elemento';
        } else {
            if (file_exists('files/cumplimiento/' . $id . '/' . $file)) {
                unlink('files/cumplimiento/' . $id . '/' . $file);
                $res['datos'] = $this->cargaDocs($id);
                $res['error'] = $error;
                return json_encode($res);
            } else {
                $res['error'] = 'No se encontró el archivo';
                return json_encode($res);
            }
        }
    }
    public function saveState()
    {
        $errors = [];
        $data = [];
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if (empty($_POST['id'])) {
            $errors['id'] = 'id is required.';
        } else {
            $id = $_POST['id'];
            $carga = $this->cargas->where('id_carga', $id)->first();
            if ($carga['id_unidad'] != $this->session->id_unidad) {
                $errors['permisos'] = 'No tiene permisos para editar este elemento';
            } else {
                if (!empty($_POST['justificacion'])) {
                    $this->cargas->update($id, [
                        'estado' => 1,
                        'justificacion' => $_POST['justificacion']
                    ]);
                } else {
                    $this->cargas->update($id, [
                        'estado' => 1,
                    ]);
                }
            }
        }
        if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
            $data['success'] = true;
            $data['message'] = 'Success!';
        }
        echo json_encode($data);
    }

    public function nuevaEvaluacion()
    {
        $usuarioId = session()->get('id_usuario');
        $idUnidad = session()->get('id_unidad');

        if (!$usuarioId) {
            return redirect()->to('/login');
        }
        $lastPeriodo = $this->periodo->select('id_periodo, nombre_periodo')
            ->orderBy('id_periodo', 'DESC')
            ->first();
        $ultimoPeriodoId = $lastPeriodo['id_periodo'];
        $nombrePeriodo = $lastPeriodo['nombre_periodo'];
        $evaluaciones = new EvaluacionesModel();
        $exists = $evaluaciones->where('id_usuario', $usuarioId)
            ->where('id_periodo', $ultimoPeriodoId)
            ->first();

        if ($exists) {
            $evaluacionId = $exists['id_evaluacion'];
            return redirect()->to("/scii/evaluacion/$evaluacionId");
        }
        $data = [
            'nombre' => $nombrePeriodo,
            'descripcion' => $nombrePeriodo,
            'id_usuario' => $usuarioId,
            'id_periodo' => $ultimoPeriodoId,
            'id_unidad' => $idUnidad
        ];
        $evaluaciones->insert($data);
        $evaluacionId = $evaluaciones->insertID();

        return redirect()->to("/scii/evaluacion/$evaluacionId");
    }

    public function evaluacion($id)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $id_usuario = $this->session->id_usuario;

        // VERIFICAR SI YA REALIZÓ LA EVALUACIÓN 
        $respuestaExistente = $this->respuestas
            ->where('id_evaluacion', $id)
            ->where('id_usuario', $id_usuario)
            ->first();

        if ($respuestaExistente) {
            // Ya completó esta evaluación, redirigir
            return redirect()->to('scii/finEvaluacion')
                ->with('message', 'Ya has completado esta evaluación');
        }

        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $id_unidad = $datos['id_unidad'];
        $nombreCompleto = $datos['nombre_s'] . ' ' . $datos['apellido_p'] . ' ' . $datos['apellido_m'];
        $idCategoria = $datos['id_categoria'];
        $categoria = $this->categorias->where('id_categoria', $idCategoria)->first();
        $nombreCategoria = $categoria['nombre_categoria'];
        $unidad = $this->unidades->where('id_unidad', $id_unidad)->first();
        $nombreUnidad = $unidad['descripcion'];
        $evaluacion = $this->evaluaciones->where('id_evaluacion', $id)->first();
        $nombreEvaluacion = $evaluacion['nombre'];
        $idPeriodo = $evaluacion['id_periodo'];
        $current = 'Evaluacion';
        $datos = [
            'nombre_s' => $this->session->nombre_s,
            'current' => $current,
            'datos' => $datos,
            'nombreUnidad' => $nombreUnidad,
            'nombreCategoria' => $nombreCategoria,
            'nombreCompleto' => $nombreCompleto,
            'id_usuario' => $id_usuario,
            'nombreEvaluacion' => $nombreEvaluacion,
            'idEvaluacion' => $id,
            'idPeriodo' => $idPeriodo,
            'id_unidad' => $id_unidad,
            'datos1' => [
                'id_evaluacion' => $id
            ]
        ];
        echo view('scii/headerscii', $datos);
        echo view('scii/evaluacion');
        echo view('scii/footerscii');
    }

    public function registrarRespuestas()
    {
        if ($this->request->getMethod() === 'post') {
            $formData = $this->request->getPost();

            // Obtener el id_evaluacion desde el formData
            $id_evaluacion = $formData['id_evaluacion'];


            // VERIFICAR DUPLICADOS
            $id_usuario = $formData['id_usuario'];

            // VERIFICAR SI YA EXISTE UNA RESPUESTA (doble protección)
            $respuestaExistente = $this->respuestas
                ->where('id_evaluacion', $id_evaluacion)
                ->where('id_usuario', $id_usuario)
                ->first();

            if ($respuestaExistente) {
                // Ya existe una respuesta, no permitir duplicados
                return redirect()->to('scii/finEvaluacion')
                    ->with('error', 'Esta evaluación ya fue enviada anteriormente');
            }
            // FIN VERIFICAR DUPLICADOS


            // Manejar múltiples archivos
            $uploadedFiles = $this->request->getFiles();

            $filePaths = [];

            // Ruta base pública de la aplicación
            $baseUrl = base_url('uploads');

            // Directorio de almacenamiento basado en id_evaluacion
            $evaluationUploadPath = ROOTPATH . 'public/uploads/' . $id_evaluacion . '/';

            // Crear el directorio si no existe
            if (!is_dir($evaluationUploadPath)) {
                mkdir($evaluationUploadPath, 0777, true);
            }

            // Procesar cada archivo individualmente y guardar las rutas en el array
            foreach ($uploadedFiles as $key => $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    // Generar un nombre único para el archivo
                    $newFileName = $file->getRandomName();

                    // Mover el archivo a la carpeta específica de id_evaluacion
                    $file->move($evaluationUploadPath, $newFileName);

                    // Guardar la ruta del archivo
                    $filePaths[$key] = $baseUrl . '/' . $id_evaluacion . '/' . $newFileName;
                }
            }

            // Asignar las rutas de los archivos a las columnas específicas en $formData
            $formData['ruta_evidencia_uno'] = isset($filePaths['ruta_evidencia_uno']) ? $filePaths['ruta_evidencia_uno'] : null;
            $formData['ruta_evidencia_dos'] = isset($filePaths['ruta_evidencia_dos']) ? $filePaths['ruta_evidencia_dos'] : null;
            $formData['ruta_evidencia_tres'] = isset($filePaths['ruta_evidencia_tres']) ? $filePaths['ruta_evidencia_tres'] : null;
            $formData['ruta_evidencia_cuatro'] = isset($filePaths['ruta_evidencia_cuatro']) ? $filePaths['ruta_evidencia_cuatro'] : null;
            $formData['ruta_evidencia_cinco'] = isset($filePaths['ruta_evidencia_cinco']) ? $filePaths['ruta_evidencia_cinco'] : null;
            $formData['ruta_evidencia_seis'] = isset($filePaths['ruta_evidencia_seis']) ? $filePaths['ruta_evidencia_seis'] : null;
            $formData['ruta_evidencia_siete'] = isset($filePaths['ruta_evidencia_siete']) ? $filePaths['ruta_evidencia_siete'] : null;
            $formData['ruta_evidencia_ocho'] = isset($filePaths['ruta_evidencia_ocho']) ? $filePaths['ruta_evidencia_ocho'] : null;

            // Guardar los datos en la base de datos
            $this->respuestas->save($formData);

            // $id_usuario = $this->session->id_usuario;
            //$usuario = $this->usuarios->where('id_usuario', $id_usuario)->first();
            //$this->usuarios->update($id_usuario, ['evaluacion' => 0, 'con_evaluador' => 1]);

            $this->usuarios
                ->where('id_usuario', $id_usuario)
                ->set(['evaluacion' => 0, 'con_evaluador' => 1])
                ->update();

            return redirect()->to('scii/finEvaluacion');
        }
        return view('evaluacion');
    }

    public function finEvaluacion()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $id_usuario = $this->session->id_usuario;
        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $current = 'Inicio';
        $datos = ['nombre_s' => $this->session->nombre_s, 'current' => $current, 'datos' => $datos];
        echo view('scii/headerscii', $datos);
        echo view('scii/finEvaluacion');
        echo view('scii/footerscii');
    }

    public function verEvaluacion($activo = 1)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $id_usuario = $this->session->id_usuario;
        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $id_unidad = $datos['id_unidad'];

        $lastPeriodo = $this->periodo->select('id_periodo, nombre_periodo')
            ->orderBy('id_periodo', 'DESC')
            ->first();
        $ultimoPeriodoId = $lastPeriodo['id_periodo'];
        $nombrePeriodo = $lastPeriodo['nombre_periodo'];

        $db = \Config\Database::connect();

        $builder = $db->table('usuarios');
        $builder->select('usuarios.*, usuarios.id_unidad AS numeroUnidad, respuestas.id_respuesta, respuestas.id_unidad, respuestas.id_periodo, respuestas.id_evaluacion, respuestas.fecha_respuesta, evaluaciones.id_usuario AS registro_realizado');
        $builder->join('evaluaciones', 'usuarios.id_usuario = evaluaciones.id_usuario AND evaluaciones.id_periodo = ' . $db->escape($ultimoPeriodoId), 'left');
        $builder->join('respuestas', 'usuarios.id_usuario = respuestas.id_usuario AND respuestas.id_periodo = ' . $db->escape($ultimoPeriodoId) . ' AND respuestas.id_unidad = ' . $db->escape($id_unidad), 'left');
        $builder->where('usuarios.id_categoria', $activo);
        $builder->where('usuarios.id_unidad', $id_unidad);
        $query = $builder->get();
        $result = $query->getResult();


        $current = 'Evaluaciones';
        $datos = [
            'nombre_s' => $this->session->nombre_s,
            'current' => $current,
            'datos' => $datos,
        ];
        $resultados = [
            'resultados' => $result
        ];
        echo view('scii/headerscii', $datos);
        echo view('scii/verEvaluacion', $resultados);
        echo view('scii/footerscii');
    }

    public function respuestas($id_respuesta)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $id_usuario = $this->session->id_usuario;
        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $id_unidad = $datos['id_unidad'];
        //Obtenemos las respuestas
        $respuestas = $this->respuestas->where('id_respuesta', $id_respuesta)->first();
        $id = $respuestas['id_evaluacion'];
        $idPeriodo = $respuestas['id_periodo'];
        //Obtnemos el id del usuario evaluado y sus datos
        $id_usuario = $respuestas['id_usuario'];
        $datosEvaluado = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $expediente = $datosEvaluado['usuario'];
        $nombreCompleto = $datosEvaluado['nombre_s'] . ' ' . $datosEvaluado['apellido_p'] . ' ' . $datosEvaluado['apellido_m'];
        $idCategoria = $datosEvaluado['id_categoria'];
        $categoria = $this->categorias->where('id_categoria', $idCategoria)->first();
        $nombreCategoria = $categoria['nombre_categoria'];
        $unidad = $this->unidades->where('id_unidad', $id_unidad)->first();
        $nombreUnidad = $unidad['descripcion'];
        $current = 'Evaluaciones';
        $datos = [
            'nombre_s' => $this->session->nombre_s,
            'current' => $current,
            'datos' => $datos,
            'nombreCompleto' => $nombreCompleto,
            'nombreCategoria' => $nombreCategoria,
            'nombreUnidad' => $nombreUnidad,
            'idEvaluacion' => $id,
            'idPeriodo' => $idPeriodo,
            'id_unidad' => $id_unidad,
            'expediente' => $expediente,
            'respuestas' => $respuestas
        ];
        echo view('scii/headerscii', $datos);
        echo view('scii/respuestas');
        echo view('scii/footerscii');
    }
    function getFileUrl($path)
    {
        return base_url('writable/uploads/' . basename($path));
    }

    public function registrarRespuestasEvaluador()
    {
        if ($this->request->getMethod() === 'post') {
            $formData = $this->request->getPost();
            // Verifica si id_respuesta está presente en el formData
            if (isset($formData['id_respuesta'])) {
                $id_respuesta = $formData['id_respuesta'];
                $id_usuario = $formData['id_usuario'];
                // Guardar los datos en la base de datos
                if ($this->respuestas->update($id_respuesta, $formData)) {
                    $usuarioData = [
                        'con_evaluador' => '2',  // Aquí especificas las columnas y valores que deseas actualizar
                    ];
                    // Usar el modelo de usuarios para actualizar el usuario correspondiente
                    if ($this->usuarios->update($id_usuario, $usuarioData)) {
                        // Redirige si ambas actualizaciones son exitosas
                        return redirect()->to('/Scii/verEvaluacion')->with('success', 'Respuestas y datos del usuario actualizados correctamente');
                    } else {
                        // Manejo de error si la actualización del usuario falla
                        return redirect()->back()->with('error', 'Error al actualizar los datos del usuario');
                    }
                } else {
                    // Manejo de error si la actualización falla
                    return redirect()->back()->with('error', 'Error al guardar las respuestas');
                }
            } else {
                // Manejo de error si falta el id_respuesta
                return redirect()->back()->with('error', 'ID de respuesta no encontrado');
            }
        }
        // Si no es una solicitud POST, muestra la vista de evaluación
        return view('evaluacion');
    }
    public function informe()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $usuario = $this->usuarios->where([
            'id_usuario'  => $this->session->id_usuario,
            'loadinforme' => 1,
            'informe'     => 1
        ])->first();
        if (!$usuario) {
            return redirect()->to(base_url('scii/inicio/'))
                ->with('mensaje', 'No tienes acceso a esta sección.');
        }
        $lineasModel = new LineasAccionModel();
        $lineas = $lineasModel->getLineasAccionConContexto();
        $lineasSocioambientalModel = new LineasAccionSocioambientalModel();
        $lineasSocioambiental = $lineasSocioambientalModel->getLineasAccionConContexto();
        $lineasAguaModel = new LineasAccionAguaModel();
        $lineasAgua = $lineasAguaModel->getLineasAccionConContexto();
        $odsTemasModel = new OdsTemasModel();
        $odsTemas = $odsTemasModel->getODS();
        $periodoAnualActivo = $this->periodosAnuales
            ->where ('estado', 'activo')
            ->first();
        $idPeriodoActivo = $periodoAnualActivo['id_periodo_anual'];
        $etapaActiva = $this->etapas
            ->where('estado', 'abierta')
            ->first();
        $idEtapaActiva = $etapaActiva['id_etapa'];
        $id_unidad = $usuario['id_unidad'];
        $unidad = $this->unidades->where('id_unidad', $id_unidad)->first();
        $usuario['nombre_unidad'] = $unidad['descripcion'];
        $datos = [
            'nombre_s' => $this->session->nombre_s,
            'current'  => 'Informe',
            'datos'    => $usuario,
            'area' => $usuario['nombre_unidad'],
            'idPeriodoActivo' => $idPeriodoActivo,
            'idEtapaActivo' => $idEtapaActiva,
            'lineas' => $lineas,
            'lineasSocioambiental' => $lineasSocioambiental,
            'lineasAgua' => $lineasAgua,
            'odsTemas' => $odsTemas
        ];
        echo view('scii/headerscii', $datos);
        echo view('scii/informe');
        echo view('scii/footerscii');
    }
    public function saveInforme(){
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $id_usuario = $this->session->id_usuario;
        $data = [
            'informe' => $this->request->getPost('informe'),
        ];
        $this->usuarios->update($id_usuario, $data);
        return redirect()->to(base_url('scii/scii/informe/'))
            ->with('mensaje', 'Informe actualizado correctamente.');
    }

}
