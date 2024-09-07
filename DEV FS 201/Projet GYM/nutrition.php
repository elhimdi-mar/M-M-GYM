<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Gym - Workout Programs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #58585875;
            color: #333;
        }
        
        .navbar-brand {
            font-weight: bold;
        }
        
        .navbar-nav .nav-link {
            color: white;
            font-size: 15px;
        }
        
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        
        .section {
            padding: 80px 0;
            background-color: #302f2f2f;
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .content-text {
            padding: 20px;
        }
        
        @media (max-width: 768px) {
            .section {
                padding: 60px 0;
            }
            .video-container {
                padding-bottom: 75%;
            }
        }
        
        .section11 {
            margin-left: 720px;
        }
        
        .nav {
            position: fixed;
            width: 100%;
            z-index: 1000;
            background-color: rgb(248, 248, 248);
        }
    </style>
</head>

<body>

    <div class="nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a href="service.php" class="navbar-brand">back to service <=</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link section11" href="#section1">Program 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section2">Program 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section3">Program 3</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="section1" class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID_1" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 content-text">
                    <h2>Program 1: Weight Loss Workout</h2>
                    <p>This video demonstrates a comprehensive weight loss workout program designed to help you burn fat effectively.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="section2" class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 content-text order-md-1">
                    <h2>Program 2: Muscle Gain Workout</h2>
                    <p>This video showcases a muscle gain workout program focused on building lean muscle mass and strength.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="section3" class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID_3" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 content-text">
                    <h2>Program 3: Strength Training</h2>
                    <p>This video highlights a strength training program designed to help you improve overall strength and endurance.</p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>