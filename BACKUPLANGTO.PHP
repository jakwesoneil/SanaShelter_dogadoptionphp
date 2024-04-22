<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>SANAShelter</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Topbar and Navbar sections remain unchanged -->

    <!----DESIGN---->
    <main class="container mt-5">
        <h1 class="text-center mb-4">Featured Animals up for adoption</h1>
        <div class="row">
            <!-- Owl Carousel -->
            <div class="col-md-12">
                <div class="owl-carousel">
                    <?php
                    // Replace these with your actual database credentials
                    $db_name = "sanashelter";
                    $db_username = "root";
                    $db_pass = "";
                    $db_host = "localhost";

                    // Create a connection to the database
                    $con = new mysqli($db_host, $db_username, $db_pass, $db_name);

                    // Check the connection
                    if ($con->connect_error) {
                        die("Connection failed: " . $con->connect_error);
                    }

                    // Query to fetch data from the animals table
                    $sql_fetch_featured = "SELECT * FROM animals LIMIT 3";
                    $result_featured = $con->query($sql_fetch_featured);

                    // Display the data in the carousel
                    if ($result_featured->num_rows > 0) {
                        while ($row = $result_featured->fetch_assoc()) {
                            echo '<div class="item">';
                            echo '    <div class="card">';
                            echo '        <img src="' . $row['image_path'] . '" class="card-img-top" alt="' . $row['name'] . '">';
                            echo '        <div class="card-body">';
                            echo '            <h5 class="card-title">' . $row['name'] . '</h5>';
                            echo '            <p class="card-text">Species: ' . $row['species'] . '</p>';
                            echo '            <p class="card-text">Breed: ' . $row['breed'] . '</p>';
                            echo '            <button class="btn btn-primary" onclick="openAdoptionModal(\'' . $row['name'] . '\', \'' . $row['species'] . '\', \'' . $row['breed'] . '\', \'' . $row['description'] . '\')">Adopt Now</button>';
                            echo '        </div>';
                            echo '    </div>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <!------MAIN----->
    <main class="container mt-5">
        <h1 class="text-center mb-4">All Animals up for adoption</h1>
        <div class="row">
            <?php
            // Query to fetch data from the animals table
            $sql_fetch_all = "SELECT * FROM animals";
            $result_all = $con->query($sql_fetch_all);

            // Display the data in a table
            if ($result_all->num_rows > 0) {
                while ($row = $result_all->fetch_assoc()) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '    <div class="card">';
                    echo '        <img src="' . $row['image_path'] . '" class="card-img-top" alt="' . $row['name'] . '">';
                    echo '        <div class="card-body">';
                    echo '            <h5 class="card-title">' . $row['name'] . '</h5>';
                    echo '            <p class="card-text">Species: ' . $row['species'] . '</p>';
                    echo '            <p class="card-text">Breed: ' . $row['breed'] . '</p>';
                    echo '            <button class="btn btn-primary" onclick="openAdoptionModal(\'' . $row['name'] . '\', \'' . $row['species'] . '\', \'' . $row['breed'] . '\', \'' . $row['description'] . '\')">Adopt Now</button>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
            } else {
                echo "<p class='col-md-12'>No animals found.</p>";
            }

            // Close the connection
            $con->close();
            ?>
        </div>
    </main>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Saving Abused </span>And Neglected Animals</h1>
                <p class="m-0">Ipsum amet sed vero et lorem stet eos ut, labore sed sed stet sea est ipsum ut. Volup amet ea sanct ipsum, dolore vero lorem no duo eirmod. Eirmod amet ipsum no ipsum lorem clita ut. Ut sed sit lorem ea lorem sed, amet stet sit sea ea diam tempor kasd kasd. Diam nonumy etsit tempor ut sed diam sed et ea</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>San Jose, Baras, Philippines</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>0909 391 8007</p>
                        <p><i class="fa fa-envelope mr-2"></i>officialsanashelter@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://twitter.com/SANAShelter"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.facebook.com/OfficialSANAShelter"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.instagram.com/sana.shelter/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">SANAShelter</a>. All Rights Reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        function openAdoptionModal(name, species, breed, description) {
            document.getElementById('animalName').textContent = name;
            document.getElementById('animalSpecies').textContent = species;
            document.getElementById('animalBreed').textContent = breed;
            document.getElementById('animalDescription').textContent = description;

            // Show the first step of the adoption form and hide other steps
            $('.step').hide();
            $('.step.step1').show();

            $('#adoptionModal').modal('show');
        }

        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>

    
    <!-- Owl Carousel Initialization -->
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
</body>

</html>