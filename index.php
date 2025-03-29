<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriConnect - Contract Based Farming Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">AgriConnect</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how-it-works">How It Works</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-success text-white px-4" href="register.php">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold">Connect, Grow, and Prosper Together</h1>
                    <p class="lead">Join our platform where farmers and buyers collaborate for sustainable agriculture through contract farming.</p>
                    <div class="hero-buttons">
                        <a href="register.php" class="btn btn-primary btn-lg me-3">Join as Farmer</a>
                        <a href="register.php" class="btn btn-outline-primary btn-lg">Join as Buyer</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/hero-image.jpg" alt="Farming illustration" class="img-fluid">
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose AgriConnect?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <i class="fas fa-handshake fa-3x mb-3 text-primary"></i>
                        <h3>Secure Contracts</h3>
                        <p>Transparent and secure contract management between farmers and buyers.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <i class="fas fa-money-bill-wave fa-3x mb-3 text-primary"></i>
                        <h3>Fair Pricing</h3>
                        <p>Get the best market prices and secure payments for your produce.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <i class="fas fa-comments fa-3x mb-3 text-primary"></i>
                        <h3>Direct Communication</h3>
                        <p>Real-time chat between farmers and buyers for better collaboration.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">How It Works</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="step-card text-center">
                        <div class="step-number">1</div>
                        <h4>Sign Up</h4>
                        <p>Create your account as a farmer or buyer</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-card text-center">
                        <div class="step-number">2</div>
                        <h4>Connect</h4>
                        <p>Find potential partners and discuss terms</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-card text-center">
                        <div class="step-number">3</div>
                        <h4>Contract</h4>
                        <p>Create and manage farming contracts</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-card text-center">
                        <div class="step-number">4</div>
                        <h4>Grow</h4>
                        <p>Fulfill contracts and grow your business</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>AgriConnect</h5>
                    <p>Connecting farmers and buyers for a sustainable future.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#features">Features</a></li>
                        <li><a href="#how-it-works">How It Works</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Sign Up</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: support@agriconnect.com</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>