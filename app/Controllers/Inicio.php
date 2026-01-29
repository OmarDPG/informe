<?php

namespace App\Controllers;
use App\Models\UsuariosModel;
use App\Models\LogsModel;
class Inicio extends BaseController
{

    protected $usuarios, $logs, $session, $reglasLogin;
    public function __construct(){
        helper(['form']);
        $this->usuarios=new UsuariosModel();
        $this->logs=new LogsModel();
        $this->session=session();
        $this->reglasLogin=[
            'usuario'=>[
                'rules'=>'required',
                'errors'=>['required'=>'El campo usuario es obligatorio.'
            ]],
            'password'=>[
                'rules'=>'required',
                'errors'=>['required'=>'El campo contraseña es obligatorio.'
            ]],
        ];
    }
    public function index()
    {
        if((isset($this->session->id_usuario))){ return redirect()->to(base_url().'/inicio/land');}
        return view('login');
    }
    public function valida(){
        //return redirect()->to(base_url().'/cocodi/inicio');
        if(isset($this->session->id_usuario)){ return redirect()->to(base_url().'/inicio/land');}
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if($this->request->getMethod()== "post" && $this->validate($this->reglasLogin)){
            $password=test_input($this->request->getPost('password'));
            $usuario=test_input($this->request->getPost('usuario'));
            $datosusuario=$this->usuarios->where(['usuario'=>$usuario, 'activo'=>1])->first();

            if($datosusuario!=null){
                if(password_verify($password, $datosusuario['password'])){
                    $datosSesion=[
                    'usuario'=>$datosusuario['usuario'],
                    'id_usuario'=>$datosusuario['id_usuario'],
                    'id_unidad'=>$datosusuario['id_unidad'],
                    'nombre_s'=>$datosusuario['nombre_s'],
                    'apellido_p'=>$datosusuario['apellido_p'],
                    'apellido_m'=>$datosusuario['apellido_m'],
                    'admGen'=>$datosusuario['admGen'],
                    'adm'=>$datosusuario['adm'],
                    'fecha_ultimo_acceso'=>$datosusuario['fecha_ultimo_acceso'],
                    'c_acceso'=>date('Y-m-d H:i:s'),
                    //'scii'=>$datosusuario['scii']
                    ];
                    $session=session();
                    $session->set($datosSesion);
                    $this->usuarios->update($session->id_usuario,['fecha_ultimo_acceso'=>$session->c_acceso]);
                    return $datosusuario['adm']==1?redirect()->to(base_url().'/inicio/adm'):redirect()->to(base_url().'/inicio/land');
                }else{
                    $data['error']="Contraseña errónea.";
                    echo view('login',$data);
                }
            }else{
                $data['error']="El usuario no existe.";
                echo view('login',$data);
            }
        }
        else{
            $data=['validation'=>$this->validator];
            echo view('login', $data);
        }
    }
    public function land(){
        if((!isset($this->session->id_usuario))){ return redirect()->to(base_url().'/inicio');}
        /* return view('sistema'); */ //Aquí sería para página de inicio y enlace a futuros sistemas
        return redirect()->to(base_url().'/scii/inicio');

    }
    public function adm(){
        if((!isset($this->session->id_usuario))){ return redirect()->to(base_url().'/inicio');}
        if(($this->session->adm!=1)){ return redirect()->to(base_url().'/inicio');}
        /* return view('sistema'); */ //Aquí sería para página de inicio y enlace a futuros sistemas
        return redirect()->to(base_url().'/administrador/inicio');

    }
    public function logout(){
        if(!isset($this->session->id_usuario)){ return redirect()->to(base_url().'/inicio');}
        $session=session();
        $this->usuarios->update($session->id_usuario,['fecha_ultimo_acceso'=>$session->c_acceso]);
        $session->destroy();//session_destroy
        return redirect()->to(base_url().'/inicio');
    }
}
