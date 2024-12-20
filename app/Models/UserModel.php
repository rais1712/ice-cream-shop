<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'email','password', 'level'
    ];

    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashPassword'];
    protected $beforeUpdate   = ['hashPassword'];
   
    protected function hashPassword(array $data) {
        if(isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    public function getUserByEmail($email = false){
        if ($email === false) {
            return $this->findAll();
        } else {
            return $this->where('email',$email)->first();
        }
    }

    public function updateUser($id, $data) {
        return $this->update($id, $data);
    }
}