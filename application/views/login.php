<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url();?>assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.grid.css">
    <title>The Laundry | Login</title>

    <div class="container">
    
    </div>

</head>
<body style="background-color: #FC9209;">
    
    <div class="container">
    <br>
    <div class="card">
    <div class="card-body">
    </br>
    <div class="row">
    <div class="col">
        
    <!-- logo -->
    <img class=" card-img-top " src="<?= base_url();?>assets/img/logo.jpg" style="border-radius:100%; width: 400px; height: 480px; position: relative; left:30px; top:30px max-width: 200px; display: block; height: auto; " >
    </div>
    <!-- /logo -->

    <!-- Header -->
    <div class="col">
    <h2 class="text-center">Selamat Datang Di The Laundry</h2>
    <p class="text-center">Silahkan Masukan Akun Anda</p>
    <br>
    <!-- /Header -->
    
    <!-- Form -->
    <form method="post" action="<?php echo base_url();?>index.php/login/proses">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukan Username Anda" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password Anda" required>
    </div>
    <!-- /Form -->

    <!-- Button -->
    <p>Anda belum Punya Akun? Silahkan <a href="<?= base_url();?>register" style="color: #FC9209;">Register</a></p> 
    <button type="submit" class="btn btn-outline-warning">Login</button>
    <!-- /Button -->


    
    
    </form>
    </div>
    </div>
    <hr>
    <!-- Footer -->
    <footer class="page-footer font-small" >

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color:black;">© 2023 Copyright:
        <a href="#" style="text-decoration: none; color: black;"> The Laundry</a>
    </div>
    <!-- Copyright -->

    </div>
    </div>
    </br>

    </footer>
    <!-- Footer -->

    </div>

    

</body>
<script src="<?= base_url();?>assets/js/bootstrap.js"></script>
<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
</html>