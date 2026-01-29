<?php

namespace App\Controllers;

use App\Libraries\DataTable;
use CodeIgniter\Files\File;
use App\Models\UsuariosModel;
use App\Models\PeriodosModel;
use App\Models\CategoriasModel;
use App\Models\UnidadesModel;

class Informe extends BaseController
{
    protected $usuarios, $logs, $session, $reglasUsuarioEdi, $unidades, $categorias, $periodo;
    public function __construct()
    {
        $this->usuarios = new UsuariosModel();
        $this->unidades = new UnidadesModel();
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

        $usuario = $this->usuarios->where([
            'id_usuario'  => $this->session->id_usuario,
            'loadinforme' => 1,
            'informe'     => 1
        ])->first();

        if (!$usuario) {
            return redirect()->to(base_url('inicio'))
                ->with('mensaje', 'No tienes acceso a esta sección.');
        }

        $datos = [
            'nombre_s' => $this->session->nombre_s,
            'current'  => 'Informe',
            'datos'    => $usuario
        ];

        echo view('scii/headerscii', $datos);
        echo view('scii/informe');
        echo view('scii/footerscii');
    }
}
