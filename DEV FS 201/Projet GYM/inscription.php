<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M&M GYM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa70;
            padding: 20px;
        }

        .nav {
            margin-right: 53px;
        }

        .header {
            margin-left: 88px;
        }

        .form-container {
            max-width: 450px;
            margin: 20px auto;
            background-color: #91919179;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(61, 61, 61, 0.226);
        }

        input,
        select {
            float: right;
        }

        #nom,
        #prenom,
        #region,
        #ville,
        #salle,
        #date,
        #email,
        #number {
            width: 250px;
            background-color: rgb(207, 196, 175);
        }

        label {
            color: rgba(218, 215, 215, 0.925);
        }

        input[type="date"] {
            width: 210px;
            float: right;
        }

        button {
            display: block;
            margin: 0 auto;
        }

        .inscription {
            border-bottom: 3px solid #fff;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        #header {
            margin-top: -30px;
        }

        /* Tablet view */
        @media (max-width: 992px) {
            .form-container {
                max-width: 600px;
                padding: 15px;
            }

            #nom,
            #prenom,
            #region,
            #ville,
            #salle,
            #date,
            #email,
            #number {
                width: 100%;
                float: none;
            }

            label {
                display: block;
                float: none;
                text-align: left;
            }
        }

        /* Mobile view */
        @media (max-width: 768px) {
            .form-container {
                max-width: 100%;
                padding: 10px;
            }

            #nom,
            #prenom,
            #region,
            #ville,
            #salle,
            #date,
            #email,
            #number {
                width: 100%;
                float: none;
            }

            label {
                display: block;
                float: none;
                text-align: left;
            }

            input[type="date"] {
                width: 100%;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div id="header"></div>
    <div class="container form-container">
        <form action="data.php" method='POST' id="form">
            <fieldset>
                <legend>Votre Information</legend>
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom Famille" required>
                    <div id="nomError" class="error"></div>
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom :</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" required>
                    <div id="prenomError" class="error"></div>
                </div>
                <div class="form-group">
                    <label for="region">Choisir une région :</label>
                    <select name='region' id="region" class="form-control" onchange="populateCities()" required>
                        <option value="">-- Sélectionnez une région --</option>
                        <option value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
                        <option value="Casablanca-Settat">Casablanca-Settat</option>
                        <option value="Fés-Meknés">Fés-Meknés</option>
                        <option value="Tanger-Tétouan">Tanger-Tétouan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ville">Choisir une ville :</label>
                    <select id="ville" name='ville' class="form-control" onchange="populateGyms()" required>
                        <option value="">-- Sélectionnez d'abord une région --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="salle">Choisir une salle :</label>
                    <select name='salle' id="salle" class="form-control" required>
                        <option value="">-- Sélectionnez d'abord une ville --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Date Naissance :</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                    <div id="dateError" class="error"></div>
                </div>
                <div class="form-group">
                    <label for="email">Entrer votre email :</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                    <div id="emailError" class="error"></div>
                </div>
                <div class="form-group">
                    <label for="number">Entrer votre Phone Number :</label>
                    <input type="number" class="form-control" id="number" name="number" placeholder="number" required>
                    <div id="numberError" class="error"></div>
                </div>
                <div id="error-message" class="error"></div>

                <center>
                    <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                </center>
            </fieldset>
        </form>
    </div>
    <?php include 'footer.php'; ?>

    <script>
        var citiesAndGyms = {
            "Rabat-Salé-Kénitra": {
                "": [],
                "Rabat": ["", "Salle Rabat 1", "Salle Rabat 2"],
                "Salé": ["", "Salle Salé 1", "Salle Salé 2"],
                "Kénitra": ["", "Salle Kénitra 1", "Salle Kénitra 2"]
            },
            "Casablanca-Settat": {
                "": [],
                "Casablanca": ["", "Salle Casablanca 1", "Salle Casablanca 2"],
                "Mohammédia": ["", "Salle Mohammédia 1", "Salle Mohammédia 2"],
                "Settat": ["", "Salle Settat 1", "Salle Settat 2"]
            },
            "Fés-Meknés": {
                "": [],
                "Fés": ["", "Salle Fés 1", "Salle Fés 2"],
                "Meknés": ["", "Salle Meknés 1", "Salle Meknés 2"]
            },
            "Tanger-Tétouan": {
                "": [],
                "Tanger": ["", "Salle Tanger 1", "Salle Tanger 2"],
                "Tétouan": ["", "Salle Tétouan 1", "Salle Tétouan 2"],
                "Martil": ["", "Salle Martil 1", "Salle Martil 2"]
            }
        };

        function populateCities() {
            var regionSelect = document.getElementById("region");
            var villeSelect = document.getElementById("ville");
            var selectedRegion = regionSelect.value;
            villeSelect.innerHTML = "";

            if (selectedRegion !== "") {
                var cities = Object.keys(citiesAndGyms[selectedRegion]);
                cities.forEach(function (city) {
                    var option = document.createElement("option");
                    option.text = city;
                    option.value = city;
                    villeSelect.add(option);
                });
            } else {
                var defaultOption = document.createElement("option");
                defaultOption.text = "-- Sélectionnez d'abord une région --";
                villeSelect.add(defaultOption);
            }
        }

        function populateGyms() {
            var regionSelect = document.getElementById("region");
            var villeSelect = document.getElementById("ville");
            var gymSelect = document.getElementById("salle");
            var selectedRegion = regionSelect.value;
            var selectedCity = villeSelect.value;
            gymSelect.innerHTML = "";

            if (selectedRegion !== "" && selectedCity !== "") {
                var gyms = citiesAndGyms[selectedRegion][selectedCity];
                gyms.forEach(function (gymName) {
                    var option = document.createElement("option");
                    option.text = gymName;
                    option.value = gymName;
                    gymSelect.add(option);
                });
            } else {
                var defaultOption = document.createElement("option");
                defaultOption.text = "-- Sélectionnez d'abord une ville --";
                gymSelect.add(defaultOption);
            }
        }

        function validateEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function validatePhoneNumber(number) {
            var phoneRegex = /^\d{10}$/;
            return phoneRegex.test(number);
        }

        function validateName(name) {
            return name.trim().length > 0;
        }

        function validateDate(date) {
            return !isNaN(Date.parse(date));
        }
    </script>
    <script>
        fetch('html/header.html')
            .then(response => response.text())
            .then(html => {
                document.getElementById('header').innerHTML = html;
            });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
