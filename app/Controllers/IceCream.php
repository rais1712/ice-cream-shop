<?php

namespace App\Controllers;
use App\Models\IceCreamModel;

use CodeIgniter\HTTP\Request;

class IceCream extends BaseController
{
    public function displayProduct()
    {   
        $model = new IceCreamModel();
        $data = [
            'iceCream' => $model->getIceCream(),
        ];
        return view('product', $data);
    }

    public function addProduct()
    {
        return view('productAdd');
    }

    public function saveProduct()
    {
        $model = new IceCreamModel();
        $data = array(
            'id_iceCream' => $this->request->getPost('id_iceCream'),
            'nama_iceCream' => $this->request->getPost('nama_iceCream'),
            'topping' => $this->request->getPost('topping'),
            'tipe_harga' => $this->request->getPost('tipe_harga'),
        );
        $model->saveIceCream($data);
        return redirect()->to('http://localhost:8080/product');
    }

    public function editProduct($id_iceCream)
    {
        $model = new IceCreamModel();
        $data = [
            'iceCream' => $model->getIceCream($id_iceCream),
        ];
        return view('productEdit', $data);
    }

    public function updateProduct($id_iceCream)
    {
        $model = new IceCreamModel();
        $data = [
            'nama_iceCream' => $this->request->getPost('nama_iceCream'),
            'topping' => $this->request->getPost('topping'),
            'tipe_harga' => $this->request->getPost('tipe_harga'),
        ];
        $model->updateIceCream($id_iceCream, $data);
        return redirect()->to('http://localhost:8080/product');
    }

    public function deleteProduct($id_iceCream)
    {
        $model = new IceCreamModel();
        $model->deleteIceCream($id_iceCream);
        return redirect()->to('http://localhost:8080/product');
    }
}

