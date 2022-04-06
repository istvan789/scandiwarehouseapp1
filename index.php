<?php
    session_start();
    include('config/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <header>
     <h1>Scandiweb Warehouse App</h1>
  </header>
    
 



    <div class="card-menu">
        <div class="container">

        <nav>
    <ul>
    <li><a href="Productadd.php" class="btn btn-primary">ADD</a></li>
    <br>
        <form action="code.php" method="POST">
        <button type="submit" name="delete_multiple_btn" class="btn btn-danger">MASS DELETE</button>
        
    </ul>
  </nav>
  <br><br><br><br><br>
  <h1>Product List</h1>
    <hr>


        <?php
        $query = "SELECT * FROM productlist";
        $query_run = mysqli_query($conn, $query);
        $check_productlist = mysqli_num_rows($query_run) > 0;

        if($check_productlist)
        {
            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                 <?php 
                    if(isset($_SESSION['status']))
                    {
                        echo "<h4>".$_SESSION['status']. "</h4>";
                        unset($_SESSION['status']);
                    }


                    ?>
                    <div class="card-menu-box">
                    <div class="card-menu-desc">
                        <div class="card-body">
                            <div class ="col-md-3">
                            <label><input type="checkbox" name="multip_delete_id[]"onclick="toggleCheckbox(this)" value="
                                <?php echo $row['id'] ?>" <?php echo $row['disable'] == 1 ? "checked" : "" ?> ></label>
                            <h3 class="card-title">SKU  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['sku']; ?> </h3>
                            <h3 class="card-title">Name  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['name1']; ?> </h3>
                            <h3 class="card-title">Price  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $row['price']; ?> $ </h3>
                            <h3 class="card-title">Category &nbsp; <?php echo $row['category1']; ?> </h3>

                            <p class="card-text"> <?php echo $row['size']; ?>  </p>
                            <p class="card-text"> <?php echo $row['height']; ?>  </p>
                            <p class="card-text"> <?php echo $row['width']; ?>  </p>
                            <p class="card-text"> <?php echo $row['length']; ?>  </p>
                            <p class="card-text"> <?php echo $row['weight']; ?>  </p>
                        </div>
                    </div>
                </div>
            
            </div>
                <?php
               
            }
        }
        else
        {
            echo "No product found";
        }

?>

            
        </div>
    </div>




<br>
      


  
  <footer >Copyright © istvancodes.com</footer>
  
  </div>
  
    </form>
  </body>
  <script>
      
        function toggleCheckbox(box)
        {
                var id = $(box).attr("value");

                if($(box).prop("checked") == true)
                {
                    var disable = 1;
                }
                else
                {
                    var disable = 0;
                }

                var data = {
                        "search_data" : 1,
                        "id": id,
                        "disable": disable
                };

                $.ajax({
                    type: "post",
                    url: "code.php",
                    data: data,
                    succes: function (response) {
                        alert("Data Checked");

                    }
                });
        }

    </script>
  </html>
  