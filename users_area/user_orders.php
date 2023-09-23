<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $username=$_SESSION['username'];
    $get_user="Select * from `user_table` where username='$username'";
    $result=mysqli_query($con,$get_user);
    $row_fetch=mysqli_fetch_assoc($result);
    $user_id=$row_fetch['user_id']; 
    ?>
    <h class="text-success">All my Orders</h>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Sl no</th>
                <th>Amount Due</th>
                <th>Total products</th>
                <th>Invoice number</th>
                <th>Date</th>
                <th>Complete/Incomplete</th>
                <th>Status</th>
    
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php 
            $get_order_details="Select * from `user_orders` where user_id='$user_id'";
            $result_orders=mysqli_query($con,$get_order_details);
            while($row_orders=mysqli_fetch_assoc($result_orders)){
                $order_id=$row_orders['order_id'];
                $amount_due=$row_orders['amount_due'];
                $invoice_number=$row_orders['invoice_number'];
                $total_products=$row_orders['total_products'];
                $order_date=$row_orders['order_date'];
                $order_status=$row_orders['order_status'];
                if($order_status=='pending'){
                    $order_status='incomplete';
                }else{
                    $order_status='Complete';
                }
                $number=1;
                echo "<tr>
                <td>$number</td>
                <td>$amount_due</td>
                <td>$total_products</td>
                <td>$invoice_number</td>
                <td>$order_date</td>
                <td>$order_status</td>";
                ?>
                <?php
                if($order_status=='Complete'){
                    echo "<td>Paid</td>";
                }else{
                    echo "<td><a href='confirm_payment.php?order_id=$order_id' class='text-light'>Confirm</a></td>
                    </tr>";
                }   
            $number++;
            }

            ?>
            
        </tbody>
    </table>
    
</body>
</html>