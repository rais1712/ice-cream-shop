<?php

namespace App\Controllers;
use App\Models\PelangganModel;
use App\Models\UserModel;

use CodeIgniter\HTTP\Request;

class Pelanggan extends BaseController
{
    public function displayPelanggan()
    {
        $model = new PelangganModel();
        if (session()->get('level') === '2') {
            $data = [
                'pelanggan' => $model->getPelanggan(),
            ];
            return view('pelanggan', $data);
        } else {
            $email = session()->get('email');
            $data = [
                'pelanggan' => $model->getPelangganByEmail($email),
            ];
            return view('pelanggan', $data);
        }
    }

    public function addPelanggan()
    {
        return view('pelangganAdd');
    }

    public function savePelanggan()
    {
        $model = new PelangganModel();
        $data = array(
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
            'email' => $this->request->getPost('email'),
        );
        $model->savePelanggan($data);
        return redirect()->to('http://localhost:8080/pelanggan');
    }

    public function editPelanggan($id_pelanggan)
    {
        $model = new PelangganModel();
        $data = [
            'pelanggan' => $model->getPelanggan($id_pelanggan),
        ];
        return view('pelangganEdit', $data);
    }

    public function updatePelanggan($id_pelanggan)
    {
        $model = new PelangganModel();
        $data = [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
            'email' => $this->request->getPost('email'),
        ];
        $model->updatePelanggan($id_pelanggan, $data);
        return redirect()->to('http://localhost:8080/pelanggan');
    }

    public function deletePelanggan($id_pelanggan)
    {
        $model = new PelangganModel();
        $model->deletePelanggan($id_pelanggan);
        return redirect()->to('http://localhost:8080/pelanggan');
    }

    public function transformToAdmin($email)
    {
        $model = new UserModel();
        $dataUser = $model->getUserByEmail($email);
        $id = $dataUser['id'];
        $data['level'] = '2';
        $model->updateUser($id, $data);
        return redirect()->to('http://localhost:8080/pelanggan');
    }
}

