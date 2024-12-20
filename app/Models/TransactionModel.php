<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'no_transaksi';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_pelanggan','id_iceCream'
    ];

    public function getTransaction($no_transaksi = false){
        $builder = $this->db->table('transaksi');
        $builder->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan');
        $builder->join('iceCream', 'transaksi.id_iceCream = iceCream.id_iceCream')->join('harga', 'iceCream.tipe_harga = harga.tipe_harga');
        $query = $builder->get();
        if($no_transaksi === false) {
            return $query->getResult();
        }else {
            return $this->where('no_transaksi', $no_transaksi)->first();
        }
    }

    public function getTransactionByPelanggan($id_pelanggan = false) {
        $builder = $this->db->table('transaksi');
        $builder->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan');
        $builder->join('iceCream', 'transaksi.id_iceCream = iceCream.id_iceCream')->join('harga', 'iceCream.tipe_harga = harga.tipe_harga');
        $builder->where('transaksi.id_pelanggan', $id_pelanggan);
        $query = $builder->get();
        return $query->getResult();
    }

    public function saveTransaction($data) {
        return $this->insert($data);
    }

    public function updateTransaction($no_transaksi, $data) {
        return $this->update($no_transaksi, $data);
    }

    public function deleteTransaction($no_transaksi) {
        return $this->delete($no_transaksi);
    }
}
?>