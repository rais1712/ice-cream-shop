<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Order Form</h1>
            <form action="/order/confirm/<?= $pelanggan['id_pelanggan'] ?>" method="post">
            <div class="form-group">
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <input type="id_pelanggan" class="form-control" name="id_pelanggan" id="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Nama Pelanggan</label>
                    <input type="nama_pelanggan" class="form-control" name="nama_pelanggan" id="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan'] ?>">
                </div>
                <div class="form-group">
                    <label for="no_telp">Nomor Telpon</label>
                    <input type="no_telp" class="form-control" name="no_telp" id="no_telp" value="<?= $pelanggan['no_telp'] ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="alamat" class="form-control" name="alamat" id="alamat" value="<?= $pelanggan['alamat'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= $pelanggan['email'] ?>">
                </div>
                <div class="form-group">
                    <input type="id_iceCream" class="form-control" name="id_iceCream" id="id_iceCream" value="<?= $iceCream['id_iceCream'] ?>" readonly hidden>
                </div>
                <div class="form-group">
                    <label for="nama_iceCream">Nama Ice Cream</label>
                    <input type="nama_iceCream" class="form-control" name="nama_iceCream" id="nama_iceCream" value="<?= $iceCream['nama_iceCream'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="topping">Topping</label>
                    <input type="topping" class="form-control" name="topping" id="topping" value="<?= $iceCream['topping'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="harga" class="form-control" name="harga" id="harga" value="<?= $iceCream['harga'] ?>" readonly>
                </div>
                <div class="button" style="margin-top: 20px;">
                    <button class="btn btn-dark" name="buy_now">Confirm to Order Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content');?>