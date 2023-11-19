<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Menu</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="uniform.css" />
    <link rel="stylesheet" href="css/select2.css" />
    <link rel="stylesheet" href="css/matrix-style.css" />
    <link rel="stylesheet" href="css/matrix-media.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    <style>
    /* Add your custom styles here */

    body {
        font-family: 'Open Sans', sans-serif;
        background: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    #header {
        background: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
    }

    /* The side navigation menu */
    .sidenav {
        height: 100%;
        /* 100% Full-height */
        width: 0;
        /* 0 width - change this with JavaScript */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Stay on top */
        top: 0;
        /* Stay at the top */
        left: 0;
        background-color: #111;
        /* Black*/
        overflow-x: hidden;
        /* Disable horizontal scroll */
        padding-top: 60px;
        /* Place content 60px from the top */
        transition: 0.5s;
        /* 0.5 second transition effect to slide in the sidenav */
    }

    /* The navigation menu links */
    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover {
        color: #f1f1f1;
    }

    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
        transition: margin-left .5s;
        padding: 20px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    #content {
        padding: 20px;
    }

    /* Add more styles as needed */

    .widget-box {
        margin-top: 20px;
    }

    .widget-title {
        background: #333;
        color: #fff;
        padding: 10px;
    }

    .widget-content {
        background: #fff;
        padding: 20px;
        border: 1px solid #ddd;
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
    }

    .table th,
    .table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #f5f5f5;
    }

    .btn-success {
        background-color: #5bc0de;
        color: #fff;
    }

    .btn-success:hover {
        background-color: #31b0d5;
    }
    </style>
</head>

<body>

    <!--Header-part-->
    <div id="header">
        <h1><a href="login.html">Admin Menu</a></h1>
    </div>
    <!--close-Header-part-->

    <!--top-Header-menu-->
    <div id="MySidenav" class="sidenav">
        <ul class="nav">
            <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
        </ul>
    </div>


    <!--sidebar-menu-->

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="admin.php">New User</a>
        <a href="order.php">Customer Order</a>
        <a href="menu.php">Add New Menu
            <a href="index.html">Log Out</a>
    </div>


    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>


    <div id="content">
        <div id="content-header">
            <h1>New User</h1>
        </div>

        <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "loginuser";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (! $conn){
		die("Connection failed :" . mysqli_connect_error());
	} ?>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>New User</h5>
                        </div>

                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>password</th>
                                    </tr>
                                </thead>
                                <?php 
				
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		$query = "SELECT firstname, lastname, username, email, address, password  FROM register";
		$result = mysqli_query($conn, $query);
		
				?>

                                <tbody>
                                    <tr>
                                        <?php
					if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
					?>
                                        <td><?php echo $row["firstname"];?></td>
                                        <td><?php echo $row["lastname"];?></td>
                                        <td><?php echo $row["username"];?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td><?php echo $row["address"]; ?></td>
                                        <td><?php echo $row["password"]; ?></td>


                                    </tr>
                                    <?php } ?>
                                    <?php }  else { 
				  ?> <strong>
                                        <h1 align="center"> <?php echo "0 results"; ?> </h1>
                                    </strong>
                                    <?php	} ?>

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <?php 
				
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		$query = "SELECT firstname, lastname, username, email, address, password  FROM register";
		$result = mysqli_query($conn, $query);
		
			if(mysqli_num_rows($result) > 0){?>
        </div>

        <?php }?>
    </div>


    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2023 &copy; Bakery.</div>
    </div>
    <!--end-Footer-part-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.ui.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.uniform.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/matrix.js"></script>
    <script src="js/matrix.tables.js"></script>
</body>

</html>