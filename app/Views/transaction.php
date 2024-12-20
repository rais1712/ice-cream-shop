<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No Transaksi</th>
          <th scope="col">ID Pelanggan</th>
          <th scope="col">Nama Pelanggan</th>
          <th scope="col">Alamat</th>
          <th scope="col">No Telpon</th>
          <th scope="col">Product Ice Cream</th>
          <th scope="col">Harga</th>
        </tr>
      </thead>
      <tbody>
      <tbody>
        <h1>Transaction</h1>
        <?php if (session()->get('level') === '2') : ?>
          <a href="/transaction/add" class="btn btn-dark">Add data</a></td>
        <?php endif ?>  
        <?php foreach($transaction as $row) : ?>
        <tr>
            <td><?= $row->no_transaksi ?></td>
            <td><?= $row->id_pelanggan ?></td>
            <td><?= $row->nama_pelanggan ?></td>
            <td><?= $row->alamat ?></td>
            <td><?= $row->no_telp ?></td>
            <td><?= $row->nama_iceCream ?></td>
            <td><?= $row->harga?></td>
            <?php if (session()->get('level') === '2') : ?>
              <td><a href="/transaction/edit/<?= $row->no_transaksi ?>" class="btn btn-dark">edit</a></td>
              <td><a href="/transaction/delete/<?= $row->no_transaksi ?>" class="btn btn-dark">delete</a></td>
            <?php endif ?>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>

<?= $this->endSection('content');?>