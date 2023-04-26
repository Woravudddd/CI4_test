<?php namespace App\Models;

use CodeIgniter\Model;

class HomeshopModel extends Model 
{

    protected $table = 'tbl_item';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name_item','detail','price','unit','quantity','fname','lname','image'];
}