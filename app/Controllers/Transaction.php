<?php

namespace App\Controllers;
use App\Models\PelangganModel;
use App\Models\IceCreamModel;
use App\Models\TransactionModel;

use CodeIgniter\HTTP\Request;

class Transaction extends BaseController
{
    public function displayTransaction()
    {
        $model = new TransactionModel();
        if (session()->get('level') === '2') {
            $data = [
                'transaction' => $model->getTransaction(),
            ];
            return view('transaction', $data);
        } else {
            $model2 = new PelangganModel();
            $email = session()->get('email');
            $dataPelanggan = $model2->getPelangganByEmail($email);
            $id_pelanggan = $dataPelanggan['id_pelanggan'];
            $data = [
                'transaction' => $model->getTransactionByPelanggan($id_pelanggan),
            ];
            return view('transaction', $data);
        }
    }

    public function addTransaction()
    {
        return view('transactionAdd');
    }

    public function saveTransaction()
    {
        $model = new TransactionModel();
        $data = array(
            'id_pelanggan' => $this->request->getPost('id_pelanggan'),
            'id_iceCream' => $this->request->getPost('id_iceCream'),
        );
        $model->saveTransaction($data);
        return redirect()->to('http://localhost:8080/transaction');
    }

    public function editTransaction($no_transaksi)
    {
        $model = new TransactionModel();
        $data = [
            'transaction' => $model->getTransaction($no_transaksi),
        ];
        return view('transactionEdit', $data);
    }

    public function updateTransaction($no_transaksi)
    {
        $model = new TransactionModel();
        $data = [
            'id_pelanggan' => $this->request->getPost('id_pelanggan'),
            'id_iceCream' => $this->request->getPost('id_iceCream'),
        ];
        $model->updateTransaction($no_transaksi, $data);
        return redirect()->to('http://localhost:8080/transaction');
    }

    public function deleteTransaction($no_transaksi)
    {
        $model = new TransactionModel();
        $model->deleteTransaction($no_transaksi);
        return redirect()->to('http://localhost:8080/transaction');
    }
}

