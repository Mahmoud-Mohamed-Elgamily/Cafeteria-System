<?php
require_once("../config.php");

// if (isset($_SESSION['role'])){
//     if ($_SESSION['role'] != 'admin')
//     header("Location:./DisplayOrders.php");
// }else{
//     header("Location:./");
// }
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="../Public/css/style.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="DisplayOrdersAdmin.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="addProduct.php">Add Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listProduct.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addUser.php">Add User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usersList.php">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addOrderManually.php">Manual Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="checks.php">Checks</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <img src="https://via.placeholder.com/50.png/09f/fff" alt="">
            <h3>Admin</h3>
        </form>
        <a class="btn btn-danger ml-2" href="../Controller/logout.php"> Log Out </a>
    </div>
</nav>