<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coaches</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Custom styles */
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #121212;
            padding-top: 50px;
            margin: 0;
            overflow-x: hidden;
        }
        
        h1 {
            font-weight: bold;
            color: #03a9f4;
            text-align: center;
            margin-bottom: 50px;
        }
        
        .coach-card {
            margin-bottom: 40px;
            border-radius: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #1e1e1e;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .coach-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }
        
        .card-img-top {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            height: 200px;
            object-fit: cover;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .card-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #03a9f4;
            margin-bottom: 15px;
        }
        
        .card-text {
            font-size: 1.1rem;
            color: #c4c4c4;
        }
        
        .container {
            padding-left: 15px;
            padding-right: 15px;
            position: relative;
            z-index: 1;
        }
        
        .glow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(3, 169, 244, 0.2) 0%, rgba(3, 169, 244, 0) 70%);
            z-index: -1;
            animation: glowEffect 3s infinite alternate;
        }
        
        @keyframes glowEffect {
            0% {
                transform: scale(1);
                opacity: 0.5;
            }
            100% {
                transform: scale(1.2);
                opacity: 1;
            }
        }
        
        .navbar-brand {
            font-weight: bold;
        }
        .loog{
            margin-left:-53.5px;
            margin-top:-40px;
        }
    </style>
</head>

<body>


    <div class="container">
    <a class="navbar-brand loog" href="home.php"><img src="img/LOGOA.png" alt=""width="120px" height="120px"></a><br>
        <a class="navbar-brand" href="service.php">Back to Service <==</a>

        <h1>Meet Our Coaches In The Salle</h1>
        <div class="row" id="coachesContainer">
        </div>
        <div class="glow"></div>
    </div>
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const coaches = [{
                name: "Coach NAME",
                photo: "coachtanjawi.jfif",
                description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum lorem nec nisi gravida, vel volutpat nulla venenatis."
            }, {
                name: "Coach NAME",
                photo: "coachtanjawi.jfif",
                description: "Pellentesque nec ex commodo, convallis mi eu, mattis felis. Cras eget nulla vel metus ullamcorper dictum."
            }, {
                name: "Coach NAME",
                photo: "coachtanjawi.jfif",
                description: "Pellentesque nec ex commodo, convallis mi eu, mattis felis. Cras eget nulla vel metus ullamcorper dictum."
            }, {
                name: "Coach NAME",
                photo: "coachtanjawi.jfif",
                description: "Pellentesque nec ex commodo, convallis mi eu, mattis felis. Cras eget nulla vel metus ullamcorper dictum."
            }, {
                name: "Coach NAME",
                photo: "coachtanjawi.jfif",
                description: "Pellentesque nec ex commodo, convallis mi eu, mattis felis. Cras eget nulla vel metus ullamcorper dictum."
            }, {
                name: "Coach NAME",
                photo: "coachtanjawi.jfif",
                description: "Pellentesque nec ex commodo, convallis mi eu, mattis felis. Cras eget nulla vel metus ullamcorper dictum."
            }, {
                name: "Coach NAME",
                photo: "coachtanjawi.jfif",
                description: "Pellentesque nec ex commodo, convallis mi eu, mattis felis. Cras eget nulla vel metus ullamcorper dictum."
            }, {
                name: "Coach NAME",
                photo: "coachtanjawi.jfif",
                description: "Pellentesque nec ex commodo, convallis mi eu, mattis felis. Cras eget nulla vel metus ullamcorper dictum."
            }, {
                name: "Coach NAME",
                photo: "coachtanjawi.jfif",
                description: "Pellentesque nec ex commodo, convallis mi eu, mattis felis. Cras eget nulla vel metus ullamcorper dictum."
            },

        ];

        function generateCoachCards() {
            const coachesContainer = document.getElementById('coachesContainer');
            coaches.forEach((coach, index) => {
                const card = `
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card coach-card">
                            <img src="${coach.photo}" class="card-img-top" alt="${coach.name}">
                            <div class="card-body">
                                <h5 class="card-title">${coach.name}</h5>
                                <p class="card-text">${coach.description}</p>
                            </div>
                        </div>
                    </div>
                `;
                coachesContainer.innerHTML += card;
            });
        }

        generateCoachCards();
    </script>
</body>

</html>