<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <?php include_once('process.php')?>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Edit Product</a>
            <button type="button" class="btn btn-outline-light">Go back</button>
        </div>
    </nav>
    <div class="container mt-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:10px; width:30%;">
        <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <br>
            <div class="mb-3">
                <label for="InputPhoto" class="form-label">Product Photo:</label>
                <input type="text" name="productPhoto" class="form-control" id="inputPhoto" placeholder=".png" value="<?php echo $productPhoto;?>">

                <div class="mb-3">
                    <label for="inputType" class="form-label">Product Type:</label>
                    <input type="text" name="productType" class="form-control" id="inputType" value="<?php echo $productType;?>">
                </div>

                <div class="mb-3">
                    <label for="inputDescription" class="form-label">Description:</label>
                    <input type="text" name="description" class="form-control" id="inputDescription" value="<?php echo $description;?>">
                </div>

                <div class="mb-3">
                    <label for="inputOrgPrice" class="form-label">Original Price:</label>
                    <input type="text" name="originalPrice" class="form-control" id="inputOrgPrice" value="<?php echo $originalPrice;?>">
                </div>

                <div class="mb-3">
                    <label for="inputPrice" class="form-label">Price:</label>
                    <input type="text" name="price" class="form-control" id="inputPrice" value="<?php echo $price;?>">
                </div>

                <div class="mb-3">
                    <label for="inputRating" class="form-label">Rating:</label>
                    <input type="text" name="rating" class="form-control" id="inputRating" value="<?php echo $rating;?>">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>
            <?php 
                if ($update == true):
            ?>
            <button type="submit" name="update" class="btn btn-info">Update</button>
            <?php endif;?>
        </form>
    </div>
</body>

</html>