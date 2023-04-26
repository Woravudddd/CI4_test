<?php namespace App\Models;
use CodeIgniter\Model;


class RegisterModel extends Model 
{

    protected $table = 'tbl_register';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email','password','phone','fname','lname',];

}
