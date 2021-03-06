<!--Spark bank created by Niraj Rasal -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!--font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

    <!-- Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <!--css-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

     <!-- AOS  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>     <!-- for fading animation -->
  <script>
    AOS.init({
      duration: 700,
    });
  </script>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5"data-aos="fade-right">
                  <h3>Welcome to</h3>
                  <h1>SPARKS BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center" data-aos="fade-left">              <!--bank image -->
                <img src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center"data-aos="fade-up">
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