<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

</head>
<style>
h5 {
    text-align: center;
}

th {
    background-color: #4f4d49;
    color: white;
}
</style>

<body style="background-color:#e0ebeb;">

    <?php
  include 'navbar.php';
?>
    <br>
    <?php
       include 'db_config.php';

       $sql ="select * from transaction";
       $sql2 = "select sum(amount) as total from transaction";
      
       
       $total = mysqli_query($conn, $sql);
       $sum = mysqli_query($conn,$sql2);


       $total_rows = mysqli_num_rows($total);
      
       $row = mysqli_fetch_assoc($sum); 
       $final_sum = $row['total'];
      
    
       echo "<pre><h5>Total no of Transactions:$total_rows        Total Amount Transfered:$final_sum</h5></pre>"; 


?>

    <div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>

        <br>
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">T.No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

            while($rows = mysqli_fetch_assoc($total))           //display whole transaction table
            {
        ?>

                    <tr>
                        <td class="py-2"><?php echo $rows['tno']; ?></td>
                        <td class="py-2"><?php echo $rows['sender']; ?></td>
                        <td class="py-2"><?php echo $rows['receiver']; ?></td>
                        <td class="py-2"><?php echo $rows['amount']; ?> </td>
                        <td class="py-2"><?php echo $rows['date and time']; ?> </td>

                        <?php
            }

        ?>
                </tbody>
            </table>

        </div>
    </div>
</body>

</html>