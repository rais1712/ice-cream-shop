<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nama Ice Cream</th>
          <th scope="col">Topping</th>
          <th scope="col">Tipe Harga</th>
          <th scope="col">Harga</th>
        </tr>
      </thead>
      <tbody>
      <tbody>
        <h1>Our Ice Cream Product</h1>
        <?php if (session()->get('level') === '2') : ?>
          <a href="/product/add" class="btn btn-dark">Add data</a></td>
        <?php endif ?> 
        <?php foreach($iceCream as $row) : ?>
        <tr>
            <td><?= $row->id_iceCream ?></td>
            <td><?= $row->nama_iceCream ?></td>
            <td><?= $row->topping ?></td>
            <td><?= $row->tipe_harga ?></td>
            <td><?= $row->harga ?></td>
            <?php if (session()->get('level') === '2') : ?>
              <td><a href="/product/edit/<?= $row->id_iceCream ?>" class="btn btn-dark">edit</a></td>
              <td><a href="/product/delete/<?= $row->id_iceCream ?>" class="btn btn-dark">delete</a></td>
            <?php else : ?>
              <td><a href="/order/<?= $row->id_iceCream ?>" class="btn btn-dark">Order Now</a></td>
            <?php endif ?> 
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>

<?= $this->endSection('content');?>