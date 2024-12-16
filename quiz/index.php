<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #6a11cb, #2575fc);
            color: #fff;
            text-align: center;
            padding: 0;
            margin: 0;
        }
        .hero-section {
            padding: 100px 20px;
        }
        .btn-custom {
            background-color: #ffc107;
            color: #000;
            border: none;
        }
        .btn-custom:hover {
            background-color: #e0a800;
        }
        .features-section {
            background-color: #fff;
            color: #000;
            padding: 60px 20px;
        }
        .feature-card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        footer {
            padding: 20px;
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>

    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Quiz Master</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="hero-section">
        <h1>Welcome to Quiz Master</h1>
        <p class="lead">Test your knowledge and challenge your friends!</p>
        <div class="mt-4">
            <a href="quiz.html" class="btn btn-custom btn-lg">Start Quiz</a>
            <a href="#features" class="btn btn-outline-light btn-lg">Learn More</a>
        </div>
    </div>

    <div id="features" class="features-section">
        <div class="container">
            <h2 class="mb-4">Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">Engaging Quizzes</h5>
                            <p class="card-text">Explore a variety of topics with fun and interactive quizzes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">Leaderboard</h5>
                            <p class="card-text">Compete with others and climb to the top of the leaderboard!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">Personalized Dashboard</h5>
                            <p class="card-text">Track your progress and achievements in one place.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Quiz Master. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
