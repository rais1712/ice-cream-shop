<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Order Form</h1>
            <form action="/product/save" method="post">
                <div class="form-group">
                    <label for="id">ID Ice Cream</label>
                    <input type="id_iceCream" class="form-control" name="id_iceCream" id="id_iceCream" placeholder="ID Ice Cream">
                </div>
                <div class="form-group">
                    <label for="nama_iceCream">Nama Ice Cream</label>
                    <input type="nama_iceCream" class="form-control" name="nama_iceCream" id="nama_iceCream" placeholder="Nama Ice Cream">
                </div>
                <div class="form-group">
                    <label for="topping">Topping Ice Cream</label>
                    <input type="topping" class="form-control" name="topping" id="topping" placeholder="Topping Ice Cream">
                </div>
                <div class="form-group">
                    <label for="tipe_harga">Tipe Harga</label>
                    <input type="tipe_harga" class="form-control" name="tipe_harga" id="tipe_harga" placeholder="Tipe Harga">
                </div>
                <div class="button" style="margin-top: 20px;">
                    <button class="btn btn-dark" name="add_data">Add Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content');?>