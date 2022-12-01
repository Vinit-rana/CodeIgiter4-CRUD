<?php namespace App\Models;

use CodeIgniter\Model;

class Student extends Model
{       
    protected $table ='students';
    protected $primarykey = 'id' ;
    protected $allowedFields = [
        'name',
        'email',
        'phone'
    ]; 

}

?>


