<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .footer{
            margin-left:100px;
        }
        .container {
            padding: 20px;
        }
        
        .section-hidden {
            opacity: 0;
            transform: translateX(-100%);
        }
        
        .section-visible {
            opacity: 1;
            transform: translateX(0);
            transition: opacity 1s, transform 1s;
        }
        
        .text-white {
            color: #ffffff;
        }
        
        .header {
            margin-left: 588px;
        }
        .nav{
            margin-left: 500px;
        }
        .about{
            border-bottom: 3px solid #fff;
        }
    </style>
</head>

<body>
    <div id="header"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="section section-hidden">
                    <h2 class="text-white">Our Story</h2>
                    <p class="text-white">Welcome to M&MGYM, your premier destination for fitness and wellness. Founded in 2024, we have been dedicated to helping individuals achieve their fitness goals and lead healthier lifestyles.</p>
                    <p class="text-white">Our gym was born out of a passion for fitness and a desire to create a welcoming community where people of all fitness levels feel empowered to reach their full potential.</p>
                </div>
                <div class="section section-hidden">
                    <h2 class="text-white">Our Mission</h2>
                    <p class="text-white">At M&MGYM, our mission is to inspire and empower individuals to live healthier, happier lives through fitness and wellness. We strive to provide top-notch facilities, personalized training programs, and a supportive community to help
                        our members achieve their goals.</p>
                </div>
                <div class="section section-hidden">
                    <h2 class="text-white">Meet Our Team</h2>
                    <p class="text-white">Our team of experienced trainers and staff are here to support you on your fitness journey. With expertise in various fitness disciplines, we are dedicated to helping you succeed and thrive.</p>
                    <p class="text-white">Get to know our team:</p>
                    <ul class="text-white">
                        <li>El HiMDi Mohammed - Trainer of DD101</li>
                        <li>Khatib Maryam - Trainer of DD101</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        fetch('html/header.html')
            .then(response => response.text())
            .then(html => {
                document.getElementById('header').innerHTML = html;
            });
        $(document).ready(function() {
            $('.section').each(function(index) {
                var $this = $(this);
                setTimeout(function() {
                    $this.removeClass('section-hidden').addClass('section-visible');
                }, index * 1000);
            });
        });
    </script>
</body>

</html>