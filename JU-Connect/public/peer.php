<?php
include 'config.php';
   if($_SERVER["REQUEST_METHOD"]=="GET"){?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Jadavpur University Connect</title>
</head>

<body>
  <b>
  <!--navigation bar-->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #98cbf0;">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.html"><img src="./logo1.PNG" alt="logo" width="70"
          class="d-inline-block align-text-middle"> <b>JU-<i>e</i>Connect</b>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about-us.html">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Features
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Live Chat</a></li>
              <li><a class="dropdown-item" href="#">Voice Channel</a></li>
              <li><a class="dropdown-item" href="#">Video Call</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="./find-your-peer.html">Find Your Peer</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./health.html">Health Tracker</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact-us.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./sign-in.html">Sign In</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Explore Here" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  </b>

  <!--alert-->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path
        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path
        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
  </svg>
  <div class="alert alert-warning d-flex align-items-center alert-dismissible fade show" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
      <use xlink:href="#info-fill" />
    </svg>
    <div>
      <strong>First time here?</strong> Sign up to access all our awesome features and start connecting!!!
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <!--carousel-->

  <!--body-->

  <h2>Find Your Peer</h2>


<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="card mt-4">
              <div class="card-header">
                  <h4>Search our users and find who you want to connect with.</h4>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-7">

                          <form action="" method="GET">
                              <div class="input-group mb-3">
                                  <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" 
                                  class="form-control" placeholder="Search data by Name, Batch, Department, Faculty,...">
                                  <button type="submit" class="btn btn-primary">Search
                                    
                                  </button>
                              </div>
                          </form>

                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-12">
          <div class="card mt-4">
              <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Email</th>
                              <th>Name</th>
                              <th>User Type</th>
                              <th>Faculty</th>
                              <th>Department</th>
                              <th>Batch</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php 
                              $con = mysqli_connect("localhost","root","","ju_econnect_db");

                              if(isset($_GET['search']))
                              {
                                $filtervalues = $_GET['search'];
                                  $query = "SELECT * FROM users WHERE CONCAT(ID,Email,Name,User_Type,Department,Batch,Faculty) LIKE '%$filtervalues%' ";
                              }
                              else
                              {
                                $query = "SELECT * FROM users";
                              }
                                  
                                  $query_run = mysqli_query($con, $query);

                                  if(mysqli_num_rows($query_run) > 0)
                                  {
                                      foreach($query_run as $items)
                                      {
                                          ?>
                                          <tr>
                                              <td><?= $items['ID']; ?></td>
                                              <td><?= $items['Email']; ?></td>
                                              <td><?= $items['Name']; ?></td>
                                              <td><?= $items['User_Type']; ?></td>
                                              <td><?= $items['Faculty']; ?></td>
                                              <td><?= $items['Department']; ?></td>
                                              <td><?= $items['Batch']; ?></td>

                                          </tr>
                                          <?php
                                      }
                                  }
                              
                          ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
  <?php } ?>

  <!--footer-->
  <div style="background-color: grey;">
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <h5 class="text-uppercase mb-4">OUR TEAM</h5>

            <ul class="list-unstyled mb-4">
              <li>
                <a href="./about-us.html" class="text-white">About us</a>
              </li>
              <li>
                <a href="#!" class="text-white">Resources</a>
              </li>
              <li>
                <a href="#!" class="text-white">Collaborations</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <h5 class="text-uppercase mb-4">Assistance</h5>

            <ul class="list-unstyled">
              <li>
                <a href="./contact-us.html" class="text-white">Contact us</a>
              </li>
              <li>
                <a href="#!" class="text-white">Chat Bot</a>
              </li>
              <li>
                <a href="#!" class="text-white">Contribute</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <h5 class="text-uppercase mb-4">Jadavpur University</h5>

            <ul class="list-unstyled">
              <li>
                <a href="http://www.jaduniv.edu.in/" class="text-white" target="_blank">Home site</a>
              </li>
              <li>
                <a href="http://122.15.82.40:9900/" class="text-white" target="_blank">Library</a>
              </li>
              <li>
                <a href="http://juadmission.jdvu.ac.in/jums_exam/" class="text-white" target="_blank">JUMS</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <h5 class="text-uppercase mb-4">Sign up to our newsletter</h5>

            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>

            <p><button type="button" class="btn btn-outline-dark">Subscribe</button></p>
            <a href="#" style="text-decoration-line: none; color: black"><button type="button"
              class="btn btn-outline-light"><img src="arrow.png" width="30"></button></a>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3 border-top border-white">
        © 2021 Copyright:
        <a class="text-white" href="./index.html"> JU-<i>e</i>Connect</a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->


</body>

</html>