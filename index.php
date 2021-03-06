<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href='style.css'>
    <link rel="stylesheet" type="text/css" href='navbar.css'>

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : lightblue ; height:30px;">
              
              <div class="col-sm-12 col-md img text-center">
                <!--<img src="./user.jpg" class="img-fluid pt-2" style="width: 20px;"> -->
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center" >
                  <div class="col-md act">
                    <img src="./user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;" style="border-radius:0%">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="./user3.jpg" class="img-fluid" style="width:120px; height:120px; margin-top:30px; margin-bottom: 50px;">
                    <br>
                    <a href="removeuser.php"><button style="background-color : #2785C4;" style="border-radius:0%">View all Users</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="./transfer_money.jpg" class="img-fluid" style="margin-top:30px; width:140px; height:120px; margin-bottom: 50px;">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="./transfer.jpg" style="margin-top:30px; width:140px; height:120px; margin-bottom: 50px;" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
                  
            </div>
      </div>

     

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>