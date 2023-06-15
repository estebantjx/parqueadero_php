<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table      = 'conductor';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';

    protected $allowedFields = ['documento','nombre','apellido','telefono','tipodocumento'];
}