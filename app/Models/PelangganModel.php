<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table            = 'pelanggan';
    protected $primaryKey       = 'id_pelanggan';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_pelanggan',
        'alamat',
        'no_telp',
        'email'
    ];

    public function getPelanggan($id_pelanggan = false)
    {
        $builder = $this->db->table('pelanggan');
        $builder->join('users', 'users.email = pelanggan.email');
        $query = $builder->get();
        if ($id_pelanggan === false) {
            return $query->getResult();
        } else {
            return $this->where('id_pelanggan', $id_pelanggan)->first();
        }
    }

    public function getPelangganByEmail($email = false)
    {
        if ($email === false) {
            return $this->findAll();
        } else {
            return $this->where('email', $email)->first();
        }
    }

    public function savePelanggan($data)
    {
        return $this->insert($data);
    }

    public function updatePelanggan($id_pelanggan, $data)
    {
        return $this->update($id_pelanggan, $data);
    }

    public function deletePelanggan($id_pelanggan)
    {
        return $this->delete($id_pelanggan);
    }
}
