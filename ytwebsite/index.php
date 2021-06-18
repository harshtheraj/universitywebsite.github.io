<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">

</head>

<body>


<?php  include 'menu.php';  ?>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/la.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chicago.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/ny.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">

  <div class="py-5">
  
  <h2 class="text-center">About Us</h2>

  </div>

  <div class="container-fluid">
      <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                  <img src="images/tree.jpg" class="img-fluid aboutimg" >
            
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                  <h2 class="display-4">I am Harsh Raj</h2>
                  <p class="py-3">If you perform the sacrifice of doing your duty, you do not have to do anything else. Devoted to duty, man attains perfection</p>
                  <a href="about.php" class="btn btn-success">Check More</a>
            </div>



      </div>  
  
  </div>

</section>


<section class="my-5">

  <div class="py-5">
  
  <h2 class="text-center">Our services</h2>

  </div>


  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
  <img class="card-img-top" src="images/photo.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Nature</h4>
    <p class="card-text">Some example.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>


</div>
      
      </div>

      <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
  <img class="card-img-top" src="images/photo.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Nature</h4>
    <p class="card-text">Some example.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>


</div>
      
      </div>

      <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
  <img class="card-img-top" src="images/photo.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Nature</h4>
    <p class="card-text">Some example.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>


</div>
      
      </div>
    
    </div>

  </div>

</section>



<section class="my-5">

  <div class="py-5">
  
  <h2 class="text-center">Our Gallery</h2>

  </div>

  <div class="container-fluid"> 

    <div class="row">

      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/cycle.jpg" class="img-fluid pb-4"> 
      
      
      </div>

      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/cycle.jpg" class="img-fluid pb-4"> 
      
      
      </div>

      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/cycle.jpg" class="img-fluid pb-4"> 
      
      
      </div>

      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/cycle.jpg" class="img-fluid pb-4"> 
      
      
      </div>

      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/cycle.jpg" class="img-fluid pb-4"> 
      
      
      </div>

      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/cycle.jpg" class="img-fluid pb-4"> 
      
      
      </div>

      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/cycle.jpg" class="img-fluid pb-4"> 
      
      
      </div>

      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/cycle.jpg" class="img-fluid pb-4"> 
      
      
      </div>

      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/cycle.jpg" class="img-fluid pb-4"> 
      
      
      </div>

    
    
    </div>
  
  
  </div>

</section>



<section class="my-5">

  <div class="py-5">
  
  <h2 class="text-center">Our services</h2>

  </div>

  <div class="w-50 m-auto">

    <form action="info.php" method="post">
        <div class="form-group">
        
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
        
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
        
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
        
          <label>Comment</label>
          <textarea class="form-control" name="comment">
          </textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>

        </form>
  
  </div>

</section>


<footer>

    <p class="p-3 bg-dark text-white text-center">@harshtheraj</p>

</footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

</html>