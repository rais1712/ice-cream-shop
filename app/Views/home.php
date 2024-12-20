<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <!-- Background image -->
      <div class="p-0 text-center bg-image" style="
          background-image: url('heroImage.jpg');
          height: 400px;
          margin-top: 58px;
        ">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); height: 400px; margin-top: 58px;">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Milk It Ice Cream Shop</h1>
              <h4 class="mb-3">We Serve Special Ice Cream For Your Day!</h4>
              <a class="btn btn-outline-light btn-lg" href="#!" role="button">Get Started</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Background image -->

        <h1 style="text-align: center; margin: 20px;">Our Popular Ice Cream Menu</h1>

        <div class="gallery">
            <div class="card">
                <img class="card-img-top" src="pic/4.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Chocochips Ice Cream</h5>
                    <p class="card-text">Rasa : chocolate <br>Topping : kacang <br>Harga : 28.000</p>
                    <a href="/order/5" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="pic/5.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Snow Oreo Ice Cream</h5>
                    <p class="card-text">Rasa : vanilla <br>Topping : oreo <br>Harga : 17.000</p>
                    <a href="/order/6" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="pic/6.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Choco-Mocca Ice Cream</h5>
                    <p class="card-text">Rasa : mocca <br>Topping : cokelat <br>Harga : 21.000</p>
                    <a href="/order/7" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="pic/7.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Sweet Corn Ice Cream</h5>
                    <p class="card-text">Rasa : jagung <br>Topping : kacang <br>Harga : 25.000</p>
                    <a href="/order/8" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="pic/8.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Sweet Vanilla Ice Cream</h5>
                    <p class="card-text">Rasa : vanilla <br>Topping : kismis <br>Harga : 32.000</p>
                    <a href="/order/9" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="pic/9.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Biscuit Ice Cream</h5>
                    <p class="card-text">Rasa : vanilla <br>Topping : cokelat <br>Harga : 18.000</p>
                    <a href="/order/10" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="pic/10.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Wealth Chocolate Ice Cream</h5>
                    <p class="card-text">Rasa : chocolate <br>Topping : cokelat <br>Harga : 27.000</p>
                    <a href="/order/11" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="pic/11.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Sweet Cutton Ice Cream</h5>
                    <p class="card-text">Rasa : vanilla <br>Topping : susu <br>Harga : 15.000</p>
                    <a href="/order/12" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>
        </div>
        </div>
  </div>
</div>
<?= $this->endSection();?>