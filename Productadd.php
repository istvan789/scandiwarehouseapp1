

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="main.js"></script>
</head>
<body> 
             <header>
                <h1>Scandiweb Warehouse App</h1>
            </header>
           

        <form action="process-form.php" method="post">
            <nav>
                    <ul>
                        <li><a href="index.php" class="btn btn-primary">Go Back</a></li>,<li>
                            <a href="index.php" class="btn btn-primary">CANCEL</a></li>
                        </ul>
                        <br>
                <button>Add Product & SAVE</button>
            
            </nav>
            <br><br><br>
            <h1>Product ADD</h1>
                <hr>

                <div>
                <label for="sku">SKU</label>
                <input type="text" id="sku" name="sku"required>
                </div>
                <br>
                <div>
                <label for="name1">Name</label>
                <input type="text" id="name1" name="name1"required>
                </div>
                <br>
                <div>
                <label for="price">Price</label>
                <input type="text" id="price" name="price"required>
                </div>
                <table width="25%" cellspacing="8" cellpadding="8" bgcolor="gray">
                <td>
                <label for="category1">Select Category</label>
                <select name="category1" id="mySelect" onchange="changeDropdown(this.value);">
                <option value="SC" name="category">Select Category</option>
                <option value="DD" name="dvd">DVD</option>
                <option value="FT" name="furniture">Furniture</option>
                <option value="BK" name="book">Book</option>
                </select>
                
                <br>
                <div>
                <label for="size">Size(MB)</label>
                <input type="text" id="size" name="size">
                </div>
                <br>
                <div>
                <label for="height">Height</label>
                <input type="text" id="height" name="height">
                </div>
                <br>
                <div>
                <label for="width">Width</label>
                <input type="text" id="width" name="width">
                </div>
                <br>
                <div>
                <label for="length">Length</label>
                <input type="text" id="length" name="length"> 
                </div>
                <br>
                <div>
                <label for="weight">Weight</label>
                <input type="text" id="weight" name="weight">
                </div>
                </td>
                </table>

                <br>
                
                

        </form>





        









</body>


<br>
<footer>Copyright © istvancodes.com</footer>