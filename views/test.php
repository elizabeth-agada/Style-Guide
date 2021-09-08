<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StyleGuide</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
   
  </head>
  <body>

    <div class="container">
      <h1 class="text-center">Style Guide</h1>

      <h2>Avatar design</h2>
      <img src="img/img1.jpg" alt="" class="avatar">
      <img src="img/img1.jpg" alt="" class="avatar-small">

      <h2>Button design</h2>
      <a href="#" class="btn-medium">Write stories</a>
      <a href="#" class="btn-treehouse">Start now</a>

      <h2>Dropdown design</h2>
      <div class="dropdown">
        <img src="img/img1.jpg" alt="" class="avatar dropdown-toggle" id="navbar-menu" data-toggle="dropdown">
        <ul class="dropdown-menu" aria-labelledby="navbar-menu">
          <li><a href="#">Profile</a></li>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>

      <h2>Card design</h2>
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <div class="card">
            <img src="img/img1.jpg" alt="" class="avatar card-user">
            <span class="card-category">POPULAR</span>
            <div class="card-description">
              <h3>Stripe</h3>
              <p>A cool payment API</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="card">
            <img src="img/img1.jpg" alt="" class="avatar card-user">
            <span class="card-category">POPULAR</span>
            <div class="card-description">
              <h3>Stripe</h3>
              <p>A cool payment API</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="card">
            <img src="img/img1.jpg" alt="" class="avatar card-user">
            <span class="card-category">POPULAR</span>
            <div class="card-description">
              <h3>Stripe</h3>
              <p>A cool payment API</p>
            </div>
          </div>
        </div>
      </div>

      <h2>Badge design</h2>
      <img src="img/img1.jpg" alt="" class="avatar">
      <span class="badge">3</span>
      
      <h2>Banner design</h2>
      <div class="banner">
        <div class="banner-content">
          <h1>Stripe</h1>
          <p>A cool payment API</p>
          <a href="#" class="btn-treehouse">Start now</a>
        </div>
      </div>

      <h2>Tabs design</h2>
      <ul class="list-inline tabs-underlined">
  <li>
    <a href="#" class="tab-underlined active">Bookings</a>
  </li>
  <li>
    <a href="#" class="tab-underlined">Requests</a>
  </li>
  <li>
    <a href="#" class="tab-underlined">Conversations</a>
  </li>
</ul>


      <h2>List design</h2>
      <ul class="list-unstyled">
        <li class="product">

          <div class="product-upvote text-center">
            <i class="fa fa-caret-up"></i>
            <p>16</p>
          </div>

          <img src="http://unsplash.it/200/120/?random" alt="" class="product-image img-rounded">

          <div class="product-description">
            <h3>Intercom</h3>
            <p>The best CRM tool.</p>
          </div>

          <ul class="list-inline product-controls">
            <li><a href=""><i class="fa fa-heart"></i></a></li>
            <li><a href=""><i class="fa fa-share"></i></a></li>
            <li><a href=""><i class="fa fa-star"></i></a></li>
          </ul>
        </li>
        <li class="product">

          <div class="product-upvote text-center">
            <i class="fa fa-caret-up"></i>
            <p>16</p>
          </div>

          <img src="http://unsplash.it/200/120/?random" alt="" class="product-image img-rounded">

          <div class="product-description">
            <h3>Intercom</h3>
            <p>The best CRM tool.</p>
          </div>

          <ul class="list-inline product-controls">
            <li><a href=""><i class="fa fa-heart"></i></a></li>
            <li><a href=""><i class="fa fa-share"></i></a></li>
            <li><a href=""><i class="fa fa-star"></i></a></li>
          </ul>
        </li>
        <li class="product">

          <div class="product-upvote text-center">
            <i class="fa fa-caret-up"></i>
            <p>16</p>
          </div>

          <img src="http://unsplash.it/200/120/?random" alt="" class="product-image img-rounded">

          <div class="product-description">
            <h3>Intercom</h3>
            <p>The best CRM tool.</p>
          </div>

          <ul class="list-inline product-controls">
            <li><a href=""><i class="fa fa-heart"></i></a></li>
            <li><a href=""><i class="fa fa-share"></i></a></li>
            <li><a href=""><i class="fa fa-star"></i></a></li>
          </ul>
        </li>
      </ul>
      <form novalidate="novalidate" class="simple_form search" action="/" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
  <div class="search-form-control form-group">
    <input class="form-control string required" type="text" name="search[query]" id="search_query" />
    <button name="button" type="submit" class="btn btn-flat">
      <i class="fas fa-search"></i> Search
    </button>
    
  </div>
</form>
      <div class="footer">
  <div class="footer-links">
    
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
  </div>
  
  <div class="footer-copyright">
    <i class="fas fa-heart"></i>Yottabit.consulting
  </div>
</div>

      

    </div>


    <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>