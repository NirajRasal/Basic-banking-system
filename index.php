<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>
 
<style>
  footer{
	left: 0;
	bottom: 0;
	width: 100%;
	color: black;
	text-align: center;
	background-color :lightgreen;
}

  </style>
  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>SPARKS BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">              <!--bank image -->
                <img src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">          <!--Transfer money image -->
                    <br>
                    <a href="transfer_money.php"><button>Transfer money</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transaction-history.jpg" class="img-fluid">   <!--Transaction history image -->
                    <br>
                    <a href="transaction_history.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <br>
      <footer>
        <p> Made by <b>NIRAJ RASAL</b></p>    <!-- Github and linkdin link using font-awesome -->
      		<p><a href="https://github.com/NirajRasal"><i class="fa fa-github" style="font-size:36px"></i></a>
		    <a href="https://www.linkedin.com/in/niraj-rasal/"><i class="fa fa-linkedin-square" style="font-size:36px;color:blue"></i></a>
		    </p> 
      </footer>
  </body>
</html>