<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <?php if (session()->get('level') === '2') : ?>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID Pelanggan</th>
          <th scope="col">Nama Pelanggan</th>
          <th scope="col">Alamat</th>
          <th scope="col">No Telpon</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
      <tbody>
        <h1>Data Pelanggan</h1>
          <a href="/pelanggan/add" class="btn btn-dark">Add data</a></td>
        <?php foreach($pelanggan as $row) : ?>
        <tr>
            <td><?= $row->id_pelanggan ?></td>
            <td><?= $row->nama_pelanggan ?></td>
            <td><?= $row->alamat ?></td>
            <td><?= $row->no_telp ?></td>
            <td><?= $row->email ?></td>
            <td><a href="/pelanggan/edit/<?= $row->id_pelanggan ?>" class="btn btn-dark">edit</a></td>
            <td><a href="/pelanggan/delete/<?= $row->id_pelanggan ?>" class="btn btn-dark">delete</a></td>
            <td><a href="/pelanggan/admin/<?= $row->email ?>" class="btn btn-dark">admin</a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else : ?>
    <h1>Data diri</h1>
            <form>
                <div class="form-group">
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <input type="id_pelanggan" class="form-control" name="id_pelanggan" id="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="nama_pelanggan" class="form-control" name="nama_pelanggan" id="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="alamat" class="form-control" name="alamat" id="alamat" value="<?= $pelanggan['alamat'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telpon</label>
                    <input type="no_telp" class="form-control" name="no_telp" id="no_telp" value="<?= $pelanggan['no_telp'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= $pelanggan['email'] ?>" readonly>
                </div>
                <div class="button" style="margin-top: 20px;">
                    <a href="/pelanggan/edit/<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-dark" name="update_data">Update Data</a>
                    <a href="/order" class="btn btn-dark" name="update_data">Order</a>
                </div>
            </form>
  <?php endif ?>
</div>

<?= $this->endSection('content');?>