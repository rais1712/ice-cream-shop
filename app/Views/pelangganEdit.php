<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Pelanggan Form</h1>
            <form action="/pelanggan/edit/<?= $pelanggan['id_pelanggan'] ?>" method="post">
                <div class="form-group">
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <input type="id_pelanggan" class="form-control" name="id_pelanggan" id="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="nama_pelanggan" class="form-control" name="nama_pelanggan" id="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan'] ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="alamat" class="form-control" name="alamat" id="alamat" value="<?= $pelanggan['alamat'] ?>">
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telpon</label>
                    <input type="no_telp" class="form-control" name="no_telp" id="no_telp" value="<?= $pelanggan['no_telp'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= $pelanggan['email'] ?>">
                </div>
                <div class="button" style="margin-top: 20px;">
                    <button class="btn btn-dark" name="update_data">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content');?>