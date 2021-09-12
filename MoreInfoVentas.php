<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bienes Raices Haxa</title>
    <!-- Favicon-->
    <link rel="icon" href="images/logo.png">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Bienes Raices Haxa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutUs.php">Contactenos</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="ventas.php">Ventas</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="alquiler.php">Rentas</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="lotes.php">Lotes</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesion</a></li>
                </ul>
                <!-- <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form> -->
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5" style="background-color: #9D9D9D;">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Bienes Raices Haxa</h1>
                <p class="lead fw-normal text-white-50 mb-0">Bienvenidos</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <?php
    $idOk = false;
    $idVentasOk = false;

    if (isset($_GET['idVentas'])) {
        $idVentas = $_GET['idVentas'];
        $idVentasOk = true;
    }
    if ($idVentasOk) {
        $validacion = true;
        require_once 'consulta.php';
        $consulta = "SELECT * FROM ventas where idVentas=$idVentas";
        $query = consulta($consulta);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $imagen = $row["imagen"];
                $ubicacion = $row["ubicacion"];
                $descripcion = $row["descripcion"];
                $precio = $row["precio"];
            }
        } else {
            $validacion = false;
        }
    }

    ?>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-left">
                <div class="col mb-5">
                    <?php
                    echo '<img  height="300" src="data:image/jpeg;base64,' . base64_encode($imagen) . '"/>';
                    ?>
                    <?php
                    $price = "<strong><i> Precio: </i> </strong>";
                    $description = "<i> Descripcion: </i>";
                    ?>
                    <div>
                        <!-- Product name-->
                        <br />
                        <h5 class="fw-bolder"><?php echo $ubicacion ?></h5>
                        <!-- Product description -->
                        <h9><?php echo $description;
                            echo $descripcion ?></h9>
                        <!-- Product price-->
                        <p><?php echo $price;
                            echo "$";
                            echo $precio;  ?> </p>
                        <!-- <span class="text-muted text-decoration-line-through">$20.00</span> -->
                    </div>
                    <div>
                        <H6><strong>Importante!!!</strong></H6>
                        <p>Si desea encontrar su opcion ideal, comunicarse con:<br />
                            Brandon Zamora:(+506) 8370-6711<br />
                        </p>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div>
                            <br><button><a href="lotes.php"><em><u>Volver al inicio</u></em></a></button>
                        </div>
                    </div>

                </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">The Web Site created by Dennis Zamora Araya</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <!-- <script src="js/scripts.js"></script> -->
</body>

</html>