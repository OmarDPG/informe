<?php

namespace App\Controllers;

use App\Libraries\DataTable;
use CodeIgniter\Files\File;
use App\Models\UnidadesModel;
use App\Models\CategoriasModel;
use App\Models\UsuariosModel;
use App\Models\PeriodosModel;
use App\Models\RespuestasModel;
use App\Models\CargasModel;

use App\Models\InformesGobiernoModel;
use App\Models\InformeArchivosModel;
use App\Models\InformeComentariosModel;

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

use CodeIgniter\API\ResponseTrait;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Administrador extends BaseController
{
    protected $usuarios, $logs, $session, $reglasUnidad, $periodos, $cargas,
        $unidades, $reglasUsuario, $reglasPeriodo, $reglasUsuarioEdi, $categorias, $respuestas,
        $reglasCargaBas, $reglasCargaPTCI, $reglasCargaPTAR, $reglasCargaCE, $glosa,
        $periodosAnuales, $etapas, $informesGobierno, $informeArchivos, $informeComentarios,
        $ejes, $estrategias, $lineasAccion, $objetivos, $tematicas,
        $programaSectorialSocioambiental, $ejesSocioambiental, $estrategiasSocioambiental, $lineasAccionSocioambiental, $objetivosSocioambiental, $tematicasSocioambiental,
        $programaSectorialAgua, $ejesAgua, $estrategiasAgua, $lineasAccionAgua, $objetivosAgua, $tematicasAgua,
        $odsMetas, $odsObjetivos, $odsTemas;
    public function __construct()
    {
        $this->unidades = new UnidadesModel();
        $this->usuarios = new UsuariosModel();
        $this->periodos = new PeriodosModel();
        $this->categorias = new CategoriasModel();
        $this->respuestas = new RespuestasModel();
        $this->cargas = new CargasModel();
        $this->informesGobierno = new InformesGobiernoModel();
        $this->informeArchivos = new InformeArchivosModel();
        $this->informeComentarios = new InformeComentariosModel();

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
        $this->reglasUnidad = [
            'descripcion' => [
                'rules' => 'required|is_unique[unidades.descripcion, id_unidad,{id_unidad}]',
                'errors' => [
                    'required' => 'El campo descripción es obligatorio.',
                    'is_unique' => 'Unidad administrativa registrada.',
                ]
            ],
            'determinante' => [
                'rules' => 'required|is_unique[unidades.determinante, id_unidad,{id_unidad}]',
                'errors' => [
                    'required' => 'El campo determinante es obligatorio.',
                    'is_unique' => 'Determinante registrada.',
                ]
            ]
        ];
        $this->reglasUsuario = [
            'usuario' => [
                'rules' => 'required|is_unique[usuarios.usuario, id_usuario,{id_usuario}]',
                'errors' => [
                    'required' => 'El campo usuario es obligatorio.',
                    'is_unique' => 'Nombre de usuario registrado.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo contraseña es obligatorio.'
                ]
            ],
            'unidades' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.'
                ]
            ],
            'categorias' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.'
                ]
            ],
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
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'El campo apellido materno es obligatorio.',
                    'valid_email' => 'Correo no válido'
                ]
            ]
        ];
        $this->reglasPeriodo = [
            'fecha_ini' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'El campo fecha de inicio es obligatorio.',
                    'valid_date' => 'Formato de fecha no válido.'
                ]
            ],
            'fecha_fin' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'El campo fecha de fin es obligatorio.',
                    'valid_date' => 'Formato de fecha no válido.'
                ]
            ],
        ];
        $this->reglasUsuarioEdi = [
            'usuario' => [
                'rules' => 'required|is_unique[usuarios.usuario, id_usuario,{id_usuario}]',
                'errors' => [
                    'required' => 'El campo usuario es obligatorio.',
                    'is_unique' => 'Nombre de usuario registrado.'
                ]
            ],
            'unidades' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.'
                ]
            ],
            'categorias' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.'
                ]
            ],
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
        $this->reglasCargaBas = [
            'year' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => 'El campo fecha de inicio es obligatorio.',
                ]
            ],
            'tem' => [
                'rules' => 'required|is_natural',
                'errors' => [
                    'required' => 'El campo tema es obligatorio.',
                ]
            ],
        ];
        $this->reglasCargaPTCI = [
            'unidades' => [
                'rules' => 'required|is_natural',
                'errors' => [
                    'required' => 'El campo unidades es obligatorio.',
                ]
            ],
            'fecha_ini' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'El campo fecha de inicio es obligatorio.',
                    'valid_date' => 'Formato de fecha no válido.'
                ]
            ],
            'fecha_fin' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'El campo fecha de fin es obligatorio.',
                    'valid_date' => 'Formato de fecha no válido.'
                ]
            ],
            'fact_acc' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'El campo acción de mejora es obligatorio.',
                ]
            ],
            'med_req' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'El campo medio de verificación es obligatorio.',
                ]
            ],
        ];
        $this->reglasCargaPTAR = [
            'unidades' => [
                'rules' => 'required|is_natural',
                'errors' => [
                    'required' => 'El campo unidades es obligatorio.',
                ]
            ],
            'fecha_ini' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'El campo fecha de inicio es obligatorio.',
                    'valid_date' => 'Formato de fecha no válido.'
                ]
            ],
            'fecha_fin' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'El campo fecha de fin es obligatorio.',
                    'valid_date' => 'Formato de fecha no válido.'
                ]
            ],
            'fact_acc' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'El campo factores de riesgo es obligatorio.',
                ]
            ],
            'med_req' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'El campo medio de verificación es obligatorio.',
                ]
            ],
            'descrip' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'El campo descripción es obligatorio.',
                ]
            ],
        ];
        $this->reglasCargaCE = [
            'unidadesB' => [
                'rules' => 'required|is_natural',
                'errors' => [
                    'required' => 'El campo unidades es obligatorio.',
                ]
            ],
            'fact_acc' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'El campo factores de riesgo es obligatorio.',
                ]
            ],
            'med_req' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'El campo medio de verificación es obligatorio.',
                ]
            ],
            'descrip' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'El campo descripción es obligatorio.',
                ]
            ],
        ];
    }
    public function inicio()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Documentos / Inicio';
        $datos = ['usuario' => $this->session->usuario, 'current' => $current];
        echo view('scii/admin/inicio', $datos);
        echo view('scii/admin/navbar');
    }
    public function normatividad()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Documentos / Normatividad';
        $dir = 'files/normatividad/';
        $map = directory_map($dir);

        $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'map' => $map];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/normatividad');
        echo view('scii/admin/navbar');
    }
    public function upload()
    {
        //buscar una manera para validar por json
        $validationRule = [
            'userfile' => [
                'label' => 'File',
                'rules' => [
                    'ext_in[userfile,pdf]',
                    'mime_in[userfile,application/pdf]',
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
            $filepath = base_url() . 'uploads/' . $img->store('../../public/files/normatividad/', $img->getName());
            $data = ['uploaded_fileinfo' => new File($filepath)];

            //return redirect()->to(base_url().'/administrador/normatividad');

            $res['datos'] = $this->cargaDocs();
            $res['error'] = $error;
            return json_encode($res);
        }

        $res['error'] = 'Documento movido';
        return json_encode($res);
    }
    public function cargaDocs()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $dir = 'files/normatividad/';
        $map = directory_map($dir);
        $fila = '';
        $numFila = 0;
        foreach ($map as $mp) {
            $numFila++;
            $fila .= "<tr id='fila" . $numFila . "'>";
            $fila .= '<td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap"><i class="fa-solid fa-file"></i> ' . $mp . '</td>';
            $fila .= '<td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">' . date("d/m/Y H:i:s", filemtime('files/normatividad/' . $mp)) . '</td>';
            $fila .= '<td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">' . pathinfo('files/normatividad/' . $mp, PATHINFO_EXTENSION) . '</td>';
            $fila .= '<td class="px-4 py-4 text-sm whitespace-nowrap">';
            $nmp = "'" . $mp . "'";
            $fila .= '<div class="flex items-center gap-x-6">
                    <button target="_blank" onclick="fileDelete(' . $nmp . ')" class="text-gray-500 transition-colors duration-200 hover:text-red-500 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> </svg>
                    </button>
                    <a href="' . base_url() . '/files/normatividad/' . $mp . '" download class="text-gray-500 transition-colors duration-200 hover:text-emerald-500 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16"> <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/> </svg>
                    </a>
                </div>';
            $fila .= '</td>';
            $fila .= '</tr>';
        }
        return $fila;
    }
    public function cargaDocsM($year)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $dir = 'files/materiales/' . $year;
        $map = directory_map($dir);
        $fila = '';
        $numFila = 0;
        foreach ($map as $mp) {
            $sw = ((explode('_', $mp)[1] == 0) ? 'Control Interno' : ((explode('_', $mp)[1] == 1) ? 'Administración de Riesgos' : 'COCODI'));
            $numFila++;
            $fila .= "<tr id='fila" . $numFila . "'>";
            $fila .= '<td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap"><i class="fa-solid fa-file"></i> ' . (explode('.', explode('_', $mp)[2])[0]) . '</td>';
            $fila .= '<td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">' . date("d/m/Y H:i:s", filemtime('files/materiales/' . $year . '/' . $mp)) . '</td>';
            $fila .= '<td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap"><p class="py-2 px-1 text-center shadow-md no-underline rounded-full bg-rose-800 text-white font-sans font-semibold text-sm border-blue focus:outline-none active:shadow-none">' . $sw . '</p></td>';
            $fila .= '<td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">' . pathinfo('files/materiales/' . $year . '/' . $mp, PATHINFO_EXTENSION) . '</td>';
            $fila .= '<td class="px-4 py-4 text-sm whitespace-nowrap">';
            $nmp = "'" . $mp . "'";
            $fila .= '<div class="flex items-center gap-x-6">
                    <button target="_blank" onclick="fileDelete(' . $year . ',' . $nmp . ')" class="text-gray-500 transition-colors duration-200 hover:text-red-500 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> </svg>
                    </button>
                    <a href="' . base_url() . '/files/materiales/' . $year . '/' . $mp . '" download class="text-gray-500 transition-colors duration-200 hover:text-emerald-500 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16"> <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/> </svg>
                    </a>
                </div>';
            $fila .= '</td>';
            $fila .= '</tr>';
        }
        $files = glob('files/materiales/' . $year . '/*'); // get all file names
        foreach ($files as $file) { // iterate files
            if (is_file($file) && pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                unlink($file); // delete file
            }
        }
        return $fila;
    }
    public function cargaDocsC($id)
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
    public function delNormatividad($file)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $error = '';
        if (file_exists('files/normatividad/' . $file)) {
            unlink('files/normatividad/' . $file);
            $res['datos'] = $this->cargaDocs();
            $res['error'] = $error;
            return json_encode($res);
        } else {
            $res['error'] = 'No se encontró el archivo';
            return json_encode($res);
        }
        //return redirect()->to(base_url().'/administrador/normatividad');

    }
    public function delMaterial($year, $file)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $error = '';
        if (file_exists('files/materiales/' . $year . '/' . $file)) {
            unlink('files/materiales/' . $year . '/' . $file);
            $res['datos'] = $this->cargaDocsM($year);
            $res['error'] = $error;
            return json_encode($res);
        } else {
            $res['error'] = 'No se encontró el archivo';
            return json_encode($res);
        }
        //return redirect()->to(base_url().'/administrador/normatividad');

    }
    public function herramientas()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Documentos / Herramientas';

        $dir = 'files/herramientas/';
        $map = directory_map($dir);
        $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'map' => $map];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/herramientas');
        echo view('scii/admin/navbar');
    }
    public function uploadH($i)
    {
        $validationRule = [
            'userfile' . $i => [
                'label' => 'File' . $i,
                'rules' => [
                    'required',
                    'uploaded[userfile' . $i . ']',
                    'ext_in[userfile' . $i . ',pdf]',
                    'mime_in[userfile' . $i . ',application/pdf]',
                ],
            ],
        ];

        $img = $this->request->getFile('userfile' . $i);

        if (!$img->hasMoved()) {
            $files = glob('files/herramientas/' . $i . '/*'); // get all file names
            foreach ($files as $file) { // iterate files
                if (is_file($file)) {
                    unlink($file); // delete file
                }
            }
            //$filepath = WRITEPATH . 'uploads/' . $img->store();
            $filepath = base_url() . 'uploads/' . $img->store('../../public/files/herramientas/' . $i . '/', $i . '.' . pathinfo($img->getName(), PATHINFO_EXTENSION));
            $data = ['uploaded_fileinfo' => new File($filepath)];
            $files = glob('files/herramientas/' . $i . '/*');
            foreach ($files as $file) { // iterate files
                if (is_file($file) && pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                    unlink($file); // delete file
                }
            }
            return redirect()->to(base_url() . '/administrador/herramientas');
        }

        $current = 'Documentos / Normatividad';
        $dir = 'files/normatividad/';
        $map = directory_map($dir);

        $datos = ['usuario' => $this->session->usuario, 'errors' => 'The file has already been moved.', 'current' => $current, 'map' => $map];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/normatividad');
        echo view('scii/admin/navbar');
    }
    public function material($y = null)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $year = $y ? (($y >= 2023 && $y <= date('Y')) ? $y : date('Y')) : null;

        $files = glob('files/materiales/' . $year . '/*'); // get all file names
        foreach ($files as $file) { // iterate files
            if (is_file($file) && pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                unlink($file); // delete file
            }
        }
        if (!$year) {
            $dir = 'files/materiales/';
            $map = directory_map($dir);
            for ($i = 0; $i < count($map); $i++) {
                $files = glob('files/materiales/' . $i . '/*'); // get all file names
                foreach ($files as $file) { // iterate files
                    if (is_file($file) && pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                        unlink($file); // delete file
                    }
                }
            }
            $map = directory_map($dir);
            $current = 'Documentos / Material';
            $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'map' => $map];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/material');
            echo view('scii/admin/navbar');
        } else {
            $current = 'Documentos / Material / ' . $year;
            $dir = 'files/materiales/' . $year;
            $map = directory_map($dir);
            //print_r($map);
            $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'map' => $map, 'year' => $year];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/materialC');
            echo view('scii/admin/navbar');
        }
    }
    public function uploadM($i)
    {
        $img = $this->request->getFile('userfile' . $i);
        if (!$img->hasMoved()) {
            $files = glob('files/materiales/' . $i . '/*'); // get all file names
            foreach ($files as $file) { // iterate files
                if (is_file($file)) {
                    unlink($file); // delete file
                }
            }
            $filepath = base_url() . 'uploads/' . $img->store('../../public/files/materiales/' . $i . '/', $i . '.' . pathinfo($img->getName(), PATHINFO_EXTENSION));
            $data = ['uploaded_fileinfo' => new File($filepath)];
            $files = glob('files/materiales/' . $i . '/*');
            $det = isset($files[0]) ? (pathinfo($files[0], PATHINFO_EXTENSION)) : '';
            $res['determinante'] = $det;
            return pathinfo($img->getName(), PATHINFO_EXTENSION) ? (redirect()->to(base_url() . '/administrador/material')) : json_encode($res);
        }
    }
    public function uploadMY()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if ($this->request->getMethod() == "post") {
            $img = $this->request->getFile('userfile');
            //print_r($img);
            $nombre = (test_input($this->request->getPost('nombre')));
            $seccion = (test_input($this->request->getPost('seccion')));
            $year = (test_input($this->request->getPost('year')));
            $nameF = $year . '_' . $seccion . '_' . $nombre . '.' . pathinfo($img->getName(), PATHINFO_EXTENSION);
            $files = glob('files/materiales/' . $year . '/*'); // get all file names
            //print_r($files);
            $error = '';
            foreach ($files as $file) { // iterate files
                if (is_file($file) && (pathinfo($file, PATHINFO_EXTENSION) == 'html') || ('files/materiales/' . $year . '/' . $nameF == $file)) {
                    unlink($file); // delete file
                }
            }
            if (!$img->hasMoved()) {
                $filepath = base_url() . 'uploads/' . $img->store('../../public/files/materiales/' . $year . '/', $nameF);
                $data = ['uploaded_fileinfo' => new File($filepath)];
                $res['datos'] = $this->cargaDocsM($year);
                $res['error'] = $error;
                return json_encode($res);
            }
            $res['datos'] = $this->cargaDocsM($year);
            $res['error'] = $error;
            return json_encode($res);
        }
    }
    public function altaUsuario($edi = null)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = isset($edi) ? 'Usuarios / Edición' : 'Usuarios / Alta';
        $categorias = $this->categorias->findAll();
        $unidades = $this->unidades->where('activo', 1)->find();
        if (isset($edi))
            $ban = $this->usuarios->where(['id_usuario' => $edi])->first();
        $datos = isset($edi) ? ['usuario' => $this->session->usuario, 'current' => $current, 'unidades' => $unidades, 'edi' => $ban, 'categorias' => $categorias] : ['usuario' => $this->session->usuario, 'current' => $current, 'unidades' => $unidades, 'categorias' => $categorias];

        echo view('scii/admin/header', $datos);
        echo view('scii/admin/altaUsuario', $datos);
        echo view('scii/admin/navbar', $datos);
    }
    public function usuarios()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Usuarios / Gestión';

        $datos = ['usuario' => $this->session->usuario, 'current' => $current];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/gestion');
        echo view('scii/admin/navbar');
    }
    public function registraUsuario()
    {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if ((!isset($this->session->id_usuario))) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        if ($this->request->getMethod() == "post" && $this->validate($this->reglasUsuario)) {
            $date = date("Y-m-d H:i:s");
            $hash = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

            $categoria = test_input($this->request->getPost('categorias'));
            var_dump($categoria);

            $this->usuarios->save([
                'usuario' => test_input($this->request->getPost('usuario')),
                'nombre_s' => test_input($this->request->getPost('nombre_s')),
                'apellido_p' => test_input($this->request->getPost('apellido_p')),
                'apellido_m' => test_input($this->request->getPost('apellido_m')),
                'correo' => test_input($this->request->getPost('email')),
                'id_unidad' => test_input($this->request->getPost('unidades')),
                'id_categoria' => test_input($this->request->getPost('categorias')),
                'adm' => $this->request->getPost('adm') ? 1 : 0,
                'admGen' => $this->request->getPost('admGen') ? 1 : 0,
                'loadinforme' => $this->request->getPost('loadinforme') ? 1 : 0,
                'loadglosa' => $this->request->getPost('loadglosa') ? 1 : 0,
                'password' => $hash,
                'fecha_alta' => $date
            ]);
            return redirect()->to(base_url() . '/administrador/usuarios');
        } else {
            $current = 'Usuarios / Alta';
            $unidades = $this->unidades->where('activo', 1)->find();
            $categorias = $this->categorias->findAll();
            $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator, 'unidades' => $unidades, 'categorias' => $categorias];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/altaUsuario');
            echo view('scii/admin/navbar');
        }
    }
    public function disUsuario($id)
    {
        if ((!isset($this->session->id_usuario))) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $ban = $this->usuarios->where(['id_usuario' => $id])->first();

        $res['actualizado'] = false;
        if ($this->usuarios->update($id, ['activo' => $ban['activo'] == 1 ? 0 : 1])) {
            $res['actualizado'] = true;
            $ban = $this->usuarios->where(['id_usuario' => $id])->first();
            $res['nd'] = $ban['activo'] == 1 ? '<span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
					Activo
					</span>' : '<span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full">
					Inactivo
					</span>';
        }

        echo json_encode($res);
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
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $categorias = $this->categorias->findAll();
        if ($this->request->getMethod() == "post" && $this->validate($this->reglasUsuarioEdi)) {
            $hash = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
            $this->usuarios->update(test_input($this->request->getPost('id_usuario')), [
                'usuario' => test_input($this->request->getPost('usuario')),
                'nombre_s' => test_input($this->request->getPost('nombre_s')),
                'apellido_p' => test_input($this->request->getPost('apellido_p')),
                'apellido_m' => test_input($this->request->getPost('apellido_m')),
                'correo' => test_input($this->request->getPost('email')),
                'id_unidad' => test_input($this->request->getPost('unidades')),
                'id_categoria' => test_input($this->request->getPost('categorias')),
                'adm' => $this->request->getPost('adm') ? 1 : 0,
                'admGen' => $this->request->getPost('admGen') ? 1 : 0,
                'loadinforme' => $this->request->getPost('loadinforme') ? 1 : 0,
                'loadglosa' => $this->request->getPost('loadglosa') ? 1 : 0

            ]);
            if ($this->request->getPost('password')) {
                $this->usuarios->update(test_input($this->request->getPost('id_usuario')), [
                    'password' => $hash,
                ]);
            }

            return redirect()->to(base_url() . '/administrador/usuarios');
        } else {
            $current = 'Usuarios / Modificación';
            $ban = $this->usuarios->where(['id_usuario' => $this->request->getPost('id_usuario')])->first();
            $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator, 'unidades' => $unidades, 'edi' => $ban, 'categorias' => $categorias];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/altaUsuario');
            echo view('scii/admin/navbar');
        }
    }
    public function getUsuarios()
    {
        $dataTable = new DataTable();
        // process($modelClass, $columns, $where = [])
        $response = $dataTable->process2('UsuariosModel', 'UnidadesModel', [
            [
                'name' => 'usuario'
            ],
            [
                'name' => 'descripcion'
            ],
            [
                'name' => 'nombre_s',
                'formatter' => 'nombre'
            ],
            [
                'name' => 'nombre_categoria'
            ],
            [
                'name' => 'usuarios.activo',
                'formatter' => 'activo'
            ],
            [
                'name' => 'adm',
                'formatter' => 'admin'
            ],
            [
                'name' => 'admGen',
                'formatter' => 'permisos'
            ],
            [
                'name' => 'id_usuario',
                'formatter' => 'action_links_respuesta'
            ],
            [
                'name' => 'fecha_ultimo_acceso'
            ],
            [
                'name' => 'apellido_m'
            ],
            [
                'name' => 'usuarios.id_unidad'
            ],
            [
                'name' => 'apellido_p'
            ]
        ]);
        /* return $this->setResponseFormat('json')->respond($response); */
        return json_encode($response);
    }
    public function altaUnidad($edi = null)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = isset($edi) ? 'Unidades / Edición' : 'Unidades / Alta';
        if (isset($edi))
            $ban = $this->unidades->where(['id_unidad' => $edi])->first();

        $datos = isset($edi) ? ['usuario' => $this->session->usuario, 'current' => $current, 'edi' => $ban] : ['usuario' => $this->session->usuario, 'current' => $current];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/altaUnidad');
        echo view('scii/admin/navbar');
    }
    public function Unidades()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Unidades / Gestión';
        $dir = 'files/normatividad/';
        //$map = directory_map($dir);
        $map = $this->unidades->findAll();

        $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'map' => $map];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/gestionUnidades');
        echo view('scii/admin/navbar');
    }
    public function registraUnidad()
    {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if ((!isset($this->session->id_usuario))) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        if ($this->request->getMethod() == "post" && $this->validate($this->reglasUnidad)) {
            $this->unidades->save([
                'descripcion' => test_input($this->request->getPost('descripcion')),
                'determinante' => test_input($this->request->getPost('determinante')),
            ]);
            return redirect()->to(base_url() . '/administrador/unidades');
        } else {
            $current = 'Unidades / Alta';
            $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/altaUnidad');
            echo view('scii/admin/navbar');
        }
    }
    public function disUnidad($id)
    {
        if ((!isset($this->session->id_usuario))) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $ban = $this->unidades->where(['id_unidad' => $id])->first();

        $res['actualizado'] = false;
        if ($this->unidades->update($id, ['activo' => $ban['activo'] == 1 ? 0 : 1])) {
            $this->usuarios->set('activo', 0)->where('id_unidad', $ban['id_unidad'])->update();
            $res['actualizado'] = true;
            $ban = $this->unidades->where(['id_unidad' => $id])->first();
            $res['nd'] = $ban['activo'] == 1 ? '<span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Activa</span>' : '<span class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Desactivada</span>';
        }

        echo json_encode($res);
    }
    public function actualizarUnidad()
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
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }

        if ($this->request->getMethod() == "post" && $this->validate($this->reglasUnidad)) {
            $this->unidades->update(test_input($this->request->getPost('id_unidad')), [
                'descripcion' => test_input($this->request->getPost('descripcion')),
                'determinante' => test_input($this->request->getPost('determinante')),
            ]);
            return redirect()->to(base_url() . '/administrador/unidades');
        } else {
            $current = 'Unidades / Modificación';
            $ban = $this->unidades->where(['id_unidad' => $this->request->getPost('id_unidad')])->first();
            $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator, 'edi' => $ban];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/altaUnidad');
            echo view('scii/admin/navbar');
        }
    }
    /* public function altaPeriodo($edi=null){
        if(!isset($this->session->id_usuario)){ return redirect()->to(base_url());}
        if((($this->session->adm)=='0')){ return redirect()->to(base_url().'/inicio/land');}
        $current=isset($edi)?'Periodos / Edición':'Periodos / Alta';        
        $unidades=$this->unidades->where('activo',1)->find();
        if(isset($edi))
            $ban=$this->periodos->where(['id_periodo'=>$edi])->first();
        $datos=isset($edi)?['usuario'=>$this->session->usuario, 'current'=>$current,'unidades'=>$unidades,'edi'=>$ban]:['usuario'=>$this->session->usuario, 'current'=>$current,'unidades'=>$unidades];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/altaPeriodo');
        echo view('scii/admin/navbar');
    } */
    public function registraPeriodo()
    {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if ((!isset($this->session->id_usuario))) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        if ($this->request->getMethod() == "post" && $this->validate($this->reglasPeriodo)) {
            if (test_input($this->request->getPost('fecha_ini')) >= test_input($this->request->getPost('fecha_fin'))) {
                $current = 'Periodos / Alta';
                $unidades = $this->unidades->where('activo', 1)->find();
                $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator, 'unidades' => $unidades];
                echo view('scii/admin/header', $datos);
                echo view('scii/admin/altaPeriodo');
                echo view('scii/admin/navbar');
            } else
                /* echo "Menor";
                echo $this->request->getPost('fecha_ini').'<br>';
                echo $this->request->getPost('fecha_fin').'<br>';
                echo $this->request->getPost('year').'<br>';
                echo $this->request->getPost('periodo').'<br>'; */
                $this->periodos->save([
                    'fecha_ini' => test_input($this->request->getPost('fecha_ini')),
                    'fecha_fin' => test_input($this->request->getPost('fecha_fin')),
                    'year' => test_input($this->request->getPost('year')),
                    'periodo' => test_input($this->request->getPost('periodo'))
                ]);
            return redirect()->to(base_url() . '/administrador/periodos');
        } else {
            $current = 'Periodos / Alta';
            $unidades = $this->unidades->where('activo', 1)->find();
            $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator, 'unidades' => $unidades];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/altaPeriodo');
            echo view('scii/admin/navbar');
        }
    }
    public function getYearPeriod($year)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $periodos['error'] = "";
        $list = $this->periodos->where(['activo' => 1, 'year' => $year])->findAll();
        $per = [0, 1, 2, 3];
        foreach ($list as $li) {
            if (($key = array_search($li['periodo'], $per)) !== false) {
                unset($per[$key]);
                $per = array_values($per);
            }
        }
        $periodos['datos'] = $per;

        echo json_encode($periodos);
    }
    public function getYearPeriodCharge($year)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $periodos['error'] = "";
        $list = $this->periodos->where(['activo' => 1, 'year' => $year])->findAll();
        $per = [];
        foreach ($list as $li) {
            /* if (($key = array_search($li['periodo'], $per)) == false) {
                unset($per[$key]);
                $per=array_values($per);
            } */
            $per[] = $li['periodo'];
        }
        $periodos['datos'] = $per;

        echo json_encode($periodos);
    }
    /* public function periodos(){
        if(!isset($this->session->id_usuario)){ return redirect()->to(base_url());}
        if((($this->session->adm)=='0')){ return redirect()->to(base_url().'/inicio/land');}
        $current='Periodos / Gestión';

        $datos=['usuario'=>$this->session->usuario, 'current'=>$current];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/gestionP');
        echo view('scii/admin/navbar');
    } */
    public function getPeriodos()
    {
        $dataTable = new DataTable();
        // process($modelClass, $columns, $where = [])
        $response = $dataTable->process('PeriodosModel', [
            [
                'name' => 'year'
            ],
            [
                'name' => 'periodo',
                'formatter' => 'periodo'
            ],
            [
                'name' => 'fecha_ini',
                'formatter' => 'dater'
            ],
            [
                'name' => 'fecha_fin',
                'formatter' => 'dater'
            ],
            [
                'name' => 'activo',
                'formatter' => 'activoP'
            ],
            [
                'name' => 'id_periodo'
            ],
        ]);
        /* return $this->setResponseFormat('json')->respond($response); */
        return json_encode($response);
    }
    public function actualizarPeriodo()
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
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }

        if ($this->request->getMethod() == "post" && $this->validate($this->reglasPeriodo)) {
            $this->periodos->update(test_input($this->request->getPost('id_periodo')), [
                'fecha_ini' => test_input($this->request->getPost('fecha_ini')),
                'fecha_fin' => test_input($this->request->getPost('fecha_fin')),
            ]);
            return redirect()->to(base_url() . '/administrador/periodos');
        } else {
            $current = 'Periodos / Modificación';
            $ban = $this->periodos->where(['id_periodo' => $this->request->getPost('id_periodo')])->first();
            $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator, 'edi' => $ban];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/altaPeriodo');
            echo view('scii/admin/navbar');
        }
    }
    public function altaEvidencia($edi = null)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = isset($edi) ? 'Evidencia / Edición' : 'Evidencia / Alta';
        $unidades = $this->unidades->where('activo', 1)->find();
        if (isset($edi))
            $ban = $this->cargas->where(['id_carga' => $edi])->first();
        $datos = isset($edi) ? ['usuario' => $this->session->usuario, 'current' => $current, 'unidades' => $unidades, 'edi' => $ban] : ['usuario' => $this->session->usuario, 'current' => $current, 'unidades' => $unidades];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/altaCarga');
        echo view('scii/admin/navbar');
    }
    public function registraCarga()
    {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        function restVal($validator)
        {
            $current = 'Evidencias / Alta';
            $unidades = new UnidadesModel();
            $unidad = $unidades->where('activo', 1)->find();
            $session = session();
            $datos = ['usuario' => $session->usuario, 'current' => $current, 'errors' => $validator, 'unidades' => $unidad];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/altaCarga');
            echo view('scii/admin/navbar');
        }
        if ((!isset($this->session->id_usuario))) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        if ($this->request->getMethod() == "post" && $this->validate($this->reglasCargaBas)) {
            switch ($this->request->getPost('tem')) {
                case 0:
                    if (test_input($this->request->getPost('fecha_ini')) >= test_input($this->request->getPost('fecha_fin'))) {
                        $current = 'Evidencias / Alta';
                        $unidades = $this->unidades->where('activo', 1)->find();
                        $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator, 'unidades' => $unidades];
                        echo view('scii/admin/header', $datos);
                        echo view('scii/admin/altaCarga');
                        echo view('scii/admin/navbar');
                    } else {
                        if ($this->validate($this->reglasCargaPTCI)) {
                            $this->cargas->save([
                                'id_unidad' => test_input($this->request->getPost('unidades')),
                                'year' => test_input($this->request->getPost('year')),
                                't_carga' => test_input($this->request->getPost('tem')),
                                'fecha_alta' => date('Y-m-d H:i:s'),
                                'accion_factor' => test_input($this->request->getPost('fact_acc')),
                                'fecha_inicio' => test_input($this->request->getPost('fecha_ini')),
                                'fecha_termino' => test_input($this->request->getPost('fecha_fin')),
                                'medio_verificacion' => test_input($this->request->getPost('med_req')),
                            ]);
                            return redirect()->to(base_url() . '/administrador/Evidencias');
                        } else {
                            restVal($this->validator);
                        }
                    }
                    break;
                case 1:
                    if (test_input($this->request->getPost('fecha_ini')) >= test_input($this->request->getPost('fecha_fin'))) {
                        $current = 'Evidencias / Alta';
                        $unidades = $this->unidades->where('activo', 1)->find();
                        $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator, 'unidades' => $unidades];
                        echo view('scii/admin/header', $datos);
                        echo view('scii/admin/altaCarga');
                        echo view('scii/admin/navbar');
                    } else {
                        if ($this->validate($this->reglasCargaPTAR)) {
                            $this->cargas->save([
                                'id_unidad' => test_input($this->request->getPost('unidades')),
                                'year' => test_input($this->request->getPost('year')),
                                't_carga' => test_input($this->request->getPost('tem')),
                                'fecha_alta' => date('Y-m-d H:i:s'),
                                'accion_factor' => test_input($this->request->getPost('fact_acc')),
                                'descripcion' => test_input($this->request->getPost('descrip')),
                                'fecha_inicio' => test_input($this->request->getPost('fecha_ini')),
                                'fecha_termino' => test_input($this->request->getPost('fecha_fin')),
                                'medio_verificacion' => test_input($this->request->getPost('med_req')),
                            ]);
                            return redirect()->to(base_url() . '/administrador/Evidencias');
                        } else {
                            restVal($this->validator);
                        }
                    }
                    break;
                case 2:
                    if ($this->validate($this->reglasCargaCE)) {
                        $this->cargas->save([
                            'id_unidad' => test_input($this->request->getPost('unidadesB')),
                            'year' => test_input($this->request->getPost('year')),
                            't_carga' => test_input($this->request->getPost('tem')),
                            'fecha_alta' => date('Y-m-d H:i:s'),
                            'accion_factor' => test_input($this->request->getPost('fact_acc')),
                            'descripcion' => test_input($this->request->getPost('descrip')),
                            'medio_verificacion' => test_input($this->request->getPost('med_req')),
                        ]);
                        return redirect()->to(base_url() . '/administrador/Evidencias');
                    } else {
                        restVal($this->validator);
                    }
                    break;
            }
        } else {
            $current = 'Evidencias / Alta';
            $unidades = $this->unidades->where('activo', 1)->find();
            $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator, 'unidades' => $unidades];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/altaCarga');
            echo view('scii/admin/navbar');
        }
    }
    public function evidencias()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Evidencia / Gestión';
        $map = $this->unidades->findAll();
        $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'unidades' => $map];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/gestionC');
        echo view('scii/admin/navbar');
    }
    public function getEvidencias($year = 'n', $unidades = 'n', $t_carga = 'n', $estado = 'n', $activo = 'n')
    {
        $dataTable = new DataTable();
        // process($modelClass, $columns, $where = [])
        $where = '';
        if ($year != 'n') {
            $where = 'year=' . $year;
        }
        if ($unidades != 'n') {
            $where = ($where != '') ? ($where . ' and unidades.id_unidad=' . $unidades) : $where = 'unidades.id_unidad=' . $unidades;
        }
        if ($t_carga != 'n') {
            $where = ($where != '') ? ($where . ' and cargas.t_carga=' . $t_carga) : $where = 'cargas.t_carga=' . $t_carga;
        }
        if ($estado != 'n') {
            $where = ($where != '') ? ($where . ' and cargas.estado=' . $estado) : $where = 'cargas.estado=' . $estado;
        }
        if ($activo != 'n') {
            $where = ($where != '') ? ($where . ' and cargas.activo=' . $activo) : $where = 'cargas.activo=' . $activo;
        }
        $response = $dataTable->process3('CargasModel', 'UnidadesModel', [
            [
                'name' => 'accion_factor',
                'formatter' => 'accion_link1'
            ],
            [
                'name' => 'unidades.id_unidad',
                'formatter' => 'unidad'
            ],
            [
                'name' => 't_Carga',
                'formatter' => 't_carga'
            ],
            [
                'name' => 'year'
            ],
            [
                'name' => 'cargas.estado',
                'formatter' => 'status'
            ],
            [
                'name' => 'id_carga',
                'formatter' => 'opcionesCarga'
            ],
            [
                'name' => 'unidades.descripcion'
            ],
            [
                'name' => 'cargas.activo'
            ],
        ], $where);
        /* return $this->setResponseFormat('json')->respond($response); */
        return json_encode($response);
    }
    public function detalleEvidencia($id_carga)
    {
        if ((!isset($this->session->id_usuario))) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }

        $current = 'Evidencias / Detalle y  Evaluación / ' . $id_carga;
        $unidades = $this->unidades->where('activo', 1)->find();
        $cargas = $this->cargas->where('id_carga', $id_carga)->first();
        $dir = 'files/cumplimiento/' . $id_carga . '/';
        $map = directory_map($dir);
        $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'unidades' => $unidades, 'cargas' => $cargas, 'map' => $map];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/detalleCarga');
        echo view('scii/admin/navbar');
    }
    public function getCarga($id_carga)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $carga = $this->cargas->where('id_carga', $id_carga)->first();
        return json_encode($carga);
    }
    public function actualizarCarga()
    {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        function restVal($validator, $id_carga)
        {
            $current = 'Evidencia / Edición';
            $unidades = new UnidadesModel();
            $cargas = new CargasModel();
            $unidad = $unidades->where('activo', 1)->find();
            $ban = $cargas->where(['id_carga' => $id_carga])->first();
            $session = session();
            $datos = ['usuario' => $session->usuario, 'current' => $current, 'errors' => $validator, 'unidades' => $unidad, 'edi' => $ban];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/altaCarga');
            echo view('scii/admin/navbar');
        }
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        if ($this->request->getMethod() == "post" && $this->validate($this->reglasCargaBas)) {
            switch ($this->request->getPost('tem')) {
                case 0:
                    if (test_input($this->request->getPost('fecha_ini')) >= test_input($this->request->getPost('fecha_fin'))) {
                        $current = 'Evidencias / Alta';
                        $unidades = $this->unidades->where('activo', 1)->find();
                        $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator, 'unidades' => $unidades];
                        echo view('scii/admin/header', $datos);
                        echo view('scii/admin/altaCarga');
                        echo view('scii/admin/navbar');
                    } else {
                        if ($this->validate($this->reglasCargaPTCI)) {
                            $this->cargas->update(test_input($this->request->getPost('id_carga')), [
                                'id_unidad' => test_input($this->request->getPost('unidades')),
                                'year' => test_input($this->request->getPost('year')),
                                't_carga' => test_input($this->request->getPost('tem')),
                                'fecha_alta' => date('Y-m-d H:i:s'),
                                'accion_factor' => test_input($this->request->getPost('fact_acc')),
                                'fecha_inicio' => test_input($this->request->getPost('fecha_ini')),
                                'fecha_termino' => test_input($this->request->getPost('fecha_fin')),
                                'medio_verificacion' => test_input($this->request->getPost('med_req')),
                            ]);
                            return redirect()->to(base_url() . '/administrador/detalleEvidencia/' . ($this->request->getPost('id_carga')));
                        } else {
                            restVal($this->validator, test_input($this->request->getPost('id_carga')));
                        }
                    }
                    break;
                case 1:
                    if (test_input($this->request->getPost('fecha_ini')) >= test_input($this->request->getPost('fecha_fin'))) {
                        $current = 'Evidencias / Alta';
                        $unidades = $this->unidades->where('activo', 1)->find();
                        $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'errors' => $this->validator, 'unidades' => $unidades];
                        echo view('scii/admin/header', $datos);
                        echo view('scii/admin/altaCarga');
                        echo view('scii/admin/navbar');
                    } else {
                        if ($this->validate($this->reglasCargaPTAR)) {
                            $this->cargas->update(test_input($this->request->getPost('id_carga')), [
                                'id_unidad' => test_input($this->request->getPost('unidades')),
                                'year' => test_input($this->request->getPost('year')),
                                't_carga' => test_input($this->request->getPost('tem')),
                                'fecha_alta' => date('Y-m-d H:i:s'),
                                'accion_factor' => test_input($this->request->getPost('fact_acc')),
                                'descripcion' => test_input($this->request->getPost('descrip')),
                                'fecha_inicio' => test_input($this->request->getPost('fecha_ini')),
                                'fecha_termino' => test_input($this->request->getPost('fecha_fin')),
                                'medio_verificacion' => test_input($this->request->getPost('med_req')),
                            ]);
                            return redirect()->to(base_url() . '/administrador/detalleEvidencia/' . ($this->request->getPost('id_carga')));
                        } else {
                            restVal($this->validator, test_input($this->request->getPost('id_carga')));
                        }
                    }
                    break;
                case 2:
                    if ($this->validate($this->reglasCargaCE)) {
                        $this->cargas->update(test_input($this->request->getPost('id_carga')), [
                            'id_unidad' => test_input($this->request->getPost('unidadesB')),
                            'year' => test_input($this->request->getPost('year')),
                            't_carga' => test_input($this->request->getPost('tem')),
                            'fecha_alta' => date('Y-m-d H:i:s'),
                            'accion_factor' => test_input($this->request->getPost('fact_acc')),
                            'descripcion' => test_input($this->request->getPost('descrip')),
                            'medio_verificacion' => test_input($this->request->getPost('med_req')),
                        ]);
                        return redirect()->to(base_url() . '/administrador/detalleEvidencia/' . ($this->request->getPost('id_carga')));
                    } else {
                        restVal($this->validator, test_input($this->request->getPost('id_carga')));
                    }
                    break;
            }
        } else {
            $id_carga = test_input($this->request->getPost('id_carga'));
            $current = 'Evidencia / Edición';
            $unidades = $this->unidades->where('activo', 1)->find();
            $ban = $this->cargas->where(['id_carga' => $id_carga])->first();
            $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'unidades' => $unidades, 'edi' => $ban, 'errors' => $this->validator];
            echo view('scii/admin/header', $datos);
            echo view('scii/admin/altaCarga');
            echo view('scii/admin/navbar');
        }
    }
    public function delEvidencia($id)
    {
        if ((!isset($this->session->id_usuario))) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $ban = $this->cargas->where(['id_carga' => $id])->first();
        $this->cargas->update($id, ['activo' => $ban['activo'] == 1 ? 0 : 1]);
        return redirect()->to(base_url() . '/administrador/detalleEvidencia/' . $id);
    }
    public function delCarga($id, $file)
    {
        if ((!isset($this->session->id_usuario))) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $carga = $this->cargas->where('id_carga', $id)->first();
        $error = '';
        if (file_exists('files/cumplimiento/' . $id . '/' . $file)) {
            unlink('files/cumplimiento/' . $id . '/' . $file);
            $res['datos'] = $this->cargaDocsC($id);
            $res['error'] = $error;
            return json_encode($res);
        } else {
            $res['error'] = 'No se encontró el archivo';
            return json_encode($res);
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
            $errors['id'] = 'Se requiere un id.';
        } else {
            if (empty($_POST['unidades']) && $_POST['unidades'] === "") {
                $errors['unidades'] = 'Se necesita una resolucion.';
            } else {
                $id = $_POST['id'];
                $unidades = $_POST['unidades'];
                $carga = $this->cargas->where('id_carga', $id)->first();
                $ban = ($unidades == 0) ? 2 : (($unidades == 1) ? 3 : 4);
                if ($carga['t_carga'] == 2 && $unidades == 2) {
                    $errors['carpeta'] = 'No se puede terminar esta actividad de carpeta electrónica.';
                } else {
                    if (!empty($_POST['observacion'])) {
                        $this->cargas->update($id, [
                            'estado' => $ban,
                            'observacion' => $_POST['observacion']
                        ]);
                    } else {
                        $this->cargas->update($id, [
                            'estado' => $ban,
                        ]);
                    }
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
    public function solicitarN()
    {
        $errors = [];
        $data = [];
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ($this->cargas->set('estado', 0)->where(['estado >=' => 1, 'estado<=' => 3])->update()) {
        } else {
            $errors['actualizacion'] = 'Surgió un error al realizar la actualización de los valores';
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
    public function uploadC($i)
    {
        $error = '';

        $img = $this->request->getFile('userfile');
        if (!$img->hasMoved()) {
            $filepath = base_url() . 'uploads/' . $img->store('../../public/files/cumplimiento/' . $i . '/', $img->getName());
            $data = ['uploaded_fileinfo' => new File($filepath)];
            $files = glob('files/cumplimiento/' . $i . '/*'); // get all file names
            foreach ($files as $file) { // iterate files
                if (is_file($file) && pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                    unlink($file); // delete file
                }
            }
            $res['datos'] = $this->cargaDocsC($i);
            $res['error'] = $error;
            return json_encode($res);
        }

        $res['error'] = 'Documento movido';
        return json_encode($res);
    }

    public function evaluacion()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Evidencia / Evaluacion';
        if (isset($edi))
            $ban = $this->cargas->where(['id_carga' => $edi])->first();
        $datos = isset($edi) ? ['usuario' => $this->session->usuario, 'current' => $current, 'edi' => $ban] : ['usuario' => $this->session->usuario, 'current' => $current];
        echo view('scii/admin/header');
        echo view('scii/admin/evaluacion', $datos);
        echo view('scii/admin/navbar');
    }
    public function solicitarEvaluacion()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }

        $db = \Config\Database::connect();
        $builder = $db->table('periodos');

        $year = $this->request->getPost('year');

        if ($year && $year !== 'n') {
            $data = [
                'nombre_periodo' => $year,
                'fecha_ini' => date('Y-m-d H:i:s')
            ];

            $builder->insert($data);

            // Actualizar la columna 'evaluacion' de los usuarios con 'id_categoria' = 1 y activos
            $userBuilder = $db->table('usuarios');
            $userBuilder->where('id_categoria', 1);
            $userBuilder->where('activo', 1);
            $userBuilder->update(['evaluacion' => 1]);

            $userBuilder->whereIn('id_categoria', [3, 4]);
            $userBuilder->where('activo', 1);
            $userBuilder->update(['ver_evaluacion' => 1]);

            return redirect()->back()->with('message', 'Evaluación solicitada exitosamente.');
        } else {
            return redirect()->back()->with('message', 'Por favor selecciona un periodo válido.');
        }

        $current = 'Evidencia / Evaluacion';
        if (isset($edi))
            $ban = $this->cargas->where(['id_carga' => $edi])->first();
        $datos = isset($edi) ? ['usuario' => $this->session->usuario, 'current' => $current, 'edi' => $ban] : ['usuario' => $this->session->usuario, 'current' => $current];
        echo view('scii/admin/header');
        echo view('scii/admin/evaluacion', $datos);
        echo view('scii/admin/navbar');
    }
    public function editarEvaluacion()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Formulario de evaluacion al desempeño';
        if (isset($edi))
            $ban = $this->cargas->where(['id_carga' => $edi])->first();
        $datos = isset($edi) ? ['usuario' => $this->session->usuario, 'current' => $current, 'edi' => $ban] : ['usuario' => $this->session->usuario, 'current' => $current];
        echo view('scii/admin/header');
        echo view('scii/admin/form', $datos);
        echo view('scii/admin/navbar');
    }

    public function historiaEvaluacion($activo = 1)
    {

        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Registro de Evaluaciones';
        // Obtén el último período para mostrarlo en la vista, si es necesario
        $lastPeriodo = $this->periodos->select('id_periodo, nombre_periodo')
            ->orderBy('id_periodo', 'DESC')
            ->first();
        $nombrePeriodo = $lastPeriodo ? $lastPeriodo['nombre_periodo'] : null;
        // Pasar datos a la vista
        $datos = ['usuario' => $this->session->usuario, 'current' => $current, 'nombrePeriodo' => $nombrePeriodo];

        echo view('scii/admin/header');
        echo view('scii/admin/historiaEvaluacion', $datos);
        echo view('scii/admin/navbar');
    }

    public function obtenerEvaluacionesAjax($activo = 1)
    {
        $lastPeriodo = $this->periodos->select('id_periodo, nombre_periodo')
            ->orderBy('id_periodo', 'DESC')
            ->first();

        if ($lastPeriodo === null) {
            return $this->response->setJSON([
                "draw" => intval($this->request->getPost('draw')),
                "recordsTotal" => 0,
                "recordsFiltered" => 0,
                "data" => []
            ]);
        }
        $ultimoPeriodoId = $lastPeriodo['id_periodo'];
        $db = \Config\Database::connect();
        $request = service('request');

        // Capturar los parámetros de paginación
        $limit = $request->getPost('length'); // Número de registros por página
        $offset = $request->getPost('start');

        // Capturar el parámetro de búsqueda
        $searchValue = $request->getPost('search')['value']; // Valor de búsqueda enviado por DataTables

        // Capturar los parámetros de ordenamiento
        $order = $request->getPost('order');
        $columnIndex = $order[0]['column']; // Índice de la columna que se va a ordenar
        $columnName = $request->getPost('columns')[$columnIndex]['data']; // Nombre de la columna
        $columnSortOrder = $order[0]['dir']; // Dirección del orden (asc o desc)

        // Consulta para contar los registros filtrados
        $builder = $db->table('usuarios');
        $builder->select('COUNT(*) AS total');
        $builder->join('evaluaciones', 'usuarios.id_usuario = evaluaciones.id_usuario AND evaluaciones.id_periodo = ' . $db->escape($ultimoPeriodoId), 'left');
        $builder->join('respuestas', 'usuarios.id_usuario = respuestas.id_usuario AND respuestas.id_periodo = ' . $db->escape($ultimoPeriodoId), 'left');
        $builder->join('unidades', 'usuarios.id_unidad = unidades.id_unidad', 'left');
        $builder->where('usuarios.id_categoria', $activo);
        $builder->where('usuarios.activo', $activo);

        // Aplicar búsqueda a las columnas relevantes
        if (!empty($searchValue)) {
            $builder->groupStart(); // Iniciar un grupo de condiciones OR
            $builder->like('usuarios.usuario', $searchValue);
            $builder->orLike('usuarios.nombre_s', $searchValue);
            $builder->orLike('usuarios.apellido_p', $searchValue);
            $builder->orLike('usuarios.apellido_m', $searchValue);
            $builder->orLike('unidades.descripcion', $searchValue);
            $builder->groupEnd(); // Terminar el grupo de condiciones OR
        }

        $totalFilteredRecords = $builder->get()->getRow()->total;

        // Consulta para obtener los registros filtrados y ordenados
        $builder = $db->table('usuarios');
        $builder->select('usuarios.*, usuarios.id_unidad AS numeroUnidad, respuestas.id_respuesta, respuestas.id_unidad, respuestas.id_periodo, respuestas.id_evaluacion, respuestas.fecha_respuesta, evaluaciones.id_usuario AS registro_realizado, unidades.id_unidad, unidades.descripcion');
        $builder->join('evaluaciones', 'usuarios.id_usuario = evaluaciones.id_usuario AND evaluaciones.id_periodo = ' . $db->escape($ultimoPeriodoId), 'left');
        $builder->join('respuestas', 'usuarios.id_usuario = respuestas.id_usuario AND respuestas.id_periodo = ' . $db->escape($ultimoPeriodoId), 'left');
        $builder->join('unidades', 'usuarios.id_unidad = unidades.id_unidad', 'left');
        $builder->where('usuarios.id_categoria', $activo);
        $builder->where('usuarios.activo', $activo);

        // Aplicar búsqueda si existe
        if (!empty($searchValue)) {
            $builder->groupStart();
            $builder->like('usuarios.usuario', $searchValue);
            $builder->orLike('usuarios.nombre_s', $searchValue);
            $builder->orLike('usuarios.apellido_p', $searchValue);
            $builder->orLike('usuarios.apellido_m', $searchValue);
            $builder->orLike('unidades.descripcion', $searchValue);
            $builder->groupEnd();
        }

        // Aplicar el ordenamiento
        $builder->orderBy($columnName, $columnSortOrder);

        // Aplicar paginación
        $builder->limit($limit, $offset);

        $query = $builder->get();
        $result = $query->getResultArray();


        $data = [];
        foreach ($result as $row) {
            if ($row['id_respuesta'] && $row['con_evaluador'] == 2) {
                $estado = '<span class="text-white bg-green-500 rounded" style="padding: 5px;">Evaluación terminada</span>';
            } elseif ($row['registro_realizado'] === null) {
                $estado = '<span class="text-white rounded bg-red-600" style="padding: 5px;">Registro pendiente</span>';
            } elseif ($row['con_evaluador'] == 1) {
                $estado = '<span class="text-white bg-yellow-400 rounded" style="padding: 5px;">Evaluación del Evaluador</span>';
            } else {
                $estado = '<span class="text-white rounded" style="--tw-bg-opacity: 1; background-color: rgb(234 88 12 / var(--tw-bg-opacity)); padding: 5px;">Evaluación en proceso</span>';
            }

            $data[] = [
                'usuario' => $row['usuario'],
                'nombre_s' => $row['nombre_s'],
                'apellido_p' => $row['apellido_p'],
                'apellido_m' => $row['apellido_m'],
                'descripcion' => $row['descripcion'],
                'estado' => $estado,
                // 'tipo' => $row['id_respuesta'] ? '<a href="' . base_url() . '/scii/respuestas/' . $row['id_respuesta'] . '"><i class="fa-solid fa-list"></i></a>' : 'Sin respuesta'
            ];
        }

        // Respuesta para DataTables
        $response = [
            "draw" => intval($this->request->getPost('draw')),
            "recordsTotal" => $totalFilteredRecords, // Se usa el total filtrado
            "recordsFiltered" => $totalFilteredRecords, // Cambiar si la búsqueda afecta los resultados filtrados
            "data" => $data
        ];

        return $this->response->setJSON($response);
    }

    public function exportarExcel($activo = 1)
    {
        $lastPeriodo = $this->periodos->select('id_periodo, nombre_periodo')
            ->orderBy('id_periodo', 'DESC')
            ->first();
        $ultimoPeriodoId = $lastPeriodo['id_periodo'];
        $nombrePeriodo = $lastPeriodo['nombre_periodo'];
        $db = \Config\Database::connect();

        // Realiza la consulta a la base de datos para obtener todos los datos
        $builder = $db->table('usuarios');
        $builder->select('usuarios.*, usuarios.id_unidad AS numeroUnidad, respuestas.id_respuesta, respuestas.id_unidad, respuestas.id_periodo, respuestas.id_evaluacion, respuestas.fecha_respuesta, evaluaciones.id_usuario AS registro_realizado, unidades.id_unidad, unidades.descripcion');
        $builder->join('evaluaciones', 'usuarios.id_usuario = evaluaciones.id_usuario AND evaluaciones.id_periodo = ' . $db->escape($ultimoPeriodoId), 'left');
        $builder->join('respuestas', 'usuarios.id_usuario = respuestas.id_usuario AND respuestas.id_periodo = ' . $db->escape($ultimoPeriodoId), 'left');
        $builder->join('unidades', 'usuarios.id_unidad = unidades.id_unidad', 'left');
        $builder->where('usuarios.id_categoria', $activo);
        $query = $builder->get();
        $result = $query->getResultArray();

        // Crear el archivo Excel
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Añadir encabezados
        $sheet->setCellValue('A1', 'Usuario');
        $sheet->setCellValue('B1', 'Nombre');
        $sheet->setCellValue('C1', 'Apellido Paterno');
        $sheet->setCellValue('D1', 'Apellido Materno');
        $sheet->setCellValue('E1', 'Unidad Administrativa');
        $sheet->setCellValue('F1', 'Estado');
        $sheet->setCellValue('G1', 'Tipo');

        // Añadir datos
        $rowNumber = 2;
        foreach ($result as $row) {
            $estado = $row['id_respuesta'] ? 'Evaluación terminada' : ($row['registro_realizado'] === null ? 'Registro pendiente' : 'Evaluación en proceso');
            $sheet->setCellValue('A' . $rowNumber, $row['usuario']);
            $sheet->setCellValue('B' . $rowNumber, $row['nombre_s']);
            $sheet->setCellValue('C' . $rowNumber, $row['apellido_p']);
            $sheet->setCellValue('D' . $rowNumber, $row['apellido_m']);
            $sheet->setCellValue('E' . $rowNumber, $row['descripcion']);
            $sheet->setCellValue('F' . $rowNumber, $estado);
            $sheet->setCellValue('G' . $rowNumber, $row['id_respuesta'] ? 'Sí' : 'No');
            $rowNumber++;
        }

        // Descargar el archivo Excel
        $writer = new Xlsx($spreadsheet);
        $filename = 'evaluaciones.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        exit;
    }
    public function registroRespuestas($activo = 1)
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }

        $current = 'Registro de Respuestas';

        // Obtén el último período para mostrarlo en la vista, si es necesario
        $lastPeriodo = $this->periodos->select('id_periodo, nombre_periodo')
            ->orderBy('id_periodo', 'DESC')
            ->first();

        // Verifica si se encontró un periodo
        if ($lastPeriodo) {
            $ultimoPeriodoId = $lastPeriodo['id_periodo'];
            $nombrePeriodo = $lastPeriodo['nombre_periodo'];

            // Obtén las respuestas correspondientes al último periodo
            $respuestas = $this->respuestas->where('id_periodo', $ultimoPeriodoId)->findAll();
        } else {
            // Si no hay períodos, asignar valores por defecto
            $ultimoPeriodoId = null;
            $nombrePeriodo = 'No hay periodos disponibles';
            $respuestas = []; // No hay respuestas si no hay período
        }

        // Pasar datos a la vista
        $datos = [
            'usuario' => $this->session->usuario,
            'current' => $current,
            'nombrePeriodo' => $nombrePeriodo,
            'respuestas' => $respuestas,
            'ultimoPeriodo' => $ultimoPeriodoId
        ];

        echo view('scii/admin/header');
        echo view('scii/admin/registroRespuestas', $datos);
        echo view('scii/admin/navbar');
    }

    public function obtenerRespuestasAjax()
    {
        $lastPeriodo = $this->periodos->select('id_periodo, nombre_periodo')
            ->orderBy('id_periodo', 'DESC')
            ->first();

        if ($lastPeriodo === null) {
            // Asegúrate de devolver un JSON válido con los campos requeridos por DataTables
            return $this->response->setJSON([
                "draw" => intval($this->request->getPost('draw')),
                "recordsTotal" => 0,
                "recordsFiltered" => 0,
                "data" => [],
                // "error" => "No hay periodos disponibles"
            ]);
        }

        $ultimoPeriodoId = $lastPeriodo['id_periodo'];
        $db = \Config\Database::connect();
        $request = service('request');

        // Capturar los parámetros de paginación
        $limit = $request->getPost('length');
        $offset = $request->getPost('start');

        // Capturar el parámetro de búsqueda
        $searchValue = isset($request->getPost('search')['value']) ? $request->getPost('search')['value'] : '';

        // Capturar los parámetros de ordenamiento
        $order = $request->getPost('order');
        if (isset($order[0]['column'])) {
            $columnIndex = $order[0]['column'];
            $columnName = $request->getPost('columns')[$columnIndex]['data'];
            $columnSortOrder = $order[0]['dir'];
        } else {
            $columnName = 'default_column';
            $columnSortOrder = 'asc';
        }

        $totalRecords = $db->table('respuestas')
            ->where('id_periodo', $ultimoPeriodoId)
            ->countAllResults();

        // Consulta para contar los registros filtrados
        $builder = $db->table('respuestas');
        $builder->select('respuestas.*, usuarios.*, unidades.*, evaluaciones.*, unidades.descripcion AS nombreUnidad');
        $builder->join('usuarios', 'usuarios.id_usuario = respuestas.id_usuario');
        $builder->join('unidades', 'unidades.id_unidad = respuestas.id_unidad');
        $builder->join('evaluaciones', 'evaluaciones.id_evaluacion = respuestas.id_evaluacion');
        $builder->where('respuestas.id_periodo', $ultimoPeriodoId);

        if (!empty($searchValue)) {
            $builder->groupStart();
            $builder->like('usuarios.usuario', $searchValue);
            $builder->orLike('usuarios.nombre_s', $searchValue);
            $builder->orLike('usuarios.apellido_p', $searchValue);
            $builder->orLike('usuarios.apellido_m', $searchValue);
            $builder->orLike('unidades.descripcion', $searchValue);
            $builder->groupEnd();
        }

        $totalFilteredRecords = $builder->countAllResults(false);  // Cuenta registros filtrados

        if ($totalFilteredRecords == 0) {
            return $this->response->setJSON([
                "draw" => intval($this->request->getPost('draw')),
                "recordsTotal" => 0,
                "recordsFiltered" => 0,
                "data" => []
            ]);
        }
        // Consulta para obtener los registros filtrados y ordenados
        $builder->orderBy($columnName, $columnSortOrder);
        $builder->limit($limit, $offset);
        $query = $builder->get();
        $result = $query->getResultArray();

        // Preparar los datos para DataTables
        $data = [];
        foreach ($result as $row) {
            $data[] = [
                'usuario' => $row['usuario'],
                'nombre_s' => $row['nombre_s'],
                'apellido_p' => $row['apellido_p'],
                'apellido_m' => $row['apellido_m'],
                'nombreUnidad' => $row['nombreUnidad'],
                'principales_funciones' => $row['principales_funciones'],
                'comentarios_funciones' => $row['comentarios_funciones'],
                'meta_uno' => $row['meta_uno'],
                'fecha_cumplimiento_meta_uno' => $row['fecha_cumplimiento_meta_uno'],
                'meta_dos' => $row['meta_dos'],
                'fecha_cumplimiento_meta_dos' => $row['fecha_cumplimiento_meta_dos'],
                'meta_tres' => $row['meta_tres'],
                'fecha_cumplimiento_meta_tres' => $row['fecha_cumplimiento_meta_tres'],
                'meta_cuatro' => $row['meta_cuatro'],
                'fecha_cumplimiento_meta_cuatro' => $row['fecha_cumplimiento_meta_cuatro'],
                'meta_cinco' => $row['meta_cinco'],
                'fecha_cumplimiento_meta_cinco' => $row['fecha_cumplimiento_meta_cinco'],

                'criterio_desempeño_uno' => $row['criterio_desempeño_uno'],
                'ruta_evidencia_uno' => $row['ruta_evidencia_uno'],
                'calificacion_uno' => $row['calificacion_uno'],
                'calificacion_uno_evaluador' => $row['calificacion_uno_evaluador'],

                'criterio_desempeño_dos' => $row['criterio_desempeño_dos'],
                'ruta_evidencia_dos' => $row['ruta_evidencia_dos'],
                'calificacion_dos' => $row['calificacion_dos'],
                'calificacion_dos_evaluador' => $row['calificacion_dos_evaluador'],

                'criterio_desempeño_tres' => $row['criterio_desempeño_tres'],
                'ruta_evidencia_tres' => $row['ruta_evidencia_tres'],
                'calificacion_tres' => $row['calificacion_tres'],
                'calificacion_tres_evaluador' => $row['calificacion_tres_evaluador'],

                'criterio_desempeño_cuatro' => $row['criterio_desempeño_cuatro'],
                'ruta_evidencia_cuatro' => $row['ruta_evidencia_cuatro'],
                'calificacion_cuatro' => $row['calificacion_cuatro'],
                'calificacion_cuatro_evaluador' => $row['calificacion_cuatro_evaluador'],

                'criterio_desempeño_cinco' => $row['criterio_desempeño_cinco'],
                'ruta_evidencia_cinco' => $row['ruta_evidencia_cinco'],
                'calificacion_cinco' => $row['calificacion_cinco'],
                'calificacion_cinco_evaluador' => $row['calificacion_cinco_evaluador'],

                'criterio_desempeño_seis' => $row['criterio_desempeño_seis'],
                'ruta_evidencia_seis' => $row['ruta_evidencia_seis'],
                'calificacion_seis' => $row['calificacion_seis'],
                'calificacion_seis_evaluador' => $row['calificacion_seis_evaluador'],

                'criterio_desempeño_siete' => $row['criterio_desempeño_siete'],
                'ruta_evidencia_siete' => $row['ruta_evidencia_siete'],
                'calificacion_siete' => $row['calificacion_siete'],
                'calificacion_siete_evaluador' => $row['calificacion_siete_evaluador'],

                'criterio_desempeño_ocho' => $row['criterio_desempeño_ocho'],
                'ruta_evidencia_ocho' => $row['ruta_evidencia_ocho'],
                'calificacion_ocho' => $row['calificacion_ocho'],
                'calificacion_ocho_evaluador' => $row['calificacion_ocho_evaluador'],

                'total_segmento_tres' => $row['total_segmento_tres'],
                'puntuaje_segmento_tres' => $row['puntuaje_segmento_tres'],

                'total_segmento_tres_evaluador' => $row['total_segmento_tres_evaluador'],
                'puntuaje_segmento_tres_evaluador' => $row['puntuaje_segmento_tres_evaluador'],

                'valor_agregado_uno' => $row['valor_agregado_uno'],
                'valor_agregado_uno_evaluador' => $row['valor_agregado_uno_evaluador'],

                'valor_agregado_dos' => $row['valor_agregado_dos'],
                'valor_agregado_dos_evaluador' => $row['valor_agregado_dos_evaluador'],

                'valor_agregado_tres' => $row['valor_agregado_tres'],
                'valor_agregado_tres_evaluador' => $row['valor_agregado_tres_evaluador'],

                'valor_agregado_cuatro' => $row['valor_agregado_cuatro'],
                'valor_agregado_cuatro_evaluador' => $row['valor_agregado_cuatro_evaluador'],

                'valor_agregado_cinco' => $row['valor_agregado_cinco'],
                'valor_agregado_cinco_evaluador' => $row['valor_agregado_cinco_evaluador'],

                'valor_agregado_seis' => $row['valor_agregado_seis'],
                'valor_agregado_seis_evaluador' => $row['valor_agregado_seis_evaluador'],

                'valor_agregado_siete' => $row['valor_agregado_siete'],
                'valor_agregado_siete_evaluador' => $row['valor_agregado_siete_evaluador'],

                'valor_agregado_ocho' => $row['valor_agregado_ocho'],
                'valor_agregado_ocho_evaluador' => $row['valor_agregado_ocho_evaluador'],

                'valor_agregado_nueve' => $row['valor_agregado_nueve'],
                'valor_agregado_nueve_evaluador' => $row['valor_agregado_nueve_evaluador'],

                'valor_agregado_diez' => $row['valor_agregado_diez'],
                'valor_agregado_diez_evaluador' => $row['valor_agregado_diez_evaluador'],

                'total_segmento_cuatro' => $row['total_segmento_cuatro'],
                'puntuaje_segmento_cuatro' => $row['puntuaje_segmento_cuatro'],

                'total_segmento_cuatro_evaluador' => $row['total_segmento_cuatro_evaluador'],
                'puntuaje_segmento_cuatro_evaluador' => $row['puntuaje_segmento_cuatro_evaluador'],

                'total_global' => $row['total_global'],
                'total_global_evaluador' => $row['total_global_evaluador'],

                'comentarios_evaluado' => $row['comentarios_evaluado'],
                'comentarios_evaluador_uno' => $row['comentarios_evaluador_uno'],
                'comentarios_evaluador_dos' => $row['comentarios_evaluador_dos'],
                'comentarios_evaluador_tres' => $row['comentarios_evaluador_tres'],
                'comentarios_evaluador_cuatro' => $row['comentarios_evaluador_cuatro'],
            ];
        }
        // Respuesta para DataTables
        $response = [
            "draw" => intval($this->request->getPost('draw')),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalFilteredRecords,
            "data" => $data
        ];

        return $this->response->setJSON($response);
    }

    public function exportarExcelRespuestas()
    {
        $lastPeriodo = $this->periodos->select('id_periodo, nombre_periodo')
            ->orderBy('id_periodo', 'DESC')
            ->first();

        if ($lastPeriodo === null) {
            return $this->response->setJSON(['error' => 'No hay periodos disponibles']);
        }

        $ultimoPeriodoId = $lastPeriodo['id_periodo'];
        $nombrePeriodo = $lastPeriodo['nombre_periodo'];
        $db = \Config\Database::connect();
        // $request = service('request');
        $builder = $db->table('respuestas');
        $builder->select('respuestas.*, usuarios.*, unidades.*, evaluaciones.*, unidades.descripcion AS nombreUnidad');
        $builder->join('usuarios', 'usuarios.id_usuario = respuestas.id_usuario');
        $builder->join('unidades', 'unidades.id_unidad = respuestas.id_unidad');
        $builder->join('evaluaciones', 'evaluaciones.id_evaluacion = respuestas.id_evaluacion');
        $builder->where('respuestas.id_periodo', $ultimoPeriodoId);

        $query = $builder->get();
        $result = $query->getResultArray();

        // Crear el archivo Excel
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Añadir encabezados
        $sheet->setCellValue('A1', 'Usuario');
        $sheet->setCellValue('B1', 'Nombre');
        $sheet->setCellValue('C1', 'Apellido Paterno');
        $sheet->setCellValue('D1', 'Apellido Materno');
        $sheet->setCellValue('E1', 'Unidad Administrativa');
        $sheet->setCellValue('F1', 'Principales Funciones');
        $sheet->setCellValue('G1', 'Comentarios de Funciones por parte del evaluador');
        $sheet->setCellValue('H1', 'Meta I');
        $sheet->setCellValue('I1', 'Fecha de cumplimineto de la meta');
        $sheet->setCellValue('J1', 'Meta II');
        $sheet->setCellValue('K1', 'Fecha de cumplimineto de la meta');
        $sheet->setCellValue('L1', 'Meta III');
        $sheet->setCellValue('M1', 'Fecha de cumplimineto de la meta');
        $sheet->setCellValue('N1', 'Meta IV');
        $sheet->setCellValue('O1', 'Fecha de cumplimineto de la meta');
        $sheet->setCellValue('P1', 'Meta V');
        $sheet->setCellValue('Q1', 'Fecha de cumplimineto de la meta');
        $sheet->setCellValue('R1', 'Productividad y eficiencia');
        $sheet->setCellValue('S1', 'Archivo');
        $sheet->setCellValue('T1', 'Calificacion');
        $sheet->setCellValue('U1', 'Calificacion del Evaluador');
        $sheet->setCellValue('V1', 'Trabajo en equipo');
        $sheet->setCellValue('W1', 'Archivo');
        $sheet->setCellValue('X1', 'Calificacion');
        $sheet->setCellValue('Y1', 'Calificacion del Evaluador');
        $sheet->setCellValue('Z1', 'Analisis de problemas');
        $sheet->setCellValue('AA1', 'Archivo');
        $sheet->setCellValue('AB1', 'Calificacion');
        $sheet->setCellValue('AC1', 'Calificacion del Evaluador');
        $sheet->setCellValue('AD1', 'Aportaciones Valiosas');
        $sheet->setCellValue('AE1', 'Archivo');
        $sheet->setCellValue('AF1', 'Calificacion');
        $sheet->setCellValue('AG1', 'Calificacion del Evaluador');
        $sheet->setCellValue('AH1', 'Comunicacion y confiabilidad');
        $sheet->setCellValue('AI1', 'Archivo');
        $sheet->setCellValue('AJ1', 'Calificacion');
        $sheet->setCellValue('AK1', 'Calificacion del Evaluador');
        $sheet->setCellValue('AL1', 'Trabajos extras');
        $sheet->setCellValue('AM1', 'Archivos');
        $sheet->setCellValue('AN1', 'Calificacion');
        $sheet->setCellValue('AO1', 'Calificacion del Evaluador');
        $sheet->setCellValue('AP1', 'Trabajo bajo presion');
        $sheet->setCellValue('AQ1', 'Archivo');
        $sheet->setCellValue('AR1', 'Calificacion');
        $sheet->setCellValue('AS1', 'Calificacion del Evaluador');
        $sheet->setCellValue('AT1', 'Desarrollo de competencias adicionales (CAPACITACIONES)');
        $sheet->setCellValue('AU1', 'Archivo');
        $sheet->setCellValue('AV1', 'Calificacion');
        $sheet->setCellValue('AW1', 'Calificacion del Evaluador');
        $sheet->setCellValue('AX1', 'Total Segmento III');
        $sheet->setCellValue('AY1', 'Putaje Segmento III');
        $sheet->setCellValue('AZ1', 'Total Segmento III Evaluador');
        $sheet->setCellValue('BA1', 'Puntaje Segmento III Evaluador');
        $sheet->setCellValue('BB1', 'Honestidad');
        $sheet->setCellValue('BC1', 'Evaluador');
        $sheet->setCellValue('BD1', 'Responsabilidad');
        $sheet->setCellValue('BE1', 'Evaluador');
        $sheet->setCellValue('BF1', 'Respeto');
        $sheet->setCellValue('BG1', 'Evaluador');
        $sheet->setCellValue('BH1', 'Actitud de servicio');
        $sheet->setCellValue('BI1', 'Evaluador');
        $sheet->setCellValue('BJ1', 'Iniciatica');
        $sheet->setCellValue('BK1', 'Evaluador');
        $sheet->setCellValue('BL1', 'Lealtad');
        $sheet->setCellValue('BM1', 'Evaluador');
        $sheet->setCellValue('BN1', 'Disciplina');
        $sheet->setCellValue('BO1', 'Evaluador');
        $sheet->setCellValue('BP1', 'Profesionalidad');
        $sheet->setCellValue('BQ1', 'Evaluador');
        $sheet->setCellValue('BR1', 'Igualdad y No Discriminacion');
        $sheet->setCellValue('BS1', 'Evaluador');
        $sheet->setCellValue('BT1', 'Equidad de genero');
        $sheet->setCellValue('BU1', 'Evaluador');
        $sheet->setCellValue('BV1', 'Total Segmento IV');
        $sheet->setCellValue('BW1', 'Puntaje Segmento IV');
        $sheet->setCellValue('BX1', 'Total Segmento IV Evaluador');
        $sheet->setCellValue('BY1', 'Puntaje Segmento IV Evaluador');
        $sheet->setCellValue('BZ1', 'Total Global');
        $sheet->setCellValue('CA1', 'Total Global Evaluador');
        $sheet->setCellValue('CB1', 'Comentarios del Evaluado');
        $sheet->setCellValue('CC1', 'Comentarios del Evaluador I');
        $sheet->setCellValue('CD1', 'Comentarios del Evaluador II');
        $sheet->setCellValue('CE1', 'Comentarios del Evaluador III');
        $sheet->setCellValue('CF1', 'Comentarios del Evaluador IV');

        // Ajustar ancho de las columnas
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('G')->setAutoSize(true);
        $sheet->getColumnDimension('H')->setAutoSize(true);
        $sheet->getColumnDimension('I')->setAutoSize(true);
        $sheet->getColumnDimension('J')->setAutoSize(true);
        $sheet->getColumnDimension('K')->setAutoSize(true);
        $sheet->getColumnDimension('L')->setAutoSize(true);
        $sheet->getColumnDimension('M')->setAutoSize(true);
        $sheet->getColumnDimension('N')->setAutoSize(true);
        $sheet->getColumnDimension('O')->setAutoSize(true);
        $sheet->getColumnDimension('P')->setAutoSize(true);
        $sheet->getColumnDimension('Q')->setAutoSize(true);
        $sheet->getColumnDimension('R')->setAutoSize(true);
        $sheet->getColumnDimension('S')->setAutoSize(true);
        $sheet->getColumnDimension('T')->setAutoSize(true);
        $sheet->getColumnDimension('U')->setAutoSize(true);
        $sheet->getColumnDimension('V')->setAutoSize(true);
        $sheet->getColumnDimension('W')->setAutoSize(true);
        $sheet->getColumnDimension('X')->setAutoSize(true);
        $sheet->getColumnDimension('Y')->setAutoSize(true);
        $sheet->getColumnDimension('Z')->setAutoSize(true);
        $sheet->getColumnDimension('AA')->setAutoSize(true);
        $sheet->getColumnDimension('AB')->setAutoSize(true);
        $sheet->getColumnDimension('AC')->setAutoSize(true);
        $sheet->getColumnDimension('AD')->setAutoSize(true);
        $sheet->getColumnDimension('AE')->setAutoSize(true);
        $sheet->getColumnDimension('AF')->setAutoSize(true);
        $sheet->getColumnDimension('AG')->setAutoSize(true);
        $sheet->getColumnDimension('AH')->setAutoSize(true);
        $sheet->getColumnDimension('AI')->setAutoSize(true);
        $sheet->getColumnDimension('AJ')->setAutoSize(true);
        $sheet->getColumnDimension('AK')->setAutoSize(true);
        $sheet->getColumnDimension('AL')->setAutoSize(true);
        $sheet->getColumnDimension('AM')->setAutoSize(true);
        $sheet->getColumnDimension('AN')->setAutoSize(true);
        $sheet->getColumnDimension('AO')->setAutoSize(true);
        $sheet->getColumnDimension('AP')->setAutoSize(true);
        $sheet->getColumnDimension('AQ')->setAutoSize(true);
        $sheet->getColumnDimension('AR')->setAutoSize(true);
        $sheet->getColumnDimension('AS')->setAutoSize(true);
        $sheet->getColumnDimension('AT')->setAutoSize(true);
        $sheet->getColumnDimension('AU')->setAutoSize(true);
        $sheet->getColumnDimension('AV')->setAutoSize(true);
        $sheet->getColumnDimension('AW')->setAutoSize(true);
        $sheet->getColumnDimension('AX')->setAutoSize(true);
        $sheet->getColumnDimension('AY')->setAutoSize(true);
        $sheet->getColumnDimension('AZ')->setAutoSize(true);
        $sheet->getColumnDimension('BA')->setAutoSize(true);
        $sheet->getColumnDimension('BB')->setAutoSize(true);
        $sheet->getColumnDimension('BC')->setAutoSize(true);
        $sheet->getColumnDimension('BD')->setAutoSize(true);
        $sheet->getColumnDimension('BE')->setAutoSize(true);
        $sheet->getColumnDimension('BF')->setAutoSize(true);
        $sheet->getColumnDimension('BG')->setAutoSize(true);
        $sheet->getColumnDimension('BH')->setAutoSize(true);
        $sheet->getColumnDimension('BI')->setAutoSize(true);
        $sheet->getColumnDimension('BJ')->setAutoSize(true);
        $sheet->getColumnDimension('BK')->setAutoSize(true);
        $sheet->getColumnDimension('BL')->setAutoSize(true);
        $sheet->getColumnDimension('BM')->setAutoSize(true);
        $sheet->getColumnDimension('BN')->setAutoSize(true);
        $sheet->getColumnDimension('BO')->setAutoSize(true);
        $sheet->getColumnDimension('BP')->setAutoSize(true);
        $sheet->getColumnDimension('BQ')->setAutoSize(true);
        $sheet->getColumnDimension('BR')->setAutoSize(true);
        $sheet->getColumnDimension('BS')->setAutoSize(true);
        $sheet->getColumnDimension('BT')->setAutoSize(true);
        $sheet->getColumnDimension('BU')->setAutoSize(true);
        $sheet->getColumnDimension('BV')->setAutoSize(true);
        $sheet->getColumnDimension('BW')->setAutoSize(true);
        $sheet->getColumnDimension('BX')->setAutoSize(true);
        $sheet->getColumnDimension('BY')->setAutoSize(true);
        $sheet->getColumnDimension('BZ')->setAutoSize(true);
        $sheet->getColumnDimension('CA')->setAutoSize(true);
        $sheet->getColumnDimension('CB')->setAutoSize(true);
        $sheet->getColumnDimension('CC')->setAutoSize(true);
        $sheet->getColumnDimension('CD')->setAutoSize(true);
        $sheet->getColumnDimension('CE')->setAutoSize(true);
        $sheet->getColumnDimension('CF')->setAutoSize(true);

        // Aplicar estilo a los encabezados (negritas, alineación)
        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'FFFFE599', // Color de fondo amarillo claro
                ],
            ],
        ];

        $sheet->getStyle('A1:CF1')->applyFromArray($styleArray);

        // Ajustar el alto de las filas
        $sheet->getRowDimension('1')->setRowHeight(30); // Alto para la fila de encabezados

        // Añadir datos
        $rowNumber = 2;
        foreach ($result as $row) {
            //$estado = $row['id_respuesta'] ? 'Evaluación terminada' : ($row['registro_realizado'] === null ? 'Registro pendiente' : 'Evaluación en proceso');
            $sheet->setCellValue('A' . $rowNumber, $row['usuario']);
            $sheet->setCellValue('B' . $rowNumber, $row['nombre_s']);
            $sheet->setCellValue('C' . $rowNumber, $row['apellido_p']);
            $sheet->setCellValue('D' . $rowNumber, $row['apellido_m']);
            $sheet->setCellValue('E' . $rowNumber, $row['nombreUnidad']);
            $sheet->setCellValue('F' . $rowNumber, $row['principales_funciones']);
            $sheet->setCellValue('G'  . $rowNumber, $row['comentarios_funciones']);
            $sheet->setCellValue('H'  . $rowNumber, $row['meta_uno']);
            $sheet->setCellValue('I'  . $rowNumber, $row['fecha_cumplimiento_meta_uno']);
            $sheet->setCellValue('J'  . $rowNumber, $row['meta_dos']);
            $sheet->setCellValue('K'  . $rowNumber, $row['fecha_cumplimiento_meta_dos']);
            $sheet->setCellValue('L'  . $rowNumber, $row['meta_tres']);
            $sheet->setCellValue('M'  . $rowNumber, $row['fecha_cumplimiento_meta_tres']);
            $sheet->setCellValue('N'  . $rowNumber, $row['meta_cuatro']);
            $sheet->setCellValue('O'  . $rowNumber, $row['fecha_cumplimiento_meta_cuatro']);
            $sheet->setCellValue('P'  . $rowNumber, $row['meta_cinco']);
            $sheet->setCellValue('Q'  . $rowNumber, $row['fecha_cumplimiento_meta_cinco']);
            $sheet->setCellValue('R'  . $rowNumber, $row['criterio_desempeño_uno']);
            $sheet->setCellValue('S'  . $rowNumber, $row['ruta_evidencia_uno']);
            $sheet->setCellValue('T'  . $rowNumber, $row['calificacion_uno']);
            $sheet->setCellValue('U'  . $rowNumber, $row['calificacion_uno_evaluador']);
            $sheet->setCellValue('V'  . $rowNumber, $row['criterio_desempeño_dos']);
            $sheet->setCellValue('W'  . $rowNumber, $row['ruta_evidencia_dos']);
            $sheet->setCellValue('X'  . $rowNumber, $row['calificacion_dos']);
            $sheet->setCellValue('Y'  . $rowNumber, $row['calificacion_dos_evaluador']);
            $sheet->setCellValue('Z'  . $rowNumber, $row['criterio_desempeño_tres']);
            $sheet->setCellValue('AA'  . $rowNumber, $row['ruta_evidencia_tres']);
            $sheet->setCellValue('AB'  . $rowNumber, $row['calificacion_tres']);
            $sheet->setCellValue('AC'  . $rowNumber, $row['calificacion_tres_evaluador']);
            $sheet->setCellValue('AD'  . $rowNumber, $row['criterio_desempeño_cuatro']);
            $sheet->setCellValue('AE'  . $rowNumber, $row['ruta_evidencia_cuatro']);
            $sheet->setCellValue('AF'  . $rowNumber, $row['calificacion_cuatro']);
            $sheet->setCellValue('AG'  . $rowNumber, $row['calificacion_cuatro_evaluador']);
            $sheet->setCellValue('AH'  . $rowNumber, $row['criterio_desempeño_cinco']);
            $sheet->setCellValue('AI'  . $rowNumber, $row['ruta_evidencia_cinco']);
            $sheet->setCellValue('AJ'  . $rowNumber, $row['calificacion_cinco']);
            $sheet->setCellValue('AK'  . $rowNumber, $row['calificacion_cinco_evaluador']);
            $sheet->setCellValue('AL'  . $rowNumber, $row['criterio_desempeño_seis']);
            $sheet->setCellValue('AM'  . $rowNumber, $row['ruta_evidencia_seis']);
            $sheet->setCellValue('AN'  . $rowNumber, $row['calificacion_seis']);
            $sheet->setCellValue('AO'  . $rowNumber, $row['calificacion_seis_evaluador']);
            $sheet->setCellValue('AP'  . $rowNumber, $row['criterio_desempeño_siete']);
            $sheet->setCellValue('AQ'  . $rowNumber, $row['ruta_evidencia_siete']);
            $sheet->setCellValue('AR'  . $rowNumber, $row['calificacion_siete']);
            $sheet->setCellValue('AS'  . $rowNumber, $row['calificacion_siete_evaluador']);
            $sheet->setCellValue('AT'  . $rowNumber, $row['criterio_desempeño_ocho']);
            $sheet->setCellValue('AU'  . $rowNumber, $row['ruta_evidencia_ocho']);
            $sheet->setCellValue('AV'  . $rowNumber, $row['calificacion_ocho']);
            $sheet->setCellValue('AW'  . $rowNumber, $row['calificacion_ocho_evaluador']);
            $sheet->setCellValue('AX'  . $rowNumber, $row['total_segmento_tres']);
            $sheet->setCellValue('AY'  . $rowNumber, $row['puntuaje_segmento_tres']);
            $sheet->setCellValue('AZ'  . $rowNumber, $row['total_segmento_tres_evaluador']);
            $sheet->setCellValue('BA'  . $rowNumber, $row['puntuaje_segmento_tres_evaluador']);
            $sheet->setCellValue('BB'  . $rowNumber, $row['valor_agregado_uno']);
            $sheet->setCellValue('BC'  . $rowNumber, $row['valor_agregado_uno_evaluador']);
            $sheet->setCellValue('BD'  . $rowNumber, $row['valor_agregado_dos']);
            $sheet->setCellValue('BE'  . $rowNumber, $row['valor_agregado_dos_evaluador']);
            $sheet->setCellValue('BF'  . $rowNumber, $row['valor_agregado_tres']);
            $sheet->setCellValue('BG'  . $rowNumber, $row['valor_agregado_tres_evaluador']);
            $sheet->setCellValue('BH'  . $rowNumber, $row['valor_agregado_cuatro']);
            $sheet->setCellValue('BI'  . $rowNumber, $row['valor_agregado_cuatro_evaluador']);
            $sheet->setCellValue('BJ'  . $rowNumber, $row['valor_agregado_cinco']);
            $sheet->setCellValue('BK'  . $rowNumber, $row['valor_agregado_cinco_evaluador']);
            $sheet->setCellValue('BL'  . $rowNumber, $row['valor_agregado_seis']);
            $sheet->setCellValue('BM'  . $rowNumber, $row['valor_agregado_seis_evaluador']);
            $sheet->setCellValue('BN'  . $rowNumber, $row['valor_agregado_siete']);
            $sheet->setCellValue('BO'  . $rowNumber, $row['valor_agregado_siete_evaluador']);
            $sheet->setCellValue('BP'  . $rowNumber, $row['valor_agregado_ocho']);
            $sheet->setCellValue('BQ'  . $rowNumber, $row['valor_agregado_ocho_evaluador']);
            $sheet->setCellValue('BR'  . $rowNumber, $row['valor_agregado_nueve']);
            $sheet->setCellValue('BS'  . $rowNumber, $row['valor_agregado_nueve_evaluador']);
            $sheet->setCellValue('BT'  . $rowNumber, $row['valor_agregado_diez']);
            $sheet->setCellValue('BU'  . $rowNumber, $row['valor_agregado_diez_evaluador']);
            $sheet->setCellValue('BV'  . $rowNumber, $row['total_segmento_cuatro']);
            $sheet->setCellValue('BW'  . $rowNumber, $row['puntuaje_segmento_cuatro']);
            $sheet->setCellValue('BX'  . $rowNumber, $row['total_segmento_cuatro_evaluador']);
            $sheet->setCellValue('BY'  . $rowNumber, $row['puntuaje_segmento_cuatro_evaluador']);
            $sheet->setCellValue('BZ'  . $rowNumber, $row['total_global']);
            $sheet->setCellValue('CA'  . $rowNumber, $row['total_global_evaluador']);
            $sheet->setCellValue('CB'  . $rowNumber, $row['comentarios_evaluado']);
            $sheet->setCellValue('CC'  . $rowNumber, $row['comentarios_evaluador_uno']);
            $sheet->setCellValue('CD'  . $rowNumber, $row['comentarios_evaluador_dos']);
            $sheet->setCellValue('CE'  . $rowNumber, $row['comentarios_evaluador_tres']);
            $sheet->setCellValue('CF'  . $rowNumber, $row['comentarios_evaluador_cuatro']);
            $rowNumber++;
        }

        // Descargar el archivo Excel
        $writer = new Xlsx($spreadsheet);
        $filename = 'respuestas_' . $nombrePeriodo . '.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        exit;
    }

    public function finalizarEvaluacion()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ($this->session->adm == '0') {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $db = \Config\Database::connect();
        $userBuilder = $db->table('usuarios');
        // Actualizar evaluacion a 0 y con_evaluador a NULL donde id_categoria es 1
        $userBuilder->where('id_categoria', 1);
        $userBuilder->update(['evaluacion' => 0, 'con_evaluador' => null]);
        // Actualizar ver_evaluacion a 0 donde id_categoria es 3 o 4
        $userBuilder->resetQuery(); // Resetear la consulta antes de aplicar un nuevo where
        $userBuilder->whereIn('id_categoria', [3, 4]);
        $userBuilder->update(['ver_evaluacion' => 0]);
        return redirect()->back();
    }

    public function usuariosEliminados()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Usuarios / Usuarios Eliminados';

        $datos = ['usuario' => $this->session->usuario, 'current' => $current];
        echo view('scii/admin/header', $datos);
        echo view('scii/admin/usuariosEliminados');
        echo view('scii/admin/navbar');
    }
    public function getUsuariosEliminados()
    {
        $dataTable = new DataTable();
        // process($modelClass, $columns, $where = [])
        $response = $dataTable->process7('UsuariosModel', 'UnidadesModel', [
            [
                'name' => 'usuario'
            ],
            [
                'name' => 'descripcion'
            ],
            [
                'name' => 'nombre_s',
                'formatter' => 'nombre'
            ],
            [
                'name' => 'nombre_categoria'
            ],
            [
                'name' => 'usuarios.activo',
                'formatter' => 'activo'
            ],
            [
                'name' => 'adm',
                'formatter' => 'admin'
            ],
            [
                'name' => 'admGen',
                'formatter' => 'permisos'
            ],
            [
                'name' => 'id_usuario',
                'formatter' => 'action_links_respuesta'
            ],
            [
                'name' => 'fecha_ultimo_acceso'
            ],
            [
                'name' => 'apellido_m'
            ],
            [
                'name' => 'usuarios.id_unidad'
            ],
            [
                'name' => 'apellido_p'
            ]
        ]);
        /* return $this->setResponseFormat('json')->respond($response); */
        return json_encode($response);
    }




    // Comienza el codigo concerniente a la evidencia de informe de gobierno
    public function informe()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Evidencia / Informe de Gobierno';
        if (isset($edi))
            $ban = $this->cargas->where(['id_carga' => $edi])->first();
        $datos = isset($edi) ? ['usuario' => $this->session->usuario, 'current' => $current, 'edi' => $ban] : ['usuario' => $this->session->usuario, 'current' => $current];
        echo view('scii/admin/header');
        echo view('scii/admin/informe/informe', $datos);
        echo view('scii/admin/navbar');
    }
    public function solicitarInforme()
    {
        if (!isset($this->session->id_usuario) || $this->session->adm == '0') {
            return redirect()->to(base_url());
        }
        $anio = $this->request->getPost('anio');
        $numeroEtapa = (int) $this->request->getPost('etapa');

        if (!$anio || !$numeroEtapa) {
            return redirect()->back()
                ->with('mensaje', 'Selecciona un año y una etapa válidos.');
        }
        $periodoActivo = $this->periodosAnuales
            ->where('estado', 'activo')
            ->first();

        if ($periodoActivo && $periodoActivo['anio'] != $anio) {
            $this->periodosAnuales
                ->where('id_periodo_anual', $periodoActivo['id_periodo_anual'])
                ->set([
                    'estado' => 'inactivo',
                    'fecha_cierre' => date('Y-m-d')
                ])
                ->update();
        }
        // Buscar o crear periodo anual
        $periodo = $this->periodosAnuales
            ->where('anio', $anio)
            ->first();
        if (!$periodo) {
            $idPeriodo = $this->periodosAnuales->insert([
                'anio' => $anio,
                'estado' => 'activo'
            ]);
            // Crear las 4 etapas
            for ($i = 1; $i <= 4; $i++) {
                $this->etapas->insert([
                    'id_periodo_anual' => $idPeriodo,
                    'numero_etapa' => $i,
                    'nombre' => "Etapa $i",
                    'estado' => 'cerrada'
                ]);
            }
        } else {
            $idPeriodo = $periodo['id_periodo_anual'];
            $this->periodosAnuales
                ->where('id_periodo_anual', $idPeriodo)
                ->set(['estado' => 'activo'])
                ->update();
        }
        // Cerrar cualquier etapa abierta
        $this->etapas
            ->where('estado', 'abierta')
            ->set(['estado' => 'cerrada', 'fecha_fin' => date('Y-m-d')])
            ->update();
        //  Abrir la etapa seleccionada
        $this->etapas
            ->where('id_periodo_anual', $idPeriodo)
            ->where('numero_etapa', $numeroEtapa)
            ->set([
                'estado' => 'abierta',
                'fecha_inicio' => date('Y-m-d')
            ])
            ->update();
        $this->usuarios
            ->where(['loadinforme' => 1])
            ->set(['informe' => 1])
            ->update();
        return redirect()->back()
            ->with('mensaje', "Se abrió la Etapa $numeroEtapa del año $anio.");
    }
    public function informes()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Evidencia / Informes de Gobierno';
        if (isset($edi))
            $ban = $this->cargas->where(['id_carga' => $edi])->first();
        $datos = isset($edi) ? ['usuario' => $this->session->usuario, 'current' => $current, 'edi' => $ban] : ['usuario' => $this->session->usuario, 'current' => $current];
        echo view('scii/admin/header');
        echo view('scii/admin/informe/informes', $datos);
        echo view('scii/admin/navbar');
    }

    // public function getUnidadesConInformes()
    // {
    //     if (!isset($this->session->id_usuario)) {
    //         return $this->response->setJSON(['error' => 'No autorizado']);
    //     }
    //     if ((($this->session->adm) == '0')) {
    //         return $this->response->setJSON(['error' => 'No autorizado']);
    //     }
    //     $db = \Config\Database::connect();
    //     // Obtener todas las unidades activas
    //     $unidades = $this->unidades->where('activo', 1)->findAll();
    //     // Obtener usuarios con permisos de informe por unidad
    //     $builder = $db->table('usuarios');
    //     $builder->select('usuarios.id_unidad, COUNT(usuarios.id_usuario) as total_usuarios, 
    //                      SUM(CASE WHEN usuarios.informe = 1 THEN 1 ELSE 0 END) as usuarios_con_informe,
    //                      SUM(CASE WHEN usuarios.loadinforme = 1 THEN 1 ELSE 0 END) as usuarios_activos');
    //     $builder->where('usuarios.activo', 1);
    //     $builder->groupBy('usuarios.id_unidad');

    //     $queryResult = $builder->get();
    //     $estadisticasUsuarios = $queryResult->getResultArray();

    //     // Crear un mapa de estadísticas por unidad
    //     $statsMap = [];
    //     foreach ($estadisticasUsuarios as $stat) {
    //         $statsMap[$stat['id_unidad']] = $stat;
    //     }
    //     // Generar informes de ejemplo basados en las etapas y periodos actuales
    //     $currentYear = date('Y');
    //     $informesFormateados = [];

    //     // Obtener etapas activas o recientes
    //     $etapasBuilder = $db->table('etapas');
    //     $etapasBuilder->select('etapas.*, periodos_anuales.anio');
    //     $etapasBuilder->join('periodos_anuales', 'periodos_anuales.id_periodo_anual = etapas.id_periodo_anual', 'left');
    //     $etapasBuilder->orderBy('periodos_anuales.anio', 'DESC');
    //     $etapasBuilder->orderBy('etapas.numero_etapa', 'DESC');
    //     $etapasBuilder->limit(20);

    //     $etapasResult = $etapasBuilder->get();
    //     $etapas = $etapasResult->getResultArray();
    //     // Crear informes basados en etapas y unidades con usuarios activos
    //     foreach ($unidades as $unidad) {
    //         $idUnidad = $unidad['id_unidad'];
    //         $tieneUsuarios = isset($statsMap[$idUnidad]) && $statsMap[$idUnidad]['usuarios_activos'] > 0;
    //         if ($tieneUsuarios && !empty($etapas)) {
    //             // Agregar algunos informes de ejemplo para unidades con usuarios activos
    //             $numInformes = rand(2, min(6, count($etapas)));
    //             for ($i = 0; $i < $numInformes; $i++) {
    //                 if (isset($etapas[$i])) {
    //                     $etapa = $etapas[$i];
    //                     $anio = $etapa['anio'] ?? $currentYear;
    //                     $numeroEtapa = $etapa['numero_etapa'] ?? ($i + 1);
    //                     // Determinar estado basado en el estado de la etapa
    //                     $estado = 'pendiente';
    //                     if (isset($etapa['estado'])) {
    //                         if ($etapa['estado'] == 'cerrada') {
    //                             $estado = 'completado';
    //                         } else if ($etapa['estado'] == 'abierta') {
    //                             $estado = rand(0, 1) ? 'revision' : 'pendiente';
    //                         }
    //                     }
    //                     $informesFormateados[] = [
    //                         'id_unidad' => $idUnidad,
    //                         'anio' => $anio,
    //                         'etapa' => $numeroEtapa,
    //                         'estado' => $estado,
    //                         'fecha' => isset($etapa['fecha_fin']) ? $etapa['fecha_fin'] : (isset($etapa['fecha_inicio']) ? $etapa['fecha_inicio'] : null)
    //                     ];
    //                 }
    //             }
    //         }
    //     }
    //     // Enriquecer unidades con información de estadísticas
    //     foreach ($unidades as &$unidad) {
    //         $idUnidad = $unidad['id_unidad'];
    //         $unidad['total_usuarios'] = $statsMap[$idUnidad]['total_usuarios'] ?? 0;
    //         $unidad['usuarios_con_informe'] = $statsMap[$idUnidad]['usuarios_con_informe'] ?? 0;
    //         $unidad['usuarios_activos'] = $statsMap[$idUnidad]['usuarios_activos'] ?? 0;
    //         // Contar informes para esta unidad
    //         $count = 0;
    //         foreach ($informesFormateados as $informe) {
    //             if ($informe['id_unidad'] == $idUnidad) {
    //                 $count++;
    //             }
    //         }
    //         $unidad['total_informes'] = $count;
    //     }
    //     return $this->response->setJSON([
    //         'unidades' => $unidades,
    //         'informes' => $informesFormateados
    //     ]);
    // }


    public function getUnidadesConInformes()
    {
        if (!isset($this->session->id_usuario)) {
            return $this->response->setJSON(['error' => 'No autorizado']);
        }

        if ($this->session->adm == '0') {
            return $this->response->setJSON(['error' => 'No autorizado']);
        }

        $db = \Config\Database::connect();

        $unidades = $this->unidades
            ->where('activo', 1)
            ->findAll();
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

        foreach ($unidades as &$unidad) {
            $idUnidad = $unidad['id_unidad'];

            $unidad['total_usuarios'] = $statsMap[$idUnidad]['total_usuarios'] ?? 0;
            $unidad['usuarios_con_informe'] = $statsMap[$idUnidad]['usuarios_con_informe'] ?? 0;
            $unidad['usuarios_activos'] = $statsMap[$idUnidad]['usuarios_activos'] ?? 0;

            $unidad['total_informes'] = 0;
            foreach ($informesFormateados as $informe) {
                if ($informe['id_unidad'] == $idUnidad) {
                    $unidad['total_informes']++;
                }
            }
        }

        return $this->response->setJSON([
            'unidades' => $unidades,
            'informes' => $informesFormateados
        ]);
    }

    public function detalle($id_informe)
    {
        // Validar sesión
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        
        // Validar permisos de administrador
        if ($this->session->adm == '0') {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $idUnidad = $this->informesGobierno
            ->where('id_informe', $id_informe)
            ->first();
        $unidad = $idUnidad['id_unidad'] ?? null;

        $id_unidad = $this->unidades
            ->where('id_unidad', $unidad)
            ->first();

        $lineasModel = new LineasAccionModel();
        $lineas = $lineasModel->getLineasAccionConContexto();
        $lineasSocioambientalModel = new LineasAccionSocioambientalModel();
        $lineasSocioambiental = $lineasSocioambientalModel->getLineasAccionConContexto();
        $lineasAguaModel = new LineasAccionAguaModel();
        $lineasAgua = $lineasAguaModel->getLineasAccionConContexto();
        $odsTemasModel = new OdsTemasModel();
        $odsTemas = $odsTemasModel->getODS();
        $db = \Config\Database::connect();


        // Obtener información del periodo anual
        $periodoAnual = $this->periodosAnuales
            ->where('estado', 'activo')
            ->first();

        // Obtener el informe específico
        $builder = $db->table('informes_gobierno');
        $builder->select('informes_gobierno.*, usuarios.nombre_s, usuarios.apellido_p, usuarios.apellido_m, 
                         usuarios.usuario, etapas.numero_etapa, periodos_anuales.anio');
        $builder->join('usuarios', 'usuarios.id_usuario = informes_gobierno.id_usuario', 'left');
        $builder->join('etapas', 'etapas.id_etapa = informes_gobierno.id_etapa', 'left');
        $builder->join('periodos_anuales', 'periodos_anuales.id_periodo_anual = informes_gobierno.id_periodo_anual', 'left');
        $builder->where('informes_gobierno.id_informe', $id_informe);
        $builder->orderBy('informes_gobierno.created_at', 'DESC');
        
        $queryResult = $builder->get();
        $informe = $queryResult->getRowArray();

        // Obtener archivos relacionados (si existen en la base de datos)
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
            $comentariosBuilder->select('informe_comentarios.*, usuarios.nombre_s, usuarios.apellido_p, usuarios.apellido_m');
            $comentariosBuilder->join('usuarios', 'usuarios.id_usuario = informe_comentarios.id_usuario', 'left');
            $comentariosBuilder->where('id_informe', $informe['id_informe']);
            $comentariosBuilder->orderBy('created_at', 'DESC');
            $comentariosResult = $comentariosBuilder->get();
            $comentarios = $comentariosResult->getResultArray();
        }

        // Preparar datos para la vista
        $datos = [
            'usuario' => $this->session->usuario,
            'current' => 'Detalle del Informe',
            'informe' => $informe,
            'periodoAnual' => $periodoAnual,
            'archivos' => $archivos,
            'comentarios' => $comentarios,
            'archivos_count' => count($archivos),
            'comentarios_count' => count($comentarios),
            'lineas' => $lineas,
            'lineasSocioambiental' => $lineasSocioambiental,
            'lineasAgua' => $lineasAgua,
            'odsTemas' => $odsTemas,
            'id_unidad' => $id_unidad
        ];
        echo view('scii/admin/header');
        echo view('scii/admin/informe/detalle', $datos);
        echo view('scii/admin/navbar');
    }


    public function finalizarEtapa()
    {
        //  Validar sesión y permisos
        if (!isset($this->session->id_usuario) || $this->session->adm == '0') {
            return redirect()->to(base_url());
        }

        //  Buscar la etapa actualmente abierta
        $etapaAbierta = $this->etapas
            ->where('estado', 'abierta')
            ->first();
        $anio = $this->periodosAnuales
            ->where('estado', 'activo')
            ->first();
        //  Validar que exista una etapa abierta
        if (!$etapaAbierta) {
            return redirect()->back()
                ->with('mensaje', 'No hay ninguna etapa abierta para finalizar.');
        }

        //  Finalizar la etapa
        $this->etapas
            ->where('id_etapa', $etapaAbierta['id_etapa']) // ajusta al nombre real de tu PK
            ->set([
                'estado'     => 'cerrada',
                'fecha_fin'  => date('Y-m-d')
            ])
            ->update();

        //  Opcional: bloquear informes a usuarios
        $this->usuarios
            ->where('loadinforme', 1)
            ->set(['informe' => 0])
            ->update();

        // Mensaje final
        return redirect()->back()
            ->with(
                'mensaje',
                "Se finalizó la Etapa {$etapaAbierta['numero_etapa']} del año {$anio['anio']}."
            );
    }














































    // Comienza el codigo concerniente a la evidencia de glosa
    public function glosa()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        if ((($this->session->adm) == '0')) {
            return redirect()->to(base_url() . '/inicio/land');
        }
        $current = 'Evidencia / Informe de Gobierno';
        if (isset($edi))
            $ban = $this->cargas->where(['id_carga' => $edi])->first();
        $datos = isset($edi) ? ['usuario' => $this->session->usuario, 'current' => $current, 'edi' => $ban] : ['usuario' => $this->session->usuario, 'current' => $current];
        echo view('scii/admin/header');
        echo view('scii/admin/glosa', $datos);
        echo view('scii/admin/navbar');
    }
}
