<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <title>Product Entry</title>

    <style>
        .selector-for-some-widget {
            box-sizing: content-box;
        }

        #btn1 {
            float: right;
        }
    </style>
</head>

<body>
<?php require_once 'process.php';?>
<?php
    if(isset($_SESSION['message'])):?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    ?>
</div>
<?php endif ?>

<?php
    $mysqli = new mysqli('localhost', 'root', '', 'products') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM productEntry") or die($mysqli->error);
?>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Product Entry</a>
        </div>
    </nav>
    <br>
    <div class="container">
        <button type="button" class="btn btn-outline-dark" id="btn1" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Add New Products
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="InputPhoto" class="form-label">Product Photo</label>
                                <input type="text" name="productPhoto" class="form-control" id="inputPhoto" placeholder=".png" value="<?php echo $productPhoto;?>">

                                <div class="mb-3">
                                    <label for="inputType" class="form-label">Product Type</label>
                                    <input type="text" name="productType" class="form-control" id="inputType" value="<?php echo $productType;?>">
                                </div>

                                <div class="mb-3">
                                    <label for="inputDescription" class="form-label">Description</label>
                                    <input type="text" name="description" class="form-control" id="inputDescription"> value-"<?php echo $description;?>"
                                </div>

                                <div class="mb-3">
                                    <label for="inputOrgPrice" class="form-label">Original Price</label>
                                    <input type="text" name="originalPrice" class="form-control" id="inputOrgPrice" value="<?php echo $originalPrice;?>">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPrice" class="form-label">Price</label>
                                    <input type="text" name="price" class="form-control" id="inputPrice" value="<?php echo $price;?>">
                                </div>

                                <div class="mb-3">
                                    <label for="inputRating" class="form-label">Rating</label>
                                    <input type="text" name="rating" class="form-control" id="inputRating" value="<?php echo $rating;?>">
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Product_Id</th>
                    <th scope="col">ProductPhoto</th>
                    <th scope="col">productType</th>
                    <th scope="col">Description</th>
                    <th scope="col">Original Price</th>
                    <th scope="col">Price</th>
                    <th scope="col">Rating</th>
                    <th scope="action">Action</th>
                </tr>
            </thead>
           <?php    
                while ($row =   $result->fetch_assoc()):
           ?>
          <tr>
					<td>
						<?php echo $row['id']; ?>
					</td>
					<td>
						<?php echo $row['productPhoto']; ?>
					</td>
					<td>
						<?php echo $row['productType']; ?>
					</td>
					<td>
						<?php echo $row['description']; ?>
					</td>
                    <td>
						<?php echo $row['originalPrice']; ?>
					</td>
                    <td>
						<?php echo $row['price']; ?>
					</td>
                    <td>
						<?php echo $row['rating']; ?>
					</td>
                    
					<td>
                    <a href="index.php?edit=<?php echo $row['id'];?>"
                        class="btn btn-info">Edit</a>
                    <a href="process.php?delete=<?php echo $row['id']; ?>"
                        class="btn btn-danger">Delete</a>
					</td>		
				</tr>
          <?php endwhile;?>
        </table>
    </div>
    
</body>
</html>