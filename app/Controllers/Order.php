<?php

namespace App\Controllers;
use App\Models\PelangganModel;
use App\Models\IceCreamModel;
use App\Models\TransactionModel;

use CodeIgniter\HTTP\Request;

class Order extends BaseController
{
    public function createOrder($id_iceCream)
    {
        $model = new PelangganModel();
        $model2 = new IceCreamModel();
        $email = session()->get('email');
        $data = [
            'pelanggan' => $model->getPelangganByEmail($email),
            'iceCream' => $model2->getIceCream($id_iceCream),
        ];
        return view('order', $data);
    }

    public function confirmOrder($id_pelanggan)
    {
        $model = new PelangganModel();
        $model2 = new TransactionModel();
        $data = array(
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
        );
        $data2 = array(
            'id_pelanggan' => $this->request->getPost('id_pelanggan'),
            'id_iceCream' => $this->request->getPost('id_iceCream'),
        );
        $model->updatePelanggan($id_pelanggan, $data);
        $model2->saveTransaction($data2);
        return redirect()->to('http://localhost:8080/transaction');
    }
}

