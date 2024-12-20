<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Order Form</h1>
            <form action="/transaction/save" method="post">
                <div class="form-group">
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <input type="id_pelanggan" class="form-control" name="id_pelanggan" id="id_pelanggan" placeholder="ID Pelanggan">
                </div>
                <div class="form-group">
                    <label for="id_iceCream">ID Ice cream</label>
                    <input type="id_iceCream" class="form-control" name="id_iceCream" id="id_iceCream" placeholder="ID Ice Cream">
                </div>
                <div class="button" style="margin-top: 20px;">
                    <button class="btn btn-dark" name="add_data">Add Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content');?>