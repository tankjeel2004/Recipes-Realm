<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="script.js"></script>
  </head>
  <body>
    <nav>
      <label class="logo">Recipes Realm</label>
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a class="active" href="recipes.php">Recipes</a></li>
        <li><a class="active" href="addrecipes.php">+ Add Recipe</a></li>
        <li><a class="active" href="signup.php">Sign Up</a></li>
      </ul>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1645432524528-ae76145f67b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Explore Indian Food</h1>
        <p class="img-slider-small-text">Spicy & Delicious Taste</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1561758033-d89a9ad46330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Fast Food</h1>
        <p class="img-slider-small-text">Fullfill your cravings</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1626082936010-1ff5635bde4f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjJ8fHBpenphfGVufDB8MHwwfHx8MA%3D%3D&auto=format&fit=crop&w=900&q=60" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Pizza</h1>
        <p class="img-slider-small-text">Hurry up, your pizza is waiting</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<h1 align="center" class="clr_dm">Discover More</h1>

<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Gujarati Cuisine</h5>
       
        <a href="#" class="btn btn-primary">View Recipes</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Punjabi Cuisine</h5>
       
        <a href="#" class="btn btn-primary">View Recipes</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">South Indian Cuisine</h5>
       
        <a href="#" class="btn btn-primary">View Recipes</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Explore More</h5>
        
        <a href="#" class="btn btn-primary">Show All</a>
      </div>
    </div>
  </div>
</div>

<footer>
<div class="footer-container">
  <div class="social-icons">
      <a href=""><i class="fa-brands fa-facebook"></i></a>
      <a href=""><i class="fa-brands fa-instagram"></i></a>
      <a href=""><i class="fa-brands fa-twitter"></i></a>
      <a href=""><i class="fa-brands fa-telegram"></i></a>
  </div>
  <div class="footer-nav">
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Categories</a></li>
      <li><a href="">Recipes</a></li>
      <li><a href="">Our Team</a></li>
    </ul>
  </div>
</div>
<div class="footer-bottom">
    <p>Copyright &copy;2023 Designed By <span class="designer">Poojan & Jeel</span></p>
  </div>
</footer>

</body>
</html>











