<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Pelanggan Form</h1>
            <form action="/pelanggan/save" method="post">
                <div class="form-group">
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="nama_pelanggan" class="form-control" name="nama_pelanggan" id="nama_pelanggan" placeholder="Nama Pelanggan">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="alamat" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telpon</label>
                    <input type="no_telp" class="form-control" name="no_telp" id="no_telp" placeholder="No Telpon">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="button" style="margin-top: 20px;">
                    <button class="btn btn-dark" name="add_data">Add Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content');?>