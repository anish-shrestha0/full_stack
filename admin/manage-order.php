<?php include('partials/navbar.php')?>
<div class="main">
            <h2>Manage Order</h2>
            <?php
            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
            ?>
            
            <div class="admin-table">
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    
                        $sql="SELECT * FROM tbl_order ORDER BY order_id  DESC";
                        $res=mysqli_query($conn,$sql);
                        if($res==true){
                            $count=mysqli_num_rows($res);
                            if($count>0){
                                while($rows=mysqli_fetch_assoc($res)){
                                    $order_id=$rows['order_id'];
                                    $firstname=$rows['first_name'];
                                    $secondname=$rows['last_name'];
                                    $contact=$rows['customer_contact'];
                                    
                                    $product=$rows['product_name'];
                                    $price=$rows['price'];
                                    $quantity=$rows['quantity'];
                                    $total=$rows['total'];
                                    $date=$rows['order_date'];
                                    $status=$rows['status'];
                                    $address=$rows['address'];
                                    $city=$rows['city'];
                                    ?>
                                    <tr>
                                        <td><?php echo $order_id;?></td>
                                        <td><?php echo $firstname;?></td>
                                        <td><?php echo $secondname;?></td>
                                        <td><?php echo $contact;?></td>
                                        
                                        <td><?php echo $product;?></td>
                                        <td>₹&nbsp;<?php echo $price;?></td>
                                        <td><?php echo $quantity;?></td>
                                        <td>₹&nbsp;<?php echo $total;?></td>
                                        <td><?php echo $date;?></td>
                                        <td><?php
                                        
                                        if($status=="Ordered"){
                                            echo "<span style='font-weight:bold; color:black;'>$status</span>";
                                        }
                                        elseif($status=="On Delivery"){
                                            echo "<span style='color:blue;font-weight:bold;'>$status</span>";
                                        }
                                        elseif($status=="Delivered"){
                                            echo "<span style='color:green;font-weight:bold;'>$status</span>";
                                        }
                                        elseif($status=="Cancelled"){
                                            echo "<span style='color:red;font-weight:bold;'>$status</span>";
                                        }
                                        
                                        ?></td>
                                        <td><?php echo $address;?></td>
                                        <td><?php echo $city;?></td>
                                        
                                        <td><a href="<?php echo HOMEURL;?>admin/update-order.php?order_id=<?php echo $order_id;?>" class="btn-update-admin">Update Order Status</a>
                                            
                                        </td>
                                    </tr>
                                    <?php

                                }
                            }
                            else{
                                ?>

                            <tr>
                                <td colspan="12"><div class="error">NO Orders Have Been Made So Far</div></td>
                            </tr>

                            <?php
                            }
                        }
                    ?>
                    
                    
                   
                    
                </table>
            </div>  
</div>
<?php include('partials/footer.php')?>
