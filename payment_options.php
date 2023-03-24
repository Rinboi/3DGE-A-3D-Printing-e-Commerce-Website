<?php
  include_once "layouts/navbar.php";
?>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="captcha.css">
<link rel="stylesheet" href=
"https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<script src="captcha.js"></script>
<body onload="generate()">
  <section class="h-100 h-custom pay-opt" style="background-color: #00e4ff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Payment Options</h1>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                      <div class="col-6">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> 
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                          </svg>
                           Full Name
                        </label><br>
                        <input class ="input-po w-75 border-0 p-2 rounded-2" type="text" id="fname" name="firstname" placeholder="Juan Dela Cruz"><br><br>
                        <label for="email">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                          </svg><i class="fa fa-envelope"></i> 
                           Email
                        </label><br>
                        <input class="w-75 border-0 p-2 rounded-2" type="text" id="email" name="email" placeholder="someone@example.com"><br><br>
                        <label for="adr"><i class="fa fa-address-card-o"></i> 
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-person-vcard" viewBox="0 0 16 16">
                            <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                            <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
                          </svg>
                          Address
                        </label><br>
                        <input class="w-75 border-0 p-2 rounded-2" type="text" id="adr" name="address" placeholder="House No, Street Address, Apt./Building No., Subdivision"><br><br>
                        <label for="city"><i class="fa fa-institution"></i>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-bank2" viewBox="0 0 16 16">
                            <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
                          </svg>
                          City
                        </label><br>
                        <input class="w-75 border-0 p-2 rounded-2" type="text" id="city" name="city" placeholder="Ex. Quezon City"><br><br>
                        <label for="state">Zip Code</label><br>
                        <input class="w-75 border-0 p-2 rounded-2" type="text" id="zip" name="zip" placeholder="Enter Zip Code">
                      </div>
                      
                      <div class="col-6">
                        <h3>Accepted Cards</h3>
                        <div class="icon-container_1">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label><br>
                        <input class="w-75 border-0 p-2 rounded-2" type="text" id="cname" name="cardname" placeholder="Enter Name of Card Holder"><br><br>
                        <label for="ccnum">Credit card number</label><br>
                        <input class="w-75 border-0 p-2 rounded-2" type="text" id="ccnum" name="cardnumber" placeholder="Enter Credit Card Number"><br><br>
                        <label for="expmonth">Exp Month</label><br>
                        <input class="w-75 border-0 p-2 rounded-2" type="text" id="expmonth" name="expmonth" placeholder="Enter Expiration Month"><br><br>
                        <div class="row">
                          <div class="col-50">
                            <label for="expyear">Exp Year</label><br>
                            <input class="w-75 border-0 p-2 rounded-2" type="text" id="expyear" name="expyear" placeholder="Enter Expiration Month"><br><br>
                          </div>
                          <div class="col-50">
                            <label for="cvv">CVV</label><br>
                            <input class="w-75 border-0 p-2 rounded-2" type="text" id="cvv" name="cvv" placeholder="Enter CVV Number">
                          </div>
                        </div>
                      </div>
                  </div>
                  <br>
		              <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                  </label>
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
                    <div class="g-recaptcha"
                      data-sitekey="6LdjqhQlAAAAAG5ekSs2yYBEpclvGnIn7NDH2hD2"
                    >
                    </div>
                    <label>
                    <input type="checkbox" name="sameadr"> I agree to Terms & Conditions
                  </label><br><br>

                    <button type="button" class="btn btn-dark btn-block btn-lg"
                      data-mdb-ripple-color="dark">Proceed to Check Out</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
        include_once "layouts/footer.php";
    ?>
  </section>
  <script src="https://www.google.com/recaptcha/api.js" async defer>
</script>
</body>