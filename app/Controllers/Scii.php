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

use App\Models\InformesGobiernoModel;
use App\Models\InformeArchivosModel;
use App\Models\InformeComentariosModel;

use App\Models\GlosaGestionModel;
use App\Models\GlosasGobiernoModel;
use App\Models\GlosaArchivosModel;
use App\Models\GlosaComentariosModel;

use App\Models\GlosaModel;
use App\Models\PeriodosAnualesModel;
use App\Models\EtapasModel;

use App\Models\EjesModel;
use App\Models\EstrategiasModel;
use App\Models\LineasAccionModel;
use App\Models\ObjetivosModel;
use App\Models\TematicasModel;

use App\Models\ProgramaSectorialInformeModel;
use App\Models\EjesInformeModel;
use App\Models\EstrategiasInformeModel;
use App\Models\LineasAccionInformeModel;
use App\Models\ObjetivosInformeModel;
use App\Models\TematicasInformeModel;

use App\Models\OdsMetasModel;
use App\Models\OdsObjetivosModel;
use App\Models\OdsTemasModel;





class Scii extends BaseController
{
    protected $usuarios, $logs, $session, $reglasUsuarioEdi, $cargas,
        $informesGobierno, $informeArchivos, $informeComentarios, $unidades, $evaluaciones,
        $partes, $preguntas,
        $respuestas, $categorias, $periodo, $glosa, $periodosAnuales, $etapas,
        $ejes, $estrategias, $lineasAccion, $objetivos, $tematicas,
        $programaSectorialInforme, $ejesInforme, $estrategiasInforme, $lineasAccionInforme, $objetivosInforme, $tematicasInforme,
        $glosaGestion, $glosasGobierno, $glosaArchivos, $glosaComentarios,
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

        $this->informesGobierno = new InformesGobiernoModel();
        $this->informeArchivos = new InformeArchivosModel();
        $this->informeComentarios = new InformeComentariosModel();

        $this->glosaGestion = new GlosaGestionModel();
        $this->glosasGobierno  = new GlosasGobiernoModel();
        $this->glosaArchivos   = new GlosaArchivosModel();
        $this->glosaComentarios= new GlosaComentariosModel();

        $this->glosa = new GlosaModel();
        $this->periodosAnuales = new PeriodosAnualesModel();
        $this->etapas = new EtapasModel();
        $this->ejes = new EjesModel();
        $this->estrategias = new EstrategiasModel();
        $this->lineasAccion = new LineasAccionModel();
        $this->objetivos = new ObjetivosModel();
        $this->tematicas = new TematicasModel();
        $this->ejesInforme = new EjesInformeModel();
        $this->estrategiasInforme = new EstrategiasInformeModel();
        $this->lineasAccionInforme = new LineasAccionInformeModel();
        $this->objetivosInforme = new ObjetivosInformeModel();
        $this->tematicasInforme = new TematicasInformeModel();
        $this->programaSectorialInforme = new ProgramaSectorialInformeModel();
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
    public function informe($id_informe = null)
    {
        $estadoPeriodo = $this->periodosAnuales->where('estado', 'activo')->first();
        if (!$estadoPeriodo) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'No hay un periodo anual activo. No se puede actualizar el informe.');
        }
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
        $lineasSocioambientalModel = new LineasAccionInformeModel();
        $lineasSocioambiental = $lineasSocioambientalModel->getLineasAccionPorPrograma(2);
        $lineasAguaModel = new LineasAccionInformeModel();
        $lineasAgua = $lineasAguaModel->getLineasAccionPorPrograma(1);
        $odsTemasModel = new OdsTemasModel();
        $odsTemas = $odsTemasModel->getODS();
        $periodoAnualActivo = $this->periodosAnuales
            ->where('estado', 'activo')
            ->first();
        $idPeriodoActivo = $periodoAnualActivo['id_periodo_anual'];
        $etapaActiva = $this->etapas
            ->where('estado', 'abierta')
            ->first();
        $idEtapaActiva = $etapaActiva['id_etapa'];
        $id_unidad = $usuario['id_unidad'];
        $unidad = $this->unidades->where('id_unidad', $id_unidad)->first();
        $usuario['nombre_unidad'] = $unidad['descripcion'];
        $periodoAnual = $this->periodosAnuales->where('estado', 'activo')->first();

        $db = \Config\Database::connect();
        $informes = [];
        if ($unidad && $periodoAnual) {
            $builder = $db->table('informes_gobierno');
            $builder->select('id_informe, tema, estado, created_at');
            $builder->where('id_unidad', $unidad['id_unidad']);
            $builder->where('id_periodo_anual', $periodoAnual['id_periodo_anual']);
            $builder->orderBy('estado', 'DESC');

            $informes = $builder->get()->getResultArray();
        }

        if ($id_informe !== NULL) {
            $informesGobierno = $this->informesGobierno
                ->where('id_informe', $id_informe)
                ->where('id_periodo_anual', $idPeriodoActivo)
                ->first();
            $queryResult = $builder->get();
            $informe = $queryResult->getRowArray();
            $archivos = [];
            if ($informe) {
                $archivosBuilder = $db->table('informe_archivos');
                $archivosBuilder->where('id_informe', $informe['id_informe']);
                $archivosBuilder->orderBy('created_at', 'DESC');
                $archivosResult = $archivosBuilder->get();
                $archivos = $archivosResult->getResultArray();
            }
            // Obtener comentarios relacionados (si existen en la base de datos)
            $comentarios = [];
            if ($informe) {
                $comentariosBuilder = $db->table('informe_comentarios');
                $comentariosBuilder->select('informe_comentarios.*');
                // $comentariosBuilder->join('usuarios', 'usuarios.id_usuario = informe_comentarios.id_usuario', 'left');
                $comentariosBuilder->where('id_informe', $id_informe);
                $comentariosBuilder->orderBy('created_at', 'DESC');
                $comentariosResult = $comentariosBuilder->get();
                $comentarios = $comentariosResult->getResultArray();
            }
            if (!$informesGobierno) {
                return redirect()->to(base_url('scii/informe/'))
                    ->with('mensaje', 'Informe no encontrado.');
            }
            if ($informesGobierno['id_unidad'] != $usuario['id_unidad']) {
                return redirect()->to(base_url('scii/informe/'))
                    ->with('mensaje', 'No tienes permiso para ver este informe.');
            }
            $datos['informeSeleccionado'] = $informesGobierno;
        }
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
            'odsTemas' => $odsTemas,
            'informes' => $informes,
            'informeSeleccionado' => $datos['informeSeleccionado'] ?? null,
            'archivosInforme' => $archivos ?? [],
            'comentariosInforme' => $comentarios ?? []
        ];
        echo view('scii/headerscii', $datos);
        echo view('scii/informe');
        echo view('scii/footerscii');
    }
    public function registrarInformeGobierno()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }

        // Detectar si es creación o actualización
        $informeId = $this->request->getPost('informe_id');

        if (!empty($informeId) && is_numeric($informeId)) {
            // ACTUALIZACIÓN
            return $this->actualizarInforme($informeId);
        } else {
            // CREACIÓN
            return $this->crearInforme();
        }
    }

    private function crearInforme()
    {
        $db = \Config\Database::connect();
        try {
            // Iniciar transacción
            $db->transStart();
            $id_usuario = $this->session->id_usuario;
            $id_unidad = $this->session->id_unidad;
            $id_etapa = $this->etapas->where('estado', 'abierta')->first()['id_etapa'];
            $id_periodo_actual = $this->periodosAnuales->where('estado', 'activo')->first()['id_periodo_anual'];

            $informesGobierno = new InformesGobiernoModel();
            $informeArchivos = new InformeArchivosModel();

            $dataInforme = [
                'fecha_corte' => $this->request->getPost('fecha_corte'),
                'id_alineacion_ped' => $this->request->getPost('alineacionPED'),
                'orden_prioridad' => $this->request->getPost('ordenPrioridad'),
                'tema' => $this->request->getPost('tema'),
                'subtema' => $this->request->getPost('subtema'),
                'descripcion_resultado' => $this->request->getPost('descripcion'),
                'contexto' => $this->request->getPost('contexto'),
                'accion' => $this->request->getPost('accion'),
                'impacto' => $this->request->getPost('impacto'),
                'territorio' => $this->request->getPost('territorio'),
                'beneficiarios' => $this->request->getPost('beneficiarios'),
                'inversion' => $this->request->getPost('inversion'),
                'desarrollo_resultado' => $this->request->getPost('desarrollo_resultado'),
                'id_alineacion_programa_derivado' => $this->request->getPost('alineacionProgramasDerivados'),
                'id_alineacion_ods' => $this->request->getPost('alineacionODS'),
                'conclusion_tematica' => $this->request->getPost('conclusionTematica'),
                'logros_destacados' => $this->request->getPost('logrosDestacados'),
                'id_usuario' => $id_usuario,
                'id_unidad' => $id_unidad,
                'id_etapa' => $id_etapa,
                'id_periodo_anual' => $id_periodo_actual,
                'estado' => 'enviado'
            ];
            if (!$informesGobierno->validate($dataInforme)) {
                throw new \Exception('Errores de validación: ' . json_encode($informesGobierno->errors()));
            }
            $insertResult = $informesGobierno->insert($dataInforme);
            if ($insertResult === false) {
                throw new \Exception('Error al insertar el informe: ' . json_encode($informesGobierno->errors()));
            }
            $informeId = $informesGobierno->getInsertID();
            if (!$informeId || $informeId <= 0) {
                throw new \Exception('No se pudo obtener el ID del informe insertado');
            }

            // Procesar archivos usando método reutilizable
            $archivosGuardados = $this->procesarArchivosInforme($informeId);
            // Completar transacción
            $db->transComplete();
            // Verificar si la transacción fue exitosa
            if ($db->transStatus() === false) {
                // Limpiar archivos subidos si la transacción falló
                $this->limpiarArchivos($archivosGuardados);
                throw new \Exception('La transacción de base de datos falló');
            }
            // Agregar correo de confirmacion de envio de informe.
            $email = \Config\Services::email();
            $email->setTo($this->session->correo);
            $email->setSubject('Captura de resultados institucionales para Informe de Gobierno | SMADSOT');
            $email->setMessage('Estimado/a enlace, por este medio se informa la que <strong>Dirección de Planeación y Geomática ha recibido la información capturada de resultados institucionales</strong> de su Unidad Administrativa en el módulo de “Informe de Gobierno” del Sistema de Control Interno Institucional de la Secretaría de Medio Ambiente, Desarrollo Sustentable y Ordenamiento Territorial.
            <br><br>
            <u>Te solicitamos estar pendiente de tu correo electrónico institucional durante el proceso de revisión</u> por parte del Departamento de Planeación y Evaluación, en caso de que se requiera el apoyo para solventar observaciones y/o comentarios..
                            <br><br>
                            Sin otro particular, se agradece la atención prestada.');
            if (! $email->send(false)) {
                echo $email->printDebugger(['headers', 'subject', 'body']);
            }
            return redirect()->to('/Scii/informe')
                ->with('success', 'Informe registrado correctamente con ' . count($archivosGuardados) . ' archivo(s)');
        } catch (\Exception $e) {
            // Rollback automático si usamos transStart/transComplete
            if ($db->transStatus() !== false) {
                $db->transRollback();
            }
            // Limpiar archivos si ya se subieron
            if (!empty($archivosGuardados)) {
                $this->limpiarArchivos($archivosGuardados);
            }
            // Log del error
            log_message('error', 'Error al registrar informe: ' . $e->getMessage());
            log_message('error', 'Stack trace: ' . $e->getTraceAsString());
            // Mensaje de error al usuario
            return redirect()->back()
                ->withInput()
                ->with('error', 'Error al registrar el informe: ' . $e->getMessage());
        }
    }

    private function actualizarInforme($informeId)
    {
        $estadoPeriodo = $this->periodosAnuales->where('estado', 'activo')->first();
        if (!$estadoPeriodo) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'No hay un periodo anual activo. No se puede actualizar el informe.');
        }
        $db = \Config\Database::connect();
        $archivosEliminados = [];
        $archivosGuardados = [];

        try {
            $db->transStart();

            $id_usuario = $this->session->id_usuario;
            $id_unidad = $this->session->id_unidad;

            $informeExistente = $this->informesGobierno->find($informeId);
            if (!$informeExistente) {
                throw new \Exception('El informe no existe');
            }

            if ($informeExistente['id_unidad'] != $id_unidad) {
                throw new \Exception('No tienes permisos para editar este informe');
            }

            if ($informeExistente['estado'] !== 'observado') {
                throw new \Exception('Solo se pueden editar informes en estado "observado". Estado actual: ' . $informeExistente['estado']);
            }

            // 4. PREPARAR DATOS PARA ACTUALIZACIÓN
            $dataInforme = [
                'fecha_corte' => $this->request->getPost('fecha_corte'),
                'id_alineacion_ped' => $this->request->getPost('alineacionPED'),
                'orden_prioridad' => $this->request->getPost('ordenPrioridad'),
                'tema' => $this->request->getPost('tema'),
                'subtema' => $this->request->getPost('subtema'),
                'descripcion_resultado' => $this->request->getPost('descripcion'),
                'contexto' => $this->request->getPost('contexto'),
                'accion' => $this->request->getPost('accion'),
                'impacto' => $this->request->getPost('impacto'),
                'territorio' => $this->request->getPost('territorio'),
                'beneficiarios' => $this->request->getPost('beneficiarios'),
                'inversion' => $this->request->getPost('inversion'),
                'desarrollo_resultado' => $this->request->getPost('desarrollo_resultado'),
                'id_alineacion_programa_derivado' => $this->request->getPost('alineacionProgramasDerivados'),
                'id_alineacion_ods' => $this->request->getPost('alineacionODS'),
                'conclusion_tematica' => $this->request->getPost('conclusionTematica'),
                'logros_destacados' => $this->request->getPost('logrosDestacados'),
                'estado' => 'enviado' // Mantiene el estado observado después de editar
            ];

            // 5. VALIDAR DATOS
            if (!$this->informesGobierno->validate($dataInforme)) {
                throw new \Exception('Errores de validación: ' . json_encode($this->informesGobierno->errors()));
            }

            // 6. ACTUALIZAR INFORME
            $updateResult = $this->informesGobierno->update($informeId, $dataInforme);
            if ($updateResult === false) {
                throw new \Exception('Error al actualizar el informe: ' . json_encode($this->informesGobierno->errors()));
            }

            // 7. GESTIÓN DE ARCHIVOS: Solo actualizar tipos de archivo que el usuario haya modificado
            // Detectar qué tipos de archivos se están subiendo
            $tiposConArchivosNuevos = [];
            $tiposMap = [
                'mapas' => 'mapa',
                'graficas' => 'grafico',
                'cuadros' => 'cuadro',
                'esquemas' => 'esquema',
                'fotografias' => 'fotografia',
                'resultados' => 'resultados'
            ];

            foreach ($tiposMap as $tipoInput => $tipoEnum) {
                if (isset($_FILES[$tipoInput]) && is_array($_FILES[$tipoInput]['name'])) {
                    // Verificar si hay al menos un archivo válido
                    foreach ($_FILES[$tipoInput]['error'] as $error) {
                        if ($error === UPLOAD_ERR_OK) {
                            $tiposConArchivosNuevos[] = $tipoEnum;
                            break;
                        }
                    }
                }
            }

            // Solo eliminar archivos de los tipos que se van a reemplazar
            if (!empty($tiposConArchivosNuevos)) {
                $archivosExistentes = $this->informeArchivos
                    ->where('id_informe', $informeId)
                    ->whereIn('tipo_archivo', $tiposConArchivosNuevos)
                    ->findAll();

                // Eliminar archivos físicos y registros de BD solo de los tipos modificados
                foreach ($archivosExistentes as $archivo) {
                    // Construir la ruta física del archivo desde la ruta relativa
                    $rutaFisica = WRITEPATH . $archivo['ruta_archivo'];

                    if (file_exists($rutaFisica)) {
                        if (unlink($rutaFisica)) {
                            $archivosEliminados[] = $rutaFisica;
                        } else {
                            log_message('warning', "No se pudo eliminar el archivo: {$rutaFisica}");
                        }
                    }

                    // Eliminar registro de BD
                    $this->informeArchivos->delete($archivo['id_archivo']);
                }
            }

            // 8. SUBIR NUEVOS ARCHIVOS (solo los que el usuario seleccionó)
            $archivosGuardados = $this->procesarArchivosInforme($informeId);

            // 9. COMPLETAR TRANSACCIÓN
            $db->transComplete();

            if ($db->transStatus() === false) {
                // Si falla, restaurar archivos eliminados si es posible
                throw new \Exception('La transacción de base de datos falló');
            }

            log_message('info', "Informe #{$informeId} actualizado exitosamente por usuario #{$id_usuario}");

            $mensajeArchivos = count($archivosGuardados) > 0 
                ? ' y ' . count($archivosGuardados) . ' archivo(s) actualizado(s)' 
                : '';

            return redirect()->to("/Scii/informe/{$informeId}")
                ->with('success', 'Informe actualizado correctamente' . $mensajeArchivos);
        } catch (\Exception $e) {
            // Rollback
            if ($db->transStatus() !== false) {
                $db->transRollback();
            }

            // Limpiar archivos nuevos si se subieron
            if (!empty($archivosGuardados)) {
                $this->limpiarArchivos($archivosGuardados);
            }

            // Log del error
            log_message('error', "Error al actualizar informe #{$informeId}: " . $e->getMessage());
            log_message('error', 'Stack trace: ' . $e->getTraceAsString());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Error al actualizar el informe: ' . $e->getMessage());
        }
    }

    /**
     * Procesar y guardar archivos del informe
     * @return array Rutas de archivos guardados
     */
    private function procesarArchivosInforme($informeId)
    {
        // Mapeo entre nombres de inputs (plural) y valores ENUM de BD (singular)
        $tiposMap = [
            'mapas' => 'mapa',
            'graficas' => 'grafico',
            'cuadros' => 'cuadro',
            'esquemas' => 'esquema',
            'fotografias' => 'fotografia',
            'resultados' => 'resultados'
        ];

        $archivosGuardados = [];
        $orden = 1;

        foreach ($tiposMap as $tipoInput => $tipoEnum) {
            // Verificar si hay archivos para este tipo
            if (isset($_FILES[$tipoInput]) && is_array($_FILES[$tipoInput]['name'])) {
                $fileCount = count($_FILES[$tipoInput]['name']);
                for ($i = 0; $i < $fileCount; $i++) {
                    // Verificar que el archivo existe y no tiene errores
                    if ($_FILES[$tipoInput]['error'][$i] === UPLOAD_ERR_OK) {
                        // Validar tipo y tamaño de archivo
                        $allowedTypes = [
                            'image/jpeg',
                            'image/jpg',
                            'image/png',
                            'image/gif',
                            'image/webp',

                            'application/pdf',

                            'application/zip',
                            'application/x-zip-compressed',
                            'application/x-zip',
                            'application/vnd.rar',
                            'application/x-rar',
                            'application/x-rar-compressed',                            

                            'application/vnd.ms-excel',
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',

                            'application/msword',
                            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',

                            'application/vnd.ms-powerpoint',
                            'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                        ];

                        $maxSize = 10 * 1024 * 1024; // 10MB

                        // Obtener información del archivo directamente de $_FILES
                        $clientName = $_FILES[$tipoInput]['name'][$i];
                        $tmpName = $_FILES[$tipoInput]['tmp_name'][$i];
                        // $fileMimeType = $_FILES[$tipoInput]['type'][$i];
                        $fileSize = $_FILES[$tipoInput]['size'][$i];
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $fileMimeType = finfo_file($finfo, $tmpName);
                        finfo_close($finfo);

                        if (!in_array($fileMimeType, $allowedTypes)) {
                            throw new \Exception("Tipo de archivo no permitido: {$clientName} (tipo: {$fileMimeType})");
                        }
                        if ($fileSize > $maxSize) {
                            throw new \Exception("Archivo demasiado grande: {$clientName} (" . round($fileSize / 1024 / 1024, 2) . "MB)");
                        }

                        // Obtener información del archivo
                        $extension = pathinfo($clientName, PATHINFO_EXTENSION);
                        $nombreOriginal = $clientName;
                        $tamanioKB = round($fileSize / 1024, 2);
                        $newName = uniqid() . '_' . bin2hex(random_bytes(10)) . '.' . $extension;

                        // Definir ruta relativa y absoluta
                        $rutaRelativa = "uploads/informes/$informeId/$tipoInput/";
                        $rutaAbsoluta = WRITEPATH . $rutaRelativa;

                        // Crear directorio si no existe
                        if (!is_dir($rutaAbsoluta)) {
                            if (!mkdir($rutaAbsoluta, 0755, true)) {
                                throw new \Exception("No se pudo crear el directorio: $rutaAbsoluta");
                            }
                        }
                        // Mover archivo manualmente usando move_uploaded_file
                        $rutaCompletaAbsoluta = $rutaAbsoluta . $newName;
                        $rutaCompletaRelativa = $rutaRelativa . $newName;
                        
                        if (!move_uploaded_file($tmpName, $rutaCompletaAbsoluta)) {
                            throw new \Exception("Error al mover el archivo: {$nombreOriginal}");
                        }

                        // Verificar que el archivo se movió correctamente
                        if (!file_exists($rutaCompletaAbsoluta)) {
                            throw new \Exception("El archivo no existe después de moverlo: $rutaCompletaAbsoluta");
                        }
                        // Guardar registro en BD con ruta relativa
                        $archivoData = [
                            'id_informe' => $informeId,
                            'tipo_archivo' => $tipoEnum,
                            'nombre_archivo' => $newName,
                            'nombre_original' => $nombreOriginal,
                            'ruta_archivo' => $rutaCompletaRelativa,
                            'extension' => $extension,
                            'tamanio_kb' => $tamanioKB,
                            'mime_type' => $fileMimeType,
                            'orden' => $orden++,
                            'estado' => 'activo'
                        ];

                        $archivoInsertResult = $this->informeArchivos->insert($archivoData);

                        if ($archivoInsertResult === false) {
                            throw new \Exception("Error al registrar archivo en BD: {$nombreOriginal} - " . json_encode($this->informeArchivos->errors()));
                        }

                        // Guardar referencia para limpieza en caso de error (usar ruta absoluta)
                        $archivosGuardados[] = $rutaCompletaAbsoluta;
                    }
                }
            }
        }
        return $archivosGuardados;
    }
    //  * Método auxiliar para limpiar archivos
    private function limpiarArchivos(array $archivos)
    {
        foreach ($archivos as $archivo) {
            if (file_exists($archivo)) {
                if (!@unlink($archivo)) {
                    log_message('warning', "No se pudo eliminar el archivo: $archivo");
                }
            }
        }
    }
    //  * Obtener comentarios de un informe
    public function obtenerComentarios()
    {
        // Validar sesión
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        // Valida que tenga permisos para accerder al informe.
        $usuario = $this->usuarios->where([
            'id_usuario'  => $this->session->id_usuario,
            'loadinforme' => 1,
            'informe'     => 1
        ])->first();
        if (!$usuario) {
            return redirect()->to(base_url('scii/inicio/'))
                ->with('mensaje', 'No tienes acceso a esta sección.');
        }
        $id_informe = $this->request->getGet('id_informe');
        $campo_referencia = $this->request->getGet('campo_referencia');

        if (empty($id_informe)) {
            return $this->response->setJSON(['success' => false, 'message' => 'ID de informe requerido']);
        }

        $db = \Config\Database::connect();
        
        if ($campo_referencia) {
            // Si se especifica un campo, obtener todos sus comentarios
            $builder = $db->table('informe_comentarios');
            $builder->select('informe_comentarios.*, usuarios.nombre_s, usuarios.apellido_p, usuarios.apellido_m');
            $builder->join('usuarios', 'usuarios.id_usuario = informe_comentarios.id_usuario', 'left');
            $builder->where('informe_comentarios.id_informe', $id_informe);
            $builder->where('informe_comentarios.campo_referencia', $campo_referencia);
            $builder->orderBy('informe_comentarios.created_at', 'DESC');
            $comentarios = $builder->get()->getResultArray();
        } else {
            // Si no se especifica campo, obtener el último comentario de cada campo
            $subquery = $db->table('informe_comentarios')
                ->select('campo_referencia, MAX(created_at) as max_created_at')
                ->where('id_informe', $id_informe)
                ->groupBy('campo_referencia')
                ->getCompiledSelect();
            
            $builder = $db->table('informe_comentarios ic');
            $builder->select('ic.*, usuarios.nombre_s, usuarios.apellido_p, usuarios.apellido_m');
            $builder->join('usuarios', 'usuarios.id_usuario = ic.id_usuario', 'left');
            $builder->join("($subquery) as latest", 
                'ic.campo_referencia = latest.campo_referencia AND ic.created_at = latest.max_created_at', 
                'inner');
            $builder->where('ic.id_informe', $id_informe);
            $builder->orderBy('ic.created_at', 'DESC');
            $comentarios = $builder->get()->getResultArray();
        }

        return $this->response->setJSON([
            'success' => true,
            'comentarios' => $comentarios
        ]);
    }
    public function getInformes()
    {
        // Validar sesión
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        // Valida que tenga permisos para accerder al informe.
        $usuario = $this->usuarios->where([
            'id_usuario'  => $this->session->id_usuario,
            'loadinforme' => 1,
            'informe'     => 1
        ])->first();
        if (!$usuario) {
            return redirect()->to(base_url('scii/inicio/'))
                ->with('mensaje', 'No tienes acceso a esta sección.');
        }
        $db = \Config\Database::connect();

        $unidadId = $this->session->id_unidad;
        $unidades = $this->unidades
            ->where('id_unidad', $unidadId)
            ->first();
        $periodosAnuales = $this->periodosAnuales
            ->where('estado', 'activo')
            ->first();
        $idPeriodoAnual = $periodosAnuales ? $periodosAnuales['id_periodo_anual'] : null;

        $builderUsuarios = $db->table('usuarios');
        $builderUsuarios->select('
        usuarios.id_unidad,
        COUNT(usuarios.id_usuario) AS total_usuarios,
        SUM(CASE WHEN usuarios.informe = 1 THEN 1 ELSE 0 END) AS usuarios_con_informe,
        SUM(CASE WHEN usuarios.loadinforme = 1 THEN 1 ELSE 0 END) AS usuarios_activos');

        $builderUsuarios->where('usuarios.activo', 1);
        $builderUsuarios->where('usuarios.id_unidad', $unidadId);
        $builderUsuarios->groupBy('usuarios.id_unidad');

        $estadisticasUsuarios = $builderUsuarios->get()->getResultArray();

        $statsMap = [];
        foreach ($estadisticasUsuarios as $stat) {
            $statsMap[$stat['id_unidad']] = $stat;
        }

        $builderInformes = $db->table('informes_gobierno');
        $builderInformes->select('
        informes_gobierno.id_informe,
        informes_gobierno.id_unidad,
        informes_gobierno.id_usuario,
        informes_gobierno.id_etapa,
        informes_gobierno.tema,
        informes_gobierno.estado,
        informes_gobierno.id_periodo_anual,
        etapas.numero_etapa,
        periodos_anuales.anio');
        $builderInformes->where('informes_gobierno.id_periodo_anual', $idPeriodoAnual);
        $builderInformes->where('informes_gobierno.id_unidad', $unidadId);
        $builderInformes->join('etapas', 'etapas.id_etapa = informes_gobierno.id_etapa', 'left');
        $builderInformes->join(
            'periodos_anuales',
            'periodos_anuales.id_periodo_anual = informes_gobierno.id_periodo_anual',
            'left'
        );

        $informesDB = $builderInformes->get()->getResultArray();
        $informesFormateados = [];
        foreach ($informesDB as $informe) {
            $informesFormateados[] = [
                'id_informe' => $informe['id_informe'],
                'id_unidad'  => $informe['id_unidad'],
                'id_usuario' => $informe['id_usuario'],
                'anio'       => $informe['anio'],
                'etapa'      => $informe['numero_etapa'],
                'tema'      => $informe['tema'],
                'estado'      => $informe['estado']
            ];
        }
        $unidades['total_informes'] = count($informesFormateados);
        return $this->response->setJSON([
            'unidades' => $unidades,
            'informes' => $informesFormateados
        ]);
    }
    public function guardarComentario()
    {
        // Validar sesión
        if (!isset($this->session->id_usuario)) {
            return $this->response->setJSON(['success' => false, 'message' => 'Sesión no válida']);
        }
        // Obtener datos del POST
        $id_informe = $this->request->getPost('id_informe');
        $campo_referencia = $this->request->getPost('campo_referencia');
        $comentario = $this->request->getPost('comentario');
        $tipo = $this->request->getPost('tipo') ?? 'revision'; // 'revision', 'observacion', 'sugerencia'

        // Validar datos requeridos
        if (empty($id_informe) || empty($campo_referencia)) {
            return $this->response->setJSON(['success' => false, 'message' => 'Datos incompletos']);
        }

        // Validar que el informe existe
        $informe = $this->informesGobierno->find($id_informe);
        if (!$informe) {
            return $this->response->setJSON(['success' => false, 'message' => 'Informe no encontrado']);
        }

        // Validar que el informe está en estado "observado" para poder editar comentarios
        if ($informe['estado'] !== 'observado') {
            $mensaje = 'Los comentarios solo pueden ser editados cuando el informe está en estado "observado".';
            
            if ($informe['estado'] === 'enviado') {
                $mensaje = 'El informe ya ha sido enviado. No se pueden editar comentarios.';
            } elseif ($informe['estado'] === 'aprobado') {
                $mensaje = 'El informe ya ha sido aprobado. No se pueden editar comentarios.';
            }
            
            return $this->response->setJSON([
                'success' => false, 
                'message' => $mensaje
            ]);
        }

        // Verificar si ya existe un comentario para este campo
        $comentarioExistente = $this->informeComentarios
            ->where('id_informe', $id_informe)
            ->where('campo_referencia', $campo_referencia)
            ->where('id_usuario', $this->session->id_usuario)
            ->first();

        try {
            if ($comentarioExistente) {
                // Actualizar comentario existente
                if (empty($comentario)) {
                    // Si el comentario está vacío, eliminarlo
                    $this->informeComentarios->delete($comentarioExistente['id_comentario']);
                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'Comentario eliminado',
                        'action' => 'deleted'
                    ]);
                } else {
                    // Actualizar
                    $this->informeComentarios->update($comentarioExistente['id_comentario'], [
                        'comentario' => $comentario,
                        'tipo' => $tipo,
                        'updated_at' => date('Y-m-d H:i:s')
                    ]);
                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'Comentario actualizado',
                        'action' => 'updated',
                        'id_comentario' => $comentarioExistente['id_comentario']
                    ]);
                }
            } else {
                // Crear nuevo comentario solo si hay texto
                if (!empty($comentario)) {
                    $id_comentario = $this->informeComentarios->insert([
                        'id_informe' => $id_informe,
                        'id_usuario' => $this->session->id_usuario,
                        'campo_referencia' => $campo_referencia,
                        'comentario' => $comentario,
                        'tipo' => $tipo,
                        'estado' => 'activo',
                        'created_at' => date('Y-m-d H:i:s')
                    ]);

                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'Comentario guardado',
                        'action' => 'created',
                        'id_comentario' => $id_comentario
                    ]);
                }
            }

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Sin cambios',
                'action' => 'none'
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Error al guardar: ' . $e->getMessage()
            ]);
        }
    }

    //Código relacionado con la glosa
    public function glosa($id_glosa_gobierno = null)
    {
        // 1. Validar sesión
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }

        // 2. Validar permisos para glosa 
        $usuario = $this->usuarios->where([
            'id_usuario' => $this->session->id_usuario,
            'loadglosa' => 1, 
            'glosa' => 1      // idem
        ])->first();

        if (!$usuario) {
            return redirect()->to(base_url('scii/inicio/'))
                ->with('mensaje', 'No tienes acceso a esta sección.');
        }

        // 3. Cargar catálogos
        $lineasModel = new LineasAccionModel();
        $lineas = $lineasModel->getLineasAccionConContexto();
        $lineasSocioambientalModel = new LineasAccionInformeModel();
        $lineasSocioambiental = $lineasSocioambientalModel->getLineasAccionPorPrograma(2);
        $lineasAguaModel = new LineasAccionInformeModel();
        $lineasAgua = $lineasAguaModel->getLineasAccionPorPrograma(1);
        $odsTemasModel = new OdsTemasModel();
        $odsTemas = $odsTemasModel->getODS();

        // 4. Obtener glosa activa
        $glosaActiva = $this->glosaGestion
            ->where('estado', 'abierta')
            ->first();

        // 5. Obtener unidad del usuario
        $id_unidad = $usuario['id_unidad'];
        $unidad = $this->unidades->where('id_unidad', $id_unidad)->first();
        $usuario['nombre_unidad'] = $unidad['descripcion'] ?? '';

        // 6. Obtener últimas glosas de la unidad (si hay glosa activa)
        $db = \Config\Database::connect();
        $glosas = [];

        if ($unidad && $glosaActiva) {
            $builder = $db->table('glosas_gobierno');
            $builder->select('id_glosa_gobierno, tema, estado, created_at');
            $builder->where('id_unidad', $unidad['id_unidad']);
            $builder->where('id_glosa', $glosaActiva['id_glosa']);
            $builder->orderBy('created_at', 'DESC');
            
            $glosas = $builder->get()->getResultArray();
        }

        $glosaSeleccionada = null;
        $archivos = [];
        $comentarios = [];

        // 7. Si se pidió una glosa específica
        if ($id_glosa_gobierno !== null) {
            $glosaSeleccionada = $this->glosasGobierno
                ->where('id_glosa_gobierno', $id_glosa_gobierno)
                ->first();

            if (!$glosaSeleccionada) {
                return redirect()->to(base_url('scii/glosa'))
                    ->with('mensaje', 'Glosa no encontrada.');
            }

            // Verificar que sea de su unidad
            if ($glosaSeleccionada['id_unidad'] != $usuario['id_unidad']) {
                return redirect()->to(base_url('scii/glosa'))
                    ->with('mensaje', 'No tienes permiso para ver esta glosa.');
            }

            // Obtener archivos de la glosa
            $archivosBuilder = $db->table('glosa_archivos');
            $archivosBuilder->where('id_glosa_gobierno', $id_glosa_gobierno);
            $archivosBuilder->orderBy('created_at', 'DESC');
            $archivos = $archivosBuilder->get()->getResultArray();

            // Obtener comentarios de la glosa
            $comentariosBuilder = $db->table('glosa_comentarios');
            $comentariosBuilder->where('id_glosa_gobierno', $id_glosa_gobierno);
            $comentariosBuilder->orderBy('created_at', 'DESC');
            $comentarios = $comentariosBuilder->get()->getResultArray();
        }

        // 8. Preparar datos para la vista
        $datos = [
            'nombre_s' => $this->session->nombre_s,
            'current'  => 'Glosa',
            'datos'    => $usuario,
            'area'     => $usuario['nombre_unidad'],
            'glosaActiva' => $glosaActiva,
            'lineas' => $lineas,
            'lineasSocioambiental' => $lineasSocioambiental,
            'lineasAgua' => $lineasAgua,
            'odsTemas' => $odsTemas,
            'glosas' => $glosas,
            'glosaSeleccionada' => $glosaSeleccionada,
            'archivosGlosa' => $archivos,
            'comentariosGlosa' => $comentarios
        ];

        // 9. Renderizar vistas
        echo view('scii/headerscii', $datos);
        echo view('scii/glosa', $datos);
        echo view('scii/footerscii');
    }

    public function registrarGlosaGobierno()
    {
        // Validar sesión
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }

        // Detectar si es creación o actualización
        $glosaId = trim($this->request->getPost('glosa_id'));

        if (!empty($glosaId) && is_numeric($glosaId)) {
            // ACTUALIZACIÓN
            return $this->actualizarGlosa((int)$glosaId);
        } else {
            // CREACIÓN
            return $this->crearGlosa();
        }
    }
    
    private function crearGlosa()
    {
        $db = \Config\Database::connect();
        $archivosGuardados = [];

        try {
            // Iniciar transacción
            $db->transStart();

            // Datos de contexto
            $id_usuario = $this->session->id_usuario;
            $id_unidad  = $this->session->id_unidad;

            // Obtener glosa activa
            $glosaActiva = $this->glosaGestion
                ->where('estado', 'abierta')
                ->first();

            if (!$glosaActiva) {
                throw new \Exception('No hay una glosa abierta actualmente.');
            }

            $id_glosa = $glosaActiva['id_glosa'];

            // Modelos
            $glosasGobierno = new GlosasGobiernoModel();

            // Armar datos desde el formulario
            $dataGlosa = [
                'fecha_corte' => $this->request->getPost('fecha_corte'),
                'id_alineacion_ped' => $this->request->getPost('alineacionPED'),
                'orden_prioridad' => $this->request->getPost('ordenPrioridad'),

                'tema' => $this->request->getPost('tema'),
                'introduccion' => $this->request->getPost('introduccion'),
                'accion' => $this->request->getPost('accion'),
                'desarrollo' => $this->request->getPost('desarrollo'),

                'id_alineacion_programa_derivado' => $this->request->getPost('alineacionProgramasDerivados'),
                'id_alineacion_ods' => $this->request->getPost('alineacionODS'),

                'id_usuario' => $id_usuario,
                'id_unidad'  => $id_unidad,
                'id_glosa'   => $id_glosa,

                'estado' => 'enviado'
            ];

            // Validar datos
            if (!$glosasGobierno->validate($dataGlosa)) {
                throw new \Exception('Errores de validación: ' . json_encode($glosasGobierno->errors()));
            }

            // Insertar glosa
            $insertResult = $glosasGobierno->insert($dataGlosa);
            if ($insertResult === false) {
                throw new \Exception('Error al insertar la glosa: ' . json_encode($glosasGobierno->errors()));
            }

            $glosaGobiernoId = $glosasGobierno->getInsertID();
            if (!$glosaGobiernoId || $glosaGobiernoId <= 0) {
                throw new \Exception('No se pudo obtener el ID de la glosa insertada');
            }

            // Procesar archivos (función análoga a informes)
            $archivosGuardados = $this->procesarArchivosGlosa($glosaGobiernoId);

            // Completar transacción
            $db->transComplete();

            if ($db->transStatus() === false) {
                // Limpiar archivos si algo falló
                $this->limpiarArchivos($archivosGuardados);
                throw new \Exception('La transacción de base de datos falló');
            }
            // Agregar correo de confirmacion de envio de informe.
            $email = \Config\Services::email();
            $email->setTo($this->session->correo);
            $email->setSubject('Captura de resultados institucionales para Glosa de Informe de Gobierno | SMADSOT');
            $email->setMessage('Estimado/a enlace, por este medio se informa la que <strong>Dirección de Planeación y Geomática ha recibido la información capturada de resultados institucionales</strong> de su Unidad Administrativa en el módulo de “Glosa del Informe de Gobierno” del Sistema de Control Interno Institucional de la Secretaría de Medio Ambiente, Desarrollo Sustentable y Ordenamiento Territorial.
            <br><br>
            <u>Te solicitamos estar pendiente de tu correo electrónico institucional durante el proceso de revisión</u> por parte del Departamento de Planeación y Evaluación, en caso de que se requiera el apoyo para solventar observaciones y/o comentarios..
                            <br><br>
                            Sin otro particular, se agradece la atención prestada.');
            if (! $email->send(false)) {
                echo $email->printDebugger(['headers', 'subject', 'body']);
            }
            return redirect()->to('/Scii/glosa')
                ->with('success', 'Glosa registrada correctamente con ' . count($archivosGuardados) . ' archivo(s)');

        } catch (\Exception $e) {
            // Rollback
            if ($db->transStatus() !== false) {
                $db->transRollback();
            }

            // Limpiar archivos subidos
            if (!empty($archivosGuardados)) {
                $this->limpiarArchivos($archivosGuardados);
            }

            // Log del error
            log_message('error', 'Error al registrar glosa: ' . $e->getMessage());
            log_message('error', 'Stack trace: ' . $e->getTraceAsString());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Error al registrar la glosa: ' . $e->getMessage());
        }
    }

    private function actualizarGlosa($id_glosa_gobierno)
    {
        $db = \Config\Database::connect();
        $archivosEliminados = [];
        $archivosGuardados = [];

        try {
            $db->transStart();

            $id_usuario = $this->session->id_usuario;
            $id_unidad  = $this->session->id_unidad;

            // Buscar glosa existente
            $glosaExistente = $this->glosasGobierno->find($id_glosa_gobierno);
            if (!$glosaExistente) {
                throw new \Exception('La glosa no existe');
            }

            // Verificar que sea de la misma unidad
            if ($glosaExistente['id_unidad'] != $id_unidad) {
                throw new \Exception('No tienes permisos para editar esta glosa');
            }

            // Regla de negocio: solo editar si está en estado "observado"
            if ($glosaExistente['estado'] !== 'observado') {
                throw new \Exception(
                    'Solo se pueden editar glosas en estado "observado". Estado actual: ' . $glosaExistente['estado']
                );
            }

            // Preparar datos para actualización
            $dataGlosa = [
                'fecha_corte' => $this->request->getPost('fecha_corte'),
                'id_alineacion_ped' => $this->request->getPost('alineacionPED'),
                'orden_prioridad' => $this->request->getPost('ordenPrioridad'),

                'tema' => $this->request->getPost('tema'),
                'introduccion' => $this->request->getPost('introduccion'),
                'accion' => $this->request->getPost('accion'),
                'desarrollo' => $this->request->getPost('desarrollo'),

                'id_alineacion_programa_derivado' => $this->request->getPost('alineacionProgramasDerivados'),
                'id_alineacion_ods' => $this->request->getPost('alineacionODS'),

                // Al reenviar, vuelve a enviado (o el estado que tú definas)
                'estado' => 'enviado'
            ];

            // Validar datos
            if (!$this->glosasGobierno->validate($dataGlosa)) {
                throw new \Exception('Errores de validación: ' . json_encode($this->glosasGobierno->errors()));
            }

            // Actualizar glosa
            $updateResult = $this->glosasGobierno->update($id_glosa_gobierno, $dataGlosa);
            if ($updateResult === false) {
                throw new \Exception('Error al actualizar la glosa: ' . json_encode($this->glosasGobierno->errors()));
            }

            // Gestión de archivos: identificar tipos de archivos que se están actualizando
            $tiposMap = [
                'mapas' => 'mapa',
                'graficas' => 'grafico',
                'cuadros' => 'cuadro',
                'esquemas' => 'esquema',
                'fotografias' => 'fotografia',
                'resultados' => 'resultados'
            ];

            $tiposActualizados = [];
            foreach ($tiposMap as $tipoInput => $tipoEnum) {
                // Verificar si hay archivos nuevos para este tipo
                if (isset($_FILES[$tipoInput]) && is_array($_FILES[$tipoInput]['name'])) {
                    // Verificar que al menos un archivo sea válido
                    foreach ($_FILES[$tipoInput]['error'] as $error) {
                        if ($error === UPLOAD_ERR_OK) {
                            $tiposActualizados[] = $tipoEnum;
                            break;
                        }
                    }
                }
            }

            // Solo eliminar archivos de los tipos que se están actualizando
            if (!empty($tiposActualizados)) {
                $archivosExistentes = $this->glosaArchivos
                    ->where('id_glosa_gobierno', $id_glosa_gobierno)
                    ->whereIn('tipo_archivo', $tiposActualizados)
                    ->findAll();

                foreach ($archivosExistentes as $archivo) {
                    // Construir la ruta física del archivo desde la ruta relativa
                    $rutaFisica = WRITEPATH . $archivo['ruta_archivo'];

                    if (file_exists($rutaFisica)) {
                        if (unlink($rutaFisica)) {
                            $archivosEliminados[] = $rutaFisica;
                        } else {
                            log_message('warning', "No se pudo eliminar el archivo: {$rutaFisica}");
                        }
                    }

                    // Eliminar registro en BD
                    $this->glosaArchivos->delete($archivo['id_archivo']);
                }

                log_message('info', "Eliminados archivos de tipos: " . implode(', ', $tiposActualizados));
            }

            // Subir nuevos archivos
            $archivosGuardados = $this->procesarArchivosGlosa($id_glosa_gobierno);

            // Completar transacción
            $db->transComplete();

            if ($db->transStatus() === false) {
                throw new \Exception('La transacción de base de datos falló');
            }

            log_message('info', "Glosa #{$id_glosa_gobierno} actualizada exitosamente por usuario #{$id_usuario}");

            // Mensaje de éxito informativo
            $mensaje = 'Glosa actualizada correctamente';
            if (!empty($tiposActualizados)) {
                $mensaje .= ' con ' . count($archivosGuardados) . ' archivo(s) actualizado(s)';
            }

            return redirect()->to("/Scii/glosa/{$id_glosa_gobierno}")
                ->with('success', $mensaje);

        } catch (\Exception $e) {
            // Rollback
            if ($db->transStatus() !== false) {
                $db->transRollback();
            }

            // Limpiar archivos nuevos si se subieron
            if (!empty($archivosGuardados)) {
                $this->limpiarArchivos($archivosGuardados);
            }

            // Log del error
            log_message('error', "Error al actualizar glosa #{$id_glosa_gobierno}: " . $e->getMessage());
            log_message('error', 'Stack trace: ' . $e->getTraceAsString());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Error al actualizar la glosa: ' . $e->getMessage());
        }
    }

    /**
     * Procesar y guardar archivos de la glosa
     * @return array Rutas de archivos guardados
     */
    private function procesarArchivosGlosa($glosaId)
    {
        // Mapeo entre nombres de inputs (plural) y valores ENUM de BD (singular)
        $tiposMap = [
            'mapas' => 'mapa',
            'graficas' => 'grafico',
            'cuadros' => 'cuadro',
            'esquemas' => 'esquema',
            'fotografias' => 'fotografia',
            'resultados' => 'resultados'
        ];

        $archivosGuardados = [];
        $orden = 1;

        foreach ($tiposMap as $tipoInput => $tipoEnum) {
            // Verificar si hay archivos para este tipo
            if (isset($_FILES[$tipoInput]) && is_array($_FILES[$tipoInput]['name'])) {
                $fileCount = count($_FILES[$tipoInput]['name']);

                for ($i = 0; $i < $fileCount; $i++) {
                    // Verificar que el archivo existe y no tiene errores
                    if ($_FILES[$tipoInput]['error'][$i] === UPLOAD_ERR_OK) {

                        // Tipos permitidos
                        $allowedTypes = [
                            'image/jpeg',
                            'image/jpg',
                            'image/png',
                            'image/gif',
                            'image/webp',

                            'application/pdf',

                            'application/zip',
                            'application/x-zip-compressed',
                            'application/x-zip',
                            'application/vnd.rar',
                            'application/x-rar',
                            'application/x-rar-compressed',                            

                            'application/vnd.ms-excel',
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',

                            'application/msword',
                            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',

                            'application/vnd.ms-powerpoint',
                            'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                        ];

                        $maxSize = 10 * 1024 * 1024; // 10MB

                        // Obtener información del archivo desde $_FILES
                        $clientName = $_FILES[$tipoInput]['name'][$i];
                        $tmpName = $_FILES[$tipoInput]['tmp_name'][$i];
                        // $fileMimeType = $_FILES[$tipoInput]['type'][$i];
                        $fileSize = $_FILES[$tipoInput]['size'][$i];
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $fileMimeType = finfo_file($finfo, $tmpName);
                        finfo_close($finfo);

                        if (!in_array($fileMimeType, $allowedTypes)) {
                            throw new \Exception("Tipo de archivo no permitido: {$clientName} (tipo: {$fileMimeType})");
                        }
                        if ($fileSize > $maxSize) {
                            throw new \Exception("Archivo demasiado grande: {$clientName} (" . round($fileSize / 1024 / 1024, 2) . "MB)");
                        }

                        // Preparar nombres y datos
                        $extension = pathinfo($clientName, PATHINFO_EXTENSION);
                        $nombreOriginal = $clientName;
                        $tamanioKB = round($fileSize / 1024, 2);
                        $newName = uniqid() . '_' . bin2hex(random_bytes(10)) . '.' . $extension;

                        // Definir ruta relativa y absoluta
                        $rutaRelativa = "uploads/glosas/$glosaId/$tipoInput/";
                        $rutaAbsoluta = WRITEPATH . $rutaRelativa;

                        // Crear directorio si no existe
                        if (!is_dir($rutaAbsoluta)) {
                            if (!mkdir($rutaAbsoluta, 0755, true)) {
                                throw new \Exception("No se pudo crear el directorio: {$rutaAbsoluta}");
                            }
                        }

                        // Mover archivo
                        $rutaCompletaAbsoluta = $rutaAbsoluta . $newName;
                        $rutaCompletaRelativa = $rutaRelativa . $newName;

                        if (!move_uploaded_file($tmpName, $rutaCompletaAbsoluta)) {
                            throw new \Exception("Error al mover el archivo: {$nombreOriginal}");
                        }

                        // Verificar que se movió
                        if (!file_exists($rutaCompletaAbsoluta)) {
                            throw new \Exception("El archivo no existe después de moverlo: {$rutaCompletaAbsoluta}");
                        }

                        // Guardar registro en BD con ruta relativa
                        $archivoData = [
                            'id_glosa_gobierno' => $glosaId,
                            'tipo_archivo' => $tipoEnum,
                            'nombre_archivo' => $newName,
                            'nombre_original' => $nombreOriginal,
                            'ruta_archivo' => $rutaCompletaRelativa,
                            'extension' => $extension,
                            'tamanio_kb' => $tamanioKB,
                            'mime_type' => $fileMimeType,
                            'orden' => $orden++,
                            'estado' => 'activo'
                        ];

                        $archivoInsertResult = $this->glosaArchivos->insert($archivoData);

                        if ($archivoInsertResult === false) {
                            throw new \Exception(
                                "Error al registrar archivo en BD: {$nombreOriginal} - " . json_encode($this->glosaArchivos->errors()));
                        }

                        // Guardar referencia física para limpieza en caso de error (usar ruta absoluta)
                        $archivosGuardados[] = $rutaCompletaAbsoluta;
                    }
                }
            }
        }

        return $archivosGuardados;
    }
    
    public function obtenerComentariosGlosa()
    {
        // Validar sesión
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }

        // Validar permisos para glosa
        $usuario = $this->usuarios->where([
            'id_usuario'  => $this->session->id_usuario,
            'loadglosa' => 1, 
            'glosa'     => 1  
        ])->first();

        if (!$usuario) {
            return redirect()->to(base_url('scii/inicio/'))
                ->with('mensaje', 'No tienes acceso a esta sección.');
        }

        $id_glosa_gobierno = $this->request->getGet('id_glosa_gobierno');
        $campo_referencia  = $this->request->getGet('campo_referencia');

        if (empty($id_glosa_gobierno)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'ID de glosa requerido'
            ]);
        }

        $db = \Config\Database::connect();
        // $builder = $db->table('glosa_comentarios');
        // $builder->select('glosa_comentarios.*, usuarios.nombre_s, usuarios.apellido_p, usuarios.apellido_m');
        // $builder->join('usuarios', 'usuarios.id_usuario = glosa_comentarios.id_usuario', 'left');
        // $builder->where('glosa_comentarios.id_glosa_gobierno', $id_glosa_gobierno);

        // if (!empty($campo_referencia)) {
        //     $builder->where('glosa_comentarios.campo_referencia', $campo_referencia);
        // }

        // $builder->orderBy('glosa_comentarios.created_at', 'DESC');
        // $comentarios = $builder->get()->getResultArray();
        $sql = "
            SELECT gc.*, u.nombre_s, u.apellido_p, u.apellido_m
            FROM glosa_comentarios gc
            LEFT JOIN usuarios u ON u.id_usuario = gc.id_usuario
            INNER JOIN (
                SELECT campo_referencia, MAX(updated_at) AS max_updated
                FROM glosa_comentarios
                WHERE id_glosa_gobierno = ?
                GROUP BY campo_referencia
            ) ultimos
            ON gc.campo_referencia = ultimos.campo_referencia
            AND gc.updated_at = ultimos.max_updated
            WHERE gc.id_glosa_gobierno = ?
        ";

        $query = $db->query($sql, [$id_glosa_gobierno, $id_glosa_gobierno]);
        $comentarios = $query->getResultArray();
        
        return $this->response->setJSON([
            'success' => true,
            'comentarios' => $comentarios
        ]);
    }

    public function getGlosas()
    {
        // Validar sesión
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }

        // Validar permisos para glosa
        $usuario = $this->usuarios->where([
            'id_usuario'  => $this->session->id_usuario,
            'loadglosa' => 1,
            'glosa'     => 1 
        ])->first();

        if (!$usuario) {
            return redirect()->to(base_url('scii/inicio/'))
                ->with('mensaje', 'No tienes acceso a esta sección.');
        }

        $db = \Config\Database::connect();

        // Unidad del usuario
        $unidadId = $this->session->id_unidad;
        $unidad = $this->unidades
            ->where('id_unidad', $unidadId)
            ->first();

        // Glosa activa
        $glosaActiva = $this->glosaGestion
            ->where('estado', 'abierta')
            ->first();

        $idGlosa = $glosaActiva['id_glosa'] ?? null;

        // Estadísticas de usuarios de la unidad
        $builderUsuarios = $db->table('usuarios');
        $builderUsuarios->select('
            usuarios.id_unidad,
            COUNT(usuarios.id_usuario) AS total_usuarios,
            SUM(CASE WHEN usuarios.glosa = 1 THEN 1 ELSE 0 END) AS usuarios_con_glosa,
            SUM(CASE WHEN usuarios.loadglosa = 1 THEN 1 ELSE 0 END) AS usuarios_activos
        ');
        $builderUsuarios->where('usuarios.activo', 1);
        $builderUsuarios->where('usuarios.id_unidad', $unidadId);
        $builderUsuarios->groupBy('usuarios.id_unidad');

        $estadisticasUsuarios = $builderUsuarios->get()->getResultArray();

        // Obtener glosas de la unidad (si hay glosa activa)
        $glosasFormateadas = [];

        if ($idGlosa && $unidad) {
            $builderGlosas = $db->table('glosas_gobierno');
            $builderGlosas->select('
                glosas_gobierno.id_glosa_gobierno,
                glosas_gobierno.id_unidad,
                glosas_gobierno.id_usuario,
                glosas_gobierno.tema,
                glosas_gobierno.estado,
                glosas_gobierno.created_at
            ');
            $builderGlosas->where('glosas_gobierno.id_glosa', $idGlosa);
            $builderGlosas->where('glosas_gobierno.id_unidad', $unidadId);
            $builderGlosas->orderBy('glosas_gobierno.created_at', 'DESC');

            $glosasDB = $builderGlosas->get()->getResultArray();

            foreach ($glosasDB as $glosa) {
                $glosasFormateadas[] = [
                    'id_glosa_gobierno' => $glosa['id_glosa_gobierno'],
                    'id_unidad'         => $glosa['id_unidad'],
                    'id_usuario'        => $glosa['id_usuario'],
                    'tema'              => $glosa['tema'],
                    'estado'            => $glosa['estado'],
                    'fecha'             => $glosa['created_at'],
                ];
            }
        }

        if ($unidad) {
            $unidad['total_glosas'] = count($glosasFormateadas);
        }

        return $this->response->setJSON([
            'unidad' => $unidad,
            'glosas' => $glosasFormateadas,
            'glosaActiva' => $glosaActiva
        ]);
    }
    
    public function guardarComentarioGlosa()
    {
        // Validar sesión
        if (!isset($this->session->id_usuario)) {
            return $this->response->setJSON(['success' => false, 'message' => 'Sesión no válida']);
        }

        // Obtener datos del POST
        $id_glosa_gobierno = $this->request->getPost('id_glosa_gobierno');
        $campo_referencia  = $this->request->getPost('campo_referencia');
        $comentario        = $this->request->getPost('comentario');
        $tipo              = $this->request->getPost('tipo') ?? 'observacion';

        // Validar datos requeridos
        if (empty($id_glosa_gobierno) || empty($campo_referencia)) {
            return $this->response->setJSON(['success' => false, 'message' => 'Datos incompletos']);
        }

        // Validar que la glosa existe
        $glosa = $this->glosasGobierno->find($id_glosa_gobierno);
        if (!$glosa) {
            return $this->response->setJSON(['success' => false, 'message' => 'Glosa no encontrada']);
        }

        // Validar que la glosa está en estado "observado" para poder editar comentarios
        if ($glosa['estado'] !== 'observado') {
            $mensaje = 'Los comentarios solo pueden ser editados cuando la glosa está en estado "observado".';
            
            if ($glosa['estado'] === 'enviado') {
                $mensaje = 'La glosa ya ha sido enviada. No se pueden editar comentarios.';
            } elseif ($glosa['estado'] === 'aprobado') {
                $mensaje = 'La glosa ya ha sido aprobada. No se pueden editar comentarios.';
            }
            
            return $this->response->setJSON([
                'success' => false, 
                'message' => $mensaje
            ]);
        }

        // Verificar si ya existe un comentario para este campo y este usuario
        $comentarioExistente = $this->glosaComentarios
            ->where('id_glosa_gobierno', $id_glosa_gobierno)
            ->where('campo_referencia', $campo_referencia)
            ->where('id_usuario', $this->session->id_usuario)
            ->first();

        $usuario = $this->usuarios
            ->where('id_usuario', $this->session->id_usuario)
            ->first();

        $nombreAutor = 'Usuario';
        if ($usuario) {
            // Puedes ajustar el formato como quieras
            $nombreAutor = trim(
                ($usuario['nombre_s'] ?? '') . ' ' .
                ($usuario['apellido_p'] ?? '') . ' ' .
                ($usuario['apellido_m'] ?? '')
            );
        }
        try {
            if ($comentarioExistente) {
                // Actualizar comentario existente
                if (empty($comentario)) {
                    // Si el comentario está vacío, eliminarlo
                    $this->glosaComentarios->delete($comentarioExistente['id_comentario']);

                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'Comentario eliminado',
                        'action'  => 'deleted'
                    ]);
                } else {
                    // Actualizar
                    $comentarioFinal = $nombreAutor . ': ' . trim($comentario);
                    $this->glosaComentarios->update($comentarioExistente['id_comentario'], [
                        'comentario' => $comentarioFinal,
                        'tipo'       => $tipo,
                        'updated_at' => date('Y-m-d H:i:s')
                    ]);

                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'Comentario actualizado',
                        'action'  => 'updated',
                        'id_comentario' => $comentarioExistente['id_comentario']
                    ]);
                }
            } else {
                // Crear nuevo comentario solo si hay texto
                if (!empty($comentario)) {
                    $comentarioFinal = $nombreAutor . ': ' . trim($comentario);
                    $id_comentario = $this->glosaComentarios->insert([
                        'id_glosa_gobierno' => $id_glosa_gobierno,
                        'id_usuario'        => $this->session->id_usuario,
                        'campo_referencia'  => $campo_referencia,
                        'comentario'        => $comentarioFinal,
                        'tipo'              => $tipo,
                        'estado'            => 'activo',
                        'created_at'        => date('Y-m-d H:i:s')
                    ]);

                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'Comentario guardado',
                        'action'  => 'created',
                        'id_comentario' => $id_comentario
                    ]);
                }
            }

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Sin cambios',
                'action'  => 'none'
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Error al guardar: ' . $e->getMessage()
            ]);
        }
    }

}
