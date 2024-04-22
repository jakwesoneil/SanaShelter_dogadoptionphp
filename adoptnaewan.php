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

    <style>
        /* Additional CSS for picture layout */
        .card {
            height: 600px; /* Set the height of the card to accommodate the image and content */
        }

        .card-img-top {
            max-width: 100%; /* Ensure the image doesn't exceed the card's width */
            max-height: 400px; /* Set the maximum height of the image */
            margin: 0 auto; /* Center the image horizontally within the card */
            object-fit: cover; /* Maintain the image aspect ratio and cover the entire card */
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .btn {
            align-self: center; /* Center the button within the card body */
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Saving Abused </span>and Neglected Animals</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
            
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email Us</h6>
                        <p class="m-0">Officialsanashelter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Topbar End -->


       <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="loggedhome.php" class="nav-item nav-link active">Home</a>
                    <a href="eventsnews.php" class="nav-item nav-link">Events and News</a>
                    <a href="adoptionportal.php" class="nav-item nav-link">Adoption Portal</a>
                    <a href="donationdrive.php" class="nav-item nav-link">Donation Drive</a>
                    <a href="howtohelp.php" class="nav-item nav-link">How To Help</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="missionvision.php" class="dropdown-item">Mission and Vision</a>
                            <a href="stories.php" class="dropdown-item">Success Stories</a>
							<a href="faq.php" class="dropdown-item">FAQ</a>
                        </div>
                    </div>
                </div>
                <a href="logout.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Logout</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!----DESIGN---->
    <main class="container mt-5">
        <h1 class="text-center mb-4">Featured Animals up for adoption</h1>
        <div class="row">
            <!-- Owl Carousel -->
            <div class="col-md-12">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="card">
                            <img src="img/adoptionportal-1.jpg" class="card-img-top" alt="Animal 1" style="width: 500px; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title">Bonnie</h5>
                                <p class="card-text">Species: Dog</p>
                                <p class="card-text">Breed: Beagador</p>
                                <button class="btn btn-primary" onclick="openAdoptionModal('Bonnie', 'Dog', 'Beagador', 'golden brown')">Adopt Now</button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more animal listings here -->
                    <div class="item">
                        <div class="card">
                            <img src="img/adoptionportal-2.jpg" class="card-img-top" alt="Animal 2" style="width: 500px; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title">Gima</h5>
                                <p class="card-text">Species: Dog</p>
                                <p class="card-text">Breed: Jack Russell Terrier</p>
                                <button class="btn btn-primary" onclick="openAdoptionModal('Gima', 'Dog', 'Jack Rusell Terrier', 'white with golden brown spots')">Adopt Now</button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more animal listings here -->
                    <div class="item">
                        <div class="card">
                            <img src="img/adoptionportal-3.jpg" class="card-img-top" alt="Animal 3" style="width: 500px; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title">Puti</h5>
                                <p class="card-text">Species: Dog</p>
                                <p class="card-text">Breed: Aspin</p>
                                <button class="btn btn-primary" onclick="openAdoptionModal('Puti', 'Dog', 'Aspin', 'white')">Adopt Now</button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more animal listings here -->
                    <div class="item">
                        <div class="card">
                            <img src="img/adoptionportal-4.jpg" class="card-img-top" alt="Animal 4" style="width: 500px; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title">Tres</h5>
                                <p class="card-text">Species: Dog</p>
                                <p class="card-text">Breed: Aspin</p>
                                <button class="btn btn-primary" onclick="openAdoptionModal('Tres', 'Dog', 'Aspin', 'golden brown with black spots')">Adopt Now</button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more animal listings here -->
                    <div class="item">
                        <div class="card">
                            <img src="img/adoptionportal-5.jpg" class="card-img-top" alt="Animal 5" style="width: 500px; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title">Casper</h5>
                                <p class="card-text">Species: Dog</p>
                                <p class="card-text">Breed: Greyhound</p>
                                <button class="btn btn-primary" onclick="openAdoptionModal('Casper', 'Dog', 'Greyhound', 'white with black spots')">Adopt Now</button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more animal listings here -->
                    <div class="item">
                        <div class="card">
                            <img src="img/adoptionportal-6.jpg" class="card-img-top" alt="Animal 6" style="width: 500px; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title">Victor</h5>
                                <p class="card-text">Species: Dog</p>
                                <p class="card-text">Breed: Aspin</p>
                                <button class="btn btn-primary" onclick="openAdoptionModal('Victor', 'Dog', 'Aspin', 'White with black spots')">Adopt Now</button>
                            </div>
                        </div>
                    </div>
                     <!-- Add more animal listings here -->
                    <div class="item">
                        <div class="card">
                            <img src="img/adoptionportal-7.jpg" class="card-img-top" alt="Animal 7" style="width: 500px; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title">Miming</h5>
                                <p class="card-text">Species: Cat</p>
                                <p class="card-text">Breed: Polydactyl</p>
                                <button class="btn btn-primary" onclick="openAdoptionModal('Miming', 'Dog', 'Polydactyl', 'golden brown with white colors')">Adopt Now</button>
                            </div>
                        </div>
                    </div>
                     <!-- Add more animal listings here -->
                    <div class="item">
                        <div class="card">
                            <img src="img/adoptionportal-8.png" class="card-img-top" alt="Animal 8" style="width: 500px; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title">Grace</h5>
                                <p class="card-text">Species: Dog</p>
                                <p class="card-text">Breed: Labrador Retriever</p>
                                <button class="btn btn-primary" onclick="openAdoptionModal('Grace', 'Dog', 'Labrador Retriever', 'black and white')">Adopt Now</button>
                            </div>
                        </div>
                    </div>
                     <!-- Add more animal listings here -->
                    <div class="item">
                        <div class="card">
                            <img src="img/adoptionportal-9.jpg" class="card-img-top" alt="Animal 9" style="width: 500px; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title">Kaira</h5>
                                <p class="card-text">Species: Dog</p>
                                <p class="card-text">Breed: Aspin</p>
                                <button class="btn btn-primary" onclick="openAdoptionModal('Kaira', 'Dog', 'Aspin', 'white')">Adopt Now</button>
                            </div>
                        </div>
                    </div>
                     <!-- Add more animal listings here -->
                    <div class="item">
                        <div class="card">
                            <img src="img/adoptionportal-10.jpg" class="card-img-top" alt="Animal 10" style="width: 500px; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title">Cookies</h5>
                                <p class="card-text">Species: Dog</p>
                                <p class="card-text">Breed: Australian Kelpie</p>
                                <button class="btn btn-primary" onclick="openAdoptionModal('Cookies', 'Dog', 'Labrador', 'brown')">Adopt Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Adoption Modal -->
    <div class="modal fade" id="adoptionModal" tabindex="-1" role="dialog" aria-labelledby="adoptionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adoptionModalLabel">Adoption Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Adoption Form -->
                    <form id="adoptForm" method="post" action="adoptionportal.php">
                        <input type="hidden" id="animalName" name="animalName">
                        <input type="hidden" id="animalSpecies" name="animalSpecies">
                        <input type="hidden" id="animalBreed" name="animalBreed">
                        <input type="hidden" id="animalDescription" name="animalDescription"> 
                        <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <!-- Other form fields... -->
                        <!-- ... -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <main class="container mt-5">
    <h1 class="text-center mb-4">All Animals up for adoption</h1>
    <div class="row">
        <?php include('fetch_animals.php'); ?>
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

    

</script>

</body>

</html>