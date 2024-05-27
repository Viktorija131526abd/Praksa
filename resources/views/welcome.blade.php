<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Student Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <img src="images/logoSkola.png" alt="School Logo" class="img-fluid" style="max-height: 75px;">
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="text-center py-5  text-primary">
    <div class="container">
        <h1 class="display-4">Welcome to the Student Management System.</h1>
        <p class="lead">The system for managing students, grades, and assignments.</p>
    </div>
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
</section>

<!-- Main Content -->
<main class="py-5">
    <div class="container">
        <!-- Features Section -->
        <section class="mb-5">
            <h2 class="text-center mb-4 text-primary">Our features:</h2>
            <div class="row text-center">
                <!-- Feature 1 -->
                <div class="col-md-4 mb-3">
                    <div class="card h-100 border-primary text-primary">
                        <div class="card-body">
                            <h5 class="card-title">Grade Tracking</h5>
                            <p class="card-text">Review and analyze student grades easily.</p>
                        </div>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-md-4 mb-3">
                    <div class="card h-100 border-primary text-primary">
                        <div class="card-body">
                            <h5 class="card-title">Assignment Management</h5>
                            <p class="card-text">Organize tasks and deadlines for students.</p>
                        </div>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-md-4 mb-3">
                    <div class="card h-100 border-primary text-primary">
                        <div class="card-body">
                            <h5 class="card-title">Communication</h5>
                            <p class="card-text">Facilitate communication between students and teachers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-5">
            <h2 class="text-center mb-4 text-primary">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header " id="headingOne">
                        <button class="accordion-button text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How to sign up?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body ">
                            To sign up, you need to contact the administrator to be added to the system. After that, enter the appropriate parameters and access your account.
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</main>

<!-- Footer -->
<footer class="text-center py-4 bg-primary text-white">
    <div class="container">
        <p>© <?php echo date('Y');?> Student Management System</p>
    </div>
</footer>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
