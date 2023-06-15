<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Conductor_A;

class Conductor extends Controller{

    public function index()
    {

        $con = new Conductor_A();
        $datos['conductor']=$con->findAll();
        return view('welcome_message_1',$datos);
    }

    public function agregar()
    {

        
        return view('agregarConductor');
    }
    public function insertar()
    {
       
        $con = new Conductor_A();

        $data=[
            'documento' => $_POST['documento'],
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'telefono' => $_POST['telefono'],
            'tipodocumento' => $_POST['tipodocumento'],
        ];

        $con->insert($data);
        return redirect()->to(base_url());
       
        

        
    }
    public function eliminar($id=null)
    {
        
      

       $con = new Conductor_A();
        $con->delete($id);

        
        return redirect()->to(base_url());
    }
    public function editar($id = null)
    {

        $con = new Conductor_A();
        $registro['conductor']= $con->find($id);

      return view('actualizandoConductor',$registro);
     


       // return redirect()->to(base_url());
    }
    public function factualizar()
    {

        $con = new Conductor_A();
        $id= $_POST['id'];

        $data = [

            'documento' => $_POST['documento'],
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'telefono' => $_POST['telefono'],
            'tipodocumento' => $_POST['tipodocumento'],

        ];
        $con->update($id,$data);

        



       return redirect()->to(base_url());
    }





}