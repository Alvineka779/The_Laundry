<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?= base_url();?>assets/img/logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.grid.css">
    <title>The Laundry | Home</title>
</head>
<body>
    
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <img src="<?= base_url();?>assets/img/apple-icon-57x57.png" stlye="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Cek Laundry</a>
        </li>
        </ul>

    <form class="form-inline my-2 my-lg-0">
        <a href="<?= base_url();?>login/logout" class="btn btn-outline-danger my-2 my-sm-0">Logout</a>
    </form>
    </div>
   
    </nav>
    </div>
    
    <div class="container">
    <br>
    <div class="card mb-3">
    <img class="card-img-top" src="<?= base_url();?>assets/img/slider2.jpg" alt="Card image cap" style="height: 500px; width: 100%;">
    <div class="card-body text-center">
        <h1 class="card-title">Selamat Datang <strong><?php echo $this->session->userdata('nama'); ?></strong> Di The Laundry</h1>
        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore similique sint temporibus, impedit quis accusantium natus fugiat quo ea cum voluptates mollitia a deleniti ab odit voluptatem! Aspernatur, reiciendis repellendus?</p>
    </div>
    </div>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <br>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Berat</th>
        <th scope="col">Status</th>
        <th scope="col">Code</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Budi</td>
        <td>5kg</td>
        <td>Dalam Penyucian</td>
        <td>LD001</td>
        <td><a href="#" class="btn btn-outline-success"><i class="fa fa-info"></i>Cek</a></td>
        </tr>
        </tbody>
    </table>


    <!-- Footer -->
    <footer class="page-footer font-small bg-warning">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color:black;">© 2023 Copyright:
        <a href="<?= base_url();?>home" style="text-decoration: none; color: black;"> The Laundry</a>
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->

    </div>

    

</body>
<script src="<?= base_url();?>assets/js/bootstrap.js"></script>
<script src="<?= base_url();?>assets/js/bootstrap.bundle.js"></script>
<script src="<?= base_url();?>assets/js/bootstrap.js.map"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>