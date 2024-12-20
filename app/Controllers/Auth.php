<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PelangganModel;

class Auth extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[32]|validateUser[email,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or password don\'t match'
                ]
            ];

            if(!$this->validate($rules,$errors)) {
                $data['validation'] = $this->validator;
            }else {
                $model = new UserModel();

                $user = $model->where('email',$this->request->getVar('email'))->first();
                $this->setUserSession($user);
                session()->setFlashData('success','Login Success!');
                return redirect()->to('http://localhost:8080/home');
            }
        }
        return view('login',$data);
    }

    private function setUserSession($user) {
        $data = [
            'email' => $user['email'],
            'password' => $user['password'],
            'level' => $user['level'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function register(){
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[32]',
                'password_confirm' => 'matches[password]',
            ];
            if(!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else {
                $model = new UserModel();
                $model2 = new PelangganModel();

                $data = [
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'level' => $this->request->getVar('level')
                ];

                $data2 = [
                    'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
                    'alamat' => $this->request->getVar('alamat'),
                    'no_telp' => $this->request->getVar('no_telp'),
                    'email' => $this->request->getVar('email'),
                ];

                $model->save($data);
                $model2->savePelanggan($data2);
                session()->setFlashData('success','Register Success!');
                return redirect()->to('http://localhost:8080/');
            }
        }
        return view('register',$data);
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('http://localhost:8080/');
    }
}