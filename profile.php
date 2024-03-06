<?php
include("vendor/autoload.php");

use Helpers\Auth;

$auth = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4" style="max-width: 800px;">
        <h1 class="h3">Profile</h1>

        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning">Unable to upload</div>
        <?php endif ?>

        <?php if ($auth->photo) : ?>
            <img src="_actions/photos/<?= $auth->photo ?>" alt="" width="300" class="img-thumbnail">
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data" class="input-group my-4">
            <input type="file" name="photo" class="form-control">
            <button class="btn btn-secondary">Upload</button>
        </form>

        <ul class="list-group mt-3 mb-2">
            <li class="list-group-item"><b>Name: </b> <?= $auth->name ?></li>
            <li class="list-group-item"><b>Email: </b> <?= $auth->email ?></li>
            <li class="list-group-item"><b>Phone: </b> <?= $auth->phone ?></li>
            <li class="list-group-item"><b>Address: </b> <?= $auth->address ?></li>
        </ul>

        <a href="_actions/logout.php" class="text-danger">Logout</a>
        <a href="admin.php">Admin</a>
    </div>
</body>

</html>
