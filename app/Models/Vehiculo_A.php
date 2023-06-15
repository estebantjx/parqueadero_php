<?php 
namespace App\Models;

use CodeIgniter\Model;

class Vehiculo_A extends Model{
    protected $table      = 'vehiculo';
    
     protected $primaryKey = 'id';

    protected $allowedFields = ['marca','placa','modelo','espacios'];
}