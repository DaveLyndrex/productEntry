<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="backup.css">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    
	<script type="text/javascript" src="script/bootbox.min.js"></script>
    <script type="text/javascript" src="script/deleteRecords.js"></script>
	<title>Admin Side</title>

</head>

<body>

<?php 
    include "process.php";
    //write the query to get data from users table
    $sql = "SELECT * FROM users";
    $result = $mysqli->query($sql);

?>
	
<div class="container-fluid px-2 px-md-4 py-5 mx-auto">
<h2>ADMIN</h2>
	</div>
        <div class="card card0 border-0">
		<div class="container-fluid py-5">
            <div class="row d-flex">
                <div class="col-lg-5">
                    <div class="card1 pb-5">
                        <div class="row">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
				<div class="container">
		<h3>Account Registered</h3>
		<table style="font-size:13px;" class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
    <?php
		if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>
				<tr>
					<td>
						<?php echo $row['user_id']; ?>
					</td>
					<td>
						<?php echo $row['firstname']; ?>
					</td>
					<td>
						<?php echo $row['lastname']; ?>
					</td>
					<td>
						<?php echo $row['email']; ?>
					</td>
					<td><a
							class="btn btn-danger btn-sm" name="delete" href="delete.php?id=<?php echo $row['user_id']; ?>">Delete</a></td>
				</tr>


				<?php		}
			}
		?>

			</tbody>
		</table>
	</div>
    </div>
        </div>
    </div>
	</div>
	<div class="footer">
	<div class="col-xl-12 col-lg-12 text-center text-lg-left"><hr>
                        <div style="height:40px;" class="copyright-text">
                            <p>Copyright &copy; 2021, All Right Reserved <a href="https://codepen.io/anupkumar92/">Anup</a></p>
                        </div>
                    </div>
	
</body>

</html>