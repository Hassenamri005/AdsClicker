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
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
</head>
<body>
    <nav>
        <h5><a href="">Back</a></h5>
    </nav>
    <div class="container">
        <div class="py-5 text-center">
            <i class="far fa-credit-card"></i>
            <h2>Start new Ads</h2>
        </div>
      
        <div class="row">
            <div class="col-sm-5" style="margin: auto;border: 1px solid rgb(224, 221, 221); border-radius: 5px;padding: 10px;">
                <form method="POST" action="/user/publish">
                @csrf
                    <div class="form-group">
                      <b><label for="exampleInputEmail1">Title</label></b>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Website Title" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <b><label for="exampleFormControlTextarea1">Short Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your website description" required></textarea>                    
                    </div>
                    <br>
                    <div class="form-group">
                        <b><label for="exampleInputEmail1">Url</label></b>
                        <input type="text" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your website URL" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <b><label for="exampleInputEmail1">Click Price</label></b>
                        <input type="number" name="price" class="form-control" value="0.01" min="0.01" max="2" step="0.01" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
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
         
</body>
</html>