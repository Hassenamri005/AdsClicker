<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  /* rtl:raw:
  right: 0;
  */
  bottom: 0;
  /* rtl:remove */
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
  
}

@media (max-width: 767.98px) {
  .sidebar {
    top: 5rem;
  }
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #727272;
}

.sidebar .nav-link.active {
  color: #2470dc;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .navbar-toggler {
  top: .25rem;
  right: 1rem;
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}
  </style>

<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  
</head>
<body class="bg-light">
  <style>
    .navbar{
      background-color: #2470dc;
    }
    .form-control{
      background-color: #fff;
      display: unset;
    }
  </style>
    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">AdsClicker</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="hidden" placeholder="Search" aria-label="Search">
        <div class="navbar-nav col-md-3 col-lg-1">
          <div class="nav-item text-nowrap text-center right-nav" >

              <a class="nav-link right-nav" href="#" style="color: #fff;"href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
               {{ __('Sign out') }}
              </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
        </div>
        <style>
          @media screen and (max-width: 600px){
            .right-nav{
              display: none;
            }
          }
        </style>
      </header>
      
      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="">
                    <span data-feather="home"></span>
                    <i class="fas fa-columns"></i>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#my-ads-section">
                    <span data-feather="file"></span>
                    <i class="fab fa-buysellads"></i>
                    Ads
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#transactions-section">
                    <span data-feather="file"></span>
                    <i class="fas fa-university"></i>
                    Transactions
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('user/publish') }}">
                    <span data-feather="shopping-cart"></span>
                    <i class="fas fa-upload"></i>
                    Publish Ads
                  </a>
                </li>
                
              </ul>
      
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Others</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="#notifications-section">
                    <span data-feather="file-text"></span>
                    <i class="far fa-bell"></i>
                    Notifications
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    <i class="fas fa-user"></i>
                    Account
                  </a>
                </li>
                
                
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                   {{ __('Sign out') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    <i class="fas fa-bug"></i>
                    Report
                  </a>
                </li>
                
              </ul>
            </div>
          </nav>
      
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!--   Dashboard section -->
            <div class="dashboard">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group me-2">
                    <button type="button" class="btn btn-md btn-success">$29.00</button>
                    <button type="button" class="btn btn-md btn-outline-success">Checkout</button>
                  </div>
                </div>
              </div>
              <style>
                .card:hover{
                  box-shadow: 10px 5px 50px 5px rgb(189, 188, 188);
                  cursor: pointer;
                }
              </style>
              <div class="dashboard-content" id="dashboard">
                  <div class="cards row">

                    <div class="col-sm-4" >
                      <div class="card mb-4 rounded-3" style="border-radius: 20px;">
                        <div class="card-header py-3" style="background-color: #ffa801; color: #fff;">
                          <h4 class="my-0 fw-normal">Ads Costs</h4>
                        </div>
                        <div class="card-body text-center" style="background-color: #ffa801; color: #fff;">
                          <h1 class="card-title pricing-card-title">$0.02<small style="color: #fff; font-size: medium;">/click</small></h1>
                          <ul class="list-unstyled mt-3 mb-4">
                            <li><b>Status :</b> pending</li>
                          </ul>
                        </div>
                      </div>
                    </div>
  
                    <div class="col-sm-4 ">
                      <div class="card mb-4 rounded-3 " style="border-radius: 20px;">
                        <div class="card-header py-3 text-white" style="background-color: #f53b57; color: #fff;">
                          <h4 class="my-0 fw-normal">Ads</h4>
                        </div>
                        <div class="card-body text-center" style="background-color: #f53b57; color: #fff;">
                          <h1 class="card-title pricing-card-title">29<small style=" font-size: medium;">/mo</small></h1>
                          <ul class="list-unstyled mt-3 mb-4">
                            <li><b>Clicked :</b> 15</li>
                          </ul>
                        </div>
                      </div>
                    </div>
  
  
                    <div class="col-sm-4 " style="border-radius: 20px;">
                      <div class="card mb-4 rounded-3 " style="border-radius: 20px;">
                        <div class="card-header py-3 text-white bg-primary " >
                          <h4 class="my-0 fw-normal">Total Balance</h4>
                        </div>
                        <div class="card-body text-center" style="background-color: #0d6efd; color: #fff;">
                          <h1 class="card-title pricing-card-title">$29.00</h1>
                          <ul class="list-unstyled mt-3 mb-4">
                            <b>Status :</b> pending
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
  
              </div>
            </div>
            

          <!-- Transaction section-->
          <div class="transactions-section" id="transactions-section">
            <h2>Transactions</h2>
            <hr>
            <br>

            <div class="row">
              <div class="col-sm-10" style="margin: auto;">
                <div class="transactions-section" id="transactions-section" style="margin: auto;">
                  <table class="table table-bordered" border="2">
                    <thead>
                      <tr>
                        <th scope="col">Transaction Id</th>
                        <th scope="col">Transferred</th>
                        <th scope="col">To</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>$ 29.00</td>
                        <td>user@paypal.com</td>
                        <td>Monday 09/08/2021</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>



          <!-- Notifications section-->
          <style>
            .notifications-cards:hover{
              box-shadow: none;
            }
          </style>
          <div class="notifications-section" id="notifications-section">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Notifications</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                  <button type="button" class="btn btn-md btn-outline-danger">Delete All</button>
                </div>
              </div>
            </div>
            <div class="card notifications-cards" style="width: 98%;margin: auto;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
            </div>
            
          </div>
            


          <!-- -------- ADS section ----------- -->
          <br>
          <div class="my-ads-section" id="my-ads-section">
            <h2>Ads</h2>
            <hr>
            <br>
            <div class="row">
              @foreach ($ads as $ad)
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                      <title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
                      <div class="card-header">
                        <h5>{{$ad->title}}</h5>
                      </div>
                      <div class="card-body">
                      <p class="card-text">{{$ad->description}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">${{$ad->price}}</small>
                        <div class="btn-group">
                          <a href="/user/ad-details/{{$ad->id}}" class="btn btn-sm btn-outline-success">View Ads</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
                
                
            </div>
          </div>
            
                


            

            
            


            <br><br><br>

            


            


          </main>
        </div>
      </div>
      
</body>
</html>