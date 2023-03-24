    <!--Header-->
    <?php
        include_once "layouts/navbar.php";
    ?>

    <!--Shopping Cart-->
  <section class="h-100 h-custom shp-crt" style="background-color: #fff900;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                      <h6 class="mb-0 text-muted">3 items</h6>
                    </div>
                    <hr class="my-4">

                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img src="models/Desacola/City_Render.png"
                          class="img-fluid rounded-3">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Pre-Made Model</h6>
                        <h6 class="text-black mb-0">Night City Scale Model</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-light px-2 fas fa-minus"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          -
                        </button>

                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />

                        <button class="btn px-2 btn-light fas fa-plus"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          +
                        </button>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">$ 499.00</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                      </div>
                    </div>

                    <hr class="my-4">

                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img src="models/Gonzales/pilumnus.jpg"
                          class="img-fluid rounded-3" alt="Cotton T-shirt">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Pre-Made Model</h6>
                        <h6 class="text-black mb-0">Male Scientist Figure</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-light px-2 fas fa-minus"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          -
                        </button>

                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />

                        <button class="btn btn-light px-2 fas fa-plus"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          +
                        </button>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">$ 499.00</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                      </div>
                    </div>

                    <hr class="my-4">

                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                      <img src="models/Dela Cruz/Interior_IG.png"
                          class="img-fluid rounded-3" alt="Cotton T-shirt">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Pre-Made Model</h6>
                        <h6 class="text-black mb-0">Information Guild Interior Scale Model</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-light px-2 fas fa-minus"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          -
                        </button>

                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />

                        <button class="btn btn-light px-2 fas fa-plus"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          +
                        </button>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">$ 459.00</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                      </div>
                    </div>

                    <hr class="my-4">

                    <div class="pt-5">
                      <h6 class="mb-0">
                        <a href="index.php" class="text-body">
                          <i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop
                        </a>
                      </h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                    <hr class="my-4">

                    <div class="d-flex justify-content-between mb-4">
                      <h4 class="text-uppercase">items 3</h4>
                      <h4>$ 1457.00</h4>
                    </div>

                    <h4 class="text-uppercase mb-3">Shipping</h4>

                    <div class="mb-4 pb-2">
                      <select class="select">
                        <option value="1">Standard Shipping $ 10.00</option>
                        <option value="2">Priority Shipping $ 15.00</option>
                        <option value="3">EMS - $ 20.00</option>
                      </select>
                    </div>

                    <h4 class="text-uppercase mb-3">Give code</h4>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea2">Enter your code</label>
                      </div>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between mb-5">
                      <h4 class="text-uppercase">Total price</h4>
                      <h4>$ 1467.00</h4>
                    </div>

                    <a type="button" class="btn btn-dark btn-block btn-lg" href="payment_options.php"
                      data-mdb-ripple-color="dark">Proceed to Payment
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!--Footer-->
    <?php
        include_once "layouts/footer.php";
    ?>

