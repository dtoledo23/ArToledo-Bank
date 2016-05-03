<?php 
//Do SQL stuff
  $con = new mysqli("localhost","root","","artoledo_bank");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">

    <title>ArToledo</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" onclick="window.location.href='index.html'" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="  false" aria-controls="navbar">
        </button>
        <a class="navbar-brand" href="index.html">ArToledo</a>
        </div>
        <div id="navbar" class="nav navbar-nav navbar-right">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.html">Sing Up</a></li>
            <li class="active"><a href="login.html">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <?php 
    $clientNumber = 123456789;
    $name = "Diego";
    $lastName = "Toledo";

    $account1 = [
      "number" => 54321,
      "type" => "Savings",
      "balance" => 1345.45
    ];

    $transaction1 = [
      "number" => 7762134,
      "type" => "Deposit",
      "date" => new DateTime('2000-01-01'),
      "ammount" => 420.00
    ];

  ?>

  <div class="container">

    

    <div class="jumbotron">
      <div class="row">
        <div class="col-md-5"> </div>
        <div class="col-md-3"> 
          <img src="assets/img/logoPequeño.png"> 
        </div>
        <div class="col-md-4"> </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3>Name:</h3>
          <p><?php echo $name ?></p>
        </div>
        <div class="col-md-4">
          <h3>LastName:</h3>
          <p><?php echo $lastName ?></p>
        </div>
        <div class="col-md-4">
          <h3>ClienNumber:</h3>
          <p><?php echo $clientNumber ?></p>
        </div>
      </div>
    </div>

    <div class="jumbotron">
      <h2> My Accounts </h2>

      <div class="row">
        <div class="col-md-4">
          <h3>Number</h3>
          <?php
            echo "<p> {$account1['number']} </p>";
          ?>
        </div>
        <div class="col-md-4">
          <h3>Type</h3>
          <?php
            echo "<p> {$account1['type']} </p>";
          ?>
        </div>
        <div class="col-md-4">
          <h3>Balance</h3>
          <?php
            echo "<p> \${$account1['balance']} </p>";
          ?>
        </div>
      </div>
    </div>

    <div class="jumbotron">
      <h2> My Transactions </h2>

      <div class="row">
        <div class="col-md-3">
          <h3>Number</h3>
          <?php
            echo "<p> {$transaction1['number']} </p>";
          ?>
        </div>
        <div class="col-md-3">
          <h3>Type</h3>
          <?php
            echo "<p> {$transaction1['type']} </p>";
          ?>
        </div>
        <div class="col-md-3">
          <h3>Date</h3>
          <?php
            echo "<p> {$transaction1['date']->format('Y-m-d H:i:s')} </p>";
          ?>
        </div>
        <div class="col-md-3">
          <h3>Ammount</h3>
          <?php
            echo "<p> \${$transaction1['ammount']} </p>";
          ?>
        </div>

      </div>
    </div>

    <footer>
      <p>&copy; ArToledo Bank</p>
    </footer>
  </div> <!-- /container -->




  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
