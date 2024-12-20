<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Transaction Edit Form</h1>
            <form action="/transaction/edit/<?= $transaction['no_transaksi'] ?>" method="post">
                <div class="form-group">
                    <label for="no_transaksi">No Transaksi</label>
                    <input type="no_transaksi" class="form-control" name="no_transaksi" id="no_transaksi" value="<?= $transaction['no_transaksi'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <input type="id_pelanggan" class="form-control" name="id_pelanggan" id="id_pelanggan" value="<?= $transaction['id_pelanggan'] ?>">
                </div>
                <div class="form-group">
                    <label for="id_iceCream">ID Ice Cream</label>
                    <input type="id_iceCream" class="form-control" name="id_iceCream" id="id_iceCream" value="<?= $transaction['id_iceCream'] ?>">
                </div>
                <div class="button" style="margin-top: 20px;">
                    <button class="btn btn-dark" name="update_data">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content');?>