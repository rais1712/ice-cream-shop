<?php

namespace App\Models;

use CodeIgniter\Model;

class HargaModel extends Model
{
    protected $table            = 'harga';
    protected $primaryKey       = 'tipe_harga';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'tipe_harga','harga'
    ];

    public function getHarga($tipe_harga = false){
        if($tipe_harga === false) {
            return $this->findAll();
        }else {
            return $this->where('tipe_harga', $tipe_harga)->first();
        }
    }

    public function saveHarga($data) {
        return $this->insert($data);
    }

    public function updateHarga($tipe_harga, $data) {
        return $this->update($tipe_harga, $data);
    }

    public function deleteHarga($tipe_harga) {
        return $this->delete($tipe_harga);
    }
}
?>