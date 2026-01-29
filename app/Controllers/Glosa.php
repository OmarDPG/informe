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

class Glosa extends BaseController
{
    protected $usuarios, $logs, $session, $reglasUsuarioEdi, $cargas, $unidades, $evaluaciones, $partes, $preguntas, $respuestas, $categorias, $periodo;
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

    public function index()
    {
        if (!isset($this->session->id_usuario)) {
            return redirect()->to(base_url());
        }
        $id_usuario = $this->session->id_usuario;
        $datos = $this->usuarios->where('id_usuario', $id_usuario)->first();
        $current = "Glosa";
        $datos = ['nombre_s' => $this->session->nombre_s, 'current' => $current, 'datos' => $datos];
        echo view('scii/headerscii', $datos);
        echo view('scii/glosa');
        echo view('scii/footerscii');
    }
}
