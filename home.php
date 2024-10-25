<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="home.css">
    <title>Crowdfunding</title>
  </head>
  <body>
<!-- navbar -->
    <section>
      <nav class="navbar navbar-expand-lg bg-transparent navbar-dark fixed-top">
      <div class="container ">
      <div class="col-lg-4 col-md-6 col-sm-8">
          <input class="form-control me-2 round-search" type="search" placeholder="Search" aria-label="Search">
        </div>

        <button class="navbar-toggler" 
                type="button" 
                data-bs-toggle ="collapse" 
                data-bs-target="#navmenu">     
          <span class="navbar-toggler-icon">

          </span>
        </button>

          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item uppercase">
                <a href="#" class="nav-link">HOME</a>
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link">ABOUT</a>
              </li>
              <li class="nav-item">
                <a href="campaign.php" class="nav-link">CAMPAIGNS</a>
              </li>
              <li class="nav-item">
                <a href="#announcement" class="nav-link">ANNOUNCEMENT</a>
              </li>
              <li class="nav-item">
                <a href="#contacts" class="nav-link">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<!-- hero section/carousel -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pics/image.png" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption ">
        <h5 class="uppercase">Tree Planting</h5>
        <p>Donate to Plant, Watch Forests Grow.</p>
        <p><a href= "campaign1.php" class="btn btn-success">Learn more</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="pics/image (3).png" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption ">
      <h5 class="uppercase">Recycling</h5>
        <p>Your Donation Turns Waste into Hope.</p>
        <p><a href= "campaign2.php" class="btn btn-success">Learn more</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="pics/image (5).png" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption ">
      <h5 class="uppercase">clean up drives</h5>
        <p>Help Clean Today for a Greener Tomorrow.</p>
        <p><a href= "campaign3.php" class="btn btn-success">Learn more</a></p>
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
<!--aboutus-->
</section>
  <div class="center-vertical bg-dark">
    <div class="about-us-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <div class="img-head">
              <img src="pics/undraw_team_work_k80m.png" alt="">
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <h2 class="text-head">
              KNOW MORE ABOUT US
            </h2>
            <div class="break-small mb-2"></div>
            <p class="text-para">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla laborum, iure quis repellat neque asperiores praesentium suscipit molestias provident ea cumque ad est illum soluta vel repellendus porro et dignissimos.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit est nemo dolores nihil perferendis harum obcaecati deleniti aspernatur voluptas voluptates, suscipit ipsa nisi rem beatae voluptatibus ut eos iure libero.
            </p>
            <div class="row">
              <div class="col-12 col-md-4 mb-2 mb-md-0">
                <div class="box">
                  <i class="bi bi-tree-fill"></i>
                  <h4>TREES PLANTED</h4>
                  <p class="mb-0">200</p>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-2 mb-md-0">
                <div class="box">
                  <i class="bi bi-recycle"></i>
                  <h4>Materials Recycled</h4>
                  <p class="mb-0">1000</p>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-2 mb-md-0">
                <div class="box">
                  <i class="bi bi-trash3-fill"></i>
                  <h4>Areas Cleaned</h4>
                  <p class="mb-0">20</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<section>
  <div class="container py-5">
        <h1 class="text-center">CAMPAIGNS</h1>

      <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

        <div class="col-md-6 mb-2 mb-md-0">
          <div class="card">
            <img src="pics/undraw_Gardening_re_e658.png" class="card-img-top img-fixed" alt="...">
            <div class="card-body">
              <h3 class="card-title">Tree Planting</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, inventore saepe. Iure cumque officiis sit enim quas ab, possimus iste excepturi placeat exercitationem dolorum? Eum laboriosam ea beatae voluptas aliquam.</p>
              <a href="campaign.php"><button class="btn btn-primary ">See more</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-2 mb-md-0">
          <div class="card">
            <img src="pics/undraw_takeout_boxes_ap54.png" class="card-img-top img-fixed" alt="...">
            <div class="card-body">
              <h3 class="card-title">Recycling</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, inventore saepe. Iure cumque officiis sit enim quas ab, possimus iste excepturi placeat exercitationem dolorum? Eum laboriosam ea beatae voluptas aliquam.</p>
              <a href="campaign.php"><button class="btn btn-primary ">See more</button></a>
            </div>
          </div>
        </div>
        

      </div>
  </div>
</section>


<section id="announcement">
  <div class="container">
<div class="card announcement-card text-center">
  <div class="card-header">
    <h4>ANNOUNCEMENT</h4>
  </div>
  <div class="card-body">
    <h5 class="card-title">Successful Tree Planting</h5>
    <p class="card-text">
      "Exciting News! A successful tree planting event was completed in Brgy. Ronggot, where we came together as a community to plant [X] new trees, contributing to a greener and healthier environment. Thank you to everyone who participated and supported this initiative—let's continue to grow our efforts for a sustainable future!"
    </p>
    <a href="#" class="btn btn-primary">See more</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</div>
</section>

<footer class="footer bg-dark text-white py-4 mt-5" id="contacts">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-4">
        <h5>About Us</h5>
        <p>We are dedicated to environmental sustainability through tree planting, recycling, and clean-up initiatives. Join us in making a difference!</p>
      </div>
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Home</a></li>
          <li><a href="#" class="text-white">Projects</a></li>
          <li><a href="#" class="text-white">Donate</a></li>
          <li><a href="#" class="text-white">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Contact</h5>
        <p>Email: support@crowdfundplatform.com</p>
        <p>Phone: +123 456 7890</p>
        <p>Address: Brgy. Ronggot, Philippines</p>
      </div>
    </div>
    <hr class="bg-white">
    <p class="mb-0">© 2024 Crowdfunding Platform. All Rights Reserved.</p>
  </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>