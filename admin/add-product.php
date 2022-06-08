<?php include('partials/navbar.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Product</h1>

        <br><br>

        <?php 
        
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
            
            if(isset($_SESSION['title-taken']))
            {
                echo $_SESSION['title-taken'];
                unset($_SESSION['title-taken']);
            }
        
        ?>

        <br><br>

        
        <form class="admin-input-form" action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input class="admin-input" type="text" name="title" placeholder="Category Title">
                    </td>
                </tr>
                <tr>
                    <td>Price: </td>
                    <td>
                        <input class="admin-input" type="number" name="price" placeholder="price" min="0">
                    </td>
                </tr>

                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input style="padding-left:100px;" type="file" name="image">
                    </td>
                </tr>

              

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Product" class="btn-add-admin">
                    </td>
                </tr>

            </table>

        </form>
        

        <?php 
        
            
            if(isset($_POST['submit']))
            {
                

                
                $title = $_POST['title'];
                $price=$_POST['price'];

                

                

                if(isset($_FILES['image']['name']))
                {
                    // get the image name
                    $image_name = $_FILES['image']['name'];
                    
                    // Upload the Image only if image is selected
                    if($image_name != "")
                    {

                        // renaming the image by extracting the extension from original image name
                        $ext = end(explode('.', $image_name));

                        //Rename the Image
                        $image_name = "Product_".rand(000, 999).'.'.$ext; // e.g. Food_Category_834.jpg
                        

                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/products/".$image_name;

                        // uploading the image
                        $upload = move_uploaded_file($source_path, $destination_path);

                        // checking whether the image is uploaded or not
                        if($upload==false)
                        {
                            
                            $_SESSION['upload'] = "<div class='error'>Failed to Upload Image. </div>";
                           
                            header('location:'.HOMEURL.'admin/add-product.php');
                            // if not uploaded we will stop the Process
                            die();
                        }

                    }
                }
                else
                {
                    
                    $image_name="";
                }

                

                
                

                    // sql to insert data of actegory to database
                    $sql = "INSERT INTO tbl_product SET 
                        title='$title',
                        price='$price',
                        image_name='$image_name'
                    ";

                    $res = mysqli_query($conn, $sql);

                   
                    if($res==true)
                    {
                        
                        $_SESSION['add'] = "<div class='success'>Product Added Successfully.</div>";
                        
                        header('location:'.HOMEURL.'admin/manage-product.php');
                    }
                    else
                    {
                      
                        $_SESSION['add'] = "<div class='error'>Failed to Add Product.</div>";
                      
                        header('location:'.HOMEURL.'admin/add-product.php');
                    }
                
                
                
                
                            
            }
            
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>