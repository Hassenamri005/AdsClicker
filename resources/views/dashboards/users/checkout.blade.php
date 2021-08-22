@extends('layouts.app')

@section('content')


<style>
    nav{
        width: 100%;
        background-color: #2470dc;
        height: 50px;
    }
    nav h5 {
        padding: 12px 40px;
    }
    nav h5 a {
        color: white;
        text-decoration: none;
    }
    nav h5 a:hover {
        color: white;
        text-decoration: none;
    }
    i{
        font-size: 45px;
        
    }
</style>

<nav>
    <h5><a href="">Back</a></h5>
</nav>
<div class="container">
    <div class="py-5 text-center">
        <i class="far fa-credit-card"></i>
        <h2>Checkout</h2>
      </div>
  
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Total Balance</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Ads</h6>
              <small>20</small>
            </div>
            <span class="text-success">$ 0.02</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$20</strong>
          </li>
        </ul>
  
        
      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Complete your informations</h4>
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
  
  
          <div class="mb-3">
            <label for="email">Paypal Email</label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>
  
          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>
  
          <div class="mb-3">
            <label for="address2">Mobile Number</label>
            <input type="text" class="form-control" id="address2" placeholder="(+123) ---- ----">
          </div>
  
         
          <hr class="mb-4">
          
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Save this information for next checkout</label>
          </div>
          
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  
  </div>


   <br><br>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            </a>
            <span class="text-muted">&copy; 2021 AdsClicker</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="fas fa-envelope"></i></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="fas fa-phone"></i></a></li>
          </ul>
        </footer>
     

@endsection

