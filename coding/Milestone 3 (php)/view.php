<?php

include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sixth-Degree</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>


<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="starter.php">Sixth-Degree</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="starter.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="setting.php">Setting</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">The View Page!</h1>
                <p class="lead mb-0">In this page you will be able to read more to view the posts made by users.</p>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <?php foreach ($query as $q) { ?>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $q['title']; ?></h2>
                            <p class="card-text"><?php echo $q['content']; ?></p>

                            <a class="btn btn-primary" href="edit.php?id=<?php echo $q['id'] ?>" name="edit">Edit</a>
                            <form method="POST">
                                <input type="text" hidden value='<?php echo $q['id'] ?>' name="id">
                                <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                            </form>

                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
        <a class="btn btn-primary" href="starter.php">Go Home</a>
    </div>

    <br>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>