<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services de la salle de gym</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            padding-left: 120px;
    font-family: Arial, sans-serif;
    float: right;
    background-image: url(./bg.jpg);
    background-color: black;
    background-blend-mode: multiply;
    background-repeat: no-repeat;
    background-size: 1400px 700px;
}

.services {
            border-bottom: 3px solid #fff;
        }

        .container {
            max-width: 960px;
            margin: auto;
        }

        .trainer-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 20px;
            height: 350px;
        }

        .trainer-img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        @media (max-width: 576px) {
            .trainer-img {
                max-width: 100%;
            }
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #8c8c8c;
        }

        .service {
            text-align: center;
            margin-bottom: 50px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #4b444486;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .service h3 {
            color: #ffffffc4;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .service p {
            color: #666;
            line-height: 1.5;
            margin-bottom: 20px;
        }



        .bttn {
            box-shadow: none;
        }

        .image-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        figure {
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        figcaption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            text-align: center;
            color: #fff;
            margin: 0;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        figure:hover figcaption {
            opacity: 1;
        }

        figure img {
            margin-bottom: 0;
            transition: transform 0.3s ease;
        }

        figure:hover img {
            transform: scale(1.1);
        }

        h4 {
            margin-top: 10px;
            color: #a0c9ff86;
        }

        .bttn {
            color: #00e8f0;
            font-style: none;
            transition: background-color 0.3s ease;


        }

        .bttn:hover {
            color: aliceblue;
        }

        .navi {
            margin-left: -350px;
            margin-top: 50px;
        }

        .immg1 {
            border-radius: 5%;
        }

        .immg2 {
            border-radius: 50%;
            margin-left: 1000px;
            border: #000000 ridge 3px;
            margin-top: -200px;
        }

        i {
            margin-left: 1000px;
        }

        #u {
            border-radius: 50%;
            margin-top: 140px;
        }

        figure {
            border-radius: 5%;
        }
.ul {
            list-style: none;
        }
                
        .margin{
            margin-left: 380px;
        }
        .o{
            margin-left: 88px;
        }
    </style>
    <link rel="stylesheet" href="style/stylehead.css">

</head>

<body>
    <div id="header" class="margin"></div>
    
    <div class="container">

        <div class="service" id="service1">
            <h3>Entraînement Personnel</h3>
            <p>Nos entraîneurs personnels qualifiés sont là pour vous aider à atteindre vos objectifs de remise en
                forme.</p>
            <div class="container mt-5">

                <div class="row">
                    <div class="col-md-3">
                        <div class="trainer-card">
                            <a href="coach fesmeknes.php">
                                <img src=" img/coach12.webp " alt="Coach 1 " class="trainer-img "
                                    onclick="window.location.href='coach fesmeknes.php' ; ">
                            </a>
                            <h4>Coaches Fés-Méknes</h4>
                            <p>Click sur la photo pour Visite tout les coach de Fés-Méknes</p>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="trainer-card ">
                            <a href="coach casa stat.php">
                                <img src="img/coachcasablanca.jpg " alt="Coach 2 " class="trainer-img "
                                    onclick="window.location.href='coach casa stat.php' ; ">
                            </a>
                            <h4>Coaches Casablanca-Settat</h4>
                            <p>Click sur la photo pour Visite tout les coach de Casablanca-Settat</p>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="trainer-card ">
                            <a href="coach rabat salle.php">
                                <img src="img/coach16.avif " alt="Coach 3 " class="trainer-img "
                                    onclick="window.location.href='coach rabat salle.php' ; ">
                            </a>
                            <h4>Coaches Rabat-Salé-Kénitra</h4>
                            <p>Click sur la photo pour Visite tout les coach de Rabat-Salé-Kénitra</p>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="trainer-card ">
                            <a href="coach tanger tetouan.php">
                                <img src="img/coachtangertetouan.jpg " alt="Coach 4 " class="trainer-img "
                                    onclick="window.location.href='coach tanger tetouan.php' ; ">
                            </a>
                            <h4>Coaches Tanger-Tétouan</h4>
                            <p>Click sur la photo pour Visite tout les coach de Tanger-Tétouan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service " id="service3 ">
                <h3>Équipements de Pointe</h3>
                <p>Nous fournissons une large gamme d'équipements modernes pour répondre à tous vos besoins en matière
                    d'exercice.</p>
                <div>
                    <nav class="navi">
                        <img class="immg1" src="img/image1.jpg" alt="" width="500px" height="200px">
                        <div><a href="img/video.jpg"><img class="immg2" src="img/video.jpg" alt="" width="100px"
                                    height="100px"><br>
                                <i> Watch The Full Video </i>
                            </a></div>
                    </nav>
                </div><br>
            </div>

            <div class="service " id="service4 ">
                <h3>Programmes de Nutrition</h3>
                <p>Nos experts en nutrition peuvent vous aider à élaborer un plan alimentaire personnalisé pour
                    optimiser vos résultats.</p>
                <div class="image-container ">
                    <figure>
                        <img id="ara" src="img/tdkhim.webp " alt=" " height="250px " width="300px ">
                        <figcaption>PRENDRE DU MUSCLE</figcaption>
                    </figure>
                    <a href="nutrition.php "><img src="img/download1.png" id="u" alt="" width="100px"
                            height="100px"></a>
                    <figure>
                        <img id="ara" src="img/tnchaf.jpg " alt=" " height="250px " width="300px ">
                        <figcaption>PERDRE DU GRAS</figcaption>
                    </figure>
                </div>
                <h6 class="bttn ">See The Other Programmes <br> Here</h6>
            </div>
        </div>
    <?php include 'footer.php'; ?>

        <script>
        fetch('html/header.html')
            .then(response => response.text())
            .then(html => {
                document.getElementById('header').innerHTML = html;
            });</script>
        <script>
            const services = document.querySelectorAll('.service');

            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.2
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            services.forEach(service => {
                observer.observe(service);
            });

        </script>
</body>

</html>