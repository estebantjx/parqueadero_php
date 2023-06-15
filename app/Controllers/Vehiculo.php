<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Vehiculo_A;

class Vehiculo extends Controller{

    public function index()
    {

        $veh = new Vehiculo_A();
        $datos['vehiculo']=$veh->findAll();
        return view('welcome_message',$datos);
    }

    public function agregar()
    {

        
        return view('agregarVehiculo');
    }
    public function insertar()
    {
       
        $veh = new Vehiculo_A();

        $data=[
            'marca' => $_POST['marca'],
            'placa' => $_POST['placa'],
            'modelo' => $_POST['modelo'],
            'espacios' => $_POST['espacios']
            
        ];

        $veh->insert($data);
        return redirect()->to(base_url());
       
        

        
    }
    public function eliminar($id=null)
    {
        
      

       $veh = new Vehiculo_A();
        $veh->delete($id);

        
        return redirect()->to(base_url());
    }
    public function editar($id = null)
    {

        $veh = new Vehiculo_A();
        $registro['vehiculo']= $veh->find($id);

      return view('actualizandoVehiculo',$registro);
     


       // return redirect()->to(base_url());
    }
    public function factualizar()
    {

        $veh = new Vehiculo_A();
        $id= $_POST['id'];

        $data = [

            'marca' => $_POST['marca'],
            'placa' => $_POST['placa'],
            'modelo' => $_POST['modelo'],
            'espacios' => $_POST['espacios']

        ];
        $veh->update($id,$data);

        



       return redirect()->to(base_url());
    }





}