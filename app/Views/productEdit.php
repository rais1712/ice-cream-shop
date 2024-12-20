<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Order Form</h1>
            <form action="/product/edit/<?= $iceCream['id_iceCream'] ?>" method="post">
                <div class="form-group">
                    <label for="id">ID Ice Cream</label>
                    <input type="id_iceCream" class="form-control" name="id_iceCream" id="id_iceCream" value="<?= $iceCream['id_iceCream'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_iceCream">Nama Ice Cream</label>
                    <input type="nama_iceCream" class="form-control" name="nama_iceCream" id="nama_iceCream" value="<?= $iceCream['nama_iceCream'] ?>">
                </div>
                <div class="form-group">
                    <label for="topping">Topping Ice Cream</label>
                    <input type="topping" class="form-control" name="topping" id="topping" value="<?= $iceCream['topping'] ?>">
                </div>
                <div class="form-group">
                    <label for="tipe_harga">Tipe Harga</label>
                    <input type="tipe_harga" class="form-control" name="tipe_harga" id="tipe_harga" value="<?= $iceCream['tipe_harga'] ?>">
                </div>
                <div class="button" style="margin-top: 20px;">
                    <button class="btn btn-dark" name="update_data">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content');?>