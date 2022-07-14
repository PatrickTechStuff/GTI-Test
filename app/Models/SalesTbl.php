<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesTbl extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';
    protected $table = 'SalesTbl';
    
     // to set primary key to string 
     public $primaryKey = 'Id';
    //  protected $keyType = 'string';
     // end
 

    public $timestamps = false;
}

